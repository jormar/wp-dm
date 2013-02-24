<?php get_header(); ?>
    <!--<div class ="white_cloud_container"></div>-->
    
    <div class ="main_container">
        <div id="top_scroller">
            <div id = "cycle_image">
                <div id = "slideshow">
                    <?php
                    $wp_main_posts = get_normal_post(array(
                        'post__in'  => get_option( 'sticky_posts' ),
                        'posts_per_page' => ot_get_option('n_post_scroller_principal'),
                        'paged' => 1,
                    ));
                    
                    $main_posts_ids = array();

                    global $my_excerpt_length;
                    $temp=$my_excerpt_length;
                    $my_excerpt_length=45;

                    while ( $wp_main_posts->have_posts() ) : $wp_main_posts->the_post();
                        $main_posts_ids[] = get_the_ID();
                    ?>
                    <article class="item">
                        <div class ="cycle_title_container pink">
                            <h1 class ="cycle_title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                        </div>
                        
                        <a href="<?php the_permalink() ?>">
                            <?php
                            if ( has_post_thumbnail( get_the_ID() ) ) {
                                echo get_the_post_thumbnail( get_the_ID() , 'main-thumb' );
                            } else {
                            ?>
                            <img src ="<?php echo get_template_directory_uri(); ?>/images/logo-durmiendomejor.png" alt ="new image" />
                            <?php } ?>
                        </a>

                        <div class="cycle_text"><?php the_excerpt() ?></div>
                        <a class="vermas" href="<?php the_permalink() ?>">Seguir leyendo...</a>
                    </article>
                    <?php
                        endwhile;
                        $my_excerpt_length = $temp;
                    ?>
                </div>
            </div>
            <div id = "cycle_circle"></div>
        </div>
        <script type = "text/javascript">
            jQuery(document).ready(function(){
                jQuery('#slideshow')
                    .after('<div id="nav">') 
                    .cycle({ 
                    fx:     'turnDown', 
                    speed:  'fast', 
                    timeout: 8000, 
                    pager:  '#nav',
                            pause:   1  
                });
            });
        </script>

        <div class ="recent_news">
            <?php
                $wp_my_posts = get_normal_post(array(
                    'posts_per_page' => ot_get_option('n_post_home', get_option('posts_per_page')),
                    'post__not_in'  => $main_posts_ids
                ));
                while ( $wp_my_posts->have_posts() ) :
                    $wp_my_posts->the_post();
                    get_template_part('content', 'caja-post');
                endwhile;
            ?>
        </div>
        
        <?php if ( $wp_my_posts->max_num_pages > 1 ) : ?>
        <div class ="next_btn_container light_blue">
            <div class="nav-next der"><?php next_posts_link( __( 'SIGUIENTES' ), $wp_my_posts->max_num_pages ); ?></div>
            <div class="nav-previous izq"><?php previous_posts_link( __( 'ANTERIORES' ), $wp_my_posts->max_num_pages); ?></div>
        </div>
	<?php endif; ?>
    </div>
    
    <?php get_sidebar('home') ?>

<?php get_footer(); ?>