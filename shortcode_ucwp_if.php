<?php

// Protect the plugin from direct request
if (!defined('ABSPATH')) exit;

require_once UCWP_PLUGIN_PATH . 'vendor/autoload.php';

add_shortcode('uc_if', 'ucwp_if');

function ucwp_if($attr, $content = null) {
    // Fetch the item id attribute
    $attr = ucwp_normalize_empty_atts($attr);

    $itemId = isset($attr['itemid']) ? ucwp_convert_smart_quotes(trim($attr['itemid'])) : null;
    $kit = isset($attr['kit']);
    $orderable = isset($attr['orderable']);
    $not = isset($attr['not']);

    // Make sure it was specified
    if (is_null($itemId) || $itemId == '') {
        return "<span>Please specify itemid attribute to ucwp_item shortcode.</span>";
    }

    //TODO: Test caching with a persistent cache plugin.  Expect all caches to miss until then.
    $cache_key = strtoupper($itemId);

    $item = wp_cache_get($cache_key, 'ucwp');

    if ( empty($item) ) {
        // Fetch the row from the database.
        global $wpdb;

        $wpdb->ucwp_item = $wpdb->prefix . 'ucwp_items';

        $sql = "SELECT * from $wpdb->ucwp_item WHERE merchant_item_id = %s";

        $safe_sql = $wpdb->prepare($sql, $itemId);

        $rows = $wpdb->get_results($safe_sql);

        // If it doesn't exist, return a message.
        if (count($rows) == 0) {
            return "<span>Item " . esc_html($itemId) . " not found.</span>";
        }

        /*
         * DEV NOTE:
         * Due to the fact that PHP does not support unicode characters and generally sucks, we ran into a situation
         * where we had 2000 unicode characters, but that translated into 2038 bytes on the PHP side and blew up during
         * validation.  So before we deserialize, we need to parse the JSON and trim the lengths of title/description
         * and extended description to be under 2000 characters.
         * */

        // Decode the json row and trim the description
        $json_decoded_item = ucwp_safe_trim_descriptions(json_decode($rows[0]->json));

        $item = ucwp_deserialize_item_json($json_decoded_item);

        wp_cache_set($cache_key, $item, 'ucwp');
    }

    // Load the template
    if(is_null($item['kit'])) {
        $item['kit'] = false;
    }

    $showOutput = false;
    if($not) {
        if($kit && !$item['kit']) {
            $showOutput = true;
        }
        if($orderable && !ucwp_isOrderable($item)) {
            $showOutput = true;
        }
    } else {
        if($kit && $item['kit']) {
            $showOutput = true;
        }
        if($orderable && ucwp_isOrderable($item)) {
            $showOutput = true;
        }
    }

    $out = '';
    if($showOutput) {
        $out = do_shortcode($content);
    }

    return $out;
}

?>