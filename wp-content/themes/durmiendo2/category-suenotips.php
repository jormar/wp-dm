<?php get_header(); ?>

<div class ="main_container">
    <div class="article">
        <div class ="cycle_title_container dark_blue">
            <h1 class ="cycle_title"><?php echo get_category_name() ?></h1>
        </div>
        <div class="post-content article_text text">
            <?php while ( have_posts() ) : the_post(); ?>
            <p><?php the_title() ?></p>
            <?php endwhile ?>
        </div>
    </div>
</div>

<?php get_sidebar('right') ?>

<div class ="recent_news">
    <?php
        $wp_my_posts = get_normal_post(array(
            'posts_per_page' => 3,
            'orderby' => 'rand'
        ));
        while ( $wp_my_posts->have_posts() ) :
            $wp_my_posts->the_post();
            get_template_part('content', 'caja-post');
        endwhile;
    ?>
</div>

<?php get_footer(); ?>