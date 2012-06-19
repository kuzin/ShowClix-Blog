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

function showclixHours() {
    $date = ((int) date('N'));
    $time = ((float) date('G.i'));
    if (($date <= 2) && ($date > 0)) {
        if ($time >= 9.00 && $time <= 18.00) {
            return true;
        }
    }
    return false;
}


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
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
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
            <div class="nav-wrap">
                <div id="navupper">
                    <ul class="subnav">
                        <li><a href="http://www.showclix.com/about">Company</a></li>
                        <li><a href="http://www.showclix.com/blog">Blog</a></li>
                        <li><a href="http://support.showclix.com">Help</a></li>
                        <li><span data-icon="(" aria-hidden="true"></span> <a href="http://admin.showclix.com/">Client Login</a></li>
                    </ul>
                    <ul class="comms">
                        <li class="phone"><span data-icon="*" aria-hidden="true"></span> <strong>1-888-71-TICKETS</strong></li>
                        <? if (showclixHours() == 1): ?><li class="chat"><span data-icon=")" aria-hidden="true"></span> <a href="https://livechat.boldchat.com/aid/448460374675876810/bc.chat?resize=true&cbdid=6183825201507076116" target="_blank" onclick="window.open((window.pageViewer && pageViewer.link || function(link){return link;})(this.href + (this.href.indexOf('?')>=0 ? '&amp;' : '?') + 'url=' + escape(document.location.href)), 'Chat367233609785093432', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=1,width=640,height=480');return false;">Chat Now</a></li><? endif; ?>
                    </ul>
                </div>
                <div id="navbar">
                    <a href="http://www.showclix.com" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" id="logo" class="png_bg"><?php bloginfo( 'name' ); ?></a>
		    <ul>
                        <li><a href="http://www.showclix.com/services">Sell Tickets</a></li>
                        <li><a href="http://www.showclix.com/search">Find Events</a></li>
                        <li><a href="http://www.showclix.com/login">My Tickets</a></li>
                        <li><a href="http://www.showclix.com/contact">Contact Us</a></li>
                    </ul>                
		</div>
            </div>
        </nav>
        <a href="<?php echo home_url( '/' ); ?>"><div id="header-image"></div></a>
        <!-- <h2 id="ribbon"><strong>clixr (<em>n</em>);</strong> a lover of live events, tickets, technology, and combining the three.<? #php bloginfo( 'description' ); ?></h2> -->
    </header>
