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

	$portfolio_reservation_title     = !empty( portfolio_opt( 'portfolio_reservation_title' ) ) ? portfolio_opt( 'portfolio_reservation_title' ) : '';
	$portfolio_reservation_sub_title = !empty( portfolio_opt( 'portfolio_reservation_sub_title' ) ) ? portfolio_opt( 'portfolio_reservation_sub_title' ) : '';
	$portfolio_reservation_btn_text  = !empty( portfolio_opt( 'portfolio_reservation_btn_text' ) ) ? portfolio_opt( 'portfolio_reservation_btn_text' ) : '';
	$portfolio_reservation_btn_url	  = !empty( portfolio_opt( 'portfolio_reservation_btn_url' ) ) ? portfolio_opt( 'portfolio_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $portfolio_reservation_title )?></h3>
			<p><?php echo esc_html( $portfolio_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $portfolio_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $portfolio_reservation_btn_text )?></a>
		</div>
	</div>