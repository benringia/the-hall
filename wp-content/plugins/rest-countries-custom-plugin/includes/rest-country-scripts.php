<?php 
    //add scripts
    function rc_add_scripts() {
        //add style
        wp_enqueue_style('rc-main-style',plugins_url(). '/rest-countries-custom-plugin/css/style.css');
        //add js
        wp_enqueue_script('rc-main-script',plugins_url(). '/rest-countries-custom-plugin/js/main.js');
    }

    add_action('wp_enqueue_scripts', 'rc_add_scripts');