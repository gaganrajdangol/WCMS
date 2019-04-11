<!DOCTYPE html>
<html>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ URL::to('assets/images/logo4.png') }}" type="image/x-icon">
  <meta name="description" content="">
  
  <title>Forum</title>
  <link rel="stylesheet" href="{{ url('assets/font-awesome-brands/../css/fontawesome.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/font-awesome-brands/css/brands.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/animatecss/animate.min.css') }}" type="text/css">
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
                    <a href="{!! url('wcms/index2') !!}">
                        <img src="{{ URL::to('assets/images/shiva2-122x145.png') }}" alt="wcms" title="" style="height: 5.1rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="index.html">
                        Woodsite</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse align-right" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
              <li class="nav-item">
                <a class="nav-link link text-black display-5" style="color: #55b4d4;" href="{!! url('wcms/index2') !!}">Home</a>
              </li>
              <li class="nav-item">
                <a href="{!! url('wcms/order') !!}" class="nav-link link text-black display-5" >Order</a>
              </li>
              <li class="nav-item"><a class="nav-link link text-black display-5" href="{!! url('wcms/forum') !!}"><span style="color:#82786e;">Forum</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link link text-black display-5" href="{!! url('wcms/aboutus') !!}">About US</a>
              </li>
              <li class="nav-item">
                <a class="nav-link link text-black display-5" href="">
                  <span class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"></span></a>
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


 <section class="header15 cid-rjUYoC1zhK mbr-parallax-background mt-5" id="header15-2" style="background-image: url('{{ url::to('assets/images/background4.jpg') }}'); ">

    

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
<div class="row">
    <div class="mbr-white col-lg-8 col-md-7 mt-5 mb-5 content-container">        
        
    </div>

    <div class="col-lg-4 col-md-5 mt-5 mb-5" style="border-style:solid; border-color: white; border-width: 1px;">
    <div class="form-container">
        <div class="media-container-column" data-form-type="formoid">
            <div data-form-alert="" hidden="" class="align-center">Message Sent!!</div>
            <form class="mbr-form"  method="post"><input type="hidden" name="email" data-form-email="true" value="">
                <div data-for="name">
                    <div class="form-group align-right">
                        <h4 class="mbr-white">Message Admin</h4>
                    </div>
                </div>
                
                
                <div class="form-group" data-for="message">
                    <textarea type="text" class="form-control px-3" name="message" rows="7" placeholder="Message" data-form-field="Message" id="message-header15-2"></textarea>
                </div>
                <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-white-outline display-4"><span class="fab fa-facebook-messenger mbr-iconfont mbr-iconfont-btn" style="font-size: 22px;"></span>Send</button></span>
            </form>
        </div>
    </div>
    </div>
</div>
    </div>
    
</section>
<div>
        @if($message = Session::get('success'))
  <div class="alert alert-info">
   <p><h6>{{$message}}</h6></p>
  </div>
  @endif
    </div>


<div class="container col-md-12">
  <div class="mt-4 mb-4">
  </div>
  <div class="container col-md-12">
    <!-- <div class="col-md-3">
      <img src="{{ url::to('assets/images/noimage-240x149.png') }}" class="rounded float-left img-fluid img-thumbnail" alt="">
    </div> -->
    <h4>Join Our Forum</h4>
    <form class="form-horizontal" action="{!! url('/forum') !!}" method="post">
       @csrf
                        {{method_field('put')}}
                        <fieldset>
    <div class="form-group align-right col-md-6" data-for="message">
      <textarea type="text" class="form-control" name="post" rows="5" required placeholder="Post as {{Auth::user()->fullname}}" value="" id="message-header15-2"></textarea>
                    <input type="text" name="userid" value="{{Auth::user()->userid}}" class="form-control px-3" style="display: none;">
                    <input type="text" name="usernme" value="{{Auth::user()->fullname}}" class="form-control px-3" style="display: none;">
    <button href="" type="submit"  name="btnpost" class="btn btn-secondary-outline display-7"><span class="fab fa-facebook-messenger mbr-iconfont mbr-iconfont-btn" style="font-size: 18px;"></span>Post</button>
    </div>
    </fieldset>
  </form>
</div>
  </div>
  <hr><hr>
   
   @if($forum->count())
        @foreach($forum as $forums)
  <div class="container">
    <div class="container row col-md-12">
      <div class="col-md-12">
        <label class="card-title mbr-fonts-style display-5">{!!($forums->usernme)!!}</label>
      </div class="col-md-10">
      <div class="col-md-12">
        <span style="font-size: 22px;">{!!($forums->post)!!}</span>
        <div class="col-md-10">
          <div>
            <a href="#"><span class="mbri-like" style="font-size: 18px;"></span></a><span style="font-size: 12px;color:grey;"> 123</span> &nbsp&nbsp <span style="font-size: 12px;color:lightgrey;">{!!($forums->created_at)!!}</span>
          </div>

          <!-- REply -->
          <div>
            @foreach($forumreply as $reply)
          <b>{!!($reply->username)!!}: </b>{!!($reply->reply)!!}

          <div style="font-size: 10px;color:lightgrey;">
            &nbsp&nbsp<a href="#"><span class="mbri-like" style="font-size: 18px;"></span></a><span style="font-size: 12px;color:grey;"> 123</span>  &nbsp&nbsp <span style="font-size: 12px;color:lightgrey;">{!!($reply->created_at)!!}</span>
          </div>
          @endforeach
        </div>
        </div>
        <div class="col-md-12 align-right">
          <form class="form-horizontal" action="{!! url('/forumreply',$forums->postid) !!}" method="post">
       @csrf
                        {{method_field('put')}}
                        <fieldset>
    <div class="form-group align-right" data-for="message">
      <input type="text" class="form-control align-right" name="reply" required  placeholder="Reply as {{Auth::user()->fullname}}" value="" id="message-header15-2">
                    <input type="text" name="userid1" value="{{Auth::user()->userid}}" class="form-control" style="display: none;">
                    <input type="text" name="postid" value="{!!($forums->postid)!!}" class="form-control" style="display: none;">
                    <input type="text" name="username1" value="{{Auth::user()->fullname}}" class="form-control" style="display: none;">
    <button href="" type="submit"  name="btnreply" class="btn btn-small btn-primary-outline p-1" onclick="">Reply</button>
    </div>
    </fieldset>
  </form>
        </div>
      </div>
    </div>
    
  </div>
  @endforeach
        @else

            <h2 colspan="4"> No record found</h2>

        @endif

<hr><hr>
<section class="cid-rgiETv0yeQ" id="footer1-z">

    

    

    <div class="container">
        <div class="media-container-row content align-right">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="index.html">
                        <img src="{{ URL::to('assets/images/shiva-162x193.png') }}" alt="Mobirise" title="">
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
                <p class="mbr-text"><a href="{!! url('wcms/index2') !!}" class="text-warning">Home</a><br>
                  <a href="{!! url('wcms/order') !!}" class="text-warning">Order</a><br>
                  <a href="{!! url('/post') !!}" class="text-warning">Forum</a><br>
                  <a href="{!! url('wcms/aboutus') !!}" class="text-warning">About Us</a><br>
                  <a href="{!! url('wcms/settings') !!}" class="text-warning">Settings</a></p>
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