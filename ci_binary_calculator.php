<?php
/*
Plugin Name: CI Binary calculator
Plugin URI: https://www.calculator.io/binary-calculator/
Description: Binary calculator for binary to decimal conversion, decimal to binary conversion, binary operations – addition, subtraction, multiplication, division.
Version: 1.0.0
Author: Binary Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_binary_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Binary Calculator by www.calculator.io";

function display_calcio_ci_binary_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Binary Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_binary_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_binary_calculator', 'display_calcio_ci_binary_calculator' );