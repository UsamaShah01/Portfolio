<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link href="{{asset('/portfolio/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/portfolio/ionicons/css/ionicons.min.css')}} " rel="stylesheet">
    <link href="{{asset('/portfolio/css/animate.min.css')}} " rel="stylesheet">
    <link href="{{asset('/portfolio/css/aos.css')}}" rel="stylesheet">
    <!-- main style -->
    <link href="{{asset('/portfolio/css/style.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">

            <div class="preloader" aria-busy="true" aria-label="Loading, please wait." role="progressbar">
            </div>

        </div>
    </div>
    <!-- ./Preloader -->
    
    <!-- header -->
    <header class="navbar-fixed-top">
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#experience">experience</a></li>
                <li><a href="#projects">projects</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- ./header -->
    
    <!-- home -->
    <div class="section" id="home" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="disply-table">
                <div class="table-cell" data-aos="fade-up" data-aos-delay="0">
                    <h4>Ahmed Eissa</h4>
                    <h1>Ui &<br /> Ux Designer</h1> </div>
            </div>
        </div>
    </div>
    <!-- ./home -->
    
    <!-- about -->
    <div class="section" id="about">
        <div class="container">
            <div class="col-md-6" data-aos="fade-up">
                <h4>01</h4>
                <h1 class="size-50">Know <br /> About me</h1>
                <div class="h-50"></div>
                <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value. Quickly promote premium strategic theme areas vis-a-vis.</p>
                <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value.</p>
                <div class="h-50"></div> <img src="{{asset('/portfolio/img/Signature.svgs')}}" width="230" alt="" />
                <div class="h-50"></div>
            </div>
            <div class="col-md-6 about-img-div">
                <div class="about-border" data-aos="fade-up" data-aos-delay=".5"></div>
                <img src="{{asset('/portfolio/img/about-img.jpg')}}" width="400" class="img-responsive" alt="" align="right" data-aos="fade-right" data-aos-delay="0" />
            </div>
        </div>
    </div>
    <!-- ./about -->
    
    <!-- experience  -->
    <div class="section" id="experience">
        <div class="container">
            <div class="col-md-12">
                <h4>02</h4>
                <h1 class="size-50">My <br /> Experience</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-12">
                <ul class="timeline">
                    <li class="timeline-event" data-aos="fade-up">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">April 2016 - Present</p>
                            <h3>Geil,Danke! GmbH</h3>
                            <h4>eines Web-Studios</h4>
                            <p><strong>Projektmanagement mit Scrum</strong>
                                <br>Ständiges Verbessern des agilen Entwicklungsprozesses beispielsweise durch Grunt, Yeoman, GIT, JIRA und BrowserStack.</p>
                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".2">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">November 2014 - Mars 2016</p>
                            <h3>Freelancer</h3>
                            <h4>Designer und Autor</h4>
                            <p>Konzeption, Design und Produktion von Digitalen Magazinen mit InDesign, der Adobe Digital Publishing Suite und HTML5. Co-Autorin der Fachbücher "Digitales Publizieren für Tablets" und "Adobe Digital Publishing Suite" erschienen im dpunkt.verlag.</p>
                        </div>
                    </li>
                    <li class="timeline-event" data-aos="fade-up" data-aos-delay=".4">
                        <label class="timeline-event-icon"></label>
                        <div class="timeline-event-copy">
                            <p class="timeline-event-thumbnail">April 2014</p>
                            <h3>konplan gmbh</h3>
                            <h4>IT-Consultant</h4>
                            <p><strong>Systemarchitektur, Consulting</strong>
                                <br>Konzeption und Modellierung von Systemen und APIs für Digital Publishing und Entitlement nach SOA</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ./experience -->
    
    <!-- projects -->
    <div class="section" id="projects">
        <div class="container">
            <div class="col-md-12">
                <h4>03</h4>
                <h1 class="size-50">My <br /> Projects</h1> 
            </div>
            <!-- main container -->
            <div class="main-container portfolio-inner clearfix">
                <!-- portfolio div -->
                <div class="portfolio-div">
                    <div class="portfolio">
                        <!-- portfolio_filter -->
                        <div class="categories-grid wow fadeInLeft">
                            <nav class="categories">
                                <ul class="portfolio_filter">
                                    <li><a href="" class="active" data-filter="*">All</a></li>
                                    <li><a href="" data-filter=".photography">Photography</a></li>
                                    <li><a href="" data-filter=".logo">Logo</a></li>
                                    <li><a href="" data-filter=".graphics">Graphics</a></li>
                                    <li><a href="" data-filter=".ads">Advertising</a></li>
                                    <li><a href="" data-filter=".fashion">Fashion</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- portfolio_filter -->
                        
                        <!-- portfolio_container -->
                        <div class="no-padding portfolio_container clearfix" data-aos="fade-up">
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6  fashion logo">
                                <a id="demo01" href="#animatedModal" class="portfolio_item"> <img src="{{asset('/portfolio/img/portfolio/01.jpg')}}" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Mockups in seconds</span> <em>Fashion / Logo</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                            
                            <!-- single work -->
                            <div class="col-md-4 col-sm-6 ads graphics">
                                <a id="demo02" href="#animatedModal" class="portfolio_item"> <img src="{{asset('/portfolio/img/portfolio/03.jpg')}}" alt="image" class="img-responsive" />
                                    <div class="portfolio_item_hover">
                                        <div class="portfolio-border clearfix">
                                            <div class="item_info"> <span>Floating mockups</span> <em>Ads / Graphics</em> </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- end single work -->
                        
                            <!-- end single work -->
                        </div>
                        <!-- end portfolio_container -->
                    </div>
                    <!-- portfolio -->
                </div>
                <!-- end portfolio div -->
            </div>
            <!-- end main container -->
        </div>
    </div>
    <!-- ./projects -->
    
    <!-- contact -->
    <div class="section" id="contact">
        <div class="container">
            <div class="col-md-12">
                <h4>04</h4>
                <h1 class="size-50">Contact  Me</h1>
                <div class="h-50"></div>
            </div>
            <div class="col-md-4" data-aos="fade-up">

                <h3>Phone Number</h3>
                <p>+20 5555 569 42</p>
                <h3> Mobile Numberr</h3>
                <p>+20 5555 569 42</p>
                <h3>Email</h3>
                <p>mail@info.me </p>

                <h3>Social Network</h3>

                <ul class="social">
                    <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram"></i></a></li>
                    <li><a href="#"><i class="ion-social-dribbble"></i></a></li>
                </ul>
                <div class="clearfix"></div>
                <div class="h-50"></div>
            </div>
            <div class="col-md-8" data-aos="fade-up">
                <form class="contact-bg" id="contact-form" name="contact" method="post" novalidate="novalidate">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" />
                    <input type="email" name="email" class="form-control" placeholder="Your E-mail" />
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number" />
                    <textarea name="message" class="form-control" placeholder="Your Message" style="height:120px"></textarea>
                    <button id="submit" type="submit" name="submit" class="btn btn-glance">Send</button>
                    <div id="success">
                        <p class="green textcenter"> Your message was sent successfully! I will be in touch as soon as I can. </p>
                    </div>
                    <div id="error">
                        <p> Something went wrong, try refreshing and submitting the form again. </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ./contact -->

    <!--DEMO01-->
    <div id="animatedModal" class="popup-modal">
        <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
        <div id="btn-close-modal" class="close-animatedModal close-popup-modal"> <i class="ion-close-round"></i> </div>
        <div class="clearfix"></div>
        <div class="modal-content">
            <div class="container">
                <div class="portfolio-padding">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Geschäfts Eines<br /> Web-Studios</h2>
                        <div class="h-50"></div>
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value. Quickly promote premium strategic theme areas vis-a-vis.</p>
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value.</p>
                        <br />
                        <br /> <img src="img/portfolio/02.jpg" alt="" class="img-responsive" />
                        <br />
                        <br />
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value. Quickly promote premium strategic theme areas vis-a-vis.</p>
                        <p>Appropriately maintain standards compliant total linkage with cutting-edge action items. Enthusiastically create seamless synergy rather than excellent value.</p>
                        <br />
                        <br /> </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('/portfolio/js/jquery.js')}}"></script>
    <!--  plugins  -->
    <script src="{{asset('/portfolio/js/bootstrap.min.j')}}s"></script>
    <script src="{{asset('/portfolio/js/plugins.js')}}"></script>
    <script src="{{asset('/portfolio/js/aos.js')}}"></script>
    <script src="{{asset('/portfolio/js/jquery.form.js')}}"></script>
    <script src="{{asset('/portfolio/js/jquery.validate.min.js')}}"></script>

    <!--  main script  -->
    <script src="{{asset('/portfolio/js/custom.js')}}"></script>
</body>

</html>