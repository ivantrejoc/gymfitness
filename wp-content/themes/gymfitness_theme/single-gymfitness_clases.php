<!-- TEMPLATE PARA CADA POST DE CLASE -->
<!-- WORDPRESS HEADER -->
<?php
get_header()
?>
<main class="container section sidebar">
    <section class="main-content">
        <!-- WORDPRESS WHILE LOOP -->
        <?php
        get_template_part("template-parts/class");
        ?>
    </section>
    <?php
    get_sidebar()
    ?>
</main>
<?php
get_footer();
?>