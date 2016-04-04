=== Plugin Name ===
Contributors: Alexey Yuzhakov
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=alexey%40wp%2dpano%2ecom&lc=GB&item_name=WP%2dPano&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG_global%2egif%3aNonHosted
Tags: wp-pano, pano, panorama, krpano, vtour, virtual tour
Requires at least: 3.5
Tested up to: 4.4
Stable tag: 1.05 beta
License: GPLv3
License URI: http://opensource.org/licenses/GPL-3.0

The WP-Pano is the WordPress plugin for content management of your krpano projects.

== Description ==

The WP-Pano is the WordPress plugin for content management of your krpano projects. 
The plugin gives you possibility to inserting content such text, galleries, videos 
into your panoramas and helps to edit them easily. Use power and flexibility 
of the WordPress cms to create your virtual tours.

= List of features =

* Allow to use PHP, JavaScript, and HTML to create any content (photo galleries, video and audio, custom forms, iframe, and much more)
* Flexible configuration of window templates
* Setup hotspots style
* Support custom post types. Easy way is to use the plugin Custom Post Type UI
* Good compatibility with other WordPress plugins
* Compatible with Polylang and qTranslate X plugins for translating content into any languages

= Docs & Support =

More detailed information about WP-Pano on [wp-pano.com](http://wp-pano.com)

= WP-Pano needs your support =

If you enjoy using WP-Pano and find it useful, please consider [making a donation.](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=alexey%40wp%2dpano%2ecom&lc=GB&item_name=WP%2dPano&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG_global%2egif%3aNonHosted)
Your donation will help encourage and support the plugin's continued development and better user support.

== Installation ==

1. Upload the wp-pano directory to the '/wp-content/plugins/' directory in your WordPress installation
2. Upload your vtour
3. Activate the plugin through the 'Plugins' menu
4. Setup path through the 'Options'->'WP-Pano' menu

= very important =

* add attribute vtour_name="unique_name" into the krpano root tag.
* include wp-pano.xml to your xml file: `<include url="%$WPPANOPATH%/xml/wp-pano.xml"/>`

For more information please read [Quick start](http://wp-pano.com/documentation/)

== Screenshots ==

1. Setup vtour
2. Add post to panorama
3. Hotspots in panorama
4. Open video hotspot
5. Open gallery
6. Open Google Street View

== Changelog ==

= 1.05 beta =
* fix: error query posts

= 1.04 beta =
* fix: check vtour path
* fix: WPPANOPATH error

= 1.0 beta =
* Initial release