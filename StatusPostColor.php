<?php
/*
Plugin Name: StatusPostColor
Plugin URI: http://www.jesuisgeek.fr/wp-plugins
Description: Mettre les articles en couleur dans l'administration suivant leur statut.
Author: Anthony VALENTIN
Version: 1.0
Author URI: http://www.jesuisgeek.fr
*/

       function color_css_post_status() {
    ?>
    <style>
    .status-draft{background: #FFFF99 !important;}
    .status-future{background: #CCFF99 !important;}
    .status-pending{background: #87C5D6 !important;}
    .status-private{background:#FFCC99 !important;}
    .status-publish{}
    </style>
    <?php
    }
    add_action('admin_print_styles-edit.php','color_css_post_status');
?>
