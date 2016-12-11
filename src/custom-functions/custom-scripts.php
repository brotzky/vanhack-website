<?php

if (!is_admin()) {

  add_action("wp_enqueue_scripts", "insert_jQuery", 11);
    function insert_jQuery() {
       wp_deregister_script('jquery');

       wp_register_script('jquery', "https" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js", false, true);

       wp_enqueue_script('jquery');
    }
}
