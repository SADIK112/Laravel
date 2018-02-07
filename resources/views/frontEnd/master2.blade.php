<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">        
        
        <!-- Mobile Stuff -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="msapplication-tap-highlight" content="no">
        
        <!-- Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="CHANGE-ME">
        <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon.png">
        
        <!-- Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="CHANGE-ME">
        <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">
        
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset ('frontEnd/css/font-awesome.min.css')}}" />
        
        <title>@yield('title')</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" type="text/css" href="{{asset ('frontEnd/css/style.css')}}">
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    </head>

    <body class="about-body">    
       <section id="about-page">
        <nav class="navbar navbar-default navbar" id="about-navbar">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><span class="hed3">Food</span><span class="hed4"> Lounge</span></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{url ('/home')}}">Home</a></li>
                <li class="active"><a href="{{url ('/about')}}">About</a></li>
                <li><a href="{{url ('/Services')}}">Services</a></li>
                <li><a href="{{url ('/Menus')}}">Menus</a></li>
                <a style="margin-left:15px; margin-top:10px;" href="{{url('/signIn')}}" class="btn btn-info" role="button">Sign In</a>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
    </nav>
    </br>
        <section id="hero-image">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-3">About Us</h1>
                </div>
                <div class="image-overlay"></div>
            </div>
        </section>
    <div class="clearfix"></div>
    </br>
    <section id="showcase">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-ms-6">
                    <div class="showcase-left">
                        <h1>Welcome To Good Food</h1>
                        <div class="line"></div>
                        <p>Food lounge is one of the finest resturant in the city.Here along with delicious foods we provide a wonderful natural environment for our visitors.</p>
                        <a class="btn btn-primary btn-action popup wow fadeInUp" data-wow-delay="0.2s" id="modalBtn">Know More</a>

                    </div>
                </div>
                <div class="col-md-6 col-ms-6">
                    <div class="showcase-right">
                        <img src="{{asset ('frontEnd/images/food-image.png')}}">
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    </br>
    <section id="Our-Mission">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-ms-6">
                    <div class="Our-Mission-left">        
                        <img src="{{asset ('frontEnd/images/Res-owner.jpg')}}">
                    </div>
                    
                </div>
                <div class="col-md-6 col-ms-6">
                    <div class="Our-Mission-right">
                        <h1>Our Mission</h1>
                        <div class="line1"></div>
                        <p>Our mission is to spread our food fragnence through out the whole city.we are planning to make more branches in this cities corner.</p>
                        <a class="btn btn-primary btn-action popup wow fadeInUp" data-wow-delay="0.2s" href="#">Know More</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <hr>
    <hr>
    <section id="standards">
        <div class="footer">
            <div class="row">
                <div class="col-xs-4 col-ms-4 col-md-4">
                    <h2 class="address-hed">Food lounch</h2>
                    <h4>Address : </h4>
                    <h4>152 Fishponds Bristol</h4>
                        <h4>Main street road-02. </h4>
                    <h4>Telephone: 1-800-1233-321</h4>
                    <h4>Email: mail@tplink.org</h4> 
                </div>
                <div class="col-xs-4 col-ms-4 col-md-4">
                        <h2 class="contact-hed">Contact Us</h2>
                   <form>
                        <input type="name" placeholder="Your name" name="Name" class="form-control">
                        <br>
                        <input type="email" placeholder="email" name="Email" class="form-control">
                        <br>
                        <textarea rows="4" cols="20" placeholder="message" class="form-control"></textarea>
                        <br>
                        <button class="submit-btn">Submit</button>
                    </form>
                </div>
                <div class="col-xs-4 col-ms-4 col-md-4">
                    <h2 class="news-hed">Newsletter</h2>
                    <h3>Keep up with the latest resturant news and events.</h3>
                    <h3>Enter your e-mail and subscribe to our newsleter.</h3>
                    <div class="mail-form">
                        <input type="text" placeholder="" name="mail" class="mail-text">
                        </br>
                        <button class="news-btn">Subscribe</button>
                    </div>
                </div>
                <div class="copyright-data">
                    
                    <p class="footer-paragraph">
                        "Food Lounge &copy;"
                        <span id="copyright-year">2017</span>
                        <a href="privacy.html" class="text-base">Privacy Policy</a>
                    </p>
                </div>
        </div>
    </section>
    
    <script
      src="https://code.jquery.com/jquery-3.2.1.js"
      integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<script>
    window.sr = ScrollReveal();
    sr.reveal('.navbar',{
        duration: 2000,
        origin:'bottom'
    });
    sr.reveal('.showcase-left',{
        duration: 3000,
        origin:'top',
        distance:'300px'
    });
    sr.reveal('.showcase-right',{
        duration: 3000,
        origin:'right',
        distance:'300'
    });
    sr.reveal('.Our-Mission-left',{
        duration: 3000,
        origin:'left',
        distance:'300'
    });
    sr.reveal('.Our-Mission-right',{
        duration: 3000,
        origin:'right',
        distance:'300'
    });
</script>
</body>
</html>