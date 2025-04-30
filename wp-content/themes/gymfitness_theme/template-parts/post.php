<!-- WORDPRESS WHILE LOOP -->
<?php
while (have_posts()):
    the_post();

    the_title('<h1 class="text-center primary-text">', '</h1>');

    if (has_post_thumbnail()) {
        the_post_thumbnail("full", array(
            "class" => "featured-image"
        ));
    }
?>
    <div class="meta-info">
        <p class="meta">
            <span>Por:</span>
            <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")) ?>">
                <?php echo get_the_author_meta("display_name"); ?>
            </a>
        </p>
        <div class="category-container">
            <p class="meta">
                <span>Categoría:</span>
            </p>
            <?php the_category() ?>
        </div>
        <p class="meta">
            <span>Fecha:</span>
            <?php echo get_the_date() ?>
        </p>
    </div>
<?php
    the_content();
endwhile;
?>