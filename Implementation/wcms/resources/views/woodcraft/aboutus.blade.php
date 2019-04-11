
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href=" {{ URL::to('assets/images/shiva2-122x145.png') }}" type="image/x-icon">
  <meta name="description" content="Website Creator Description">
  <title>About Us</title>
  <link rel="stylesheet" href=" {{ url('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/socicon/css/styles.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/theme/css/style.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
  
  
  
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
                    <a href="index.html">
                        <img src="{{ URL::to('assets/images/shiva2-122x145.png') }}" alt="wcms" title="" style="height: 5.1rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="{!! url('wcms/index2') !!}">
                        WCMS</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse align-right" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
              <li class="nav-item">
                <a class="nav-link link text-black display-5" style="color: #55b4d4;" href="{!! url('wcms/index2') !!}">Home</a>
              </li>
              <li class="nav-item">
                <a href="{!! url('/order2') !!}" class="nav-link link text-black display-5" >Order</a>
              </li>
              <li class="nav-item"><a class="nav-link link text-black display-5" href="{!! url('/post') !!}">Forum</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link text-black display-5" href="{!! url('wcms/aboutus') !!}"><span style="color:#82786e;">About Us</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link link text-black display-5" href="{!! url('wcms/settings') !!}">
                  <span class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"></span>
                </a>
              </li>

<li class="nav-item dropdown">

                                <a class="nav-link link dropdown-toggle btn btn-sm btn-info mbr-white col-md-12" style="border-radius: 45px;" data-toggle="dropdown-submenu" href="#"><h5>{{Auth::user()->fullname}}</h5><span class="caret"></span></a>
                             
                                <div class="dropdown-menu btn btn-sm btn-info ml-4 col-md-10" style="border-radius: 20px;">
                                    <a class="dropdown-item mbr-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><h5>Logout</h5></a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>


            </ul>

  


        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.info/l">free website templates</a></section><section class="testimonials1 cid-rg8ER7VnFx" id="testimonials1-1q">

    

    
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">
                    About Us</h2>
                <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5">Reviews</h3>
            </div>
        </div>
    </div>

    <div class="container pt-3 mt-2">
        <div class="media-container-row">
            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/noimage-240x149.png" alt="" title="">
                        </div>
                        <p class="mbr-text mbr-fonts-style display-5">★★★★☆</p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                             Amit Pradhan</div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">
                               Programmer</small>
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/noimage-240x149.png" alt="" title="">
                        </div>
                        <p class="mbr-text mbr-fonts-style display-5">★★★★☆<br></p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                             Anish Budhathoki</div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">Designer</small>
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        <div class="testimonial-photo">
                            <img src="assets/images/noimage-240x149.png" alt="" title="">
                        </div>
                        <p class="mbr-text mbr-fonts-style display-5">★★★★★<br></p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                             Bibek Dahal</div>
                        <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">
                               Developer</small>
                    </div>
                </div>
            </div>

            

            

            
        </div>
    </div>   
</section>

<section class="testimonials2 cid-rg8VEVkawb" id="testimonials2-1t">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure pr-lg-5" style="width: 130%;">
              <img src="assets/images/natraj-2-812x1024.jpg" alt="" title="">
            </div>
            <div class="media-content px-3 align-self-center mbr-white py-2">
                    <p class="mbr-text testimonial-text mbr-fonts-style display-7">
                       Without natural resources life itself is impossible. From birth to death, natural resources, transformed for human use, feed, cloth ,shelter, and transport us. Upon them we depend for every material necessity, comfort, convenience, and protection in our lives. Without abundant natural resources prosperity is out of reach.
                    </p>
                    <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">
                       Gagan Raj Dangol</p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">
                       PROPRIETER</p>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section contacts3 cid-rg8EhL7dNK" id="contacts3-1m">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title col-12">
                <h2 class="align-left mbr-fonts-style display-1">
                    Contact</h2>
                
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-thumbs-o-up fa mbri-pin"></span>
                            </span>
                            <div class="b-info b-adress">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    Address:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">
                                    Mahakavimarga, Kathmandu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-phone fa"></span>
                            </span>
                            <div class="b-info b-phone">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    Phone:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">
                                    +977-9860058411</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-comment-o fa"></span>
                            </span>
                            <div class="b-info b-mail">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    E-mail:
                                </h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">
                                    traditionalwoodcraftstore@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="wrapper">
                            <span class="iconfont-wrapper">
                                <span class="amp-iconfont icon fa-th-large fa socicon-facebook socicon"></span>
                            </span>
                            <div class="b-info b-mail">
                                <h5 class="align-left mbr-fonts-style display-5">
                                    Facebook</h5>
                                <p class="mbr-text align-left mbr-fonts-style display-7">
                                    facebook.com/tradwcs12</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map1 cid-rgitb2kyMO" id="map1-11">

     

    <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCy9r70T3NYf3PhvVflTo0_zdif2_IoIYs&amp;q=place_id:ChIJn6wOs6lZwokRLKy1iqRcoKw" allowfullscreen=""></iframe></div>
</section>

<section class="cid-rgiI7myj1b" id="footer1-11">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="{!! url('wcms') !!}">
                        <img src="{{ URL::to('assets/images/shiva-162x193.png') }}" alt="" title="">
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
                    <a href="{!! url('wcms/settings') !!}" class="text-warning">Settings</a>
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