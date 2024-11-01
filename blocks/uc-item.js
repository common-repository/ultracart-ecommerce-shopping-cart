/* This section of the code registers a new block, sets an icon and a category, and indicates what type of fields it'll include. */

(function($, window) {

    var __ = wp.i18n.__; //translation functions
    var createElement = wp.element.createElement;

    const iconEl = createElement('svg', { width: 20, height: 20 },
        createElement('path', { d: "M15.641,8.158 C15.613,8.371 15.559,8.584 15.559,8.797 C15.553,11.561 15.555,14.326 15.555,17.090 C15.555,17.845 15.410,18.000 14.699,18.000 C11.557,18.000 8.415,18.000 5.273,18.000 C4.569,17.999 4.396,17.813 4.396,17.060 C4.395,14.273 4.397,11.487 4.391,8.700 C4.390,8.531 4.324,8.362 4.288,8.194 C4.140,8.282 3.966,8.341 3.848,8.463 C3.194,9.136 3.098,9.143 2.463,8.464 C1.715,7.665 0.970,6.866 0.226,6.063 C-0.072,5.741 -0.077,5.413 0.224,5.090 C1.667,3.541 3.114,1.995 4.564,0.454 C4.835,0.165 5.168,0.006 5.560,0.009 C5.761,0.011 5.962,0.020 6.163,0.006 C6.777,-0.038 7.299,0.114 7.847,0.486 C8.747,1.095 9.793,1.178 10.848,0.978 C11.516,0.852 12.117,0.577 12.658,0.136 C12.764,0.049 12.933,0.024 13.075,0.019 C13.498,0.003 13.922,0.020 14.344,0.006 C14.799,-0.009 15.163,0.184 15.476,0.517 C16.864,2.000 18.255,3.481 19.642,4.967 C20.117,5.476 20.116,5.675 19.649,6.177 C18.882,7.001 18.113,7.823 17.341,8.642 C16.928,9.080 16.723,9.074 16.301,8.638 C16.130,8.461 15.953,8.292 15.778,8.119 C15.732,8.132 15.687,8.145 15.641,8.158 Z" })
    );

    function createId(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    function ItemComponent() {
        // wp.element.Component.apply(null, arguments);

        // this.onChangeContent = this.onChangeContent.bind(this);
        // console.log();
        // this.input = wp.element.createRef();
        this.id = createId(10);

        this.state = {};
    }

    // extend the Component class
    ItemComponent.prototype = Object.create(wp.element.Component.prototype);

    // add some custom methods
    ItemComponent.prototype.getCurrencyConversionOpts = function() {
        var currencyConversion = ["AUD", "BRL", "CAD", "CHF", "EUR", "GBP", "INR",
            "JPY", "MXN", "MYR", "NOK", "NZD", "RUB", "SEK", "SGD", "TRY", "USD", "ZAR"];
        return currencyConversion.map(value => ({ value, label: value }));
    };
    ItemComponent.prototype.setItemIdAttribute = function(itemid) {
        this.props.setAttributes({itemid: itemid});
    };
    ItemComponent.prototype.setCurrencyAttribute = function(currency_conversion) {
        this.props.setAttributes({currency_conversion: currency_conversion});
    };
    ItemComponent.prototype.setImmediateCheckoutAttribute = function(immediate_checkout) {
        this.props.setAttributes({immediate_checkout: immediate_checkout});
    };
    ItemComponent.prototype.setTitleAttribute = function(title) {
        this.props.setAttributes({title: title});
    };
    ItemComponent.prototype.setGalleryAttribute = function(gallery) {
        this.props.setAttributes({gallery: gallery});
    };
    ItemComponent.prototype.setPriceAttribute = function(price) {
        this.props.setAttributes({price: price});
    };
    ItemComponent.prototype.setExtendedDescriptionAttribute = function(extended_description) {
        this.props.setAttributes({extended_description: extended_description});
    };
    ItemComponent.prototype.setExtendedDescriptionAttribute = function(extended_description_esc) {
        this.props.setAttributes({extended_description_esc: extended_description_esc});
    };
    ItemComponent.prototype.setOptionsAttribute = function(options) {
        this.props.setAttributes({options: options});
    };
    ItemComponent.prototype.setOptionsAttribute = function(auto_order_schedules) {
        this.props.setAttributes({auto_order_schedules: auto_order_schedules});
    };
    ItemComponent.prototype.setQuantityAttribute = function(quantity) {
        this.props.setAttributes({quantity: quantity});
    };
    ItemComponent.prototype.loadQueryResults = function (query, callback) {
        console.log('loading query results');
        if (!query.length) return callback();
        $.ajax({
            url: "admin-ajax.php?action=ucwp_get_item_list_data",
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

    };

    ItemComponent.prototype.componentDidMount = function() {
        var rm = this;
        // get input node from react ref
        // var $input = $(wp.element.findDOMNode(this.refs.input)).find('input');
        var $input = $('#' + rm.id);
        if (!$input.hasClass('selectized')) {
            // save the input value
            var inputVal = $input.val();
            // clear it before initializing selectize (it'll cause issues with the description & thumbnail props)
            $input.val('');
            $input.selectize({
                // plugins: ['remove_button', 'drag_drop'],
                // delimiter: ',',
                // persist: false,
                // hideSelected: false,
                // dropdownParent: "body",
                // preload: "focus",
                openOnFocus: true,
                maxItems: 1,
                maxOptions: 50,
                valueField: 'itemId',
                labelField: 'itemId',
                searchField: 'itemId',
                // create: false,
                closeAfterSelect: false,
                render: {
                    option: function (item, escape) {
                        // console.log('item', item, escape, JSON.stringify(this));
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
                load: rm.loadQueryResults,
                onInitialize: function() {
                    // console.log('initialized!', this, $input[0].selectize);
                    rm.loadQueryResults(inputVal, function(res) {
                        // console.log('loaded res:', res);
                        if (!res) return false;
                        var opt;
                        for (let i = 0; i < res.length; i++) {
                            if (res[i].itemId === inputVal) {
                                opt = res[i];
                                break;
                            }
                        }
                        $input[0].selectize.options[inputVal] = opt;
                        // console.log('options', $input[0].selectize.options);
                        $input[0].selectize.setValue(inputVal);

                    });
                },
                // onItemRemove: function(item) {
                //     console.log('removed item', item);
                //     this.open();
                // },
                onChange: function(value) {
                    rm.setItemIdAttribute.call(rm, value);
                },
            });

        }
    };
    ItemComponent.prototype.render = function() {
        var rm = this;
        return createElement(
            "div",
            null,
            createElement(
                "h3",
                null,
                __("Item")
            ),
            createElement(wp.components.TextControl, {
                value: this.props.attributes.itemid,
                label: __('Item ID'),
                id: this.id,
                className: 'ucwp-itemid-field',
                help: 'Start typing an Item ID to search...',
                tabIndex: 0,
                onChange: function(value) {
                    rm.setItemIdAttribute.call(rm, value);
                },
            }),
            createElement(wp.components.SelectControl, {
                options: this.getCurrencyConversionOpts(),
                value: this.props.attributes.currency_conversion,
                className: 'ucwp-select-field',
                label: __('Currency Conversion'),
                onChange: function(value) { rm.setCurrencyAttribute.call(rm, value) },
            }),
            createElement(wp.components.CheckboxControl, {
                checked: this.props.attributes.immediate_checkout,
                label: __('Immediate Checkout'),
                onChange: function(value) { rm.setImmediateCheckoutAttribute.call(rm, value) },
            }),
            createElement(wp.components.CheckboxControl, {
                heading:  __('Display Options'),
                checked: this.props.attributes.title,
                className: 'ucwp-checkbox-field',
                label: __('Title'),
                onChange: function(value) { rm.setTitleAttribute.call(rm, value) },
            }),
            createElement(wp.components.CheckboxControl, {
                checked: this.props.attributes.gallery,
                label: __('Gallery'),
                onChange: function(value) { rm.setGalleryAttribute.call(rm, value) },
            }),
            createElement(wp.components.CheckboxControl, {
                checked: this.props.attributes.extended_description,
                label: __('Extended Description'),
                onChange: function(value) { rm.setExtendedDescriptionAttribute.call(rm, value) },
            }),
            createElement(wp.components.CheckboxControl, {
                checked: this.props.attributes.extended_description_esc,
                label: __('Escape Extended Description HTML'),
                onChange: function(value) { rm.setExtendedDescriptionAttribute.call(rm, value) },
            }),
            createElement(wp.components.CheckboxControl, {
                checked: this.props.attributes.price,
                label: __('Price'),
                onChange: function(value) { rm.setPriceAttribute.call(rm, value) },
            }),
            createElement(wp.components.CheckboxControl, {
                checked: this.props.attributes.options,
                label: __('Options'),
                onChange: function(value) { rm.setOptionsAttribute.call(rm, value) },
            }),
            createElement(wp.components.CheckboxControl, {
                checked: this.props.attributes.auto_order_schedules,
                label: __('Auto Order Schedules'),
                onChange: function(value) { rm.setOptionsAttribute.call(rm, value) },
            }),
            createElement(wp.components.CheckboxControl, {
                checked: this.props.attributes.quantity,
                label: __('Quantity'),
                help:  __('Select which item components you wish to display.'),
                onChange: function(value) { rm.setQuantityAttribute.call(rm, value) },
            }),
        );
    };

    wp.blocks.registerBlockType('ucwp/item', {
        title: __('Item'),
        icon: iconEl,
        category: 'ultracart',
        attributes: {
            is_block: { type: 'boolean', default: true },
            itemid: { type: 'string', default: '' },
            currency_conversion: { type: 'string', default: 'USD' },
            immediate_checkout: { type: 'boolean', default: false },
            title: { type: 'boolean', default: true },
            gallery: { type: 'boolean', default: true },
            extended_description: { type: 'boolean', default: true },
            extended_description_esc: { type: 'boolean', default: true },
            price: { type: 'boolean', default: true },
            options: { type: 'boolean', default: true },
            quantity: { type: 'boolean', default: true },
            auto_order_schedules: { type: 'boolean', default: true },
        },

        /* This configures how the content and color fields will work, and sets up the necessary elements */

        edit: ItemComponent,
        save: function(props) {
            // console.log('save', props.attributes);
            return null;
        }
    });
})(jQuery, window);
