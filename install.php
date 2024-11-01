<?php

// Protect the plugin from direct request
if (!defined('ABSPATH')) {
    echo "No ABSPATH";
    exit;
}

function ucwp_install() {
	global $wpdb;

	$table_name = $wpdb->prefix . 'ucwp_items';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
        merchant_item_oid INT(11) NOT NULL,
		merchant_item_id VARCHAR(20) NOT NULL,
		description VARCHAR(500) NULL,
		json MEDIUMTEXT NULL DEFAULT NULL,
		PRIMARY KEY  (merchant_item_oid),
		KEY merchant_item_id (merchant_item_id)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

    // Item to Post Relational Table
    $rel_table_name = $wpdb->prefix . 'ucwp_item_post_rel';

    $rel_sql = "CREATE TABLE $rel_table_name (
        id INT(11) NOT NULL AUTO_INCREMENT,
        post_id INT(11) NOT NULL,
		merchant_item_id VARCHAR(20) NOT NULL,
		PRIMARY KEY  (id),
		KEY merchant_item_id (merchant_item_id),
		KEY post_id (post_id)
	) $charset_collate;";

    dbDelta( $rel_sql );
}
?>
