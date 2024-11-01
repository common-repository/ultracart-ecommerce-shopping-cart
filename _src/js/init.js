/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */

(function($, window, document, undefined) {
    var MID = "";
    var browserKey = "";

    if(window.UCWP_MID) {
        MID = window.UCWP_MID;
    }
    if(window.UCWP_browser_key) {
        browserKey = window.UCWP_browser_key;
    }

    UC.init({
        MID: MID,
        browserKey: browserKey,
        pathToProxy: 'https://secure.ultracart.com',
        cartExpansion: 'items,summary,currency_conversion,coupons,marketing,billing,shipping,payment,checkout',
    });

    for( var module in window.UCWP ) {
        if(typeof UCWP[module].init === "function") {
            UCWP[module].init();
        }
    }
})(jQuery, this, this.document);