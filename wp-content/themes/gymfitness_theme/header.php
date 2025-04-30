<!DOCTYPE html>
<!-- LANGUAGE DE WORDPRESS -->
<html <?php language_attributes();
        ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
    <header class="header ">
        <div class="container nav-bar">
            <div class="logo">
                <a href="<?php echo site_url("/") ?>">
                    <!-- WORDPRESS DYNAMIC URI -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/gymfitness-logo.svg" alt="gym-fitness-logo">
                </a>
            </div>
            <div class="burger-menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-menu-2">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 6l16 0" />
                    <path d="M4 12l16 0" />
                    <path d="M4 18l16 0" />
                </svg>
            </div>
            <div class="menu-container">
            <!-- WORDPRESS DYNAMIC NAVIGATION -->
            <?php
            $args = array(
                "theme-location" => "main.menu",
                "container" => "nav",
                "container_class" => "main-menu"
            );

            wp_nav_menu($args);
            ?>
            </div>
        </div>
        <?php
        if (is_front_page()) {
        ?>
            <div class="tagline container text-center">
                <h1 class="ml2">
                    <?php the_field("hero_heading"); ?>
                </h1>
                <p><?php the_field("hero_text"); ?></p>
                <div class="button-container">
                    <a class="primary-button" href="<?php echo get_permalink() . "/contacto" ?>"> ¡Empieza hoy!</a>
                </div>
            </div>

        <?php
        }
        ?>
    </header>