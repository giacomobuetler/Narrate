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


<footer>
            <div class="container footer-bottom">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <a class="footer-logo d-block" href="https://codely.ch">Codely</a>
                        <p class="footer-text mb-0">Hochwertige Webs
							High-quality digital resources which make your design workflow faster and easier</p>
                    </div>
                    <div class="col-lg-3 col-md-4">
                                <strong class="footer-title d-block">Codely GmbH</strong>
							Farbgutstrasse 3<br>
							CH-9008 St.Gallen<br>
							Schweiz<br>
							<br>
							<a href="tel:+41 71 571 37 22">+41 71 571 37 22</a><br>
							<a href="mailto:info@codely.ch">info@codely.ch<br></a>
                            </div>
					<div class="col-lg-3 col-md-4">
                                <strong class="footer-title d-block">Leistungen</strong>
                                <ul class="footer-list">
                                    <li><a target="_blank" href="https://stubborn.rocks/">Stubborn Illustrations</a></li>
                                    <li><a target="_blank" href="https://craftwork.design/silky-illustrations/">Silky Illustrations</a></li>
                                    <li><a target="_blank" href="https://craftwork.design/oslo-illustrations/">OSLO Illustrations</a></li>
                                    <li><a target="_blank" href="https://craftwork.design/no-comments-illustrations/">No Comments</a></li>
                                    <li><a target="_blank" href="https://struct.rocks/">Struct Illustrations</a></li>
                                    <li><a target="_blank" href="https://craftwork.design/follow-me-illustrations/">Follow Me Illustrations</a></li>
                                </ul>
                    </div>
					<div class="col-lg-3 col-md-4">
                                <strong class="footer-title d-block">Follow us</strong>
                                <ul class="footer-list">
                                    <li><a target="_blank" href="https://www.producthunt.com/@shepovalovdenis/made">Producthunt</a></li>
                                    <li><a target="_blank" href="https://dribbble.com/Craftwork">Dribbble</a></li>
                                    <li><a target="_blank" href="https://www.behance.net/getcraftwork">Behance</a></li>
                                    <li><a target="_blank" href="https://www.instagram.com/getcraftwork/">Instagram</a></li>
                                </ul>
					</div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p class="footer-text copyright mb-0">Copyright © 2018-2021 Codely</p>
					</div>
					<div class="footer-text col-lg-6">
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

<button class="call-to-action-button">
	<div class="call-to-action-text">
		Kontaktieren Sie uns
	</div>
</button>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

