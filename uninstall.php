<?php

// if uninstall.php is not called by WordPress, die
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

// drop database tables
global $wpdb;
$tables = array("ucwp_items", "ucwp_item_post_rel");
foreach($tables as $table) {
    $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}{$table}");
}

?>