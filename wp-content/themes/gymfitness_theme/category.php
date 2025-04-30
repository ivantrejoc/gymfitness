<!-- TEMPLATE PARA ENTRADAS DE BLOG POR CATEGORÍA -->
<!-- WORDPRESS HEADER -->
<?php
get_header()
?>
<!-- WORDPRESS WHILE LOOP -->
<main class="section container">
    <?php $data = get_queried_object();
    $category = $data->name; ?>
    <h2 class="text-center primary-text">Categoría: <?php echo $category ?></h2>
    <ul class="grid-list">
        <?php
        while (have_posts()):
            the_post();
            get_template_part("/template-parts/blog");
        endwhile;
        ?>
    </ul>
</main>
<?php
get_footer();
?>