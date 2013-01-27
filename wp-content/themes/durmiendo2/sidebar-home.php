<aside class ="home_aside">
    
    <?php get_template_part('content', 'nube-sidebar') ?>

    <div class ="news">
        <h1 class ="aside_title">NOTICIAS</h1>
        <?php
            $wp_noticias_posts = get_last_noticias_wp_query();

            while ( $wp_noticias_posts->have_posts() ) : $wp_noticias_posts->the_post();
        ?>
            <div class ="aside_new light_blue">
                
                <a href="<?php the_permalink() ?>">
                    <?php
                    if ( has_post_thumbnail( get_the_ID() ) ) {
                        echo get_the_post_thumbnail( get_the_ID() , 'post-sidebar-thumb' );
                    } else {
                    ?>
                    <img src ="<?php echo get_template_directory_uri(); ?>/images/logo-durmiendomejor.png" alt ="new image" />
                    <?php } ?>
                </a>
                
                <div class ="aside_new_title ">
                    <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                </div>

                <div class ="new_content"><?php the_excerpt() ?></div>
                <a class ="keep_reading" href ="<?php the_permalink() ?>">Seguir leyendo</a>
            </div>
        <?php endwhile; ?>
        
        <div class ="next_btn_container_news">
            <div class="nav-next der">
                <a href="<?php
                // Get the ID of a given category
                $category_id = get_cat_ID(NOTICIAS_SLUG);

                // Get the URL of this category
                echo get_category_link( $category_id );
            ?>">SIGUIENTES</a></div>
        </div>
    </div>
</aside>
