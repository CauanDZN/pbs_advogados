<?php
add_action('init', function () {
    register_taxonomy('cargo', 'profissionais', [
        'label' => 'Cargo',
        'hierarchical' => false,
        'public' => true,
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'cargo']
    ]);
});
