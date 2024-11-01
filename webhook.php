<?php

// Protect the plugin from direct request
if (!defined('ABSPATH')) exit;

add_action('wp_ajax_nopriv_ucwp_webhook', 'ucwp_webhook');
add_action('wp_ajax_ucwp_webhook', 'ucwp_webhook');

function ucwp_webhook()
{
    // If the Apache is not handling authorization headers, then parse out the information from our X header.
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        if (isset($_SERVER["HTTP_X_AUTHORIZATION_BASIC"])) {
            list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) =
                explode(':', base64_decode($_SERVER["HTTP_X_AUTHORIZATION_BASIC"]));
        }
    }

    // Validate the credentials - http://php.net/manual/en/features.http-auth.php
    if (!isset($_SERVER['PHP_AUTH_USER'])) {
        header('WWW-Authenticate: Basic realm="UCWP"');
        header('HTTP/1.0 401 Unauthorized');
        die('Authentication credentials must match the Settings -&gt; UltraCart -&gt; Webhook within Wordpress. (Authorization Header Missing)');
    } else {
        // Do they match the options that we've configured for the plugin?
        $basicUsername = get_option('ucwp_plugin_basic_username');
        $basicPassword = get_option('ucwp_plugin_basic_password');

        if ($basicUsername != $_SERVER['PHP_AUTH_USER'] || $basicPassword != $_SERVER['PHP_AUTH_PW']) {
            header('WWW-Authenticate: Basic realm="UCWP"');
            header('HTTP/1.0 401 Unauthorized');

            die('Authentication credentials must match the Settings -&gt; UltraCart -&gt; Webhook within Wordpress.');
        }
    }

    // Read the JSON from the body and prove that we can parse it.
    $data = json_decode(file_get_contents('php://input'), false);

    foreach ($data->events as $event) {
        unset($item);

        if (isset($event->item_update)) {
            $item = $event->item_update;
            ucwp_insert_update_item($item->merchant_item_oid, $item->merchant_item_id, $item->description, json_encode($item, JSON_PRETTY_PRINT));
        } else if (isset($event->item_delete)) {
            $item = $event->item_delete;
            ucwp_delete_item($item->merchant_item_oid);
        } else if (isset($event->item_create)) {
            $item = $event->item_create;
            ucwp_insert_update_item($item->merchant_item_oid, $item->merchant_item_id, $item->description, json_encode($item, JSON_PRETTY_PRINT));
        }
    }

    die("WP items table updated.");
}

function ucwp_insert_update_item($merchant_item_oid, $merchant_item_id, $description, $json)
{
    $merchant_item_id = strtoupper($merchant_item_id);

    // Fetch the row from the database.
    global $wpdb;

    $wpdb->ucwp_item = $wpdb->prefix . 'ucwp_items';

    // Does the record exist?
    $sql = "SELECT * from $wpdb->ucwp_item WHERE merchant_item_oid = %d";
    $safe_sql = $wpdb->prepare($sql, $merchant_item_oid);
    $rows = $wpdb->get_results($safe_sql);

    // Insert
    if (count($rows) == 0) {
        $wpdb->insert(
            $wpdb->ucwp_item,
            array(
                'merchant_item_oid' => $merchant_item_oid,
                'merchant_item_id' => $merchant_item_id,
                'description' => $description,
                'json' => $json
            ),
            array(
                '%d',
                '%s',
                '%s',
                '%s'
            )
        );
    } else {
        // Update
        $wpdb->update(
            $wpdb->ucwp_item,
            array(
                'merchant_item_id' => $merchant_item_id,
                'description' => $description,
                'json' => $json
            ),
            array(
                'merchant_item_oid' => $merchant_item_oid
            ),
            array(
                '%s',    // merchant_item_id
                '%s',   // description
                '%s'    // json
            ),
            array('%d') // merchant_item_oid
        );
    }
}

function ucwp_delete_item($merchant_item_oid)
{
    // Fetch the row from the database.
    global $wpdb;

    $wpdb->ucwp_item = $wpdb->prefix . 'ucwp_items';

    $wpdb->delete(
        $wpdb->ucwp_item,
        array(
            'merchant_item_oid' => $merchant_item_oid
        ),
        array(
            '%d'
        )
    );
}

?>