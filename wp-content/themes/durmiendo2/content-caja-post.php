<?php
    $color = '';
    if (function_exists('get_tax_meta')){
        $cats = wp_get_post_categories(get_the_ID());
        $color = get_tax_meta($cats[0],'dmwp_color_field_id');
    }
?>
<article id="post-<?php the_ID(); ?>" class="main_content_new green <?php echo join( ' ', get_post_class() ) ?>" style="<?php if ( !empty($color) ) echo "background-color:" . $color; ?>">
<!--    <div class ="main_new_title green" style="<?php if ( !empty($color) ) echo "background-color:" . $color; ?>">
        <h1 class ="main_new_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
    </div>-->
<!--    <div class ="pico_container green_border" style="<?php if ( !empty($color) ) echo "border-top-color:" . $color; ?>"></div>-->

    <a href="<?php the_permalink() ?>">
        <?php

        if ( has_post_thumbnail( get_the_ID() ) ) {
            echo get_the_post_thumbnail( get_the_ID() , 'post-thumb' );
        } else {
        ?>
        <img src ="<?php echo get_template_directory_uri(); ?>/images/logo-durmiendomejor.png" alt ="new image" />
        <?php
        }
        ?>
    </a>
    
    <h2 class ="main_new_title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
    <span class="date_post"><?php the_date() ?></span>
    <div class="entry-excerpt"><?php the_excerpt() ?></div>
    <a class="vermas" href="<?php the_permalink() ?>">Seguir leyendo...</a>
</article>