<?php
/**
 * Plugin Name: PBS Comunica
 * Description: Plugin para registrar o CPT PBS Comunica com templates personalizados.
 * Version: 1.0
 * Author: Cauan
 */

if (!defined('ABSPATH')) exit;

define('PBS_COMUNICA_PATH', plugin_dir_path(__FILE__));

require_once PBS_COMUNICA_PATH . 'includes/cpt-pbs-comunica.php';

add_filter('single_template', function ($template) {
    global $post;
    if ($post->post_type === 'pbs_comunica') {
        $custom_template = PBS_COMUNICA_PATH . 'templates/single-pbs-comunica.php';
        if (file_exists($custom_template)) return $custom_template;
    }
    return $template;
});

add_filter('archive_template', function ($template) {
    if (is_post_type_archive('pbs_comunica')) {
        $custom_template = PBS_COMUNICA_PATH . 'templates/archive-pbs-comunica.php';
        if (file_exists($custom_template)) return $custom_template;
    }
    return $template;
});
