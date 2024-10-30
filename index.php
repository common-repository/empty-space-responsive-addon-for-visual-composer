<?php 

/*
Plugin Name: Empty Space Responsive Addon for Visual Composer
Description: Element used for giving space between the other elements, which can be customized for different devices
Author: Thiyagesh M
Author URI: http://thyash11.github.io
Version: 1.0
License: GPL2
Text Domain: ers_addons

Copyright 2017  Thiyagesh M (email : thyash11@gmail.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
if ( ! defined( 'ABSPATH' ) ) exit; 
include 'main.php';
if (class_exists('ERS_VC_SPACE')) {
    $obj_init = new ERS_VC_SPACE;
}
?>