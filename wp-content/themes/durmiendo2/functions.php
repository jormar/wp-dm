<?php

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Plugins adicionales
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );

/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.
 */
add_filter( 'ot_show_new_layout', '__return_false' );

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require_once ( get_template_directory() . '/option-tree/ot-loader.php');

/*
 * El siguiente plugin crea atributos personalizados para las categorias.
 * 
 * Se usa para poder configurar los colores que se muestran por categoria en la
 * plantilla.
 */
require_once ( get_template_directory() . '/includes/Tax-Meta-Class-master/Tax-meta-class/Tax-meta-class.php');
if (is_admin()){
    /* 
     * prefix of meta keys, optional
     */
    $prefix = 'dmwp_';
    /* 
     * configure your meta box
     */
    $config = array(
        'id' => 'demo_meta_box',          // meta box id, unique per meta box
        'title' => 'Demo Meta Box',          // meta box title
        'pages' => array('category'),        // taxonomy name, accept categories, post_tag and custom taxonomies
        'context' => 'normal',            // where the meta box appear: normal (default), advanced, side; optional
        'fields' => array(),            // list of meta fields (can be added by field arrays)
        'local_images' => false,          // Use local or hosted images (meta box images for add/remove)
        'use_with_theme' => get_template_directory_uri() . '/includes/Tax-Meta-Class-master/Tax-meta-class/'          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
    );

    /*
     * Initiate your meta box
     */
    $my_meta =  new Tax_Meta_Class($config);

    /*
     * Add fields to your meta box
     */
    //Color field
    $my_meta->addColor($prefix.'color_field_id',array('name'=> __('Color en los t&iacute;tulos','tax-meta')));

    /*
     * Don't Forget to Close up the meta box decleration
     */
    //Finish Meta Box Decleration
    $my_meta->Finish();
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Configuraciones del tema
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

if (function_exists('ot_get_option')) {
    define('FACEBOOK_URL', ot_get_option('facebook_url'));
    define('TWITTER_URL', ot_get_option('twitter_url'));
} else {
    define('FACEBOOK_URL', 'http://facebook.com');
    define('TWITTER_URL', 'http://twitter.com');
}

define('NOTICIAS_SLUG', 'noticias');
define('SUENOTIPS_SLUG', 'suenotips');

/**
 * Tell WordPress to run my_theme_setup() when the 'after_setup_theme' hook is run.
 */
add_action( 'after_setup_theme', 'my_theme_setup' );

if ( ! function_exists( 'my_theme_setup' ) ){
    function my_theme_setup() {
        // Add default posts and comments RSS feed links to <head>.
        add_theme_support( 'automatic-feed-links' );

        // Para poder cambiar el fondo desde el admin
        // add_custom_background();

        // Thumbnails
        add_theme_support( 'post-thumbnails' );
        // set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );

        // no nos importa reproducir este tamano
        // add_image_size( 'destacado-thumb', 994, 350, true); // las del sidebar
        // 
        // no nos importa reproducir este tamano
        // add_image_size( 'secundaria-thumb', 300, 200, true); // en el sidebar - ultimas noticias
        
        // no nos importa reproducir este tamano
        add_image_size( 'main-thumb', 650, 250, true);
        add_image_size( 'single-thumb', 650, 250, true);
        add_image_size( 'post-thumb', 332, 168, true);
        add_image_size( 'post-sidebar-thumb', 346, 126, true);

        // Registro de menus
        register_nav_menu( 'header-top-menu', 'En la cabecera' );
        register_nav_menu( 'footer1-menu', 'En el footer (1ro de izq a der)' );
        register_nav_menu( 'footer2-menu', 'En el footer (2do de izq a der)' );
        // register_nav_menu( 'footer3-menu', 'En el footer (3ro de izq a der)' );

        // add_post_type_support( 'page', 'excerpt' );
        // add_post_type_support( 'page', 'thumbnail' );
        
        // add_theme_support( 'post-formats', array( 'aside' ) );
        // remove_post_type_support( 'post', 'post-formats');
        
        // This theme styles the visual editor with editor-style.css to match the theme style.
	// add_editor_style();
        
        wp_register_script('jquery-cycle', get_template_directory_uri().'/js/jquery-cycle-full.js', array('jquery'));
        /*
        wp_register_script('jquery-tools', get_bloginfo('template_url').'/js/jquery.tools.min.js', array('jquery'));

        wp_enqueue_script('jquery-tools');*/
        wp_enqueue_script('jquery', false, array(), false, true);
        wp_enqueue_script('jquery-cycle', false, array(), false, true);
    }
}; // my_theme_setup

add_action('wp_enqueue_script','my_theme_register_scripts');

function my_theme_register_scripts(){
    // Activamos los scripts necesarios
    // wp_register_script('jquery-tools', get_template_directory().'/js/jquery.tools.min.js', array('jquery'));
    wp_register_script('jquery-cycle', get_template_directory_uri().'/js/jquery-cycle-full.js', array('jquery'));
    // wp_register_script('jquery-ui', get_bloginfo('template_url').'/js/jquery.ui.core.js', array('jquery'));
    // wp_register_script('twitter', 'http://platform.twitter.com/widgets.js' );

    /*
    if (!is_admin()) {
            wp_deregister_script('jquery');
            wp_register_script('jquery', '/wp-includes/js/jquery/jquery.js', false, '1.7.2', true);
            wp_enqueue_script('jquery');
    }
    */
    wp_enqueue_script('jquery', false, array(), false, true);
    // wp_enqueue_script('jquery-ui-core', false, array(), false, true);
    // wp_enqueue_script('jquery-tools', false, array(), false, true);
    wp_enqueue_script('jquery-cycle', false, array(), false, true);
    // wp_default_scripts();
    // wp_enqueue_script('twitter');

    // Registramos los estilos
    // wp_register_style('jquery-lightbox-css', get_bloginfo('template_url') . '/js/jquery-lightbox/css/jquery.lightbox-0.5.css');
    // wp_register_style('jquery-ui-css', get_bloginfo('template_url') . '/js/jquery-ui/css/custom-theme/jquery-ui-1.8.16.custom.css');
}

//function my_theme_wp_head() {
//    // Si el sidebar muestra una galeria, incluimos el plugin
//    if ( pbe_side_get_sidebar() != 0) {
//        wp_enqueue_script('jquery-cycle-all');
//        wp_enqueue_script('jquery-lightbox');
//        wp_enqueue_style( 'jquery-lightbox-css');
//    }
//}
//add_action( 'wp_head', 'my_theme_wp_head' );

$my_excerpt_length = 25;

function my_theme_excerpt_length( $length ) {
    global $my_excerpt_length;

    return $my_excerpt_length;
}
add_filter( 'excerpt_length', 'my_theme_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 */
function my_theme_continue_reading_link() {
    return '<a class="more" href="'. esc_url( get_permalink() ) . '">Seguir leyendo...</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and twentyeleven_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 */
function my_theme_auto_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'my_theme_auto_excerpt_more' );
add_filter( 'content_more', 'my_theme_auto_excerpt_more' );

function my_theme_content_nav( $nav_id='navegation' ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<div id="<?php echo $nav_id; ?>" class="navegation next_btn_container light_blue" >
			<div class="nav-next"><?php next_posts_link( __( '&laquo; Anteriores ' ) ); ?></div>
			<div class="nav-previous"><?php previous_posts_link( __( 'Posteriores &raquo;' ) ); ?></div>
		</div><!-- #nav-above -->
	<?php endif;
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Funciones generales
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

function get_current_category() {
    global $wp_query;
	if( !is_category() ) return '';

	return $wp_query->get_queried_object();
}

function get_category_name() {
	global $wp_query;
	if( !is_category() ) return '';

	$categoria = $wp_query->get_queried_object();
	return $categoria->cat_name;
}

function get_category_href() {
	global $wp_query;
	if( !is_category() ) return '';

	$categoria = $wp_query->get_queried_object();
	return get_category_link( $categoria->cat_ID );
}

function get_facebook_share_link() {
    return 'http://www.facebook.com/share.php?u='. urlencode(get_permalink()) .'&t=' . urlencode(get_the_title());
}

function get_twitter_share_link() {
    return 'https://twitter.com/share?url='.urlencode(get_permalink()).'&via=durmiendomejor';
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Consultas particulares de la plantilla
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

function get_default_options_wp_query(){
    return array();
}

function get_normal_post($options = array()){
    
    $params = array(
        'ignore_sticky_posts' => 1,
        'posts_per_page' => get_option('posts_per_page'),
        'paged' => get_query_var( 'paged' ),
        'order' => 'DESC',
        'category__not_in' => array(
            get_category_by_slug(NOTICIAS_SLUG)->cat_ID,
            get_category_by_slug(SUENOTIPS_SLUG)->cat_ID,
            )
    );

    return new WP_Query(array_merge($params, $options) );
}

function get_noticias_wp_query($options = array()){
    $params = array(
        'ignore_sticky_posts' => 1,
        'posts_per_page' => get_option('posts_per_page'),
        'paged' => get_query_var( 'paged' ),
        'category__in' => array(
            get_category_by_slug(NOTICIAS_SLUG)->cat_ID,
            )
    );

    return new WP_Query(array_merge($params, $options) );
}

function get_last_noticias_wp_query($n = 3, $options = array()){
    
    $n = ot_get_option('n_post_sidebar_noticias', 3);
    
    $params = array(
        'ignore_sticky_posts' => 1,
        'posts_per_page' => $n,
        'category__in' => array( get_category_by_slug(NOTICIAS_SLUG)->cat_ID )
    );

    return new WP_Query(array_merge($params, $options) );
}

/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Otras funciones
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

/**
 * Obtiene los twitts para suenotips
 * @return String Twitts en formato json
 */
function getTwittsSuenotips($n=10)
{
    $cache_file = TEMPLATEPATH . "/cache/suenotips_cache.txt"; // Path del archivo cache
    $expireTime = 40;                       // en segundos
    $result = '{}';

    /*
    // DEBUG
    echo '<pre>';
    echo time();
    echo '</pre>';
    echo '<pre>';
    echo filemtime($cache_file);
    echo '</pre>';
    echo '<pre>';
    echo time() - filemtime($cache_file);
    echo '</pre>';
    echo '<pre>';
    echo $expireTime;
    echo '</pre>';
    */

    if( time() - filemtime($cache_file) > $expireTime ){
        // DEBUG
        // echo 'Generando nuevos datos...<br />';

        $ch = curl_init();
        // $url = 'http://search.twitter.com/search.json?page=1&rpp=10&q=' . urlencode('@durmiendomejor OR #sueñotips');
        $url = 'http://search.twitter.com/search.json?page=1&rpp='.$n.'&q=' . urlencode( ot_get_option('twitter_search_hashtags', '#sueñotips'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_VERBOSE, 0); // no imprimir nada
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); // para no esperar indefinidamente
        curl_setopt($ch, CURLOPT_HTTPGET, 1);

        // DEBUG
        // echo $url;

        $result = curl_exec($ch);
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if( !in_array($http_status, array('200') ) ) {
            // Ocurrio un error... Mostramos lo que teniamos en cache
            // DEBUG
            // echo 'Estamos mostrando el archivo que tenemos en cache (POR ERROR)...<br />';
            $result = file_get_contents($cache_file);
        } else {
            // Guardamos el nuevo contenido en la cache
            $fp = fopen($cache_file, 'w+');
            fwrite($fp, $result);
            fclose($fp);
        }
    } else {
        // Hay que mostrar la cache
        // DEBUG
        // echo 'Estamos mostrando el archivo que tenemos en cache...<br />';
        $result = file_get_contents($cache_file);
    }

    return $result;
}
