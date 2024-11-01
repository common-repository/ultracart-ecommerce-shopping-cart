/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */

UCWP.autoOrderScheduleCost = (function($, window, document) {

    // TODO: [x] discuss price discrepancy when adding multiple subscription types to the cart.  It currently sets the price
    //       of ALL similar items with the cost of the first one, regardless of subscription selection.
    // TODO: [x] Can different subscriptions have the different prices.  My current understanding is that they can't.
    //       subscription price can be different from non-subscription prices, but not for each subscription.
    // TODO: [ ] Test an item with sales price
    // TODO: [ ] Make sure new composer files get added to production svn repo

    var elems = {
        $itemPrice: $(".js-uc-item-price"),
        $price: $(".js-uc-price"),
        $salePrice: $(".js-uc-sale-price"),
        $select: $(".js-item-auto-order-schedule-value"),
    };

    function init() {
        var autoOrderCost = elems.$price.data('auto-order-cost-formatted');
        var hasSaleCost = elems.$salePrice.length > 0;
        var cost = hasSaleCost ? elems.$salePrice.data('cost-formatted') : elems.$price.data('cost-formatted');

        elems.$select.on('change', function(ev) {
            var val = $(ev.target).val();

            console.log('val', val);
            // use autoOrderCost if a subscription is selected AND the autoOrderCost is less than the sales cost
            if (val.length > 0 && parseFloat(autoOrderCost) < parseFloat(cost)) {
                elems.$price.text('$' + autoOrderCost);
                elems.$price.data('value', autoOrderCost);
                if (hasSaleCost === true) {
                    elems.$itemPrice.removeClass('uc-sale');
                    elems.$salePrice.hide();
                }
            } else {
                elems.$price.text('$' + elems.$price.data('cost-formatted'));
                elems.$price.data('value', elems.$price.data('cost-formatted'));
                if (hasSaleCost === true) {
                    elems.$itemPrice.addClass('uc-sale');
                    elems.$salePrice.show();
                }
            }

            var event = new Event('updateCurrencyConversion');

            window.dispatchEvent(event);
        });
    }

    return {
        init: init,
    };

})(jQuery, this, this.document);