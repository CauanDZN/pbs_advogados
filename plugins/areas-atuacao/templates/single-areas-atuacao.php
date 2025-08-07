<?php get_header(); ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Exo:wght@400;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Exo', sans-serif;
        background-color: #fff;
    }

    .profissionais-container {
        display: flex;
        min-height: 100vh;
    }

    .profissionais-sidebar {
        width: 25%;
        background-color: #1B5083;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .profissionais-sidebar h2 {
        font-size: 22px;
        margin: 30px 20px 10px;
    }

    .profissionais-sidebar ul {
        list-style: none;
        padding: 0 20px;
        margin-top: 20px;
    }

    .profissionais-sidebar ul li {
        margin-bottom: 12px;
    }

    .profissionais-sidebar ul li a {
        text-decoration: none;
        color: #fff;
        font-weight: 500;
    }

    .profissionais-sidebar ul li a:hover {
        text-decoration: underline;
    }

    .barra-dourada {
        height: 10px;
        background-color: #D4B878;
        width: 100%;
    }

    .profissional-content {
        width: 75%;
        padding: 40px;
    }

    .profissional-box {
        display: flex;
        gap: 40px;
        align-items: flex-start;
    }

    .profissional-texto {
        flex: 1;
    }

    .profissional-texto h1 {
        font-size: 30px;
        margin-bottom: 15px;
        color: #1B5083;
    }

    .profissional-texto p {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 10px;
        color: #333;
    }

    .profissional-foto img {
        width: 306px;
        height: 372px;
        object-fit: cover;
        border-radius: 4px;
    }

    @media screen and (max-width: 768px) {
        .profissionais-container {
            flex-direction: column;
        }

        .profissionais-sidebar,
        .profissional-content {
            width: 100%;
        }

        .profissional-box {
            flex-direction: column;
            align-items: center;
        }

        .profissional-foto img {
            width: 100%;
            height: auto;
        }

        .profissional-content {
            padding: 20px;
        }
    }
</style>

<div class="profissionais-container">
    <!-- Sidebar -->
    <aside class="profissionais-sidebar">
        <div>
            <h2>Profissionais</h2>
            <ul>
                <li><a href="<?php echo site_url('/cargo/socio'); ?>">Sócios</a></li>
                <li><a href="<?php echo site_url('/cargo/advogado-associado'); ?>">Advogados Associados</a></li>
                <li><a href="<?php echo site_url('/cargo/estagiario'); ?>">Estagiários</a></li>
                <li><a href="<?php echo site_url('/cargo/administrativo'); ?>">Administrativo</a></li>
            </ul>
        </div>
        <div class="barra-dourada"></div>
    </aside>

    <!-- Conteúdo principal -->
    <div class="profissional-content">
        <div class="profissional-box">
            <div class="profissional-texto">
                <h1><?php the_title(); ?></h1>

                <p><strong>Titulação:</strong>
                    <?php echo esc_html(get_post_meta(get_the_ID(), 'titulacao', true)); ?>
                </p>

                <div><?php the_content(); ?></div>

                <?php if ($email = get_post_meta(get_the_ID(), 'email', true)) : ?>
                    <p><strong>Email:</strong>
                        <a href="mailto:<?php echo esc_attr($email); ?>">
                            <?php echo esc_html($email); ?>
                        </a>
                    </p>
                <?php endif; ?>

                <?php if ($linkedin = get_post_meta(get_the_ID(), 'linkedin', true)) : ?>
                    <p><strong>LinkedIn:</strong>
                        <a href="<?php echo esc_url($linkedin); ?>" target="_blank">Perfil</a>
                    </p>
                <?php endif; ?>

                <p><strong>Cargo:</strong>
                    <?php echo get_the_term_list(get_the_ID(), 'cargo', '', ', ', ''); ?>
                </p>
            </div>

            <div class="profissional-foto">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                } ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
