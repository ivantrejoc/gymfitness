<!-- TEMA PARA PÁGINA CLASES -->
<!-- WORDPRESS HEADER -->
<?php
/*
* Template Name: Classes List
*/
get_header()
?>
<main class="container section ">
    <?php get_template_part("template-parts/page-content");
    ?>
     <?php
        gymfitness_classes_list();
    ?>
</main>
<?php
get_footer();
?>