<?php
/** @noinspection PhpIncludeInspection */

//use ultracart\v2\Configuration;

require_once plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

add_action('admin_menu', 'ucwp_plugin_add_page');

function ucwp_plugin_add_page()
{
    add_options_page('UltraCart', 'UltraCart', 'manage_options', 'ucwp_plugin', 'ucwp_plugin_option_page');
}

function ucwp_plugin_setup_browser_key_checkout($access_token) {
    // Set debug to true if you need more information on request/response
    $client = new GuzzleHttp\Client(['verify' => false, 'debug' => false]);
    // Configure API key authorization: ultraCartSimpleApiKey
    $config = new ultracart\v2\Configuration();
    $config->setAccessToken($access_token);

    $api_instance = new ultracart\v2\api\CheckoutApi(
        $client,
        $config,
        new ultracart\v2\HeaderSelector("2017-03-01")
    );

    // ultracart\v2\models\CheckoutSetupBrowserKeyRequest | Setup browser key request
    $browser_key_request = new ultracart\v2\models\CheckoutSetupBrowserKeyRequest();
    $allowed_referrers = array();
    array_push($allowed_referrers, get_home_url());
    $browser_key_request->setAllowedReferrers($allowed_referrers);

    try {
        $result = $api_instance->setupBrowserKey($browser_key_request);
        update_option('ucwp_plugin_browser_key', $result->getBrowserKey());
    } catch (Exception $e) {
        echo 'Exception when calling CheckoutApi->setupBrowserKey: ', $e->getMessage(), PHP_EOL;
    }
}

function ucwp_plugin_setup_webhook_back_to_wordpress($access_token)
{
    // Use these methods to determine if we are supposed to use HTTPS for the AJAX callback.
    $protocol = 'http';
    if (is_ssl() || force_ssl_admin()) {
        $protocol = 'https';
    } else {
        // Detect load balancers as well
        if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
            $protocol = 'https';
        }
    }

//    var_dump("using access token", $access_token);

    // Set debug to true if you need more information on request/response
    $client = new GuzzleHttp\Client(['verify' => false, 'debug' => false]);

    // Configure API key authorization: ultraCartSimpleApiKey
    $config = new ultracart\v2\Configuration();
    $config->setAccessToken($access_token);

    $webhook_api = new ultracart\v2\api\WebhookApi(
        $client,
        $config,
        new ultracart\v2\HeaderSelector("2017-03-01")
    );

    // ultracart\v2\models\Webhook | Webhook to create
    $webhook = new ultracart\v2\models\Webhook();
    $webhook->setAuthenticationType("basic");
    $webhook->setWebhookUrl(get_site_url(null, '/wp-admin/admin-ajax.php?action=ucwp_webhook', $protocol));
    $webhook->setApiVersion(__ULTRACART_API_VERSION__);

    $event_item_create = new ultracart\v2\models\WebhookEventSubscription();
    $event_item_create->setEventName("item_create");
    $event_item_create->setSubscribed(true);
    $event_item_create->setExpansion("auto_order,options,variations,pricing,shipping.distribution_centers,content.multimedia.thumbnails[filter(100,100,\"png\", true),filter(360,360, \"png\", true)]");

    $event_item_update = new ultracart\v2\models\WebhookEventSubscription();
    $event_item_update->setEventName("item_update");
    $event_item_update->setSubscribed(true);
    $event_item_update->setExpansion("auto_order,options,variations,pricing,shipping.distribution_centers,content.multimedia.thumbnails[filter(100,100,\"png\", true),filter(360,360, \"png\", true)]");

    $event_item_delete = new ultracart\v2\models\WebhookEventSubscription();
    $event_item_delete->setEventName("item_delete");
    $event_item_delete->setSubscribed(true);
    $event_item_delete->setExpansion("");

    $events = array($event_item_create, $event_item_update, $event_item_delete);

    $event_category = new ultracart\v2\models\WebhookEventCategory();
    $event_category->setEventCategory("items");
    $event_category->setEvents($events);

    $event_categories = array($event_category);
    $webhook->setEventCategories($event_categories);

    $webhook->setMaximumEvents(100);
    $webhook->setMaximumSize(250000);

    try {
        $result = $webhook_api->insertWebhook($webhook);

        update_option('ucwp_plugin_webhook_oid', $result->getWebhook()->getWebhookOid());
        update_option('ucwp_plugin_basic_username', $result->getWebhook()->getBasicUsername());
        update_option('ucwp_plugin_basic_password', $result->getWebhook()->getBasicPassword());
        update_option('ucwp_plugin_merchant_id', $result->getWebhook()->getMerchantId());

        // Request a reflow of all the items
        $webhook_api->resendEvent($result->getWebhook()->getWebhookOid(), "item_update");

    } catch (Exception $e) {
        echo 'Exception when calling WebhookApi->insertWebhook: ', $e->getMessage(), PHP_EOL;
    }
}

function ucwp_plugin_option_page()
{
    ?>
    <div class="wrap">
        <h2>UltraCart</h2>
    <?php
    // Grab the options and create a random value to use in the oauth communication
    $random = get_option('ucwp_plugin_random');
    if (!isset($random) || strlen($random) == 0) {
        $random = bin2hex(openssl_random_pseudo_bytes(16));
        update_option('ucwp_plugin_random', $random);
    }

    // Do they want to disconnect?
    if (isset($_POST['disconnect'])) {
        check_admin_referer( 'UltraCartNonce', 'security' );

        if ( !current_user_can( 'edit_posts' ) || !current_user_can( 'edit_pages' ) ||
             !current_user_can( 'delete_posts' ) || !current_user_can( 'delete_pages' )) {
            die('Permission Denied');
        }

        // Set debug to true if you need more information on request/response
        $client = new GuzzleHttp\Client(['verify' => false, 'debug' => false]);
        // Configure API key authorization: ultraCartSimpleApiKey
        $config = new ultracart\v2\Configuration();

        $api_instance = new ultracart\v2\api\OauthApi(
            $client,
            $config,
            new ultracart\v2\HeaderSelector("2017-03-01")
        );

        $client_id = __ULTRACART_PLUGIN_CLIENT_ID__;
        $token = get_option('ucwp_plugin_access_token');

        try {
//            $api_instance->oauthRevokePost($client_id, $token);
            $api_instance->oauthRevoke($client_id, $token);

            echo '<p>Disabled authorized application on UltraCart.</p>';
        } catch (Exception $e) {
            echo 'Exception when calling OauthApi->oauthRevokePost: ', $e->getMessage(), PHP_EOL;
        }

        delete_option('ucwp_plugin_webhook_oid');
        delete_option('ucwp_plugin_access_token');
        delete_option('ucwp_plugin_refresh_token');
        delete_option('ucwp_plugin_basic_username');
        delete_option('ucwp_plugin_basic_password');

        // Cleanup the database
        global $wpdb;
        $wpdb->ucwp_item = $wpdb->prefix . 'ucwp_items';
        $wpdb->query("TRUNCATE TABLE $wpdb->ucwp_item");

        echo "<p>Credentials for the UltraCart Wordpress plugin have been removed successfully.</p>";
        echo "<p>Make sure to delete the Authorized Application from within your UltraCart account as well.</p>";
    }

    // Is the code on the parameter indicating a oauth callback
    // Also check if the UC_APP_CODE hasn't been set yet, or is a different code
    $code   = sanitize_text_field($_GET['code']);
    $state  = sanitize_text_field($_GET['state']);

    $webhook_oid = get_option('ucwp_plugin_webhook_oid');

    if (isset($code) && isset($state) && (!isset($webhook_oid) || !$webhook_oid != "")) {
        // Validate the state matches our random value
        if ($state == $random) {

            // Set debug to true if you need more information on request/response
            $client = new GuzzleHttp\Client(['verify' => false, 'debug' => false]);
            // Configure API key authorization: ultraCartSimpleApiKey
            $config = new ultracart\v2\Configuration();

            $api_instance = new ultracart\v2\api\OauthApi(
                $client,
                $config,
                new ultracart\v2\HeaderSelector("2017-03-01")
            );

            $client_id = __ULTRACART_PLUGIN_CLIENT_ID__;
            $grant_type = "authorization_code";
            $redirect_uri = get_site_url(null, '/wp-admin/options-general.php?page=ucwp_plugin');

            $result = null;

            try {
//                echo "<pre>";
//                var_dump($client_id, $grant_type, $code, $redirect_uri);
//                echo "</pre>";
                $result = $api_instance->oauthAccessToken($client_id, $grant_type, $code, $redirect_uri);

//                echo "<pre>";
//                var_dump($result);
//                echo "</pre>";
            } catch (Exception $e) {
                echo 'Exception when calling OauthApi->oauthAccessToken: ', $e->getMessage(), PHP_EOL;
            }

            try {
                // Store the token and the refresh away
                update_option('ucwp_plugin_access_token', $result->getAccessToken());
            } catch (Exception $e) {
                echo 'Exception when calling update_option($result->getAccessToken()): ', $e->getMessage(), PHP_EOL;
            }
            try {
                update_option('ucwp_plugin_refresh_token', $result->getRefreshToken());
            } catch (Exception $e) {
                echo 'Exception when calling update_option($result->getRefreshToken()): ', $e->getMessage(), PHP_EOL;
            }
            try {
                ucwp_plugin_setup_webhook_back_to_wordpress($result->getAccessToken());
            } catch (Exception $e) {
                echo 'Exception when calling ucwp_plugin_setup_webhook_back_to_wordpress($result->getAccessToken()): ', $e->getMessage(), PHP_EOL;
            }
            try {
                ucwp_plugin_setup_browser_key_checkout($result->getAccessToken());
            } catch (Exception $e) {
                echo 'Exception when calling ucwp_plugin_setup_browser_key_checkout$result->getAccessToken()): ', $e->getMessage(), PHP_EOL;
            }

            // Remove the variables off the request URI so that when it's output as the _wp_http_referer it won't cause an error when they save the settings.
            $_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], 0, strrpos($_SERVER['REQUEST_URI'], "page=ucwp_plugin") + strlen("page=ucwp_plugin"));
        }
    }

    if (isset($_GET['error']) && isset($_GET['error_description'])) {
        echo 'Error: ' . esc_html($_GET['error']) . ' - ' . esc_html($_GET['error_description']) . '<br/>';
    }


    $accessToken = get_option('ucwp_plugin_access_token');
    $refreshToken = get_option('ucwp_plugin_refresh_token');
    $basicUsername = get_option('ucwp_plugin_basic_username');
    $basicPassword = get_option('ucwp_plugin_basic_password');

    $webhook_oid = get_option('ucwp_plugin_webhook_oid');

    if (isset($accessToken) && $accessToken != "" &&
        isset($refreshToken) && $refreshToken != "" &&
        isset($basicUsername) && $basicUsername != "" &&
        isset($basicPassword) && $basicPassword != "") {
        // How many items are in the database?
        global $wpdb;

        $wpdb->ucwp_item = $wpdb->prefix . 'ucwp_items';

        $sql = "SELECT COUNT(*) AS c from $wpdb->ucwp_item";
        $result = $wpdb->get_row($sql);
        $item_count = $result->c;

         ?>
        <p>The UltraCart Wordpress Plugin has been connected.</p>

        <?php if($item_count == 0): ?>
        <p>It may take a few moments for your items to sync down to your WordPress site.  <br>Refresh to see the current progress: <button onclick="window.location.reload()">Refresh</button></p>
        <?php endif; ?>

        <p>There are <strong><?php echo $item_count; ?></strong> items in the database.</p>

        <br>
        <br>

        <!--suppress HtmlUnknownTarget -->
        <!-- Only show the Resync button if the webhook_oid has already been set -->
        <?php if(isset($webhook_oid) && $webhook_oid != "") { ?>
            <hr>
            <p>If you don't think all your items have synced successfully, you can use the button below to reinitialize the sync procedure.</p>
            <button class="js-reflow-items button button-primary">Resync Items</button>
        <?php } ?>
        <br>
        <br>
        <hr>
        <p>If you wish to disconnect your plugin, click the button below</p>
        <form action="options-general.php?page=ucwp_plugin" method="post">
            <input type="hidden" name="security" value="<?php echo wp_create_nonce('UltraCartNonce'); ?>">
            <input type="submit" name="disconnect" class="button button-primary" value="Disconnect UltraCart">
        </form>
        <br>
        <hr>
        <h2>Options</h2>
        <form method="post">
            <fieldset>
<!--                <label>-->
<!--                    <input type="checkbox"-->
<!--                           class="ucwp_inject_affiliate_tracking_script"-->
<!--                           name="ucwp_inject_affiliate_tracking_script"-->
<!--                           --><?php //if(get_option('ucwp_inject_affiliate_tracking_script') == 'true' ) { echo 'checked'; } ?>
<!--                    <span>Inject Affiliate Tracking Script</span>-->
<!--                </label>-->
<!--                <br>-->
<!--                <br>-->
                <label>
                    <input type="checkbox"
                           class="ucwp_disable_passive_branding"
                           name="ucwp_disable_passive_branding"
                    <?php if(get_option('ucwp_disable_passive_branding') == 'true' ) { echo 'checked'; } ?>
                    <span>Disable Passive Branding</span>
                </label>
                <br>
                <br>
                <label>
                    <input type="checkbox"
                           class="ucwp_enable_ultracart_analytics"
                           name="ucwp_enable_ultracart_analytics"
                    <?php if(get_option('ucwp_enable_ultracart_analytics') == 'true' ) { echo 'checked'; } ?>
                    <span>Enable UltraCart Analytics</span>
                </label>
                <br>
                <br>
                <label class="ucwp_enable_ultracart_analytics_recording_label <?php if(get_option('ucwp_enable_ultracart_analytics') == 'false' ) { echo 'disabled'; } ?>">
                    <input type="checkbox"
                        <?php if(get_option('ucwp_enable_ultracart_analytics') == 'false' ) { echo 'disabled'; } ?>
                           class="ucwp_enable_ultracart_analytics_recording"
                           name="ucwp_enable_ultracart_analytics_recording"
                    <?php if(get_option('ucwp_enable_ultracart_analytics_recording') == 'true' ) { echo 'checked'; } ?>
                    <span>Enable UltraCart Analytics Screen Recording</span>
                </label>
                <br>
                <br>
                <label>
                    <span>Secure Host Name (optional)</span>
                    <br>
                    <input type="text"
                           class="ucwp_secure_host_name"
                           name="ucwp_secure_host_name"
                           size="40"
                           value="<?php echo get_option('ucwp_secure_host_name'); ?>"
                </label>
                <br>
                <br>
                <button class="js-ucwp-save-options button button-primary">Save Options</button>
                <?php if(count(get_registered_nav_menus()) > 0 ): ?>
                <fieldset>
                    <h3>Menu Options</h3>
                    <?php
                    $menus = get_registered_nav_menus();
                    foreach ( $menus as $location => $description ): ?>
                    <div style="width: 25%; float: left; padding-right: 20px; margin-bottom: 20px; min-width: 275px;">
                        <h4><?php echo $description; ?>:</h4>
                        <label>
                            <input type="checkbox"
                                   class="ucwp_view_cart_menu"
                                   name="ucwp_view_cart_menu_<?php echo $location; ?>"
                            <?php if(get_option("ucwp_view_cart_menu_$location") == 'true' ) { echo 'checked'; } ?>
                            <span>Add On-Page View Cart Link</span>
                        </label><br>
                        <label>
                            <input type="checkbox"
                                   class="ucwp_view_cart_menu_icon_only"
                                   name="ucwp_view_cart_menu_icon_only_<?php echo $location; ?>"
                            <?php if(get_option("ucwp_view_cart_menu_icon_only_$location") == 'true' ) { echo 'checked'; } ?>
                            <span>Add On-Page View Cart Icon-Only Link</span>
                        </label><br>
                        <label>
                            <input type="checkbox"
                                   class="ucwp_checkout_menu"
                                   name="ucwp_checkout_menu_<?php echo $location; ?>"
                            <?php if(get_option("ucwp_checkout_menu_$location") == 'true' ) { echo 'checked'; } ?>
                            <span>Add Checkout Link</span>
                        </label><br>
                        <label>
                            <input type="checkbox"
                                   class="ucwp_checkout_menu_icon_only"
                                   name="ucwp_checkout_menu_icon_only_<?php echo $location; ?>"
                            <?php if(get_option("ucwp_checkout_menu_icon_only_$location") == 'true' ) { echo 'checked'; } ?>
                            <span>Add Checkout Icon-Only Link</span>
                        </label>
                    </div>
                    <?php endforeach; ?>
                </fieldset>
                <button class="js-ucwp-save-options button button-primary">Save Options</button>
                <?php endif; ?>
            </fieldset>
        </form>
        <?php
       } else {
     ?>     <h2>UltraCart is not connected to your Wordpress Theme</h2>
            <hr>
            <div id="ucwp-new-user">
                <h3>New to UltraCart?</h3>
                <p>Start your free trial today!</p>
                <a href="https://www.ultracart.com/?freeTrial" target="_blank" class="button button-primary">Get Started</a>
            </div>
            <br>
            <hr>
            <div id="ucwp-existing-user">
                <h3>Already Have an Account?</h3>
                <p>Click the button below to start the process.</p>
                <a href="https://secure.ultracart.com/rest/v2/oauth/authorize?client_id=<?php echo urlencode(__ULTRACART_PLUGIN_CLIENT_ID__); ?>&response_type=code&redirect_uri=<?php echo urlencode(get_site_url(null, '/wp-admin/options-general.php?page=ucwp_plugin')); ?>&state=<?php echo urlencode($random); ?>" class="button button-primary">Connect to UltraCart</a>
            </div>
     <?php
       }
     ?>


    </div><!-- End .wrap -->
    <?php
}

?>
