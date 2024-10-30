=== Correct PHP_SELF ===
Contributors: SergeyBiryukov
Tags: system, setup, hosting
Requires at least: 1.5
Tested up to: 3.3
Stable tag: 0.1

Fixes incorrect PHP_SELF server variable.

== Description ==

On some servers `$_SERVER['PHP_SELF']` contains `/example.com/index.php` instead of just `/index.php`. This one-line plugin restores the correct value.
You only need it if you have problems with some other plugins and/or URLs like `http&#x3A;//example.com/example.com/wp-admin/` in your admin screens.

== Installation ==

1. Upload `correct-php-self` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Changelog ==

= 0.1 =
* Initial release
