<?php

// INCLUDES
require get_template_directory() . "/includes/widgets.php";
require get_template_directory() . "/includes/queries.php";

function gymfitness_setup()
{
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
};
add_action("after_setup_theme", "gymfitness_setup");

function gymfitness_menus()
{
    register_nav_menus(
        array(
            "main-menu" => __("Main Menu", "gymfitness"),
            "social-media-menu" => __("Social Media Menu", "gymfitness")
        )
    );
};

function gymfitness_scripts_styles()
{
    wp_enqueue_style("normalize", "https://necolas.github.io/normalize.css/8.0.1/normalize.css", array(), "8.0.1");

    wp_enqueue_style("style", get_stylesheet_uri(),  array("normalize"), "1.0.0");

    wp_enqueue_script("jquery");

    wp_enqueue_script("script", get_template_directory_uri() . "/js/scripts.js", array(), "1.0.0", true);


    if (is_front_page()) {
        wp_enqueue_style("swiper-css", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css", array(), "11.2.6");
        wp_enqueue_script("animejs", "https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js", array(), "2.0.2", true);
        wp_enqueue_script("swiper-js", "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js", array(), "11.2.6", true);
    }
    if (is_page("galeria")) {
        wp_enqueue_style("lightbox-css", get_template_directory_uri() . "/css/lightbox.min.css", array(), "2.11.4");
        wp_enqueue_script("lightbox-js", get_template_directory_uri() . "/js/lightbox.min.js", array(), "2.11.4", true);
    }
}

add_action("init", "gymfitness_menus");
add_action("wp_enqueue_scripts", "gymfitness_scripts_styles");

// WIDGETS DEFINITION
function gymfitness_widgets()
{
    register_sidebar(
        array(
            "name" => "Sidebar 1",
            "id" => "sidebar_1",
            "before_widget" => "<div class='widget'>",
            "after_widget" => "</div>",
            "before_title" => "<h3 class='text-center primary-text'>",
            "after_title" => "</h3>"
        )
    );
}

add_action("widgets_init", "gymfitness_widgets");

function gymfitness_get_hero_image()
{
    $page_id = get_option("page_on_front");

    $image_id = get_field("hero_image", $page_id)["id"];
    $image_url = wp_get_attachment_image_src($image_id, "full")[0];

    wp_register_style("custom-css", false);
    wp_enqueue_style("custom-css");

    $image_css = "
body.home .header{
background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url($image_url);
}
";

    wp_add_inline_style("custom-css", $image_css);
}

add_action("init", "gymfitness_get_hero_image");

// SHORTCODES

function gymfitness_contact_shortcode()
{
?>
    <div class="map">
        <?php
        if (is_page("contacto")) {
            $page = get_page_by_path('contacto');
            $page_id = $page ? $page->ID : null;
            $ubicacion = get_field('ubicacion', $page_id);
            if ($ubicacion) {
                echo $ubicacion;
            }
        }
        ?>
    </div>
    <h2 class="text-center primary-text">Formulario de Contacto</h2>
<?php
    echo do_shortcode('[contact-form-7 id="d3da63d" title="Formulario de contacto 1"]');
}

add_shortcode("gymfitness_contact_section", "gymfitness_contact_shortcode");
