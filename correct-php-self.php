<?php
/*
Plugin Name: Correct PHP_SELF
Version: 0.1
Description: Assigns the correct value to PHP_SELF server variable.
Author: Sergey Biryukov
Author URI: http://sergeybiryukov.ru/
*/

$_SERVER['PHP_SELF'] = str_replace("/{$_SERVER['HTTP_HOST']}", '', $_SERVER['PHP_SELF']);
?>