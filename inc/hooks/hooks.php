<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'portfolio_preloader', 'portfolio_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'portfolio_header', 'portfolio_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'portfolio_footer', 'portfolio_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'portfolio_wrp_start', 'portfolio_wrp_start_cb', 10 );
	add_action( 'portfolio_wrp_end', 'portfolio_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'portfolio_blog_col_start', 'portfolio_blog_col_start_cb', 10 );
	add_action( 'portfolio_blog_col_end', 'portfolio_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'portfolio_blog_posts_thumb', 'portfolio_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'portfolio_blog_details_wrap_start', 'portfolio_blog_details_wrap_start_cb', 10 );
	add_action( 'portfolio_blog_details_wrap_end', 'portfolio_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'portfolio_blog_posts_title', 'portfolio_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'portfolio_blog_posts_meta', 'portfolio_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'portfolio_blog_posts_excerpt', 'portfolio_blog_posts_excerpt_cb', 10 );
	// add_action( 'portfolio_blog_posts_excerpt', 'portfolio_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'portfolio_blog_posts_info_link', 'portfolio_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'portfolio_blog_posts_content', 'portfolio_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'portfolio_blog_posts_share', 'portfolio_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'portfolio_blog_sidebar', 'portfolio_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'portfolio_blog_single_meta', 'portfolio_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'portfolio_page_content', 'portfolio_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'portfolio_fof', 'portfolio_fof_cb', 10 );

	

?>