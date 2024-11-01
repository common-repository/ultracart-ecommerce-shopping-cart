<?php
/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */

?>
<article class="uc-item js-uc-item <?php echo 'uc-product-' . esc_html($item->getMerchantItemId()); ?> uc-safeplace">

    <?php if($gallery): ?>
    <!-- Product Image - START -->
    <?php include UCWP_PLUGIN_PATH . 'snippets/ultraslider.php'; ?>
    <!-- Product Image - END -->
    <?php endif; ?>

    <!-- Product Info - START -->
    <section class="uc-item-info <?php if($gallery == false ): ?>uc-item-no-gallery<?php endif; ?>">
        <form action="https://secure.ultracart.com/cgi-bin/UCEditor?merchantId=<?php echo $item->getMerchantId();  ?>" method="post">
                <input type="hidden" name="merchantId" value="<?php echo $item->getMerchantId();  ?>">
                <input type="hidden" name="ADD" value="<?php echo $item->getMerchantItemId();  ?>">

            <?php if($title): ?>
            <!-- START Title -->
            <h1><?php echo esc_html($item->getDescription()); ?></h1>
            <!-- END Title -->
            <?php endif; ?>

            <?php if($price): ?>
            <!-- START PRICE -->
            <?php include UCWP_PLUGIN_PATH . 'snippets/price.php'; ?>
            <!-- END PRICE -->
            <?php endif; ?>

            <?php if($extended_description): ?>
            <!-- START DESCRIPTION -->
            <div class="uc-item-description">
                <?php
                if (!is_null($item->getContent())
                    && !is_null($item->getContent()->getExtendedDescription())
                    && strlen($item->getContent()->getExtendedDescription()) > 0
                ) {
                    if ($extended_description_esc) {
                        echo esc_html($item->getContent()->getExtendedDescription());
                    } else {
                        echo $item->getContent()->getExtendedDescription();
                    }
                }
                ?>
            </div>
            <!-- END DESCRIPTION -->
            <?php endif; ?>

            <!-- START VARIATION -->
            <div class="uc-item-variants">
              <?php include UCWP_PLUGIN_PATH . 'snippets/variations.php'; ?>
            </div>
            <!-- END VARIATION -->

            <?php if($options): ?>
            <!-- START OPTIONS -->
            <div class="uc-item-options">
              <?php include UCWP_PLUGIN_PATH . 'snippets/options.php'; ?>
            </div>
            <!-- END OPTIONS -->
            <?php endif; ?>

            <?php if($auto_order_schedules): ?>
            <!-- START AUTO ORDER SCHEDULES -->
            <div class="uc-item-auto-order-schedules">
                <?php include UCWP_PLUGIN_PATH . 'snippets/auto-order-schedules.php'; ?>
            </div>
            <!-- END AUTO ORDER SCHEDULES -->
            <?php endif; ?>

            <div class="uc-item-add">
              <div class="uc-qty">
                <?php if($quantity): ?>
                <!-- START QUANTITY -->
                <label>
                    <span>Qty</span>
                    <input class="js-item-qty uc-input-qty"
                           type="number"
                           name="Quantity"
                           value="1"
                           min="1"
                    />
                </label>
                <!-- END QUANTITY -->
                <?php else: ?>
                    <input type="hidden" name="Quantity" class="js-item-quantity" value="1">
                <?php endif; ?>
              </div>

            <input type="submit"
                   value="<?php if(ucwp_isOrderable($item) == false): echo 'Out of Stock'; else: echo 'Add to Cart'; endif; ?>"
                   class="js-add-to-cart uc-button uc-add-to-cart uc-add-btn"
                   data-itemid="<?php echo $item->getMerchantItemId();  ?>"
                   data-immediate-checkout="<?php echo $immediate_checkout; ?>"
                   data-currency-conversion="<?php echo $currencyConversion; ?>"
                   <?php if(ucwp_isOrderable($item) == false): echo 'disabled'; endif; ?>
                   style="opacity: 1;"
            />
        </form>

    </section>
    <!-- Product Info - END -->

</article><!-- .uc-api-container -->