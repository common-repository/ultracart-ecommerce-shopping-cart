<?php
/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */
?>

<article class="uc-buy-button <?php echo 'uc-product-' . esc_html($item->getMerchantItemId()); ?> uc-safeplace">

    <form action="https://secure.ultracart.com/cgi-bin/UCEditor?merchantId=<?php echo $item->getMerchantId(); ?>" method="post">
        <input type="hidden" name="merchantId" value="<?php echo $item->getMerchantId(); ?>">
        <input type="hidden" name="ADD" value="<?php echo $item->getMerchantItemId(); ?>">

        <input type="submit"
               value="Add to Cart"
               class="js-buy-button uc-button uc-add-to-cart"
               data-itemid="<?php echo $item->getMerchantItemId(); ?>"
               data-immediate-checkout="<?php echo $immediate_checkout; ?>"
               data-currency-conversion="<?php echo $currencyConversion; ?>"
               data-has-variations="<?php if(!is_null($item->getVariations())): echo "true"; else: echo "false"; endif; ?>"
        />
    </form>

</article><!-- .uc-api-container -->