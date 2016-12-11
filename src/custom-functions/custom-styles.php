<?php
/**
 * use WP conditional tags to load page specific styles
 * @link https://developer.wordpress.org/themes/basics/conditional-tags/
 */
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
/**
 * Google Font: Source Sans Pro
 * 200, 300 Italic, 300, 400, 600
 */
wp_enqueue_style( 'fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,300italic,400,600' );

/**
 * Main prod. stylesheet
 */
wp_enqueue_style( 'main', get_template_directory_uri() .'/style.css' );
