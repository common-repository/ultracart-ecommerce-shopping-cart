/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */

(function ($) {
    var itemList = "";

    QTags.addButton(
        "ucwp_item",
        "Add Item",
        function () {
            tb_show("Add Item", "admin-ajax.php?height=500&width=570&action=ucwp_add_item_modal");
        }
    );

    QTags.addButton(
        "ucwp_item_list",
        "Add Item List",
        function () {
            itemList = "";
            tb_show("Add Item List", "admin-ajax.php?height=400&width=570&action=ucwp_add_item_list_modal");
        }
    );

    QTags.addButton(
        "ucwp_buy_button",
        "Add Buy Button",
        function () {
            tb_show("Add Buy Button", "admin-ajax.php?height=400&width=570&action=ucwp_add_buy_button_modal");
        }
    );

    QTags.addButton(
        "ucwp_price",
        "Add Price",
        function () {
            tb_show("Add Price", "admin-ajax.php?height=400&width=570&action=ucwp_add_price_modal");
        }
    );



    $(document).ajaxSuccess(function (event, xhr, settings) {

        // check to see which action was used

        if (settings.url.indexOf('add_item_list_modal') >= 0 ||
            settings.url.indexOf('add_item_modal') >= 0 ||
            settings.url.indexOf('add_price_modal') >= 0 ||
            settings.url.indexOf('add_buy_button_modal') >= 0) {
            var ajaxUrl = "admin-ajax.php?action=ucwp_get_item_list_data";
            // Get the id of the element
            var tb = document.getElementById('TB_window');
            // set the attribute to an empty string or your desired width/height.
            if(settings.url.indexOf('add_item_modal') >= 0) {
                tb.setAttribute('style', 'max-width: 600px; max-height: 440px; margin-left: -300px; top: 32px; margin-top: 0px; visibility: visible;');
            } else if(settings.url.indexOf('add_buy_button_modal') >= 0) {
                tb.setAttribute('style', 'max-width: 600px; max-height: 305px; margin-left: -300px; top: 32px; margin-top: 0px; visibility: visible;');
            } else {
                tb.setAttribute('style', 'max-width: 600px; max-height: 305px; margin-left: -300px; top: 32px; margin-top: 0px; visibility: visible;');
            }

            var $select = $('input.js-item-id-multi-select, input.js-item-id-select');

            $select.selectize({
                plugins: ['remove_button', 'drag_drop'],
                delimiter: ',',
                persist: false,
                hideSelected: true,
                dropdownParent: "body",
                preload: "focus",
                maxOptions: 50,
                valueField: 'itemId',
                labelField: 'itemId',
                searchField: 'itemId',
                create: false,
                closeAfterSelect: true,
                render: {
                    option: function (item, escape) {
                        var html = '<div class="uc-selectize-option"><div class="image-wrapper">';
                        if (item.thumbnail) {
                            html += '<img src="' + item.thumbnail + '" alt="' + escape(item.description) + '" style="float:left;">';
                        }
                        html += '</div><div class="id-description-wrapper"><div class="description"><span>' + escape(item.description) + '</span></div><small class="itemId">' + escape(item.itemId) + '</small></div></div>';
                        return html;
                    }
                },
                score: function (search) {
                    var score = this.getScoreFunction(search);
                    return function (item) {
                        return score(item); // * (1 + Math.min(item.watchers / 100, 1));
                    };
                },
                load: function (query, callback) {
                    if (!query.length) return callback();
                    $.ajax({
                        url: ajaxUrl,
                        type: "GET",
                        cache: false,
                        data: {
                            's': query,
                            'm': '50'
                        },
                        dataType: 'json',
                        error: function () {
                            callback();
                        },
                        success: function (res) {
                            callback(res);
                        }
                    });

                }
            });

            setTimeout(function(){
                jQuery(".js-item-id-select input,.js-item-id-multi-select input").focus();
            }, 0);
        }
    });

    $(document).on('click', '.js-add-item-shortcode', function () {
        var itemIds = $('input.js-item-id-select').val().split(",");

        var shortcode = "";
        var immediateCheckout = $('.js-immediate-checkout').prop('checked') ? ' immediate_checkout="true"' : "";
        var title = $('.js-title').prop('checked') ? "" : ' title="false"';
        var gallery = $('.js-gallery').prop('checked') ? "" : ' gallery="false"';
        var extendedDescription = $('.js-extended-description').prop('checked') ? "" : ' extended_description="false"';
        var price = $('.js-price').prop('checked') ? "" : ' price="false"';
        var options = $('.js-options').prop('checked') ? "" : ' options="false"';
        var quantity = $('.js-quantity').prop('checked') ? "" : ' quantity="false"';

        var conversionVal = $('.js-currency-conversion-select').val();
        var currencyConversion = conversionVal === "" ? "" : ' currency_conversion="'+conversionVal+'"';

        for (var i = 0; i < itemIds.length; i++) {
            var itemId = itemIds[i];

            shortcode += '[ucitem itemid="' + itemId + '"' + title + immediateCheckout + gallery + extendedDescription + price + options + quantity + currencyConversion +']\n';
        }

        if ($('#wp-content-wrap').hasClass('html-active')) {
            QTags.insertContent(shortcode);
        } else {
            $(document).trigger("addShortcode", [shortcode]);
        }

        tb_remove();
    });

    $(document).on('click', '.js-add-buy-button-shortcode', function () {
        var itemIds = $('input.js-item-id-select').val().split(",");

        var conversionVal = $('.js-currency-conversion-select').val();
        var currencyConversion = conversionVal === "" ? "" : ' currency_conversion="'+conversionVal+'"';

        var shortcode = "";
        var immediateCheckout = "";
        if($('.js-immediate-checkout').prop('checked')) immediateCheckout = 'immediate_checkout="true"';

        for (var i = 0; i < itemIds.length; i++) {
            var itemId = itemIds[i];

            shortcode += '[uc_buy_button itemid="' + itemId + '" ' + immediateCheckout + currencyConversion +']\n';
        }

        if ($('#wp-content-wrap').hasClass('html-active')) {
            QTags.insertContent(shortcode);
        } else {
            $(document).trigger("addShortcode", [shortcode]);
        }

        tb_remove();
    });

    $(document).on('click', '.js-add-price-shortcode', function () {
        var itemIds = $('input.js-item-id-select').val().split(",");

        var conversionVal = $('.js-currency-conversion-select').val();
        var currencyConversion = conversionVal === "" ? "" : ' currency_conversion="'+conversionVal+'"';

        var shortcode = "";

        for (var i = 0; i < itemIds.length; i++) {
            var itemId = itemIds[i];

            shortcode += '[uc_price itemid="' + itemId + '"'+currencyConversion+']\n';
        }

        if ($('#wp-content-wrap').hasClass('html-active')) {
            QTags.insertContent(shortcode);
        } else {
            $(document).trigger("addShortcode", [shortcode]);
        }

        tb_remove();
    });

    $(document).on('change', 'input.js-item-id-multi-select', function () {
        // Change to input
        itemList = $(this).val() || "";
    });

    $(document).on('click', '.js-add-item-list-shortcode', function () {
        var conversionVal = $('.js-currency-conversion-select').val();
        var currencyConversion = conversionVal === "" ? "" : ' currency_conversion="'+conversionVal+'"';

        if (itemList) {
            var shortcode = '[ucitem_list itemids="' + itemList + '"'+currencyConversion+']';
            if ($('#wp-content-wrap').hasClass('html-active')) {
                QTags.insertContent(shortcode);
            } else {
                $(document).trigger("addShortcode", [shortcode]);
            }

            tb_remove();
        } else {
            alert('You must select some Items');
        }
    });

    $(document).on('click','.js-tb-close', function () {
      tb_remove();
    });

})(jQuery);