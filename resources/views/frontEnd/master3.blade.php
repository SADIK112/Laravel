<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">        
        <meta name="author" content="CHANGE-ME">
        <meta name="description" content="CHANGE-ME">
        
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

    <body>    
    <section id="Service-Page">
        <section id=Service-nav>
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
                <li><a href="{{url ('/about')}}">About</a></li>
                <li class="active"><a href="{{url ('/Services')}}">Services</a></li>
                <li><a href="{{url ('/Menus')}}">Menus</a></li>
                <a style="margin-left:15px; margin-top:10px;" href="{{url('/signIn')}}" class="btn btn-info" role="button">Sign In</a>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
    </nav>
       <br>
             
            
      <div class="services" id="services">
          <div class="container">
			<div class="ser-top wthree-3 wow fadeInDown w3-service-head">
				<h3>Our Services </h3>
			</div>
			<div class="w3-service-grids set-6">
				<div class="col-md-4  services-grid1 ser-left icon1 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-cutlery hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Breakfast</h4>
					<p>SUN – FRI  |  7:00AM - 10:00AM</p>
                    <p>We are always ready to welcome customer with some delicious Breakfast with a excellent view</p>
                    </div>
				<div class="col-md-4  services-grid1 ser-left icon2 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-spoon hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Lunch</h4>
                    <p>SUN – FRI  |  1:00PM - 3:30PM</p>
					<p>Whether you’re in the mood for Chinese food or Mexican,Food Lounch will satisfy your lunchtime craving.</p>
				</div>
				<div class="col-md-4 services-grid1 ser-left icon3 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-glass hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Dinner</h4>
					<p>SUN – FRI  |  8:00PM - 11.00PM</p>
					<p>Enjoy the luxury dinner at our resturant.Thai,chinese,Greek anything you want are available.</p>
				</div>
				<div class="clearfix"></div>
				<div class="col-md-4 services-grid2 ser-left icon4 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-apple hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Supper food </h4>
					<p>Whether in Quantity or Quality we are best in everything we do.</p>
				</div>
				<div class="col-md-4 services-grid2 ser-left icon5 hi-icon-wrap hi-icon-effect-6">
					<i class="fa fa-glass hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Best Drinks</h4>
					<p>We have every kind of drinks for your mood.Don't miss the wine testing opportunity.</p>
				</div>
				<div class="col-md-4 services-grid2 ser-left icon6 hi-icon-wrap hi-icon-effect-6"  data-wow-duration=".8s" data-wow-delay=".2s">
					<i class="fa fa-leaf hi-icon hi-icon-sort-by-attributes" aria-hidden="true"></i>
					<h4>Salads & Desserts</h4>
					<p>Enjoy our healty salads,and desserts after the meal with something sweet</p>
				</div>
				
				</div>
				<div class="clearfix"></div>
			</div>	
		</div>
</div>
      <br>
      
    <section id="chefs">
	    <div class="container">
		    <div class="chefs-heading">
			    <h3>Our Chefs</h3>
		    </div>
		    <div class="row">
                <div class="col-md-3 col-ms-3 chefs-info">
                    <img src="{{asset ('frontEnd/images/chef1.jpg')}}" alt=" " class="img-responsive">
                    <h3>Jenny beck</h3>
                    <p>Pantry chef</p>
                </div>
                <div class="col-md-3 col-ms-3 chefs-info">
                    <img src="{{asset ('frontEnd/images/chef2.jpg')}}" alt=" " class="img-responsive">
                    <h3>elvis rich</h3>
                    <p>western chef</p>
                </div>
                <div class="col-md-3 col-ms-3 chefs-info">
                    <img src="{{asset ('frontEnd/images/chef3.jpg')}}" alt=" " class="img-responsive">
                    <h3>steve mark</h3>
                    <p>Master chef</p>
                </div>
                <div class="col-md-3 col-ms-3 chefs-info">
                    <img src="{{asset ('frontEnd/images/chef4.jpg')}}"" alt=" " class="img-responsive">
                    <h3>jewel chery</h3>
                    <p>gravy specialist</p>
                </div>
	        </div>
        </div>
    </section>              
         <hr> 
         <br>              
        <section id=Reservation>
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-ms-5 left-col">
                        <h2>Reserve by Phone</h2>
                        <p>Reserve our table over telephone twenty four seven, we are available from morning to night (11AM - 10PM)</p>
                        <p>Our telephone number is given in the info o our website.Do check out and make your booking corretly and specifically.</p>
                    </div>
                    <div class="col-md-2 col-ms-2 mid-col">
                        <div class="grid-line"></div>
                    </div>
                    <div class="col-md-5 col-ms-5 right-col">
                        <h2>For event Booking</h2>
                        <p>We have a nice grand hotel for events reservation.It has a massive capacity and a luxirious views for our guest.</p>
                        <p>Book your event atleast one week earlier to make sure we are able to make a positive response to you call</p>
                    </div>
                </div>
            </div>
        </section> 
        <br>
        <section id=Reservation-time>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-ms-3 left-input">
                          <input type="number" name="quantity" min="1" max="6" value="1" class="Reserve-people">
                    </div>
                    <div class="col-md-3 col-ms-3 middle-input">
                        <input type="date" name="reserveday" class="Reserve-date">
                    </div>
                    <div class="col-md-3 col-ms-3 right-input">
                        <input type="time" name="usr_time" class="Reserve-time">
                    </div>
                    <div class="col-md-3 col-ms-3 submit-input">
                        <input type="submit" value="Find a table" class="submit-btn">
                    </div>
                </div>
            </div>
        </section>                       
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
                                      
                                            
                                                
                                                    
                                                            
    </section>
    </body>
</html>