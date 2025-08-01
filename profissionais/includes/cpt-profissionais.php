<?php
add_action('init', function () {
    register_post_type('profissionais', [
        'label' => 'Profissionais',
        'public' => true,
        'menu_icon' => 'dashicons-businessman',
        'supports' => ['title', 'editor', 'thumbnail'],
        'has_archive' => true,
        'rewrite' => ['slug' => 'profissionais'],
        'show_in_rest' => true,
    ]);
});
