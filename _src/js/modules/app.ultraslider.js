/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */

UCWP.ultraslider = (function($, window, document) {

    var elems = {
        $ultraslider: $(".ultraslider-html")
    };

    function init() {
        elems.$ultraslider.ultraslider();

        if(window.outOfStockHtml) {
            $(".ultraslider-medium-holder").append(window.outOfStockHtml);
        }
    }

    return {
        init: init
    };

})(jQuery, this, this.document);