<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );
$footer_nav_menu = wp_nav_menu( [
	'theme_location' => 'menu-2',
	'fallback_cb' => false,
	'echo' => false,
] );
?>
<footer id="site-footer">
	<section>
		<div class="inner-section">
			<div class="side">
				<div class="constraint-left">
					<div class="tab">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png"/>
					</div>
					<p class="content">
						<?php
							$pageFooterLeftsideContent = get_field('page_footer_leftside_content');
						?>
						<?php echo $pageFooterLeftsideContent; ?>
					</p>
				</div>
			</div>
			<div class="side bg-blue">
				<div class="constraint-right grid gap-y-12 grid-cols-3 pt-20 pb-16 3xl:pl-12">
					<ul class="links">
						<li><a href="#">About us</a></li>
						<li><a href="#">Social responsibility</a></li>
						<li><a href="#">Careers</a></li>
						<li><a href="#">News</a></li>
						<li><a href="#">Grants</a></li>
						<li><a href="#">Reports</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
					<ul class="links">
						<li><a href="#">Privacy policy</a></li>
						<li class="flex-grow"><a href="#">Terms & Conditions</a></li>
						<li>
							SOCIALS
							<div class="socials w-full inline-flex flex-wrap gap-x-2 lg:gap-x-7 gap-y-2 pt-4">
								<a href="#" class="facebook">Facebook</a>
								<a href="#" class="twitter">Twitter</a>
								<a href="#" class="linkedin">Linked in</a>
							</div>
						</li>
					</ul>
					<div class="back-to-top">
						<a href="#" class="scroll-to-top">							
							<span>Back to top</span>
						</a>
					</div>
					<div class="copyright justify-self-center col-start-1 row-start-2 col-span-3 row-span-1 lg:justify-self-start lg:col-start-auto lg:row-start-auto lg:col-span-1 lg:row-span-1">
						&copy; <?php echo date('Y'); ?> - TAB New Zealand
					</div>
					<div class="created-by-the-web-guys justify-self-center col-start-1 row-start-2 col-span-3 row-span-1 lg:justify-self-start lg:col-start-auto lg:row-start-auto lg:col-span-1 lg:row-span-1">
						<a href="https://thewebguys.co.nz/" target="_blank">Created by The Web Guys</a> 
					</div>
				</div>
			</div>
		</div>
	</section>
</footer>