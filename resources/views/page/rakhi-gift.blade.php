@extends('layout')

@section('title', 'Rakhi International Courier from India | USA, Canada, Australia')
@section('description', '')
@section('keywords', 'how to send rakhi online, send rakhi within usa free shipping, raksha bandhan, rakhi courier india')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/send-rakhi-gifts-online-worldwide-at-cheap-rates" />

    <style>
      .first-time-shipment {background-color: #11273b;height: 813px;width: 100%;background-position: center;background-repeat: no-repeat;background-size: cover;padding-top: 60px;}
      .first-time-shipment .div-snow{padding-top: 146px;}
      .first-time-shipment .div-snow img{position: absolute;}
      .first-time-shipment .div-snow img{margin-left: -3px; position: absolute;}
      .first-time-shipment .div-newyear{padding-top: 206px;}
      .first-time-shipment .div-newyear img{margin-left: -12px; position: absolute;}
      .textbox-email{width: 358px;height: 50px;box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);border-radius: 25px!important;background-color: #ffffff;border: 0;padding-left:9% }
      .btn-grab-offer{width: 180px;height: 40px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);border-radius: 60px;background-color: #e85151;color: #fff;transition: 0.6s}
      .btn-grab-offer:hover{color: #fff;background-color: #C83B3B;-webkit-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);-moz-box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.6);}
      .fst-service{box-shadow: 0 0 10px rgba(17, 39, 59, 0.1);border-radius: 15px;background-color: #fafafb;margin-top: -360px;padding: 20px}
      .fst-service .c-image{padding: 20px}
      .fst-service .shopandship{padding:20px; box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);border-radius: 8px;border: 1px solid #5a5b5d26}
      .fst-service .ps{padding:20px; box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);;border-radius: 8px;border: 1px solid #5a5b5d26}
      .fst-service .ic{padding:20px; box-shadow: 0 0 6px rgba(80, 125, 188, 0.08);;border-radius: 8px;border: 1px solid #5a5b5d26}
      .fst-service .shopandship:hover{border: 1px solid #507dbc}
      .fst-service .ps:hover{border: 1px solid #507dbc}
      .fst-service .ic:hover{border: 1px solid #507dbc}

      .fst-service .shopandship,.ps,.ic, h2{font-size: 22px;font-weight: 500;color: rgba(255, 255, 255, 0.6);}
      .fst-service .shopandship,.ps,.ic, p{color: #ffffff;font-size: 16px;font-weight: 600;}
      .fst-service .btn-chris-place-order{padding: 13px 50px;color:#fff; width: 300px;height: 50px;box-shadow: 0 2px 3px rgba(0, 0, 0, 0.2);border-radius: 30px;background-color: #e85151;}
      .chris-benefits{padding-top: 30px}
      .chris-benefits ul{text-decoration: none;list-style: none;}
      .chris-benefits ul li{color: #224464;font-family: Montserrat, sans-serif;font-size: 15px;font-weight: 400;text-align: left;padding-top: 15px;}
      .chris-benefits ul li img{margin-top: 9px;}
      .text-center div{ padding-top: 20px}
      .img-new-year{display: none}
      .chris-benefits .panel{box-shadow: 0 2px 10px rgba(0,0,0,.05) !important;}
      .chris-benefits .panel ul li span{margin-left: 15px;}
      .leter-space{letter-spacing: 1px;}
      #contact-support{padding-bottom: 30px;}

      .select-control {float: left;width: 90px !important;height: 40px !important;font-size: 13px;font-weight: 400;    font-style: italic;border-left: 0;border-radius: 3px;background-color: #fafafb;border: none;}
      .select2-container--default .select2-selection--single {background-color: #fff !important;border: none !important;border-radius: 4px !important;height: 40px !important;padding-top: 5px!important;}
      .select2-container--default .select2-selection--single .select2-selection__arrow b {margin-top: 4px !important;}
      @media only screen and (max-width: 600px) {
          .first-time-shipment {height: 651px;}
          .textbox-email {width: 330px;}
          .div-snow{display: none;}
          .div-newyear{display: none;}
          .fst-service {margin-top: -260px;}
          .c-image{display: none}
          .txt-align{text-align: center}
          .img-new-year{display: block;width: 240px;}
          .chris-benefits ul li{font-size: 16px}
      }
    </style>

@endsection
@section('content')
    <section class="first-time-shipment">
        <div class="container no-padding">
           <div class="col-md-3 div-snow">
               <img src="{{asset('img/images/shoppre-rakhi-left.png')}}" alt="rakhi usa" class="img-responsive img-rakhi-left">
           </div>
           <div class="col-md-6 col-xs-12 no-padding">
               <center>
                   {{--<img src="{{asset('img/images/shoppre-rakhi-left.png')}}" alt="send rakhi online" class="img-new-year"><br>--}}
                   <img src="{{asset('img/images/tape_signup.svg')}}" alt="signup shoppre">  <br>
               </center>
               <center>
                   <h18 class="f-s-50 f-c-white  f-w-9">Celebrate Happiness</h18>
                   <p class="f-s-36 f-c-white f-w-9 ">Send Rakhi & Gifts </p>
                   <img src="{{asset('img/images/send-rakhi-from-india-shoppre.png')}}" alt="cheapest way to send rakhi to usa" > <br><br>
                   <a href="{{route('customer.register')}}" class="btn btn-s-r btn-b-r btn-a-l" target="_blank">Sign UP FREE</a>
                   <br>
                   <br>
                   <br>
                   <p class="f-s-10 f-c-l-gray f-w-8">From 15th July to 25th August 2019</p>

               </center>
           </div>
            <div class="col-md-3 div-newyear">
                <img src="{{asset('img/images/f-s-t-courierbox.png')}}" alt="" class="img-responsive">
            </div>

        </div>
    </section>
    <section >
        <div class="container fst-service">
            <div class="row">
                <div class="col-md-8 col-xs-12 ">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align">Thank Your Sibling With Rakhi & Gifts. Send Love through ShoppRe.</h2>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="">
                        <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20Pratheeksha;%20Can%20i%20Send%20Rakhi,%20Gifts%20and%20Sweets%20from%20India?" target="_blank">
                            <img src="/img/images/whatsapp-icon.png" alt="shoppre rakhi" class="img-25">
                            <span class="font-16">+91-7338208403</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                            UAE
                        </div>
                        <div class="col-md-12 col-xs-12 no-pad Rakhi-mid-div">
                            Starts from ₹316/-
                        </div>
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="https://ship.shoppre.com/cheapest-way-to-send-rakhi-to-uae-from-india/" target="_blank"> <span class="elementor-icon-list-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text txt-u-l">Send Rakhi to UAE from India</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                            USA
                        </div>
                        <div class="col-md-12 col-xs-12 no-pad Rakhi-mid-div">
                            Starts from ₹1199/-
                        </div>
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="https://ship.shoppre.com/cheapest-way-to-send-rakhi-to-usa-from-india/" target="_blank"> <span class="elementor-icon-list-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text txt-u-l">Send Rakhi to USA from India</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                        <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                            Australia
                        </div>
                        <div class="col-md-12 col-xs-12 no-pad Rakhi-mid-div">
                            Starts from ₹1199/-
                        </div>
                        <div class="col-md-12 col-xs-12 no-pad">
                            <a href="https://ship.shoppre.com/cheapest-way-to-send-rakhi-to-australia-from-india/" target="_blank"> <span class="elementor-icon-list-icon">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                </span>
                                <span class="elementor-icon-list-text txt-u-l">Send Rakhi to AUS from India</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                    <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                           <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                               Switzerland
                           </div>
                           <div class="col-md-12 col-xs-12 no-pad Rakhi-mid-div">
                               Starts from ₹1306/-
                           </div>
                           <div class="col-md-12 col-xs-12 no-pad">
                               <a href="https://ship.shoppre.com/cheapest-way-to-send-rakhi-to-switzerland-from-india/" target="_blank"> <span class="elementor-icon-list-icon">
                                   <i class="fa fa-plane" aria-hidden="true"></i>
                                   </span>
                                   <span class="elementor-icon-list-text txt-u-l">Send Rakhi to Swiss from India</span>
                               </a>
                           </div>
                       </div>
                </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                   <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                       <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                           UK
                       </div>
                       <div class="col-md-12 col-xs-12 no-pad Rakhi-mid-div">
                           Starts from ₹1306/-
                       </div>
                       <div class="col-md-12 col-xs-12 no-pad">
                           <a href="https://ship.shoppre.com/cheapest-way-to-send-rakhi-to-uk-europe-from-india/" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                               <span class="elementor-icon-list-text txt-u-l">Send Rakhi to UK from India</span>
                           </a>
                       </div>
                   </div>
               </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                   <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                       <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                           Germany
                       </div>
                       <div class="col-md-12 col-xs-12 no-pad Rakhi-mid-div">
                           Starts from ₹1306/-
                       </div>
                       <div class="col-md-12 col-xs-12 no-pad">
                           <a href="https://ship.shoppre.com/cheapest-way-to-send-rakhi-to-germany-from-india/" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                               <span class="elementor-icon-list-text txt-u-l">Send Rakhi to DEU from India</span>
                           </a>
                       </div>
                   </div>
               </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                   <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                       <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                           Canada
                       </div>
                       <div class="col-md-12 col-xs-12 no-pad Rakhi-mid-div">
                           Starts from ₹1344/-
                       </div>
                       <div class="col-md-12 col-xs-12 no-pad">
                           <a href="https://ship.shoppre.com/cheapest-way-to-send-rakhi-to-canada-from-india/" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                               <span class="elementor-icon-list-text txt-u-l">Send Rakhi to CA from India</span>
                           </a>
                       </div>
                   </div>
               </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                   <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                       <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                           Japan
                       </div>
                       <div class="col-md-12 col-xs-12 no-pad Rakhi-mid-div">
                           Starts from ₹1413/-
                       </div>
                       <div class="col-md-12 col-xs-12 no-pad">
                           <a href="https://ship.shoppre.com/cheapest-way-to-send-rakhi-to-japan-from-india/" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                               <span class="elementor-icon-list-text txt-u-l">Send Rakhi to Japan from India</span>
                           </a>
                       </div>
                   </div>
               </div>
                <div class="col-sm-4 col-xs-12 col-md-4">
                   <div class="col-sm-12 col-xs-12 col-md-12 shopandship">
                       <div class="col-md-12 col-xs-12 no-pad UAE-div1">
                           Mauritius
                       </div>
                       <div class="col-md-12 col-xs-12 no-pad Rakhi-mid-div">
                           Starts from ₹1837/-
                       </div>
                       <div class="col-md-12 col-xs-12 no-pad">
                           <a href="https://ship.shoppre.com/cheapest-way-to-send-rakhi-to-mauritius-from-india/" target="_blank"> <span class="elementor-icon-list-icon">
                               <i class="fa fa-plane" aria-hidden="true"></i>
                               </span>
                               <span class="elementor-icon-list-text txt-u-l">Send Rakhi to MU from India</span>
                           </a>
                       </div>
                   </div>
               </div>
            </div>
            <div class="mar-t-25">
                <div class="txt-center">
                        <button type="button" class="btn btn-warning bord-rad-5 margin-r-10">
                            <a href="https://www.shoppre.com/cheap-rates-international-shipping-cost-calculator" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                            <p class="btn-md">View Rates for Other Countries</p>
                            </a>
                        </button>
                        <button type="button" class="btn btn-success bord-rad-5 margin-r-10">
                            <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20Pratheeksha;%20Can%20i%20Send%20Rakhi,%20Gifts%20and%20Sweets%20from%20India?" target="_blank" class="elementor-button-link elementor-button elementor-size-sm" target="_blank" role="button">
                            <p class="btn-md">Message Us On WhatsApp</p>
                            </a>
                        </button>
                </div>
            </div>
            {{--<div class=" col-md-12 no-pad"><br>--}}
                {{--<h4 class="f-s-18 f-c-l-gray f-w-9">Haven't made a shipment with us yet? What're you waiting for?!</h4>--}}
                {{--<br>--}}
                {{--<p class="header4 p-color-cement">Pick & choose your favorites from 1000+ Indian online stores and get us to ship your purchases overseas,--}}
                    {{--or come to us for an international courier; if it's your first shipment with us - you can avail a <strong> 50% Discount UP TO ₹200/- </strong> on--}}
                    {{--top of the savings you make because our consolidation services.--}}
                {{--</p>--}}
                {{--<h6 class="f-s-16 f-c-gray f-w-8">Don't put it on hold - ship with us already! </h6><br>--}}

                {{--<div class="offerDesc">--}}
                    {{--<h4 style="text-decoration: underline">Terms and Conditions:</h4>--}}
                    {{--<ul>--}}
                        {{--<li>Get 50% Discount. </li>--}}
                        {{--<li>Offer Code: <b>FRST50</b></li>--}}
                        {{--<li>Maximum amount that can be availed by a customer is ₹200/-.</li>--}}
                        {{--<li>This offer cannot be clubbed with any other offer.</li>--}}
                        {{--<li>This Coupon is Valid Upto 31-July-2019</li>--}}
                        {{--<li>A customer can avail this offer only once during the offer period.</li>--}}
                        {{--<li>This offer is applicable only for International Shipments.</li>--}}
                        {{--<li>Clearance charges is applicable for Special items</li>--}}
                        {{--<p class="f-s-16 f-c-blue f-w-8">(liquids, semi liquids/cosmetics, medicines, oils, homemade food items).</p>--}}

                    {{--</ul>--}}
                {{--</div>--}}
                <br>
            <br>
            <br>
                <div>
                <center><a href="{{route('customer.register')}}" class="btn btn-s-r btn-a-l btn-b-r" target="_blank">Sign Up Now for FREE!</a></center>
                </div>

            </div>
        </div>
    </section>
    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="header1 p-color-cement-dark">Featured Services & Benefits</h1>
            </center>
            <br>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Personal Shopper</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>20-Day Free Storage</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Consolidation</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Repackaging</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Affordable Rates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Scanned Copies Document-couriers</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Country-discount</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{asset('img/images/chris-circle.png')}}" alt=""><span>Product Recommendations</span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
    </section>

    <section class="d-contact-details-section">
        <div class="container " id="contact-support">
            <div class="col-md-12">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Didn't find the answer you need? Contact us!</p>
                        </center>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-7338208403" class="header2 p-color-white">+91 73382 08403</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div
                    class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details pull-right contact-text-align">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
    <section class="d-contact-section-desktop">
        <div class="container " id="contact-support">
            <div class="row" id="d-contcat">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 " style="display: none">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Contact Our <br>Support Team </p>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="d-contact-div">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                        <p class="header6 p-color-white " style="margin-left: 51px;margin-top: -36px;">Contact Our <br>Support
                            Team </p>
                    </div>
                </div>


                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align" style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-7338208403" class="header2 p-color-white">+91 73382 08403</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align " style="color: #fdf699">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align"
                     style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
        <br>
    </section>
@endsection

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#diwali_coupon").validate({
                rules:
                    {
                        email: {required: true}
                    },
                messages:
                    {
                        // email: {required: 'Please enter your email id'}
                    },
                submitHandler: function (form) {
                    debugger;
                    var email = $("input[name='email']").val();
                    var pnumber = $("input[name='pnumber']").val();
                    var cnumber = $("[name='country_code']").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'new-year-offer',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                            pnumber: pnumber,
                            cnumber: cnumber,
                        },
                        success: function (data) {
                            var url= "{{env('PREFIX')}}myaccount.{{env('DOMAIN')}}/register?email=" + email + "&c_code="+ cnumber +"&PN="+ pnumber ;
                            console.log(data);
                            // window.open(url);
                            window.location.href = url;

                        }
                    })
                }
            });

        });
    </script>
@endsection