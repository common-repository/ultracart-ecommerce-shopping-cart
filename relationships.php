<?php

function ucwp_get_permalink_for_item_id($item_id) {
    global $wpdb;
    $wpdb->ucwp_item_post_rel = $wpdb->prefix . 'ucwp_item_post_rel';

    $item_id = strtoupper($item_id);

    // Check cache
    $cache_key = "item_post_id_" . $item_id;
    $ucwp_post_ids_cache_json = wp_cache_get($cache_key, 'ucwp');

    if (!empty($ucwp_item_ids_cache_json)) {
        $db_post_ids = json_decode($ucwp_post_ids_cache_json);
    } else {
        // Query the database
        $sql = "SELECT post_id from $wpdb->ucwp_item_post_rel WHERE merchant_item_id = %s ORDER BY post_id DESC";

        $safe_sql = $wpdb->prepare($sql, $item_id);

        $rows = $wpdb->get_results($safe_sql);

        $db_post_ids = array();

        foreach ($rows as $row) {
            array_push($db_post_ids, $row->post_id);
        }

        // Update the cache
        wp_cache_set($cache_key, json_encode($db_post_ids), 'ucwp');
    }

    // Loop through the post ids
    foreach ($db_post_ids as $db_post_id) {
        $post_permalink = get_permalink($db_post_id);

        // Check if the post id can resolve to a URL and return it
        if(!empty($post_permalink)) {
            return $post_permalink;
        }
    }

    return null;
}

function ucwp_update_post_itemids() {
    global $ucwp_item_ids;
    global $wpdb;
    $post_id = get_the_ID();
    $wpdb->ucwp_item_post_rel = $wpdb->prefix . 'ucwp_item_post_rel';

    sort($ucwp_item_ids);

    // Perform a check cache
    $cache_key = "item_post_rel_" . $post_id;
    $ucwp_item_ids_cache_json = wp_cache_get($cache_key, 'ucwp');

    $db_item_ids = array();

    if (!empty($ucwp_item_ids_cache_json)) {
        $db_item_ids = json_decode($ucwp_item_ids_cache_json);
    } else {
        // Get the merchant item ids
        $sql = "SELECT merchant_item_id from $wpdb->ucwp_item_post_rel WHERE post_id = %d";

        $safe_sql = $wpdb->prepare($sql, $post_id);

        $rows = $wpdb->get_results($safe_sql);

        foreach ($rows as $row) {
            array_push($db_item_ids, $row->merchant_item_id);
        }
    }

    // Sort the $db_item_ids to match the previously sorted $ucwp_item_ids
    sort($db_item_ids);

    // Find out if the two arrays are different.
    // If they are, it means some shortcodes have changed in the cms
    $is_different = false;

    // if the lengths are different, we know we need to change it
    if (count($db_item_ids) != count($ucwp_item_ids)) {
        $is_different = true;
    }

    // if the first check didn't find a difference, compare the strings
    if (!$is_different) {
        for ($i = 0; $i < count($db_item_ids); $i++) {
            if($ucwp_item_ids[$i] !== $db_item_ids[$i]) {
                $is_different = true;
                break;
            }
        }
    }

    if($is_different) {

        // delete everything with the post id
        $wpdb->delete(
            $wpdb->ucwp_item_post_rel,
            array(
                'post_id' => $post_id
            ),
            array(
                '%d'
            )
        );

        // insert all new records
        for ($i = 0; $i < count($ucwp_item_ids); $i++) {
            $wpdb->insert(
                $wpdb->ucwp_item_post_rel,
                array(
                    'merchant_item_id' => $ucwp_item_ids[$i],
                    'post_id' => $post_id
                ),
                array(
                    '%s',
                    '%d',
                )
            );

            // Flush the cache
            $cache_key2 = "item_post_id_" . $ucwp_item_ids[$i];
            wp_cache_delete($cache_key2, 'ucwp');

        }

    }
    // Update the cache
    if (empty($ucwp_item_ids_cache_json)) {
        wp_cache_set($cache_key, json_encode($ucwp_item_ids), 'ucwp');
    }
}

function ucwp_remove_trashed_relations( $post_id ) {
    global $wpdb;
    $wpdb->ucwp_item_post_rel = $wpdb->prefix . 'ucwp_item_post_rel';

    $wpdb->delete( $wpdb->ucwp_item_post_rel, array( 'post_id' => $post_id ), array( '%d' ) );
}


?>