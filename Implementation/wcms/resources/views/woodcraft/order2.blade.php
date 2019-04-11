
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href=" {{ url('assets/images/shiva2-122x145.png') }}" type="image/x-icon">
  <meta name="description" content="">
  <title>Order</title>
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
                        Woodsite</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse align-right" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
              <li class="nav-item">
                <a class="nav-link link text-black display-5" style="color: #55b4d4;" href="{!! url('wcms/index2') !!}">Home</a>
              </li>
              <li class="nav-item">
                <a href="{!! url('wcms/order') !!}" class="nav-link link text-black display-5" style=""><span style="color:#82786e;">Order</span></a>
              </li>
              <li class="nav-item"><a class="nav-link link text-black display-5" href="{!! url('/post') !!}">Forum</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link text-black display-5" href="{!! url('wcms/aboutus') !!}">About US</a>
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



<div>
<br><br><br>
</div>
    
<section class="cid-rg6iDVUTMv mbr-parallax-background" id="header2-d" style="height: 10%;">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>
    <div class="container mbr-white">
        <div class="media-container-row">
            <div class="title col-12 col-md-8 mt-5">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    Products</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">Shop hundreds of our products today.</h3>
                
            </div>
        </div>
    </div>

    <hr style="background-color: white;">
    <!--Container-->
    <div class="container mb-5 mbr-white">
        <div class="row">
                <div class="card-wrapper media-container-row media-container-row">
                   
                            <div class="col-12 col-md-6">
                                <div class="wrapper">
                                    <!--Image-->
                                    <div class="img-fluid" style="width: 100%;">
                                        <img src="{{ URL::to('itemImages/mandala.png') }}" alt="" title="" style="width: 90%;"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-7 col-lg-4">
                                <div class="wrapper col-left">
                                    <!--Title-->
                                    <h4 class="card-title mbr-fonts-style display-5">Pushpa Mandal</h4>
                                    <!--Subtitle-->
                                    <p class="mbr-text mbr-fonts-style pt-3 display-7">
                                        Mandala</p>
                                
                                    <!--Cost-->
                                    <p class="mbr-text mbr-fonts-style display-2">
                                        रू 150,000.00
                                    </p>
                                    <!--Btn-->
                                    <div class="mbr-section-btn col-md-12"><a href="{!! url('wcms/orderprocess') !!}" class="btn btn-secondary-outline m-0 display-4">
                                            Order</a></div>
                                            </div>
                            <hr style="background-color: white;">
                                
                            </div>


            <!--Card-2-->
            
            <!--Card-3-->
            
        </div>
    </div>
</div>
</section>

<section class="services1 cid-rg85aqlADV" id="services1-11">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row justify-content-center">
            <!--Titles-->
            <div class="title pb-5 col-12">
                
                <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5">
                    Products</h3>
            </div>
            <!--Card-1-->
            @if($item->count())
        @foreach($item as $items)

         <form action="{!! url('/orderprocess', $items->itemid) !!}" class="col-md-4">
            <div class="card col-12 col-md-6 col-lg-3 mb-5">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="/{{ $items->item_image }}" alt="" title="" style="width: 255px;height: 175px;">
                    </div>
                    <div class="card-box" style="width: 210px;">
                        <h4 class="card-title mbr-fonts-style">{{ $items->item_name }}</h4>
                        
                        <!--Btn-->
                        <div class="mbr-section-btn align-left mb-1">
                            <input type="submit" style="font-size: 20px; height: 75px; width: 150px;" class="btn btn-warning-outline display-7 p-0" value="रू {{ $items->price }}.00">
                        </div>
                    </div>
                </div>
            </div>
        </form>
            @endforeach
        @else

            <h2 colspan="4"> No record found</h2>12

        @endif
            
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    var msg = '{{Session::get('success')}}';
    var exist = '{{Session::has('success')}}';
    if(exist)
    {
        alert(msg);
    }
</script>

<section class="cid-rgiIjNRU8i" id="footer1-14">
    <div class="container">
        <div class="media-container-row content align-center">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="index.html">
                        <img src="{{ url::to('assets/images/shiva-162x193.png') }}" alt="Mobirise" title="">
                    </a>
                </div>
                <h2><b>Woodsite</b></h2>
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
                <p class="mbr-text"><a href="index.html" class="text-warning">Home</a><br><a href="page2.html" class="text-warning">Order</a><br><a href="page1.html" class="text-warning">Forum</a><br><a href="page5.html" class="text-warning">About Us</a><br><a href="page4.html" class="text-warning">Settings</a></p>
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