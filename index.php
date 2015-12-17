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
                        <p class="text-muted">ROR, shoping, credit card, signup with facebook</p>
                    </div>
                </div>
                <!-- <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#web_billsync" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/bill_sync.gif" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>bill Sync</h4>
                        <p class="text-muted">ROR, Payment, REST API, auto pay, Mail, SMS<br>
                            We provide a video about this project. It will help you to understand more.</p>
                    </div>
                </div> -->
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#awsservice" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/aws.gif" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>AWS Service</h4>
                        <p class="text-muted">Amazon EC2, Amazon S3, Amazon RDS, Amazon VPC, Amazon API Gateway, Amazon Mobile Hub, Amazon DynamoDB, Elastic Load Balancing, ...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#ios_storyteller" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/storyteller_preview.gif" class="img-responsive center" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Storyteller</h4>
                        <p class="text-muted">Obj c, bubble message, Facebook, Video...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#and_sonicxm" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/ios/sonic/sonic_preview.gif" class="img-responsive center" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>SonicXM</h4>
                        <p class="text-muted">Android, Tomahawk plugin</p>
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
                        <p class="text-muted">web & mobile, opentok, location-map, Facebook, Google+, Linkedin, Twitter</p>
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
                                    <p class="text-muted">Linus and Armen had been friends in Universität Hamburg. They had both been interested in Linux security. They kept in touch after graduation, and decided to design a new Secure Linux Service based on SELinux. Their service had been accepted as very robust at Web port attack from serveral companies.</p>
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
                        <h4>Armen Diprizio</h4>
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
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/adal_wulf.png" class="img-responsive img-circle" alt="">
                        <h4>Adal Wulf</h4>
                        <p class="text-muted">Lead Developer</p>
                    </div>
                </div> -->
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/arimon_frank.png" class="img-responsive img-circle" alt="">
                        <h4>Arimon Frank</h4>
                        <p class="text-muted">Lead Developer</p>
                    </div>
                </div> -->
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/amelie_berg.png" class="img-responsive img-circle" alt="">
                        <h4>Amelie Berg</h4>
                        <p class="text-muted">Hybrid developer</p>
                    </div>
                </div>
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/adolf_miller.png" class="img-responsive img-circle" alt="">
                        <h4>Adolf Miller</h4>
                        <p class="text-muted">Social Programmer</p>
                    </div>
                </div> -->
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/cam_ceren.png" class="img-responsive img-circle" alt="">
                        <h4>Cam Ceren</h4>
                        <p class="text-muted">Mobile Programmer</p>
                    </div>
                </div> -->
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/cristian_portice.png" class="img-responsive img-circle" alt="">
                        <h4>Cristian Portice</h4>
                        <p class="text-muted">ROR Expert</p>
                    </div>
                </div> -->
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
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/lotta_dietrich.png" class="img-responsive img-circle" alt="">
                        <h4>Lotta Dietrich</h4>
                        <p class="text-muted">IOS Developer</p>
                    </div>
                </div>
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/max_adler.png" class="img-responsive img-circle" alt="">
                        <h4>Max Adler</h4>
                        <p class="text-muted">V/A Chatting Expert</p>
                    </div>
                </div> -->
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/mila_eichel.png" class="img-responsive img-circle" alt="">
                        <h4>Mila Eichel</h4>
                        <p class="text-muted">Mobile programmer</p>
                    </div>
                </div>
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

    <!-- Portfolio Modal 1 -->
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
                            <p class="item-intro text-muted">ROR project for world drink shop site.</p>

                            <img class="img-responsive img-centered" src="img/portfolio/web/drink/drink_about.png" alt="" />
                            <img class="img-responsive img-centered" src="img/portfolio/web/drink/drink_credit.png" alt="" />
                            <img class="img-responsive img-centered" src="img/portfolio/web/drink/drink_dashboard.png" alt="" />
                            <img class="img-responsive img-centered" src="img/portfolio/web/drink/drink_login.png" alt="" />                          
                            
                            <h5>Description</h5>
                            <article>you can buy drink at any place in the world. It provides world wide credit card for shopping a drink.</article>
                            <h5>Technology</h5>
                            <article>ROR, shoping logic, credit card, signup with facebook</article>
                            <h5>Links</h5>
                            <a target="_blank" href="https://itunes.apple.com/us/app/buddy-drinks/id978612190?ls=1&mt=8"><img src="img/appstore.png"></a>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.consumer.buddydrinks"><img src="img/google_play.png"></a>
                            <a target="_blank" href="https://github.com/llvc/drink"><img src="img/github.png"></a>
                            <a target="_blank" href="http://drnk.me/"><img src="img/web.png"></a>
                            <ul class="list-inline">
                                <li>Date: July 2010</li>
                                <li>Client: Susan Cain</li>
                                <li>Category: Web&mobile</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <!-- <div class="portfolio-modal modal fade" id="web_billsync" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>bill Sync</h2>
                            <p class="item-intro text-muted">ROR project for billing Sync company.</p>
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web/billSync/1.png" alt="">
                            <img class="img-responsive img-centered col-lg-6" src="img/portfolio/web/billSync/2.png" alt="">
                            <video width="320" height="240" controls>
                                <source src="img/portfolio/web/billSync/video.mp4" type="video/mp4">
                            </video> 

                            <h5>Description</h5>
                            <article>Never pay. If you take a picture of your billing, it will be paid automatically.</article>
                            <h5>Technology</h5>
                            <article>ROR, payment, auto payment, Mail, REST API, OCR detecting</article>
                            <h5>Links</h5>
                            <a target="_blank" href="https://github.com/llvc/billsync"><img src="img/github.png"></a>
                            <a target="_blank" href="https://bill-sync.com/"><img src="img/web.png"></a>
                            <ul class="list-inline">
                                <li>Date: July 2013</li>
                                <li>Client: Joe</li>
                                <li>Category: Web</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Portfolio Modal 3 -->
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

    <!-- Portfolio Modal 4 -->
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
                            <p class="item-intro text-muted">iPhone app for story teller.</p>

                            <img class="img-responsive img-centered" src="img/portfolio/ios/storyteller/storyteller.gif" alt=""><br />
                            
                            <h5>Description</h5>
                            <article>make up script, recording video, taking photo, uploading to server and share them on Facebook and Twitter. Although you take any ratio video, it merges correctly.</article>
                            <h5>Technology</h5>
                            <article>CameraView customizing, adjusting video ratio, video merging, merging video and photo together. Compose text on photo. Social uploading.</article>
                            <h5>Links</h5>
                            <a target="_blank" href="https://github.com/llvc/storyteller"><img src="img/github.png"></a>
                            <ul class="list-inline">
                                <li>Date: Nov 2014</li>
                                <li>Client: Ben</li>
                                <li>Category: iOS</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="and_sonicxm" tabindex="-1" role="dialog" aria-hidden="true">
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
                            <h2>SonicXM</h2>
                            <p class="item-intro text-muted">Android app for mediaplayer.</p>

                            <img class="img-responsive img-centered" src="img/portfolio/ios/sonic/sonic.gif" alt=""><br />
                            
                            <h5>Description</h5>
                            <article>It is a music player that can play music stored in many different places, including music subscription services, promotion platforms, networked libraries, online data lockers, and more. It does this by decoupling the name of the song from the source it was shared from (e.g. a friend's playlist) and fulfills the "play" request using all available sources. This allows Tomahawk users to create playlists using songs from their own computer, Spotify, YouTube, and more. The Toma.hk API uses Tomahawk's technology to allow users to embed a player for almost any song on a website using JavaScript.</article>
                            <h5>Technology</h5>
                            <article>Logging in and Searching musics from serveral streaming services like spotify, YouTube etc,</article>
                            <h5>Links</h5>
                            <a target="_blank" href="https://github.com/llvc/SonicXM"><img src="img/github.png"></a>
                            <ul class="list-inline">
                                <li>Date: March 2015</li>
                                <li>Client: Abdule</li>
                                <li>Category: Android</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
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
                            <p class="item-intro text-muted">Web & Mobile, Opentok, Login with Facebook, LinkedIn, Google+, Twitter, Map.</p>
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
                            <a target="_blank" href="https://github.com/llvc/gp2u"><img src="img/github.png"></a>
                            <a target="_blank" href="https://gp2u.com.au/"><img src="img/web.png"></a>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: James</li>
                                <li>Category: Web, Mobile</li>
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
