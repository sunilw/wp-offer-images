<?php
/*
   Plugin Name: WP Offer Images
   Description: Very simple plugin for the creation of a media gallery
   Version: 0.1.0
   Plugin URI:
   Author URI:
   Author: Sunil Williams
 */

/*  Copyright 2016 SiteCraft Ltd  (email : sunil@sitecraft.co.nz)

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License, version 2, as
   published by the Free Software Foundation.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.
 */

define( "WPOFFER_PLUGINDIRURI",  plugin_dir_url(__FILE__) ) ;

/**
* create a custom image size
*/
add_image_size('han-preview-size', '600',   '600',  false  ) ;

/**
* load our stylesheet
*/
add_action('wp_enqueue_scripts', 'load_offer_images_styles') ;
function load_offer_images_styles() {
    wp_enqueue_style('load-offer-styles', WPOFFER_PLUGINDIRURI . "/css/wp-offer.css") ;
}


/**
* include the loop that publishes our grid
*/
function dra_media_gallery() {
    ob_start();
    include("templates/press-gallery.php") ;  
    return ob_get_clean();
}

add_shortcode('dra-media-gallery', 'dra_media_gallery'  ) ;
