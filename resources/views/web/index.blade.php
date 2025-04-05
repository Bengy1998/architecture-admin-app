<!DOCTYPE html>
<html lang="es-PE">

<head>
    <!-- Configuración básica -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ========== SEO PRIMARIO ========== -->
    <title>Estudio de Arquitectura en Perú | Diseño Sostenible & Construcción | Bauhaus</title>
    <meta name="description" content="Estudio de arquitectura líder en Perú especializado en diseño bioclimático, construcción sostenible y proyectos urbanos. Transformamos espacios en Lima, Cusco y Arequipa.">

    <!-- Keywords (enfoque local) -->
    <meta name="keywords"
        content="arquitectura Perú, arquitectos Lima, diseño sostenible, construcción de casas Perú, estudio arquitectura Cusco, remodelación departamentos Miraflores, diseño bioclimático Perú">

    <!-- Autor y copyright -->
    <meta name="author" content="Bauhaus Arquitectura">
    <meta name="copyright" content="Bauhaus Arquitectura">

    <!-- Canonical -->
    <link rel="canonical" href="https://www.tudominio.com/">

    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">

    <!-- ========== OPEN GRAPH COMPLETO ========== -->
    <meta property="og:title" content="Estudio de Arquitectura Bauhaus | Perú">
    <meta property="og:description" content="Diseño arquitectónico sostenible para Lima y todo Perú. ¡Conócenos!">
    <meta property="og:image" content="https://www.tudominio.com/img/og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="Proyecto destacado de Bauhaus Arquitectura">
    <meta property="og:url" content="https://www.tudominio.com/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Bauhaus Arquitectura">
    <meta property="og:locale" content="es_PE">

    <!-- ========== GEOETIQUETAS PARA PERÚ ========== -->
    <meta name="geo.region" content="PE-LIM">
    <meta name="geo.placename" content="Lima">
    <meta name="geo.position" content="-12.046374;-77.042793">
    <meta name="ICBM" content="-12.046374, -77.042793">

    <!-- ========== SCHEMA MARKUP (JSON-LD) ========== -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ArchitecturalFirm",
        "name": "Bauhaus Arquitectura",
        "image": "https://www.tudominio.com/img/logo.jpg",
        "@id": "https://www.tudominio.com/#architect",
        "url": "https://www.tudominio.com/",
        "telephone": "+51 123 456 789",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Av. Arquitectura 123",
            "addressLocality": "Lima",
            "addressRegion": "Lima",
            "postalCode": "15001",
            "addressCountry": "PE"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "-12.046374",
            "longitude": "-77.042793"
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens": "09:00",
            "closes": "18:00"
        },
        "sameAs": [
            "https://www.facebook.com/tuestudio",
            "https://www.instagram.com/tuestudio",
            "https://www.linkedin.com/company/tuestudio"
        ]
    }
    </script>

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

        @include('web.header', ['redes_sociales' => $redes_sociales, 'configuracion' => $configuracion])

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
                            <strong class="section-subtitle">Sobre Nosotros</strong>
                            <h2 class="section-title section-about-title">{{ $sobre_nosotros->titulo }}</h2>
                            <p>{{ $sobre_nosotros->detalle }}</p>
                            <div class="experience-box">
                                <div class="experience-border"></div>
                                <div class="experience-content">
                                    <div class="experience-number">{{ $sobre_nosotros->year }}</div>
                                    <div class="experience-info">Años<br>Experiencia<br>Trabajando</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <div class="dots-image">
                                <img alt="" class="about-img img-responsive"
                                    src="/storage/{{ $sobre_nosotros->image }}">
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
                                <div class="info-title">Que Hacemos?</div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row-services row">
                                <div class="col-service col-sm-6 col-lg-4 wow fadeInUp">
                                    <span class="text-dark icon icon-apartment"></span>
                                    <h4>Arquitectura</h4>
                                    <p>{{ $que_hacemos->arquitectura_detalle }}</p>
                                </div>
                                <div class="col-service col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <span class="text-dark icon icon-couch"></span>
                                    <h4>Diseño de interior</h4>
                                    <p>{{ $que_hacemos->diseno_interiores_detalle }}</p>
                                </div>
                                <div class="clearfix visible-sm visible-md"></div>
                                <div class="col-service col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.8s">
                                    <span class="text-dark icon icon-pencil-ruler"></span>
                                    <h4>Planos</h4>
                                    <p>{{ $que_hacemos->planos_detalle }}</p>
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
                                    <li class="active"><a href="#" class="all" data-filter="*">Todos</a>
                                    </li>
                                    @foreach ($tipo_proyectos as $item)
                                        <li><a href="#"
                                                data-filter=".{{ $item->slug }}">{{ $item->nombre }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                @include('web.partials.proyectos_carousel', ['proyectos' => $proyectos])



            </section>


            <!-- Section Contacts -->
            @include('web.partials.contactanos', ['configuracion' => $configuracion])

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
                    <div class="inline-block pull-sm-right">© Bjar {{ now()->year }}. Todos los Derechos Reservados
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/smoothscroll.js"></script>
    <script src="/js/wow.min.js"></script>
    <script src="/js/jquery.magnific-popup.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key="{{ $configuracion->key_map }}></script>
    <script src="/js/gmap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
