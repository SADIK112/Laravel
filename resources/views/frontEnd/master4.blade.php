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
        
        <!-- Windows 8 -->
        <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        
        <title>@yield('title')</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" type="text/css" href="{{asset ('frontEnd/css/style.css')}}">
        
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset ('frontEnd/css/font-awesome.min.css')}}"/>
        
    </head>

    <body>    
        <section id="menu-page">
            
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
                <li><a href="{{url('/home')}}">Home</a></li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/Services')}}">Services</a></li>
                <li class="active"><a href="{{url('/Menus')}}">Menus</a></li>
                <a style="margin-left:15px; margin-top:10px;" href="{{url('/signIn')}}" class="btn btn-info" role="button">Sign In</a>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
    </nav>
    <hr>
            <section id="meal-cart">
                <div class="container">
                    <div class="row">
                    @foreach($publishedProducts as $publishedProduct)
                        <div class="col-md-4 col-ms-4">
                            <img src="{{asset ($publishedProduct->productImage)}}" alt=" " class="img-responsive" height="200" width="200">
                            <h3>{{$publishedProduct->productName}}<span class="value"> BDT({{$publishedProduct->productPrice}})</span><h3>
                            <p style="line-height:20px; text-align:left;">{{$publishedProduct->productShortDescription}}</p>
                            <button id="img-button" class="btn"><a href="{{url('/checkout') }}">Add to card</a></button>
                        </div>
                        @endforeach
                    </div>
                    
                         
                    </div>
                  
            </section>
           
            <hr>
            <br>
            
            <section id="testimonials">
                <div class="container">
                    <div class="testimonial-hed">
                        <h2>What our customer saying</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-ms-4">
                            <img src="{{asset ('frontEnd/images/p-1.jpg')}}" alt=" " class="img-responsive">
                            <h3>David Glinn</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        </div>
                        <div class="col-md-4 col-ms-4">
                            <img src="{{asset ('frontEnd/images/p-2.jpg')}}" alt=" " class="img-responsive">
                            <h3>Sania Mialia</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        </div>
                        <div class="col-md-4 col-ms-4">
                            <img src="{{asset ('frontEnd/images/p-3.jpg')}}" alt=" " class="img-responsive">
                            <h3>Mike Stefan</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry/</p>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <hr>
            <section id="firstmenu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-ms-6">
                           <div class="firstmenu-left">
                            <img src="{{asset ('frontEnd/images/menu-1.jpg')}}" alt=" " class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-6 col-ms-6">
                            <div class="firstmenu-right">
                                <h2>Starters</h2>
                                <div class="line-grid1"></div>
                                <p>The start of any meal is so important...So brace your appetite, while waiting for your main course. Our diverse and delicious appetizers will help you with that!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section id="firstmenu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-ms-6">
                           <div class="firstmenu-left">
                                <h2>Main course</h2>
                                <div class="line-grid1"></div>
                                <p>Resto's menu knows no borders and nationalities. whether you'll pick a meat, fish or vegetarian main course, be sure that it will be universally good!</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-ms-6">
                            <div class="firstmenu-right">
                                <img src="{{asset ('frontEnd/images/menu-2.jpg')}}" alt=" " class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <section id="firstmenu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-ms-6">
                           <div class="firstmenu-left">
                            <img src="{{asset ('frontEnd/images/menu-3.jpg')}}" alt=" " class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-6 col-ms-6">
                            <div class="firstmenu-right">
                                <h2>Desserts</h2>
                                <div class="line-grid1"></div>
                                <p>That sweet taste of a dessert at the end of the meal...If you look forward to it too, than you're at the right place! Our menu has prolific choice of desserts!</p>
                            </div>
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