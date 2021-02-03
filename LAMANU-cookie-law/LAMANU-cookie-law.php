<?php

/*
Plugin Name: BOJEU
Version: 0.1
Plugin URI: http://www.
Description: BOJEU TARTE CITRONER
Author: BOJEU
*/

$errorMessages = [];
add_action('admin_menu','add_menu_scripts');

function add_menu_scripts(){
    add_menu_page('bojeu-menu', 'bojeu-script', 'manage_options', 'bojeu', 'LAMANU_scripts');
    echo "<h1>bojeu</h1>";

}
function LAMANU_scripts(){
    wp_enqueue_script('tarteaucitron',plugin_dir_path( __FILE__ ).'LAMANU-cookie-law/js/tarteaucitron.js', array(), '1.0', true);
    
    if (!preg_match('/^[a-zA-Z1-9]+$/', $_POST["badge"])) {
        $errorMessages["badge"] = "veuillez saisir un nombre de badge valide";
    }
    if(isset($_POST["id"])){
        if (empty($_POST["id"])) {
            $errorMessages["id"] = "veuillez saisir votre id";
        }
    }
    ?><form method="POST">
            <p>ID de suivi: <input type='text' name='id' /></p>
            <button type='submit'>Envoyer</button>
        </form>";
<?php var_dump($_POST["id"]);} ?>
