<?php
    include 'contentEditable.php'
?>

<!doctype html>

<html lang="en">


<head>


    <!-- META -->
    <meta charset="utf-8">
    <meta name="robots" content="noodp">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- PAGE TITLE -->
    <title>Elizabeth Wood</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface%7CArapey&amp;subset=latin-ext" rel="stylesheet">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">


</head>


<body>


    <!-- PRELOADER -->
    <div class="preloader">

        <div class="spinner"></div>

    </div>
    <!-- /PRELOADER -->


    <!-- IMAGE CONTAINER -->
    <div class="image-container">

        <div class="background-img"></div>

    </div>
    <!-- /IMAGE CONTAINER -->


    <!-- CONTENT AREA -->
    <div class="content-area">


        <!-- CONTENT AREA INNER -->
        <div class="content-area-inner">


            <!-- INTRO -->
            <section id="intro">
                <!-- CONTAINER MID -->
                <div class="container-mid">
                    <!-- ANIMATION CONTAINER -->
                    <div class="animation-container animation-fade-down" data-animation-delay="0">
                        <h1 contentEditable="<?=($admin) ? 'true' : 'false' ?>" data-text-key="intro-text-1"><?=$text['intro-text-1']?></h1>
                    </div>
                    <!-- /ANIMATION CONTAINER -->

                    <!-- ANIMATION CONTAINER -->
                    <div class="animation-container animation-fade-left" data-animation-delay="300">
                        <p class="subline" contentEditable="<?=($admin) ? 'true' : 'false' ?>" data-text-key="intro-text-2"><?=$text['intro-text-2']?></p>
                    </div>
                    <!-- /ANIMATION CONTAINER -->

                    <!-- ANIMATION CONTAINER -->
                    <div class="animation-container animation-fade-up" data-animation-delay="600">
                        <a href="#about" class="smooth-scroll">Learn More<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                    <!-- /ANIMATION CONTAINER -->
                </div>
                <!-- /CONTAINER MID -->
            </section>
            <!-- /INTRO -->


            <!-- ABOUT -->
            <section id="about">

                <h3 class="headline scroll-animated-from-right" contentEditable="<?=($admin) ? 'true' : 'false' ?>" data-text-key="about-text-1"><?=$text['about-text-1']?></h3>
                <p class="scroll-animated-from-right"contentEditable="<?=($admin) ? 'true' : 'false' ?>" data-text-key="about-text-2"><?=$text['about-text-2']?></p>
                <p class="scroll-animated-from-right" contentEditable="<?=($admin) ? 'true' : 'false' ?>" data-text-key="about-text-3"><?=$text['about-text-3']?></p>

            </section>
            <!-- /ABOUT -->



            <section id="service">


                <h3 class="headline scroll-animated-from-right" contentEditable="<?=($admin) ? 'true' : 'false' ?>" data-text-key="service-text-1"><?=$text["service-text-1"]?></h3>


                <ul class="services-list">


                    <li class="scroll-animated-from-right">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <span contentEditable="<?=($admin) ? 'true' : 'false' ?>" data-text-key="service-text-2"><?=$text["service-text-2"]?></span>
                    </li>
                    <!-- <li class="scroll-animated-from-right"><i class="fa fa-eye" aria-hidden="true"></i>Small turnkey
                        home construction projects
                    </li> -->
                    <!-- <li class="scroll-animated-from-right"><i class="fa fa-database" aria-hidden="true"></i>Turnkey
                        Website Development</li> -->
                    <li class="scroll-animated-from-right">
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <span contentEditable="<?=($admin) ? 'true' : 'false' ?>" data-text-key="service-text-3"><?=$text["service-text-3"]?></span>
                    </li>
                    <!--<li class="scroll-animated-from-right"><i class="fa fa-square-o" aria-hidden="true"></i>UI & UX
                        Design</li>


                </ul>


            </section>
            <-- /SERVICE -->


                    <!-- WORK -->
                    <!-- <section id="work"> -->


                    <!-- <h3 class="headline scroll-animated-from-right">My latest Work.</h3> -->


                    <!-- SHOWCASE -->
                    <!-- <div class="showcase"> -->


                    <!-- ITEM -->
                    <!-- <div class="item scroll-animated-from-right"> -->


                    <!-- LIGHTBOX LINK -->
                    <!-- <a href="#" data-featherlight="#item-1-lightbox"> -->


                    <!-- INFO -->
                    <!-- <div class="info"> -->


                    <!-- CONTAINER MID -->
                    <!-- <div class="container-mid">

                                        <h5>Fashion Inc.</h5>
                                        <p>Web Design</p>

                                    </div> -->
                    <!-- /CONTAINER MID -->


                    <!-- </div> -->
                    <!-- /INFO -->


                    <!-- <div class="background-image" style="background-image: url(assets/img/work/item-1.jpg)">
                                </div> -->


                    <!-- </a> -->
                    <!-- /LIGHTBOX LINK -->


                    <!-- LIGHTBOX -->
                    <!-- <div id="item-1-lightbox" class="work-lightbox">


                                <img class="img-responsive" src="PM Portfolio Elizabeth/photos/profphoto.jpg"
                                    alt="image">

                                <h3>Fashion Inc.</h3>
                                <p class="subline">Web Design</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper faucibus
                                    eros,
                                    quis
                                    imperdiet sapien. Nam sodales nec risus nec interdum. Proin lobortis, ex
                                    condimentum
                                    ultricies eleifend, nisl nunc sollicitudin odio, eget egestas est turpis et
                                    metus.
                                    In
                                    non ligula quis mauris rutrum porta.</p> -->


                    <!-- </div> -->
                    <!-- /LIGHTBOX -->


                    <!-- </div> -->
                    <!-- /ITEM -->


                    <!-- ITEM -->
                    <!-- <div class="item scroll-animated-from-right"> -->


                    <!-- LIGHTBOX LINK -->
                    <!-- <a href="#" data-featherlight="#item-2-lightbox"> -->


                    <!-- INFO -->
                    <!-- <div class="info"> -->


                    <!-- CONTAINER MID -->
                    <!-- <div class="container-mid">

                                        <h5>Asimov 71</h5>
                                        <p>Product Design</p>

                                    </div> -->
                    <!-- /CONTAINER MID -->


                    <!-- </div> -->
                    <!-- /INFO -->


                    <!-- <div class="background-image" style="background-image: url(assets/img/work/item-2.jpg)">
                                </div>


                            </a> -->
                    <!-- /LIGHTBOX LINK -->


                    <!-- LIGHTBOX -->
                    <!-- <div id="item-2-lightbox" class="work-lightbox">


                                <img class="img-responsive" src="assets/img/work/item-2.jpg" alt="image">

                                <h3>Asimov 71</h3>
                                <p class="subline">Product Design</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper faucibus
                                    eros,
                                    quis
                                    imperdiet sapien. Nam sodales nec risus nec interdum. Proin lobortis, ex
                                    condimentum
                                    ultricies eleifend, nisl nunc sollicitudin odio, eget egestas est turpis et
                                    metus.
                                    In
                                    non ligula quis mauris rutrum porta.</p> -->


                    <!-- </div> -->
                    <!-- /LIGHTBOX -->


                    <!-- </div> -->
                    <!-- /ITEM -->


                    <!-- ITEM -->
                    <!-- <div class="item scroll-animated-from-right"> -->


                    <!-- LIGHTBOX LINK -->
                    <!-- <a href="#" data-featherlight="#item-3-lightbox"> -->


                    <!-- INFO -->
                    <!-- <div class="info"> -->


                    <!-- CONTAINER MID -->
                    <!-- <div class="container-mid">

                                        <h5>Hardley &amp; Sons</h5>
                                        <p>Design Direction</p> -->

                    <!-- </div> -->
                    <!-- /CONTAINER MID -->


                    <!-- </div> -->
                    <!-- /INFO -->


                    <!-- <div class="background-image" style="background-image: url(assets/img/work/item-3.jpg)">
                                </div> -->


                    <!-- </a> -->
                    <!-- /LIGHTBOX LINK -->


                    <!-- LIGHTBOX -->
                    <!-- <div id="item-3-lightbox" class="work-lightbox">


                                <img class="img-responsive" src="assets/img/work/item-3.jpg" alt="image">

                                <h3>Hardley &amp; Sons</h3>
                                <p class="subline">Design Direction</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper faucibus
                                    eros,
                                    quis
                                    imperdiet sapien. Nam sodales nec risus nec interdum. Proin lobortis, ex
                                    condimentum
                                    ultricies eleifend, nisl nunc sollicitudin odio, eget egestas est turpis et
                                    metus.
                                    In
                                    non ligula quis mauris rutrum porta.</p>


                            </div> -->
                    <!-- /LIGHTBOX -->


                    <!-- </div> -->
                    <!-- /ITEM -->


                    <!-- ITEM -->
                    <!-- <div class="item scroll-animated-from-right">
 -->

                    <!-- LIGHTBOX LINK -->
                    <!-- <a href="#" data-featherlight="#item-4-lightbox"> -->


                    <!-- INFO -->
                    <!-- <div class="info"> -->


                    <!-- CONTAINER MID -->
                    <!-- <div class="container-mid">

                                        <h5>Starnation</h5>
                                        <p>UI/UX DESIGN</p>

                                    </div> -->
                    <!-- /CONTAINER MID -->


                    <!-- </div> -->
                    <!-- /INFO -->


                    <!-- <div class="background-image" style="background-image: url(assets/img/work/item-4.jpg)">
                                </div>


                            </a> -->
                    <!-- /LIGHTBOX LINK -->


                    <!-- LIGHTBOX -->
                    <!-- <div id="item-4-lightbox" class="work-lightbox">


                                <img class="img-responsive" src="assets/img/work/item-4.jpg" alt="image">

                                <h3>Starnation</h3>
                                <p class="subline">UI/UX DESIGN</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper faucibus
                                    eros,
                                    quis
                                    imperdiet sapien. Nam sodales nec risus nec interdum. Proin lobortis, ex
                                    condimentum
                                    ultricies eleifend, nisl nunc sollicitudin odio, eget egestas est turpis et
                                    metus.
                                    In
                                    non ligula quis mauris rutrum porta.</p>


                            </div> -->
                    <!-- /LIGHTBOX -->


                    <!-- </div> -->
                    <!-- /ITEM -->


                    <!-- </div> -->
                    <!-- /SHOWCASE -->

                    <!-- 
                    </section> -->
                    <!-- /WORK
 -->

                    <!-- CONTACT -->
                    <section id="contact">


                        <h3 class="headline scroll-animated-from-right" contentEditable="<?=($admin) ? 'true' : 'false' ?>" data-text-key="contacts-text-1"><?=$text["contacts-text-1"]?></h3>


                        <!-- CONTACT LIST -->
                        <ul class="contact-list">

                            <li class="scroll-animated-from-right">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                <span contentEditable="<?=($admin) ? 'true' : 'false' ?>" data-text-key="contacts-text-2"><?=$text["contacts-text-2"]?></span>

                            </li>
                            <li class="scroll-animated-from-right">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <span contentEditable="<?=($admin) ? 'true' : 'false' ?>" data-text-key="contacts-text-3"><?=$text["contacts-text-3"]?></span>
                            </li>

                        </ul>
                        <!-- /CONTACT LIST -->


                        <!-- CONTACT FORM -->
                        <form id="contact-form">


                            <input id="contact-form-name" type="text" name="name"
                                class="form-control scroll-animated-from-right" placeholder="* Your Name" required>

                            <input id="contact-form-email" type="text" name="email"
                                class="form-control scroll-animated-from-right" placeholder="* Your Email" required>


                            <textarea id="contact-form-message" name="message"
                                class="form-control scroll-animated-from-right" placeholder="* Your Message"></textarea>

                            <button type="submit" class="form-control scroll-animated-from-right">Send Mail</button>

                        </form>
                        <div class="success-message hide" id="contact-form-success">* The Email was Sent Successfully!
                        </div>
                        <!-- /CONTACT FORM -->


                    </section>
                    <!-- /CONTACT -->


                    <!-- FOOTER -->
                    <section id="footer">


                        <!-- SOCIAL ICONS -->
                        <ul class="social-icons scroll-animated-from-right">


                            <!-- <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
                            <li><a href="https://www.linkedin.com/in/elizabeth-wood-323737152/"><i
                                        class="fa fa-linkedin" aria-hidden="true"></i></a></li>


                        </ul>
                        <!-- /SOCIAL ICONS -->


                        <p class="scroll-animated-from-right">© 2024 Branded by E | Design by Template Foundation</p>


                    </section>
                    <!-- /FOOTER -->


        </div>
        <!-- /CONTENT AREA INNER -->


    </div>
    <!-- /CONTENT AREA -->


    <? if ($admin == true) { ?>
    <button class="button-save-text">Save text</button>
    <? } ?>
    
    <!-- JAVASCRIPTS -->
    <script type="text/javascript" src="assets/js/plugins.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
    <? if ($admin == true) { ?>
        <script type="text/javascript" src="assets/js/contentEditable.js"></script>
    <? } ?>


</body>


</html>