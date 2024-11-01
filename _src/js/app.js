/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */

window.UCWP = (function($, window, document, undefined) {
    var UCWP = {};

    var elems = {
        $win: $(window),
        $doc: $(document),
        $body: $("body")
    };

    var utils = {
        errorHandler: function(errors) {
            // simple way to prevent stacking if user clicks too quickly
            $('.uc-custom-alert').remove();

            var customAlert = '<div class="uc-custom-alert"><div class="uc-custom-alert-content"><h1>Oops!</h1>';
            for (var i = 0; i < errors.length; i++) {
                customAlert += '<p>' + errors[i] + '</p>';
            }
            customAlert += '<button>Ok</button></div></div>';

            elems.$body.append(customAlert);

            var $alert = $('.uc-custom-alert');

            setTimeout(function() {
                $alert.addClass('active');
            }, 10);

            $('.uc-custom-alert, .uc-custom-alert-content button').on('click', function(event) {
                if(event.target !== this) return false;

                $alert.removeClass('active');
            
                setTimeout(function() {
                    $alert.remove();
                }, 300);
            });
        }
    };

    Object.defineProperties(UCWP, {
        'elems': {
            enumerable: false,
            value: elems
        },
        "utils": {
            enumerable: false,
            value: utils
        }
    });

    return UCWP;

})(jQuery, this, this.document);