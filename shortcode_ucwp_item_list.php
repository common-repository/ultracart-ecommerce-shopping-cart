<?php

// Protect the plugin from direct request
if (!defined('ABSPATH')) exit;

require_once UCWP_PLUGIN_PATH . 'vendor/autoload.php';
//require_once UCWP_PLUGIN_PATH . 'relationships.php';

add_shortcode('ucitem_list', 'ucwp_item_list');

//wp_enqueue_script( "ucwp-js", UCWP_PLUGIN_URL . "assets/js/uc-wp.js", array("jquery"), "v1", true );
//wp_localize_script('ucwp-js', 'WP_UCWP', array(
//    'ucwpDirUrl' => UCWP_PLUGIN_URL,
//));

//wp_enqueue_style( "ucwp-css", UCWP_PLUGIN_URL . "assets/css/uc-wp.css", array(), "v1", "all" );


function ucwp_item_list($attr) {
    // Fetch the item id attribute
    $itemids = isset($attr['itemids']) ? ucwp_convert_smart_quotes($attr['itemids']) : null;
    $currencyConversion =
        isset($attr['currency_conversion']) && trim($attr['currency_conversion']) != "" ?
            trim($attr["currency_conversion"]) :
            "";

    // Make sure it was specified
    if (is_null($itemids) || $itemids == '') {
        return "<span>Please specify itemids attribute to ucwp_item_list shortcode.</span>";
    }

    // Convert to array, and trim each element
    $itemid_arr = array_map('trim', explode(',', $itemids));


    // Fetch the row from the database.
    global $wpdb;

    $wpdb->ucwp_item = $wpdb->prefix . 'ucwp_items';

    // Mysql string with placeholder array haystack for the IN operation.  See prepare_in().
    $sql = "SELECT * from $wpdb->ucwp_item WHERE merchant_item_id IN ([IN])";

    $safe_sql = ucwp_prepare_in($sql, $itemid_arr);

    $rows = $wpdb->get_results($safe_sql);

    // If it doesn't exist, return a message.
    if (count($rows) == 0) {
        return "<span>Items " . esc_html($itemids) . " not found.</span>";
    }

    // Create array of swagger objects for each row.
    $items = array();
    foreach($rows as $row) {
        /*
         * DEV NOTE:
         * Due to the fact that PHP does not support unicode characters and generally sucks, we ran into a situation
         * where we had 2000 unicode characters, but that translated into 2038 bytes on the PHP side and blew up during
         * validation.  So before we deserialize, we need to parse the JSON and trim the lengths of title/description
         * and extended description to be under 2000 characters.
         * */

        // Decode the json row and trim the description
        $json_decoded_item = ucwp_safe_trim_descriptions(json_decode($row->json));

        $item = ucwp_deserialize_item_json($json_decoded_item);

        if (is_null($item->getContent())) {
            $item->setContent(new ultracart\v2\models\ItemContent());
        }

        $item->getContent()->setViewUrl(ucwp_get_permalink_for_item_id($item->getMerchantItemId()));

        // added an index of itemId for each entry to aid in sorting.  This will mean the same item will not be able to
        // be repeated in the same list.  I think this should be fine, as most people wouldn't be doing that anyway
        $items[$item->getMerchantItemId()] = $item;

        // reset the items array with proper sorting to match the original csv
        $items = array_replace(array_flip($itemid_arr), $items);
    }

    // Load the template
    ob_start();
    include UCWP_PLUGIN_PATH . 'templates/ucwp_item_list.php';
    return ob_get_clean();
}

?>