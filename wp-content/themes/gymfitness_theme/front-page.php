<!-- TEMA JEARAQUIZA HOME PAGE -->
<!-- WORDPRESS HEADER -->
<?php
get_header()
?>

<section class="welcome section container text-center">
    <h2 class="primary-text">
        <?php the_field("welcome_heading"); ?>
    </h2>
    <p><?php the_field("welcome_text") ?></p>
</section>
<section class="areas">
    <div class="area">
        <?php
        $area_1 = get_field("area_1");
        $area_1_image = esc_attr($area_1["image"]["sizes"]["medium_large"]);
        $area_1_text = esc_html($area_1["text"]);
        ?>
        <img src="<?php echo $area_1_image ?>" alt="Area 1">
        <p><?php echo $area_1_text; ?></p>
    </div>
    <div class="area">
        <?php
        $area_2 = get_field("area_2");
        $area_2_image = esc_attr__($area_2["image"]["sizes"]["medium_large"]);
        $area_2_text = esc_html($area_2["text"]);
        ?>
        <img src="<?php echo $area_2_image ?>" alt="Area 1">
        <p><?php echo $area_2_text; ?></p>
    </div>
    <div class="area">
        <?php
        $area_3 = get_field("area_3");
        $area_3_image = esc_attr__($area_3["image"]["sizes"]["medium_large"]);
        $area_3_text = esc_html($area_3["text"]);
        ?>
        <img src="<?php echo $area_3_image ?>" alt="Area 1">
        <p><?php echo $area_3_text; ?></p>
    </div>
    <div class="area">
        <?php
        $area_4 = get_field("area_4");
        $area_4_image = esc_attr__($area_4["image"]["sizes"]["medium_large"]);
        $area_4_text = esc_html($area_4["text"]);
        ?>
        <img src="<?php echo $area_4_image ?>" alt="Area 1">
        <p><?php echo $area_4_text; ?></p>
    </div>
</section>
<main class="container section">
    <h2 class="text-center primary-text">Nuestras Clases</h2>
    <?php
    $posts = 4;
    gymfitness_classes_list($posts);
    ?>
    <div class="button-container">
        <a class="primary-button" href="<?php echo get_permalink() . "/clases" ?>">Ver Todas las Clases</a>
    </div>
</main>
<section class="container section">
    <h2 class="text-center primary-text">Nuestros Instructores</h2>
    <p class="text-center">Instructores profesionales que te ayudarán a lograr tus objetivos.</p>
    <?php gymfitness_instructors_list(); ?>
</section>
<section class="testimonials">
    <h2 class="text-center white-text">Testimonios</h2>
    <div class="testimonials-container swiper">
        <?php gymfitness_testimonials_list(); ?>
    </div>
</section>
<section class="container section">
    <h2 class="text-center primary-text">Nuestro Blog</h2>
    <p class="text-center">Aprende tips de nuestros Instructores expertos.</p>
    <ul class="grid-list">
        <?php
        $args = array(
            "post_type" => "post",
            "posts_per_page" => 4,
        );

        $posts = new WP_Query($args);
        while ($posts->have_posts()) {
            $posts->the_post();
            get_template_part("template-parts/blog");
        }

        wp_reset_postdata();
        ?>
    </ul>
    <div class="button-container">
        <a class="primary-button" href="<?php echo get_permalink() . "/blog" ?>">Ver Todos Los Posts</a>
    </div>
</section>
<?php
get_footer();
?>