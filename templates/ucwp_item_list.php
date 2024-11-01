<?php
/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */

?>
<section class="uc-item uc-safeplace">
    <ul class="uc-list">
        <?php foreach($items as $item): ?>

        <li class="uc-list-item <?php echo 'uc-list-item' . esc_html($item->getMerchantItemId()); ?>">
            <?php if($item->getContent()->getViewUrl()): ?>
            <a href="<?php echo $item->getContent()->getViewUrl(); ?>">
            <?php endif; ?>

                <!-- START PRODUCT IMAGE -->
                <div class="uc-item-image">
                    <img src="<?php echo ucwp_get_default_thumbnail($item->getContent()->getMultimedia(), 360, 360); ?>" class="UC-default-item-multimedia" alt="<?php echo esc_html($item->getDescription()); ?>">
                </div>
                <!-- END PRODUCT IMAGE -->

                <div class="uc-item-info">

                    <h3 class="uc-item-info-title"><?php echo esc_html($item->getDescription()); ?></h3>

                    <!-- START PRICE -->
                    <?php include UCWP_PLUGIN_PATH . 'snippets/item_list_price.php'; ?>
                    <!-- END PRICE -->


                    <?php if($item->getContent()->getViewUrl()): ?>
                    <span class="uc-button uc-view-item">View Item</span>
                    <?php elseif(!ucwp_isOrderable($item)): ?>
                    <button class="uc-button uc-add-to-cart" disabled>Out of Stock</button>
                    <?php else: ?>
                    <a href="https://secure.ultracart.com/cgi-bin/UCEditor?ADD=<?php echo $item->getMerchantItemId(); ?>&merchantid=<?php echo $item->getMerchantId(); ?>"
                       class="js-add-list-item-to-cart uc-button uc-view-item"
                       data-itemid="<?php echo $item->getMerchantItemId(); ?>"
                       data-currency-conversion="<?php echo $currencyConversion; ?>"
                       data-has-variations="<?php if(!is_null($item->getVariations())): echo "true"; else: echo "false"; endif; ?>"
                    >
                        Add To Cart
                    </a>
                    <?php endif; ?>

                </div>
            <?php if($item->getContent()->getViewUrl()): ?>
            </a>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
    </ul>
</section>