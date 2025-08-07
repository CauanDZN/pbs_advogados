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

    .lista-profissionais {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 40px;
    }

    .card-profissional {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .card-profissional img {
        width: 100%;
        max-width: 300px;
        height: 372px;
        object-fit: cover;
        border-radius: 4px;
        margin-bottom: 15px;
    }

    .card-profissional h2 {
        font-size: 22px;
        color: #1B5083;
        margin-bottom: 5px;
    }

    .card-profissional p {
        font-size: 16px;
        color: #333;
        margin: 2px 0;
    }

    .card-profissional a {
        text-decoration: none;
        color: inherit;
    }

    .card-profissional a:hover h2 {
        text-decoration: underline;
    }

    @media screen and (max-width: 768px) {
        .profissionais-container {
            flex-direction: column;
        }

        .profissionais-sidebar,
        .profissional-content {
            width: 100%;
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
        <h1 style="color: #1B5083; margin-bottom: 30px;">Todos os Profissionais</h1>
        <div class="lista-profissionais">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="card-profissional">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full');
                        } ?>
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p><strong><?php echo esc_html(get_post_meta(get_the_ID(), 'titulacao', true)); ?></strong></p>
                    <p><?php echo get_the_term_list(get_the_ID(), 'cargo', '', ', ', ''); ?></p>
                </div>
            <?php endwhile; else : ?>
                <p>Nenhum profissional encontrado.</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
