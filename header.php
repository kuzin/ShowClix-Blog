<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php

    global $page, $paged;

    wp_title( '|', true, 'right' );

    bloginfo( 'name' );

    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";

    if ( $paged >= 2 || $page >= 2 )
        echo ' | ' . sprintf( __( 'Page %s', 'starkers' ), max( $paged, $page ) );

    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-1.6.min.js"></script>

<?php
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );
    wp_head();
?>
</head>

<body <?php body_class(); ?>>
    <div id="body-bg-one"></div>

    <header>
        <?#php wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>
        <nav>
            <ul id="navbar">
                <li><a href="http://www.showclix.com/event-ticketing">services</a></li>
                <li><a href="http://www.showclix.com/event-ticketing-software">products</a></li>
                <li><a href="http://www.showclix.com/about">who we are</a></li>
                <li><a href="http://support.showclix.com">contact us</a></li>
                <li class="login-nav">
                    <a id="login-a">login <span>&#9660;</span></a>
                    <ul>
                        <li>
                            <strong>Ticket Buyers:</strong>
                            <a href="http://www.showclix.com/login"
                            class="blue-button">Login to pickup tickets »</a>
                        </li>
                        <li>
                            <strong>Ticket Sellers:</strong>
                            <a href="http://www.showclix.com/admin"
                            class="green-button">Login to your admin »</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <hgroup>
            <h1>
                <a href="<?php echo home_url( '/' ); ?>"
                title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                rel="home"><?php bloginfo( 'name' ); ?></a>
            </h1>
        </hgroup>
        <a href="<?php echo home_url( '/' ); ?>"><div id="header-image"></div></a>
        <h2 id="ribbon"><strong>clixr (<em>n</em>);</strong> a lover of live events, tickets, technology, and combining the three.<? #php bloginfo( 'description' ); ?></h2>
    </header>