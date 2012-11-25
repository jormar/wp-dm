<?php get_header(); ?>

<div class="search_title">Resultados de b&uacute;squeda para "<?php echo get_search_query() ?>"</div>
<div class ="recent_news_blog">
    <?php
    global $wp_query;
    query_posts( array_merge($wp_query->query_vars, array(
        'posts_per_archive_page' => ot_get_option('n_posts_per_archive_page', 9)
    )));
    while ( have_posts() ) {
        the_post();
        get_template_part('content', 'caja-post');
    }
    ?>
</div>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
<div class="clear"></div>
<div class ="next_btn_container next_btn_container_blog light_blue">
    <div class="nav-next der"><?php next_posts_link( __( 'SIGUIENTES' ) ); ?></div>
    <div class="nav-previous izq"><?php previous_posts_link( __( 'ANTERIORES' ) ); ?></div>
</div>
<?php endif; ?>

<?php get_footer(); ?>