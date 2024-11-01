<?php
/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */
?>

<article class="uc-price <?php echo 'uc-product-' . esc_html($item->getMerchantItemId()); ?> uc-safeplace">
    <!-- START PRICE -->
    <?php include UCWP_PLUGIN_PATH . 'snippets/price.php'; ?>
    <!-- END PRICE -->

</article><!-- .uc-api-container -->