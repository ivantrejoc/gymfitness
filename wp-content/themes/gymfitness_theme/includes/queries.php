<?php
function gymfitness_classes_list($posts = -1)
{
?>
    <ul class="grid-list">
        <?php
        $args = array(
            "post_type" => "gymfitness_clases",
            "posts_per_page" => $posts,
        );

        $classes = new WP_Query($args);

        while ($classes->have_posts()) {
            $classes->the_post();
        ?>
            <li class="card">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail();
                    ?>
                    <div class="content">

                        <h3>
                            <?php the_title(); ?>
                        </h3>
                        <?php $class_days = get_field("horario_clase");
                        $init_hour = get_field("hora_inicio");
                        $end_hour = get_field("hora_fin");
                        ?>
                        <p><?php echo "{$class_days}" ?> - <?php echo "{$init_hour} a {$end_hour}." ?></p>
                    </div>
                </a>
            </li>
        <?php
        }
        wp_reset_postdata();
        ?>
    </ul>

<?php
}
?>

<?php
function gymfitness_instructors_list()
{
?>
    <ul class="grid-list instructors">
        <?php
        $args = array(
            "post_type" => "instructores",
        );

        $instructors = new WP_Query($args);
        while ($instructors->have_posts()) {
            $instructors->the_post();
        ?>
            <li class="instructor">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail("large");
                    ?>
                    <div class="content text-center">
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                        <div class="specialties">
                            <?php $specialties = get_field("specialism");
                            foreach ($specialties as $specialty) {
                            ?>
                                <span class="tag"><?php echo esc_html($specialty) ?></span>
                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </a>
            </li>
        <?php
        }
        wp_reset_postdata();
        ?>
    </ul>
<?php
}
?>

<?php
function gymfitness_testimonials_list()
{
?>
    <ul class="testimonials-list swiper-wrapper">
        <?php
        $args = array(
            "post_type" => "testimoniales",
        );

        $testimonials = new WP_Query($args);
        while ($testimonials->have_posts()) {
            $testimonials->the_post();
        ?>
            <li class="testimonial text-center swiper-slide">
                <blockquote>
                    <?php the_content(); ?>
                </blockquote>
                <footer class="testimonial-footer">
                    <?php the_post_thumbnail(); ?>
                    <p><?php the_title(); ?></p>
                </footer>
            </li>
        <?php
        }
        wp_reset_postdata();
        ?>
    </ul>
<?php
}
?>