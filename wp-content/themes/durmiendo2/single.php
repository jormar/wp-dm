<?php get_header(); ?>

<div class ="main_container">
    <?php while ( have_posts() ) : the_post();
        $color = '';
        if (function_exists('get_tax_meta')){
            $cats = wp_get_post_categories(get_the_ID());
            $color = get_tax_meta($cats[0],'dmwp_color_field_id');
        }
    ?>
    <div class="article <?php echo join( ' ', get_post_class() ) ?>">
        <div class ="cycle_title_container pink" style="<?php if ( !empty($color) ) echo "background-color:" . $color; ?>">
            <h1 class ="cycle_title"><?php the_title() ?></h1>
        </div>
        <?php
        if ( has_post_thumbnail( get_the_ID() ) ) {
            echo get_the_post_thumbnail( get_the_ID() , 'single-thumb' );
        } 
        ?>
        <div class="post-content article_text text"><?php the_content() ?></div>
        
        <?php get_template_part( 'content', 'social-post' ); ?>
    </div>
    <?php endwhile ?>
</div>

<?php get_sidebar('right') ?>

<div class ="recent_news">
    <?php
        $wp_my_posts = get_normal_post(array(
            'posts_per_page' => 3,
            'category__in' => wp_get_post_categories(get_the_ID())
        ));
        while ( $wp_my_posts->have_posts() ) :
            $wp_my_posts->the_post();
            get_template_part('content', 'caja-post');
        endwhile;
    ?>
</div>

<?php get_footer(); ?>