
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ url('assets/images/shiva2-122x145.png" type="image/x-icon') }}">
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
                    <a href="index.html">
                        <img src="assets/images/shiva2-122x145.png" alt="wcms" title="" style="height: 5.1rem;">
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
              <li class="nav-item"><a class="nav-link link text-black display-5" href="page1.html">Forum</a>
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

<section class="engine"><a href="#">site design templates</a></section><section class="cid-rg6iDVUTMv mbr-fullscreen mbr-parallax-background" id="header2-d">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);"></div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
                    Traditional Wood Craft</h1>
                
                <p class="mbr-text pb-3 mbr-fonts-style display-5">
                    Decorate Your House, Office and Workspace with our products.<br>Hundred of items to choose from.</p>
                <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="page2.html">Buy Products</a>
                    <a class="btn btn-md btn-white-outline display-4" href="javascript:OpenModal('signup')">Join Us</a></div>
            </div>
        </div>
    </div>
    
</section>

<section class="mbr-section" id="witsec-modal-window-block-p" data-rv-view="5">

	<style>
	/* Let's not animate the contents of modal windows */
	.no-anim {
		-webkit-animation: none !important;
		-moz-animation: none !important;
		-o-animation: none !important;
		-ms-animation: none !important;
		animation: none !important;
	}
	</style>

	
	
	<div>
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered col-md-4" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="no-anim modal-title" id="loginLabel">Login</h5>
                <a href="#" class="no-anim close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></a>
              </div>
              <div class="modal-body" id="login_body">

                
<form method="post" action="" class="form-horizontal">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-12">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-12">
    <input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnlogin"></label>
  <div class="col-md-12">
    <button id="btnlogin" name="btnlogin" class="btn btn-primary">Login</button>
  </div>
</div>

</fieldset>
</form>


<div class="modal-footer">
  <div class="mbr-section-btn col-md-10"><a href="javascript:OpenModal('signup')" class="no-anim btn btn-primary col-md-10" target="_new">Create Account</a>
  </div>
</div>    
</div>  
</div>
</div>
<script>document.addEventListener("DOMContentLoaded", function() {  $("#login").on("hidden.bs.modal", function () {    var html = $( "#login_body" ).html();    $( "#login_body" ).empty();    $( "#login_body" ).append(html);  })});
</script>
</div>
</div>

	<script>
	if (typeof OpenModal === 'undefined') {
		OpenModal = function(modalName) {
			if ($('#' + modalName).length)
				$('#' + modalName).modal('show');
			else
				alert("Sorry, but there is no modal for " + modalName);
		}
	}

	function modalSetCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function modalGetCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	</script>

</section>

<section class="mbr-section" id="witsec-modal-window-block-10" data-rv-view="6">

	<style>
	/* Let's not animate the contents of modal windows */
	.no-anim {
		-webkit-animation: none !important;
		-moz-animation: none !important;
		-o-animation: none !important;
		-ms-animation: none !important;
		animation: none !important;
	}
	</style>

	
	
	<div><div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signupLabel" aria-hidden="true">  <div class="modal-dialog modal-lg modal-dialog-centered col-md-4" role="document">    <div class="modal-content"><div class="modal-header">  <h5 class="no-anim modal-title" id="signupLabel">Sign Up</h5>  <a href="#" class="no-anim close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></a></div><div class="modal-body" id="signup_body">


<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fullname">Full Name</label>  
  <div class="col-md-12">
  <input id="fullname" name="fullname" type="text" placeholder="Full Name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="address">Address</label>  
  <div class="col-md-4">
  <input id="address" name="address" type="text" placeholder="Address" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact</label>  
  <div class="col-md-4">
  <input id="contact" name="contact" type="text" placeholder="+977" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dob">DOB</label>  
  <div class="col-md-4">
  <input id="dob" name="dob" type="text" placeholder="Date of birth" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="Username" class="form-control input-md">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Paswword" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnsignup"></label>
  <div class="col-md-4">
    <button id="btnsignup" name="btnsignup" class="btn btn-primary">Sign Up</button>
  </div>
</div>

</fieldset>
</form>


</div>

    </div>  
  </div>
</div>
<script>document.addEventListener("DOMContentLoaded", function() {  $("#signup").on("hidden.bs.modal", function () {    var html = $( "#signup_body" ).html();    $( "#signup_body" ).empty();    $( "#signup_body" ).append(html);  })});</script></div>

	<script>
	if (typeof OpenModal === 'undefined') {
		OpenModal = function(modalName) {
			if ($('#' + modalName).length)
				$('#' + modalName).modal('show');
			else
				alert("Sorry, but there is no modal for " + modalName);
		}
	}

	function modalSetCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}

	function modalGetCookie(cname) {
		var name = cname + "=";
		var decodedCookie = decodeURIComponent(document.cookie);
		var ca = decodedCookie.split(';');
		for(var i = 0; i <ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
	</script>

</section>

<section class="mbr-section content4 cid-rgipO2iHrq" id="content4-z">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="cid-rgiETv0yeQ" id="footer1-z">

    

    

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
  <script src=" {{ url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src=" {{ url('assets/dropdown/js/script.min.js') }}"></script>
  <script src=" {{ url('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src=" {{ url('assets/theme/js/script.js') }}"></script>
  <script src=" {{ url('assets/parallax/jarallax.min.js') }}"></script>

  
  
</body>
</html>