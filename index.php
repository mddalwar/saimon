<?php
/**
 * The theme's index.php file.
 *
 * @package Saimon
 * @subpackage Templates
 */

// Avoid directly access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct access denied.' );
}
?>
<?php get_header(); ?>
	<div class="banner banner-bg bg-light">
		<div class="container">
			<div class="banner-title text-dark text-center">
				<h1><?php bloginfo('name'); ?></h1>
			</div>
			<div class="saimon-breadcrum">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Library</a></li>
					<li class="breadcrumb-item active" aria-current="page">Data</li>
				</ol>
			</div>
		</div>
	</div>

	<section id="content" class="pt-5 pb-5">
		<?php get_template_part( 'templates/blog/layout' ); ?>
	</section>
<?php get_footer(); ?>
