=== WP Nice Slug ===
Contributors: spectraweb
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Z5XN794FWSSZW
Tags: automatic, cyrillic, hebrew, han, greek, european, language, latin, multilanguage, plugin, translit, transliteration
Requires at least: 1.0.0
Tested up to: 3.3.1
Stable tag: 1.0.2

Converts non-Latin characters to ASCII in post slugs.

== Description ==

Plugin sanitizes title for post slug, replacing non-Latin characters to ASCII.

Requires [`PECL::Package::translit`](http://derickrethans.nl/projects.html#translit)

At the moment the supported transliteration filters include:
* Cyrillic-to-Latin transliteration;
* Greek-to-Latin transliteration;
* Han-to-Latin transliteration;
* Hebrew-to-Latin transliteration;
* and filters to remove diacriticals from text.

== Installation ==

1. Run the pear installer tool to install the extension on your server: `pear install http://pecl.php.net/get/translit`
2. Login to admin panel of your WP blog and go to `Plugins` → `Add New`
3. Enter `wp-nice-slug` and click on Search button
4. Click on link Install bellow plugin name `WP Nice Slug`
5. Activate plugin by clicking on link `Activate`

== Frequently Asked Questions ==

No questions yet

== Screenshots ==

1. Result of transliteration from Cyrillic
2. Result of transliteration from Hebrew

== Changelog ==

= 1.0.2 =
* Added check for installed PECL package on plugin activation

= 1.0.1 =
* Fixed description

= 1.0 =
* First public release

== Upgrade Notice ==

Plugin does not require any special steps to upgrade
