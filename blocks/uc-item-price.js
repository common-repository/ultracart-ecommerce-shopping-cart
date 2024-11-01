/* This section of the code registers a new block, sets an icon and a category, and indicates what type of fields it'll include. */

/* This section of the code registers a new block, sets an icon and a category, and indicates what type of fields it'll include. */

(function($, window) {

    var __ = wp.i18n.__; //translation functions
    var createElement = wp.element.createElement;

    const iconEl = createElement('svg', { width: 20, height: 20 },
        createElement('path', { transform: "translate(7, 0)", d: "M6.737,14.341 C6.375,14.674 5.842,14.840 5.137,14.840 C4.841,14.840 4.552,14.800 4.269,14.720 C3.986,14.640 3.734,14.505 3.513,14.316 C3.293,14.126 3.113,13.870 2.975,13.547 C2.837,13.224 2.768,12.823 2.768,12.344 L0.013,12.344 C0.013,13.142 0.135,13.826 0.378,14.396 C0.622,14.965 0.946,15.436 1.351,15.808 C1.756,16.181 2.221,16.466 2.748,16.662 C3.275,16.858 3.818,16.983 4.377,17.036 L4.377,18.993 L5.947,18.993 L5.947,17.036 C6.566,16.976 7.125,16.845 7.626,16.642 C8.126,16.439 8.554,16.168 8.909,15.828 C9.265,15.489 9.538,15.084 9.729,14.615 C9.919,14.146 10.015,13.618 10.015,13.033 C10.015,12.394 9.911,11.840 9.704,11.370 C9.497,10.901 9.200,10.488 8.815,10.132 C8.430,9.776 7.968,9.463 7.428,9.194 C6.888,8.924 6.286,8.663 5.621,8.410 C5.180,8.250 4.812,8.092 4.515,7.936 C4.219,7.779 3.981,7.615 3.800,7.441 C3.618,7.268 3.490,7.080 3.415,6.877 C3.339,6.674 3.301,6.443 3.301,6.183 C3.301,5.924 3.339,5.684 3.415,5.464 C3.490,5.245 3.607,5.054 3.765,4.890 C3.923,4.727 4.125,4.601 4.372,4.511 C4.619,4.421 4.910,4.376 5.246,4.376 C5.865,4.376 6.355,4.584 6.717,5.000 C7.079,5.416 7.260,6.027 7.260,6.832 L10.005,6.832 C10.005,6.167 9.914,5.566 9.734,5.030 C9.552,4.494 9.296,4.028 8.963,3.632 C8.631,3.236 8.228,2.915 7.754,2.669 C7.280,2.423 6.747,2.259 6.154,2.180 L6.154,0.013 L4.575,0.013 L4.575,2.160 C3.969,2.220 3.419,2.356 2.926,2.569 C2.432,2.782 2.011,3.062 1.662,3.408 C1.313,3.754 1.043,4.162 0.852,4.631 C0.661,5.100 0.566,5.618 0.566,6.183 C0.566,6.829 0.671,7.386 0.882,7.856 C1.093,8.325 1.391,8.736 1.776,9.089 C2.161,9.442 2.626,9.751 3.173,10.017 C3.719,10.284 4.324,10.537 4.989,10.776 C5.404,10.923 5.758,11.071 6.051,11.220 C6.344,11.370 6.581,11.535 6.762,11.715 C6.943,11.894 7.074,12.093 7.157,12.309 C7.239,12.525 7.280,12.773 7.280,13.053 C7.280,13.579 7.099,14.008 6.737,14.341 Z" })
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

    function ItemPriceComponent() {
        // wp.element.Component.apply(null, arguments);

        // this.onChangeContent = this.onChangeContent.bind(this);
        // console.log();
        // this.input = wp.element.createRef();
        this.id = createId(10);
        this.state = {};
    }

    // extend the Component class
    ItemPriceComponent.prototype = Object.create(wp.element.Component.prototype);

    // add some custom methods
    ItemPriceComponent.prototype.getCurrencyConversionOpts = function () {
        var currencyConversion = ["AUD", "BRL", "CAD", "CHF", "EUR", "GBP", "INR",
            "JPY", "MXN", "MYR", "NOK", "NZD", "RUB", "SEK", "SGD", "TRY", "USD", "ZAR"];
        return currencyConversion.map(value => ({value, label: value}));
    };
    ItemPriceComponent.prototype.setItemIdAttribute = function (itemid) {
        this.props.setAttributes({itemid: itemid});
    };
    ItemPriceComponent.prototype.setCurrencyAttribute = function(currency_conversion) {
        this.props.setAttributes({currency_conversion: currency_conversion});
    };
    ItemPriceComponent.prototype.loadQueryResults = function (query, callback) {
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

    ItemPriceComponent.prototype.componentDidMount = function () {
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
                onInitialize: function () {
                    // console.log('initialized!', this, $input[0].selectize);
                    rm.loadQueryResults(inputVal, function (res) {
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
                onChange: function (value) {
                    rm.setItemIdAttribute.call(rm, value);
                },
            });

        }
    };
    ItemPriceComponent.prototype.render = function () {
        var rm = this;
        return createElement(
            "div",
            null,
            createElement(
                "h3",
                null,
                __("Item Price")
            ),
            createElement(wp.components.TextControl, {
                value: this.props.attributes.itemid,
                label: __('Item ID'),
                id: this.id,
                className: 'ucwp-itemid-field',
                help: 'Start typing an Item ID to search...',
                onChange: function (value) {
                    rm.setItemIdAttribute.call(rm, value)
                },
            }),
            createElement(wp.components.SelectControl, {
                options: this.getCurrencyConversionOpts(),
                value: this.props.attributes.currency_conversion,
                className: 'ucwp-select-field',
                label: __('Currency Conversion'),
                onChange: function (value) {
                    rm.setCurrencyAttribute.call(rm, value)
                },
            }),
        );
    };

    wp.blocks.registerBlockType('ucwp/item-price', {
        title: __('Item Price'),
        icon: iconEl,
        category: 'ultracart',
        attributes: {
            itemid: {type: 'string', default: ''},
            currency_conversion: {type: 'string', default: 'USD'},
        },
        edit: ItemPriceComponent,
        save: function (props) {
            // console.log(props.attributes);
            return null;
        }
    });
})(jQuery, window);
