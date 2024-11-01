/* This section of the code registers a new block, sets an icon and a category, and indicates what type of fields it'll include. */

(function($, window) {

    var __ = wp.i18n.__; //translation functions
    var createElement = wp.element.createElement;

    const iconEl = createElement('svg', { width: 20, height: 20 },
        createElement('path', { d: "M15.000,15.000 L5.000,15.000 C2.239,15.000 0.000,12.761 0.000,10.000 L0.000,5.000 C0.000,2.239 2.239,-0.000 5.000,-0.000 L15.000,-0.000 C17.761,-0.000 20.000,2.239 20.000,5.000 L20.000,10.000 C20.000,12.761 17.761,15.000 15.000,15.000 ZM6.650,8.123 C6.615,8.007 6.562,7.900 6.491,7.802 C6.419,7.704 6.328,7.619 6.220,7.547 C6.112,7.475 5.983,7.421 5.835,7.385 C6.080,7.290 6.265,7.152 6.392,6.969 C6.518,6.786 6.582,6.580 6.584,6.350 C6.584,6.121 6.540,5.921 6.452,5.752 C6.363,5.583 6.238,5.443 6.075,5.333 C5.913,5.223 5.716,5.140 5.487,5.086 C5.257,5.032 5.002,5.005 4.721,5.005 L2.993,5.005 L2.993,9.927 L4.870,9.927 C5.153,9.927 5.407,9.896 5.633,9.836 C5.860,9.775 6.052,9.683 6.210,9.562 C6.367,9.440 6.489,9.289 6.574,9.109 C6.658,8.929 6.701,8.720 6.701,8.483 C6.701,8.360 6.684,8.240 6.650,8.123 ZM11.497,5.005 L10.510,5.005 L10.507,8.267 C10.504,8.585 10.439,8.825 10.311,8.987 C10.182,9.149 9.997,9.231 9.754,9.231 C9.525,9.231 9.352,9.149 9.233,8.987 C9.114,8.825 9.053,8.585 9.051,8.267 L9.047,5.005 L8.054,5.005 L8.050,8.267 C8.050,8.542 8.091,8.787 8.172,9.002 C8.254,9.218 8.368,9.398 8.517,9.545 C8.665,9.691 8.844,9.803 9.052,9.880 C9.261,9.956 9.495,9.994 9.754,9.994 C10.030,9.994 10.275,9.956 10.491,9.880 C10.707,9.803 10.889,9.691 11.039,9.543 C11.188,9.396 11.303,9.215 11.382,9.001 C11.461,8.787 11.500,8.542 11.500,8.267 L11.497,5.005 ZM15.907,5.005 L14.893,7.273 L13.878,5.005 L12.789,5.005 L14.384,8.183 L14.387,9.927 L15.377,9.927 L15.380,8.223 L16.999,5.005 L15.907,5.005 ZM4.873,9.160 L3.990,9.160 L3.990,7.757 L4.916,7.757 C5.187,7.759 5.387,7.823 5.517,7.949 C5.646,8.076 5.710,8.251 5.708,8.477 C5.708,8.680 5.636,8.843 5.494,8.969 C5.351,9.094 5.144,9.157 4.873,9.160 ZM4.729,7.070 L3.990,7.070 L3.990,5.779 L4.725,5.779 C5.005,5.781 5.220,5.833 5.368,5.933 C5.517,6.033 5.591,6.198 5.591,6.428 C5.589,6.638 5.513,6.797 5.365,6.905 C5.216,7.013 5.004,7.068 4.729,7.070 Z" })
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

    function BuyButtonComponent() {
        // wp.element.Component.apply(null, arguments);

        // this.onChangeContent = this.onChangeContent.bind(this);
        // console.log();
        // this.input = wp.element.createRef();
        this.id = createId(10);
        this.state = {};
    }

    // extend the Component class
    BuyButtonComponent.prototype = Object.create(wp.element.Component.prototype);

    // add some custom methods
    BuyButtonComponent.prototype.getCurrencyConversionOpts = function() {
        var currencyConversion = ["AUD", "BRL", "CAD", "CHF", "EUR", "GBP", "INR",
            "JPY", "MXN", "MYR", "NOK", "NZD", "RUB", "SEK", "SGD", "TRY", "USD", "ZAR"];
        return currencyConversion.map(value => ({ value, label: value }));
    };
    BuyButtonComponent.prototype.setItemIdAttribute = function(itemid) {
        this.props.setAttributes({itemid: itemid});
    };
    BuyButtonComponent.prototype.setCurrencyAttribute = function(currency_conversion) {
        this.props.setAttributes({currency_conversion: currency_conversion});
    };
    BuyButtonComponent.prototype.setImmediateCheckoutAttribute = function(immediate_checkout) {
        this.props.setAttributes({immediate_checkout: immediate_checkout});
    };
    BuyButtonComponent.prototype.loadQueryResults = function (query, callback) {
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

    BuyButtonComponent.prototype.componentDidMount = function() {
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
                maxItems: 1,
                maxOptions: 50,
                valueField: 'itemId',
                labelField: 'itemId',
                searchField: 'itemId',
                // create: false,
                // closeAfterSelect: true,
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
                load: this.loadQueryResults,
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
                onChange: function(value) {
                    rm.setItemIdAttribute.call(rm, value);
                },
            });

        }
    };
    BuyButtonComponent.prototype.render = function() {
        var rm = this;
        return createElement(
            "div",
            null,
            createElement(
                "h3",
                null,
                __("Buy Button")
            ),
            createElement(wp.components.TextControl, {
                value: this.props.attributes.itemid,
                id: this.id,
                label: __('Item ID'),
                className: 'ucwp-itemid-field',
                help: 'Start typing an Item ID to search...',
                onChange: function(value) { rm.setItemIdAttribute.call(rm, value) },
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
        );
    };

    wp.blocks.registerBlockType('ucwp/buy-button', {
        title: __('Buy Button'),
        icon: iconEl,
        category: 'ultracart',
        attributes: {
            itemid: { type: 'string', default: '' },
            currency_conversion: { type: 'string', default: 'USD' },
            immediate_checkout: { type: 'boolean', default: false },
        },
        edit: BuyButtonComponent,
        save: function(props) {
            // console.log(props.attributes);
            return null;
        }
    });
})(jQuery, window);
