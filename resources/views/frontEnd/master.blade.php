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
        
        <!-- Windows 8 -->
        <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        
        
        <link rel="stylesheet" type="text/css" href="{{asset ('frontEnd/css/style.css')}}">
        <link rel="shortcut icon" href="favicon.ico">
        
        <title>@yield('title')</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Forum" rel="stylesheet">
        
	    <link rel="stylesheet" type="text/css" href="{{asset ('frontEnd/css/font-awesome.min.css')}}" />
        
        <script
        src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.sidebarBtn').click(function(){
                    $('.sidebar').toggleClass('active');
                    $('.sidebarBtn').toggleClass('toggle');
                })
            })
        </script>
    </head>

    <body class="home-page">

      <section id="hero-sideBar">    
       <div class="sidebar">
           <h1 class="sidebar-head">Choose your Option</h1>
         <ul>
            <li class="home-active"><a href={{url('/home')}}>Home</a></li>
            <li><a href="{{url('/about')}}">About</a></li>
            <li><a href="{{url('/Services')}}">Services</a></li>
            <li><a href="{{url('/Menus')}}">Menus</a></li>
            <li><a href="{{url('/Contact')}}">Contact Us</a></li>
         </ul>
        <button class="sidebarBtn">
            <span></span>
        </button>
    </div>
         
        </section>
        
        <header class="v-header container">
           
            <div class="fullscreen-video-wrap">
                <video src="{{asset ('frontEnd/video/food-vedio.mp4')}}" autoplay="true" loop="true"></video>
            </div>
            <div class="header-overlay"></div>
            <div class="header-content">
                <h1><span class="hed1">Food</span><span class="hed2"> Lounge</span></h1>
                <p>There is no sincere love than the love of food indeed<br/>So come enjoy and order the best dishes in our Town</p>
                <a href="{{url('/Menus')}}" class="btn">Order</a>
                <a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
                <a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
				<a href="http://www.rss.com"><i class="fa fa-rss"></i></a>
                <a href="http://www.vk.com"><i class="fa fa-vk"></i></a>
            </div>
            
        </header>
    
    </body>
</html>