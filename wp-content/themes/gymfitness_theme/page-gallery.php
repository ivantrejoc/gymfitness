<!-- TEMA PÁGINA GALERÍA IMAGENES -->
<?php
/*
* Template Name: Gallery
*/
get_header()
?>
<main class="container section">
    <!-- WORDPRESS WHILE LOOP -->
    <?php
    while (have_posts()):
        the_post();
        the_title('<h1 class="text-center primary-text">', '</h1>');

        $gallery = get_post_gallery(get_the_ID(), false);
        $gallery_ids = explode(",", $gallery["ids"]);
    ?>
        <ul class="images-gallery">
            <?php
            foreach ($gallery_ids as $id) {
                $full_image = wp_get_attachment_image_src($id, "full")[0];
                $large_image = wp_get_attachment_image_src($id, "large")[0];
            ?>
                <li>
                    <a href="<?php echo $full_image; ?>" data-lightbox="gallery">
                        <img src="<?php echo $large_image; ?>" alt="<?php echo get_the_title(); ?>" />
                    </a>
                </li>
            <?php
            }
            ?>
        </ul>
    <?php
    endwhile;
    ?>
</main>
<?php
get_footer();
?>