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
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>	