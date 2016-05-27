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


/**
* create a custom image size
*/
add_image_size('han-preview-size', '600',   '600',  false  ) ;

/**
* load our stylesheet
*/



/**
* include the loop that publishes our grid
*/
function dra_media_gallery() {
    $html = include("templates/press-gallery.php") ;  
    echo $html ; 
    return ;
}

add_shortcode('dra-media-gallery', 'dra_media_gallery'  ) ;
