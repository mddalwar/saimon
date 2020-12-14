<?php
/**
 * This is the footer template.
 *
 * @package Saimon
 * @subpackage Templates
 */

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}
?>
	<footer>
		<div class="footer dark bg-dark">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar('footer'); ?>
					<div class="col-md-3">
						<!-- About Widget Start -->
						<div class="widget footer-widget">
							<div class="about">
								<h4 class="widget-title">About Us</h4>

								<div class="logo">
									<img src="<?php echo ASSET_URL; ?>/img/logo-light.png" alt="Logo">
								</div>
								<div class="description">
									<p>Disti nctio ad veniam volup tatem est atque vel perferendis labore perspi ciatis minus fugit nemo, provident blanditiis quos non sequi quisquam animi repudiandae.</p>
								</div>
								<div class="social-links">
									<ul class="list-unstyled list-inline">
										<li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
										<li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- About Widget End -->
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>	