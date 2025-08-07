<?php
add_action('init', function () {
    register_post_type('pbs_comunica', [
        'labels' => [
            'name' => 'PBS Comunica',
            'singular_name' => 'Notícia',
            'add_new' => 'Adicionar nova',
            'add_new_item' => 'Adicionar nova notícia',
            'edit_item' => 'Editar notícia',
            'new_item' => 'Nova notícia',
            'view_item' => 'Ver notícia',
            'search_items' => 'Buscar notícias',
            'not_found' => 'Nenhuma notícia encontrada',
            'not_found_in_trash' => 'Nenhuma notícia na lixeira',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-megaphone',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'rewrite' => ['slug' => 'pbs-comunica'],
        'taxonomies' => ['category'],
        'show_in_rest' => true,
    ]);
});
