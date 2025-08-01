<?php
/**
 * Plugin Name: Profissionais
 * Description: CPT de Profissionais com cargos personalizados.
 * Version: 1.0
 * Author: Cauan
 */

if (!defined('ABSPATH')) exit;

define('WEE_PROFISSIONAIS_PATH', plugin_dir_path(__FILE__));

require_once WEE_PROFISSIONAIS_PATH . 'includes/cpt-profissionais.php';
require_once WEE_PROFISSIONAIS_PATH . 'includes/taxonomia-cargo.php';
require_once WEE_PROFISSIONAIS_PATH . 'includes/campos-metabox.php';

add_filter('single_template', function ($template) {
    global $post;
    if ($post->post_type === 'profissionais') {
        $custom_template = WEE_PROFISSIONAIS_PATH . 'templates/single-profissionais.php';
        if (file_exists($custom_template)) return $custom_template;
    }
    return $template;
});
