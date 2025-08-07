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
    .container {
        max-width: 800px;
        margin: 40px auto;
        background: #fff;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .category {
        color: #d6a000;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 14px;
    }
    h1 {
        font-size: 26px;
        color: #1a3c7b;
        margin-top: 10px;
    }
    .date {
        color: #666;
        font-size: 14px;
        margin-bottom: 20px;
    }
    figure img {
        max-width: 100%;
        height: auto;
        margin: 20px 0;
    }
    figcaption {
        font-size: 12px;
        color: #555;
        text-align: right;
        margin-bottom: 20px;
    }
    p {
        margin-bottom: 15px;
        text-align: justify;
    }
    .footer {
        margin-top: 30px;
        font-size: 14px;
        color: #444;
    }
    .footer strong {
        display: inline-block;
        width: 60px;
    }
</style>

<div class="container">
    <p class="category"><?php echo get_the_category_list(', '); ?></p>
    <h1><?php the_title(); ?></h1>
    <p class="date"><?php echo get_the_date(); ?></p>

    <?php if (has_post_thumbnail()) : ?>
        <figure>
            <?php the_post_thumbnail('large'); ?>
            <figcaption><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></figcaption>
        </figure>
    <?php endif; ?>

    <?php the_content(); ?>

    <div class="footer">
        <p><strong>Fonte:</strong> PBS Advogados</p>
        <?php if ($rhc = get_post_meta(get_the_ID(), 'rhc', true)) : ?>
            <p><strong>RHC:</strong> <?php echo esc_html($rhc); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
