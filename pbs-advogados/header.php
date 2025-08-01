<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Exo', sans-serif;
            margin: 0;
        }
        header.site-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0;
            background-color: #EAEFF2;
            border-bottom: 1px solid #ddd;
            height: 125px;
        }
        .header-left {
			display: flex;
			align-items: center;
			height: 125px;
		}
		.vertical-line {
			width: 8px;
			height: 100%;
			background-color: #D4B878;
		}
        .header-logo {
            padding: 0 20px;
        }
        .header-logo img {
			max-width: 184.16px;
			height: auto;
			object-fit: contain;
		}
        .main-navigation {
            margin-left: 30px;
        }
        .main-navigation ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }
        .main-navigation a {
            text-decoration: none;
            color: #000;
            font-weight: 600;
        }
        .gtranslate-wrapper {
            margin-right: 30px;
        }

        @media screen and (max-width: 768px) {
            header.site-header {
                flex-direction: column;
                height: auto;
                padding: 10px 0;
            }
            .main-navigation ul {
                flex-direction: column;
                align-items: center;
            }
            .gtranslate-wrapper {
                margin: 10px 0 0;
            }
        }
    </style>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="header-left">
            <div class="header-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="http://pbsadvogados.test/wp-content/uploads/2025/08/Camada-1.png" alt="PBS Advogados">
                </a>
            </div>
            <div class="vertical-line"></div>

            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu'
                ]);
                ?>
            </nav>
        </div>

        <div class="gtranslate-wrapper">
            <?php echo do_shortcode('[gtranslate]'); ?>
        </div>
    </header>
