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
        
         <link rel="stylesheet" type="text/css" href="{{asset ('frontEnd/css/style.css')}}">
        
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset ('frontEnd/css/font-awesome.min.css')}}"/>
        
        <title>Contact</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
        
    </head>

    <body>    
        <section id="contact-page">
            
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
                    <li><a href="{{url ('/Services')}}">Services</a></li>
                    <li><a href="{{url ('/Menus')}}">Menus</a></li>
                    <a style="margin-left:15px; margin-top:10px;" href="{{url('/signIn')}}" class="btn btn-info" role="button">Sign In</a>
                  </ul>
                </div>
              </div>
    </nav>
       <hr>
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <div class="well lead text-center text-success">Hello {{ $customerById->firstName}}.Thanks for the confirmation.Please choose your payment method</div>
               </div>
           </div>
       </div>
       <br>
       <div class="container">
            <form class="form-horizontal" method="POST" action="{{url('/checkout/save-order') }}" role="form">
            {!! csrf_field() !!}
                <h2>Payment Method</h2>
                <div class="form-group">
                <div class="">
                    <label><input type="radio" name="paymentType" value="cashOnDelivery"> Cash On Delivery</label>
                </div>
            </div>
            <div class="form-group">
                <div class="">
                    <label><input type="radio" name="paymentType" value="bkash"> Bkash</label>
                </div>
            </div>
            <div class="form-group">
                <div class="">
                    <label><input type="radio" name="paymentType" value="paypal"> Paypal</label>
                </div>
            </div>

            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block">Submit Order</button>
            </div>
                
            </form> <!-- /form -->
        </div> <!-- ./container -->
        </section>
    </body>
</html>