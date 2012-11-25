<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="image"src ="<?php echo get_template_directory_uri(); ?>/images/guardar.png" class ="search_img" alt ="Buscar" />
    <input name="s" type ="text" class ="search_input" value="<?php echo get_search_query() ?>"/>
</form>