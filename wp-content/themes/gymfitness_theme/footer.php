<footer class="footer container">
    <hr>
    <a href="https://api.whatsapp.com/send?phone=34665123433&text=Hello%21%20." class="floating-whatsapp" target="_blank">
        <img src="<?php echo get_template_directory_uri() ?>/img/whatsapp-icon.svg" alt="whatsapp-icon">
    </a>
    <div class="footer-content">
        <!-- WORDPRESS DYNAMIC NAVIGATION -->
        <?php
        $args = array(
            "theme-location" => "main.menu",
            "container" => "nav",
            "container_class" => "main-menu"
        );

        wp_nav_menu($args);
        ?>
        <div class="social-container">
            <a href="" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/img/brand-facebook.svg" alt="facebook-icon">
            </a>
            <a href="" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/img/brand-instagram.svg" alt="facebook-icon">
            </a>
            <a href="" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/img/brand-x.svg" alt="facebook-icon">
            </a>
        </div>
    </div>
    <div class="credits-container">
        <p>Todos los derechos reservados.
            <?php echo get_bloginfo("name") . " " .
                date("Y"); ?>.</p>
        <p>
            Desarrollado por <a href="https://ivantrejo.vercel.app/">Iván Trejo</a>, Sevilla - España.
        </p>
    </div>
</footer>
<?php wp_footer();
?>
</body>

</html>