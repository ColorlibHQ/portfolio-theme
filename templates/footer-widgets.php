<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Portfolio
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$lets_talk_url = '';
	$footer_big_text = sprintf( __( 'Do you have any Project? %s Let’s Talk %s', 'portfolio' ), '<a href="' . esc_url( $lets_talk_url ) . '">', '</a>' );
	$footer_text = 'Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.';
	$footer_big_text = ! empty( portfolio_opt( 'portfolio_footer_big_text' ) ) ? portfolio_opt( 'portfolio_footer_big_text' ) : $footer_big_text;
	$footer_text = portfolio_opt( 'portfolio_footer_text' ) == '' ? $footer_text : portfolio_opt( 'portfolio_footer_text' );
	
	?>
	<div class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-md-6 col-lg-4">
					<div class="footer_widget">
						<div class="logo_footer">
							<?php echo portfolio_theme_logo();?>
						</div>
					</div>
				</div>
				<?php
					if( is_active_sidebar( 'footer-2' ) ){
						dynamic_sidebar( 'footer-2' );
					}
					if( is_active_sidebar( 'footer-3' ) ){
						dynamic_sidebar( 'footer-3' );
					}
					if( is_active_sidebar( 'footer-4' ) ){
						dynamic_sidebar( 'footer-4' );
					}
				?>
			</div>
		</div>
	</div>