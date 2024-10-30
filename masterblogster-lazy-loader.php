<?php

/*
Plugin Name: Masterblogster Lazy Loader
Plugin URI: http://www.masterblogster.com/plugins/masterblogster-lazy-loader
Description: Bored with static home page? Masterblogster Lazy Loader plugin loads your blog posts one by one on the homepage with cool sliding animation effect.
Author: Shrinivas Naik
Version: 1.0
Author URI: http://www.masterblogster.com
*/

/* --------------------------------------------------------------------------------------------------------------------*/
/*  Main plugin code */
function masterblogster_lazy_loader_header_code()
{

if (is_home()){?>

    <style>
    article{
    	visibility:hidden;
    }
    </style>
    
    <script>
    jQuery(document).ready(function($) {
    	var $a;
    	var $b;
    	$a=500;
    	$b=50;
    
    	jQuery(jQuery("article").get().reverse()).each(function(){
    		jQuery(this).hide();
    		jQuery(this).css({"visibility":"visible"});
    		jQuery(this).delay($a).show($b);
    		$a+=350;
    		$b+=50;
    	});
    
    });
    </script>  
    
    <?php
    } //if ended

} //function ended

add_action('wp_head','masterblogster_lazy_loader_header_code');

add_action('wp_enqueue_scripts', 'load_jquery');
function load_jquery() {
    wp_enqueue_script('jquery');
}

?>