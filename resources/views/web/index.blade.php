<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bauhaus - OnePage Architecture & Interior HTML Template">
    <meta name="author" content="Paul">

    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

    <title>Bauhaus - OnePage Architecture & Interior HTML Template</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/style.css" rel="stylesheet" media="screen">
</head>

<body>

    <!-- Loader -->
    <div class="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <div class="wrapper boxed">

        <!-- Content CLick Capture-->
        <div class="click-capture"></div>

        <!-- Sidebar Menu-->
        <div class="menu">

            <nav class="nav mobile-menu">
                <ul class="menu-list right-boxed">
                    <li>
                        <a href="#main">Inicio</a>
                    </li>
                    <li>
                        <a href="#about">Sobre Nosotros</a>
                    </li>
                    <li>
                        <a href="#projects">Proyectos</a>
                    </li>
                    <li>
                        <a href="#clients">Clientes</a>
                    </li>
                    <li>
                        <a href="#team">Equipo</a>
                    </li>
                    <li>
                        <a href="#contacts">Contactanos</a>
                    </li>
                </ul>
            </nav>
            <div class="menu-footer right-boxed">
                <div class="social-list">
                    @foreach ($redes_sociales as $item)
                        <a href="{{ $item->link }}" class="{{ $item->icono }}"></a>
                    @endforeach
                </div>
                <div class="copy">© Bauhaus 2019. All Rights Reseverd<br> Design by LoganCee</div>
            </div>
        </div>

        <!-- Navbar -->

        @include('web.header', ['redes_sociales' => $redes_sociales])

        <!-- Main Jumbotron -->
        <main id="main" class="jumbotron">

            @include('web.partials.slider', ['slider' => $slider])

        </main>

        <div class="content">

            <!-- Section About -->
            <section id="about" class="section section-about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="section-subtitle">about us</strong>
                            <h2 class="section-title section-about-title">We Are The Leader In The Architectural</h2>
                            <p>For each project we establish relationships with partners who we know will help us create
                                added value for your project. As well as bringing together the public and private
                                sectors, we make sector-overarching links to gather knowledge and to learn from each
                                other</p>
                            <div class="experience-box">
                                <div class="experience-border"></div>
                                <div class="experience-content">
                                    <div class="experience-number">26</div>
                                    <div class="experience-info">Years<br>Experience<br>Working</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <div class="dots-image">
                                <img alt="" class="about-img img-responsive" src="images/1-470x660.jpg">
                                <div class="dots"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section bg-dots">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-info">
                                <div class="title-hr wow fadeInLeft"></div>
                                <div class="info-title">What We Do</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row-services row">
                                <div class="col-service col-sm-6 col-lg-4 wow fadeInUp">
                                    <span class="text-dark icon icon-apartment"></span>
                                    <h4>Architecture</h4>
                                    <p>First stages in a project are very important to understand your client´s needs.
                                        With many different tools we approach.</p>
                                </div>
                                <div class="col-service col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <span class="text-dark icon icon-couch"></span>
                                    <h4>Interior Design</h4>
                                    <p>Once in the design process, we must go deeper in your project´s foundation, we
                                        need to arrive to the essence.</p>
                                </div>
                                <div class="clearfix visible-sm visible-md"></div>
                                <div class="col-service col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="text-dark icon icon-pencil-ruler"></span>
                                    <h4>Plants</h4>
                                    <p>Once in the design process, we must go deeper in your project´s foundation, we
                                        need to arrive to the essence, the roots in order.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Projects -->
            <section id="projects" class="section-projects section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h2 class="section-title">Últimos proyectos</h2>
                        </div>
                        <div class="col-lg-7">
                            <div class="filter-content">
                                <ul class="filter-carousel filter pull-lg-right js-filter-carousel">
                                    <li class="active"><a href="#" class="all" data-filter="*">Todos</a></li>
                                    @foreach ($tipo_proyectos as $item)
                                        <li><a href="#" data-filter=".{{ $item->slug }}">{{ $item->nombre }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                @include('web.partials.proyectos_carousel', ['proyectos' => $proyectos])

               

            </section>

            <!-- Section Clients -->
            <section id="clients" class="section-clients section bg-dots">
                <div class="container">
                    <h2 class="section-title">From Great Our Clients</h2>
                    <div class="client-carousel owl-carousel">
                        <div class="client-carousel-item">
                            <img alt="" class="client-img" src="images/1-92x92.jpg">
                            <div class="client-box">
                                <img alt="" class="image-quote" src="images/icon-quote.png">
                                <div class="client-title">
                                    <span class="client-name">Adam Stone</span>
                                    <span class="client-company">/ CEO at Google INC</span>
                                </div>
                                <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae
                                    nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima
                                    olatiup.</p>
                            </div>
                        </div>
                        <div class="client-carousel-item">
                            <img alt="" class="client-img" src="images/2-92x92.jpg">
                            <div class="client-box">
                                <img alt="" class="image-quote" src="images/icon-quote.png">
                                <div class="client-title">
                                    <span class="client-name">Anabella Kleva </span>
                                    <span class="client-company">/ Managerment at Envato</span>
                                </div>
                                <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae
                                    nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima
                                    olatiup.</p>
                            </div>
                        </div>
                        <div class="client-carousel-item">
                            <img alt="" class="client-img" src="images/1-92x92.jpg">
                            <div class="client-box">
                                <img alt="" class="image-quote" src="images/icon-quote.png">
                                <div class="client-title">
                                    <span class="client-name">Adam Stone</span>
                                    <span class="client-company">/ CEO at Google INC</span>
                                </div>
                                <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae
                                    nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima
                                    olatiup. Sed elit quam, iaculis sed semper sit amet udin vitae nibh</p>
                            </div>
                        </div>
                        <div class="client-carousel-item">
                            <img alt="" class="client-img" src="images/2-92x92.jpg">
                            <div class="client-box">
                                <img alt="" class="image-quote" src="images/icon-quote.png">
                                <div class="client-title">
                                    <span class="client-name">Adam Stone</span>
                                    <span class="client-company">/ CEO at Google INC</span>
                                </div>
                                <p class="client-description">Sed elit quam, iaculis sed semper sit amet udin vitae
                                    nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima
                                    olatiup.</p>
                            </div>
                        </div>
                    </div>
                    <div class="partner-carousel owl-carousel">
                        <div class="partner-carousel-item">
                            <img alt="" src="images/1.png">
                        </div>
                        <div class="partner-carousel-item">
                            <img alt="" src="images/2.png">
                        </div>
                        <div class="partner-carousel-item">
                            <img alt="" src="images/3.png">
                        </div>
                        <div class="partner-carousel-item">
                            <img alt="" src="images/4.png">
                        </div>
                        <div class="partner-carousel-item">
                            <img alt="" src="images/5.png">
                        </div>
                        <div class="partner-carousel-item">
                            <img alt="" src="images/1.png">
                        </div>
                        <div class="partner-carousel-item">
                            <img alt="" src="images/2.png">
                        </div>
                        <div class="partner-carousel-item">
                            <img alt="" src="images/3.png">
                        </div>
                        <div class="partner-carousel-item">
                            <img alt="" src="images/4.png">
                        </div>
                        <div class="partner-carousel-item">
                            <img alt="" src="images/5.png">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Team -->
            <section id="team" class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="section-info">
                                <div class="title-hr wow fadeInLeft"></div>
                                <div class="info-title">Meet Our Team</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row-team row">
                                <div class="col-team col-xs-6 col-md-4 wow fadeIn">
                                    <div class="team-profile">
                                        <img alt="" src="images/1-270x270.jpg">
                                        <div class="team-hover">
                                            <div class="team-content">
                                                <div class="team-name">
                                                    <h6>Alex Ferguson</h6>
                                                    <div class="team-spec">CEO Founder</div>
                                                </div>
                                                <div class="team-social">
                                                    <a href="" class="icon ion-social-twitter"></a>
                                                    <a href="" class="icon ion-social-facebook"></a>
                                                    <a href="" class="icon ion-social-linkedin"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-team col-xs-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-profile">
                                        <img alt="" src="images/2-270x270.jpg">
                                        <div class="team-hover">
                                            <div class="team-content">
                                                <div class="team-name">
                                                    <h6>Alex Ferguson</h6>
                                                    <div class="team-spec">CEO Founder</div>
                                                </div>
                                                <div class="team-social">
                                                    <a href="" class="icon ion-social-twitter"></a>
                                                    <a href="" class="icon ion-social-facebook"></a>
                                                    <a href="" class="icon ion-social-linkedin"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-team col-xs-6 col-md-4 wow fadeIn" data-wow-delay="0.6s">
                                    <div class="team-profile">
                                        <img alt="" src="images/3-270x270.jpg">
                                        <div class="team-hover">
                                            <div class="team-content">
                                                <div class="team-name">
                                                    <h6>Alex Ferguson</h6>
                                                    <div class="team-spec">CEO Founder</div>
                                                </div>
                                                <div class="team-social">
                                                    <a href="" class="icon ion-social-twitter"></a>
                                                    <a href="" class="icon ion-social-facebook"></a>
                                                    <a href="" class="icon ion-social-linkedin"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-team col-xs-6 col-md-4 wow fadeIn">
                                    <div class="team-profile">
                                        <img alt="" src="images/4-270x270.jpg">
                                        <div class="team-hover">
                                            <div class="team-content">
                                                <div class="team-name">
                                                    <h6>Alex Ferguson</h6>
                                                    <div class="team-spec">CEO Founder</div>
                                                </div>
                                                <div class="team-social">
                                                    <a href="" class="icon ion-social-twitter"></a>
                                                    <a href="" class="icon ion-social-facebook"></a>
                                                    <a href="" class="icon ion-social-linkedin"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-team col-xs-6 col-md-4 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-profile">
                                        <img alt="" src="images/5-270x270.jpg">
                                        <div class="team-hover">
                                            <div class="team-content">
                                                <div class="team-name">
                                                    <h6>Alex Ferguson</h6>
                                                    <div class="team-spec">CEO Founder</div>
                                                </div>
                                                <div class="team-social">
                                                    <a href="" class="icon ion-social-twitter"></a>
                                                    <a href="" class="icon ion-social-facebook"></a>
                                                    <a href="" class="icon ion-social-linkedin"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-team col-xs-6 col-md-4 wow fadeIn" data-wow-delay="0.6s">
                                    <div class="add-new-team">
                                        <div class="add-new-text">
                                            <div class="inner">submit<br>your<br>resume</div>
                                        </div>
                                        <form>
                                            <input type="file">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Contacts -->
            <section id="contacts">
                <div id="map" class="map"></div>
                <div class="section bg-dots">
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="section-info">
                                        <div class="title-hr wow fadeInLeft"></div>
                                        <div class="info-title">Keep in touch</div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="row-contact row">
                                        <div class="col-contact col-lg-6">
                                            <h3 class="contact-title contact-top">Melbourne, <span>Australia</span>
                                            </h3>
                                            <p class="contact-address text-muted"><strong>269 King Str, 05th Floor,
                                                    Utral Hosue Building, Melbourne, VIC 3000, Australia.</strong></p>
                                            <p class="contact-row"><strong class="text-dark">Email:</strong>
                                                info@bauhaus.co</p>
                                            <p class="contact-row"><strong class="text-dark">Skype:</strong>
                                                bauhaus.arc</p>
                                        </div>
                                        <div class="col-contact col-lg-6">
                                            <p class="contact-top"><strong class="text-muted">Call
                                                    directly:</strong></p>
                                            <p class="phone-lg text-dark">+99 (0) 344 956 4050</p>
                                            <div class="text-muted"><strong class="text-dark">Follow us</strong><br>
                                                <div class="contact-social social-list">
                                                    <a href="" class="icon ion-social-twitter"></a>
                                                    <a href="" class="icon ion-social-facebook"></a>
                                                    <a href="" class="icon ion-social-googleplus"></a>
                                                    <a href="" class="icon ion-social-linkedin"></a>
                                                    <a href="" class="icon ion-social-dribbble-outline"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section-message">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="section-info">
                                        <div class="title-hr wow fadeInLeft"></div>
                                        <div class="info-title">You need help?</div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <form class="js-form">
                                        <div class="row">
                                            <div class="form-group col-sm-6 col-lg-4">
                                                <input class="input-gray" type="text" name="name" required
                                                    placeholder="Name*">
                                            </div>
                                            <div class="form-group col-sm-6 col-lg-4">
                                                <input class="input-gray" type="email" name="email"
                                                    placeholder="Email">
                                            </div>
                                            <div class="form-group col-sm-12 col-lg-4">
                                                <input class="input-gray" type="text" name="subject"
                                                    placeholder="Subject (Optinal)">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <textarea class="input-gray" name="message" required placeholder="Message*"></textarea>
                                            </div>
                                            <div class="col-sm-12"><button type="submit"
                                                    class="btn-upper btn-yellow btn">Send Message</button></div>
                                        </div>
                                        <div class="success-message"><i class="fa fa-check text-primary"></i> Thank
                                            you!. Your message is successfully sent...</div>
                                        <div class="error-message">We're sorry, but something went wrong</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </div>

        <!-- Footer -->
        <footer id="footer" class="footer section">
            <div class="footer-flex">
                <div class="flex-item">
                    <a class="brand pull-left" href="#">
                        <img alt="" src="images/brand.png">
                        <div class="brand-info">
                            <div class="brand-name">bauhaus</div>
                            <div class="brand-text">architecture</div>
                        </div>
                    </a>
                </div>
                <div class="flex-item">
                    <div class="social-list pull-sm-right">
                        @foreach ($redes_sociales as $item)
                            <a href="{{ $item->link }}" class="{{ $item->icono }}"></a>
                        @endforeach
                    </div>
                </div>

                <div class="flex-item">
                    <div class="inline-block pull-sm-right">© Bauhaus 2019. All Rights Resevered</div>
                </div>
            </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/smoothscroll.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCwVuYiM-83l2IdjpT9uC0lg4jBm8-w4j8"></script>
    <script src="/js/gmap.js"></script>

    <!-- Slider revolution -->
    <script src="/js/rev-slider/jquery.themepunch.tools.min.js"></script>
    <script src="/js/rev-slider/jquery.themepunch.revolution.min.js"></script>

    <!-- Slider revolution 5x Extensions   -->
    <script src="/js/rev-slider/revolution.extension.actions.min.js"></script>
    <script src="/js/rev-slider/revolution.extension.carousel.min.js"></script>
    <script src="/js/rev-slider/revolution.extension.kenburn.min.js"></script>
    <script src="/js/rev-slider/revolution.extension.layeranimation.min.js"></script>
    <script src="/js/rev-slider/revolution.extension.migration.min.js"></script>
    <script src="/js/rev-slider/revolution.extension.navigation.min.js"></script>
    <script src="/js/rev-slider/revolution.extension.parallax.min.js"></script>
    <script src="/js/rev-slider/revolution.extension.slideanims.min.js"></script>
    <script src="/js/rev-slider/revolution.extension.video.min.js"></script>

    <!-- Scripts -->
    <script src="/js/rev-slider-init.js"></script>
    <script src="/js/scripts.js"></script>
</body>

</html>
