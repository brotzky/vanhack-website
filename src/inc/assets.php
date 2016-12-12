<?php // ==== ASSETS ==== //

// Now that you have efficiently generated scripts and stylesheets for your theme, how should they be integrated?
// This file walks you through an approach I use but you are free to do this any way you like

// Load header assets; this should include the main stylesheet as well as any mission critical scripts
function vanhack_assets_header() {

  // Header script loading is simplistic in this starter kit but you may want to change what file is loaded based on various conditions; check out the footer asset loader for an example
  $file = 'x-header';
  wp_enqueue_script( 'vanhack-header', get_stylesheet_directory_uri() . '/js/' . $file . '.js', $deps = array('jquery'), filemtime( get_template_directory() . '/js/' . $file . '.js' ), false );

  // Register and enqueue our main stylesheet with versioning based on last modified time
  wp_register_style( 'vanhack-style', get_stylesheet_uri(), $dependencies = array(), filemtime( get_template_directory() . '/style.css' ) );
  wp_enqueue_style( 'vanhack-style' );
}
add_action( 'wp_enqueue_scripts', 'vanhack_assets_header' );

// Load assets on single content; useful for conditional loading of the core comments script, for example
function vanhack_assets_singular() {
  if ( !is_singular() )
    return;

  // Load core WordPress script for handling threaded comments where appropriate
  // This isn't really useful since comments aren't a feature of this simple theme but you get the idea
  if ( comments_open() && get_option('thread_comments') )
    wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'vanhack_assets_singular' );
