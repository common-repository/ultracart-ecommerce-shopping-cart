<?php

/*
Plugin Name: UltraCart WP
Plugin URI: http://www.ultracart.com/wordpress
Description: A plugin to connect your Wordpress site to UltraCart
Version: 1.42
Author: UltraCart Development
Author URI: http://www.ultracart.com
License: GPLv2
*/

// Protect the plugin from direct request
if (!defined('ABSPATH')) exit;

// constants
define('WP_DEBUG', false);
define("__ULTRACART_PLUGIN_CLIENT_ID__", "BF64AB9D8176D70155BCDAF7D60A7000");
define("__ULTRACART_API_VERSION__", "2017-03-01");
define("UCWP_PLUGIN_PATH", plugin_dir_path( __FILE__ ));
define("UCWP_PLUGIN_URL", plugin_dir_url( __FILE__ ));
define("UCWP_VERSION", "v1.42");

// enable while developing
//define( 'CONCATENATE_SCRIPTS', false );

require_once UCWP_PLUGIN_PATH . 'install.php';
require_once UCWP_PLUGIN_PATH . 'helpers.php';
require_once UCWP_PLUGIN_PATH . 'relationships.php';
require_once UCWP_PLUGIN_PATH . 'webhook.php';
require_once UCWP_PLUGIN_PATH . 'settings.php';
require_once UCWP_PLUGIN_PATH . 'vendor/autoload.php';

if (!is_admin()) {
    wp_enqueue_script( "ucwp-js", UCWP_PLUGIN_URL . "assets/js/uc-wp.js", array("jquery"), UCWP_VERSION, true );
    wp_localize_script('ucwp-js', 'WP_UCWP', array(
        'ucwpDirUrl' => UCWP_PLUGIN_URL,
    ));

    wp_enqueue_style( "ucwp-css", UCWP_PLUGIN_URL . "assets/css/uc-wp.css", array(), UCWP_VERSION, "all" );

    require_once UCWP_PLUGIN_PATH . 'shortcode_ucwp_item.php';
    require_once UCWP_PLUGIN_PATH . 'shortcode_ucwp_item_list.php';
    require_once UCWP_PLUGIN_PATH . 'shortcode_ucwp_buy_button.php';
    require_once UCWP_PLUGIN_PATH . 'shortcode_ucwp_price.php';
    require_once UCWP_PLUGIN_PATH . 'shortcode_ucwp_if.php';
}

$ucwp_item_ids = array();

register_activation_hook( __FILE__ , 'ucwp_install' );

wp_register_style( 'uc-wp-admin.css', UCWP_PLUGIN_URL . 'assets/css/admin/uc-wp-admin.css', false, UCWP_VERSION );
wp_enqueue_style( 'uc-wp-admin.css' );

add_filter( 'wp_nav_menu_items', 'ucwp_cart_menu_item', 10, 2 );
function ucwp_cart_menu_item ( $items, $args ) {
    if (get_option("ucwp_view_cart_menu_$args->theme_location") == 'true') {
        $items .= '<li class="ucwp_menu-item menu-item"><a href="#viewcart" class="js-view-cart-snapshot">View Cart<span class="js-item-count"></span></a></li>';
    }
    if(get_option("ucwp_view_cart_menu_icon_only_$args->theme_location") == 'true') {
        $items .= '<li class="ucwp_menu-item menu-item"><a href="#viewcart-icon" class="js-view-cart-snapshot js-add-cart-icon"></a></li>';
    }

    if (get_option("ucwp_checkout_menu_$args->theme_location") == 'true') {
        $items .= '<li class="ucwp_menu-item menu-item"><a href="#checkout" class="js-view-checkout">Checkout<span class="js-item-count"></span></a></li>';
    }

    if(get_option("ucwp_checkout_menu_icon_only_$args->theme_location") == 'true') {
        $items .= '<li class="ucwp_menu-item menu-item"><a href="#checkout-icon" class="js-view-checkout js-add-cart-icon"></a></li>';
    }
    return $items;
}

// ucwp_remove_trashed_relations function from relationships.php
add_action( 'wp_trash_post', 'ucwp_remove_trashed_relations');

// ucwp_update_post_itemids function from relationships.php
add_action('wp_footer', 'ucwp_update_post_itemids', 10);

add_action('wp_footer', 'ucwp_add_merchant_id_and_browser_key', 10);
function ucwp_add_merchant_id_and_browser_key() {
    if (get_option('ucwp_disable_passive_branding') != 'true') {
        echo '<div class="ecommerce-by-uc"><span>E-Commerce powered by UltraCart</span></div>';
    }
    echo "<script>\n";
    echo "window.UCWP_VERSION = '". UCWP_VERSION ."';\n";
    echo "window.UCWP_MID = '". get_option('ucwp_plugin_merchant_id') ."';\n";
    echo "window.UCWP_browser_key = '". get_option('ucwp_plugin_browser_key') ."';\n";
    echo "window.UCWP_secure_host_name = '". get_option('ucwp_secure_host_name') ."';\n";
//    echo "window.UCWP_plugin_dir_url = '". plugin_dir_url( __FILE__ ) ."';\n";
    echo "</script>\n";
}

add_action('wp_footer', 'ucwp_enable_ultracart_analytics', 10);
function ucwp_enable_ultracart_analytics() {
//    if (get_option('ucwp_enable_ultracart_analytics_recording') == 'true') {
//        $record = '?record=true';
//    }
    if (get_option('ucwp_enable_ultracart_analytics') == 'true') {
        $record = get_option('ucwp_enable_ultracart_analytics_recording') == 'true' ? 'true' : 'false';
        $mid = get_option('ucwp_plugin_merchant_id');
        $src = 'https://d9i5ve8f04qxt.cloudfront.net/UC/62/uca/0.1.0/js/collect.js';
        $host_name = get_option('ucwp_secure_host_name') ? get_option('ucwp_secure_host_name') : $_SERVER['SERVER_NAME'];
        echo '<script async defer src="'. $src .'" data-mid="'. $mid .'" data-channel="'. $host_name .'" data-record="'. $record .'"></script>';
    }
}

//add_action('wp_footer', 'ucwp_add_affiliate_invisible_script', 10);
//function ucwp_add_affiliate_invisible_script() {
//    if (get_option('ucwp_inject_affiliate_tracking_script') == 'true') {
//        $mid = get_option("ucwp_plugin_merchant_id");
//        $src = '//secure.ultracart.com/cgi-bin/UCInvisibleLink?merchantId='. $mid .'&advanced=true';
//        echo '<script type="text/javascript" src="'. $src .'" async="async" defer="defer"></script>';
//    }
//}

add_action( 'init', 'ucwp_buttons' );
function ucwp_buttons() {
    if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
        add_filter( "mce_external_plugins", "ucwp_add_buttons" );
        add_filter( 'mce_buttons', 'ucwp_register_buttons' );
    }
}
function ucwp_add_buttons( $plugin_array ) {
    $plugin_array['UltraCartWP'] = UCWP_PLUGIN_URL . 'assets/js/admin/tiny-mce-plugin.js';
    return $plugin_array;
}
function ucwp_register_buttons( $buttons ) {
    //make sure that the thickbox script is enqueued on your admin page
    add_thickbox();

    array_push( $buttons, 'addItem', 'addItemList', 'addBuyButton', 'addPrice' );
    return $buttons;
}

add_action( 'admin_enqueue_scripts', 'ucwp_load_static_assets' );
function ucwp_load_static_assets() {
    if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
        wp_register_script('selectize.js', UCWP_PLUGIN_URL . 'assets/js/admin/selectize.js', array("jquery"), '0.12.4', true);
        wp_register_script('text-editor-plugin.js', UCWP_PLUGIN_URL . 'assets/js/admin/text-editor-plugin.js', array("quicktags"), false, true);
        wp_register_script('uc-admin-index.js', UCWP_PLUGIN_URL . 'assets/js/admin/uc-admin-index.js', array("jquery"), '0.12.4', true);

        wp_enqueue_script('selectize.js');
        wp_enqueue_script('text-editor-plugin.js');
        wp_enqueue_script('uc-admin-index.js');

        wp_register_style('selectize.default.css', UCWP_PLUGIN_URL . 'assets/css/admin/selectize.default.css', false, '0.12.4');
        wp_enqueue_style('selectize.default.css');
    }
}

add_action('wp_ajax_ucwp_save_options', 'ucwp_save_options');
function ucwp_save_options() {
//    update_option('ucwp_inject_affiliate_tracking_script', $_POST['ucwp_inject_affiliate_tracking_script']);
    update_option('ucwp_disable_passive_branding', $_POST['ucwp_disable_passive_branding']);
    update_option('ucwp_enable_ultracart_analytics', $_POST['ucwp_enable_ultracart_analytics']);
    update_option('ucwp_enable_ultracart_analytics_recording', $_POST['ucwp_enable_ultracart_analytics_recording']);
    update_option('ucwp_secure_host_name', $_POST['ucwp_secure_host_name']);
    $menus = get_registered_nav_menus();
    foreach ( $menus as $location => $description ){
        update_option("ucwp_view_cart_menu_$location", $_POST["ucwp_view_cart_menu_$location"]);
        update_option("ucwp_view_cart_menu_icon_only_$location", $_POST["ucwp_view_cart_menu_icon_only_$location"]);
        update_option("ucwp_checkout_menu_$location", $_POST["ucwp_checkout_menu_$location"]);
        update_option("ucwp_checkout_menu_icon_only_$location", $_POST["ucwp_checkout_menu_icon_only_$location"]);
    }
    echo 'Options Saved!';
    wp_die();
}

add_action('wp_ajax_ucwp_reflow_items', 'ucwp_reflow_items');
function ucwp_reflow_items() {
    // Set debug to true if you need more information on request/response
    $client = new GuzzleHttp\Client(['verify' => false, 'debug' => false]);

    // Configure API key authorization: ultraCartSimpleApiKey
    $config = new ultracart\v2\Configuration();
    $config->setAccessToken(get_option('ucwp_plugin_access_token'));

    $webhook_api = new ultracart\v2\api\WebhookApi(
        $client,
        $config,
        new ultracart\v2\HeaderSelector("2017-03-01")
    );

    $webhook_oid = get_option('ucwp_plugin_webhook_oid');

    if(isset($webhook_oid) && $webhook_oid != "") {
        echo "Item Resync Triggered.  This could take a few minutes.";
        try {
            $webhook_api->resendEvent($webhook_oid, "item_update");
        } catch(Exception $e) {
            echo 'Exception when calling WebhookApi->resendEvent: ', $e->getMessage(), PHP_EOL;
        }
    }

    wp_die();
}

add_action('wp_ajax_ucwp_add_buy_button_modal', 'ucwp_add_buy_button_modal');
function ucwp_add_buy_button_modal() {
    $currency_conversions = ["AUD", "BRL", "CAD", "CHF", "EUR", "GBP", "INR", "JPY", "MXN", "MYR", "NOK", "NZD", "RUB", "SEK", "SGD", "TRY", "USD", "ZAR"];
    $html = '<label>';
    $html .= '<input type="text" class="js-item-id-select" />';
    $html .= '</label>';
    $html .= '<div style="text-align:left; color:#999; font-size: 12px; margin-top: -10px;">Search for an item id or description.</div>';
    $html .= '<h2 style="margin-bottom: 10px;">Currency Conversion</h2>';
    $html .= '<div><select id="currency-conversion" name="currency-conversion" class="currency-conversion-select js-currency-conversion-select">';
    $html .= '<option value="">Choose currency conversion...</option>';
    foreach ($currency_conversions as $currency) {
        $html .= '<option value="'.$currency.'">'.$currency.'</option>';
    }
    $html .= '</select></div>';
    $html .= '<div style="text-align:right; float:right; width:40%;"><button class="btn-cancel-shortcode js-tb-close">Cancel</button><button class="js-add-buy-button-shortcode btn-add-shortcode btn-add-buy-button-shortcode">Add Buy Button</button></div>';

    echo $html; // <- this should be displayed in the TB

    wp_die();
}

add_action('wp_ajax_ucwp_add_price_modal', 'ucwp_add_price_modal');
function ucwp_add_price_modal() {
    $currency_conversions = ["AUD", "BRL", "CAD", "CHF", "EUR", "GBP", "INR", "JPY", "MXN", "MYR", "NOK", "NZD", "RUB", "SEK", "SGD", "TRY", "USD", "ZAR"];
    $html = '<label><input type="text" class="js-item-id-select" /></label>';
    $html .= '<div style="text-align:left; color:#999; font-size: 12px; margin-top: -10px;">Search for an item id or description.</div>';
    $html .= '<h2 style="margin-bottom: 10px;">Currency Conversion</h2>';
    $html .= '<div><select id="currency-conversion" name="currency-conversion" class="currency-conversion-select js-currency-conversion-select">';
    $html .= '<option value="">Choose currency conversion...</option>';
    foreach ($currency_conversions as $currency) {
        $html .= '<option value="'.$currency.'">'.$currency.'</option>';
    }
    $html .= '</select></div>';
    $html .= '<div style="text-align:right; float: right; width:45%;"><button class="btn-cancel-shortcode js-tb-close">Cancel</button><button class="js-add-price-shortcode btn-add-shortcode btn-add-price-shortcode">Add Price Shortcode</button></div>';

    echo $html; // <- this should be displayed in the TB

    wp_die();
}

add_action('wp_ajax_ucwp_add_item_modal', 'ucwp_add_item_modal');
function ucwp_add_item_modal() {
    $currency_conversions = ["AUD", "BRL", "CAD", "CHF", "EUR", "GBP", "INR", "JPY", "MXN", "MYR", "NOK", "NZD", "RUB", "SEK", "SGD", "TRY", "USD", "ZAR"];
    $html = '<label>';
    $html .= '<input type="text" class="js-item-id-select" />';
    $html .= '</label>';
    $html .= '<div style="text-align:left; color:#999; font-size: 12px; margin-top: -10px;">Search for an item id or description.</div>';
    $html .= '<h2 style="margin-bottom: 10px;">Currency Conversion</h2>';
    $html .= '<div><select id="currency-conversion" name="currency-conversion" class="currency-conversion-select js-currency-conversion-select">';
    $html .= '<option value="">Choose currency conversion...</option>';
    foreach ($currency_conversions as $currency) {
        $html .= '<option value="'.$currency.'">'.$currency.'</option>';
    }
    $html .= '</select></div>';
    $html .= '<label style="display: inline-block; margin-left: 5px;"><input type="checkbox" name="immediate-checkout" class="js-immediate-checkout"><span>Immediate Checkout</span></label><br>';
    $html .= '<h2 style="margin-bottom: 10px;">Display Options</h2>';
    $html .= '<label style="display: inline-block; margin-bottom: 5px; margin-left: 5px;"><input type="checkbox" name="title" class="js-title" checked><span>Title</span></label><br>';
    $html .= '<label style="display: inline-block; margin-bottom: 5px; margin-left: 5px;"><input type="checkbox" name="gallery" class="js-gallery" checked><span>Gallery</span></label><br>';
    $html .= '<label style="display: inline-block; margin-bottom: 5px; margin-left: 5px;"><input type="checkbox" name="extended_description" class="js-extended-description" checked><span>Extended Description</span></label><br>';
    $html .= '<label style="display: inline-block; margin-bottom: 5px; margin-left: 5px;"><input type="checkbox" name="options" class="js-options" checked><span>Options</span></label><br>';
    $html .= '<label style="display: inline-block; margin-bottom: 5px; margin-left: 5px;"><input type="checkbox" name="price" class="js-price" checked><span>Price</span></label><br>';
    $html .= '<label style="display: inline-block; margin-bottom: 5px; margin-left: 5px;"><input type="checkbox" name="quantity" class="js-quantity" checked><span>Quantity</span></label><br>';
//    $html .= '<h2 style="margin-bottom: 10px;">Currency Conversion</h2>';
    $html .= '<div style="text-align:right; float:right; width:40%;""><button class="btn-cancel-shortcode js-tb-close">Cancel</button><button class="js-add-item-shortcode btn-add-shortcode btn-add-item-shortcode">Add Items</button></div>';

    echo $html; // <- this should be displayed in the TB

    wp_die();
}

add_action('wp_ajax_ucwp_add_item_list_modal', 'ucwp_add_item_list_modal');
function ucwp_add_item_list_modal(){
    $currency_conversions = ["AUD", "BRL", "CAD", "CHF", "EUR", "GBP", "INR", "JPY", "MXN", "MYR", "NOK", "NZD", "RUB", "SEK", "SGD", "TRY", "USD", "ZAR"];
    $html = '<label>';
    $html .= '<input type="text" class="js-item-id-multi-select" />';
    $html .= '</label>';
    $html .= '<div style="text-align:left; color:#999; font-size: 12px; margin-top: -10px;">Search for an item id or description.</div>';
    $html .= '<h2 style="margin-bottom: 10px;">Currency Conversion</h2>';
    $html .= '<div><select id="currency-conversion" name="currency-conversion" class="currency-conversion-select js-currency-conversion-select">';
    $html .= '<option value="">Choose currency conversion...</option>';
    foreach ($currency_conversions as $currency) {
        $html .= '<option value="'.$currency.'">'.$currency.'</option>';
    }
    $html .= '</select></div>';
    $html .= '<div style="text-align:right; float:right; width:40%;"><button class="btn-cancel-shortcode js-tb-close">Cancel</button><button class="js-add-item-list-shortcode btn-add-shortcode btn-add-item-list-shortcode">Add Item List</button></div>';

    echo $html; // <- this should be displayed in the TB

    wp_die();
}

add_action('wp_ajax_ucwp_get_item_list_data', 'ucwp_get_item_list_data');
function ucwp_get_item_list_data() {
    if ( current_user_can( 'edit_posts' ) && current_user_can( 'edit_pages' ) ) {
        global $wpdb;
        $wpdb->ucwp_item = $wpdb->prefix . 'ucwp_items';

        $s = sanitize_text_field($_GET['s']);
        $count = intval($_GET['m']) > 0 ? intval($_GET['m']) : 50;
        $sql = "SELECT * FROM $wpdb->ucwp_item WHERE merchant_item_id LIKE %s OR description LIKE %s";
        $queries = ["%" . $s . "%", "%" . $s . "%"];

        $s_array = explode(',', $s);
        if (count($s_array) > 1) {
            foreach($s_array as $s_item) {
                $queries[] = "%" . $s_item . "%";
                $queries[] = "%" . $s_item . "%";

                $sql .= " OR merchant_item_id LIKE %s OR description LIKE %s";
            }
        }

        $sql .= " ORDER BY merchant_item_id LIMIT %d";

        $queries[] = $count;

//        $sql = "SELECT * FROM $wpdb->ucwp_item WHERE merchant_item_id LIKE %s OR description LIKE %s ORDER BY merchant_item_id LIMIT %d";

        $safe_sql = $wpdb->prepare($sql, ...$queries);

        $rows = $wpdb->get_results($safe_sql);

        $selectizeItems = array();

        foreach ($rows as $row) {
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
            $selectizeItem = array();
            $selectizeItem['itemId'] = $item->getMerchantItemId();
            $selectizeItem['description'] = $item->getDescription();
            if (!is_null($item->getContent()) && !is_null($item->getContent()->getMultimedia())) {
                $selectizeItem['thumbnail'] = ucwp_get_default_thumbnail($item->getContent()->getMultimedia(), 100, 100);
            }

            // push it into the array
            array_push($selectizeItems, $selectizeItem);
        }

        echo json_encode($selectizeItems);
    }

    wp_die();
}

function ucwp_block_categories( $categories /*, $post*/) {
//    if ( $post->post_type !== 'post' ) {
//        return $categories;
//    }
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'ultracart',
                'title' => __( 'UltraCart', 'ultracart' ),
            ),
        )
    );
}
if (class_exists('WP_Block_Editor_Context ')) {
    add_filter('block_categories_all', 'ucwp_block_categories', 10, 2 );
} else {
    add_filter('block_categories', 'ucwp_block_categories', 10, 2 );
}

function ucwp_load_item_block_scripts() {
    if (!function_exists('register_block_type')) {
        return;
    }
    wp_enqueue_script(
        'ucwp-item-block',
        plugin_dir_url(__FILE__) . 'blocks/uc-item.js',
        array('wp-blocks','wp-editor'),
        true
    );

    wp_enqueue_script(
        'ucwp-item-list-block',
        plugin_dir_url(__FILE__) . 'blocks/uc-item-list.js',
        array('wp-blocks','wp-editor'),
        true
    );

    wp_enqueue_script(
        'ucwp-item-price-block',
        plugin_dir_url(__FILE__) . 'blocks/uc-item-price.js',
        array('wp-blocks','wp-editor'),
        true
    );

    wp_enqueue_script(
        'ucwp-buy-button-block',
        plugin_dir_url(__FILE__) . 'blocks/uc-buy-button.js',
        array('wp-blocks','wp-editor'),
        true
    );
}
add_action('enqueue_block_editor_assets', 'ucwp_load_item_block_scripts');

function ucwp_load_item_block() {
    if (!function_exists('register_block_type')) {
        return;
    }

    register_block_type('ucwp/item', array(
        'editor_script' => 'ucwp-item-block',
        'render_callback' => 'ucwp_item',
        'attributes' => [
            'is_block' => [ 'default' => true ],
            'itemid' => [ 'default' => '' ],
            'currency_conversion' => [ 'default' => 'USD' ],
            'immediate_checkout' => [ 'default' => false ],
            'extended_description' => [ 'default' => true ],
            'extended_description_esc' => [ 'default' => true ],
            'title' => [ 'default' => true ],
            'price' => [ 'default' => true ],
            'gallery' => [ 'default' => true ],
            'options' => [ 'default' => true ],
            'auto_order_schedules' => [ 'default' => true ],
            'quantity' => [ 'default' => true ],
        ],
    ));

    register_block_type('ucwp/item-price', array(
        'editor_script' => 'ucwp-item-price-block',
        'render_callback' => 'ucwp_price',
        'attributes' => [
            'itemid' => [ 'default' => '' ],
            'currency_conversion' => [ 'default' => 'USD' ],
        ],
    ));

    register_block_type('ucwp/buy-button', array(
        'editor_script' => 'ucwp-buy-button-block',
        'render_callback' => 'ucwp_buy_button',
        'attributes' => [
            'itemid' => [ 'default' => '' ],
            'currency_conversion' => [ 'default' => 'USD' ],
            'immediate_checkout' => [ 'default' => false ],
        ],
    ));

//    register_block_type( UCWP_PLUGIN_PATH . 'blocks/uc-item-list/' );
    register_block_type('ucwp/item-list', array(
        'editor_script' => 'ucwp-item-list-block',
        'render_callback' => 'ucwp_item_list',
        'attributes' => [
            'itemids' => [ 'default' => '' ],
            'currency_conversion' => [ 'default' => 'USD' ],
        ],
    ));
}
add_action('init', 'ucwp_load_item_block');

?>
