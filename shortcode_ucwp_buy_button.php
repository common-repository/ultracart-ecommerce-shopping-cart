<?php

// Protect the plugin from direct request
if (!defined('ABSPATH')) exit;

require_once UCWP_PLUGIN_PATH . 'vendor/autoload.php';

add_shortcode('uc_buy_button', 'ucwp_buy_button');

function ucwp_buy_button($attr) {
    // Fetch the item id attribute
    $itemId = isset($attr['itemid']) ?  ucwp_convert_smart_quotes(trim($attr['itemid'])) : null;
    $currencyConversion =
        isset($attr['currency_conversion']) && trim($attr['currency_conversion']) != "" ?
            trim($attr["currency_conversion"]) :
            "";

    // immediate_checkout should default to (string) "false", and only be "true" if set to true
    $immediate_checkout = isset($attr['immediate_checkout']) && $attr['immediate_checkout'] == "true" ? "true" : "false";

    // Make sure it was specified
    if (is_null($itemId) || $itemId == '') {
        return "<span>Please specify itemid attribute to ucwp_buy_button shortcode.</span>";
    }
//    $itemId = strtoupper($itemId);

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
    ob_start();
    include UCWP_PLUGIN_PATH . 'templates/ucwp_buy_button.php';
    return ob_get_clean();
}

?>
