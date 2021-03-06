
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href=" {{ URL::to('assets/images/shiva2-122x145.png') }}" type="image/x-icon">
  <title>Settings</title>
  <link rel="stylesheet" href=" {{ url('assets/web/assets/mobirise-icons/mobirise-icons.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/tether/tether.min.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/bootstrap/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/deltapi-plugin/agate.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/dropdown/css/style.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/socicon/css/styles.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/theme/css/style.css') }}">
  <link rel="stylesheet" href=" {{ url('assets/mobirise/css/mbr-additional.css') }}" type="text/css">
  
  
  
</head>
<body>





<section class="menu cid-rg6hCT4CBx" once="menu" id="menu2-18">


    

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
                        <img src=" {{ URL::to('assets/images/shiva2-122x145.png') }}" alt="wcms" title="" style="height: 5.1rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="{{ ('/wcms/index2') }}">
                        Woodsite</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                  <a class="nav-link link text-black display-5" href="javascript:history.back()" style="">
                    <b><span class="mbri-left"></span><b> Back</b></b>
                </a>
            </li>
        
            </ul>
        </div>
    </nav>
</section>

<section class="mbr-section content4 cid-rg8zY9aF7t" id="content4-1j">

    

    <div class="container">
        <div class="media-container-row">
          <div class="">
            <ul class="breadcrumb">
  <li><a href="{!! url('/order2') !!}">Settings / &nbsp;</a></li>
  <li> Update Profile</li>
</ul>
          </div>
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    Settings</h2>
                
                
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



<section style="margin: 20px; background-color: rgb(255, 255, 255);" class="mbr-section--bg-adapted mbr-section--relative" id="deltapiformeditor-1k" data-rv-view="22">

    <div class="dpform">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">


<style>.dpform{text-align:left;}</style>

<div style="background-color: rgb(255, 255, 255);">
<div style="background-color: rgb(255, 255, 255);">


  <form method="post" class="form-horizontal" action="{!!url('/updateprofile', Auth::user()->userid)!!}" enctype="multipart/form-data">

          @csrf
          {!!method_field('put')!!}

<fieldset>

<!-- Form Name -->
<legend>Update Profile</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fullname">Full Name</label>  
  <div class="col-md-4">
  <input id="fullname" name="fullname" type="text" placeholder="Full Name" class="form-control input-md" value="{!!(Auth::user()->fullname)!!}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>  
  <div class="col-md-4">
  <input id="address" name="address" type="text" placeholder="Address" class="form-control input-md" value="{!!(Auth::user()->address)!!}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact</label>  
  <div class="col-md-4">
  <input id="contact" name="contact" type="text" placeholder="+977" class="form-control input-md" value="{!!(Auth::user()->contact)!!}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="emaile">Email</label>  
  <div class="col-md-4">
  <input id="emaile" name="email" type="text" placeholder="Email" class="form-control input-md" value="{!!(Auth::user()->email)!!}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="Username" class="form-control input-md" value="{!!(Auth::user()->username)!!}">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnupdate"></label>
  <div class="col-md-4">
    <button id="btnupdate" type="submit" name="btnupdate" class="btn btn-primary" value="update">Update</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
                </div>
            </div>
        </div>
    </div>



<script>
      var msg = '{{Session::get('success')}}';
      var exist = '{{Session::has('success')}}';
      if(exist)
      {
        alert(msg);
      }
</script>	

</section>

<section class="cid-rgiETv0yeQ" id="footer1-z">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3 mbr-black align-center">
                <div class="media-wrap">
                    <a href="{!! url('wcms/index2') !!}">
                        <img src="{{ url('assets/images/shiva-162x193.png') }}" alt="Mobirise" title="">
                    </a>
                </div>
                <h2>WOODSITE</h2>
            </div>
            <div class="col-12 col-md-4 mbr-fonts-style display-7">
                <h5 class="pb-3">
                    Address
                </h5>
                <p class="mbr-text"></p><p>Mahakvimarga, Kathmandu Dillibazar</p><p></p>
            </div>
            <div class="col-12 col-md-4 mbr-fonts-style display-7">
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
                    Menu</h5>
                <p class="mbr-text">
                  <a href="{!! url('wcms') !!}" class="text-warning">Home</a><br>
                  <a href="{!! url('/order2') !!}" class="text-warning">Order</a><br>
                  <a href="{!! url('/post') !!}" class="text-warning">Forum</a><br>
                  <a href="{!! url('wcms/aboutus') !!}" class="text-warning">About Us</a><br>
                  <a href="{!! url('wcms/settings') !!}" class="text-warning">Settings</a><br>
                  <a href="{!! url('/orderlist') !!}" class="text-warning">Orderlist</a><br>
                  <a href="" data-target="#modalHelp" data-toggle="modal" class="text-warning">Help</a><br>
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
  <script src=" {{ url('assets/deltapi-plugin/highlight.pack.js') }}"></script>
  <script src=" {{ url('assets/deltapi-plugin/deltapiform.js') }}"></script>
  <script src=" {{ url('assets/dropdown/js/script.min.js') }}"></script>
  <script src=" {{ url('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src=" {{ url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src=" {{ url('assets/theme/js/script.js') }}"></script>
  
  
</body>
</html>