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
                        <a href="#projects">Projects</a>
                    </li>
                    <li>
                        <a href="#clients">Clients</a>
                    </li>
                    <li>
                        <a href="#team">Team</a>
                    </li>
                    <li>
                        <a href="#contacts">Contacts</a>
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

            <!-- Start revolution slider -->
            <div class="rev_slider_wrapper">
                <div id="rev_slider" class="rev_slider tp-overflow-hidden fullscreenbanner">
                    <ul>

                        <!-- Slide 1 -->
                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000"
                            data-fsmasterspeed="1000">

                            <!-- Main image-->
                            <img src="images/slide1.jpg" data-bgparallax="5" alt=""
                                data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg">

                            <!-- Layer 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-250']" data-width="270" data-height="5" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>

                            <!-- Layer 2 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                data-hoffset="['370']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>


                            <!-- Layer 3 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['289']" data-width="270" data-height="5" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>


                            <!-- Layer 4 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>

                            <!-- Layer 5 -->
                            <div class="slider-title tp-caption tp-resizeme" data-x="['left']" data-hoffset="['156']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-30']"
                                data-textAlign="['left']" data-fontsize="['72', '63','57','50']"
                                data-lineheight="['72','68', '62','54']" data-height="none" data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">Small<br>
                                House Near<br> Wroclaw
                            </div>

                            <!-- Layer 6 -->
                            <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-170']"
                                data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']"
                                data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05"
                                style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">House bjar
                            </div>

                            <!-- Layer 7 -->
                            <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                                data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']"
                                data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05" style="font-weight:600;">
                                <a href="#project6" class="popup-with-zoom-anim link-arrow">See project <i
                                        class="icon ion-ios-arrow-thin-right"></i>
                                </a>
                            </div>
                        </li>

                        <!-- Slide 2 -->
                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000"
                            data-fsmasterspeed="1000">

                            <!-- Main image-->
                            <img src="images/slide2.jpg" data-bgparallax="5" alt=""
                                data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg">

                            <!-- Layer 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-250']" data-width="270" data-height="5" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>

                            <!-- Layer 2 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                data-hoffset="['370']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>


                            <!-- Layer 3 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['289']" data-width="270" data-height="5" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>


                            <!-- Layer 4 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>

                            <!-- Layer 5 -->
                            <div class="slider-title tp-caption tp-resizeme" data-x="['left']" data-hoffset="['156']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-30']"
                                data-textAlign="['left']" data-fontsize="['72', '63','57','50']"
                                data-lineheight="['72','68', '62','54']" data-height="none" data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">The
                                luxury<br> residence in<br> forest
                            </div>


                            <!-- Layer 6 -->
                            <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-170']"
                                data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']"
                                data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05"
                                style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">Residential
                            </div>

                            <!-- Layer 7 -->
                            <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                                data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']"
                                data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05" style="font-weight:600;">
                                <a href="#project7" class="popup-with-zoom-anim link-arrow">See project <i
                                        class="icon ion-ios-arrow-thin-right"></i>
                                </a>
                            </div>
                        </li>

                        <!-- Slide 3 -->
                        <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000"
                            data-fsmasterspeed="1000">

                            <!-- Main image-->
                            <img src="images/slide3.jpg" data-bgparallax="5" alt=""
                                data-bgposition="center 0" data-bgfit="cover" data-bgrepeat="no-repeat"
                                class="rev-slidebg">

                            <!-- Layer 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['-250']" data-width="270" data-height="5" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":0,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>

                            <!-- Layer 2 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                data-hoffset="['370']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":600,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>


                            <!-- Layer 3 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['289']" data-width="270" data-height="5" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>


                            <!-- Layer 4 -->
                            <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme" data-x="['left']"
                                data-hoffset="['100']" data-y="['middle','middle','middle','middle']"
                                data-voffset="['19']" data-width="5" data-height="544" data-whitespace="nowrap"
                                data-type="shape" data-responsive_offset="on"
                                data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1000,"to":"o:1;","delay":1800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="background-color:#cee002;"> </div>

                            <!-- Layer 5 -->
                            <div class="slider-title tp-caption tp-resizeme" data-x="['left']" data-hoffset="['156']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-30']"
                                data-textAlign="['left']" data-fontsize="['72', '63','57','50']"
                                data-lineheight="['72','68', '62','54']" data-height="none" data-whitespace="nowrap"
                                data-transform_idle="o:1;"
                                data-transform_in="x:[-155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05" style="font-weight:600; letter-spacing:-0.05em;">
                                Redesign<br>Interior For<br>Villa
                            </div>


                            <!-- Layer 6 -->
                            <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-170']"
                                data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']"
                                data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="x:[155%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1000"
                                data-splitin="chars" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05"
                                style="font-weight:600; letter-spacing:0.1em; text-transform:uppercase;">Residential
                            </div>

                            <!-- Layer 7 -->
                            <div class="slider-title tp-caption" data-x="['left']" data-hoffset="['156']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['230']"
                                data-textAlign="['left']" data-fontsize="['18']" data-lineheight="['20']"
                                data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;"
                                data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power2.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:50px;y:0px;s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="1500"
                                data-splitin="none" data-splitout="none" data-responsive_offset="on"
                                data-elementdelay="0.05" style="font-weight:600; ">
                                <a href="#project4" class="popup-with-zoom-anim link-arrow">See project <i
                                        class="icon ion-ios-arrow-thin-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
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
                            <h2 class="section-title">Latest Projects</h2>
                        </div>
                        <div class="col-lg-7">
                            <div class="filter-content">
                                <ul class="filter-carousel filter pull-lg-right js-filter-carousel">
                                    <li class="active"><a href="#" class="all" data-filter="*">All</a></li>
                                    <li><a href="#" data-filter=".building">Building </a></li>
                                    <li><a href="#" data-filter=".interior-exterior">Interior & Exterior </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-carousel owl-carousel">

                    <!-- Project Carousel Item 1 -->
                    <a href="#project1" class="project-item item-shadow popup-with-zoom-anim building">
                        <img alt="" class="img-responsive" src="images/1-426x574.jpg">
                        <div class="project-hover">
                            <div class="project-hover-content">
                                <h3 class="project-title">Triangle<br>Concrete House<br>On Lake</h3>
                                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                    elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn
                                    Donec tincidunt velit nec laoreet semper...</p>
                            </div>
                        </div>
                        <span class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></span>
                    </a>

                    <!-- Project Carousel Item 2 -->
                    <a href="#project2" class="project-item item-shadow popup-with-zoom-anim building">
                        <img alt="" class="img-responsive" src="images/2-426x574.jpg">
                        <div class="project-hover">
                            <div class="project-hover-content">
                                <h3 class="project-title">Rectangular<br>House Near<br>Italy</h3>
                                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                    elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn
                                    Donec tincidunt velit nec laoreet semper...</p>
                            </div>
                        </div>
                        <span class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></span>
                    </a>

                    <!-- Project Carousel Item 3 -->
                    <a href="#project3" class="project-item item-shadow popup-with-zoom-anim building">
                        <img alt="" class="img-responsive" src="images/3-426x574.jpg">
                        <div class="project-hover">
                            <div class="project-hover-content">
                                <h3 class="project-title">Milko<br>Co-Working<br>Building</h3>
                                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                    elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn
                                    Donec tincidunt velit nec laoreet semper...</p>
                            </div>
                        </div>
                        <span class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></span>
                    </a>

                    <!-- Project Carousel Item 4 -->
                    <a href="#project4" class="project-item item-shadow popup-with-zoom-anim building">
                        <img alt="" class="img-responsive" src="images/4-426x574.jpg">
                        <div class="project-hover">
                            <div class="project-hover-content">
                                <h3 class="project-title">Redesign<br>Interior For<br>Villa</h3>
                                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                    elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn
                                    Donec tincidunt velit nec laoreet semper...</p>
                            </div>
                        </div>
                        <span class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></span>
                    </a>

                    <!-- Project Carousel Item 5 -->
                    <a href="#project5" class="project-item item-shadow popup-with-zoom-anim interior-exterior">
                        <img alt="" class="img-responsive" src="images/5-426x574.jpg">
                        <div class="project-hover">
                            <div class="project-hover-content">
                                <h3 class="project-title">Wooden<br>Hozirontal<br>Villa</h3>
                                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                    elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn
                                    Donec tincidunt velit nec laoreet semper...</p>
                            </div>
                        </div>
                        <span class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></span>
                    </a>

                    <!-- Project Carousel Item 6 -->
                    <a href="#project6" class="project-item item-shadow popup-with-zoom-anim interior-exterior">
                        <img alt="" class="img-responsive" src="images/6-426x574.jpg">
                        <div class="project-hover">
                            <div class="project-hover-content">
                                <h3 class="project-title">Small<br>House Near<br>Wroclaw</h3>
                                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                    elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn
                                    Donec tincidunt velit nec laoreet semper...</p>
                            </div>
                        </div>
                        <span class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></span>
                    </a>

                    <!-- Project Carousel Item 7 -->
                    <a href="#project7" class="project-item item-shadow popup-with-zoom-anim interior-exterior">
                        <img alt="" class="img-responsive" src="images/7-426x574.jpg">
                        <div class="project-hover">
                            <div class="project-hover-content">
                                <h3 class="project-title">The luxury<br> residence in<br> forest</h3>
                                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                    elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn
                                    Donec tincidunt velit nec laoreet semper...</p>
                            </div>
                        </div>
                        <span class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></span>
                    </a>

                    <!-- Project Carousel Item 8 -->
                    <a href="#project8" class="project-item item-shadow popup-with-zoom-anim interior-exterior">
                        <img alt="" class="img-responsive" src="images/8-426x574.jpg">
                        <div class="project-hover">
                            <div class="project-hover-content">
                                <h3 class="project-title">Cubic<br>Inter Mesuem<br>In Rome</h3>
                                <p class="project-description">Lorem ipsum dolor sit amet, consectetur adipil pcing
                                    elit. Proin nunc leo, rhoncus sit amet tolil arcu vel, pharetra volutpat sem lorn
                                    Donec tincidunt velit nec laoreet semper...</p>
                            </div>
                        </div>
                        <span class="link-arrow">See project <i class="icon ion-ios-arrow-right"></i></span>
                    </a>
                </div>

                <!-- Project Modal Dialog 1 -->
                <div id="project1" class="container zoom-anim-dialog mfp-hide">
                    <div class="row">
                        <div class="col-lg-8"><img alt="" class="project-detail-img"
                                src="images/1-680x680.jpg"></div>
                        <div class="col-lg-4">
                            <h3 class="project-detail-title">Triangle Concrete House On Lake</h3>
                            <p class="project-detail-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut. magna aliquam erat volutpat enim ad minim
                                veniam. Duis autem vel eum iriure dolor in hendrerit in.</p>
                            <ul class="project-detail-list text-dark">
                                <li>
                                    <span class="left">Clients:</span>
                                    <span class="right">Ethan Hunt, John Doe</span>
                                </li>
                                <li>
                                    <span class="left">Completion:</span>
                                    <span class="right">February 5th, 2019</span>
                                </li>
                                <li>
                                    <span class="left">Project Type:</span>
                                    <span class="right">Villa, Residence</span>
                                </li>
                                <li>
                                    <span class="left">Architects:</span>
                                    <span class="right">Logan Cee, Paul</span>
                                </li>
                                <li>
                                    <span class="left">Budget:</span>
                                    <span class="right">$1 200 000</span>
                                </li>
                            </ul>
                            <div class="project-detail-meta">
                                <span class="left text-dark hidden-xs pull-sm-left">Share:</span>
                                <div class="social-list pull-sm-right">
                                    @foreach ($redes_sociales as $item)
                                        <a href="{{ $item->link }}" class="{{ $item->icono }}"></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Modal Dialog 2 -->
                <div id="project2" class="container zoom-anim-dialog mfp-hide">
                    <div class="row">
                        <div class="col-lg-8"><img alt="" class="project-detail-img"
                                src="images/2-680x680.jpg"></div>
                        <div class="col-lg-4">
                            <h3 class="project-detail-title">Rectangular House Near Italy</h3>
                            <p class="project-detail-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut. magna aliquam erat volutpat enim ad minim
                                veniam. Duis autem vel eum iriure dolor in hendrerit in.</p>
                            <ul class="project-detail-list text-dark">
                                <li>
                                    <span class="left">Clients:</span>
                                    <span class="right">Ethan Hunt, John Doe</span>
                                </li>
                                <li>
                                    <span class="left">Completion:</span>
                                    <span class="right">February 5th, 2019</span>
                                </li>
                                <li>
                                    <span class="left">Project Type:</span>
                                    <span class="right">Villa, Residence</span>
                                </li>
                                <li>
                                    <span class="left">Architects:</span>
                                    <span class="right">Logan Cee, Paul</span>
                                </li>
                                <li>
                                    <span class="left">Budget:</span>
                                    <span class="right">$1 200 000</span>
                                </li>
                            </ul>
                            <div class="project-detail-meta">
                                <span class="left text-dark hidden-xs pull-sm-left">Share:</span>
                                <div class="social-list pull-sm-right">
                                    @foreach ($redes_sociales as $item)
                                        <a href="{{ $item->link }}" class="{{ $item->icono }}"></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Modal Dialog 3 -->
                <div id="project3" class="container zoom-anim-dialog mfp-hide">
                    <div class="row">
                        <div class="col-lg-8"><img alt="" class="project-detail-img"
                                src="images/3-680x680.jpg"></div>
                        <div class="col-lg-4">
                            <h3 class="project-detail-title">Milko Co-Working Building</h3>
                            <p class="project-detail-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut. magna aliquam erat volutpat enim ad minim
                                veniam. Duis autem vel eum iriure dolor in hendrerit in.</p>
                            <ul class="project-detail-list text-dark">
                                <li>
                                    <span class="left">Clients:</span>
                                    <span class="right">Ethan Hunt, John Doe</span>
                                </li>
                                <li>
                                    <span class="left">Completion:</span>
                                    <span class="right">February 5th, 2019</span>
                                </li>
                                <li>
                                    <span class="left">Project Type:</span>
                                    <span class="right">Villa, Residence</span>
                                </li>
                                <li>
                                    <span class="left">Architects:</span>
                                    <span class="right">Logan Cee, Paul</span>
                                </li>
                                <li>
                                    <span class="left">Budget:</span>
                                    <span class="right">$1 200 000</span>
                                </li>
                            </ul>
                            <div class="project-detail-meta">
                                <span class="left text-dark hidden-xs pull-sm-left">Share:</span>
                                <div class="social-list pull-sm-right">
                                    @foreach ($redes_sociales as $item)
                                        <a href="{{ $item->link }}" class="{{ $item->icono }}"></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Modal Dialog 4 -->
                <div id="project4" class="container zoom-anim-dialog mfp-hide">
                    <div class="row">
                        <div class="col-lg-8"><img alt="" class="project-detail-img"
                                src="images/4-680x680.jpg"></div>
                        <div class="col-lg-4">
                            <h3 class="project-detail-title">Redesign Interior For Villa</h3>
                            <p class="project-detail-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut. magna aliquam erat volutpat enim ad minim
                                veniam. Duis autem vel eum iriure dolor in hendrerit in.</p>
                            <ul class="project-detail-list text-dark">
                                <li>
                                    <span class="left">Clients:</span>
                                    <span class="right">Ethan Hunt, John Doe</span>
                                </li>
                                <li>
                                    <span class="left">Completion:</span>
                                    <span class="right">February 5th, 2019</span>
                                </li>
                                <li>
                                    <span class="left">Project Type:</span>
                                    <span class="right">Villa, Residence</span>
                                </li>
                                <li>
                                    <span class="left">Architects:</span>
                                    <span class="right">Logan Cee, Paul</span>
                                </li>
                                <li>
                                    <span class="left">Budget:</span>
                                    <span class="right">$1 200 000</span>
                                </li>
                            </ul>
                            <div class="project-detail-meta">
                                <span class="left text-dark hidden-xs pull-sm-left">Share:</span>
                                <div class="social-list pull-sm-right">
                                    @foreach ($redes_sociales as $item)
                                        <a href="{{ $item->link }}" class="{{ $item->icono }}"></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Project Modal Dialog 5 -->
                <div id="project5" class="container zoom-anim-dialog mfp-hide">
                    <div class="row">
                        <div class="col-lg-8"><img alt="" class="project-detail-img"
                                src="images/5-680x680.jpg"></div>
                        <div class="col-lg-4">
                            <h3 class="project-detail-title">Wooden Hozirontal Villa</h3>
                            <p class="project-detail-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut. magna aliquam erat volutpat enim ad minim
                                veniam. Duis autem vel eum iriure dolor in hendrerit in.</p>
                            <ul class="project-detail-list text-dark">
                                <li>
                                    <span class="left">Clients:</span>
                                    <span class="right">Ethan Hunt, John Doe</span>
                                </li>
                                <li>
                                    <span class="left">Completion:</span>
                                    <span class="right">February 5th, 2019</span>
                                </li>
                                <li>
                                    <span class="left">Project Type:</span>
                                    <span class="right">Villa, Residence</span>
                                </li>
                                <li>
                                    <span class="left">Architects:</span>
                                    <span class="right">Logan Cee, Paul</span>
                                </li>
                                <li>
                                    <span class="left">Budget:</span>
                                    <span class="right">$1 200 000</span>
                                </li>
                            </ul>
                            <div class="project-detail-meta">
                                <span class="left text-dark hidden-xs pull-sm-left">Share:</span>
                                <div class="social-list pull-sm-right">
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

                <!-- Project Modal Dialog 6 -->
                <div id="project6" class="container zoom-anim-dialog mfp-hide">
                    <div class="row">
                        <div class="col-lg-8"><img alt="" class="project-detail-img"
                                src="images/6-680x680.jpg"></div>
                        <div class="col-lg-4">
                            <h3 class="project-detail-title">Small House Near Wroclaw</h3>
                            <p class="project-detail-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut. magna aliquam erat volutpat enim ad minim
                                veniam. Duis autem vel eum iriure dolor in hendrerit in.</p>
                            <ul class="project-detail-list text-dark">
                                <li>
                                    <span class="left">Clients:</span>
                                    <span class="right">Ethan Hunt, John Doe</span>
                                </li>
                                <li>
                                    <span class="left">Completion:</span>
                                    <span class="right">February 5th, 2019</span>
                                </li>
                                <li>
                                    <span class="left">Project Type:</span>
                                    <span class="right">Villa, Residence</span>
                                </li>
                                <li>
                                    <span class="left">Architects:</span>
                                    <span class="right">Logan Cee, Paul</span>
                                </li>
                                <li>
                                    <span class="left">Budget:</span>
                                    <span class="right">$1 200 000</span>
                                </li>
                            </ul>
                            <div class="project-detail-meta">
                                <span class="left text-dark hidden-xs pull-sm-left">Share:</span>
                                <div class="social-list pull-sm-right">
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

                <!-- Project Modal Dialog 7 -->
                <div id="project7" class="container zoom-anim-dialog mfp-hide">
                    <div class="row">
                        <div class="col-lg-8"><img alt="" class="project-detail-img"
                                src="images/7-680x680.jpg"></div>
                        <div class="col-lg-4">
                            <h3 class="project-detail-title">The Luxury Residence In Forest</h3>
                            <p class="project-detail-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut. magna aliquam erat volutpat enim ad minim
                                veniam. Duis autem vel eum iriure dolor in hendrerit in.</p>
                            <ul class="project-detail-list text-dark">
                                <li>
                                    <span class="left">Clients:</span>
                                    <span class="right">Ethan Hunt, John Doe</span>
                                </li>
                                <li>
                                    <span class="left">Completion:</span>
                                    <span class="right">February 5th, 2019</span>
                                </li>
                                <li>
                                    <span class="left">Project Type:</span>
                                    <span class="right">Villa, Residence</span>
                                </li>
                                <li>
                                    <span class="left">Architects:</span>
                                    <span class="right">Logan Cee, Paul</span>
                                </li>
                                <li>
                                    <span class="left">Budget:</span>
                                    <span class="right">$1 200 000</span>
                                </li>
                            </ul>
                            <div class="project-detail-meta">
                                <span class="left text-dark hidden-xs pull-sm-left">Share:</span>
                                <div class="social-list pull-sm-right">
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

                <!-- Project Modal Dialog 8 -->
                <div id="project8" class="container zoom-anim-dialog mfp-hide">
                    <div class="row">
                        <div class="col-lg-8"><img alt="" class="project-detail-img"
                                src="images/8-680x680.jpg"></div>
                        <div class="col-lg-4">
                            <h3 class="project-detail-title">Cubic Inter Mesuem In Rome</h3>
                            <p class="project-detail-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut. magna aliquam erat volutpat enim ad minim
                                veniam. Duis autem vel eum iriure dolor in hendrerit in.</p>
                            <ul class="project-detail-list text-dark">
                                <li>
                                    <span class="left">Clients:</span>
                                    <span class="right">Ethan Hunt, John Doe</span>
                                </li>
                                <li>
                                    <span class="left">Completion:</span>
                                    <span class="right">February 5th, 2019</span>
                                </li>
                                <li>
                                    <span class="left">Project Type:</span>
                                    <span class="right">Villa, Residence</span>
                                </li>
                                <li>
                                    <span class="left">Architects:</span>
                                    <span class="right">Logan Cee, Paul</span>
                                </li>
                                <li>
                                    <span class="left">Budget:</span>
                                    <span class="right">$1 200 000</span>
                                </li>
                            </ul>
                            <div class="project-detail-meta">
                                <span class="left text-dark hidden-xs pull-sm-left">Share:</span>
                                <div class="social-list pull-sm-right">
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
    <script src=""></script>
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
