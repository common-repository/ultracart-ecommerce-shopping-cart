/*!
 * Ultracart Javascript REST Api Model Library
 *
 * Copyright (c) 2015 Josh York
 * Released under the MIT license
 */

(function($, window) {
    "use strict";

    var UC = {};

    var settings = {
        MID: null,
        browserKey: null,
        apiVersion: '2017-03-01',
        cartExpansion: 'items,summary,currency_conversion,coupons,marketing,billing,shipping,payment,checkout',
        cart: null,
        hostedFields: null,
        pathToProxy: "",
        themeCode: "DFLT",
        ultraCartHostedFieldsCssUrls: [],
        sessionStorageAvailable: storageAvailable('sessionStorage')
    };

    var cookieDomain = (function(){
        var i = 0;
        var domain = document.domain;
        var p = domain.split('.');
        var s = '_cn'+(new Date()).getTime();

        // loop through the domain segments (eg ['www', 'example', 'com'])
        // and continue until a document.cookie attempt sticks
        while(i < (p.length - 1) && document.cookie.indexOf(s + '=' + s) === -1){
            domain = '.' + p.slice(-1-(++i)).join('.'); // add a '.', and increment the index & start trying in reverse order
            document.cookie = s+"="+s+";domain="+domain+";";
        }
        // then clear the cookie so we can start fresh
        document.cookie = s+"=;expires=Thu, 01 Jan 1970 00:00:01 GMT;domain="+domain+";";

        // return the first successful domain
        return domain;
    })();

    function storageAvailable(type) {
        var storage;
        try {
            storage = window[type];
            var x = '__storage_test__';
            storage.setItem(x, x);
            storage.removeItem(x);
            return true;
        }
        catch(e) {
            return e instanceof DOMException && (
                    // everything except Firefox
                e.code === 22 ||
                // Firefox
                e.code === 1014 ||
                // test name field too, because code might not be present
                // everything except Firefox
                e.name === 'QuotaExceededError' ||
                // Firefox
                e.name === 'NS_ERROR_DOM_QUOTA_REACHED') &&
                // acknowledge QuotaExceededError only if there's something already stored
                (storage && storage.length !== 0);
        }
    }

    var utils = {
        setCookie: function(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime()+(exdays*24*60*60*1000));
            var expires = (exdays === 0) ? '' : "expires=" + d.toGMTString(); //if exdays is 0, remove "expires" so it is set to end of session
            document.cookie = cname + "=" + cvalue + "; " + expires + "; domain=" + cookieDomain + "; path=/";
        },

        unsetCookie: function(cname) {
            document.cookie = cname + "=; expires=Thu, 01 Jan 1970 00:00:01 GMT; domain=" + cookieDomain + "; path=/";
        },

        getCookie:  function(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)===' ') c = c.substring(1,c.length);
                if (c.indexOf(name)===0) return c.substring(name.length,c.length);
            }
            return "";
        },

        // getURLParameter: function (name) {
        //     return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [null, ''])[1].replace(/\+/g, '%20')) || null;
        // },
    };

    UC.init = function( config ) {
        $.ajaxSetup({ cache: false });
        $.extend(settings, config);

        var urlContainsAffId = window.location.search && window.location.search.toLowerCase().indexOf('affid') >= 0;
        var hostnameDiffFromReferrer = document.referrer && document.referrer.indexOf(window.location.hostname) === -1;
        if (urlContainsAffId || hostnameDiffFromReferrer){
            UC.registerAffiliateClick();
        }
    };

    UC.getCart = function( callback ) {
        // // return the cart if we remember what it is
        // if (settings.sessionStorageAvailable && sessionStorage.getItem('cart')) {
        //     // Check session storage first
        //     return callback( JSON.parse(sessionStorage.getItem('cart')) );
        // }

        if(settings.cart !== null) {
            // check settings cache next
            return callback( settings.cart );
        }

        // establish the request headers and get the cart id
        var cartId = utils.getCookie('UltraCartShoppingCartID');
        var headers = {
            'cache-control': 'no-cache',
            'x-ultracart-browser-key': settings.browserKey,
            'X-UltraCart-Api-Version': settings.apiVersion
        };

        // submit a request to the server to get the cart
        $.ajax({
            url: settings.pathToProxy + '/rest/v2/checkout/cart' + (cartId ? '/' + cartId : ''),
            type: 'GET',
            data: {
                '_expand': settings.cartExpansion
            },
            headers: headers,
            dataType: 'json'
        }).done(function( cartResponse ) {

            //remember the cart
            var cart = cartResponse.cart;
            if (settings.sessionStorageAvailable && typeof cart.currency_conversion !== 'undefined') {
                sessionStorage.setItem('currency_conversion', JSON.stringify(cart.currency_conversion));
            }
            settings.cart = cart;

            //check the cart - make sure we have the most current cart id
            if(cart.cart_id !== cartId) {
                utils.unsetCookie('UltraCartShoppingCartID');
            }

            // set the cart
            if(!utils.getCookie('UltraCartShoppingCartID')) {
                utils.setCookie('UltraCartShoppingCartID', cart.cart_id, 0);
            }

            // prosper - \\V//,
            callback( cart );
        });
    };

    /*
    // TODO: Update document for the newer API naming convention
     This method modifies the cart object by adding item objects onto it.
     Below is an example of the possible values for itemInfo
     var itemInfo = {
     item_id: test, 			*required* uc itemId
     quantity: 1, 				int
     options: [], 			array of name/value objects: {"name": name, "value": value}
     variations: [], 		array of name/value objects:{ variationName1: value, variationName2: value}
     remove: false, 		bool
     position: 1      		the position of the item in the cart.items object.  This is most useful on a view cart page where this value is more easily obtained
     };
     */
    UC.updateCartItems = function( cart, itemInfo ) {
        if( itemInfo.remove === true ) {
            for (var i = cart.items.length - 1; i >= 0; i--) {
                //There should be a better way to do this... Maybe checking that itemID and all options are the same?
                if(itemInfo.position && itemInfo.position === cart.items[i].position) {
                    cart.items[i].quantity = 0;
                }
            }
        } else {
            var qty = typeof itemInfo.quantity !== "undefined" ? parseInt(itemInfo.quantity) : 1;

            if(typeof itemInfo.item_id !== "undefined") {
                var item = {'item_id': itemInfo.item_id, 'quantity': qty};
            } else {
                console.error( "An Item ID must be defined" );
                return false;
            }

            if(typeof itemInfo.options === "object") {
                item.options = itemInfo.options;
            }

            if(typeof itemInfo.variations === "object") {
                item.variations = itemInfo.variations;
            }

            if(typeof itemInfo.auto_order_schedule  !== 'undefined' && itemInfo.auto_order_schedule.length > 0) {
                item.auto_order_schedule = itemInfo.auto_order_schedule;
            }

            //push item to cart object
            cart.items.push(item);
        }

        return cart;
    };

    UC.postCart = function( cart, callback, overrideExpansion ) {

        var headers = {
            'cache-control': 'no-cache',
            'x-ultracart-browser-key': settings.browserKey,
            'X-UltraCart-Api-Version': settings.apiVersion
        };

        var expansion =
            typeof overrideExpansion !== 'undefined'
                ? encodeURIComponent(overrideExpansion)
                : encodeURIComponent(settings.cartExpansion);

        // make sure we have the secure host name set
        if (typeof cart.checkout === 'undefined') {
            cart.checkout = {};
        }
        cart.checkout.storefront_host_name = window.UCWP_secure_host_name || null;

        $.ajax({
            url: settings.pathToProxy + '/rest/v2/checkout/cart?_expand=' + expansion,
            type: 'PUT', // Notice.  PUT is used for updating the cart, whereas POST is used to insert/supplant the cart.
            headers: headers,
            contentType: 'application/json; charset=UTF-8',
            data: JSON.stringify(cart),
            dataType: 'json'
        }).done(function( cartResponse ) {

            var cart = cartResponse.cart;
            var errors = typeof cartResponse.errors === 'undefined' ? [] : cartResponse.errors;

            //remember the cart
            if (settings.sessionStorageAvailable && typeof cart.currency_conversion !== 'undefined') {
                sessionStorage.setItem('currency_conversion', JSON.stringify(cart.currency_conversion));
            }
            settings.cart = cart;

            // prosper - \\V//,
            callback( cart, errors );
        });

    };

    UC.viewCheckout = function( checkoutRequest, callback ) {
        var headers = {
            'cache-control': 'no-cache',
            'x-ultracart-browser-key': settings.browserKey,
            'X-UltraCart-Api-Version': settings.apiVersion
        };

        $.ajax({
            url: settings.pathToProxy + '/rest/v2/checkout/cart/handoff',
            type: 'POST', // Notice
            headers: headers,
            contentType: 'application/json; charset=UTF-8',
            data: JSON.stringify( checkoutRequest ),
            dataType: 'json'
        }).done(function ( checkoutResult ) {

            if( checkoutResult.errors && checkoutResult.errors.length > 0 ) {

                callback( checkoutResult.errors );

            } else {
                // proceed with checkout.  Check for server response, and the redirect url
                if ( checkoutResult && checkoutResult.redirect_to_url ) {

                    // utils.unsetCookie('UltraCartShoppingCartID');
                    // redirect the page
                    setTimeout(function() {
                        window.location.href = checkoutResult.redirect_to_url;
                    }, 0);

                }
            }
        });

    };

    UC.registerAffiliateClick = function() {
        var headers = {
            'cache-control': 'no-cache',
            'x-ultracart-browser-key': settings.browserKey,
            'X-UltraCart-Api-Version': settings.apiVersion
        };

        var request = {
            landing_page_url: window.location.href,
            referrer_url: document.referrer || null,
        };

        $.ajax({
            url: settings.pathToProxy + '/rest/v2/checkout/affiliateClick/register',
            type: 'POST', // Notice
            headers: headers,
            contentType: 'application/json; charset=UTF-8',
            data: JSON.stringify( request ),
            dataType: 'json'
        }).done(function ( result ) {
            if (
                typeof result.registered !== 'undefined'
                && result.registered === true
                && result.cookie_names.length === result.cookie_values.length
            ) {
                var exdays = typeof result.cookie_max_age !== 'undefined'
                    ? result.cookie_max_age / (24 * 60 * 60)
                    : 0;
                for (var i = 0; i < result.cookie_names.length; i++) {
                    utils.setCookie(result.cookie_names[i], result.cookie_values[i], exdays);
                }
            }
        });
    };

    if(typeof window.UC === "undefined") {
        window.UC = UC;
    } else {
        if(typeof console === "object" && typeof console.warn === "function") {
            console.warn("UC is already defined");
        }
    }

})(jQuery, window);
