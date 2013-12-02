=== WP e-Commerce Catalog Visibility  ===
Contributors: a3rev, A3 Revolution Software Development team
Tags: WP e-Commerce Catalog Visibility, WP e-Commerce, WP e-Commerce Email Inquiry, e-commerce, wordpress ecommerce
Requires at least: 3.5
Tested up to: 3.7.1
Stable tag: 1.0.8
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

WP e-Commerce Catalog Visibility and Email Inquiry transform WP e-Commerce into an online brochure with Product Email Inquiry button and pop-up form.
  
== Description ==

WP e-Commerce Catalog Visibility and Email Inquiry Lite Version allows you to configure Add to Cart and Email Inquiry functionality globally across your WP e-Commerce store on your single product pages, shop pages - list view, grid view, category and tags pages. 

= Configure =

1. Add to Cart Button to show with an Email Inquiry button with a stylish pop-up product email inquiry form
OR
2. Hide the add to cart Button and just show the Email Inquiry Button turning your site into a brochure site.
OR
3. Hide the Add to Cart Button and don't show Email Button.
PLUS
4. Choose to apply the above setting to not logged in users and / or logged in users.

WP e-Commerce Catalog Visibility and Email Inquiry uses the WordPress email config and requires no external email plugin. The email sent to the WP e-Commerce email admin address from each product inquiry contains:

* Senders Name
* Senders Email address
* Senders Phone
* Product name the inquiry is sent from as the email subject plus a link to the product page they sent the inquiry from.
* Senders Message.

WP e-Commerce Catalog Visibility and Email Inquiry Lite is very simple to set up. Once you have installed and activated go to you wp_admin dashboard Settings > Store > Catalog Visibility Tab.

= WP e-Commerce Version Compatibility =

Please note that WP e-Commerce Catalog Visibility and Email Inquiry requires that you have <strong>WP e-Commerce version 3.8.8.5 and after</strong> to work. Older versions of WP e-Commerce do not support the functions to hook the email inquiry button to the add to cart button.

= WP e-Commerce Theme Compatibility =

Whilst you might have version 3.8.8.5 your theme may still use an earlier version of code. For the Email Inquiry button to show on the single product pages and products pages you must ensure that it has this 

code do_action('wpsc_product_form_fields_begin') and do_action('wpsc_product_form_fields_end') in these files:

* wpsc-grid_view.php
* wpsc-list_view.php
* wpsc-products_page.php
* wpsc-single_product.php

= Lite Version Support =

As a Lite Version user please post all support requests to the plugins WordPress Support forum. We do not watch that forum and posting there you will be relying on another user for support not an a3rev team member. Pro Version Licence holders have 'write' access to the a3rev support forum and Lifetime priority support, not from support staff but from the developers.

= Documentation =

Find detailed step-by-step set up and configuration instructions in the [plugins documents](http://docs.a3rev.com/user-guides/wp-e-commerce/wpec-catalog-visibility-and-email-inquiry/) on the a3rev wiki.

= Pro Version =

For those who want more control there is a PRO Version upgrade. The PRO version advanced features include:

= Global Settings: =
* Set custom email recipient (different to the default WPEC admin email)
* Set a cc recipient
* Set your own custom Email Button title and set custom style for email button.
* Use text on page with hyperlink pop-up email form instead of the Email Button 
* Customize Hyperlink text
* Style pop-up window email form and submit button.
* Customize the successfully submitted message that shows in the pop up when a message has been sent.

And for ultimate control:

= Customize Single Product Page: =
* Customize Catalog visibility settings and email inquiry settings on any single product page. 
* Over-ride any of the global Catalog Visibility options from the product page.
* Change the Email Inquiry form primary recipient and cc recipient
* Change Button for linked text and visa versa - Change button title or link text.
* Only show this products settings on the single product page or on all catalog listing thumbnails.

= Priority Support =

Please note that we do not provide support for our Lite Version plugins. Hundreds of thousands of plugin downloads has proven that vast majority of the support requests we get have nothing to do with our plugins but are related to bugs in the users theme or other plugins they have installed. We give priority support to those users who purchase a Pro Version license. In this plugins case, we offer a single payment, Lifetime License fee which includes access to and full support from the a3rev developers on the plugins support forum. 

= Localization =

* English (default) - always included.
*.po file (wpec_pcf.po) in languages folder for translations.
* If you do a translation for your site please send it to us for inclusion in the plugin language folder. We'll acknowledge your work here. [Go here](http://a3rev.com/contact-us-page/) to send your translation files to us.

= Plugin Resources =

[PRO Version](http://a3rev.com/shop/catalog-visibilty-and-email-inquiry/) |
[Documentation](http://docs.a3rev.com/user-guides/wp-e-commerce/wpec-catalog-visibility-and-email-inquiry/) |
[Support](http://wordpress.org/support/plugin/wp-e-commerce-catalog-visibility-and-email-inquiry/)


== Installation ==

= Minimum Requirements =

* WordPress 3.5.0
* WP e-Commerce 3.8.8.5
* PHP version 5.2.4 or greater
* MySQL version 5.0 or greater
 
= Automatic installation =

Automatic installation is the easiest option as WordPress handles the file transfers itself and you don't even need to leave your web browser. To do an automatic install of WP e-Commerce Catalog Visibility and Email Inquiry, log in to your WordPress admin panel, navigate to the Plugins menu and click Add New. 

In the search field type "WP e-Commerce Catalog Visibility and Email Inquiry" and click Search Plugins. Once you have found our plugin you can install it by simply clicking Install Now. After clicking that link you will be asked if you are sure you want to install the plugin. Click yes and WordPress will automatically complete the installation. 

= Manual installation =

The manual installation method involves downloading our plugin and uploading it to your web server via your favourite FTP application.

1. Download the plugin file to your computer and unzip it
2. Using an FTP program, or your hosting control panel, upload the unzipped plugin folder to your WordPress installations wp-content/plugins/ directory.
3. Activate the plugin from the Plugins menu within the WordPress admin.


== Screenshots ==

1. Transform WP e-Commerce into a brochure site 
2. WP e-Commerce pop-up email form
3. After email sent success message that shows in the pop-up window.
4. The email you receive with attractive styling built in.
 
== Usage ==

1. Install and activate the plugin

2. Go to wp-admin dashboard > WPEC Cat & Email menu

3. Rules & Roles menu to set product page rule > Hid Add to Cart.

4. Email Inquiry menu to set product page rule > Show Email Inquiry Button and config the email.
 
5. Have fun.

== Frequently Asked Questions ==

= When can I use this plugin? =

You can use this plugin only when you have installed the WP e-Commerce plugin.
 
== Changelog ==

= 1.0.8 - 2013/12/02 =
* Feature - Major plugin upgrade. Full code rework. 
* Feature - Upgraded the plugin to the newly developed a3rev admin Framework with app style interface.
* Feature - Moved admin from wp dashboard > Settings > Store > Tab to own dashboard menu item called WPEC Catalog & Email.
* Feature - WPEC Catalog & Email sub menus, Rules & Roles | Email Inquiry
* Feature - Rules & Roles menu - Product Page Rule 'Hide add to Cart' - Added setting to ON or OFF for logged in users independent of not logged in users. 
* Feature - Email Inquiry menu broken up into tabs - Settings | Default Form | Button Style
* Feature - Email Inquiry > Settings menu. Product Page Rule - Show Email Inquiry Button - Added setting to ON or OFF for logged in users independent of not logged in users.
* Feature - Email Inquiry > Settings menu. Product Cards feature – Option to turn email inquiry ON | Off on product cards independent of the product page.
* Feature - Added House Keeping function to settings. Clean up on Deletion. Option - If ever deleted (not deactivated) this plugin it will completely remove all tables and data it has created.
* Feature - Email Inquiry > Default Form > Setting menu - Inquiry Email goes to feature. Option to set an alternative email address to the  WPEC admin email address.
* Feature - Email Inquiry > Default Form > Setting menu - cc email address feature. Option to add a cc email address for inquiries submitted.
* Feature - Email Inquiry > Default Form >  Default Form Style menu - Default Form Header Title – allows to set the pop-up form title to something other than the button title which is the default setting.
* Feature - Email Inquiry > Default Form >  Default Form Style menu – Form Send submit button – allows to set the pop-up form send button text.
* Feature - Email Inquiry > Default Form >  Default Form Style menu  - Activated Success Message – allows to create a custom email successfully sent pop-up message.
* Feature - Email Inquiry > Button Style - Added option to select between Button | Hyperlinked Text for the inquiry display.
* Feature - Email Inquiry > Button Style – Added option to position the Email Inquiry Button | Hyperlinked text above or below the relative position of the add to cart button.
* Feature - Email Inquiry > Button Style. Added option to set padding in px above, below, left & right for the Email Inquiry button / Hyperlink.
* Feature - New admin UI features check boxes replaced by switches, some dropdowns replaced by sliders.
* Feature - Added intuitive triggers for admin panel settings. When selected corresponding feature settings appear.
* Tweak - Stricter sanitization of Default Form Message input field. Only allow input of plain text with auto paragraph on line break.
* Tweak - Added function .replace(/^\s+|\s+$/g, '') to check form for empty spaces for required fields Name, Email and Phone.
* Tweak - Default Form Success Message Pop-up auto resizes to whatever the tall of the success message content is.
* Tweak - Pop-up tools wide under 520px shows 100% wide of the screen for mobiles in portrait or landscape. 
* Tweak - Default Form - added static 20px content padding that auto reduces to 5px in tablets and mobiles.
* Tweak - 100% Compatibility with WordPress Version 3.7.1
* Tweak - 100% Compatibility with WP e-Commerce version 3.8.12.1	.	
* Tweak - Rules and Roles - incorporate help message under each Product Page Rule - Show Email Inquiry Button. Show when the Rule is turned on.
* Tweak - Updated translation submission URL
* Tweak - Updated Lite Version support text on plugins description.
* Fix - Default form success message showing HTML tags with text.
* Fix - Did a full WP_DEBUG. All uncaught exceptions, notices, warnings and errors fixed.
* Fix - Fixed up all existing typos on admin panel.
* Fix - Plugins admin script and style not loading in Firefox with SSL on admin. Stripped http// and https// protocols so browser will use the protocol that the page was loaded with.
* Fix - Script validate email for default contact form. Old script conflicted with WordPress 3.6.0 jQuery 1.10.2. Conflict caused the popup tools to break. 
* Fix - Added box-sizing:content-box class attribute for compatibility with new WordPress Twenty Thirteen default theme.
* Fix - stripslashes the value are entered in Inquiry email content.

= 1.0.7 - 2013/06/28 =
* Tweak - Updated plugins support forum link to the wordpress support forum.
* Fix - Replaced hardcode iso-8859-1 charset to dynamic get_option('blog_charset')
* Fix - Updated all JavaScript functions so that the plugin is compatible with jQuery Version1.9 and backwards to version 1.6. WordPress still uses jQuery version 1.8.3. In themes that use Google js Library instead of the WordPress jQuery then there was trouble because Google uses the latest jQuery version 1.9. There are a number of functions in jQuery Version 1.9 that have been depreciated and hence this was causing errors with the jQuery function in the plugin.
* Fix - Removed Email form po-up pre-set 500px width. Replaced by auto wide from fancybox script.
* Fix - Added when install and activate plugin link redirects to the plugins dashboard instead of the wp-plugins dashboard.

= 1.0.6 - 2013/04/22 =
* Tweak - Updated all plugin code to be 100% compatible with the new WP e-Commerce version 3.8.10. The plugin is backward compatible with older version to 3.8.5

= 1.0.5 - 2013/01/25 =
* Tweak - Added an on screen Attention message if the plugin does not find a WP e-Commerce store admin email address. Notifies the user that the WordPress admin email address is being used by the plugin as the 'send to' address and asks the user to add a WP e-commerce Store email address.
* Fix - Email Delivery address - when the plugin is installed it now checks for WP e-Commerce Store Admin Email address and uses that if one has been entered. If it does not find a Store Admin Email Address, then it checks for and uses the WordPress admin email address. The WP e-Commerce Store Admin Email address always takes priority the WordPress Admin email address. This means that if the Store admin address is entered after the WP e-Commerce Catalog Visibility an Email Inquiry is installed it auto becomes the plugins delivery address.

= 1.0.4 - 2013/01/19 =
* Tweak - Added auto support for custom button type for 'add to cart' button so that our plugin can find the add to cart button on themes that use custom button code.

= 1.0.3 - 2013/01/09 =
* Tweak - Updated Support and Pro Version link URL's on wordpress.org description, plugins and plugins dashboard. Links were returning 404 errors since the launch of the all new a3rev.com mobile responsive site as the base e-commerce permalinks is changed.

= 1.0.2 - 2012/08/27 =
* Tweak: Updated WordPress description text and readme to show the WP e-Commerce 3.8.8.5 do_action functions that must be included in themes for the Email Button to show. Some older themes don't have updated function and even though users have the 3.8.8.5 WP e-commerce version the button can't show.
* Fix - Combined button and pop-up window style scripts in one script to overcome javascript conflict with some IE javascript styling scripts.
* Documentation - Plugin documentation completed.

= 1.0.1 - 2012/08/25 =
* Tweak - Removed left and right 10px float and set so button left / right float is the same as the add to cart button.
* Fix - Moved style from header to footer to resolve plugin breaking themes css in IE 7, 8 and 9

= 1.0.0 - 2012/08/23 =
* First Release.


== Upgrade Notice ==

= 1.0.8 =
Major upgrade version release. 19 new Features, 10 Tweaks, 7 bug fixes. 100% compatibility with WordPress 3.7.1 and WPEC 3.8.12.1 and backwards.

= 1.0.7 =
Update you plugin now for 3 important bug fixes.

= 1.0.6 =
Important upgrade! Install now to ensure this plugin continues to work when you upgrade WP e-Commerce to new version 3.8.10.  
