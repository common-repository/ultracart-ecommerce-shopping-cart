<?php

// Protect the plugin from direct request
if (!defined('ABSPATH')) exit;

require_once UCWP_PLUGIN_PATH . 'vendor/autoload.php';

add_shortcode('ucitem', 'ucwp_item');

//wp_enqueue_script( "ucwp-js", UCWP_PLUGIN_URL . "assets/js/uc-wp.js", array("jquery"), "v1", true );
//wp_localize_script('ucwp-js', 'WP_UCWP', array(
//    'ucwpDirUrl' => UCWP_PLUGIN_URL,
//));

//wp_enqueue_style( "ucwp-css", UCWP_PLUGIN_URL . "assets/css/uc-wp.css", array(), "v1", "all" );

function ucwp_item($attr) {

    // Fetch the item id attribute
    $itemId = isset($attr['itemid']) ? ucwp_convert_smart_quotes(trim($attr['itemid'])) : null;
    $currencyConversion =
        isset($attr['currency_conversion']) && trim($attr['currency_conversion']) != "" ?
            trim($attr["currency_conversion"]) :
            "";

    // Each attr should default to active/true
    if (isset($attr['is_block']) && $attr['is_block'] == true) {
        // we're rendering from a block
        $title = isset($attr['title']) ? $attr['title'] : false;
        $gallery = isset($attr['gallery']) ? $attr['gallery'] : false;
        $extended_description = isset($attr['extended_description']) ? $attr['extended_description'] : false;
        $extended_description_esc = isset($attr['extended_description_esc']) ? $attr['extended_description_esc'] : false;
        $price = isset($attr['price']) ? $attr['price'] : false;
        $quantity = isset($attr['quantity']) ? $attr['quantity'] : false;
        $auto_order_schedules = isset($attr['auto_order_schedules']) ? $attr['auto_order_schedules'] : false;
        $options = isset($attr['options']) ? $attr['options'] : false;
    } else {
        // we're rendering from a shortcode
        // If it's set, it should be considered false if the value is "false"
        $title = isset($attr['title']) && $attr['title'] == "false" ? false : true;
        $gallery = isset($attr['gallery']) && $attr['gallery'] == "false" ? false : true;
        $extended_description = isset($attr['extended_description']) && $attr['extended_description'] == "false" ? false : true;
        $extended_description_esc = isset($attr['extended_description_esc']) && $attr['extended_description_esc'] == "false" ? false : true;
        $price = isset($attr['price']) && $attr['price'] == "false" ? false : true;
        $quantity = isset($attr['quantity']) && $attr['quantity'] == "false" ? false : true;
        $auto_order_schedules = isset($attr['auto_order_schedules']) && $attr['auto_order_schedules'] == "false" ? false : true;
        $options = isset($attr['options']) && $attr['options'] == "false" ? false : true;
    }
    // immediate_checkout should default to (string) "false", and only be "true" if set to true
    $immediate_checkout = isset($attr['immediate_checkout']) && $attr['immediate_checkout'] == "true" ? "true" : "false";

	// Make sure it was specified
	if (is_null($itemId) || $itemId == '') {
		return "<span>Please specify itemid attribute to ucwp_item shortcode.</span>";
	}

    global $ucwp_item_ids;

    // Add the id to the array
    array_push($ucwp_item_ids, $itemId);

    //TODO: Test caching with a persistent cache plugin.  Expect all caches to miss until then.
    // trimmed, uppercase item id
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

    // Grab the JSON from the row and decode it into an object.
	//$item = json_decode($rows[0]->json);

    // TODO: Add the item id to the global array

	// Load the template
	ob_start();
	include UCWP_PLUGIN_PATH . 'templates/ucwp_item.php';
	return ob_get_clean();
}

?>
