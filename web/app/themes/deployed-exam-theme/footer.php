<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
</main>
<footer class="footer">
    <div class="container text-center">
        <?php 
            $args = array(
                'menu_class'    => 'nav justify-content-center',
                'container'     =>  '',
                'theme_location'=> 'footer',
                'depth'         => 1,
                'fallback_cb'   => false,
                'add_li_class'  => 'nav-item',
                'item_spacing'  => 'preserve'
                );
            wp_nav_menu($args);
        ?>
    </div>
</footer>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/assets/js/jquery-3.5.1.slim.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/assets/js/popper.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/assets/js/bootstrap.bundle.min.js'; ?>"></script>
</body>
</html>