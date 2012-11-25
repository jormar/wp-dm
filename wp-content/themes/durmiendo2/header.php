<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php
                /*
                * Print the <title> tag based on what is being viewed.
                */
                global $page, $paged;

                wp_title( '|', true, 'right' );

                // Add the blog name.
                bloginfo( 'name' );

                // Add the blog description for the home/front page.
                $site_description = get_bloginfo( 'description', 'display' );
                if ( $site_description && ( is_home() || is_front_page() ) )
                        echo " | $site_description";

                // Add a page number if necessary:
                if ( $paged >= 2 || $page >= 2 )
                        echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

                ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->
        <?php
            /* We add some JavaScript to pages with the comment form
            * to support sites with threaded comments (when in use).
            */
            if ( is_singular() && get_option( 'thread_comments' ) )
                    wp_enqueue_script( 'comment-reply' );

            /* Always have wp_head() just before the closing </head>
            * tag of your theme, or you will break many plugins, which
            * generally use this hook to add elements to <head> such
            * as styles, scripts, and meta tags.
            */
            wp_head();
    ?>
        <script type='text/javascript' src='http://platform.twitter.com/widgets.js?ver=3.3.1'></script>
        <script src="http://widgets.twimg.com/j/2/widget.js"></script>
        <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=263114460384602";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    </head>
    <body <?php body_class(); ?>>
        <div id="fb-root"></div>

        <header>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class = "logo_img" src = "<?php echo get_template_directory_uri(); ?>/images/logo-durmiendomejor.png" alt = "Durmiendo mejor logo" />
            </a>
<!--            <div class ="publicity_banner"></div>-->

            <div class ="navigation_list_container">
                <?php wp_nav_menu( array( 'theme_location' => 'header-top-menu' ) ); ?>
                
                <?php get_search_form(); ?>

                <div class ="social_network_container">
                    <a href="<?php echo FACEBOOK_URL ?>" target="_blank"><img src ="<?php echo get_template_directory_uri(); ?>/images/facebook.png" alt ="Facebook"/></a>
                    <a href="<?php echo TWITTER_URL ?>" target="_blank"><img src ="<?php echo get_template_directory_uri(); ?>/images/twitter.png" alt ="Twitter"/></a>
                    <a href="<?php echo get_page_link(get_page_by_title("contacto")->ID) ?>"><img src ="<?php echo get_template_directory_uri(); ?>/images/mail.png" alt ="Enviar correo"/></a>
                </div>
            </div>

        </header>
        
        <div class ="content">