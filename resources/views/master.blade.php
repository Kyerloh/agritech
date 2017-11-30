<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Agritech</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="Footer-with-button-logo.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <style>
         .body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family:;
                
                  background: #212121;
                  
            }
            .spacer {
            margin-bottom: 100px;
        }
        .cart-image {
            width: 100px;
        }
        .footer {
            background-color: #077713;
            padding: 20px 0;
            color:black;
        }
        .table>tbody>tr>td {
            vertical-align: middle;
        }
        .side-by-side {
            display: inline-block;
        }





/* footer style */
.full {
    width: 100%;  
}
.gap {
  height: 30px;
  width: 100%;
  clear: both;
  display: block;
}
.footer {
  background: white;
  
  padding-bottom: 0px;
  position: center;
  
  border-bottom: ;
  border-top: 0px solid #DDDDDD;
   

    width: 1410px;
    height: 0px;
    border: 3px;
     left: 80px;
     right: 0px;

}
.footer p {
  margin: 0;
}
.footer img {
  max-width: 100%;
}
.footer h3 {
  border-bottom: 1px solid #BAC1C8;
  color: #54697E;
  font-size: 18px;
  font-weight: 600;
  line-height: 27px;
  padding: 40px 0 10px;
  text-transform: uppercase;
}
.footer ul {
  font-size: 13px;
  list-style-type: none;
  margin-left: 0;
  padding-left: 0;
  margin-top: 15px;
  color: #7F8C8D;
}
.footer ul li a {
  padding: 0 0 5px 0;
  display: block;
}
.footer a {
  color: #78828D;
}
.supportLi h4 {
  font-size: 20px;
  font-weight: lighter;
  line-height: normal;
  margin-bottom: 0 !important;
  padding-bottom: 0;
}
.newsletter-box input#appendedInputButton {
  background: #FFFFFF;
  display: inline-block;
  float: left;
  height: 30px;
  clear: both;
  width: 100%;
}
.newsletter-box .btn {
  border: medium none;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  -o-border-radius: 3px;
  -ms-border-radius: 3px;
  border-radius: 3px;
  display: inline-block;
  height: 40px;
  padding: 0;
  width: 100%;
  color: #fff;
}
.newsletter-box {
  overflow: hidden;
}
.bg-gray {
  background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
  box-shadow: 0 1px 0 #B4B3B3;
}
.social li {
  background: none repeat scroll 0 0 #B5B5B5;
  border: 2px solid #B5B5B5;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
  float: left;
  height: 36px;
  line-height: 36px;
  margin: 0 8px 0 0;
  padding: 0;
  text-align: center;
  width: 36px;
  transition: all 0.5s ease 0s;
  -moz-transition: all 0.5s ease 0s;
  -webkit-transition: all 0.5s ease 0s;
  -ms-transition: all 0.5s ease 0s;
  -o-transition: all 0.5s ease 0s;
}
.social li:hover {
  transform: scale(1.15) rotate(360deg);
  -webkit-transform: scale(1.1) rotate(360deg);
  -moz-transform: scale(1.1) rotate(360deg);
  -ms-transform: scale(1.1) rotate(360deg);
  -o-transform: scale(1.1) rotate(360deg);
}
.social li a {
  color: #EDEFF1;
}
.social li:hover {
  border: 2px solid #2c3e50;
  background: #2c3e50;
}
.social li a i {
  font-size: 16px;
  margin: 0 0 0 5px;
  color: #EDEFF1 !important;
}
.footer-bottom {
  background: #E3E3E3;
  border-top: 1px solid #DDDDDD;
  padding-top: 10px;
  padding-bottom: 10px;

}
.footer-bottom p.pull-left {
  padding-top: 6px;
}

    </style>
</head>
<body>

    <header>

        <nav class="navbar navbar-default navbar-static-top">
          
           <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="{{route('profile')}}">Home</a></li>
        <li><a href="{{route('product')}}">Products</a></li>
        <li><a href="{{route('about')}}">About</a></li>
        <li><a href="{{route('deal')}}">today's deals</a></li>
        <li><a href="{{route('contact')}}">Contact</a></li>
      </ul>
               
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
            
                <li class="{{ set_active('wishlist') }}"><a href="{{ url('/wishlist') }}"><font color="#077713">Wishlist ({{ Cart::instance('wishlist')->count(false) }})</font></a></li>
                <li class="{{ set_active('cart') }}"><a href="{{ url('/cart') }}"><font color="#077713">Cart....... ({{ Cart::instance('default')->count(false) }})</font></a></li>
              </ul>
            </div><!--/.nav-collapse -->
          
        </nav>

    </header>

    @yield('content')



  

<hr/>



<footer>  

<div class="footer" >
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Get to know us  </h3>
                    <ul>
                        <li> <a href="#"> carees </a> </li>
                        <li> <a href="#"> About Agritech </a> </li>
                        <li> <a href="#"> Agriteck founders </a> </li>
                  
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Make deal with us  </h3>
                    <ul>
                        <li> <a href="#"> become an Agritech Vendor</a> </li>
                        <li> <a href="#"> buy on Agritech </a> </li>
                       
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Agritech payment mode </h3>
                    <ul>
                        <li> <a href="#"> credit card Marketplace </a> </li>
                        <li> <a href="#"> Visa </a> </li>
                        <li> <a href="#"> Mastercard </a> </li>
                        <li> <a href="#"> Mpesa </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Let us help you </h3>
                    <ul>
                        <li> <a href="#"> your account </a> </li>
                        <li> <a href="#"> your ordres </a> </li>
                        <li> <a href="#"> Return and placement </a> </li>
                        <li> <a href="#"> shipping rate and policies </a> </li>
                        <li> <a href="#"> help </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Get in touch </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center"> 
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> email <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                         <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="https://twitter.com/"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href=""> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="https://www.instagram.com/charles_kyalo/"> <i class="fa fa-instagram">   </i> </a> </li>
                        <li> <a href=""> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
     
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left">  </p>
            <div class="pull-right">
              
            </div>
        </div>
    </div>
 </footer>

<!--End Footer-->

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
@yield('scripts')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>