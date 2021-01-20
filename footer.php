<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper">
<footer class="footer">
	<div class="container">
		<div class="row">
		<div class="footer-section n-footer">

		<div class="col-12 col-sm-4">
						   
		<span class="dd-footer-title eyebrow-title">SOCIAL</span>

                            <ul class="social-wrapper footer-links">
                                                                    <li>
                                                                                    <a rel="nofollow" href="https://www.linkedin.com/company/" target="_blank" title="">
                                                <span>
                                                    LinkedIn
                                                </span>
                                            </a>
                                                                            </li>
                                                                    <li>
                                                                                    <a rel="nofollow" href="https://www.facebook.com//" target="_blank" title="">
                                                <span>
                                                    Facebook
                                                </span>
                                            </a>
                                                                            </li>
                                                                    <li>
                                                                                    <a rel="nofollow" href="https://www.instagram.com//" target="_blank" title="">
                                                <span>
                                                    Instagram
                                                </span>
                                            </a>
                                                                            </li>
                                                                    <li>
                                                                                    <a rel="nofollow" href="https://github.com/" target="_blank" title="">
                                                <span>
                                                    Github
                                                </span>
                                            </a>
                                                                            </li>
                                                            </ul>

                        </div>
						





		
			</div>
		<div class="footer-section n-footer-sec">
			</div>
</div>
</div>
</footer>
</div>




<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<button class="call-to-action-button">
	<div class="call-to-action-text">
		Kontaktieren Sie uns
		</div>
		</button>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

