<?php 
	// Avoid directly access
	if ( ! defined( 'ABSPATH' ) ) {
		exit( 'Direct access denied.' );
	}
?>
<div class="banner banner-bg bg-light">
	<div class="container">
		<div class="banner-title text-dark text-center">
			<h1><?php bloginfo('name'); ?></h1>
		</div>
		<div class="saimon-breadcrum">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>">Home</a></li>
				<li class="breadcrumb-item"><a href="#">Library</a></li>
				<li class="breadcrumb-item active" aria-current="page">Data</li>
			</ol>
		</div>
	</div>
</div>