<!-- TEMA INICIAL PÁGINAS -->
<!-- WORDPRESS HEADER -->
<?php
get_header()
?>
<main class="container section">
    <!-- WORDPRESS WHILE LOOP -->
    <?php
    get_template_part("template-parts/page-content");
    ?>
</main>
<?php
get_footer();
?>
