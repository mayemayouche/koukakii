<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
	<footer id="colophon" class="site-footer">
    <div class="footer-content">
        <div class="nomination oscar-template">
            <?php get_template_part('oscar'); ?>
        </div>
        <div class="footer-links">
            <ul>
                <li><a href="#">Mentions Légales</a></li>
                <li><a href="#">STUDIO KOUKAKI</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
