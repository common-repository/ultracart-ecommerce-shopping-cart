/*
 ** UltraCart - Wordpress Plugin
 ** http://www.ultracart.com/
 ** Copyright (c) 2016 BPS Info Solutions Inc.  All rights reserved.
 */


(function($) {

    tinymce.create('tinymce.plugins.UltraCartWP', {
        /**
         * Initializes the plugin, this will be executed after the plugin has been created.
         * This call is done before the editor instance has finished it's initialization so use the onInit event
         * of the editor instance to intercept that event.
         *
         * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
         * @param {string} url Absolute URL to where the plugin is located.
         */
        init : function(ed, url) {
            ed.addButton('addItem', {
                title : 'Add item shortcode',
                cmd : 'addItem',
                image : url + '/../../imgs/mce-icons/item.png'
            });

            ed.addButton('addItemList', {
                title : 'Add item list shortcode',
                cmd : 'addItemList',
                image : url + '/../../imgs/mce-icons/item-list.png'
            });

            ed.addButton('addBuyButton', {
                title : 'Add buy button shortcode',
                cmd : 'addBuyButton',
                image : url + '/../../imgs/mce-icons/buy-button.png'
            });

            ed.addButton('addPrice', {
                title : 'Add price shortcode',
                cmd : 'addPrice',
                image : url + '/../../imgs/mce-icons/item-price.png'
            });

            ed.addCommand('addItem', function() {
                tb_show("Add Item", "admin-ajax.php?height=350&width=570&action=ucwp_add_item_modal");
                var failsafe = 20;
                var i = 0;
                var interval = setInterval(function() {
                    var $tbWindow = $('#TB_window');
                    if($tbWindow.length > 0 && $tbWindow.is(':visible') && $tbWindow.css('max-height') == '325px') {
                        $tbWindow.css({'max-height': '350px'});
                        clearInterval(interval);
                    }
                    if(i === failsafe) clearInterval(interval);
                    i++;
                }, 50);
            });

            ed.addCommand('addItemList', function() {
                tb_show("Add Item List", "admin-ajax.php?height=400&width=570&action=ucwp_add_item_list_modal");
            });

            ed.addCommand('addBuyButton', function() {
                tb_show("Add Buy Button", "admin-ajax.php?height=400&width=570&action=ucwp_add_buy_button_modal");
            });

            ed.addCommand('addPrice', function() {
                tb_show("Add Price", "admin-ajax.php?height=400&width=570&action=ucwp_add_price_modal");
            });

            // Listen to the addShortcode event.
            $(document).on('addShortcode', function(event, shortcode) {
                ed.execCommand('mceInsertContent', 0, shortcode);
            });
        },

        /**
         * Creates control instances based in the incomming name. This method is normally not
         * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
         * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
         * method can be used to create those.
         *
         * @param {String} n Name of the control to create.
         * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
         * @return {tinymce.ui.Control} New control instance or null if no control was created.
         */
        createControl : function(n, cm) {
            return null;
        },

        /**
         * Returns information about the plugin as a name/value array.
         * The current keys are longname, author, authorurl, infourl and version.
         *
         * @return {Object} Name/value array containing information about the plugin.
         */
        getInfo : function() {
            return {
                longname : 'UltraCartWP Buttons',
                author : 'Ultracart',
                authorurl : 'https://www.ultracart.com',
                version : "1.0"
            };
        }
    });

    // Register plugin
    tinymce.PluginManager.add( 'UltraCartWP', tinymce.plugins.UltraCartWP );
})(jQuery);