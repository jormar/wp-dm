<aside class ="home_aside">
    
    <?php get_template_part('content', 'nube-sidebar') ?>

    <div class ="news">
        <h1 class ="aside_title">NOTICIAS</h1>
        <?php
            $wp_noticias_posts = get_last_noticias_wp_query();

            while ( $wp_noticias_posts->have_posts() ) : $wp_noticias_posts->the_post();
        ?>
            <div class ="aside_new">
                <div class ="aside_new_title light_blue">
                    <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                </div>
                
                <a href="<?php the_permalink() ?>">
                    <?php
                    if ( has_post_thumbnail( get_the_ID() ) ) {
                        echo get_the_post_thumbnail( get_the_ID() , 'post-sidebar-thumb' );
                    } else {
                    ?>
                    <img src ="<?php echo get_template_directory_uri(); ?>/images/logo-durmiendomejor.png" alt ="new image" />
                    <?php } ?>
                </a>

                <div class ="new_content"><?php the_excerpt() ?></div>
                <a class ="keep_reading" href ="<?php the_permalink() ?>">Seguir leyendo</a>
            </div>
        <?php endwhile; ?>
    </div>
</aside>
