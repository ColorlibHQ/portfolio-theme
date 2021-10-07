<?php
/**
 * @Packge     : portfolio
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

<form action="<?php echo esc_url( site_url( '/' ) ); ?>">
	<div class="form-group">
		<div class="input-group mb-3">
			<input type="text" class="form-control" name="s" placeholder="<?php esc_attr_e( 'Search Keyword', 'portfolio' ); ?>">
			<div class="input-group-append">
				<button type="submit" class="btn" ><i class="ti-search"></i></button>
			</div>
		</div>
	</div>
	<button class="button rounded-0 primary-bg text-white w-100 boxed-btn" type="submit"><?php esc_html_e( 'Search', 'portfolio' ); ?></button>
</form>