<?php
/*
Plugin Name: Avgrund for WordPress
Description: Avgrund is a jQuery plugin for your modal boxes and popups. It uses new concept showing depth between popup and page. It works in all modern browsers and gracefully degrade in those that do not support CSS transitions and transformations.
Plugin URI: http://justoalblanco.com/wordpress-plugins/avgrund-for-wp
Author: Luis Abarca
Author URI: http://luisabarca.com
Version: 0.1.0
License: GPLv2 or later
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

define('JAB_AFW_VERSION', '0.1.0');
define('JAB_AFW__PATH',   dirname(__FILE__) );
define('JAB_AFW_PLUGIN_URL',  untrailingslashit( plugin_dir_url(__FILE__) ) );

add_action( 'wp_enqueue_scripts', 'jab_afw_scripts' );

function jab_afw_scripts()
{
	wp_enqueue_script( 'jquery-avgrund', JAB_AFW_PLUGIN_URL . '/js/jquery.avgrund.js', array('jquery') );
	wp_enqueue_script( 'jquery-cookie', JAB_AFW_PLUGIN_URL . '/js/jquery.cookie.js', array('jquery') );
	wp_enqueue_style( 'avgrund', JAB_AFW_PLUGIN_URL . '/css/avgrund.css');
}