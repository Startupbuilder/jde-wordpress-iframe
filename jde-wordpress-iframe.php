<?php
/*
Plugin Name: Jde Calculator Iframe
Plugin URI: https://github.com/devjde/jde-wordpress-iframe
Description: Встраиваемый калькулятор расчета стоимости доставки Iframe
Version: 1.0
Author: Желдорэкспедиция. Дорогов Алексей
Author URI: http://dev.jde.ru
License: GPLv2 or later
Text Domain: jde-wordpress-iframe
*/

defined('ABSPATH') or die('No script kiddies please!');

function add_iframe()
{
    echo '<iframe src="http://facebook.jde.ru/icalc" scrolling="yes" width="550" height="672" align="left"></iframe>';
}

add_shortcode('jde_calculator_form', 'add_iframe');

