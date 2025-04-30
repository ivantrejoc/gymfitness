<!-- TEMPLATE PARA ENTRADAS BLOG POR AUTOR -->
<!-- WORDPRESS HEADER -->
<?php
get_header()
?>
<!-- WORDPRESS WHILE LOOP -->
<main class="section container">
    <?php $data = get_queried_object();
    $author_id = $data->ID;
    $author = $data->display_name;

    $author_desc = get_the_author_meta("description", $author_id);
    ?>

    <h2 class="text-center primary-text">Autor: <?php echo $author ?></h2>
    <?php if ($author_desc) {
    ?>
        <p class="text-center"><?php echo $author_desc ?></p>
    <?php }
    ?>
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