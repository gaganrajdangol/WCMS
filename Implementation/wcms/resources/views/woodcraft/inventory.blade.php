
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/shiva2-122x145.png" type="image/x-icon">
  <title>Admin</title>
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
                    <a href="index.html">
                        <img src=" {{ URL::to('assets/images/shiva2-122x145.png') }}" alt="wcms" title="" style="height: 5.1rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="index.html">
                        WCMS</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link link text-black display-5" href="{!! url('wcms/settings') !!}">
                    <span class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"></span>
                </a>
            </li>
        
            <li class="nav-item dropdown">
            <a class="navbar-buttons mbr-section-btn link dropdown-toggle display-4" style="color: black;text-decoration: none;" data-toggle="dropdown-submenu" href="#">Admin<span class="caret"></span></a>
            <div class="dropdown-menu rounded border-dark">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Logout</a>
            </div>
        </li>
        </ul>
        </div>
    </nav>
</section>

<section class="mbr-section content4 cid-rg8kFJXlk1" id="content4-1a">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2"><strong>
                    I</strong>nventory <strong>M</strong>anagement</h2>
                
                
            </div>
        </div>
    </div>
</section>

<section style="margin: 20px; background-color: rgb(255, 255, 255);" class="mbr-section--bg-adapted mbr-section--relative" id="deltapiformeditor-1e" data-rv-view="13">

    <div class="dpform">
        <div class="col-md-10 col-md-offset-1">


            <style>.dpform{text-align:left;}</style>

            <div style="background-color: rgb(255, 255, 255);">
                <div style="background-color: rgb(255, 255, 255);"><hr><hr>

                    <form class="form-horizontal" action="{!! url('/inventory) !!}">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>ADD ITEMS</legend>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="item_name">Item Name</label>
                                <div class="col-md-4">
                                    <input id="item_name" name="item_name" type="text" placeholder="Item Name" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="item_type">Item Type</label>
                                <div class="col-md-4">
                                    <select id="item_type" name="item_type" class="form-control">
                                        <option value="1">Select Item Type</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="itemprice">Item Price</label>
                                <div class="col-md-4">
                                    <input id="item_price" name="item_price" type="text" placeholder="रू 0.00" class="form-control input-md">

                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="item_description">Item Description</label>
                                <div class="col-md-4">
    <textarea class="form-control" id="item_description" name="item_description">Add Description...
</textarea>
                                </div>
                            </div>

                            <!-- File Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="item_image">Image</label>
                                <div class="col-md-4">
                                    <input id="item_image" name="item_image" class="input-file" type="file">
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="btnadd"></label>
                                <div class="col-md-4">
                                    <button id="btnadd" name="btnadd" class="btn btn-inverse">ADD</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
	

</section>


<section class="services6 cid-rg8rYcwOPL" id="services6-1f">
    <!---->
    
   
    
    <!--Container-->
    <div class="container">
        <!--Titles-->
        <div class="title col-12">
            <h2 class="align-left mbr-fonts-style m-0 display-1">
                Product List
            </h2>

        </div>
    @if($item->count())
        @foreach($item as $items)


            <!--Card-1-->
                <div class="card col-12 pb-5">
                    <div class="card-wrapper media-container-row media-container-row">
                        <div class="card-box">
                            <div class="row">
                                <div class="col-12 col-md-2">
                                    <!--Image-->
                                    <div class="mbr-figure">
                                        <img src="assets/images/noimage-320x198.png" alt="" title="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-10">
                                    <div class="wrapper">
                                        <div class="top-line pb-3">
                                            <h4 class="card-title mbr-fonts-style display-5">{!! str_limit($items->item_name,60) !!}</h4>
                                            <p class="mbr-text cost mbr-fonts-style m-0 display-5"></p><p>Update&nbsp;&nbsp;&nbsp;&nbsp;Delete</p><p></p>
                                        </div>
                                        <div class="bottom-line">
                                            <p class="mbr-text mbr-fonts-style display-7">{!! str_limit($items->item_type,60) !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        @else

            <h2 colspan="4"> No record found</h2>

        @endif

    </div>
</section>

  <script src=" {{ url('js/app.js')}}"></script>

    <script>
      var msg = '{{Session::get('success') }}';
      var exist = '{{Session::has('success')}}';
      if(exist)
      {
        alert(msg);
      }
      </script>

<section class="cid-rgiIeIqRn2" id="footer1-13">

    

    

    <div class="container">
        <div class="media-container-row content text-white">
            <div class="col-12 col-md-3">
                <div class="media-wrap">
                    <a href="index.html">
                        <img src="assets/images/shiva-162x193.png" alt="Mobirise" title="">
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
  <script src=" {{ url('assets/deltapi-plugin/highlight.pack.js') }}"></script>
  <script src=" {{ url('assets/deltapi-plugin/deltapiform.js') }}"></script>
  <script src=" {{ url('assets/dropdown/js/script.min.js') }}"></script>
  <script src=" {{ url('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src=" {{ url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src=" {{ url('assets/theme/js/script.js') }}"></script>
  
</body>
</html>
