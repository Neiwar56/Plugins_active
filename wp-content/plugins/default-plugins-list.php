<?php
/*
Plugin Name: Extensions par défaut (Active)
Description: La présente extension donne une liste des extensions présentes par défaut sur WordPress 
Version: 2.4.9
Author: Neson Harry
*/

function add_custom_javascript() {
    ?>
    <script>
    jQuery(document).ready(function($) {
        function filterExtensions() {
            var isChecked = $('#filter-active').is(':checked');

            $('ul.plugins-list li').each(function() {
                if (isChecked) {
                    if ($(this).hasClass('active-plugin')) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                } else {
                    $(this).show();
                }
            });
        }

        
        var checkbox = $('<input type="checkbox" id="filter-active">');
        var label = $('<label for="filter-active">  Just Active  </label>');

        $('#wpbody-content h2').after(label, checkbox);

        $('#filter-active').on('change', filterExtensions);

        filterExtensions();
    });
    </script>
    <?php
}
add_action('admin_footer', 'add_custom_javascript');

function default_plugins_list_menu() {
    add_plugins_page(
        'Plugins List',
        'Plugins List',
        'manage_options',
        'default-plugins-list',
        'display_default_plugins_list'
    );

}    
add_action('admin_menu', 'default_plugins_list_menu');

function display_default_plugins_list() {
    echo '<div class="wrap">';
    echo '<h2>Liste des extensions</h2>';

    $all_plugins = get_plugins();

    echo '<ul class="plugins-list">';
    foreach ($all_plugins as $plugin_file => $plugin_data) {
        $plugin_name = $plugin_data['Name'];
        $plugin_version = $plugin_data['Version'];
        $plugin_url = admin_url('plugin-install.php?s=' . $plugin_name . '$tab=search&type=term');

        $is_default_plugin = is_plugin_active($plugin_file);

        if ($is_default_plugin) {
            echo '<li class="active-plugin" style="background-color: #f7f7f7; padding: 10px; border: 1px solid #ccc;">' . esc_html($plugin_name) . ' (Active) - Version: ' . esc_html($plugin_version) . ' - <a href="' . esc_url($plugin_url) . '">Plus d\'informations</a></li>';
        } else {
            echo '<li style="background-color: #ffffff; padding: 10px; border: 1px solid #ccc;">' . esc_html($plugin_name) . ' - Version: ' . esc_html($plugin_version) . ' - <a href="' . esc_url($plugin_url) . '">Plus d\'informations</a></li>';
        }
    }
    echo '</ul>';
    echo '</div>';
}
