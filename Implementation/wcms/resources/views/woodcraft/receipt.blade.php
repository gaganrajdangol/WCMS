	<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="{{ url('assets/images/shiva2-122x145.png') }}" type="image/x-icon">
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
  <link rel="stylesheet" href="{{ url('assets/animate.css/animate.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ url('font-awesome/css/font-awesome.css') }}" type="text/css">

  <style type="text/css">
    .input-details1 .input-details
    {
      width: 30px;
    }
  </style>


  
  
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
                <a title="Buy Products" href="{!! url('/order2') !!}" class="nav-link link text-black display-5" style="">Order</a>
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



          
<section>
  <br><br>
  <br><br>
  <br>
        <div class="container">
          <div class="row">
            <div id="breadcrumb">
            <ul class="breadcrumb">
  <li><a href="{!! url('/order2') !!}">Order / &nbsp;</a></li>
  <li>Ordered {{$getBill->item_name}} / &nbsp;</li>
  <li>Invoice - {{$getBill->item_name}}</li>
</ul>
          </div>
            <div class="col-lg-10 col-centered public-view">              
              <div class="container">
                <div class="" style="background-color:#333"></div>

                    <div class="align-center col-md-12" id="info1"><h3>Your invoice is ready.</h3></div>

                <div class="invoice-detail-body" id="printthisdiv" style="background-image: url('{{ url::to('assets/images/shiva-translucent.png') }}');background-repeat: no-repeat;background-size: cover;;z-index: -1;">
                  <div class="invoice-detail-title content-block">
                    <div class="d-flex justify-content-between">
                      <div class="invoice-title">

                        <h3>Order Invoice</h3>
                      </div>
                      <div class="invoice-logo"><div class="photo-drop">
                        <div class="photo-drop-preview">                          
                        <div>Bill No.: {{$getBill->orderid}}</div>
                        <div>Date: <?php echo date('Y-m-d')?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="divider lite margin">
                <div class="col-md-6" style="float: left;">
                  <div class="row">
                    <div class="col-md invoice-address invoice-address-company">
                      <h4>Personal Details</h4>
                      <div class="col-md-12 input-details1">
                        <div class=""><label style="width:100px;">Name: </label><span>{{Auth::user()->fullname}}</span></div>
                        <div class=""><label style="width:100px;">Email: </label><span>{{Auth::user()->email}}</span></div>
                        <div class=""><label style="width:100px;">Contact: </label><span>{{Auth::user()->contact}}</span></div>
                        <!-- <div class=""><label style="width:100px;">Zip Code: </label><span>44600</span></div> -->
                        <div class=""><label style="width:100px;">Address: </label><span>{{Auth::user()->address}}</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="align-right mb-3">
                  <img style="width: 10%;height:10%;" src="{{ url('assets/images/shiva-162x193.png') }}" alt="company-logo" title=""/>
                  <div class="col-md-12 align-right">
                  <h3><b>Woodsite</b></h3>
                </div>
                <div>traditionalwoodcraftstore@gmail.com <span class="fa fa-envelope"></span></div>
                <div>+977-9860058411 <i class="fa fa-phone"></i></div>
                <div>+1 (0) 000 0000 002 <i class="fa fa-fax"></i></div>
                <div>Mahakvimarga, Kathmandu Dillibazar <i class="fas fa-map-marker-alt"></i></div>
                </div>
                      <div class="invoice-item-list content-block">
                        <table class="table invoice-table invoice-table-view">
                          <thead class="thead">
                            <tr>
                              <th class="invoice-detail-name" style="background-color:#333!important;color:#fff">
                              Item Name</th>
                              <th class="invoice-detail-summary align-left" style="background-color:#333!important;color:#fff">
                          Details
                        </th>
                              <th class="invoice-detail-rate" style="background-color:#333!important;color:#fff">
                              Price
                            </th>
                            <th class="invoice-detail-quantity" style="background-color:#333!important;color:#fff">
                            Quantity
                          </th>
                          <th class="invoice-detail-total align-right" style="background-color:#333!important;color:#fff">
                          Amount
                        </th>

                      </tr>
                    </thead>
                    <tbody class="invoice-items">
                      <tr class="item-row item-row-1">
                        <td class="item-row-summary" data-label="Item #1"><span class="item-row-name"></span>
                          <span class="item-row-description">
                            {{$getBill->item_name}}
                        </span>
                      </td>
                      <td class="item-row-summary" data-label="Item #1"><span class="item-row-name"></span>
                          <span class="item-row-description">
                            {{$getBill->item_description}}
                        </span>
                      </td>
                      <td class="item-row-rate" data-label="Price" id="price">
                        <span class="currency"><span class="localized-number">{{$getBill->price}}</span></span>
                      </td>
                      <td class="item-row-quantity" data-label="Quantity" id="qty">
                        <span class="localized-number">{{$getBill->quantity}}</span>
                      </td>
                      <td class="item-row-amount align-right" data-label="Amount" id="amt">
                        <span class="localized-number">1000.00</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <script src="{{asset('js/app.js')}}"></script>
                <script type="text/javascript">
                  $(document).ready(function(){
                    var p = $('#price').text();
                    var q = $('#qty').text();
                    $('#amt').text(p*q);
                    $('#subTot').text(p*q);
                    $('#vat').text((p*q)/100*13);
                    $('.gTot').text((p*q)+((p*q)/100*13));

                  });
                </script>
              </div>
              <hr class="divider margin" style="background-color:#333">

              <div class="align-right">
                <div class="invoice-totals-row desktop undefined">
                  <div class="invoice-summary-label">Subtotal: <label style="width:100px;" id="subTot"></label></div>
                </div>
                <div class="invoice-totals-row desktop undefined">
                  <div class="invoice-summary-label">Tax (13%): <label style="width:100px;" id="vat"></label></div>
                </div>
                <div class="invoice-totals-row desktop undefined">
                  <div class="invoice-summary-label"><b>Total: <label style="width:100px;" class="gTot"></label></b></div>
                </div>
                  <div class="col-md-6" style="float: left;">Thankyou for using our service.</div>
                  <div class="col-md-6 align-right" style="float: right;"></div>
                                </div>
              <br><br>
<div>
  Terms and conditons:
  <div class="col-md-10">
    <ul>
    <li>Unless stated otherwise, we accept payment for orders in Nepalese Rupee (NPR) only.</li>
    <li>We shall refund in accordance with our Returns & Refunds Policies.</li>
    <li>On delivery of the Product, you may be required to sign for delivery. You agree to inspect the Product for any obvious faults, defects or damage before you sign for delivery. You need to keep receipt of the delivered Product in case of future discussions with us about it.</li>
    </ul>
  </div>
</div>
            </div>
    <div class="align-right">
      <a class="btn btn-secondary" id="btnOrderlist" href="{{ ('/orderlist') }}" title="List of Your Prevoius Orders"><div style="">Order History</div>
                </a>
                <button id="btnPrint" class="btn btn-primary" title="Print the bill" value="Print" onClick="printReport()">
                  <span class="mbri-print display-4"><div style="font-size: 10px;">Print</div></span>
                </button>
              </div>
              
<br><br>
<br><br>
          </div>
        </div>
      </div>
    </div>
</section>

<script src="{{ URL::to('asset/js/app.js') }}"></script>
<script type="text/javascript">
    function printReport()
    {
      document.getElementById('menu2-b').style.visibility = 'hidden';
      document.getElementById('footer1-z').style.visibility = 'hidden';
      document.getElementById('btnOrderlist').style.visibility = 'hidden';
      document.getElementById('btnPrint').style.visibility = 'hidden';
      document.getElementById('breadcrumb').style.visibility = 'hidden';
      document.getElementById('info1').style.visibility = 'hidden';

        var prtContent = document.getElementById("billBody");
        window.print(prtContent);
        document.getElementById('menu2-b').style.visibility = 'visible';
      document.getElementById('footer1-z').style.visibility = 'visible';
      document.getElementById('btnOrderlist').style.visibility = 'visible';
      document.getElementById('btnPrint').style.visibility = 'visible';
    }
</script>
    

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
  <script src=" {{ url('assets/smoothscroll/smooth-scroll.js') }}"></script>
  <script src=" {{ url('assets/dropdown/js/script.min.js') }}"></script>
  <script src=" {{ url('assets/touchswipe/jquery.touch-swipe.min.js') }}"></script>
  <script src=" {{ url('assets/theme/js/script.js') }}"></script>
  <script src=" {{ url('assets/parallax/jarallax.min.js') }}"></script>

  
</body>
</html>