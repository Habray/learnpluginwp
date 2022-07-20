<?php
 
/*
 
Plugin Name: Create Wordpress Database
Description: Learn to create database
Version: 1.0
Author: Parbat
 
 
*/

// STEP 4

// include db file
include_once("WP_DB_file.php");

// Register table function
// name of function from WP_DB_file.php
register_activation_hook(__FILE__, 'WP_tb_create');