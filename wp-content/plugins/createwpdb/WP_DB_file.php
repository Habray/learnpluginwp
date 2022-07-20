<?php

function WP_tb_create(){

    global $wpdb;

    // STEP 1
    // Create table name with prefix

    $WP_tb_name = $wpdb->prefix . "wp_tb_slider";

    // STEP 2
    // Write Query
    $WP_query = "CREATE TABLE $WP_tb_name(
        id int(10) NOT NULL AUTO_INCREMENT,
        img_url varchar (100) DEFAULT '',
        img_value varchar (100) DEFAULT '',
        img_display varchar (100) DEFAULT '',
        PRIMARY KEY (id)
        )";


    // STEP 3
    // Execute Query
    require_once(ABSPATH . "wp-admin/includes/upgrade.php");
    dbDelta($WP_query);
}