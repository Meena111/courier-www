@extends('layout')

@section('title', 'AJIO | MID SEASON Sale(40-80% Off) | Ship with ShoppRe')
@section('description', 'AJIO online shopping from India with ShoppRe International Shipping at Lowest Rates. Premium Brands. Stylish Collection. Tops & Dresses, Fusion Wear, Heels & Flats, Bags & Belts,  Sarees.')
@section('keywords', 'online shopping, ajio shipping, reliance retail, trends, wardrobe, womens tops, ajio offers, sale')

@section('css_style')

    <link rel="canonical" href="https://www.shoppre.com/ajio-online-shopping" />
    <meta name="robots" content="nofollow" />

    <meta property="og:title" content="AJIO Trends: Shopping with ShoppRe International Shipping" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.shoppre.com/ajio-online-shopping" />
    <meta property="og:image" content="https://www.shoppre.com/img/images/priyamani-shoppre-online-shopping-in-india.jpg" />
    <meta property="og:image:width" content="2160">
    <meta property="og:image:height" content="1216">
    <meta property="og:image:alt" content="ajio international shipping" />
    <meta property="og:description" content="Sign-up for Indian Shipping Address. Shop your AJIO products with ShoppRe for Internatioanl Shipping." />
    <meta property="og:site_name" content="ShoppRe" />

    <style>
        .zoom {
            transition: transform .2s; /* Animation */
            margin: 0 auto;
        }

        .underline-color  {
            text-decoration: underline red;
        }

        .img-product {
            width: 216px;
        }
        .zoom:hover {
            transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }

        .banner {
            display: none;
        }

        .image-banner {
            display: block;
        }

        .p-b-26 {
            padding-bottom: 26px !important;
        }

        .header-section {
            height: 480px !important;
        }

        @media only screen and (max-width:600px) {
            .img-product {
                width: 120px !important;
            }

            .header-section {
                height: 450px !important;
            }

            .m-t-img {
                margin-top: 0px !important;
            }

            .banner {
                display: block;
            }

            .image-banner {
                display: none;
            }

            .p-b-26 {
                padding-bottom: 26px !important;
            }
        }

        @media only screen
        and (min-width: 1024px)
        and (max-height: 1366px)
        and (-webkit-min-device-pixel-ratio: 1.5) {
            .img-product {
                width: 150px !important;
            }
        }

        .first-time-shipment{background-color:#11273b;height:813px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;padding-top:60px}.first-time-shipment .div-snow{padding-top:146px}.first-time-shipment .div-snow img{position:absolute}.first-time-shipment .div-snow img{margin-left:-3px;position:absolute}.first-time-shipment .div-newyear{padding-top:206px}.first-time-shipment .div-newyear img{margin-left:-12px;position:absolute}.textbox-email{width:358px;height:50px;box-shadow:0 1px 2px rgba(0,0,0,.2);border-radius:25px!important;background-color:#fff;border:0;padding-left:9%}.btn-grab-offer{width:180px;height:40px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:60px;background-color:#e85151;color:#fff;transition:.6s}.btn-grab-offer:hover{color:#fff;background-color:#c83b3b;-webkit-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);-moz-box-shadow:0 5px 20px 0 rgba(0,0,0,.6);box-shadow:0 5px 20px 0 rgba(0,0,0,.6)}.fst-service{box-shadow:0 0 10px rgba(17,39,59,.1);border-radius:15px;background-color:#fafafb;margin-top:-360px;padding:20px}.fst-service .c-image{padding:20px}.fst-service .shopandship{box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ps{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .ic{padding:20px;box-shadow:0 0 6px rgba(80,125,188,.08);border-radius:8px;border:1px solid #5a5b5d26}.fst-service .shopandship:hover{border:1px solid #507dbc}.fst-service .ps:hover{border:1px solid #507dbc}.fst-service .ic:hover{border:1px solid #507dbc}.fst-service .shopandship,.ic,.ps,h2{font-size:22px;font-weight:500;color:rgba(255,255,255,.6)}.fst-service .shopandship,.ic,.ps,p{color:#fff;font-size:16px;font-weight:600}.fst-service .btn-chris-place-order{padding:13px 50px;color:#fff;width:300px;height:50px;box-shadow:0 2px 3px rgba(0,0,0,.2);border-radius:30px;background-color:#e85151}.chris-benefits{padding-top:30px}.chris-benefits ul{text-decoration:none;list-style:none}.chris-benefits ul li{color:#224464;font-family:Montserrat,sans-serif;font-size:15px;font-weight:400;text-align:left;padding-top:15px}.chris-benefits ul li img{margin-top:9px}.text-center div{padding-top:20px}.img-new-year{display:none}.chris-benefits .panel{box-shadow:0 2px 10px rgba(0,0,0,.05)!important}.chris-benefits .panel ul li span{margin-left:15px}.leter-space{letter-spacing:1px}#contact-support{padding-bottom:30px}.select-control{float:left;width:90px!important;height:40px!important;font-size:13px;font-weight:400;font-style:italic;border-left:0;border-radius:3px;background-color:#fafafb;border:none}.select2-container--default .select2-selection--single{background-color:#fff!important;border:none!important;border-radius:4px!important;height:40px!important;padding-top:5px!important}.select2-container--default .select2-selection--single .select2-selection__arrow b{margin-top:4px!important}@media only screen and (max-width:600px){.first-time-shipment{height:651px}.textbox-email{width:330px}.div-snow{display:none}.div-newyear{display:none}.fst-service{margin-top:-260px}.c-image{display:none}.txt-align{text-align:center}.img-new-year{display:block;width:240px}.chris-benefits ul li{font-size:16px}}
    </style>

@endsection


@section('content')
    <main>
        <div class="header">
            <div class="container"><br><br><br>
                <center>
                    <h1 class="f-s-36 f-c-white f-w-8">AJIO Online Shopping</h1>
                    <p class="f-s-20 f-c-l-gray ">Shop AJIO.com With Your ShoppRe Address for International Delivery from India.<br></p>
                    <br>
                </center>
                <p class="f-s-20 f-c-white f-w-9 text-center" style="background-color: #fe9611"><i><a href="/first-time-international-shipment-offer" target="_blank">ShoppRe Offer</a> :
                        Get ₹200 Discount on Shipping AJIO Products Internationally. T&C*</i></p>
                <br>
                <br>
            </div>
        </div>
    </main>


    <section >
        <div class="container fst-service" style="margin-top: 0px;">
            <div class="row">
                <div class="">
                    <h2 class="f-s-18 p-color-cement-dark font-weight-900 txt-center">November 2019: <span class="f-s-25 f-c-red f-w-9">MID SEASON Sale (40-80% Off)</span> /
                        Below are the Recommended & Recently Shipped Products!</h2>

                </div>
{{--                <div class="col-md-4 col-xs-12 text-center margin-tp">--}}
{{--                    <div class="">--}}
{{--                        <a href="https://api.whatsapp.com/send?phone=917338208403&text=Hi%20Suresh;%20AJIO%20International%20Shipping" target="_blank">--}}
{{--                            <img src="https://d2njzkuk16ywue.cloudfront.net/cdn/img/images/7338208403-personal-shopper-number.png" >--}}
{{--                            <span class="font-16"></span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>



            <div class="row text-center">

                <div class="row text-center">
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">Women's Fashion (Mid-Season Sale)</h2>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.ajio.com/s/wedding-closet-3777-54091" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/hbb/hbb/14537556819998/14112019-D-WHP-Stores-weddingcloset.jpg">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Up to 70% Off--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/women-winter-wear-3621-51391" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/hdc/h64/14537556885534/14112019-D-WHP-Stores-winterwear.jpg">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Up to 60% Off--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/ethnicwear-3775-52361" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/h19/h58/14537557147678/14112019-D-WHP-AJIOOWN-ethnicwear.jpg">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Up to 60% Off--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/min-50-percent-off-3782-50132" target="_blank">
                                <img class="img-product m-t-img " src="https://assets.ajio.com/medias/sys_master/images/images/h39/h4c/14537557999646/14112019-D-WHP-BestOfBrands-jaipurkurti-min50.jpg">
{{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
{{--                                    Up to 60% Off--}}
{{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.ajio.com/s/up-to-40-percent-off-3782-50131" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/hac/hd1/14537557934110/14112019-D-WHP-BestOfBrands-ethnicity-upto40.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 70% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/40-to-80-percent-off-3782-50131" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/h7e/h45/14537557868574/14112019-D-WHP-BestOfBrands-projecteve-4080.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/up-to-50-percent-off-3776-52011" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/hf8/hf8/14537566519326/14112019-D-WHP-BestOfBrands-people-upto50.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/up-to-50-percent-off-3782-50132" target="_blank">
                                <img class="img-product m-t-img " src="https://assets.ajio.com/medias/sys_master/images/images/h8a/h8f/14537557737502/14112019-D-WHP-BestOfBrands-fortcollins-upto50.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row text-center">
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">Men's Fashion (Mid-Season Sale)</h2>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.ajio.com/s/wedding-closet-3777-75132" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/h79/ha5/14539610488862/14112019-D-MHP-Stores-WeddingCloset.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 70% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/t-shirts-and-shirts-3719-44441" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/hac/h1f/14539611701278/14112019-D-MHP-AJIOOWN-TshirtsAndShirts.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/jeans-and-trousers-3593-06941" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/hd5/hf5/14539611635742/14112019-D-MHP-AJIOOWN-JeansAndTrousers.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/up-to-50-percent-off-3782-63191" target="_blank">
                                <img class="img-product m-t-img " src="https://assets.ajio.com/medias/sys_master/images/images/h12/hec/14539619991582/14112019-D-MHP-BestOfBrands-Skult-upto50.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.ajio.com/s/min-30-percent-off-3782-63191" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/hca/h2b/14539620057118/14112019-D-MHP-BestOfBrands-Levis-min30.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 70% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/up-to-60-percent-off-3782-63193" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/hd1/hd4/14539613011998/14112019-D-MHP-BestOfBrands-IndianTerrain-upto60.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/winter-wear-3728-77781" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/h1d/h64/14539611504670/14112019-D-MHP-AJIOOWN-winterwear.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/footwear-3676-77781" target="_blank">
                                <img class="img-product m-t-img " src="https://assets.ajio.com/medias/sys_master/images/images/h9a/h7d/14539611570206/14112019-D-MHP-AJIOOWN-footwear.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <h2 class="f-s-20 p-color-cement-dark font-weight-900 ">INDIE</h2>

                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.ajio.com/c/vietnam-collection-3696-51851" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/h1c/h76/14396016820254/29102019-D-IHP-fromaroundtheworld-vietnam.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 70% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/c/afghanistan-collection-3696-51851" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/h19/haa/14396016885790/29102019-D-IHP-fromaroundtheworld-afghanistan.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/c/thailand-collection-3696-51851" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/h9b/h1b/14396016951326/29102019-D-IHP-fromaroundtheworld-thailand.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/c/turkey-collection-3696-51851" target="_blank">
                                <img class="img-product m-t-img " src="https://assets.ajio.com/medias/sys_master/images/images/h03/he2/14255747072030/15102019-D-IHP-fromaroundtheworld-turkey.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26">
                            <a href="https://www.ajio.com/s/silk-sarees-3766-45411" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/h0f/h2f/14395634319390/29102019-D-IHP-shopbyproduct-sarees-silk.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 70% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/flared-kurtas-3766-45411" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/hd0/h68/14395634909214/29102019-D-IHP-shopbyproduct-kurtas-flared.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/a-line-kurtas-3766-45411" target="_blank">
                                <img class="img-product m-t-img" src="https://assets.ajio.com/medias/sys_master/images/images/ha9/h3d/14395634974750/29102019-D-IHP-shopbyproduct-kurtas-aline.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-md-3 zoom">
                        <div class="shopandship onam-prod-pic p-b-26 no-padding-right" >
                            <a href="https://www.ajio.com/s/casual-jewellery-3766-45411" target="_blank">
                                <img class="img-product m-t-img " src="https://assets.ajio.com/medias/sys_master/images/images/h9f/hfa/14395635236894/29102019-D-IHP-shopbyproduct-jewellery-casual.jpg">
                                {{--                                <div class="no-pad Rakhi-mid-div mar-t-10 f-s-16" style="padding-top: 10px !important;font-weight: normal">--}}
                                {{--                                    Up to 60% Off--}}
                                {{--                                </div>--}}
                            </a>
                        </div>
                    </div>
                </div>


            </div>

            <br>
            <br>
            <br>
        </div>
    </section>
    <br>
    <br>
    <br>
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
    <script type='text/javascript'>
        var cId = '52423';

        (function(d, t) {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = (document.location.protocol == 'https:' ? 'https://cdn0.cuelinks.com/js/' : 'http://cdn0.cuelinks.com/js/')  + 'cuelinksv2.js';
            document.getElementsByTagName('body')[0].appendChild(s);
        }());
    </script>

@endsection
