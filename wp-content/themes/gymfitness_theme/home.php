<!-- home.php jerarquiza entradas de blog -->
<!-- WORDPRESS HEADER -->
<?php
get_header()
?>
<!-- WORDPRESS WHILE LOOP -->
<main class="section container">
    <ul class="grid-list">
        <?php
        while (have_posts()):
            the_post();
            get_template_part("/template-parts/blog");
        endwhile;
        ?>
    </ul>
    <?php
    the_posts_pagination();
    ?>
</main>
<?php
get_footer();
?>