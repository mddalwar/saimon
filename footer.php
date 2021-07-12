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
	<footer class="bg-dark text-center text-white">
		<!-- Grid container -->
		<div class="container p-4 pb-0">
			<!-- Section: Form -->
			<div class="subscribe-form">
				<form action="">
					<!--Grid row-->
					<div class="row d-flex justify-content-center">
						<!--Grid column-->
						<div class="col-auto">
							<p class="pt-2"><strong>Sign up for newsletter</strong></p>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-md-5 col-12">
							<!-- Email input -->
							<div class="form-outline form-white mb-4">
								<input type="email" id="form5Example2" class="form-control" />
								<label class="form-label" for="form5Example2">Email address</label>
							</div>
						</div>
						<!--Grid column-->

						<!--Grid column-->
						<div class="col-auto">
							<!-- Submit button -->
							<button type="submit" class="btn btn-outline-light mb-4">Subscribe</button>
						</div>
						<!--Grid column-->
					</div>
					<!--Grid row-->
				</form>
			</div>
			<!-- Section: Form -->
		</div>
		<!-- Grid container -->

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);"> © 2020 Copyright: <a class="text-white" href="https://mdbootstrap.com/">Md Dalwar</a>
		</div>
		<!-- Copyright -->
	</footer>

	<?php if( find_option( 'social-share-init' ) == 1 ) : ?>
	<div class="sss-wrapper <?php if( find_option( 'social-share-position' ) ) {echo 'left'; }else{ echo 'right' ; }?>">
		<ul>
			<li>
				<a class="btn btn-primary" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>
			</li>
			<li>
				<a class="btn btn-primary" style="background-color: #55acee;" href="#!" role="button"><i class="fab fa-twitter"></i></a></li>
			<li>
				<a class="btn btn-primary" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>
			</li>
		</ul>
	</div>
	<?php endif; ?>
	
	<?php wp_footer(); ?>
</body>
</html>	