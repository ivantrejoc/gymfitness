<!-- TEMA PARA CONTENIDO PÁGINAS -->
<!-- WORDPRESS HEADER -->
<?php
/*
* Template Name: Centered Content (No sidebars)
*/
get_header()
?>
<main class="container section centered-content">
    <!-- WORDPRESS WHILE LOOP -->
    <?php
    get_template_part("template-parts/page-content");
    ?>
</main>
<?php
get_footer();
?>
