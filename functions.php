<?php
/**
 * Created by PhpStorm.
 * User: Practice
 * Date: 9/3/2015
 * Time: 3:20 PM
 */

//theme options: add thumbnail images to wordpress theme for posts.
add_theme_support( 'post-thumbnails' );


//theme options: custom image header
$args = array(
    'width'         => 980,
    'height'        => 60,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $args );


/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
) );

/*
 * Enable support for Post Formats.
 * See https://developer.wordpress.org/themes/functionality/post-formats/
 */
add_theme_support( 'post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
) );


// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );
?>