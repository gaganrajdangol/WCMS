<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ URL::to('assets/images/shiva2-122x145.png') }}" type="image/x-icon">
  <meta name="description" content="Web Generator Description">
  <title>Order Process</title>
  <link rel="stylesheet" href="{{ url('assets/web/assets/mobirise-icons/mobirise-icons.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/tether/tether.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap-grid.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap-reboot.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/dropdown/css/style.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/socicon/css/styles.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/theme/css/style.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('assets/mobirise/css/mbr-additional.css') }}" type="text/css">

     <script src="{{ URL::to('assets/web/assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::to('assets/popper/popper.min.js') }}"></script>
  <script src="{{ URL::to('assets/tether/tether.min.js') }}"></script>
  <script src="{{ URL::to('assets/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ URL::to('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src="{{ URL::to('assets/dropdown/js/script.min.js') }}"></script>
  <script src="{{ URL::to('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src="{{ URL::to('assets/theme/js/script.js') }}"></script>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


  <script>

    $(document).ready(function()
{


var quantitiy=1;

   $('.quantity-right-plus').click(function(e)
{

        
        // Stop acting like a button

        e.preventDefault();

        // Get the field name

        var quantity = parseInt($('#quantity').val());

        
        // If is not undefined

            
            $('#quantity').val(quantity + 1);



          
            // Increment

        
    });


     $('.quantity-left-minus').click(function(e)
{

        // Stop acting like a button

        e.preventDefault();

        // Get the field name

        var quantity = parseInt($('#quantity').val());

        
        // If is not undefined

      
            // Increment

            if(quantity>0)
{

            $('#quantity').val(quantity - 1);

            }

    });


});

</script>
  
  
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
                <a title="Buy Products" href="{!! url('/order2') !!}" class="nav-link link text-black display-5" style=""><span style="color:#82786e;">Order</span></a>
              </li>
              <li title="Our Community" class="nav-item"><a class="nav-link link text-black display-5" href="{!! url('/post') !!}">Forum</a>
              </li>
              <li class="nav-item">
                <a title="Learn more about us" class="nav-link link text-black display-5" href="{!! url('wcms/aboutus') !!}">About US</a>
              </li>
              <li class="nav-item">
                <a title="Settings" class="nav-link link text-black display-5" href="{!! url('wcms/settings') !!}">
                  <span class="mbri-setting3 mbr-iconfont mbr-iconfont-btn"></span>
                </a>
              </li>              
              <li class="nav-item">
                <a title="Help" class="nav-link link text-black display-5" href="" data-target="#modalHelp" data-toggle="modal">
                  <span class="mbri-info mbr-iconfont mbr-iconfont-btn"></span>
                </a>
              </li>
              <li class="nav-item">
              </li>

<li class="nav-item dropdown">

                                <a class="nav-link link dropdown-toggle btn btn-sm btn-info mbr-white col-md-12" style="border-radius: 45px;" data-toggle="dropdown-submenu" href="#"><h5>{{Auth::user()->fullname}}</h5><span class="caret"></span></a>
                             
                                <div class="dropdown-menu btn btn-sm btn-info ml-4 col-md-11" style="border-radius: 20px;">
                                    <a class="dropdown-item mbr-white" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="mbri-logout display-5"></span><h5> Logout</h5></a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a href="{!! url('/orderlist') !!}" class="mbr-white"><span class="mbri-shopping-cart display-5"></span><h5> Orderlist</h5></a>
                                </div>
                                </li>


            </ul>

  


        </div>
    </nav>
</section>


<div class="modal fade col-md-12" id="modalHelp">
  <div class="modal-dialog modal-dialog-center modal-lg col-md-10">
    <div class="modal-content">
      <div class="modal-header">
         &nbsp &nbsp
        <h2 class="text-center" id="">User Guide and Help</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body" style="height: 700px;">
        <embed src="{{ url('docs/usermanual.pdf') }}" type="application/pdf" width="100%" height="100%" />
        
    </div>
    </div>
  </div>
</div>



<section class="mbr-section content4 cid-rg9atgb20I" id="content4-21">

    

    <div class="container">
        <div class="media-container-row">
          @foreach($orders as $order)
          <div class="">
            <ul class="breadcrumb">
  <li><a href="{!! url('/order2') !!}">Order / &nbsp;</a></li>
  <li> Ordering - {{$order->item_name}}</li>
</ul>
          </div>
          @endforeach
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    Order Ready!</h2>
                
                
            </div>
        </div>
    </div>
</section>

<section class="services2 cid-rg9kyIxrUr" id="services2-11">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    @foreach($orders as $order)
    <form method="POST" action="{!!url('/order',$order->itemid)!!}">
    @csrf
    <div class="container">
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 40%;">
                    <img src="/{{$order->item_image}}" alt="" title="" style="width: 90%;"> 
                </div>
                <div class="align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
                        {{$order->item_name}}</h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text text1 pt-2 mbr-light mbr-fonts-style display-4">
                            रू {{$order->price}}
                        </p>
                        <p class="mbr-text text2 pt-4 mbr-light mbr-fonts-style display-7"></p><div class="container"><div class="container">
                          <div class="row">
                          <div class="container">

  <div class="row">        
        
                        <div class="col-lg-8">

                                        <div class="input-group">

                                    <span class="input-group-btn">

                                        <button type="button" class="quantity-left-minus btn btn-default btn-number"  data-type="minus" data-field="">

                                          <span class="mbri-down"></span>

                                        </button>

                                    </span>

                                    <input type="number" id="quantity" name="quantity" class="form-control input-number align-center" value="1" min="1" max="100" requried readonly>

                                    <span class="input-group-btn">

                                        <button type="button" class="quantity-right-plus btn btn-defeat btn-number" data-type="plus" data-field="">

                                            <span class="mbri-up"></span>

                                        </button>


                                    </span>

                                </div>

                        </div>

  </div>

</div>
                        </div></div></div><p></p>
                    </div>
                    <!--Btn-->
                    <div class="mbr-section-btn pt-3 align-left">
                      <button type="submit" class="btn btn-warning-outline display-4" onclick="if (!confirm('You are about to order this item. Are you sure?')) { return false }">
                            Order</button></div>
                </div>
            </div>
        </div>
    </div>
  </form>
  @endforeach
</section>

<section class="mbr-section content4 cid-rg9pZsYgaV" id="content4-12">

    

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-2">
                    Related Products</h2>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section" id="witsec-modal-window-block-11" data-rv-view="101">

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
    <div class="modal fade" id="order" tabindex="-1" role="dialog" aria-labelledby="orderLabel" aria-hidden="true">
      <div class="modal-dialog  " role="document">
          <div class="modal-content"><div class="modal-header">
            <h5 class="no-anim modal-title" id="orderLabel">Confirm Order</h5>
              <a href="#" class="no-anim close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></a>
            </div>
            <div class="modal-body" id="order_body">You are about to order this product. Confirm order?</div>
            <div class="modal-footer">
              <div class="mbr-section-btn">
                <a href="#" class="no-anim btn btn-secondary display-4" data-dismiss="modal">Close</a></div>
                <div class="mbr-section-btn">
                  <a href="" class="no-anim btn btn-primary display-4" target="_new">Yes</a>
                </div>
              </div>
                                </div>

                    </div>
                  </div>
                  <script>
                  document.addEventListener("DOMContentLoaded", function()
                   {  
                   $("#order").on("hidden.bs.modal", function ()
                    {
                        var html = $( "#order_body" ).html();
                            $( "#order_body" ).empty();
                                $( "#order_body" ).append(html);
                                  })});
                                </script>
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

<section class="mbr-section" id="witsec-modal-window-block-14" data-rv-view="102">

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

	
	
	<div class="col-md-12"><div class="modal fade" id="bill" tabindex="-1" role="dialog" aria-labelledby="billLabel" aria-hidden="true">  <div class="modal-dialog  " role="document">    <div class="modal-content"><div class="modal-header">  <h5 class="no-anim modal-title" id="billLabel">Bill</h5>  <a href="#" class="no-anim close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></a></div><div class="modal-body" id="bill_body"><form class="form-horizontal" style="float: left;width: 50%;">
<fieldset>

<!-- Form Name -->
<legend>Personal Details</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name: </label> 
<label class="col-md-4 control-label" for="name">Gagan Raj Dangol</label> 
  
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address: </label>  
  <label class="col-md-4 control-label" for="address">Mahakavimarga, Kathmandu</label>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact: </label>  
  <label class="col-md-4 control-label" for="contact">+977-9860058411</label>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email: </label>  
  <label class="col-md-4 control-label" for="email">dangolgrozen123@gmail.com</label>
</div>

</fieldset>
</form>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Item Details</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Item Name: </label> 
<label class="col-md-4 control-label" for="name">Natraj B27</label> 
  
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Item Type: </label>  
  <label class="col-md-4 control-label" for="address">Statue</label>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Price: </label>  
  <label class="col-md-4 control-label" for="contact">रू 0.00</label>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Quantity: </label>  
  <label class="col-md-4 control-label" for="email">1</label>
</div>

</fieldset>
</form>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Total</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name"><strong>रू 0.00</strong></label>
  
</div>

</fieldset>
</form>
<div>
Your item will be delivered soon. Thankyou for using our service.</div><div class="modal-footer"><div class="mbr-section-btn"><a href="#" class="no-anim btn btn-secondary display-4" data-dismiss="modal">Ok</a></div><div class="mbr-section-btn"><a href="" class="no-anim btn btn-primary display-4" target="_new">Print</a></div></div>    </div>  </div></div><script>document.addEventListener("DOMContentLoaded", function() {  $("#bill").on("hidden.bs.modal", function () {    var html = $( "#bill_body" ).html();    $( "#bill_body" ).empty();    $( "#bill_body" ).append(html);  })});</script></div></div>

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
                  <a href="{!! url('wcms/order2') !!}" class="text-warning">Order</a><br>
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


 
  
  
</body>
</html>