<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ URL::to('assets/images/shiva2-122x145.png') }}" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Order List</title>
  <link rel="stylesheet" href="{{ url('assets/web/assets/mobirise-icons/mobirise-icons.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/tether/tether.min.css') }}') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap-grid.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap-reboot.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/dropdown/css/style.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/datatables/data-tables.bootstrap4.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/animatecss/animate.min.css') }}" type="text/css">
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
                <a href="{!! url('wcms/order2') !!}" class="nav-link link text-black display-5" style=""><span>Order</span></a>
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


<br><br>

  <section class="section-table cid-rmEhkIRgdt mt-5" id="table1-4">

  
  
  <div class="container container-table mt-5">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2 mt-5">
          Order History
      </h2>
      <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5">{{Auth::user()->fullname}}</h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Search:</label>
                  <input class="form-control input-sm" disabled="No">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">    
                <th class="head-item mbr-fonts-style display-7">Item</th>
                <th class="head-item mbr-fonts-style display-7">Image</th>
                <th class="head-item mbr-fonts-style display-7">Rate</th>
                <th class="head-item mbr-fonts-style display-7">Quantity</th>
                <th class="head-item mbr-fonts-style display-7">Description</th>
              </tr>
            </thead>

            <tbody> 
            @if($order->count())
        @foreach($order as $orders)            
            <tr>
                              
              <td class="body-item mbr-fonts-style display-7">{{ $orders->item_name }}</td>
              <td class="body-item mbr-fonts-style display-7"><img class="col-md-3" src="/{{ $orders->item_image }}" alt=""></td>
              <td class="body-item mbr-fonts-style display-7">{{ $orders->price }}</td>
              <td class="body-item mbr-fonts-style display-7">{{ $orders->quantity }}</td>
              <td class="body-item mbr-fonts-style display-7">{{ $orders->item_description }}</td>
               
            </tr>
            @endforeach
        @else

            <h2 colspan="4"> No record found</h2>

        @endif
          </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Showing</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">entrie(s)</span>
                <span class="infoFilteredBefore"> - Total </span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> entrie(s)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>


<section class="cid-rgiIjNRU8i" id="footer1-14">
    <div class="container">
        <div class="media-container-row content mbr-black align-center">
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


  <script src="{{ url('assets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/popper/popper.min.js') }}"></script>
  <script src="{{ url('assets/tether/tether.min.js') }}"></script>
  <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ url('assets/datatables/jquery.data-tables.min.js') }}"></script>
  <script src="{{ url('assets/datatables/data-tables.bootstrap4.min.js') }}"></script>
  <script src="{{ url('assets/viewportchecker/jquery.viewportchecker.js') }}"></script>
  <script src="{{ url('assets/theme/js/script.js') }}"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>