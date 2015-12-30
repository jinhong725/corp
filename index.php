<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LLVC</title>
    <link rel="shortcut icon" href="img/small_mark.png" />

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- slide -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/slide/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 15,
                $SpacingX: 3,
                $SpacingY: 3,
                $Align: 455
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 980);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
        
        /* jssor slider arrow navigator skin 07 css */
        /*
        .jssora07l                  (normal)
        .jssora07r                  (normal)
        .jssora07l:hover            (normal mouseover)
        .jssora07r:hover            (normal mouseover)
        .jssora07l.jssora07ldn      (mousedown)
        .jssora07r.jssora07rdn      (mousedown)
        */
        .jssora07l, .jssora07r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 50px;
            height: 50px;
            cursor: pointer;
            background: url('img/a07.png') no-repeat;
            overflow: hidden;
        }
        .jssora07l { background-position: -5px -35px; }
        .jssora07r { background-position: -65px -35px; }
        .jssora07l:hover { background-position: -125px -35px; }
        .jssora07r:hover { background-position: -185px -35px; }
        .jssora07l.jssora07ldn { background-position: -245px -35px; }
        .jssora07r.jssora07rdn { background-position: -305px -35px; }
/* jssor slider thumbnail navigator skin 04 css *//*.jssort04 .p            (normal).jssort04 .p:hover      (normal mouseover).jssort04 .pav          (active).jssort04 .pav:hover    (active mouseover).jssort04 .pdn          (mousedown)*/.jssort04 .p {    position: absolute;    top: 0;    left: 0;    width: 62px;    height: 32px;}.jssort04 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort04 .w, .jssort04 .pav:hover .w {    position: absolute;    width: 60px;    height: 30px;    border: #0099FF 1px solid;    box-sizing: content-box;}.jssort04 .pdn .w, .jssort04 .pav .w {    border-style: dashed;}.jssort04 .c {    position: absolute;    top: 0;    left: 0;    width: 62px;    height: 32px;    background-color: #000;    filter: alpha(opacity=45);    opacity: .45;    transition: opacity .6s;    -moz-transition: opacity .6s;    -webkit-transition: opacity .6s;    -o-transition: opacity .6s;}.jssort04 .p:hover .c, .jssort04 .pav .c {    filter: alpha(opacity=0);    opacity: 0;}.jssort04 .p:hover .c {    transition: none;    -moz-transition: none;    -webkit-transition: none;    -o-transition: none;}* html .jssort04 .w {    width /**/: 62px;    height /**/: 32px;}
        
    </style>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand page-scroll" href="#page-top">LLVC</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">   
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Visit Our Team!</div>
                <div class="intro-heading">It's Nice To Meet You</div>
                <a href="#services" class="page-scroll btn btn-xl">Tell You More</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Our services offering ranges from UX design to complex social network development. Just check out all of the service lists below to get a general idea of what we are capable of delivering. And make sure to see our portfolio for proof of our awesomeness.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-tablet fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">iOS/Android App</h4>
                    <p class="text-muted">We develop iOS/Android applications related to the Voice/Audio chatting, Video conference, Social, Online Mediaplayer, Online Dating, Third Party Integration.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Responsive Web/Mobile API</h4>
                    <p class="text-muted">We develop E-Commerce, Shopping, Dating web sites with responsive and robust UI. We also provide the REST Web APIs for Mobile applications.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Linux System Administration</h4>
                    <p class="text-muted">We can help you to manage your services in Ubunt, Cent OS, AWS, Heroku, Digital Ocean. We are very experienced in Service Deploying, DB Management, E-Mail Service, Network Security.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">You can see our portfolio for proof of our awesomeness (CLICK TO VIEW).</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#web_drinkme" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web/drink/drink_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Drink Me</h4>
                        <p class="text-muted">ROR/mobile, e-commerce</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#awsservice" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/linux/aws_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>AWS Service</h4>
                        <p class="text-muted">Linux system administration</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#ios_storyteller" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/ios/storyteller/storyteller_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Storyteller</h4>
                        <p class="text-muted">IOS, video/photo sharing</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#web_gp2u" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/ios/gp2u/gp2u_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>GP2U</h4>
                        <p class="text-muted">web & mobile, doctor consultant</p>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#ios_opentok" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/ios/opentok/opentok_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>OpenTok</h4>
                        <p class="text-muted">iOS, video chatting.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#android_molarity" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/android/molarity/molarity_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Molarity</h4>
                        <p class="text-muted">Android, calculator</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#web_evolution" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web/evolution/evolution_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Evolution</h4>
                        <p class="text-muted">Ruby, website builder.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#web_grandin" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web/granding/granding_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Grandin</h4>
                        <p class="text-muted">Ruby, Shopify</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#web_kids" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web/kids/kids_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Kids</h4>
                        <p class="text-muted">Ruby, video streaming</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#web_potstore" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web/potstore/potstore_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Potstore</h4>
                        <p class="text-muted">Ruby, shopify</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#web_productreview" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web/productreview/productreview_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Productreview</h4>
                        <p class="text-muted">Ruby, e-commerce</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#web_starfall" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web/starfall/starfall_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Starfall</h4>
                        <p class="text-muted">Ruby, education.</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#web_thoughts" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web/thoughts/thoughts_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Thoughts</h4>
                        <p class="text-muted">Ruby, social</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#wm_boutir" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web+mobile/boutir/boutir_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Boutir</h4>
                        <p class="text-muted">Ruby&mobile, Shopify</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#wm_englishradio" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web+mobile/englishradio/englishradio_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>EnglishRadio</h4>
                        <p class="text-muted">Android&iOS, online chatting</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#wm_hichat" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web+mobile/hichat/hichat_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>HiChat</h4>
                        <p class="text-muted">Android&iOS, video chat</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#wm_meru" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web+mobile/meru/meru_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Meru</h4>
                        <p class="text-muted">Android&iOS, Taxi app</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#wm_okcupid" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web+mobile/okcupid/okcupid_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Okcupid</h4>
                        <p class="text-muted">Android&iOS, dating app</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#wm_oplayer" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web+mobile/oplayer/oplayer_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Oplayer</h4>
                        <p class="text-muted">Android/iOS, online streaming</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#wm_taxi" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web+mobile/taxi/taxi_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Taxi</h4>
                        <p class="text-muted">Web&mobile, Taxi app</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#wm_twoo" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web+mobile/twoo/twoo_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Twoo</h4>
                        <p class="text-muted">Ruby&Mobile, dating app</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#wm_viber" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/web+mobile/viber/viber_preview.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Viber</h4>
                        <p class="text-muted">Android&iOS, SMS/Video calling</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">We are an international web&mobile development team which specialize in Web service, social, video/voice chatting, Android firmware.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.png" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Linus and Theo had been friends in Universität Hamburg. They had both been interested in Linux security. They kept in touch after graduation, and decided to design a new Secure Linux Service based on SELinux. Their service had been accepted as very robust at Web port attack from serveral companies.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/born.gif" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Our team was born in March 2011 with 5 members and started the web service management with security. Our team had managed 15+ web servers and handled many daily problems successfully.</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Web & Mobile Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Most of companies had wanted a new mobile version for their services. From then we designed a new branch, REST API service, and started the mobile application development related to the Social and V/A online chatting. Now we are growing in popularity as a talented web & mobile development team.</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/upgrade.gif" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase new branch, Android Firmware</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">The 5 years of experiences in developing Linux and Android leaded us to the Android Firmware development. Now we are developing a specific products even with it's driver if needed.</p>
                                </div>
                            </div>
                        </li>
                        <!-- <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">International Development Team</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/linus_frank.png" class="img-responsive img-circle" alt="">
                        <h4>Linus Frank</h4>
                        <p class="text-muted">Founder, CEO</p>
                        <!-- <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/armen_diprizio.png" class="img-responsive img-circle" alt="">
                        <h4>Theo Braun</h4>
                        <p class="text-muted">Co-founder, CTO</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/jin_hong.png" class="img-responsive img-circle" alt="">
                        <h4>Jin Hong</h4>
                        <p class="text-muted">Linux System Administrator</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/adal_wulf.png" class="img-responsive img-circle" alt="">
                        <h4>Adal Wulf</h4>
                        <p class="text-muted">Lead Developer</p>
                    </div>
                </div>
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/arimon_frank.png" class="img-responsive img-circle" alt="">
                        <h4>Arimon Frank</h4>
                        <p class="text-muted">Lead Developer</p>
                    </div>
                </div> -->
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/amelie_berg.png" class="img-responsive img-circle" alt="">
                        <h4>Amelie Berg</h4>
                        <p class="text-muted">Hybrid developer</p>
                    </div>
                </div> -->
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/adolf_miller.png" class="img-responsive img-circle" alt="">
                        <h4>Adolf Miller</h4>
                        <p class="text-muted">Social Programmer</p>
                    </div>
                </div> -->
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/cam_ceren.png" class="img-responsive img-circle" alt="">
                        <h4>Cam Ceren</h4>
                        <p class="text-muted">Mobile Programmer</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/cristian_portice.png" class="img-responsive img-circle" alt="">
                        <h4>Cristian Portice</h4>
                        <p class="text-muted">ROR Expert</p>
                    </div>
                </div>
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/gool_wulf.png" class="img-responsive img-circle" alt="">
                        <h4>Gool Wulf</h4>
                        <p class="text-muted">IONIC Developer</p>
                    </div>
                </div> -->                
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/lena_bach.png" class="img-responsive img-circle" alt="">
                        <h4>Lena Bach</h4>
                        <p class="text-muted">Android Developer</p>
                    </div>
                </div> -->
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/linus_koch.png" class="img-responsive img-circle" alt="">
                        <h4>Linus Koch</h4>
                        <p class="text-muted">Android Firmware Expert</p>
                    </div>
                </div> -->
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/lotta_dietrich.png" class="img-responsive img-circle" alt="">
                        <h4>Lotta Dietrich</h4>
                        <p class="text-muted">IOS Developer</p>
                    </div>
                </div> -->
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/max_adler.png" class="img-responsive img-circle" alt="">
                        <h4>Max Adler</h4>
                        <p class="text-muted">V/A Chatting Expert</p>
                    </div>
                </div> -->
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/mila_eichel.png" class="img-responsive img-circle" alt="">
                        <h4>Mila Eichel</h4>
                        <p class="text-muted">Mobile programmer</p>
                    </div>
                </div> -->
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/nick_baum.png" class="img-responsive img-circle" alt="">
                        <h4>Nick Baum</h4>
                        <p class="text-muted">Linux Kernel Developer</p>
                    </div>
                </div> -->
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/tim_amsel.png" class="img-responsive img-circle" alt="">
                        <h4>Tim Amsel</h4>
                        <p class="text-muted">Social Network Expert</p>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Please don't hesitate to contact us. We will find out our pleasure from your success.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <!-- <a href="#team"> -->
                        <img src="img/logos/envato.jpg" class="img-responsive img-centered" alt="">
                    <!-- </a> -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- <a href="#team"> -->
                        <img src="img/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                    <!-- </a> -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- <a href="#team"> -->
                        <img src="img/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                    <!-- </a> -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- <a href="#team"> -->
                        <img src="img/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                    <!-- </a> -->
                </div>
            </div>
        </div>
    </aside>
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">We will welcome you at any time.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" validate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone" id="phone">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Lion Linus Velen Corporation</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="#contact"><i class="fa fa-skype"></i></a>
                        </li>
                        <li>llvc.1986
                        </li>
                        <li><a href="#contact"><i class="fa fa-envelope"></i></a>
                        </li>
                        <li>llvc1986@outlook.com
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- drinkme Modal 1 -->
    <div class="portfolio-modal modal fade" id="web_drinkme" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Drink Me</h2>
                            <p class="item-intro text-muted">ROR project for world-wide drink shopping.</p>

                            <img class="img-responsive img-centered" src="img/portfolio/web/drink/drink_about.png" alt="" />
                            <img class="img-responsive img-centered" src="img/portfolio/web/drink/drink_credit.png" alt="" />
                            <img class="img-responsive img-centered" src="img/portfolio/web/drink/drink_dashboard.png" alt="" />
                            <img class="img-responsive img-centered" src="img/portfolio/web/drink/drink_login.png" alt="" />                          
                            
                            <h5>Description</h5>
                            <article>you can buy a drink at any place in the world.</article>
                            <h5>Technology</h5>
                            <article>ROR, shoping logic, credit card integration, signup with facebook</article>
                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/us/app/buddy-drinks/id978612190?ls=1&mt=8"><img src="img/appstore.png"></a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.consumer.buddydrinks"><img src="img/google_play.png"></a>
                            <a target="_blank" href="http://drnk.me/"><img src="img/web.png"></a>
                            <ul class="list-inline">
                                <li>Date: DEC 2010</li>
                                <li>Client: Susan Cain</li>
                                <li>Category: ROR&mobile, e-commerce</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- AWS Modal 3 -->
    <div class="portfolio-modal modal fade" id="awsservice" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>AWS service</h2>
                            <p class="item-intro text-muted">Amazon EC2, Amazon S3, Amazon RDS, Amazon VPC, Amazon API Gateway, Amazon Mobile Hub, Amazon DynamoDB, Elastic Load Balancing, ...</p>
                            
                            <!-- slide -->
                            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:400px;overflow:hidden;visibility:hidden;background:url('img/portfolio/linux/main_bg.jpg') 50% 50% no-repeat;">
                                <!-- Loading Screen -->
                                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                    <div style="position:absolute;display:block;background:url('img/portfolio/linux/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                </div>
                                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 400px; overflow: hidden;">
                                    <div data-p="172.50" style="display: none;">
                                        <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px; color: #FFFFFF;">amazon ec2</span><br /><br /><br />
                                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                                                                Scalable computing capacity
                                                                            
                                            </span><br />
                                            <span style="display: block; line-height: 1.1em; font-size: 1.5em; color: #FFFFFF;">
                                                <ul >
                                                    <li>Creating VCE, AMIs</li>
                                                    <li>Various configurations of CPU, memory, storage, and networking capacity for your instances</li>
                                                    <li>Persistent storage volumes for Amazon EBS</li>
                                                    <li>Secure login information for your instances using key pairs</li>
                                                    <li>Static IP addresses for dynamic cloud computing</li>
                                                    <li>A firewall that enables you to specify</li>
                                                </ul>
                                                                            
                                            </span><br /><br />
                                            
                                        </div>
                                        <img src="img/portfolio/linux/s2.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                                        <img data-u="thumb" src="img/portfolio/linux/s2t.jpg" />
                                    </div>

                                    <div data-p="172.50" style="display: none;">
                                        <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;">
                                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
                                                        color: #FFFFFF;">tool service</span><br /><br /><br />
                                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                                Developer & Manage tools
                                                
                                            </span><br />
                                            <span style="display: block; line-height: 1.1em; font-size: 1.5em; color: #FFFFFF;">
                                                <ul >
                                                    <li>Installing SDK</li>
                                                    <li>Using console for services</li>
                                                    <li>Deploying the services automatically</li>
                                                    <li>Collecting, viewing, and analyze metrics</li>
                                                    <li>resources associated with your AWS account</li>
                                                    <li>Creating, managing, and distributing portfolios of approved products</li>
                                                </ul>
                                                                            
                                            </span><br /><br />
                                            
                                        </div>
                                        <img src="img/portfolio/linux/s3.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                                        <img data-u="thumb" src="img/portfolio/linux/s3t.jpg" />
                                    </div>

                                    <div data-p="172.50" style="display: none;">
                                        <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;">
                                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
                            color: #FFFFFF;">AWS Market</span><br /><br /><br />
                                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                                    Marketing place for software
                                                
                                            </span><br /><br />
                                            <span style="display: block; line-height: 1.1em; font-size: 1.5em; color: #FFFFFF;">
                                                <ul >
                                                    <li>Configure online store where you can buy or sell software that runs on Amazon Web Services (AWS)</li>
                                                    <li>Finding, Buying, and quickly deploying software that runs on AWS</li>
                                                    <li>Managing the sales channel for products you sell</li>
                                                </ul>
                                                                            
                                            </span><br /><br />
                                        </div>
                                        <img src="img/portfolio/linux/s4.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                                        <img data-u="thumb" src="img/portfolio/linux/s4t.jpg" />
                                    </div>

                                    <div data-p="172.50" style="display: none;">
                                        <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
                            color: #FFFFFF;">web hosting</span><br /><br />
                                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                                    we offer the web's best hosting plans for every site.
                                                
                                            </span><br /><br />
                                            <span style="display: block; line-height: 1.1em; font-size: 1.5em; color: #FFFFFF;">
                                                <ul >
                                                    <li>AWS EC2</li>
                                                    <li>Heroku</li>
                                                    <li>Go Dady</li>
                                                    <li>Digital Ocean</li>
                                                </ul>
                                                                            
                                            </span><br /><br />
                                            
                                        </div>
                                        <img src="img/portfolio/linux/s5.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                                        <img data-u="thumb" src="img/portfolio/linux/s5t.jpg" />
                                    </div>

                                    <div data-p="172.50" style="display: none;">
                                        <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;">
                                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
                            color: #FFFFFF;">DNS registration</span><br />
                                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                                    Secure your online identity and register your domain now.
                                                
                                            </span><br /><br />
                                            
                                        </div>
                                        <img src="img/portfolio/linux/s6.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                                        <img data-u="thumb" src="img/portfolio/linux/s6t.jpg" />
                                    </div>

                                    <div data-p="172.50" style="display: none;">
                                        <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
                            color: #FFFFFF;">IPPBX & Asterisk</span><br />
                                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                                    Setting up IPPBX & Asterisk service for VoIP products like SIP phone.
                                                
                                            </span><br /><br />
                                            
                                        </div>
                                        <img src="img/portfolio/linux/s7.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                                        <img data-u="thumb" src="img/portfolio/linux/s7t.jpg" />
                                    </div>

                                    <div data-p="172.50" style="display: none;">
                                        <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;">
                                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;
                        color: #FFFFFF;">AWS Mobile HUB</span><br />
                                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                                Helping you build, test, and monitor your mobile apps
                                                <br /><br />
                                                
                                            </span>
                                            <span style="display: block; line-height: 1.1em; font-size: 1.5em; color: #FFFFFF;">
                                                <ul >
                                                    <li>User sign-in</li>
                                                    <li>Push notifications</li>
                                                    <li>User data storage</li>
                                                    <li>App analytics</li>
                                                    <li>Cloud logic</li>
                                                </ul>
                                                                            
                                            </span><br /><br />
                                        </div>
                                        <img src="img/portfolio/linux/s8.png" style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" />
                                        <img data-u="thumb" src="img/portfolio/linux/s8t.jpg" />
                                    </div>

                                </div>
                                <!-- Thumbnail Navigator -->
                                <div data-u="thumbnavigator" class="jssort04" style="position:absolute;left:0px;bottom:0px;width:980px;height:60px;" data-autocenter="1">
                                    <!-- Thumbnail Item Skin Begin -->
                                    <div data-u="slides" style="cursor: default;">
                                        <div data-u="prototype" class="p">
                                            <div class="w">
                                                <div data-u="thumbnailtemplate" class="t"></div>
                                            </div>
                                            <div class="c"></div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Item Skin End -->
                                </div>
                                <!-- Arrow Navigator -->
                                <span data-u="arrowleft" class="jssora07l" style="top:0px;left:8px;width:50px;height:50px;" data-autocenter="2"></span>
                                <span data-u="arrowright" class="jssora07r" style="top:0px;right:8px;width:50px;height:50px;" data-autocenter="2"></span>
                                <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
                            </div><br /><br /><br />

                            <!-- end slide -->

                            <p>We can create AWS instances and deploy your services successfully. We will supply finished AWS EC2, EC3 bucket and so on.</p>
                            <p>We can setup services like mail, ftp, SELinux, SMPT, POP3, FreePBX, Asterisk in your hosting server.</p>
                            <p>We can maintain your services and backup the DB perfectly. We can provide Couch DB, pouch DB, Amazon EC3 bucket.</p><br /><br />
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- storyteller Modal 4 -->
    <div class="portfolio-modal modal fade" id="ios_storyteller" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Story teller</h2>
                            <p class="item-intro text-muted">iPhone app for video/photo sharing.</p>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/ios/storyteller/1.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/ios/storyteller/2.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/ios/storyteller/3.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/ios/storyteller/4.png" alt="">
                            </div>
                            
                            <div class="row">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/ios/storyteller/5.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/ios/storyteller/6.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/ios/storyteller/7.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/ios/storyteller/8.png" alt="">
                            </div>                            
                            
                            <h5>Description</h5>
                            <article>make up script, recording video, taking photo, uploading to server and share them on Facebook and Twitter. Although you take any ratio video, it merges correctly.</article>
                            <h5>Technology</h5>
                            <article>CameraView customizing, adjusting video ratio, video merging, merging video and photo together. Compose text on photo. Social uploading.</article>
                            <h5>Links</h5>
                            <a target="_blank" href="https://github.com/llvc/storyteller"><img src="img/github.png"></a>
                            <ul class="list-inline">
                                <li>Date: AUG 2010</li>
                                <li>Client: Ben</li>
                                <li>Category: IOS, video/photo sharing</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- gp2u Modal 6 -->
    <div class="portfolio-modal modal fade" id="web_gp2u" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>GP2U</h2>
                            <p class="item-intro text-muted">Web & Mobile</p>
                            <img class="img-responsive img-centered" src="img/portfolio/ios/gp2u/gp2u_web.png" alt="">

                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/ios/gp2u/2.jpeg" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/ios/gp2u/3.jpeg" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/ios/gp2u/4.jpeg" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/ios/gp2u/5.jpeg" alt="">                 
                            
                            <h5>Description</h5>
                            <article>With GP2U you can see a doctor or allied health professional online via video conference.</article>
                            <h5>Technology</h5>
                            <article>opentock sdk, geolocation, video contact, login with Facebook, twitter, linkedin, Google+</article>
                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/de/app/gp2u-telehealth-online-doctors/id625961235?mt=8"><img src="img/appstore.png"></a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.hugemobile.activity&hl=de"><img src="img/google_play.png"></a>
                            <a target="_blank" href="https://gp2u.com.au/"><img src="img/web.png"></a>
                            <ul class="list-inline">
                                <li>Date: MAR 2011</li>
                                <li>Client: James</li>
                                <li>Category: web&mobile, doctor consultant</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Opentok portfolio modal -->
    <div class="portfolio-modal modal fade" id="ios_opentok" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>OpenTok</h2>
                            <p class="item-intro text-muted">Multi video chatting, WebRTC.</p>

                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/ios/opentok/1.jpeg" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/ios/opentok/2.jpeg" alt="">

                            <h5>Description</h5>
                            <article>This is a simple video chatting application using WebRTC.</article>
                            <h5>Technology</h5>
                            <article>multi video chatting, WebRTC</article>
                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/us/app/opentokrtc/id715248169?mt=8"><img src="img/appstore.png"></a>
                            <ul class="list-inline">
                                <li>Date: Apr 2011</li>
                                <li>Client: Jully</li>
                                <li>Category: iOS, video chatting</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- molarity portfolio modal -->
    <div class="portfolio-modal modal fade" id="android_molarity" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Molarity</h2>
                            <p class="item-intro text-muted">Android, calculator for mass, volume, and the molar concentration</p>

                            <img class="img-responsive img-centered col-lg-4" src="img/portfolio/android/molarity/1.png" alt="">
                            <img class="img-responsive img-centered col-lg-4" src="img/portfolio/android/molarity/2.png" alt="">
                            <img class="img-responsive img-centered col-lg-4" src="img/portfolio/android/molarity/3.png" alt="">
                            <img class="img-responsive img-centered col-lg-4" src="img/portfolio/android/molarity/4.png" alt="">
                            <img class="img-responsive img-centered col-lg-4" src="img/portfolio/android/molarity/5.png" alt="">
                            <img class="img-responsive img-centered col-lg-4" src="img/portfolio/android/molarity/6.png" alt="">

                            <h5>Description</h5>
                            <article>Molarity Calculator helps you to calculate any of mass, volume, and the molar concentration.</article>
                            <h5>Technology</h5>
                            <article>Keyboard customizing</article>

                            <ul class="list-inline">
                                <li>Date: Dec 2014</li>
                                <li>Client: Clint</li>
                                <li>Category: Android, calculator</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- evolution portfolio modal -->
    <div class="portfolio-modal modal fade" id="web_evolution" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Evolution</h2>
                            <p class="item-intro text-muted">This is a site building engine written in ruby</p>

                            <img class="img-responsive img-centered" src="img/portfolio/web/evolution/demo.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/evolution/forum.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/evolution/home.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/evolution/hosting.png" alt="">

                            <h5>Description</h5>
                            <article>This is a web site building project. you can post blogs, share photos, connect your community and publish it with structure.</article>
                            <h5>Technology</h5>
                            <article>CMS / content / blogs / photos galleries / community / forums / email marketing etc</article>
                            
                            <h5>Links</h5>
                            <a target="_blank" href="http://b2evolution.net/"><img src="img/web.png"></a>

                            <ul class="list-inline">
                                <li>Date: SEP 2012</li>
                                <li>Client: Nikel</li>
                                <li>Category: Ruby, website builder</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- grandin portfolio modal -->
    <div class="portfolio-modal modal fade" id="web_grandin" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Grandin</h2>
                            <p class="item-intro text-muted">ROR, shopping site for garden decorator</p>

                            <img class="img-responsive img-centered" src="img/portfolio/web/granding/addcart.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/granding/country.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/granding/granding.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/granding/preview.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/granding/shopping_list.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/granding/storelocation.png" alt="">

                            <h5>Description</h5>
                            <article>You can brows the Furniture, Bed, Door etc and buy them from the site.</article>
                            <h5>Technology</h5>
                            <article>CMS / content / blogs / photos galleries / community / forums / email marketing etc</article>
                            
                            <h5>Links</h5>
                            <a target="_blank" href="http://www.grandinroad.com/"><img src="img/web.png"></a>

                            <ul class="list-inline">
                                <li>Date: Jan 2013</li>
                                <li>Client: Jack</li>
                                <li>Category: Ruby, Shopify</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- kids portfolio modal -->
    <div class="portfolio-modal modal fade" id="web_kids" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Kids</h2>
                            <p class="item-intro text-muted">ROR, video streaming site for kids</p>

                            <img class="img-responsive img-centered" src="img/portfolio/web/kids/home.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/kids/login.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/kids/video_list.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/kids/video streaming.png" alt="">

                            <h5>Description</h5>
                            <article>This is for children's funny video. This is a video streaming app build in ROR.</article>
                            <h5>Technology</h5>
                            <article>Login with parse, video streaming api</article>

                            <h5>Links</h5>
                            <a target="_blank" href="http://kids.nationalgeographic.com"><img src="img/web.png"></a>
                            
                            <ul class="list-inline">
                                <li>Date: March 2013</li>
                                <li>Client: Hilemon</li>
                                <li>Category: Ruby, video streaming</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- potstore portfolio modal -->
    <div class="portfolio-modal modal fade" id="web_potstore" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Potstore</h2>
                            <p class="item-intro text-muted">ROR, shopping site for gardener</p>

                            <img class="img-responsive img-centered" src="img/portfolio/web/potstore/detail.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/potstore/events.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/potstore/fermob.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/potstore/item.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/potstore/shipping.png" alt="">

                            <h5>Description</h5>
                            <article>You can buy pot and flowers for garden decoration. They sells many beautiful designs with pot.</article>
                            <h5>Technology</h5>
                            <article>Shopify, debit card, Parse</article>

                            <h5>Links</h5>
                            <a target="_blank" href="http://www.pottedstore.com"><img src="img/web.png"></a>
                            
                            <ul class="list-inline">
                                <li>Date: Jan 2014</li>
                                <li>Client: Betrolic</li>
                                <li>Category: Ruby, shopify</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- productreview portfolio modal -->
    <div class="portfolio-modal modal fade" id="web_productreview" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>TopTen</h2>
                            <p class="item-intro text-muted">ROR, Production review site for customers.</p>

                            <img class="img-responsive img-centered" src="img/portfolio/web/productreview/compare.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/productreview/ease.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/productreview/g+.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/productreview/home.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/productreview/mobile.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/productreview/reviews_preview.png" alt="">

                            <h5>Description</h5>
                            <article>This helps you to obtain the project. They get products from manufacture and set down the reviews so that the customers could purchase what they want.</article>
                            <h5>Technology</h5>
                            <article>google+, mandrill mailing, RSS feed, Compare products with graph, AWs S3</article>

                            <h5>Links</h5>
                            <a target="_blank" href="http://www.toptenreviews.com"><img src="img/web.png"></a>
                            
                            <ul class="list-inline">
                                <li>Date: DEC 2014</li>
                                <li>Client: Jack</li>
                                <li>Category: Ruby, e-commerce</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- starfall portfolio modal -->
    <div class="portfolio-modal modal fade" id="web_starfall" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Starfall</h2>
                            <p class="item-intro text-muted">ROR, education site.</p>

                            <img class="img-responsive img-centered" src="img/portfolio/web/starfall/fable_selling.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/starfall/home.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/starfall/homeschool.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/starfall/starfall_preview.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/starfall/store.png" alt="">

                            <h5>Description</h5>
                            <article>This is a program service of Starfall Education Foundation.
                                On the Starfall website and in Starfall classrooms, children have fun while learning in an environment of collaboration, wonderment, and play. We teach through positive reinforcement to ensure children become confident, intrinsically motivated, and successful.</article>
                            <h5>Technology</h5>
                            <article>Shopping, credit card, buying Fables</article>

                            <h5>Links</h5>
                            <a target="_blank" href="http://www.starfall.com/"><img src="img/web.png"></a>
                            
                            <ul class="list-inline">
                                <li>Date: Jan 2015</li>
                                <li>Client: Dietrich</li>
                                <li>Category: Ruby, education</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- thoughts portfolio modal -->
    <div class="portfolio-modal modal fade" id="web_thoughts" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Thoughts</h2>
                            <p class="item-intro text-muted">ROR, social site for sharing a person's thought.</p>

                            <img class="img-responsive img-centered" src="img/portfolio/web/thoughts/friend.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/thoughts/home.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/thoughts/message.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web/thoughts/photo.png" alt="">

                            <h5>Description</h5>
                            <article>This is a CMS site for sharing a person's thought.
                                You can edit your blog as you want.
                                This is a social site. you can follow the blogs and friends. And you can brows the friends photos.
                                You can login with the credential, jin_fong725@yahoo.com/Abcd123456
                            </article>
                            <h5>Technology</h5>
                            <article>Facebook login, blog sharing, following blog, Facebook sharing, Send message, parse.com, RSS feed, add friend, photo group</article>

                            <h5>Links</h5>
                            <a target="_blank" href="http://www.thoughts.com/"><img src="img/web.png"></a>
                            
                            <ul class="list-inline">
                                <li>Date: Apr 2015</li>
                                <li>Client: Boris</li>
                                <li>Category: Ruby, social</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- boutir portfolio modal -->
    <div class="portfolio-modal modal fade" id="wm_boutir" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Boutir</h2>
                            <p class="item-intro text-muted">ROR&mobile project for online shopping.</p>

                            <h5>Android/IOS</h5>
                            <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/boutir/mobile/1.png" alt="">
                            <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/boutir/mobile/2.png" alt="">
                            <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/boutir/mobile/3.png" alt="">
                            <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/boutir/mobile/4.png" alt="">

                            <h5>Web</h5>
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/boutir/web/fashion.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/boutir/web/home.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/boutir/web/payment.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/boutir/web/plan.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/boutir/web/seller.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/boutir/web/store.png" alt="">

                            <h5>Description</h5>
                            <article>
                                Boutir is the possibly the simplest shop builder available in market. You can start your online business in 3 mintues
                            </article>
                            <h5>Technology</h5>
                            <article>
                                cross-platform website, import hundreds of photos from Instagram, add YouTube Video to show case your Items, Reviews and Rating, Payment gateway integration
                            </article>

                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/hk/app/boutir/id917526274?mt=8">
                                <img src="img/appstore.png">
                            </a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.redso.boutir&hl=en">
                                <img src="img/google_play.png">
                            </a>
                            <a target="_blank" href="https://www.boutir.com">
                                <img src="img/web.png">
                            </a>
                            
                            <ul class="list-inline">
                                <li>Date: FEB 2015</li>
                                <li>Client: Gary</li>
                                <li>Category: Ruby&mobile, Shopify</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- englishradio portfolio modal -->
    <div class="portfolio-modal modal fade" id="wm_englishradio" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>EnglishRadio</h2>
                            <p class="item-intro text-muted">Android&iOS application for online streaming</p>

                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/englishradio/mobile/1.png" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/englishradio/mobile/2.png" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/englishradio/mobile/3.png" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/englishradio/mobile/4.png" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/englishradio/mobile/5.png" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/englishradio/mobile/6.png" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/englishradio/mobile/7.png" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/englishradio/mobile/8.png" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/englishradio/mobile/9.png" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/englishradio/mobile/10.png" alt="">

                            <h5>Description</h5>
                            <article>
                                Improve your English listening and speaking skills. Meet new people and make friends all over the world.
                            </article>
                            <h5>Technology</h5>
                            <article>
                                Chat with your friends or with people online. Making friends has never been simpler.
                                Free texting, voice messages, sending photos and customised animated stickers. Get message alerts instantly with push notifications.
                                Share your moments, Like and comment on photos with your friends. Like and comment on blogs with everybody.
                            </article>

                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/us/app/english-radio-ielts-toefl/id724108987?mt=8">
                                <img src="img/appstore.png">
                            </a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.smartray.englishradio&hl=en">
                                <img src="img/google_play.png">
                            </a>
                            
                            <ul class="list-inline">
                                <li>Date: March 2015</li>
                                <li>Client: Kristy</li>
                                <li>Category: Android&iOS, online chatting</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- hichat portfolio modal -->
    <div class="portfolio-modal modal fade" id="wm_hichat" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>HiChat</h2>
                            <p class="item-intro text-muted">Android&iOS project for video chat.</p>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/hichat/mobile/1.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/hichat/mobile/2.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/hichat/mobile/3.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/hichat/mobile/4.png" alt="">
                            </div>
                            
                            <div class="row">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/hichat/mobile/5.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/hichat/mobile/6.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/hichat/mobile/7.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/hichat/mobile/8.png" alt="">
                            </div>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/hichat/mobile/9.png" alt="">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/hichat/mobile/10.png" alt="">
                            </div>

                            <h5>Description</h5>
                            <article>
                                Say Hi can help you find new people nearby! It helps you find love by chat, meet and date new friends
                            </article>
                            <h5>Technology</h5>
                            <article>
                                Geolocation, VideoChat, VoiceMessage, Facebook api integration, emoji
                            </article>

                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/us/app/sayhi-chat-messenger-to-love/id469609836?mt=8">
                                <img src="img/appstore.png">
                            </a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.unearby.sayhi&hl=en">
                                <img src="img/google_play.png">
                            </a>
                            
                            <ul class="list-inline">
                                <li>Date: Jan 2014</li>
                                <li>Client: Larry</li>
                                <li>Category: Android&iOS, video chat</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- meru portfolio modal -->
    <div class="portfolio-modal modal fade" id="wm_meru" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Meru</h2>
                            <p class="item-intro text-muted">Android&iOS taxi app</p>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/meru/mobile/1.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/meru/mobile/2.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/meru/mobile/3.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/meru/mobile/4.png" alt="">
                            </div>
                            
                            <div class="row">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/meru/mobile/5.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/meru/mobile/6.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/meru/mobile/7.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/meru/mobile/8.png" alt="">
                            </div>

                            <h5>Description</h5>
                            <article>
                                It lets you book a taxi cab online in one click and pay through the highly convenient Wallet for a comfortable ride. And now the Meru Cabs app comes with an awesome new feature 
                            </article>
                            <h5>Technology</h5>
                            <article>
                                track cab, booking, GPS integration, driver details, Airport/Kerb Pickups, Carpool by Meru
                            </article>

                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/in/app/meru-cabs/id673009740?mt=8">
                                <img src="img/appstore.png">
                            </a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.winit.merucab&hl=en">
                                <img src="img/google_play.png">
                            </a>
                            
                            <ul class="list-inline">
                                <li>Date: AUG 2014</li>
                                <li>Client: Nicolas</li>
                                <li>Category: Android&iOS, Taxi app</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- okcupid portfolio modal -->
    <div class="portfolio-modal modal fade" id="wm_okcupid" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Okcupid</h2>
                            <p class="item-intro text-muted">Android&iOS dating app</p>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/okcupid/mobile/1.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/okcupid/mobile/2.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/okcupid/mobile/3.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/okcupid/mobile/4.png" alt="">
                            </div>
                            
                            <div class="row">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/okcupid/mobile/5.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/okcupid/mobile/6.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/okcupid/mobile/7.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/okcupid/mobile/8.png" alt="">
                            </div>

                            <h5>Description</h5>
                            <article>
                                OkCupid is the only dating app that finds you matches based on what you really care about…and it’s 100% FREE. 
                            </article>
                            <h5>Technology</h5>
                            <article>
                                Payment gateway, chatting
                            </article>

                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/us/app/okcupid-dating/id338701294?mt=8">
                                <img src="img/appstore.png">
                            </a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.okcupid.okcupid&hl=en">
                                <img src="img/google_play.png">
                            </a>
                            
                            <ul class="list-inline">
                                <li>Date: SEP 2013</li>
                                <li>Client: Jason</li>
                                <li>Category: Android&iOS, dating app</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- oplayer portfolio modal -->
    <div class="portfolio-modal modal fade" id="wm_oplayer" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Oplayer</h2>
                            <p class="item-intro text-muted">Android/iOS, online streaming application</p>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-4" src="img/portfolio/web+mobile/oplayer/mobile/1.png" alt="">
                                <img class="img-responsive img-centered col-lg-4" src="img/portfolio/web+mobile/oplayer/mobile/2.png" alt="">
                                <img class="img-responsive img-centered col-lg-4" src="img/portfolio/web+mobile/oplayer/mobile/3.png" alt="">
                            </div>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-4" src="img/portfolio/web+mobile/oplayer/mobile/4.png" alt="">
                                <img class="img-responsive img-centered col-lg-4" src="img/portfolio/web+mobile/oplayer/mobile/5.png" alt="">
                                <img class="img-responsive img-centered col-lg-4" src="img/portfolio/web+mobile/oplayer/mobile/6.png" alt="">
                            </div>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/oplayer/mobile/7.jpg" alt="">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/oplayer/mobile/8.jpg" alt="">
                            </div>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/oplayer/mobile/9.jpg" alt="">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/oplayer/mobile/10.jpg" alt="">
                            </div>

                            <h5>Description</h5>
                            <article>
                                OPlayer is used to boost your iPhone/iPod's media abilities, you can also use it to streaming audio and video over the internet.
                            </article>
                            <h5>Technology</h5>
                            <article>
                                - XVID/DIVX AVI, WMV, RMVB, ASF, H264, MKV, TS, M2TS... most of all movie file formats.</br>
                                - MP3, WMA, WAV, OGG, FLAC... most of all audio file formats.</br>
                                - SMI, ASS, SUB, SRT, TXT... most of all subtitle file formats.</br>
                            </article>

                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/us/app/media-player-oplayer-lite/id385907472?mt=8">
                                <img src="img/appstore.png">
                            </a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.olimsoft.android.oplayer&hl=en">
                                <img src="img/google_play.png">
                            </a>
                            
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: Maria</li>
                                <li>Category: Android/iOS, online streaming</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- taxi portfolio modal -->
    <div class="portfolio-modal modal fade" id="wm_taxi" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Taxi</h2>
                            <p class="item-intro text-muted">ROR&mobile taxi app</p>

                            <h5>Android/IOS</h5>
                            <div class="row">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/taxi/mobile/1.png" alt="">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/taxi/mobile/2.png" alt="">
                            </div>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/taxi/mobile/3.png" alt="">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/taxi/mobile/4.png" alt="">
                            </div>

                            <h5>Web</h5>
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/taxi/web/driver.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/taxi/web/home.png" alt="">

                            <h5>Description</h5>
                            <article>
                                Taxi app in San Francisco, Los Angeles, Seattle, Sacramento, San Diego.
                                Request a cab, watch it come to you, get notified when it arrives, and pay automatically with your smartphone.
                            </article>
                            <h5>Technology</h5>
                            <article>
                                Braintree Payment gateway integration, Paypal, in-app purchase in mobile, driver registration, 
                                blog notification
                            </article>

                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/us/app/flywheel/id584165682?ls=1&mt=8">
                                <img src="img/appstore.png">
                            </a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.upstartmobile.Cabulous">
                                <img src="img/google_play.png">
                            </a>
                            <a target="_blank" href="http://www.flywheel.com/">
                                <img src="img/web.png">
                            </a>
                            
                            <ul class="list-inline">
                                <li>Date: Jan 2015</li>
                                <li>Client: Boris</li>
                                <li>Category: Web&mobile, Taxi app</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- twoo portfolio modal -->
    <div class="portfolio-modal modal fade" id="wm_twoo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Twoo</h2>
                            <p class="item-intro text-muted">ROR&mobile, social dating site.</p>

                            <h5>Android/iOS</h5>
                            <div class="row">
                                <img class="img-responsive img-centered col-lg-4" src="img/portfolio/web+mobile/twoo/mobile/1.png" alt="">
                                <img class="img-responsive img-centered col-lg-4" src="img/portfolio/web+mobile/twoo/mobile/2.png" alt="">
                                <img class="img-responsive img-centered col-lg-4" src="img/portfolio/web+mobile/twoo/mobile/3.png" alt="">
                            </div>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-4" src="img/portfolio/web+mobile/twoo/mobile/4.png" alt="">
                                <img class="img-responsive img-centered col-lg-4" src="img/portfolio/web+mobile/twoo/mobile/5.png" alt="">
                                <img class="img-responsive img-centered col-lg-4" src="img/portfolio/web+mobile/twoo/mobile/6.png" alt="">
                            </div>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/twoo/mobile/7.png" alt="">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/twoo/mobile/8.png" alt="">
                            </div>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/twoo/mobile/9.png" alt="">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/twoo/mobile/10.png" alt="">
                            </div>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/twoo/mobile/11.png" alt="">
                                <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web+mobile/twoo/mobile/12.png" alt="">
                            </div>

                            <h5>Web</h5>
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/twoo/web/chatting.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/twoo/web/credit_card.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/twoo/web/dashboard.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/twoo/web/login.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/twoo/web/paypal.png" alt="">
                            <img class="img-responsive img-centered" src="img/portfolio/web+mobile/twoo/web/select.png" alt="">

                            <h5>Description</h5>
                            <article>This is a social dating site.
                            </article>
                            <h5>Technology</h5>
                            <article>Mail confirm, Paypal, credit card, connect with Facebook, Google+, Chatting, Hotmail, Skype, Facebook, Yahoo, Gmail, Google+ api</article>

                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/us/app/twoo-meet-new-people/id486773266?mt=8">
                                <img src="img/appstore.png">
                            </a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.twoo">
                                <img src="img/google_play.png">
                            </a>
                            <a target="_blank" href="https://www.twoo.com/">
                                <img src="img/web.png">
                            </a>
                            
                            <ul class="list-inline">
                                <li>Date: AUG 2014</li>
                                <li>Client: Daphne</li>
                                <li>Category: Ruby&Mobile, dating app</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- viber portfolio modal -->
    <div class="portfolio-modal modal fade" id="wm_viber" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Viber</h2>
                            <p class="item-intro text-muted">Android&iOS SMS/Video calling app.</p>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/viber/mobile/1.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/viber/mobile/2.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/viber/mobile/3.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/viber/mobile/4.png" alt="">
                            </div>

                            <div class="row">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/viber/mobile/5.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/viber/mobile/6.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/viber/mobile/7.png" alt="">
                                <img class="img-responsive img-centered col-lg-3" src="img/portfolio/web+mobile/viber/mobile/8.png" alt="">
                            </div>

                            <h5>Description</h5>
                            <article>
                                With Viber, everyone in the world can connect. Freely
                            </article>
                            <h5>Technology</h5>
                            <article>
                                phone call, SMS, video/audio calling via wifi, Share photo and video, Follow, Delete message, push notification, iCloud access, QR scan
                            </article>

                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/en/app/viber/id382617920?mt=8">
                                <img src="img/appstore.png">
                            </a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.viber.voip&hl=en">
                                <img src="img/google_play.png">
                            </a>
                            
                            <ul class="list-inline">
                                <li>Date: OCT 2015</li>
                                <li>Client: Bill</li>
                                <li>Category: Android&iOS, SMS/Video calling</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
