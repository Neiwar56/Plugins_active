<?php
/*
Plugin Name: Liste des Extensions Actives (Wordpress)
Description: Ceci et une extension qui va lister toutes les extensions installées par défaut sur Wordpress.
Version: 3.5.8
Author: Nelson Harry AWOUDO
*/

require_once('C:/xampp/htdocs/Lust/wp-load.php');
function afficher_liste_extensions() {
    $active_plugins = get_option('active_plugins');
    echo '<h2>Liste des Extensions Actives</h2>';
    echo '<ul>';
    foreach ($active_plugins as $plugin) {
        $plugin_data = get_plugin_data(WP_PLUGIN_DIR . '/' . $plugin);
        echo '<li><strong>' . $plugin_data['Name'] . '</strong> (Version: ' . $plugin_data['Version'] . ') - URL: ' . $plugin_data['PluginURI'] . '</li>';
    }
    echo '</ul>';
}

function shortcode_liste_extensions() {
    ob_start();
    afficher_liste_extensions();
    return ob_get_clean();
}

add_shortcode('liste-extensions', 'shortcode_liste_extensions');

function redirection_apres_activation() {
    $page_id = 25;
    $url = get_permalink($page_id);
    if ($url) {
        wp_redirect($url);
        exit;
    }
}
register_activation_hook(__FILE__, 'redirection_apres_activation');
