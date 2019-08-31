<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bikeshop</title>
    <link rel="shortcut icon"  href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon_bike.png" type="images/png">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/ekko-lightbox.css">
    <link href="css/layout.css" rel="stylesheet" type="text/css" />
    <link href="style.css" rel="stylesheet" type="text/css" /> -->

    <?php wp_head(); ?>

    <script src="<?php echo get_template_directory_uri(); ?>/js/preloader.js"></script>

    <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter53083300 = new Ya.Metrika({ id:53083300, clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/53083300" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->



</head>

<body>


    <div id="page-preloader" class="preloader">
        <div class="bicycle-container">
            <div class="wheel back-wheel">
                <div class="tire"></div>
                <div class="rim"></div>
                <div class="spokes"></div>
                <div class="spokes"></div>
                <div class="hub"></div>
            </div>
            <div class="wheel front-wheel">
                <div class="tire"></div>
                <div class="rim"></div>
                <div class="spokes"></div>
                <div class="spokes"></div>
                <div class="hub"></div>
            </div>
            <div class="gear">
                <div class="gear-red"></div>
                <div class="tube pedal-tube"></div>
                <div class="pedal"></div>
            </div>
            <div class="tube chain-tube"></div>
            <div class="tube seat-tube-back"></div>
            <div class="tube seat-tube-front"></div>
            <div class="tube seat-tube-post"></div>
            <div class="tube top-tube"></div>
            <div class="tube top-handlebar-tube"></div>
            <div class="tube top-handlebar-tube2"></div>
            <div class="tube down-tube"></div>
            <div class="tube head-tube"></div>
            <div class="tube head-tube-post"></div>
            <div class="saddle"></div>
            <div class="handlebars"></div>
        </div>
        <div class="loading-text">Loading...</div>
    </div>

    <section class="home">

        <div class="video-container d-none d-md-none d-lg-block">
            <video class="homevideo" id="video" poster="<?php echo get_template_directory_uri(); ?>/assets/video/vbike.jpg" muted="muted" autoplay loop>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/vbike.ogv" type='video/ogg; codecs="theora, vorbis"'>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/vbike.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/video/vbike.webm" type='video/webm; codecs="vp8, vorbis"'>
            </video>
        </div>

        <div id="home_menu" class="homeHeader">
            <div class="homeHeaderLogo">
                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pictures/Bikeshop.png" alt="Bikeshop.png"></a>
            </div>
            <div class="homeHeaderWrap">
                <a href="#bikes">Bikes</a>
                <a href="#components">Components</a>
                <a href="#accesories">Accesories</a>
            </div>

            <div class="homeHeaderBasket">
                <a href="#basket">
                    <svg class="shoping-basket" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="isolation:isolate" viewBox="0 0 27 25" width="27" height="25">
                        <defs>
                            <clipPath id="_clipPath_2Td1Q1JHGz9p77qQGDpQ1tZlX7qNwKUv">
                                <rect width="27" height="25" />
                            </clipPath>
                        </defs>
                        <g clip-path="url(#_clipPath_2Td1Q1JHGz9p77qQGDpQ1tZlX7qNwKUv)">
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <path d=" M 26.658 3.257 C 26.39 2.953 26.004 2.778 25.597 2.778 L 6.215 2.778 L 5.941 1.161 C 5.829 0.492 5.244 0 4.558 0 L 1.403 0 C 0.627 0 0 0.621 0 1.389 C 0 2.157 0.627 2.778 1.403 2.778 L 3.37 2.778 L 5.979 18.283 C 5.99 18.346 6.023 18.397 6.042 18.456 C 6.065 18.529 6.083 18.599 6.118 18.665 C 6.163 18.757 6.223 18.835 6.286 18.914 C 6.33 18.968 6.369 19.022 6.42 19.069 C 6.501 19.144 6.595 19.197 6.69 19.25 C 6.744 19.279 6.79 19.318 6.847 19.34 C 7.01 19.406 7.181 19.444 7.362 19.444 C 7.364 19.444 22.792 19.444 22.792 19.444 C 23.568 19.444 24.195 18.824 24.195 18.056 C 24.195 17.287 23.568 16.667 22.792 16.667 L 8.552 16.667 L 8.319 15.278 L 24.195 15.278 C 24.893 15.278 25.485 14.769 25.583 14.086 L 26.986 4.364 C 27.043 3.964 26.923 3.56 26.658 3.257 Z  M 23.98 5.556 L 23.58 8.333 L 18.584 8.333 L 18.584 5.556 L 23.98 5.556 Z  M 17.182 5.556 L 17.182 8.333 L 12.974 8.333 L 12.974 5.556 L 17.182 5.556 Z  M 17.182 9.722 L 17.182 12.5 L 12.974 12.5 L 12.974 9.722 L 17.182 9.722 Z  M 11.571 5.556 L 11.571 8.333 L 7.364 8.333 C 7.289 8.333 7.222 8.354 7.156 8.375 L 6.682 5.556 L 11.571 5.556 Z  M 7.383 9.722 L 11.571 9.722 L 11.571 12.5 L 7.85 12.5 L 7.383 9.722 Z  M 18.584 12.5 L 18.584 9.722 L 23.378 9.722 L 22.979 12.5 L 18.584 12.5 Z " />
                                            <ellipse vector-effect="non-scaling-stroke" cx="9.467517473282866" cy="22.916666666666664" rx="2.1038927718406364" ry="2.083333333333332" />
                                            <ellipse vector-effect="non-scaling-stroke" cx="22.090874104326694" cy="22.916666666666664" rx="2.1038927718406377" ry="2.083333333333332" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <div>Basket <span>(0)</span></div>
                </a>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Lorem ipsum dolor sit amet consectetur adipisicing</h1>
                </div>
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                </div>
                <div class="col-12">
                    <div class="homePlay d-none d-md-none d-lg-block" id="play-pause">
                        <svg class="play_icon" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                            <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M45.563,30.826l-22,15
                        	C23.394,45.941,23.197,46,23,46c-0.16,0-0.321-0.038-0.467-0.116C22.205,45.711,22,45.371,22,45V15c0-0.371,0.205-0.711,0.533-0.884
                        	c0.328-0.174,0.724-0.15,1.031,0.058l22,15C45.836,29.36,46,29.669,46,30S45.836,30.64,45.563,30.826z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section id="bikes" class="ourHistory">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-6 offset-lg-1 col-lg-5 offset-xl-2 col-xl-4">
                    <div class="ourHistoryWrap">
                        <h2>Lorem ipsum dolor sit amet consectetur!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum consequatur, beatae voluptatum. Error, tempore soluta. Fuga mollitia molestiae, perferendis illum veritatis dignissimos odit ea at dicta, nemo veniam rem
                            enim sunt possimus?</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quis dolorum possimus, aliquam mollitia nam error suscipit labore assumenda. Vitae consequuntur tempora ipsam dignissimos atque consectetur eos, itaque.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="btnWrap d-block d-md-none d-lg-block">
                            <a href="http://den2.qoobeo.ru/read-more/">
                                <div class="button ourHistory-btn">Read more</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="offset-sm-6 col-sm-6 offset-md-0 col-md-6 col-lg-6">
                    <div class="historyImgWrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pictures/our_history_bike_1.jpg" alt="our_history_bike_1.jpg">
                        <div class="btnWrap d-none d-md-block d-lg-none">
                            <a href="#">
                                <div class="button ourHistory-btn">Read more</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ourHistory576">
                <div class="emptyWrap col-sm-6 col-md-6 col-lg-6 d-none d-md-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pictures/our_history_bike_2.png" alt="our_history_bike_2.png">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4">
                    <p class="row2P">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus architecto, reiciendis cum! Rerum, tenetur nemo quisquam repellat fugit nihil quidem non. Dicta labore officiis aut ipsam sed cupiditate
                        delectus suscipit quasi dignissimos sunt laboriosam, voluptatum, officia.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="components" class="features">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="featuresTitle">
                        <h2>Lorem ipsum dolor sit amet, consectetur!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum praesentium facilis rerum dolores maiores placeat non quas eveniet, omnis porro! Deserunt quasi earum ratione cupiditate nemo animi nisi nobis ea ullam alias
                            ad, sapiente vitae temporibus.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="featuresBlock col-12 col-sm-2 col-md-2 col-lg-2 d-none d-md-block">
                    <div class="buttonsBlockWrap">
                        <div class="buttonsBlock">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/features_icon_1.png" alt="features_icon_1.png">
                            </a>
                            <a class="a1" href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/features_icon_3.png" alt="features_icon_3.png">
                            </a>
                            <a class="a1" href="#">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/features_icon_2.png" alt="features_icon_2.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="featuresBlock col-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="bodyBlock">
                        <div class="bodyBlock__point bodyBlock__point--one"  href="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_1.jpg" data-toggle="lightbox" data-gallery="example-gallery1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_plus.png" alt="litebox_plus.png">
                        </div>
                        <div class="bodyBlock__point bodyBlock__point--two"  href="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_2.jpg" data-toggle="lightbox" data-gallery="example-gallery1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_plus.png" alt="litebox_plus.png">
                        </div>
                        <div class="bodyBlock__point bodyBlock__point--three"  href="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_3.jpg" data-toggle="lightbox" data-gallery="example-gallery1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_plus.png" alt="litebox_plus.png">
                        </div>
                        <div class="bodyBlock__point bodyBlock__point--four"  href="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_4.jpg" data-toggle="lightbox" data-gallery="example-gallery1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_plus.png" alt="litebox_plus.png">
                        </div>
                        <div class="bodyBlock__point bodyBlock__point--five"  href="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_5.jpg" data-toggle="lightbox" data-gallery="example-gallery1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_plus.png" alt="litebox_plus.png">
                        </div>
                        <div class="bodyBlock__point bodyBlock__point--six"  href="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_6.jpg" data-toggle="lightbox" data-gallery="example-gallery1">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_plus.png" alt="litebox_plus.png">
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pictures/features_bike.png" alt="features_bike.png">
                    </div>
                </div>
                <div class="featuresBlock col-12 col-sm-12 col-md-2 col-lg-2">
                    <div class="detailsBlockWrap">
                        <div class="detailsBlock">
                            <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_5.jpg" data-toggle="lightbox" data-gallery="example-gallery1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pictures/features_details_1.png" alt="features_details_1.png">
                            </a>
                            <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_1.jpg" data-toggle="lightbox" data-gallery="example-gallery1">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pictures/features_details_2.png" alt="features_details_2.png">
                            </a>
                            <a  href="<?php echo get_template_directory_uri(); ?>/assets/img/litebox/litebox_2.jpg" data-toggle="lightbox" data-gallery="example-gallery2">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pictures/features_details_3.png" alt="features_details_3.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="accesories" class="components">
        <div class="container-fluid">
            <div class="row">
                <div class="componentsTitle col-12 col-sm-12 col-md-12 col-lg-12">
                    <h2>Lorem ipsum dolor sit amet, consectetur!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum praesentium facilis rerum dolores maiores placeat non quas eveniet, omnis porro! Deserunt quasi earum ratione cupiditate nemo animi nisi nobis ea ullam alias ad,
                        sapiente vitae temporibus.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="components-slider">
                <div class="components-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pictures/componentsElement_1.png" alt="componentsElement_1.png">
                    <h3>Lorem ipsun dolor sit <span>$135</span></h3>
                    <div class="btnSliderWrap">
                        <a href="#">
                            <div class="button btn_components">Buy now</div>
                        </a>
                    </div>
                </div>
                <div class="components-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pictures/componentsElement_2.png" alt="componentsElement_2.png">
                    <h3>Lorem ipsun dolor sit <span>$135</span></h3>
                    <div class="btnSliderWrap">
                        <a href="#">
                            <div class="button btn_components">Buy now</div>
                        </a>
                    </div>
                </div>
                <div class="components-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pictures/componentsElement_3.png" alt="componentsElement_3.png">
                    <h3>Lorem ipsun dolor sit <span>$135</span></h3>
                    <div class="btnSliderWrap">
                        <a href="#">
                            <div class="button btn_components">Buy now</div>
                        </a>
                    </div>
                </div>
                <div class="components-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pictures/componentsElement_4.png" alt="componentsElement_4.png">
                    <h3>Lorem ipsun dolor sit <span>$135</span></h3>
                    <div class="btnSliderWrap">
                        <a href="#">
                            <div class="button btn_components">Buy now</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="basket" class="subscribeFooter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe">
                        <h2>Subscribe our newsletter</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus possimus ipsam quod culpa natus voluptatem quibusdam atque, aliquid sit blanditiis! Maiores sapiente nesciunt quas quia.</p>
                        <div class="buttonWrapper">
                            <input type="email" value size="40" placeholder="Your email adress...">
                            <a href="http://den2.qoobeo.ru/subscribe/">
                                <div class="button btn_subscribe">Subscribe</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer">
                        <p class="pTop">Copyright © 2016. All rights reserved</p>
                        <p class="pBot">Designer by Symu.co</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!--Scripts-->

    <!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/ekko-lightbox.min.js"></script>
    <script src="js/main.js"></script> -->


<?php wp_footer(); ?>

</body>

</html>
