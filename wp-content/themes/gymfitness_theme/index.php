<!-- TEMA INICIAL WORDPRESS -->
<!-- WORDPRESS HEADER -->
<?php
get_header()
?>
<!-- WORDPRESS WHILE LOOP -->
<main>
    <?php
    while (have_posts()):
        the_post();

        the_title();
        the_content();
    endwhile;
    ?>
</main>
<?php
get_footer();
?>