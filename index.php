<!DOCTYPE html>
<html>
    <head>
        <title>KIA</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <style>
            .seccion1 .container-banner img{
                height: 100vh;
                width: 100%;
            }
            .seccion1 .container-perfil img{
                width: 25em;
            }
            .seccion1 .container-perfil p{
                color: #151D28; 
                font-size: 1.8em; 
                font-weight: 700;
            }
            .seccion1 .container-perfil-info{
                margin-top: 3em;
            }
            .seccion1 .container-perfil-info .nombre{
                margin-top: 2em;
            }
            .seccion1 .container-perfil-info .nombre .rombo{
                background-color: #606060; 
                width: 85px; 
                height: 45px;
                transform: skew(-35deg);
                margin-bottom: -4.2em;
                margin-left: -.5em; 
            }
            .seccion1 .container-perfil-info .nombre div img{
                width: 1.5em;
                transform: skew(30deg);
            }
            .seccion1 .container-perfil-info .nombre .back{
                background-color: #151D28; 
                margin-top: 1em; 
                border-radius: 5em 0 0 0;
            }
            .seccion1 .container-perfil-info .nombre .back p{
                padding: .5em 0; 
                color: white; 
                font-weight: bold; 
                font-size: 1.5em; 
                margin: 0 0 0 6em;
            }
            .seccion1 .container-perfil-info .telefono{
                margin-top: 2em;
            }
            .seccion1 .container-perfil-info .telefono .rombo{
                background-color: #606060; 
                width: 85px; 
                height: 45px;
                transform: skew(-35deg);
                margin-bottom: -4.2em;
                margin-left: -.5em;
            }
            .seccion1 .container-perfil-info .telefono .rombo img{
                width: 1.5em; 
                transform: skew(30deg);
            }
            .seccion1 .container-perfil-info .telefono .back{
                background-color: #151D28; 
                margin-top: 1em; 
                border-radius: 5em 0 0 0;
            }
            .seccion1 .container-perfil-info .telefono .back p{
                padding: .5em 0; 
                color: white; 
                font-weight: bold; 
                font-size: 1.5em; 
                margin: 0 0 0 6em;
            }
            .seccion1 .container-perfil-info .what{
                margin-top: 2em;
            }
            .seccion1 .container-perfil-info .what .rombo{
                background-color: #606060; 
                width: 85px; 
                height: 45px;
                transform: skew(-35deg);
                margin-bottom: -4.2em;
                margin-left: -.5em;
            }
            .seccion1 .container-perfil-info .what .rombo img{
                width: 1.5em; 
                transform: skew(30deg);
            }
            .seccion1 .container-perfil-info .what .back{
                background-color: #151D28; 
                margin-top: 1em; 
                border-radius: 5em 0 0 0;
            }
            .seccion1 .container-perfil-info .what .back p{
                padding: .5em 0; 
                color: white; 
                font-weight: bold; 
                font-size: 1.5em; 
                margin: 0 0 0 6em;
            }
            .seccion1 .container-perfil-info .mail{
                margin-top: 2em;
            }
            .seccion1 .container-perfil-info .mail .rombo{
                background-color: #606060; 
                width: 85px; 
                height: 45px;
                transform: skew(-35deg);
                margin-bottom: -4.2em;
                margin-left: -.5em;
            }
            .seccion1 .container-perfil-info .mail .rombo img{
                width: 1.5em; 
                transform: skew(30deg);
            }
            .seccion1 .container-perfil-info .mail .back{
                background-color: #151D28; 
                margin-top: 1em; 
                border-radius: 5em 0 0 0;
            }
            .seccion1 .container-perfil-info .mail .back p{
                padding: .5em 0; 
                color: white; 
                font-size: 1.5em; 
                margin: 0 0 0 6em;
            }

            .seccion2{
                margin-bottom: 2em;
            }
            .seccion2 .formulario fieldset{
                background-color: #E5E5E5;
                padding: 0em 4em 2em 4em;
            }
            .seccion2 .formulario fieldset legend p{
                color: #151D28; 
                font-size: 1.2em; 
                font-weight: 700;
                margin-bottom: 3em;
            }
            .seccion2 .formulario .input input{
                height: 3.5em; 
                border-radius: 2em; 
                font-size: 1.2em;
            }
            .seccion2 .formulario .select select{
                border-radius: 2em; 
                height: 3.5em; 
                font-size: 1.2em; 
                padding: 0 1em;
            }
            .seccion2 .formulario .boton{
                padding: 0 3em;
            }
            .seccion2 .formulario .boton button{
                margin-top: 2em;
                background-color: #151D28; 
                color: white; 
                font-weight: bold;
                font-size: 2em; 
                border-radius: 2em; 
                padding: .5em 0;
            }
            .seccion2 .banner .linea{
                background-color: #151D28;
            }
            .seccion2 .banner .linea p{
                color: white; 
                font-size: 2em;
                font-weight: 600; 
                padding: .5em 0;
            }
            .seccion2 .banner .relleno{
                background-color: #151D28; 
                height: 4.5em;
                border-top: solid white 1px; 
                height: 4em;
            }
            .seccion2 .banner .redes{
                background-color: #151D28;
                height: 4.5em;
                border-top: solid white 1px; 
                height: 4em;
            }
            .seccion2 .banner .redes .subred{
                height: 4em;
            }
            .seccion2 .banner .redes .subred img{
                width: 2em; 
                height: 2em;
            }
            .seccion2 .banner .redes .subred p{
                color: white; 
                font-size: 1.5em;
                font-weight: 600;
                margin: 0;
            }
            .seccion2 .banner .what{
                background-color: #151D28;
                height: 4.5em;
                border-top: solid white 1px;
                height: 4em;
            }
            .seccion2 .banner .what .subwhat{
                height: 4em;
            }
            .seccion2 .banner .what .subwhat img{
                width: 2em; 
                height: 2em;
            }
            .seccion2 .banner .what .subwhat p{
                color: white; 
                font-size: 1.5em;
                font-weight: 600; 
                margin-left: 1.5em;
                margin-top: 1em;
            }
            .seccion2 .banner .web{
                background-color: #151D28;
                height: 4.5em;
            }
            .seccion2 .banner .web img{
                width: 2em; 
                height: 2em; 
                margin-right: 1.5em;
            }
            .seccion2 .banner .web p{
                color: white; 
                font-size: 1.5em;
                font-weight: 600; 
                margin: 0;
            }
            .seccion3 .carousel p{
                font-size: 2em; 
                font-weight: bold; 
                color: black; 
                margin: 2em 0;
            }
            .seccion3 .carousel .video p{
                font-size: 2em; 
                font-weight: bold; 
                color: black; 
                margin: 2em 0 0em 0;
            }
            .seccion3 .redes p{
                font-size: 2em; 
                font-weight: 700; 
                color: black;
            }
            .seccion3 .redes .icon img{
                width: 2em; 
                height: 2em; 
                background-color: #222221; 
                margin-left: 1.5em; 
                border-radius: 2em;
            }
            .seccion3 .agenda .container-agenda{
                margin-top: 3em;
            }
            .seccion3 .agenda .container-agenda img{
                width: 7em; 
                height: 7em;
            }
            .seccion3 .agenda .container-agenda p{
                color: black; 
                font-size: 1.7em; 
                font-weight: 700; 
                color: black;
            }
            .seccion3 .mapa .logo-mapa p{
                color: black; 
                font-size: 1.7em;
                font-weight: 700; 
                color: black;
            }
            .seccion3 .mapa .logo-mapa img{
                width: 3em; 
                height: 3em; 
                margin-bottom: 3em; 
                margin-left: 1em;
            }

            @media (max-width: 600px){
                .seccion1 .container-banner img {
                    width: 100%;
                    height: 100%;
                }
                .seccion1 .container-perfil img {
                    width: 17em;
                }
                .seccion1 .container-perfil-info .nombre {
                    margin-top: 0em;
                }
                .seccion1 .container-perfil-info{
                    padding-left: 4em;
                }
                .seccion1 .container-perfil-info .nombre .back p{
                    font-size: 1.4em;
                    margin: 0 0 0 5em;
                } 
                .seccion1 .container-perfil-info .telefono .back p{
                    font-size: 1.4em;
                    margin: 0 0 0 5em;
                }
                .seccion1 .container-perfil-info .what .back p{
                    font-size: 1.4em;
                    margin: 0 0 0 5em;
                }
                .seccion1 .container-perfil-info .mail .back p{
                    font-size: 1.4em;
                    margin: 0 0 0 5em;
                }
                .seccion2 .formulario fieldset legend p{
                    font-size: 1em;
                }
                .seccion2 .banner .linea p{
                    font-size: 1.5em;
                }
                .seccion2 .banner .web {
                    height: 1.5em;
                }
                .seccion2 .banner .web p{
                    font-size: 1em;
                    margin-bottom: 3em;
                } 
                .seccion3 .carousel p{
                    margin: 1em 0;
                }
                .seccion3 .carousel .video p {
                    margin: 0em;
                }
                .seccion3 .agenda .container-agenda p {
                 font-size: 1.5em;
                }
                .seccion3 .agenda .container-agenda {
                    margin-top: 0em;
                }
            }
        </style>
    </head>
    <body>
        <div class="uk-container-expand">

            <section class="seccion1">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

                    <ul class="uk-slideshow-items">
                        <li>
                            <img src="./image/banner_principal.png" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="./image/banner_principal.png" alt="" uk-cover>
                        </li>
                        <li>
                            <img src="images/light.jpg" alt="" uk-cover>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                </div>
                <div class="uk-text-center" uk-grid>
                    <div class="uk-width-auto@m uk-visible@m">
                        <div class="uk-card uk-card-body"></div>
                    </div>
                    <div class="uk-width-1-3@m container-perfil">
                        <div class="uk-card">
                            <img src="./image/ESPECIALISTA.png" alt="">
                            <p>Especialista en producto</p>
                        </div>
                    </div>
                    <div class="uk-width-auto@m uk-visible@m"></div>
                    <div class="uk-width-expand@m container-perfil-info">
                        <div class="uk-card">
                            <div class="nombre">
                                <div class="uk-flex uk-flex-middle uk-flex-center rombo">
                                    <img src="./image/perfil.png" alt="">
                                </div>
                                <div class="uk-flex uk-flex-left uk-flex-middle back"> 
                                    <p>Eduardo Vera Campos</p>
                                </div>
                            </div>
                            <div class="telefono">
                                <div class="uk-flex uk-flex-middle uk-flex-center rombo">
                                    <a style="text-decoration: none;" href="tel:+523316459428" class="btn-phone uk-flex uk-flex-middle uk-flex-center" target="_blank">
                                        <img src="./image/telefono.png" alt="">
                                    </a>
                                </div>
                                <div class="uk-flex uk-flex-left uk-flex-middle back">
                                    <a href="tel:+523316459428" style="text-decoration: none;" class="btn-phone uk-flex uk-flex-middle uk-flex-center" target="_blank">
                                        <p>449 103 9115</p>
                                    </a> 
                                </div>
                            </div>
                            <div class="what">
                                <div class="uk-flex uk-flex-middle uk-flex-center rombo">
                                    <a style="text-decoration: none;" href="https://api.whatsapp.com/send?phone=+524491039115" class="btn-wsp uk-flex uk-flex-middle uk-flex-center" target="_blank">
                                        <img src="./image/WhatsApp.png" alt="">
                                    </a>
                                </div>
                                <div class="uk-flex uk-flex-left uk-flex-middle back">
                                    <a style="text-decoration: none;" href="https://api.whatsapp.com/send?phone=+524491039115" class="btn-wsp uk-flex uk-flex-middle uk-flex-center" target="_blank">
                                        <p>449 103 9115</p>
                                    </a> 
                                    
                                </div>
                            </div>
                            <div class="mail">
                                <div class="uk-flex uk-flex-middle uk-flex-center rombo">
                                    <a style="text-decoration: none;" href="mailto:evera@kiaaltaria.com.mx?Subject=Informes%20carros%20KIA"><p class="uk-margin-remove"><img src="./image/correo.png" alt=""></p></a>
                                </div>
                                <div class="uk-flex uk-flex-left uk-flex-middle back">
                                    <a style="text-decoration: none;" href="mailto:evera@kiaaltaria.com.mx?Subject=Informes%20carros%20KIA"><p>evera@kiaaltaria.com.mx</p></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="seccion2">
                <div class="uk-text-center" uk-grid>
                    <div class="uk-width-auto@m">
                        <div class="uk-card uk-card-body"></div>
                    </div>
                    <div class="uk-width-expand@m formulario">
                        <div class="uk-card">
                            <form>
                                <fieldset class="uk-fieldset">
                            
                                    <legend class="uk-legend">
                                        <p>SOLICITAR COTIZACIÓN</p>
                                    </legend>
                            
                                    <div class="uk-margin input">
                                        <input class="uk-input" type="text" placeholder="NOMBRE">
                                    </div>

                                    <div class="uk-margin input">
                                        <input  class="uk-input" type="text" placeholder="CORREO">
                                    </div>

                                    <div class="uk-margin input">
                                        <input  class="uk-input" type="text" placeholder="CELULAR">
                                    </div>
                            
                                    <div class="uk-margin select">
                                        <select class="uk-select">
                                            <option>RIO HATCHBACK</option>
                                            <option>RIO HATCHBACK 2</option>
                                        </select>
                                    </div>
                                </fieldset>

                                <div class="boton">
                                    <button class="uk-button uk-width-1-1 uk-margin-small-bottom">ENVIAR</button>
                                </div>    
                            </form>
                        </div>
                    </div>
                    <div class="uk-width-auto@m uk-visible@m">
                        <div class="uk-card uk-card-body"></div>
                    </div>

                    <div class="uk-width-1-1@m banner">
                        <div class="uk-text-center uk-margin-remove" uk-grid>
                            <div class="uk-width-1-1@m linea">
                                <p>SÍGUENOS EN LÍNEA</p>
                            </div>
                            <div class="uk-width-1-5@m uk-margin-remove relleno uk-visible@m"></div>
                            <div class="uk-width-expand@m uk-margin-remove uk-padding-remove redes">
                                <div class="uk-card uk-flex uk-flex-middle uk-flex-around subred">
                                    <a href=""><img src="./image/YOU TUBE.png" alt=""></a>
                                    <a href="https://www.instagram.com/kia.altaria/" target="_blank"><img src="./image/INSTAGRAM.png" alt=""></a>
                                    <a href="https://vm.tiktok.com/ZMex84YMJ/" target="_blank"><img src="./image/TIK TOK.png" alt=""></a>
                                    <a href="https://www.facebook.com/KIAAltariaAgs/" target="_blank"><img src="./image/FACEBOOK.png" alt=""></a>
                                    <a href="https://dealers.kia.com/mx/altaria" style="text-decoration: none" target="_blank"><p>kiaaltaria</p></a>
                                </div>
                            </div>
                            <div class="uk-width-expand@m uk-margin-remove uk-padding-remove what">
                                <div class="uk-card uk-flex uk-flex-middle uk-flex-center subwhat">
                                <a style="text-decoration: none;" href="https://api.whatsapp.com/send?phone=+524491039115" class="btn-wsp uk-flex uk-flex-middle uk-flex-center" target="_blank"><img src="./image/WhatsApp.png" alt=""></a>
                                    <a style="text-decoration: none;" href="https://api.whatsapp.com/send?phone=+524491039115" class="btn-wsp uk-flex uk-flex-middle uk-flex-center" target="_blank"><p>449 454 5692</p></a>
                                </div>
                            </div>
                            <div class="uk-width-1-5@m uk-margin-remove relleno"></div>
                        </div>
                        <div class="uk-width-1-1@m uk-margin-remove uk-padding-remove uk-flex uk-flex-middle uk-flex-center web">
                            <div class="uk-card uk-flex uk-flex-center">
                                <a href="https://dealers.kia.com/mx/altaria" target="_blank"><img src="./image/WEB.png" alt=""></a>
                                <a href="https://dealers.kia.com/mx/altaria" style="text-decoration: none" target="_blank"><p>https://dealers.kia.com/mx/altaria/main.html</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="seccion3">

                <div class="uk-text-center carousel" uk-grid>
                    <div class="uk-width-1-1@m">
                        <p>GALERIA</p>
                        <div uk-slider="center: false; autoplay: true; autoplay-interval: 1000;">
                            <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-4@m uk-grid">
                                <li>
                                    <div class="uk-panel">
                                        <img src="./image/GALERIA 1.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <img src="./image/GALERIA 2.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <img src="./image/GALERIA 3.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <img src="./image/GALERIA 4.jpg" alt="">
                                    </div>
                                </li>
                                <li>
                                    <div class="uk-panel">
                                        <img src="./image/GALERIA 3.jpg" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="uk-width-1-4@m"></div>
                    <div class="uk-width-expand@m video">
                        <p>VIDEO</p>
                        <div class="uk-card uk-card-body">
                            <iframe src="https://www.youtube-nocookie.com/embed/c2pz2mlSfXA?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" frameborder="0" allowfullscreen uk-responsive uk-video="automute: false"></iframe>
                        </div>
                    </div>
                    <div class="uk-width-1-4@m "></div>
                </div>

                <div class="uk-text-center" uk-grid>
                    <div class="uk-width-1-4@m uk-visible@m"></div>
                    <div class="uk-width-expand@m redes">
                        <p>COMPARTIR</p>
                        <div class="uk-card uk-flex uk-flex-middle uk-flex-center icon">
                            <a href="https://www.facebook.com/KIAAltariaAgs/" target="_blank"><img src="./image/FACEBOOK.png" alt=""></a>
                            <a href="https://twitter.com/kiaaltaria" target="_blank"><img src="./image/TWITER.png" alt=""></a>
                            <a href=""><img src="./image/linkendl.png" alt=""></a>
                            <a href="https://www.instagram.com/kia.altaria/" target="_blank"><img src="./image/INSTAGRAM.png" alt=""></a>
                        </div>
                    </div>
                    <div class="uk-width-1-4@m"></div>
                </div>

                <div class="uk-text-center agenda" uk-grid>
                    <div class="uk-width-1-4@m"></div>
                    <div class="uk-width-expand@m container-agenda"> 
                        <div class="uk-card">
                            <img src="./image/contacto.png" alt="">
                            <p>AGRÉGAME A TUS CONTACTOS</p>
                        </div>
                    </div>
                    <div class="uk-width-1-4@m"></div>
                </div>
                
                <div class="uk-text-center mapa" uk-grid>
                    <div class="uk-width-1-4@m"></div>
                    <div class="uk-width-expand@m uk-margin-remove uk-padding-remove logo-mapa">
                        <div class="uk-card uk-flex uk-flex-middle uk-flex-center">
                            <p>KIA ALTARIA</p>
                            <a href="https://g.page/KiaAltaria?share" target="_blank"><img src="./image/maps.png" alt=""></a>
                        </div>
                    </div>
                    <div class="uk-width-1-4@m"></div>
                    <div class="uk-width-1-1@m uk-margin-remove">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3701.237661372415!2d-102.30178508546784!3d21.925413085519615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ef070520a7f5%3A0x750484dd577356b6!2sKIA%20Altaria!5e0!3m2!1ses-419!2smx!4v1641506164188!5m2!1ses-419!2smx"  style="border:0; width: 100%; height: 22em;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

            </section>
            
            <?php include './vistas/footer.php';?>
        </div>
       

        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/css/uikit.min.css" />

        <!-- UIkit JS -->
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.9.4/dist/js/uikit-icons.min.js"></script>
    </body>
</html>