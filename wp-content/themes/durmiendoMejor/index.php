<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home</title>
        <link href = "css/style.css" rel = "stylesheet" type = "text/css" />
    </head>
    <body>
        <?php?>
        <header>
            <img class = "logo_img" src = "images/logo-durmiendomejor.png" alt = "Durmiendo mejor logo" />
            <div class ="publicity_banner">
            
            </div>
            <div class ="navigation_list_container">
                <ul>
                    <li><a href ="#">HOME</a></li>
                    <li><a href ="templates/blog.php">ART&Iacute;CULOS</a></li>
                    <li><a href ="#">#SUENOTIPS</a></li>
                    <li><a href ="#">SERVICIOS</a></li>
                    <li><a href ="#">NOSOTROS</a></li>
                    <li><a href ="templates/contacto.php">CONTACTO</a></li>
                </ul>
                <img src ="images/guardar.png" class ="search_img" alt ="Buscar" />
                <input type ="text" class ="search_input"/>
                <div class ="social_network_container">
                    <img src ="images/facebook.png" alt ="facebook"/>
                    <img src ="images/twitter.png" alt ="twitter"/>
                    <img src ="images/mail.png" alt ="mail"/>
                </div>              
            </div>
            
        </header>
        <div class ="content">
            <!--<div class ="white_cloud_container">
                
            </div>-->
            <img class ="background_cloud" src ="images/fondo-nubes-img.jpg" alt ="fondo nube clara" />
            <div class ="main_container">
                <div id="top_scroller">
                    <div class ="cycle_title_container pink">
                        <h1 class ="cycle_title">Durmiendo en el embarazo: el tercer trimestre</h1>
                    </div>
                    <div id = "cycle_image">
                        <div id = "slideshow">
                            <img alt="imag1" src = "images/lorem1.jpg" id= "pics1"/>
                            <img alt="imag2" src = "images/lorem2.jpg" id= "pics2"/>
                            <img alt="imag3" src = "images/lorem3.jpg" id= "pics3"/>
                            <img alt="imag4" src = "images/lorem4.jpg" id= "pics4"/>
                            <img alt="imag5" src = "images/lorem5.jpg" id= "pics5"/>
                        </div>
                    </div>
                    <p class ="cycle_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                       consequat.cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                       non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <div id = "cycle_circle">

                    </div>
                </div>
                
                <div class ="recent_news">
                    <div class="main_content_new">
                        <div class ="main_new_title light_green">
                            <h1 class ="main_new_title">SUENO Y DEPRESION</h1>
                        </div>
                        <div class ="pico_container light_green_border">
                            
                        </div>
                        <img src ="images/lorem7.jpg" alt ="new image" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            consequat.                           
                        </p>
                        <a href="#">Seguir leyendo...</a>
                    </div>
                    <div class="main_content_new">
                        <div class ="main_new_title light_blue">
                            <h1 class ="main_new_title">SUENO Y DEPRESION</h1>
                        </div>
                        <div class ="pico_container light_blue_border">
                            
                        </div>
                        <img src ="images/lorem7.jpg" alt ="new image" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            consequat.                           
                        </p>
                        <a href="#">Seguir leyendo...</a>
                    </div>
                    <div class="main_content_new">
                        <div class ="main_new_title salmon">
                            <h1 class ="main_new_title">SUENO Y DEPRESION</h1>
                        </div>
                        <div class ="pico_container salmon_border">
                            
                        </div>
                        <img src ="images/lorem7.jpg" alt ="new image" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            consequat.                           
                        </p>
                        <a href="#">Seguir leyendo...</a>
                    </div>
                    <div class="main_content_new">
                        <div class ="main_new_title green">
                            <h1 class ="main_new_title">SUENO Y DEPRESION</h1>
                        </div>
                        <div class ="pico_container green_border">
                            
                        </div>
                        <img src ="images/lorem7.jpg" alt ="new image" />
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                            consequat.                           
                        </p>
                        <a href="#">Seguir leyendo...</a>
                    </div>
                </div>
                <div class ="next_btn_container light_blue">
                    
                    <a href ="#">SIGUIENTES</a>
                    
                </div>
            </div>
            <aside class ="home_aside">
                <div class ="last_tweet_container">
                    
                </div>
                <div class ="news">
                    <h1 class ="aside_title">NOTICIAS</h1>
                    <?php for($i = 0; $i<3; $i++){ ?>
                        <div class ="aside_new">
                            <div class ="aside_new_title light_blue">
                                <h1>SUENO Y DEPRESION</h1>
                            </div>
                            <img src ="images/lorem6.jpg" alt ="new image" />
                            <div class ="new_content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
                                    . Excepteur sint occaecat cupidatat
                                    eserunt mollit anim id est laborum
                                </p>
                            </div>
                            <a class ="keep_reading" href ="#">Seguir leyendo</a>
                        </div>
                    <?php }?>
                </div>
            </aside>
            <div class ="clear">
                
            </div>
            <footer class ="page_footer">
                <img src ="../images/nubes-inferior-mapa-de-sitio.png" alt="footer image"/>
                <div class="footer_info_container">
                    <ul class="links_container">
                        <li><a href="#">HOME</a></li>
                        <li><a href="templates/articulo.php">ARTICULOS</a></li>
                        <li><a href="#">SERVICIOS</a></li>
                        <li><a href="#">NOSOTROS</a></li>
                        <li><a href="#">SUENOTIPS</a></li>
                    </ul>
                    <ul class="ht_container">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ARTICULOS</a></li>
                        <li><a href="#">SERVICIOS</a></li>
                        <li><a href="#">NOSOTROS</a></li>
                        <li><a href="#">SUENOTIPS</a></li>
                    </ul>
                    <ul class="info_container">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">ARTICULOS</a></li>
                        <li><a href="#">SERVICIOS</a></li>
                        <li><a href="#">NOSOTROS</a></li>
                        <li><a href="#">SUENOTIPS</a></li>
                    </ul>
                </div>
                <div class ="diarius_container">
                    <div class ="logo_link_container"> 
                        <a href ="#">DISENADO Y MANTENIDO POR:</a>
                        <img src ="images/logothemediarus.png" alt ="images de la empresa" />
                    </div>
                </div>
            </footer>
            
        </div>
        
        <script src="js/jquery-1.4.3.js"></script>
        <script src="js/jquery.ui.core.js"></script>		
        <script src="js/jquery.tools.min.js"></script>
        <script src="js/jquery-cycle-full.js"></script>
        <script type = "text/javascript">
            
            $(document).ready(function(){
                $('#slideshow') 
                    .after('<div id="nav">') 
                    .cycle({ 
                    fx:     'turnDown', 
                    speed:  'fast', 
                    timeout: 3000, 
                    pager:  '#nav',
                            pause:   1  
                });
            });
        </script>
        
    </body>
</html>