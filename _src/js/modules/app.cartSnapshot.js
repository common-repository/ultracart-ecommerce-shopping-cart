/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */
UCWP.cartSnapShot = (function($, window, undefined){

    function init() {
        initCartSnapshot();
        initCartSnapshotEvents();
        initAddToCart();
        initAddSimpleItemToCart();
        initSnapshotItemRemoval();
    }

    function getTotalQuantity(cart) {
        var qty = 0;
        for (var i = 0; i < cart.items.length; i++) {
            qty += cart.items[i].quantity;
        }

        return qty;
    }

    function initCartSnapshot() {
        var cartSnapshot =
        '<div class="cart-snapshot uc-safeplace">' +
        '<div class="cart-snapshot-header">' +
        '<div class="close js-view-cart-snapshot">X</div>' +
        '<h3>Your Cart</h3>' +
        // '<a class="cart icon-cart js-view-checkout" href="https://secure.ultracart.com/cgi-bin/UCEditor?merchantId='+MID+'" title="Go to my cart">' +
        // '<div class="item-count js-snapshot-item-count">0</div>' +
        // '<span>My Cart</span>' +
        // '</a>' +
        '</div>' +
        '<div class="cart-snapshot-items js-snapshot-items">' +
        '<p>No items in your cart</p>' +
        '</div>' +
        '<div class="cart-snapshot-options js-cart-snapshot-options">' +
        '<div class="js-view-cart-snapshot" style="width:100%;">' +
        '<button class="cart-snapshot-button cart-snapshot-button-continue" style="width:100%;">Back</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="dark-overlay js-view-cart-snapshot"></div>';

        UCWP.elems.$body.append(cartSnapshot);

        UC.getCart(function(cart) {
            $('.js-item-count').text(' (' + getTotalQuantity(cart) + ')');
            $(document).trigger('ucwpCart', cart);
        });

        // Add class to links with #viewcart and #checkout href value
        $('a[href="#viewcart"]').addClass('js-view-cart-snapshot');
        $('a[href="#viewcart-icon"]').addClass('js-view-cart-snapshot js-add-cart-icon');
        $('a[href="#viewcart-icon-left"]').addClass('js-view-cart-snapshot js-add-cart-icon-left');

        $('a[href="#checkout"]').addClass('js-view-checkout');
        $('a[href="#checkout-icon"]').addClass('js-view-checkout js-add-cart-icon');
        $('a[href="#checkout-icon-left"]').addClass('js-view-checkout js-add-cart-icon-left');

        var $iconLinkRight = $('.js-add-cart-icon');
        var $iconLinkLeft = $('.js-add-cart-icon-left');

        if(($iconLinkLeft.length + $iconLinkRight.length) > 0) {
            var cartIconPath = WP_UCWP.ucwpDirUrl+'assets/svg/cart.svg';
            $.get(cartIconPath, function(data) {
                var cartIcon = $(data).find('svg').addClass('js-ucwp-cart-icon');

                $iconLinkRight.each(function(index, element){
                    $(element).append(cartIcon.clone());
                });
                $iconLinkLeft.each(function(index, element){
                    $(element).prepend(cartIcon.clone());
                });

                $('.js-ucwp-cart-icon').each(function(i) {
                    var $this = $(this);
                    var height;
                    var fontSize = $this.css('fontSize');
                    if (typeof fontSize === 'undefined') {
                        // if fontSize is undefined, fall back to parent height
                        height = $this.parent().height();
                    } else {
                        // if font size is defined, set the height to the fontSize + 1.125 to adjust for svg height
                        height = 'calc(' + $this.css('fontSize') + ' * 1.125)';
                    }

                    $this.css({
                        "fill": $this.css('color'),
                        'height': height,
                        'width': 'auto',
                        'vertical-align': 'middle'
                    });

                    var numFramesAreSame = 0;
                    function updateFillColor() {
                        if($this.css('color') === $this.css('fill')) {
                            numFramesAreSame++;
                        }
                        // Keep updating the color until the color stays the same for 10 frames
                        if (numFramesAreSame < 10) {
                            window.requestAnimationFrame(updateFillColor);
                        } else {
                            numFramesAreSame = 0;
                        }
                        $this.css({
                            "fill": $this.css('color'),
                        });
                    }
                    $this.parent().hover(function() {
                        window.requestAnimationFrame(updateFillColor);
                    });
                });
            });
        }
    }

    function initCartSnapshotEvents() {

        UCWP.elems.$doc.on('mouseover mouseleave', '.cart-snapshot .cart-snapshot-items .js-remove', function(){
            $(this).parent().toggleClass('remove-item');
        });

        UCWP.elems.$doc.on('click', '.cart-snapshot .cart-snapshot-items .js-remove', function(){
            $(this).parents("li:first").toggleClass('remove-confirm');
        });

        UCWP.elems.$doc.on('click', '.js-view-checkout', function(e) {
            e.preventDefault();

            UC.getCart(function(cart) {
                var checkoutRequest = {
                    'operation': 'view',
                    'cart': cart,
                    error_parameter_name: 'error', // if there are errors after the hand-off, the redirect page will receive those errors using this http parameter
                    error_return_url: document.URL, // this same page.
                    secure_host_name: window.UCWP_secure_host_name || null // can be null.  defaults to secure.ultracart.com if null.  could also be www.mystore.com if that was your url.
                    // the secureHostName is where the checkout finishes on (receipt).  many merchants have dozens of sites.  So, if this isn't secure.ultracart and
                    // you have more than one, you must specify it.
                };

                UC.viewCheckout(checkoutRequest, function( errors ) {
                    console.error(errors);
                });
            });
        });

        UCWP.elems.$doc.on('click.medium', '.js-view-cart-snapshot', function(e) {
            if (window.matchMedia("(min-width: 641px)").matches) {
                if( !UCWP.elems.$body.hasClass('cart-snapshot-active') ) {
                    UC.getCart(function(cart) {
                        updateSnapshotItems(cart);
                        showSnapshot();

                        $('.js-item-count').text(' (' + getTotalQuantity(cart) + ')');
                    });
                } else {
                    hideSnapshot();
                }
            } else {
                UC.getCart(function(cart) {
                    var checkoutRequest = {
                        'operation': 'view',
                        'cart': cart,
                        error_parameter_name: 'error', // if there are errors after the hand-off, the redirect page will receive those errors using this http parameter
                        error_return_url: document.URL, // this same page.
                        secure_host_name: window.UCWP_secure_host_name || null // can be null.  defaults to secure.ultracart.com if null.  could also be www.mystore.com if that was your url.
                        // the secureHostName is where the checkout finishes on (receipt).  many merchants have dozens of sites.  So, if this isn't secure.ultracart and
                        // you have more than one, you must specify it.
                    };
                    UC.viewCheckout(checkoutRequest, function( errors ) {
                        console.error(errors);
                    });
                });
            }
            e.preventDefault();
        });
    }

    function updateSnapshotItems(cart) {
        $('.js-snapshot-item-list').siblings('.js-snapshot-item').remove();

        if(cart.items.length > 0) {
            var snapshotItems =
                '<ul>' +
                '<li class="columns">' +
                '<div class="item-name"><strong>Item</strong></div>' +
                '<div class="item-qty"><strong>Qty</strong></div>' +
                '<div class="item-price"><strong>Price</strong></div>' +
                '</li>';

            for (var i = 0; i < cart.items.length; i++) {
                var autoOrderSchedule = '';
                if (cart.items[i].auto_order_schedule && cart.items[i].auto_order_schedule.toLowerCase() !== 'none') {
                    autoOrderSchedule = '<br><span style="font-weight: normal; font-size: .8em;">' + cart.items[i].auto_order_schedule + '</span>';
                }
                snapshotItems +=
                    '<li class="item js-snapshot-item">' +
                    '<div class="remove js-remove">X</div>' +
                    '<div class="remove-options">' +
                    '<div class="remove-options-remove js-snapshot-confirm-remove" data-itemid="' + cart.items[i].item_id + '" data-position="' + cart.items[i].position + '">' +
                    'Remove' +
                    '</div>' +
                    '<div class="remove-options-cancel js-remove">' +
                    'Cancel' +
                    '</div>' +
                    '</div>' +
                    '<div class="item-info">' +
                    '<div class="item-name">' + cart.items[i].description + autoOrderSchedule +
                    '</div>' +
                    '<div class="item-qty">' + cart.items[i].quantity + '</div>' +
                    '<div class="item-price">' + cart.items[i].unit_cost.localized_formatted + '</div>' +
                    '</div>' +
                    '</li>';
            }

            snapshotItems +=
                '<li class="total">' +
                '<div class="item-total">Total</div>' +
                '<div class="item-price js-snapshot-total">' + cart.summary.subtotal.localized_formatted + '</div>' +
                '</li>' +
                '</ul>';

            $('.js-snapshot-items').html(snapshotItems);
            $('.js-cart-snapshot-options').html(
                '<div class="js-view-cart-snapshot">' +
                '<button class="cart-snapshot-button cart-snapshot-button-continue">Back</button>' +
                '</div>' +
                '<div>' +
                '<a class="cart-snapshot-button cart-snapshot-button-checkout js-view-checkout">Checkout</a>' +
                '</div>'
            );

        } else {
            $('.js-snapshot-items').html('<p>No items in your cart</p>');
            $('.js-cart-snapshot-options').html(
                '<div class="js-view-cart-snapshot" style="width:100%;">' +
                '<button class="cart-snapshot-button cart-snapshot-button-continue" style="width:100%;">Back</button>' +
                '</div>'
            );
        }
    }

    function initSnapshotItemRemoval() {
        UCWP.elems.$doc.on('click', '.js-snapshot-confirm-remove', function() {
            var $this = $(this);
            var itemInfo = {
                'item_id': $this.data('itemid'),
                'remove': true,
                'position': $this.data('position')
            };

            UC.getCart(function(cart) {
                UC.postCart(UC.updateCartItems(cart, itemInfo), function(updatedCart, errors) {

                    if(errors.length > 0) {
                        UCWP.utils.errorHandler(errors);
                        return false;
                    }

                    //calculate qty of items in cart
                    $('.js-item-count').text(' (' + getTotalQuantity(updatedCart) + ')');

                    updateSnapshotItems(updatedCart);
                });
            });
        });
    }

    function initAddSimpleItemToCart() {
        $('.js-buy-button, .js-add-list-item-to-cart').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var immediateCheckout = $this.data('immediate-checkout') || false;
            var hasVariations = $this.data('has-variations') || false;
            var currencyConversionCode = $this.data('currencyConversion') || 'USD';

            if(hasVariations) {
                alert('This item has variations.  \nPlease add a WP Gutenberg item block with Item Id: "'+ $this.data('itemid') +'" or a shortcode: [ucitem itemid="'+ $this.data('itemid') +'"] for proper variation handling');
                return false;
            }

            UC.getCart(function(cart) {
                var itemInfo = {
                    'item_id': $this.data('itemid'),
                    'quantity': '1',
                    'variations': [],
                    'options': []
                };

                // set the currency code based on the data-currency-conversion value on the button
                cart.currency_code = currencyConversionCode;

                UC.postCart(UC.updateCartItems(cart, itemInfo), function (updatedCart, errors) {

                    if(errors.length > 0) {
                        UCWP.utils.errorHandler(errors);
                        return false;
                    }

                    if ( window.matchMedia("(min-width: 641px)").matches && immediateCheckout === false ) {
                        updateSnapshotItems(updatedCart);

                        $('.js-item-count').text(' (' + getTotalQuantity(updatedCart) + ')');

                        //show the menu
                        showSnapshot();
                    } else {
                        var checkoutRequest = {
                            'operation': 'view',
                            'cart': updatedCart,
                            error_parameter_name: 'error', // if there are errors after the hand-off, the redirect page will receive those errors using this http parameter
                            error_return_url: document.URL, // this same page.
                            secure_host_name: window.UCWP_secure_host_name || null // can be null.  defaults to secure.ultracart.com if null.  could also be www.mystore.com if that was your url.
                            // the secureHostName is where the checkout finishes on (receipt).  many merchants have dozens of sites.  So, if this isn't secure.ultracart and
                            // you have more than one, you must specify it.
                        };
                        UC.viewCheckout(checkoutRequest, function (errors) {
                            console.error(errors);
                        });
                    }
                });
            });
        });
    }

    function initAddToCart() {
        $('.js-add-to-cart').on('click', function(e) {
            e.preventDefault();
            var $this = $(this);
            var $form = $this.parents("form");
            var $quantity = $form.find(".js-item-qty");
            var $variation = $form.find(".js-variation-select");
            var $option = $form.find(".js-item-option");
            var $autoOrderScheduleSelect = $form.find(".js-item-auto-order-schedule-value");
            var immediateCheckout = $this.data('immediate-checkout');
            var currencyConversionCode = $this.data('currencyConversion') || 'USD';
            var $requiredFields = $('.js-item-option :input[required]:visible, .js-variation-select :input[required]:visible');

            // Check if the form is valid
            if(typeof window.customValidityCheck !== "undefined") {
                // Has the user added their own validity check function?  If so, call it.
                if(window.customValidityCheck() === false) return false;
            } else {
                // Otherwise, use our own basic validity checker
                $form.find('.error').remove();
                if($form[0].checkValidity() === false) {
                    UCWP.utils.errorHandler(['Please fill in all required fields']);
                    $requiredFields.each(function(idx, el){
                        if(el.checkValidity() === false) {
                            var $labelContainer = $(el).parents('.js-item-option, .js-variation-select');
                            if($labelContainer.find('.error').length === 0) {
                                $labelContainer.append('<small class="error">This is required.</small>');
                            }
                        }
                    });
                    return false;
                }
            }

            UC.getCart(function(cart) {
                var itemInfo = {
                    'item_id': $this.data('itemid'),
                    'quantity': $quantity.val(),
                };

                if($variation.length > 0) {
                    itemInfo.variations = [];

                    $variation.each(function(/*idx, el*/) {
                        var variationSelection = {
                            'variation_name': $(this).find('input[type="hidden"]').val(),
                            'variation_value': $(this).find('select.js-variation').val()
                        };

                        itemInfo.variations.push(variationSelection);
                    });
                }

                if($option.length > 0) {
                    itemInfo.options = [];
                    // //for each dropdown option, add a name/value object to the option array
                    $option.each(function(idx/*, el*/) {
                        var $this = $(this);

                        switch($this.data('type')) {
                            case "dropdown":
                                itemInfo.options[idx] = {"name": $this.find('input[type="hidden"]').val(), "selected_value": $this.find('select').val()};
                                break;
                            case "single":
                                itemInfo.options[idx] = {"name": $this.find('input[type="hidden"]').val(), "selected_value": $this.find('input[type="text"]').val()};
                                break;
                            case "multiline":
                                itemInfo.options[idx] = {"name": $this.find('input[type="hidden"]').val(), "selected_value": $this.find('textarea').val()};
                                break;
                            case "radio":
                                itemInfo.options[idx] = {"name": $this.find('input[type="hidden"]').val(), "selected_value": $this.find('input[type="radio"]:checked').val()};
                                break;
                            default:
                                break;
                        }
                    });
                }

                if ($autoOrderScheduleSelect.length > 0) {
                    itemInfo.auto_order_schedule = $autoOrderScheduleSelect.val();
                }

                console.log('itemInfo', itemInfo);

                // set the currency code based on the data-currency-conversion value on the button
                cart.currency_code = currencyConversionCode;

                UC.postCart(UC.updateCartItems( cart, itemInfo ), function(updatedCart, errors) {

                    if(errors.length > 0) {
                        UCWP.utils.errorHandler(errors);
                        return false;
                    }

                    if( window.matchMedia("(min-width: 641px)").matches && immediateCheckout === false ) {
                            updateSnapshotItems(updatedCart);

                            $('.js-item-count').text(' (' + getTotalQuantity(updatedCart) + ')');

                        //show the menu
                        showSnapshot();
                    } else {
                        var checkoutRequest = {
                            'operation': 'view',
                            'cart': updatedCart,
                            error_parameter_name: 'error', // if there are errors after the hand-off, the redirect page will receive those errors using this http parameter
                            error_return_url: document.URL, // this same page.
                            secure_host_name: window.UCWP_secure_host_name || null // can be null.  defaults to secure.ultracart.com if null.  could also be www.mystore.com if that was your url.
                            // the secureHostName is where the checkout finishes on (receipt).  many merchants have dozens of sites.  So, if this isn't secure.ultracart and
                            // you have more than one, you must specify it.
                        };
                        UC.viewCheckout(checkoutRequest, function (errors) {
                            console.error(errors);
                        });
                    }
                });

            });
        });
    }

    function showSnapshot( callback ) {
        UCWP.elems.$body.addClass('cart-snapshot-active');
        $(".cart-snapshot").transition({}, 0, "linear", function() {
            $(this).css({"display": "block"}); // doing ut this way, instead of chaining a .show(), makes the transition smoother
        }).transition({x: "-320" }, 500, "linear", callback);
    }

    function hideSnapshot( delay ) {
        setTimeout(function(){
            if(UCWP.elems.$body.hasClass('cart-snapshot-active')) {
                UCWP.elems.$body.removeClass('cart-snapshot-active');
            }
            $(".cart-snapshot").transition({ x: 0 }, 500, "linear", function() {
                $(".cart-snapshot").css({"display": "none"});
            });
        }, delay || 0);
    }

    return {
        init: init,
        showSnapshot: showSnapshot,
        hideSnapshot: hideSnapshot,
        updateSnapshotItems: updateSnapshotItems
    };

})(jQuery, this );
