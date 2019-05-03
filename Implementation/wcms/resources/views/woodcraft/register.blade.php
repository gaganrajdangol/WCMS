<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ URL::to('assets/images/shiva2-122x145.png" type="image/x-icon') }}">
  <title>Home</title>
  <link rel="stylesheet" href="{{ url('assets/web/assets/mobirise-icons/mobirise-icons.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/tether/tether.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap-grid.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap-reboot.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/socicon/css/styles.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/dropdown/css/style.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/theme/css/style.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.css') }}" type="text/css">

  
  
  
</head>

<body>

 <section class="menu cid-rg6hCT4CBx" once="menu" id="menu2-b">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="{!! url('wcms') !!}">
                        <img src=" {{ URL::to('assets/images/shiva2-122x145.png') }}" alt="wcms" title="" style="height: 5.1rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="index.html">
                        Woodsite</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
              <li class="nav-item">
                <a class="nav-link link text-black display-5" href="{!! url('wcms') !!}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link text-black display-5" href="{!! url('wcms/aboutus') !!}">About US</a>
              </li>
            </ul>

            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-info display-4" href="{!! url('wcms/login') !!}"><span class="mbri-login"></span>&nbsp;Login</a></div>
        </div>
    </nav>
</section>



<section class="cid-rg6iDVUTMv mbr-fullscreen mbr-parallax-background" id="header2-d">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>


    <div class="container mbr-align-left col-md-6" style="opacity: 0.9;">
        <div class="media-container-row"style="opacity: 0.9;">
            <img src="{{ URL::to('assets/images/joinus.jpg') }}" alt="" style="opacity: 0.7;">
        </div>

        </div>

    <div class="container align-right col-md-6">
            <div class="card">
                

                <div class="container align-center" style="border: 1px solid white">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group h2  mbr-white">Register</div>

                        
                            <div class="col-md-6" style="float:left;">

                            <div class="form-group col-md-12">
                                <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text fa fa-user"></span>
                            </div>
                                <input id="fullname" type="text" style="font-size:0.8rem;" class="form-control h4 {{ $errors->has('name') ? ' is-invalid' : '' }}" name="fullname" value="{{ old('name') }}" placeholder="Fullname" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group col-md-12">
                                <div class="input-group">
                                <div class="input-group-prepend">
                            <span class="input-group-text mbri-pin"></span>
                        </div>

                           
                                <input id="address" type="text" style="font-size:0.8rem;" class="form-control h4 {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" placeholder="Address" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    

                       <div class="form-group col-md-12">
                                <div class="input-group">
                                <div class="input-group-prepend">
                            <i class="input-group-text fa fa-phone"></i>
                        </div>
                            
                                <input id="contact" type="text" style="font-size:0.8rem;" class="form-control h4 {{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" placeholder="Contact" required autofocus>

                                @if ($errors->has('contact'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                                 <div class="input-group">
                                <div class="input-group-prepend">
                            <i class="input-group-text fa fa-envelope"></i>
                        </div>

                                <input id="email" type="email" style="font-size:0.8rem;" class="form-control h4 {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6" style="float: left;">

                        <div class="form-group col-md-12">
                                <div class="input-group">
                                <div class="input-group-prepend">
                            <span class="input-group-text fa fa-user"></span>
                        </div>
                                <input id="username" type="text" style="font-size:0.8rem;" class="form-control h4 {{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                                <div class="input-group">
                                <div class="input-group-prepend">
                           <span class="input-group-text fa fa-key"></span>
                            </div>
                                <input id="password" type="password" style="font-size:0.8rem;" class="form-control h4 {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                                <div class="input-group">
                                <div class="input-group-prepend">
                            <span class="input-group-text fa fa-key"></span>

                            </div>
                                <input id="password-confirm" type="password" style="font-size:0.8rem;" class="form-control h4" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
                        </div>
                    </div>

                        <div class="form-group row col-md-12">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
</section>



<section class="cid-rgiETv0yeQ" id="footer1-z">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3 mbr-black align-center">
                <div class="media-wrap">
                    <a href="{!! url('wcms') !!}">
                        <img src="{{URL::to('assets/images/shiva-162x193.png') }}" alt="Mobirise" title="">
                    </a>
                </div>
                <h3><b>Woodsite</b></h3>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text"></p><p>Mahakvimarga, Kathmandu Dillibazar</p><p></p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contacts
                </h5>
                <p class="mbr-text">
                    Email: traditionalwoodcraftstore@gmail.com
&nbsp;<br>Phone: +977-9860058411<br>Fax: +1 (0) 000 0000 002
                </p>
            </div>
            <div class="col-12 col-md-3 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Contents</h5>
                <p class="mbr-text">
                  <a href="{!! url('wcms') !!}" class="text-warning">Home</a><br>
                  <a href="{!! url('wcms/aboutus2') !!}" class="text-warning">About Us</a><br>
                  <a href="{!! url('wcms/login') !!}" class="text-warning">Login</a>  <br>               
                  <a href="{!! url('wcms/register') !!}" class="text-warning">Sign Up</a>
                  </p> 
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2019 WCMS - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon" style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://instagram.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon" style="color: rgb(35, 35, 35); fill: rgb(35, 35, 35);"></span>
                            </a>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  <script src=" {{ url('assets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src=" {{ url('assets/popper/popper.min.js') }}"></script>
  <script src=" {{ url('assets/tether/tether.min.js') }}"></script>
  <script src=" {{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src=" {{ url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src=" {{ url('assets/dropdown/js/script.min.js') }}"></script>
  <script src=" {{ url('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src=" {{ url('assets/theme/js/script.js') }}"></script>
  <script src=" {{ url('assets/parallax/jarallax.min.js') }}"></script>





</body>
</html>