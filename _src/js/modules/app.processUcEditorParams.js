UCWP.processUcEditorParams = (function ($, window, document) {

    var utils = {
        getURLParameter: function (name) {
            return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
        },
        getQueryParams: function (str) {
            var search = (str || window.location.search);
            var params = {};
            if (search.length > 0) {
                var paramArr = search.split('?')[1].split('&');
                var firstKeyValue =  paramArr[0].split('=');
                var initialValue = {};
                initialValue[firstKeyValue[0]] = firstKeyValue[1];
                params = paramArr.reduce(function (acc, cv) {
                    var s = cv.split('=');
                    var key = s[0].toLowerCase();
                    if (typeof acc[s[0]] === 'undefined') {
                        if ((s[1] || '').indexOf(',') === -1) {
                            acc[key] = [decodeURIComponent(s[1])];
                        } else {
                            acc[key] = []
                                .concat(s[1].split(',').map(function(s) { return decodeURIComponent(s); }));
                        }
                    } else {
                        if ((s[1] || '').indexOf(',') === -1) {
                            acc[key].push(decodeURIComponent(s[1]));
                        } else {
                            acc[key] = acc[s[0]]
                                .concat(s[1].split(',').map(function(s) { return decodeURIComponent(s); }));
                        }
                    }
                    return acc;
                }, {});
            }
            return params;
        },
        isYesValue: function(value) {
            var val = typeof value === 'string' ? value.toLowerCase() : value.toString().toLowerCase();
            return val === 'yes' || val === 'y' || val === 'true' || val === '1';
        },
    };

    var billingProperties = {
        billingfirstname: 'first_name',
        billinglastname: 'last_name',
        billingcompany: 'company',
        billingaddress1: 'address1',
        billingaddress2: 'address2',
        billingcity: 'city',
        billingstate: 'state_region',
        billingpostalcode: 'postal_code',
        billingcountry: 'country_code',
        billingdayphone: 'day_phone',
        billingeveningphone: 'evening_phone',
        billingtitle: 'title',
        email: 'email',
        emailconfirm: 'email_confirm',
    };
    var shippingProperties = {
        shippingfirstname: 'first_name',
        shippinglastname: 'last_name',
        shippingcompany: 'company',
        shippingaddress1: 'address1',
        shippingaddress2: 'address2',
        shippingcity: 'city',
        shippingstate: 'state_region',
        shippingpostalcode: 'postal_code',
        shippingcountry: 'country_code',
        shippingdayphone: 'day_phone',
        shippingeveningphone: 'evening_phone',
        shippingmethod: 'shipping_method',
        deliverydate: 'delivery_date',
        shipondate: 'ship_on_date',
        shipping3rdpartyaccountnumber: 'shipping_3rd_party_account_number',
        shippingspecialinstructions: 'special_instructions',
        shippingtitle: 'title',
    };
    var ccProperties = {
        creditcardtype: 'card_type',
        creditcardnumbertoken: 'card_number_token',
        creditcardexpmonth: 'card_expiration_month',
        creditcardexpyear: 'card_expiration_year',
    };
    var paymentProperties = {
        paymentmethod: 'payment_method',
        rtgcode: 'rtg_code'
    };

    var checkoutProperties = {
        customfield1: 'custom_field1',
        customfield2: 'custom_field2',
        customfield3: 'custom_field3',
        customfield4: 'custom_field4',
        customfield5: 'custom_field5',
        customfield6: 'custom_field6',
        customfield7: 'custom_field7',
        comments: 'comments',
        // affid: 'affiliateId',
        // subid: 'affiliateSubId'
    };
    var marketingProperties = {
        advertisingsource: 'advertising_source',
        mailinglistoptin: 'mailing_list_opt_in'
    };

    function result(result, changed) {
        return { value: result, changed: changed };
    }

    function updateCartBilling(billingProps, params) {
        var changed = false;
        var billing = billingProps;

        for (var propertyName in billingProperties) {
            if (billingProperties.hasOwnProperty(propertyName)) {
                if (params.hasOwnProperty(propertyName)) {
                    billing[billingProperties[propertyName]] = params[propertyName][0];
                    changed = true;
                }
            }
        }

        if (typeof params.ccemail !== 'undefined') {
            billing.ccEmail = params.ccemail;
            changed = true;
        }

        return result(billing, changed);
    }

    function updateCartShipping(shippingProps, params) {
        var changed = false;
        var shipping = shippingProps;

        for (var propertyName in shippingProperties) {
            if (shippingProperties.hasOwnProperty(propertyName)) {
                if (params.hasOwnProperty(propertyName)) {
                    shipping[shippingProperties[propertyName]] = params[propertyName][0];
                    changed = true;
                }
            }
        }

        if (typeof params.shippingresidentialaddress !== 'undefined') {
            shipping.shipToResidential = utils.isYesValue(params.shippingresidentialaddress[0]);
            changed = true;
        }

        if (typeof params.liftgate !== 'undefined') {
            shipping.lift_gate = utils.isYesValue(params.liftgate[0]);
            changed = true;
        }


        return result(shipping, changed);
    }

    function updateShippingSameAsBilling(cartObj, params) {
        var copyBToS = false;
        var changed = false;
        var cart = cartObj;

        if (params.hasOwnProperty('defaultshippingsameasbilling') && utils.isYesValue(params.shippingdifferent[0])) {
            copyBToS = true;
        }

        if (copyBToS && typeof cart.shipping !== 'undefined' && typeof cart.billing !== 'undefined') {
            cart.shipping.title = cart.billing.title;
            cart.shipping.last_name = cart.billing.last_name;
            cart.shipping.first_name = cart.billing.first_name;
            cart.shipping.company = cart.billing.company;
            cart.shipping.address1 = cart.billing.address1;
            cart.shipping.address2 = cart.billing.address2;
            cart.shipping.city = cart.billing.city;
            cart.shipping.state_region = cart.billing.state_region;
            cart.shipping.postal_code = cart.billing.postal_code;
            cart.shipping.country_code = cart.billing.country_code;
            changed = true;
        }
        return result(cart.shipping, changed);
    }

    function updateBillingSameAsShipping(cartObj, params) {
        var copySToB = false;
        var changed = false;
        var cart = cartObj;

        if (params.hasOwnProperty('billingsameasshipping') && utils.isYesValue(params.billingsameasshipping[0])) {
            copySToB = true;
        }
        if (params.hasOwnProperty('defaultbillingsameasshipping') && utils.isYesValue(params.billingdifferent[0])) {
            copySToB = true;
        }

        if (copySToB && typeof cart.shipping !== 'undefined' && typeof cart.billing !== 'undefined') {
            cart.billing.title = cart.shipping.title;
            cart.billing.last_name = cart.shipping.last_name;
            cart.billing.first_name = cart.shipping.first_name;
            cart.billing.company = cart.shipping.company;
            cart.billing.address1 = cart.shipping.address1;
            cart.billing.address2 = cart.shipping.address2;
            cart.billing.city = cart.shipping.city;
            cart.billing.state_region = cart.shipping.state_region;
            cart.billing.postal_code = cart.shipping.postal_code;
            cart.billing.country_code = cart.shipping.country_code;
            changed = true;
        }
        return result(cart.billing, changed);
    }

    function updateCartPayment(paymentProps, params) {
        var changed = false;
        var payment = paymentProps;
        var creditCard = paymentProps.credit_card || {};
        var propertyName;

        for (propertyName in paymentProperties) {
            if (paymentProperties.hasOwnProperty(propertyName)) {
                if (params.hasOwnProperty(propertyName)) {
                    payment[paymentProperties[propertyName]] = params[propertyName][0];
                    changed = true;
                }
            }
        }

        // if (typeof creditCard !== 'undefined') {
        for (propertyName in ccProperties) {
            if (ccProperties.hasOwnProperty(propertyName)) {
                if (params.hasOwnProperty(propertyName)) {
                    if (propertyName === 'creditcardexpmonth' || propertyName === 'creditcardexpyear') {
                        creditCard[ccProperties[propertyName]] = isNaN(params[propertyName][0]) ? 0 : parseInt(params[propertyName][0]);
                    } else {
                        creditCard[ccProperties[propertyName]] = params[propertyName][0];
                    }
                    changed = true;
                }
            }
            // }
            payment.credit_card = creditCard;
        }

        return result(payment, changed);
    }

    function updateCartCheckout(checkoutProps, params) {
        var changed = false;
        var checkout = checkoutProps;

        for (var propertyName in checkoutProperties) {
            if (checkoutProperties.hasOwnProperty(propertyName)) {
                if (params.hasOwnProperty(propertyName)) {
                    checkout[checkoutProperties[propertyName]] = params[propertyName][0];
                    changed = true;
                }
            }
        }

        return result(checkout, changed);
    }

    function updateCartMarketing(marketingProps, params) {
        var changed = false;
        var marketing = marketingProps;

        for (var propertyName in marketingProperties) {
            if (marketingProperties.hasOwnProperty(propertyName)) {
                if (params.hasOwnProperty(propertyName)) {
                    marketing[marketingProperties[propertyName]] = params[propertyName][0];
                    changed = true;
                }
            }
        }

        return result(marketing, changed);
    }

    function updateCartItems(itemProps, params) {
        var changed = false;
        var items = itemProps;

        if (params.hasOwnProperty('clearcart')) {
            changed = true;
            items = [];
        }

        if (params.hasOwnProperty(('add'))) {
            changed = true;

            // prepare quantity
            var qty = 1;
            if (params.hasOwnProperty('quantity')) {
                qty = parseInt(params.quantity[0]);
            }
            if (isNaN(qty)) {
                qty = 1;
            }

            // check for options
            var options = [];
            for (var i = 1; i <= 10; i++) {
                if (params.hasOwnProperty('optionname' + i) && params.hasOwnProperty('optionvalue' + i)) {
                    // we have items, make sure options property is initialized.
                    // if (!item.hasOwnProperty('options')) {
                    //     item.options = [];
                    // }
                    var itemOption = {};
                    itemOption.name = params['optionname' + i][0];
                    itemOption.selected_value = params['optionvalue' + i][0];
                    options.push(itemOption);
                }
            }

            // check for variation
            var variations = [];
            for (var j = 1; j <= 10; j++) {
                if (params.hasOwnProperty('variationname' + j) && params.hasOwnProperty('variationvalue' + j)) {
                    // we have items, make sure variations property is initialized.
                    // if (!item.hasOwnProperty('variations')) {
                    //     variations = {};
                    // }
                    variations.push({
                        variation_name: params['variationname' + j][0],
                        variation_value: params['variationvalue' + j][0]
                    });
                }
            }

            params.add.forEach(function (itemId) {
                var item = {
                    item_id: itemId,
                    quantity: qty,
                    options: options,
                    variations: variations,
                };
                // // check for options
                // for (var i = 1; i <= 10; i++) {
                //     if (params.hasOwnProperty('optionname' + i) && params.hasOwnProperty('optionvalue' + i)) {
                //         // we have items, make sure options property is initialized.
                //         if (!item.hasOwnProperty('options')) {
                //             item.options = [];
                //         }
                //         var itemOption = {};
                //         itemOption.name = params['optionname' + i][0];
                //         itemOption.selected_value = params['optionvalue' + i][0];
                //         item.options.push(itemOption);
                //     }
                // }

                // // check for variation
                // for (var j = 1; j <= 10; j++) {
                //     if (params.hasOwnProperty('variationname' + j) && params.hasOwnProperty('variationvalue' + j)) {
                //         // we have items, make sure variations property is initialized.
                //         if (!item.hasOwnProperty('variations')) {
                //             item.variations = {};
                //         }
                //         item.variations[params['variationname' + j][0]] = params['variationvalue' + j][0];
                //     }
                // }
                items.push(item);
            });

        }

        // check for multiple items.  Look for 'add_' parameters.
        var parameterName;
        var itemId;
        for (parameterName in params) {
            if (params.hasOwnProperty(parameterName) && parameterName.indexOf('add_') === 0) {
                var quantity = parseInt(params[parameterName][0]);
                itemId = parameterName.substring('add_'.length);
                changed = true;
                if (quantity) {
                    var itm = {};
                    itm.item_id = itemId;
                    itm.quantity = quantity;
                    items.push(itm);
                }
            }
        }

        // check for remove_ parameters
        for (parameterName in params) {
            if (params.hasOwnProperty(parameterName) && parameterName.indexOf('remove_') === 0) {
                itemId = parameterName.substring('remove_'.length).toLowerCase();
                changed = true;
                // Go through looking for that
                for (var k = 0; k < items.length; k++) {
                    if (items[k].item_id.toLowerCase() === itemId) {
                        items.splice(k, 1);
                        break;
                    }
                }
            }
        }

        return result(items, changed);
    }

    function updateCartCoupons(couponProps, params) {
        var changed = false;
        var coupons = couponProps;

        if (typeof coupons === 'undefined') {
            coupons = [];
        }
        if (params.hasOwnProperty('clearcoupon') && utils.isYesValue(params.clearcoupon[0])) {
            coupons = [];
            changed = true;
        } else if (params.hasOwnProperty('coupon')) {
            // TODO: should this be else if?  different from original script, but seems correct
            for (var i = 0; i < params.coupon.length; i++) {
                changed = true;
                coupons.push({ coupon_code: params.coupon[i] });
            }
        }

        return result(coupons, changed);
    }

    function updateCart(cart, params) {
        var updatedCart = cart;
        var cartChanged = false;

        if (typeof params.currencycode !== 'undefined') {
            updatedCart.currency_code = params.currencycode[0];
            cartChanged = true;
        }

        if (typeof params.languageisocode !== 'undefined') {
            updatedCart.language_iso_code = params.languageisocode[0];
            cartChanged = true;
        }

        // if (typeof updatedCart.billing !== 'undefined') {
        var billingResult = updateCartBilling(updatedCart.billing || {}, params);
        if (billingResult.changed === true) {
            updatedCart.billing = billingResult.value;
            cartChanged = true;
        }
        // }

        // if (typeof updatedCart.shipping !== 'undefined') {
        var shippingResult = updateCartShipping(updatedCart.shipping || {}, params);
        if (shippingResult.changed === true) {
            updatedCart.shipping = shippingResult.value;
            cartChanged = true;
        }
        // }

        // if (typeof updatedCart.shipping !== 'undefined' && typeof updatedCart.billing !== 'undefined') {
        var bToSResult = updateBillingSameAsShipping(updatedCart, params);
        if (bToSResult.changed === true) {
            updatedCart.billing = bToSResult.value;
            cartChanged = true;
        }
        // }

        // if (typeof updatedCart.shipping !== 'undefined' && typeof updatedCart.billing !== 'undefined') {
        var sToBResult = updateShippingSameAsBilling(updatedCart, params);
        if (sToBResult.changed === true) {
            updatedCart.shipping = sToBResult.value;
            cartChanged = true;
        }
        // }

        // if (typeof updatedCart.payment !== 'undefined') {
        var paymentResult = updateCartPayment(updatedCart.payment || {}, params);
        if (paymentResult.changed === true) {
            updatedCart.payment = paymentResult.value;
            cartChanged = true;
        }
        // }

        // if (typeof updatedCart.checkout !== 'undefined') {
        var checkoutResult = updateCartCheckout(updatedCart.checkout || {}, params);
        if (checkoutResult.changed === true) {
            updatedCart.checkout = checkoutResult.value;
            cartChanged = true;
        }
        // }

        // if (typeof updatedCart.marketing !== 'undefined') {
        var marketingResult = updateCartMarketing(updatedCart.marketing || {}, params);
        if (marketingResult.changed === true) {
            updatedCart.marketing = marketingResult.value;
            cartChanged = true;
        }
        // }

        // if (typeof updatedCart.items !== 'undefined' && updatedCart.items.length > 0) {
        var itemsResult = updateCartItems(updatedCart.items || [], params);
        if (itemsResult.changed === true) {
            updatedCart.items = itemsResult.value;
            cartChanged = true;
        }
        // }

        // if (typeof updatedCart.coupons !== 'undefined' && updatedCart.coupons.length > 0) {
        var couponsResult = updateCartCoupons(updatedCart.coupons || [], params);
        if (couponsResult.changed === true) {
            updatedCart.coupons = couponsResult.value;
            cartChanged = true;
        }
        // }

        return result(updatedCart, cartChanged);
    }

    function init() {
        var params = utils.getQueryParams();
        // console.log('params - ', params);
        $(document).on('ucwpCart', function (ev, cart) {

            var result = updateCart(cart, params);

            if (result.changed === true) {
                UC.postCart(result.value, function (updatedCart) {
                    console.log('updated cart from UCEditor params', updatedCart);
                });
            }
        });

    }

    return {
        init: init,
    };
})(jQuery, this, this.document);