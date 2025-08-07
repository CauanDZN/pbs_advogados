<?php
/**
 * Plugin Name: Áreas de Atuação
 * Description: CPT de Áreas de Atuação com campos personalizados.
 * Version: 1.0
 * Author: Cauan
 */

if (!defined('ABSPATH')) exit;

define('ATUACAO_PATH', plugin_dir_path(__FILE__));

require_once ATUACAO_PATH . 'includes/cpt-atuacao.php';
require_once ATUACAO_PATH . 'includes/campos-metabox.php';

add_filter('single_template', function ($template) {
    global $post;
    if ($post->post_type === 'area_atuacao') {
        $custom_template = ATUACAO_PATH . 'templates/single-area-atuacao.php';
        if (file_exists($custom_template)) return $custom_template;
    }
    return $template;
});
