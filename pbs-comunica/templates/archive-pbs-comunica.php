<?php get_header(); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Exo', sans-serif;
        background-color: #f2f6fa;
        color: #2b3d60;
        margin: 0;
        padding: 0;
    }
    .section-title {
        color: #0a3161;
        text-align: center;
        font-size: 24px;
        margin-top: 40px;
    }
    .grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        padding: 20px;
    }
    .card {
        background: white;
        width: 300px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: scale(1.02);
    }
    .card img {
        width: 100%;
        height: auto;
    }
    .card-content {
        padding: 15px;
    }
    .card-content h3 {
        font-size: 16px;
        color: #0a3161;
        margin: 0 0 10px;
    }
    .card-content p {
        font-size: 14px;
        color: #666;
        margin: 0;
    }
    .instagram-section {
        background: #f8f9fb;
        padding: 30px 0;
        text-align: center;
    }
    .instagram-section h3 {
        color: #0a3161;
    }
</style>

<h2 class="section-title">PBS COMUNICA</h2>

<div class="grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="card">
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
                <div class="card-content">
                    <h3><?php the_title(); ?></h3>
                    <p>Categoria: <?php echo get_the_category_list(', '); ?></p>
                </div>
            </a>
        </div>
    <?php endwhile; endif; ?>
</div>

<div class="instagram-section">
    <h3>@PBSADVOGADOS</h3>
    <p>Conteúdo institucional, informativo e educativo também no Instagram.</p>
</div>

<?php get_footer(); ?>
