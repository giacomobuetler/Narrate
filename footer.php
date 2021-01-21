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

<footer class="footer upper-footer">
	<div class="container">
		<div class="row">
			<div class="footer-section n-footer">
				<div class="col-12 col-sm-4">
						   
					<span class="dd-footer-title eyebrow-title">SOCIAL</span>
                        <ul class="social-wrapper footer-links">
                            <li>
                            	<a rel="nofollow" href="https://www.linkedin.com/company/" target="_blank" title="">
                                    <span>LinkedIn</span>
                                </a>
                            </li>                                          
						</ul>	
                </div>
			</div>
		</div>
	</div>
</footer>
<footer class="footer lower-footer">
	<div class="container">
		<div class="row">
				<div class="col">
				© Narrate - Digitalagentur
				</div>
				<div class="col">
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'footer-menu',
								'container_class' => 'd-md-block',
								'container_id'    => '',
								'menu_class'      => 'n-footer',
								'fallback_cb'     => '',
								'menu_id'         => 'footer-menu',
								'depth'           => 1,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						);
						?>
					</div>
		</div>
	</div>
</footer>




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

