<?php get_header(); ?>

<div class ="main_container">
    <div class="article 404">
        
        <div class="post-content article_text text">
            <img src="<?php echo get_template_directory_uri() ?>/images/404ERROR.jpg" />
<!--            <p>La p&aacute;gina a la que intenta acceder no existe. Si lo desea, puede usar nuestro buscador (ubicado en la parte superior) para encontrar la informaci&oacute;n que necesita.</p>-->
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