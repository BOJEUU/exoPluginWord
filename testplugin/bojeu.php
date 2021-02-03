<?php
/*
Plugin Name: BOJEUU
Description: un plugin qui que du bojeuuuuu
Author: BOJEUU
Version: 0.1
*/

add_action('admin_menu', 'bojeusetup');
 
function bojeusetup(){
    add_menu_page( 'BOJEU menu', 'PAGE BOJEU', 'manage_options', 'PAGE BOJEU', 'bojeuFunction', plugins_url("testplugin/rat.png"));
}
function bojeuFunction(){
    echo "<h1>Hello BOJEUUUU!</h1>";
}
?>