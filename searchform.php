<?php 
	// Avoid directly access
	if ( ! defined( 'ABSPATH' ) ) {
		exit( 'Direct access denied.' );
	}
?>
<div class="search">
	<form action="<?php echo esc_url(home_url('/')); ?>" class="form-inline my-2 my-lg-0" method="GET">
		<input class="form-control mr-sm-2" name="s" type="text" placeholder="Search">
		<button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
	</form>
</div>