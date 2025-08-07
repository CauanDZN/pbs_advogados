<?php
add_action('add_meta_boxes', function () {
    add_meta_box('dados_profissional', 'Dados do Profissional', 'render_campos_profissional', 'profissionais', 'normal', 'default');
});

function render_campos_profissional($post) {
    $titulação = get_post_meta($post->ID, 'titulacao', true);
    $linkedin = get_post_meta($post->ID, 'linkedin', true);
    $email = get_post_meta($post->ID, 'email', true);

    wp_nonce_field('salvar_dados_profissional', 'profissional_nonce');
    ?>
    <p><label>Titulação:<br><input type="text" name="titulacao" value="<?php echo esc_attr($titulação); ?>" class="widefat"></label></p>
    <p><label>LinkedIn:<br><input type="url" name="linkedin" value="<?php echo esc_attr($linkedin); ?>" class="widefat"></label></p>
    <p><label>Email:<br><input type="email" name="email" value="<?php echo esc_attr($email); ?>" class="widefat"></label></p>
    <?php
}

add_action('save_post', function ($post_id) {
    if (!isset($_POST['profissional_nonce']) || !wp_verify_nonce($_POST['profissional_nonce'], 'salvar_dados_profissional')) return;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    update_post_meta($post_id, 'titulacao', sanitize_text_field($_POST['titulacao']));
    update_post_meta($post_id, 'linkedin', esc_url($_POST['linkedin']));
    update_post_meta($post_id, 'email', sanitize_email($_POST['email']));
});
