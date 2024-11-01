=== UltraCart Ecommerce - Shopping Cart ===
Contributors: UltraCart
Donate link: https://www.ultracart.com/
Tags: cart, checkout, display products, e-commerce, ecommerce, inventory, list products, online shop, online store, sell products, shop, store
Requires at least: 4.6
Tested up to: 6.1.1
Requires PHP: 5.6
Stable tag: 1.42
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

The best way to sell your products on WordPress.

== Description ==

If you're looking for a simple and elegant ecommerce plugin, you've come to the right place. With this official UltraCart WordPress plugin, there is no need for complicated settings or configuration pages that can take hours of your time to fill out.  Sync your products from UltraCart and start making money today!


**UltraCart Ecommerce - Shopping Cart** makes it simple to turn any WordPress Theme into your own online store. With just a few clicks, you can Sync your products from UltraCart and add ecommerce components to any page or post, as well as a **WordPress shopping cart** that enables a **secure checkout** from anywhere on your site, and on any device.

**UltraCart Ecommerce - Shopping Cart** Allows you to leverage the power and flexibility of WordPress shortcodes to add ecommerce functionality to just about anywhere on your site.

Since **UltraCart Ecommerce - Shopping Cart** is powered by the UltraCart Platform, you get access to all the power of UltraCart within your WordPress site.

####Getting Started
1. Install The plugin and Activate the plugin
2. Connect your site to UltraCart via Settings->UltraCart
3. Add ecommerce components to your site

== Installation ==

Install **UltraCart Ecommerce - Shopping Cart** via the WordPress plugin directory, or by uploading the files manually to your server. After becoming an [UltraCart](https://ultracart.com/ "UltraCart") merchant, use the plugin to connect your accounts and authorize your site to use UltraCart via Settings->UltraCart in the WordPress admin menu. If you need additional help, you can contact UltraCart support via phone or email.

== Frequently Asked Questions ==

= How do I get started? =

1. Install The plugin and Activate the plugin
2. Connect your site to UltraCart via Settings->UltraCart
3. Add ecommerce components to your site

= Do I need an UltraCart account? =

Yes. And with your account, you gain access to a huge array of features, top of the line, level 1 PCI compliant security and an expert support team

= How do I add an item list to my site? =

1. Go to a page or post editor, and click the button to add an item list. Search for the item and add it to the page.
2. Simply add the shortcode: [ucitem_list itemids="blonderoast,darkroast,mediumroast"]

= How do I add an item to my site? =

1. Go to a page or post editor, and click the button to add the item. Search for the item and add it to the page.
2. Simply add the shortcode: [ucitem itemid="Hat"]

= How do I add just an item's price to my site? =

1. Go to a page or post editor, and click the button to add the price. Search for the item and add it to the page.
2. Simply add the shortcode: [uc_price itemid="Hat"]

= How do I add a buy button to my site? =

1. Go to a page or post editor, and click the button to add a buy button. Search for the item and add it to the page.
2. Simply add the shortcode: [uc_buy_button itemid="Hat" ]

= How do I add a view cart link? =

If your theme has menus registered, you can configure which menu to add the link to in Settings -> UltraCart in the WordPress settings page.

**Custom Link:** You can add any link with the href value of "#viewcart", or a class of "js-view-cart-snapshot" as a view cart link.

= How do I add a direct checkout link? =

If your theme has menus registered, you can configure which menu to add the link to in Settings -> UltraCart in the WordPress settings page.

**Custom Link:** You can add any link with the href value of "#checkout", or any tag with a class of "js-view-checkout".  When clicked, it will transfer the user to begin the checkout process.  This way, you can use it with any custom button you wish.

= How do I add a cart icon to a checkout or view cart link? =

If your theme has menus registered, you can configure which menu to add the link to in Settings -> UltraCart in the WordPress settings page.

**Custom Link:** Similar to the normal view cart or direct checkout links described above, you can add any link with the href value of "#checkout-icon", "#checkout-icon-left", "#viewcart-icon", or "#view-cart-icon-left", or any tag with a class of "js-view-checkout-icon", "js-checkout-icon-left", "js-view-cart-icon", or "js-view-cart-icon-left".  These will have the same, respective functionality as the links described above, but also will either append or prepend a cart icon into the element.

= How do I link the list item to the single item page? =

It does it automatically. It should find and link to the most recently added single item once the item's page is visited.

= How do I customize it with my own styles? =

There are several ways to go about this.  The simplest way is to use WordPress' [additional css editor](https://en.support.wordpress.com/custom-design/editing-css/).  Alternatively, you can just load your style sheet after ours (the wp_enqueue_style handle is 'ucwp-css') and use selectors that are specific enough.

= How do I customize item form validation? =

If you define a function, window.customValidityCheck, it will override the built-in item form validation.  The only other requirement is that it must return false if the form is invalid.

= How do I conditionally show content based on orderability? =

We created the `[uc_if]` shortcode!  It even allows other shortcodes to be called within it.
```
[uc_if itemid="myitemid" orderable]
    <h1>I'm orderable [uc_price itemid="myitemid"]</h1>
[/uc_if]
[uc_if itemid="myitemid" not orderable]
    <h1>I'm not orderable [uc_price itemid="myitemid"]</h1>
[/uc_if]
```

*Note: orderability considers inventory levels, as well as configurations for allowing preorders or backorders.*

= How do I conditionally show content based on if an item is a kit or not? =

We created the `[uc_if]` shortcode!  It even allows other shortcodes to be called within it.
```
[uc_if itemid="myitemid" kit]
    <h1>I'm a kit [uc_price itemid="myitemid"]</h1>
[/uc_if]
[uc_if itemid="myitemid" not kit]
    <h1>I'm not a kit [uc_price itemid="myitemid"]</h1>
[/uc_if]
```

= Does the plugin support multiple currencies? =

Yes! Just select which currency you wish to use with your item, item list, price or buy button when you insert the
shortcode by selecting the desired currency code in the currency conversion dropdown.  An example of a shortcode with
a currency conversion looks like:
```
[uc_price itemid="necklace" currency_conversion="AUD"]
```

== Screenshots ==

1. Full sized item list. Notice that the Combat Boots link to a single item page, while the others do not. If a corresponding single item page does not exist, then it defaults to "add to cart"
2. Tablet item list page.
3. Mobile item list page.
4. Mobile item list featuring an out of stock item.
5. Full-sized single item page with a size variation dropdown, price, extended description, quantity and gallery.
6. Tablet single item page.
7. Mobile single item page
8. View Cart link in primary nav
9. Example buy button and price in a sidebar widget (Note: this requires the widget to have the capability to execute the shortcode)
10. TinyMCE buttons
11. Text Editor buttons
12. Single Item Dialog
13. Item List Dialog
14. Buy Button Dialog
15. Price Dialog

== Changelog ==

= 1.0 =
Initial Release

= 1.1 =
added #checkout link support
display errors returned from add to cart operation
add a refresh button to the settings
fixed extended description too long issue
fixed issue with overflows in the snapshot cart

= 1.2 =
Added item lightbox
Added Resync Items button in settings->UltraCart
Fixed js bug in admin pages caused from a script firing when it shouldn't
Improved display of getting started message in settings->UltraCart
Removed auto-closing of cart snapshot after an item as been added
Fixed some cart snapshot display issues in some environments

= 1.3 =
Fixed float issue on .uc-item-option
Added alt text to images, if the value is set
Added data-options-label to .uc-item-option
Tested/Validated plugin against WordPress 4.9

= 1.4 =
Updated FAQ with CSS customization instructions.
Added safeguards against smart quotes and em dashes in ItemIds
Added support for an option's required status to pass in from the UC platform
Added form validation for item options
Added custom validation override function: window.customValidityCheck()
Added class and styles to the 'Powered by UC' text
Tested/Validated plugin against WordPress 4.9.2

= 1.5 =
Updated @mixin reset-box-model to include declaration for box-sizing attribute
Added a check for iconv before trying to use it, and provided a graceful fallback if the server doesn't have it installed
Added title="false" option to the item shortcode
Added new shortcode: [uc_if] to handle conditionally showing content based on various item properties.  It can currently check if an item is a kit, or if it's orderable.
Tested/Validated plugin against WordPress 4.9.6

= 1.6 =
updated readme

= 1.7 =
updated readme

= 1.8 =
Added option to inject affiliate tracking script.
Removed a function dependency to allow Nginx and PHP-FPM servers to be used for deployment.

= 1.9 =
minor fix to admin

= 1.10 =
Added configuration option to disable passive branding

= 1.11 =
Added setting for custom secure host name

= 1.12 =
Added setting to enable UltraCart Analytics

= 1.13 =
Tested/Validated plugin against WordPress 5.1.1
Added support for currency conversion and formatting

= 1.14 =
Fixed INR currency symbol

= 1.15 =
Cache improvement

= 1.16 =
Improved cooperation with other 3rd party plugins

= 1.17 =
Added menu options in the settings page.  For each registered menu location in a theme, merchants can select whether to "Add On-Page View Cart link", "Add On-Page View Cart icon only link", "Add Checkout link", or "Add Checkout icon only link".
Note: The plugin will no longer automatically add a view cart link to the menu registered as "primary", and the merchant must configure the Menu Options in Settings -> UltraCart for it to appear in the menu.

= 1.18 =
Small improvements to new menu feature from 1.17
Note: The plugin will no longer automatically add a view cart link to the menu registered as "primary", and the merchant must configure the Menu Options in Settings -> UltraCart for it to appear in the menu.

= 1.19 =
Updated UltraCart SDK to latest

= 1.20 =
Added Gutenberg blocks for displaying Item, Item List, Price and Buy Button.

= 1.21 =
Fixed issue with autoloader

= 1.22 =
Added classes ucwp_menu-item menu-item to ucwp_cart_menu_item li elements to allow easier targeting with css/js
Updated logic for svg height to first try to set it based on font-size, and to fallback to parent's height if font-size is undefined

= 1.23 =
Updated pricing to respect start and end sale dates.

= 1.24 =
Fixed formatting issues in wordpress block editor.
Tested plugin up to wordpress version 5.3.2

= 1.25 =
updated block files to work with new wordpress version due to change in how gutenberg react blocks handle refs
Tested plugin up to wordpress version 5.4.1

= 1.26 =
Added support for Auto Order Items (merchants will need to disconnect and reconnect the plugin to start syncing auto order data)
Added Auto Order Schedule support to Item page
Added option to item block to toggle HTML escaping in extended descriptions
Minor design tweaks to item page
Tested plugin up to wordpress version 5.4.2

= 1.27 =
Fixed issue with autoloader

= 1.28 =
Fixed issue with autoloader

= 1.29 =
Tested plugin up to wordpress version 5.5.1
Added support for UCEditor parameter values
Enhanced support for affiliate tracking & removed outdated "Inject Affiliate Tracking Script" from settings.
Minor tweaks to block editor

= 1.30 =
Increased UC rest api expansion options

= 1.31 =
Added support for setting storefront_host_name on the cart object

= 1.32 =
Improved logic for handling extended descriptions
Refactored some code

= 1.33 =
Improved precision of date comparisons for sale range calculations

= 1.34 =
Improved timezone support to sale date comparisons

= 1.35 =
Removed href value from view cart checkout button to fix an issue caused by 3rd party plugins competing for click events

= 1.36 =
Added option to enable screen recording ultracart analytics script.
Tested plugin up to Wordpress version 5.7.2
Minor stylesheet adjustments

= 1.37 =
Change to screen recording param

= 1.38 =
Tested up to WordPress version 5.8

= 1.39 =
Failsafe for stripping of smart quotes.

= 1.40 =
Updated docs to be more clear about issues that may appear with themes that do not have menus registered.  This may
become more common with the new Full Page Editor mode.

= 1.41 =
Tested against WordPress version 6.0.3 and PHP version 8.1.10

= 1.42 =
Tested against WordPress version 6.1.1
Minor adjustment to settings page

== Upgrade Notice ==

More to come...
