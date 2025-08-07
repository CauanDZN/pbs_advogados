<?php
add_action('add_meta_boxes', function () {
    add_meta_box('dados_atuacao', 'Informações Complementares', 'render_campos_atuacao', 'area_atuacao', 'normal', 'default');
});

function render_campos_atuacao($post) {
    $descricao_curta = get_post_meta($post->ID, 'descricao_curta', true);

    wp_nonce_field('salvar_dados_atuacao', 'atuacao_nonce');
    ?>
    <p><label>Descrição Curta:<br>
        <textarea name="descricao_curta" rows="4" class="widefat"><?php echo esc_textarea($descricao_curta); ?></textarea>
    </label></p>
    <?php
}

add_action('save_post', function ($post_id) {
    if (!isset($_POST['atuacao_nonce']) || !wp_verify_nonce($_POST['atuacao_nonce'], 'salvar_dados_atuacao')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    update_post_meta($post_id, 'descricao_curta', sanitize_textarea_field($_POST['descricao_curta']));
});
