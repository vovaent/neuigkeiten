<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package neuigkeiten
 */
?>

<footer class="footer">
    <div class="container footer__container">
        <div class="footer__widget footer__widget--footer-1">
            <?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'footer-1' ) ) : ?>
            <?php endif; ?>
        </div>
        <!-- /.footer__widget -->


        <div class="footer__widget footer__widget--footer-2">
            <?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'footer-2' ) ) : ?>
            <?php endif; ?>
        </div>
        <!-- /.footer__widget -->
        <div class="footer__widget footer__widget--footer-3">
            <?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'footer-3' ) ) : ?>
            <?php endif; ?>
        </div>
        <!-- /.footer__widget -->
        <div class="footer__widget footer__widget--footer-4">
            <?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'footer-4' ) ) : ?>
            <?php endif; ?>
        </div>
        <!-- /.footer__widget -->
    </div>
    <!-- /.container footer__container -->
</footer>
<!-- /.footer -->

<?php wp_footer(); ?>
</main>
<!-- /.site-main -->
</body>

</html>