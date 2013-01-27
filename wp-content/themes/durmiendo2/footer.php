            <div class="clear"></div>
            <footer class ="page_footer">
                <img src ="<?php echo get_template_directory_uri(); ?>/images/nubes-inferior-mapa-de-sitio.png" alt="footer image"/>

                <div class="footer_info_container">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer1-menu' ) ); ?>
                    <?php wp_nav_menu( array( 'theme_location' => 'footer2-menu' ) ); ?>
                    <?php // wp_nav_menu( array( 'theme_location' => 'footer3-menu' ) ); ?>
                    <?php echo ot_get_option('informacion_contacto_footer') ?>
                </div>
                <div class ="diarius_container">
                    <div class ="logo_link_container"> 
                        <a href ="http://www.themediarus.com/" target="_blank">
                            DISENADO Y MANTENIDO POR: <img src ="<?php echo get_template_directory_uri(); ?>/images/logothemediarus.png" alt ="images de la empresa" />
                        </a>
                    </div>
                </div>
            </footer>
            
        </div>

        <?php wp_footer(); ?>

        <pre><?php  ?></pre>
    </body>
</html>