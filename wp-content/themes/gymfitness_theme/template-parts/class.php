 <!-- WORDPRESS WHILE LOOP -->
 <?php
    while (have_posts()):
        the_post();

        the_title('<h1 class="text-center primary-text">', '</h1>');

        if (has_post_thumbnail()) {
            the_post_thumbnail("full", array(
                "class" => "featured-image",
                "alt" => get_the_title(),

            ));
        }

        if (is_single()) {
            $class_days = get_field("horario_clase");
            $init_hour = get_field("hora_inicio");
            $end_hour = get_field("hora_fin");
    ?>
         <p class="class-schedule"><?php echo "{$class_days}" ?> - <?php echo "{$init_hour} a {$end_hour}." ?></p>

 <?php }
        the_content();
    endwhile;
    ?>