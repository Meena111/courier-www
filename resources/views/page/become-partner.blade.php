@extends('layout')

@section('title', 'About | Shoppre - International Shipping Partner')
@section('description', 'Know how Shoppre a parcel forwarding & international shipping services work for online shopping in India while ensuring fast service at unbelievably low prices.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/about"/>
    <style>
        .div-option{
            height: 30px;
            padding-top: 5px;
        }
        @media only screen and (max-width: 600px) {
            .div-option{
                height: auto;
                padding-top: 0px;
                margin-bottom: 20px;
            }
            .mobile-pad{
                padding: 0px;
            }
        }
    </style>
@endsection
@section('content')
    <main>
        <div class="header">
            <div class="container"><br><br><br>
                <center>
                    <h1 class="f-s-36 f-c-white f-w-8">Seller Partnership</h1>
                    <p class="f-s-20 f-c-l-gray ">ShoppRe.com makes shipping super easy. Ship your products
                        Internationally starting at Rs. 500/-.<br> Fill in the form below or reach out to us at +91
                        9148357733</p>
                </center>
                <br>
                <br>

            </div>
        </div>
    </main>
    <section>
        <div class="container" style="margin-top: 62px;">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive img-shipments" src="{{env('AWS_CLOUD_FRONT')}}/img/images/ics-tailor.png">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <h1 class="f-s-24 font-weight-900 f-c-d-greay">Are you a Seller or an young Entrepreneur or an upcoming organization
                    aspiring to make your talent & business [B2B, B2C, C2C] reach overseas?</h1>
                <p class="f-s-20 f-c-l-gray">
                    <span> Sit back and relax while we handle the fuss of your company's shipments and delivery.
                        Ship your products with us & reach customers Globally.</span> To know how much you can save monthly on regular shipping.</p>
                <br>
                <div class="f-s-16 f-c-red">
                    <p>YOUR ONE-STOP SOLUTION FOR ALL SHIPPING PROBLEMS! </p>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #fafafb;">
        <div class="container "><br><br>
            <h2 class="f-s-30 f-c-blue f-w-6">Submit your Interest</h2>
            <div class="col-md-12 col-xs-12 div-b-w-s "
                 style="-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius: 20px;padding-top: 20px">
                <div class="col-md-12 col-xs-12 card-body no-pad">
                    <div class="col-md-12 colxs-12 no-pad">
                        <div class="col-md-8 col-xs-12 no-pad">
                            <form action="" method="post" id="seller_lp">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="f-s-14 f-c-l-gray" for="name">Seller Type <span
                                                        class="f-c-red">*</span></label>
                                            <select class="countries form-control" name="businessType" multiple="multiple" id="businessType"
                                                    style="border: 1px solid #e6e9ef !important;">
                                                <option value="">Online Seller</option>
                                                <option value="">Facebook Seller</option>
                                                <option value="">Instagram Seller</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label class="f-s-14 f-c-l-gray" for="name">Contact Person Full Name
                                                <span
                                                        class="f-c-red">*</span></label>
                                            <input type="text" class="form-control" name="Name"
                                                   placeholder="Enter name"
                                                   required>
                                        </div>
                                    </div>
                                </div>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="f-s-14 f-c-l-gray" for="Mobile_number">Mobile Number<span
                                                            class="f-c-red">*</span></label>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Mobile Number"
                                                           aria-label="Username"
                                                           aria-describedby="basic-addon1" name="contactNumber"
                                                           required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="f-s-14 f-c-l-gray" for="email">Email Address<span
                                                            class="f-c-red">*</span></label>
                                                <input type="email" class="form-control" name="email"
                                                       aria-describedby="emailHelp" placeholder="Enter email address"
                                                       required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="f-s-14 f-c-l-gray" for="businessname">Business Name (if
                                                    applicable)</label>
                                                <input type="text" class="form-control" name="businssName"
                                                       placeholder="Name of your store/business">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="f-s-14 f-c-l-gray" for="website">Website/Page
                                                    (optional)</label>
                                                <input type="text" class="form-control" name="webSite"
                                                       placeholder="Enter url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12 no-pad">
                                        <label class="f-s-14 f-c-l-gray">No.of shipments in a month<span
                                                    class="f-c-red">*</span></label>
                                        <div class="col-md-12 col-xs-12 no-pad" style="border: 1px solid #e6e9ef; height: 30px;">
                                            <div class="col-md-2 col-xs-6"
                                                 style="background-color: #e6e9ef;height: 30px;padding-top: 5px;">
                                                <p>Domestic</p>
                                            </div>
                                            <div class="col-md-2 col-xs-6" style="padding-top:5px">
                                                <label class="f-s-14 f-c-blue"> Less than</label>
                                            </div>
                                            <div class="col-md-8 col-xs-12 no-pad div-option" style="">
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="domestic" value="10-15" checked>10-50
                                                </label>
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="domestic" value="50-100">50-100
                                                </label>
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="domestic" value="100-500">100-500
                                                </label>
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="domestic" value="500+">500+
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-xs-12 no-pad" style="margin-top: 20px">
                                        <div class="col-md-12 col-xs-12 no-pad" style="border: 1px solid #e6e9ef; height: 30px;">
                                            <div class="col-md-2 col-xs-6"
                                                 style="background-color: #e6e9ef;height: 30px;padding-top: 5px;">
                                                <p>International</p>
                                            </div>
                                            <div class="col-md-2 col-xs-6" style="padding-top:5px">
                                                <label class="f-s-14 f-c-blue"> Less than</label>
                                            </div>
                                            <div class="col-md-8 col-xs-12 no-pad div-option" >
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="International" value="10-50" checked>10-50
                                                </label>
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="International" value="50-100">50-100
                                                </label>
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="International" value="100-500">100-500
                                                </label>
                                                <label class="radio-inline f-c-l-gray">
                                                    <input type="radio" name="International" value="500+">500+
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12 no-pad "><br>
                                        <div class="col-md-12 col-xs-12 pad-t-15">
                                            <label class="f-s-14 f-c-l-gray" for="countries">Which are the top Countries
                                                you Ship?</label>
                                        </div>
                                        <div class="col-md-12 col-xs-12 pad-t-10">
                                            <select class="countries form-control" name="states[]" multiple="multiple" id="Countries"
                                                    style="border: 1px solid #e6e9ef !important;">
                                                @foreach($countries as $country)
                                                    <option value="{{$country->id}}" {{$country->id == 226 ? 'selected' : ""}}>{{$country->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12 no-pad" style="margin-bottom: 20px">
                                        <button type="submit" class="btn btn-s-r btn-b-r m-t-20 btn-l">Submit</button>
                                        <br>
                                        <br>
                                        <div id='succesBlock'style="background-color:green;text-align: center"><label id="message" style="color:white"></label></div>

                                    </div>

                            </form>
                        </div>
                        <div class="col-md-2 col-xs-12 mobile-pad">
                            <div class="col-md-12 col-xs-12 no-pad  ">
                                <h6 class="advertisement-text">Exciting Offers</h6>
                                <div class="col-md-12 col-xs-12 no-pad" >
                                    <img style="width: 300px; height: auto; margin-bottom: 20px" src={{asset('img/images/card.png')}}>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="schedule_load"></div>
    </section>

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#succesBlock").hide();
            $("#seller_lp").validate({
                rules:
                    {
                        email: {required: true}
                    },
                messages:
                    {
                        // email: {required: 'Please enter your email id'}
                    },
                submitHandler: function (form) {
                    $('#schedule_load').show();
                    var name = $("input[name='Name']").val();
                    var email = $("input[name='email']").val();
                    var businessName = $("input[name='businssName']").val();
                    var websiteLink = $("input[name='webSite']").val();
                    var contact_no = $("input[name='contactNumber']").val();
                    var businessType = $('#businessType option:selected').text();
                    var Countries = $('#Countries option:selected').text();
                    var domesticWeightRange = $("input[name='domestic']:checked").val();
                    var internationalWeightRange =  $("input[name='International']:checked").val();
                    var token = $('input[name=_token]').val();
                    jQuery.ajax({
                        url: 'seller',
                        type: "POST",
                        data: {
                            _token: token,
                            email: email,
                            name: name,
                            businessType: businessType,
                            businessName: businessName,
                            websiteLink: websiteLink,
                            contact_no: contact_no,
                            Countries: Countries,
                            domesticWeightRange: domesticWeightRange,
                            internationalWeightRange: internationalWeightRange,
                        },
                        success: function (data) {
                            // $("input[name='message']").text('Thank you for submitting');
                            $("#message").text("Thank you for submitting");
                            $("#succesBlock").show();
                            $("input[name='Name']").val('');
                            $("input[name='businessType']").val('');
                            $("input[name='email']").val('');
                            $("input[name='businssName']").val('');
                            $("input[name='webSite']").val('');
                            $("input[name='contactNumber']").val('');
                            $('#schedule_load').hide();
                        }
                    })
                }
            });

        });
    </script>

    <script>
        $(document).ready(function () {
            $('.countries').select2();
        });
    </script>
@endsection
