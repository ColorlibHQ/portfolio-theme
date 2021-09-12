<?php 
/**
 * @Packge     : Portfolio
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'portfolio_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'portfolio' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'portfolio_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'portfolio' ),
            'panel'    => 'portfolio_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'portfolio_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'portfolio' ),
            'panel'    => 'portfolio_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'portfolio_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'portfolio' ),
            'panel'    => 'portfolio_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'portfolio_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'portfolio' ),
            'panel'    => 'portfolio_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'portfolio_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'portfolio' ),
            'panel'    => 'portfolio_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'portfolio_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'portfolio' ),
            'panel'    => 'portfolio_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'portfolio_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'portfolio' ),
            'panel'    => 'portfolio_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'portfolio_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'portfolio' ),
            'panel'    => 'portfolio_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>