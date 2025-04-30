<!-- TEMPLATE PARA POSTS ENTRADAS BLOG -->
<!-- WORDPRESS HEADER -->
<?php
get_header()
?>
<main class="container section">
    <!-- WORDPRESS WHILE LOOP -->
    <?php
    get_template_part("template-parts/post");
    ?>
    <div class="comments">
        <?php comment_form(); ?>
        <?php
        $comments = get_comments(array(
            "post_id" => $post->ID,
            "status" => "approve",
            "order" => "ASC",
        ));;

        if ($comments) {
        ?>
            <h3 class="text-center primary-text comments-title">Comentarios</h3>
        <?php
        }
        ?>
        <ul class="comments-list">
            <?php
            wp_list_comments(array(
                "per_page" => 10,
                "reverse_top_level" => false
            ), $comments);
            ?>
        </ul>
    </div>
</main>
<?php
get_footer();
?>