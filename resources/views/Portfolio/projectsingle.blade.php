<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Single Page</title>
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
                <li><a href="/">Home</a></li>
              
        </nav>
    </header>
    <!-- ./header -->
    
    
    <div class="section"style="margin-top: 100px" >
    <div class="container">
        <div class="col-md-12">
            <!-- Display the image here -->
            <img src="{{ asset('uploads/image/' . $singlecase->image) }}" alt="Image" class="img-responsive" />
        </div>
    </div>
    </div>

    <!-- home -->
    <div class="section" style="margin-top: 100px">
    <div class="container" >
    <center><h1>{{$singlecase->title}}</h1></center>
    </div>
    </div>
    <!-- ./home -->
    

        <!-- home -->
        <div class="section">
        <div class="container">
            {!! $singlecase->content !!}
      
         </div>
    <!-- jQuery -->

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