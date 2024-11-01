<?php
/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */

$smallWidth = 100;
$smallHeight = 100;
$mediumWidth = 360;
$mediumHeight = 360;
?>
<section class="uc-item-images">
    <ul class='ultraslider-html'
        data-small-dimensions='<?php echo "{$smallWidth}x{$smallHeight}"; ?>'
        data-medium-dimensions='<?php echo "{$mediumWidth}x{$mediumHeight}"; ?>'
    >
        <?php if (!is_null($item->getContent()) && !is_null($item->getContent()->getMultimedia())):
            foreach($item->getContent()->getMultimedia() as $multimedia):
                if ($multimedia->getType() == "Image"):
                    $smallUrl = ucwp_get_thumbnail($multimedia->getThumbnails(), $smallWidth, $smallHeight);
                    $mediumUrl = ucwp_get_thumbnail($multimedia->getThumbnails(), $mediumWidth, $mediumHeight);
                    $largeUrl = $multimedia->getUrl();

                    if (!is_null($smallUrl) && !is_null($mediumUrl) && !is_null($largeUrl)): ?>
                       <li>
                         <img src='<?php echo $smallUrl; ?>'
                              data-medium-src='<?php echo $mediumUrl; ?>'
                              data-large-src='<?php echo $largeUrl; ?>'
                              data-multimedia-oid='<?php echo $multimedia->getMerchantItemMultimediaOid(); ?>'
                              alt='<?php echo $multimedia->getDescription(); ?>'
                         >
                       </li>

                    <?php endif;
                endif;
            endforeach;
        endif; ?>
    </ul>
</section>