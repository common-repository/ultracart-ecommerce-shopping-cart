<?php

function ucwp_prepare_in($sql, $vals ){
    global $wpdb;
    $not_in_count = substr_count( $sql, '[IN]' );
    if ( $not_in_count > 0 ){
        $args = array( str_replace( '[IN]', implode( ', ', array_fill( 0, count( $vals ), '%s' ) ), str_replace( '%', '%%', $sql ) ) );
        // This will populate ALL the [IN]'s with the $vals, assuming you have more than one [IN] in the sql
        for ( $i=0; $i < substr_count( $sql, '[IN]' ); $i++ ) {
            $args = array_merge( $args, $vals );
        }
        $sql = call_user_func_array( array( $wpdb, 'prepare' ), array_merge( $args ) );
    }
    return $sql;
}

function ucwp_get_default_thumbnail($multimedia, $height, $width) {

    foreach($multimedia as $imageObj) {
        // added is_array() check to fix "PHP Warning:  Invalid argument supplied for foreach()"
        if($imageObj["code"] == "default" && is_array($imageObj->getThumbnails())) {
            foreach ($imageObj->getThumbnails() as $thumbnail) {
                if ($thumbnail->getWidth() == $width && $thumbnail->getHeight() == $height) {
                    return $thumbnail->getHttpsUrl();
                }
            }
        }
    }

    return null;
}

function ucwp_get_thumbnail($thumbnails, $width, $height) {

    if (!is_null($thumbnails)) {
        foreach ($thumbnails as $thumbnail) {
            if ($thumbnail->getWidth() == $width && $thumbnail->getHeight() == $height) {
                return $thumbnail->getHttpsUrl();
            }
        }
    }

    return null;
}

function ucwp_isOrderable($item) {
    if(!$item->getShipping() || !$item->getShipping()->getTrackInventory()) return true;
    if($item->getShipping()->getAllowBackOrder()) return true;
    if($item->getShipping()->getPreorder()) return true;

    if (is_array($item->getShipping()->getDistributionCenters())) {
        foreach($item->getShipping()->getDistributionCenters() as $distributionCenter) {
            if($distributionCenter->getHandles() && $distributionCenter->getInventoryLevel() > 0) {
                return true;
            }
        }
    }
    return false;
}

function ucwp_convert_smart_quotes($string) {

    if(!function_exists('iconv')) {
        return $string;
    }

    $utf8_str =  iconv('UTF-8', 'ASCII//TRANSLIT', $string);
    /* Smart quotes will be converted to normal quotes, and emdashes to two normal dashes*/
    $search = array(
        "'",
        '"',
        "--"); /*emdash*/

    $replace = array(
        "",
        "",
        '-');

    $result = str_replace($search, $replace, $utf8_str);
    
    // If we don't have a string at the end then return whatever we were passed in the first place
    if ( is_null($result) || strlen( $result ) === 0 ) {
        return $string;
    }
    
    return $result;
}

function ucwp_normalize_empty_atts($atts) {
    foreach ($atts as $attribute => $value) {
        if (is_int($attribute)) {
            $atts[strtolower($value)] = true;
            unset($atts[$attribute]);
        }
    }
    return $atts;
}

function ucwp_deserialize_item_json($json_decoded_item) {
    return ultracart\v2\ObjectSerializer::deserialize($json_decoded_item, 'ultracart\v2\models\Item', []);
}

function ucwp_safe_trim_descriptions($item) {
    $json_decoded_item = $item;

    // trim the extended description if over 2000 characters
    if (isset($json_decoded_item->content) && isset($json_decoded_item->content->extended_description)) {
        $json_decoded_item->content->extended_description =
            (strlen($json_decoded_item->content->extended_description) > 2000) ?
                substr($json_decoded_item->content->extended_description,0,1997).'...' :
                $json_decoded_item->content->extended_description;
    }

    // trim the title/description if over 2000 characters
    $json_decoded_item->description =
        (strlen($json_decoded_item->description) > 2000) ?
            substr($json_decoded_item->description,0,1997).'...' :
            $json_decoded_item->description;

    return $json_decoded_item;
}
