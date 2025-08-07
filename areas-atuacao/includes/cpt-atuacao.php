<?php
add_action('init', function () {
    register_post_type('area_atuacao', [
        'label' => 'Áreas de Atuação',
        'public' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'areas-de-atuacao'],
        'show_in_rest' => true,
    ]);
});
