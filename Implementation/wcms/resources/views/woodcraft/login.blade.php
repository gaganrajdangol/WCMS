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
                        WCMS</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
              <li class="nav-item">
                <a class="nav-link link text-black display-5" href="{!! url('wcms') !!}">Home</a>
              </li>
              <li class="nav-item">
                <a href="{!! url('wcms/order') !!}" class="nav-link link text-black display-5" >Order</a>
              </li>
              <li class="nav-item"><a class="nav-link link text-black display-5" href="{!! url('wcms/froum') !!}">Forum</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link text-black display-5" href="{!! url('wcms/aboutus') !!}">About US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link text-black display-5" href="{!! url('wcms/settings') !!}">
                  <span class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"></span></a>
              </li>
            </ul>

            <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-info display-4" href="{!! url('wcms/login') !!}">Login</a></div>
        </div>
    </nav>
</section>

<section class="cid-rg6iDVUTMv mbr-fullscreen mbr-parallax-background" id="header2-d">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-left col-md-6">
    </div>

    <div class="container align-right col-md-3">
            <div class="card">
                

                <div class="container align-center col-md-12" style="border: 1px solid white">
<!-- form -->

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group h2 mbr-white mt-2">Login</div>

                        <div class="row" style="float:left;">                        

                            <div class="form-group col-md-12">
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mbri-user display-4"></span>
                                </div>
                                <input id="username" type="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" style="font-size:0.8rem;" placeholder="Username" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                                <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text mbri-key display-4"></span>
                                </div>

                            
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" style="font-size:0.8rem;" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row col-md-12 align-center">
                                <div class="form-check col-md-12">
                                    <input class="form-check-input {{ old('remember') ? 'checked' : '' }}" type="checkbox" name="remember" id="remember">

                                    <label class="form-check-label mbr-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>

                        <div class="form-group row col-md-12">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    Login
                                </button>

                                <div class="form-group row justify-content-center col-md-12 mb-0">
                                    <a class="btn btn-link mbr-white pr-2" href="{{ url('wcms/register') }}">
                                        Create Account
                                    </a>
                                  </div>
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
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="{!! url('wcms') !!}">
                        <img src="{{ URL::to('assets/images/shiva-162x193.png') }}" alt="Mobirise" title="">
                    </a>
                </div>
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
                    <a href="{!! url('wcms/order') !!}" class="text-warning">Order</a><br>
                    <a href="{!! url('/post') !!}" class="text-warning">Forum</a><br>
                    <a href="{!! url('wcms/aboutus') !!}" class="text-warning">About Us</a><br>
                    <a href="page4.html" class="text-warning">Settings</a>
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
