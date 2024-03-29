@extends('layout')

@section('title', 'Shop Jabong Fashion Store India | Ship Internationally | ShoppRe.com')
@section('description', 'Shop online from Amazon India and Ship Internationally with ShoppRe Upto 220+ countries. The fast & cheapest way to ship your package from India. Sign Up Free.')
@section('keywords', 'Amazon International Shipping, great indian sale, ship india')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/jabong-usa-shipping-from-india" />

    <style>
        .bg-ics-landing-page .container>div{margin-bottom:3em}.d-header-text{font-size:40px;font-weight:900}.d-header-text1{font-family:Montserrat -Italic;font-style:italic;line-height:26px;margin-top:25px}.christmas-service{box-shadow:0 0 10px rgba(17,39,59,.1);border-radius:15px;background-color:#fafafb;margin-top:-121px;padding:20px}.box-steps p{line-height:1}.box-steps p span{font-size:22px;font-weight:900}.flipkart-h1{font-size:25px}.christmas-service .shopandship,.ic,.ps,h2{font-size:22px;font-weight:500;color:rgba(255,255,255,.6)}.christmas-service .shopandship,.ic,.ps,p{color:#fff;font-size:16px;font-weight:600}.btn-grab-offer{width:180px;height:40px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:60px;background-color:#e85151;color:#fff;transition:.6s}.btn-grab-offer:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}#packing:hover{display:none}
    </style>
@endsection
@section('content')
    <section class="bg-ics-landing-page">
        <div class="container">
            <center>
                <h1 class="p-color-white header-spacing d-header-text">Amazon.in - International Shipping From India</h1>

            </center>

        </div>
    </section>


    <section class=" ">
        <div class="container christmas-service">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <h2 class="header2 p-color-cement-dark font-weight-900 txt-align"></h2>
                </div>
            </div>

            <div class=" col-md-12 offer-description">
                <h2 class="p-color-cement-dark font-weight-900" style="font-size: 28px;">Get Ready for This New Years With Lightning-fast Delivery from Amazon</h2>
                <h4 class="p-color-cement" style="font-style:italic">Amazon, being the E-commerce giant that it is, is well-respected in the industry for its professionalism and superfast delivery. </h4>
                <br>
                <p class="header4 p-color-cement">We're counting the days till the New Years' and the winter cold is not
                    making anyone hold back on being in a celebratory mood.
                    While the hotspots in the city are making sure everything is getting ready for New Years'
                    and the customers get nothing short of the best eve of the year;
                    <a href="{{route('stores1')}}">Indian online shops</a> are also not far behind. </p>
                <br>
                <p class="header4 p-color-cement">From Amazon Great Indian Sale Offers to New Year Flash Sales; Amazon
                    India is attracting the international customers big time. However there is a slight issue when it
                    comes to checking-out & shipping their purchases in from India to USA, UK, UAE, Australia & such,
                    at an affordable shipping cost. Since Amazon India doesn't offer to ship internationally, customers
                    have no other choice but to look for alternative shipping options. </p> <br>
                <p class="header4 p-color-cement">We’re a <a href="{{route('home')}}">shipping & consolidation company</a> that specializes in domestic & international
                    logistic solutions. We  handle over ₹1,000,000 worth of E-Commerce shipments and 2000 Courier pickup
                    requests a month! A potential customer can shop from 1000+ desi/Indian online stores and,
                    we ship those packages/couriers off to 220+ countries around the world. Our vision has always
                    been to be of help to the Global Indian Community, and their need to shop authentic products
                    from India, and help them ship it all in at a reasonable cost. </p> <br>

                <div class="offerDesc">
                    <h2 class="header2 p-color-cement font-weight-900">How are we the best international shipping solution from India?</h2>
                    <p class="header4 p-color-cement">Our streamlined set of <a href="{{route('consolidationService')}}">Repackaging & Package Consolidation</a> services, helps you cut down the shipping costs to 80% lesser!</p>
                    <br>
                    <br>
                    <p class="header4 p-color-cement">All you have to do is; </p> <br>

                    <ul>
                        <li>Ship your purchases to the Virtual Address we provide for FREE,</li>
                        <li>Use our FREE unique personal locker to store them, and finally -</li>
                        <li>Pay the never-before-like shipping cost we charge and,</li>
                        <li>Your shipment will be on it's way to reach you in 3-6 days!</li>
                    </ul>
                </div>
                <br>
                <br>
                <center>
                    <h4 class="p-color-cement-dark flipkart-h1">International Credit/Debit Cards Giving You Trouble?</h4>
                    <h5 class="header5 p-color-cement">No worries! Our [Personal Shopper] will swoop in & take care of it all for you!</h5> <br>
                    <a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register class="btn-chris-place-order">Go Shopping Now!</a>
                </center>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="shopandship ">
                        <h2>Shop & Ship</h2>
                        <br/>
                        <p>Shop From Amazon.in Store; Get a FREE Indian Virtual Address; We'll Ship It to Your Doorsteps!</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ps">
                        <h2>Personal Shopper</h2>
                        <br>
                        <p>Payment Hassles at Checkout? No Worries, Let Us Know What You Need; We'll Shop for You at Amazon.in</p>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ic">
                        <h2>International Courier</h2>
                        <br>
                        <p>Schedule a Pickup For Your Courier From Anywhere in India; We ship to 220+ countries!</p>

                    </div>
                </div>
            </div>
            <br>
        </div>
        <br>
        <br>
    </section>

    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="p-color-cement-dark flipkart-h1 font-weight-900" >Here Are Some of Our Many Featured Services & Benefits</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Personal Shipping Address</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>20-Days Free Package Storage</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Package Consolidation</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Repackaging</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Personal Shopper Service</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Affordable Rates</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>24/7 Customer Support</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Scanned of your documents</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Country-specific Discount</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>3-6 days delivery with online tracking</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Photo Updates</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Wallet Cashback</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Package Return Services</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>International Courier Service</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>Personalized Product Recommendations</span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
            <div>
                <p class="header4 p-color-cement">With a wide band of services including the Personal Shopper Service; shopping from India and getting
                    it shipped worldwide is now extremely smooth. From electronics to toys from Amazon.in; we offer,
                    without a doubt, the best parcel forwarding services from India, that you can count on. We've
                    fulfilled plenty of orders ranging in 1000+ Indian online portals, so far!</p>
            </div>
        </div>
    </section>
    <section>
        <br>
        <div class="container">
            <center>
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900">Buying from Amazon.in from a different country?</h1>
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900">Join us now for a lifetime of effortless</h1>
                <h1 class="flipkart-h1 p-color-cement-dark font-weight-900">Online shopping with international shipping from India!</h1>

                <br>
                <a href="{{env('PREFIX')}}www.{{env('DOMAIN')}}/customer/register class="btn-chris-place-order">Sign Up for Free</a>

            </center>
        </div>
    </section>
    <section class="product-courier ">
        <div class="container div-ics-border-btm">
            <div class="container">
                <center>
                    <h1 class="header1  p-color-cement-dark">How <span class="p-color-blue">to Shop Your Favorites from Amazon.in</span>?
                    </h1>
                </center>
            </div>
            <br>
            <div class="row text-center">
                <br/><br/>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <center>
                            <br/>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/shop-product.svg" alt="">
                            <br/>
                            <br/>
                            <span class="p-color-blue">Step 1</span>
                            <h1 class="header5 p-color-cement">Shop Amazon Products</h1>
                            <br>
                            <p class="p-color-cement header5">
                                Purchase your favourite & brand products from Amazon Indian online store & Set Cash on Delivery
                            </p>

                        </center>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/pay-receive.svg" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue" >Step 2</span>
                        <br>
                        <h1 class="header5 p-color-cement">Pay & Receive</h1>
                        <br>
                        <p class="header6 p-color-cement">We will pay for your order and will receive your order at our
                            ShoppRe Warehouse.
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded">
                        <br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/save80.svg" alt="">
                        <br/>
                        <br/>
                        <span class="p-color-blue">Step 3</span>
                        <h1 class="header5 p-color-cement">Ship in @ 80%
                            Less Cost</h1>
                        <br>
                        <p class="header6 p-color-cement">
                            Save up to 80% in shipping costs as we wait around for 20 days for all your purchases to
                            reach us - for FREE, and repackage & ship them to your doorsteps as one!
                        </p>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="panel ps-img-rounded"><br>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" style="height: 70px" alt="">
                        <br>
                        <br/>
                        <span class="p-color-blue" >Step 4</span>
                        <br>
                        <h1 class="header5 p-color-cement">Unbox Your
                            Package</h1>
                        <br/>
                        <p class="header6 p-color-cement">
                            We'll dispatch your shipment within 24 hours of you making a request to ship, and it will
                            reach you safe & sound within 3-6 days, no matter wherever in the world you are!
                        </p>

                    </div>
                </div>
            </div>
            <br/><br/>
            <center>
                <a href="https://www.shoppre.com/personal-shopper">Place Your Order Now!</a>
            </center>
            <br/><br/>
        </div>
    </section>
    <section>
        <div class="container" style="background-color: #fff;padding: 20px;">
            <h1 class="header2 p-color-cement-dark font-weight-900">Frequently Asked Questions: </h1>
            <ul style="text-decoration: none;list-style: none">
                <li>
                    <h3 class="header4 p-color-cement-dark font-weight-900">How do I order an amazon product and get it delivered to UAE?</h3>
                    <p class="header5 p-color-cement ">Go online and shop on Amazon.in and reach out to us, sign up on ShoppRe
                        Dashboard & make your request to ship it to UAE. You'll be guided by our
                        Support as to how to take it from there. </p>
                </li>
                <li>
                    <h3 class="header4 p-color-cement-dark font-weight-900">Can I buy from amazon INDIA and ship to US?</h3>
                    <p class="header5 p-color-cement ">Of course you can. You can shop from Amazon.in and get us to
                        ship to the USA. We ship to 220+ countries around the world.</p>
                </li>
                <li>
                    <h3 class="header4 p-color-cement-dark font-weight-900">How do I buy from India online Stores and Ship to UK?</h3>
                    <p class="header5 p-color-cement ">You can <a href="{{route('stores1')}}">shop from any Indian online store</a>, ship your purchases to us;
                        and make a request to ship it internationally to your location in UK.
                        For more info; contact our Support. </p>
                </li>
                <li>
                    <h3 class="header4 p-color-cement-dark font-weight-900">Can I order different books on Amazon.in and get them delivered in single shipment to save money?</h3>
                    <p class="header5 p-color-cement ">Of course. We strive to make the <a href="{{route('pricing')}}">shipping costs</a> of our customers as low as possible. So,
                        we'd be behind you 100% in this matter as our main service that allows you save up is our
                        Package Consolidation. You can make use of our 20-day FREE storage
                        for collecting your books as well. </p>
                </li>
            </ul>
        </div>
        <br>
        <br>
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
                    <a href="tel:+91-80 4094 4077" class="header2 p-color-white">+91 80 4094 4077</a>

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
                    {{--<a href="https://shoppre-international-shipping-courier.zendesk.com/hc/en-us#"--}}
                       {{--class="header2 p-color-white">Chat Now</a>--}}
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
                    <a href="tel:+91-80 4094 4077" class="header2 p-color-white">+91 80 4094 4077</a>

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
    </section>
@endsection



