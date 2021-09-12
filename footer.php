<?php 
/**
 * @Packge     : Portfolio
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( 'Direct script access denied.' );
    }

        /**
         * Footer Area
         *
         * @Footer
         * @Back To Top Button
         *
         * @Hook portfolio_footer
         *
         * @Hooked  portfolio_footer_area 
         *
         */

		do_action( 'portfolio_footer' );

	wp_footer(); 
 ?>
</body>
</html>