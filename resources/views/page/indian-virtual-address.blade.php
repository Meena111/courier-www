@extends('layout')

@section('title', 'Free Indian Virtual Shipping Address | ShoppRe Mail Forwarding Address')
@section('description', 'Get your own free Indian virtual shipping address for shopping any Indian online stores and ship to your doorsteps, delivered in 3-6 days. Sign Up Now!')
@section('keywords', 'virtual address, mail forwarding, virtual mailbox')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/indian-virtual-address" />
    <style>
        .bg-ics-landing-page .container>div{padding:20px;margin-bottom:3em}.d-header-text{font-size:40px;font-weight:900}.d-header-text1{font-family:Montserrat -Italic;font-style:italic;line-height:26px;margin-top:25px}.box-steps p{line-height:1}.box-steps p span{font-size:22px;font-weight:900}#packing:hover{display:none}.bg-ics-l-p{background-image:url(../../img/images/overlay1.png);height:480px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;background-color:#fafafb;padding-top:80px}@media only screen and (max-width:600px){.bg-ics-l-p{height:680px}}
    </style>
@endsection

@section('content')
    <section class="bg-ics-l-p">
        <div class="container">
            <div class="col-md-12">
                <a href="tel:+91-8277919191" class="pull-right d-contact-img-desktop">
                    <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/d-contact-img1.png" alt="">
                </a>
                <a href="tel:+91-8277919191" class="d-contact-img pull-right">
                    <img src="{{env('CDN_IMAGE_URL')}}/shoppre.com/cdn/img/images/d-contact-img2.png" alt="">
                </a>
            </div>

            <div class="col-sm-12 col-md-12 col-xs-12 no-pad">
                <h1 class="p-color-white header-spacing d-header-text">1 ShoppRe Virtual Address = ∞ Destination</h1>
                   <p class="f-s-22 f-c-white">Own a Free Virtual Shipping Address | Shop & Ship From India | Ship Worldwide at Low Rates</p>
                <br>
                    <p class="f-s-22 f-c-white">Shop Online Indian Stores - Ship to Us - We Consolidate Your Packages & Ship to You!</p>
                <br>
                <p class="f-s-22 f-c-white">Place your order in ANY Indian Store with your ShoppRe Indian Address.</p>
                <br>

                </p>
                <div class="col-md-12 col-xs-12 no-pad">
                    <a href="/customer/register" class="btn btn-s-r btn-b-r btn-a-l">Create My Free Address</a>
                    <a href="/indian-online-stores" class="btn btn-l btn-s-b btn-b-b btn-a-l">Indian Stores List</a>
                </div>

            </div>

        </div>
    </section>
    <section>
        <div class="container div-b-w-s">
            <h2 class="f-s-20 f-c-d-greay f-w-8">
                Update: Global Shipping Partner for Amazon.in, Flipkart.com, Myntra.com, Jabong.com, Jaypore.com, Fabindia.com, Ajio.com, Tatacliq.com, Voonik.com, Limeroad.com & more.
            </h2>
            <p class="f-s-18 f-c-gray">
                Shopping from Indian Online portals means getting access to the best & price–optimized goods. However, the challenge is with the shipping cost,
                which easily offsets the benefits of saving up on product costs. There seems to be some risky areas involved when it comes
                to <a href="{{route('home')}}">international shipping</a> as well, such as scams, low quality, defective items,
                deviation from the actual product description, late delivery etc.
            </p><br>
            <p class="f-s-18 f-c-gray">This is where ShoppRe comes to the rescue – by providing a <span class="txt-italic">Virtual, Indian Shipping Address.</span></p>
            <br>
            <h2 class="f-s-20 f-c-d-greay f-w-8">What is an Indian Virtual Address?</h2>
            <p class="f-s-18 f-c-gray">As you <a href="{{route('customer.register')}}">Sign Up</a> with ShoppRe.com, you will be provided with an Indian Virtual Address with a unique locker number.
                You can use this address to <a href="{{route('stores1')}}">Shop from ANY Indian online portal</a> such as amazon.in, Flipkart, Jabong, Myntra, Limeroad, Ajio etc.
                Your items from these stores will reach ShoppRe Facility & will safely be stored in the locker secured just for you. You will
                be offered a 20 days FREE storage period within which you can accumulate as many items from the variety of stores as possible.
                At the end, we will consolidate all of your items & ship it right to your doorsteps in 3-6 business days,
                wherever in the world you are.
            </p><br>
            <h2 class="f-s-20 f-c-d-greay f-w-8">Get Your Free ShoppRe Virtual Shipping Addresses</h2>
           <div class="col-md-12 col-xs-12">
               <div class="div-b-w-s b-r pad-20 col-md-8 col-xs-12">
                   <p class="f-s-20 f-c-d-greay f-w-7">No.181, 1st Floor 2nd Cross Rd, 1st Block Koramangala,<br> Bengaluru, Karnataka, India-560034</p>
                   <p class="f-s-16 f-c-l-gray">ShoppRe.com - Your Global Shipping Partner From INDIA</p>
               </div>
           </div>
            <div class="col-md-12 col-xs-12"> <br></div>

            <h2 class="f-s-20 f-c-d-greay f-w-8 txt-u-l">You can save up to 60%-80% in Shipping Costs!</h2>

            <p class="f-s-18 f-c-gray">Clubbing your goods together in one package, rather than shipping in your orders individually from each supplier,
                can help you <a href="/member/select/plan">save up to 80% in shipping costs</a>. The first half kilo of a courier is costlier than the following weight.
                Imagine how much cost you can cut down on, buy avoiding each first-half kilos of your individual orders charged for,
                separately!
            </p>

            <h2 class="f-s-20 f-c-d-greay f-w-8 txt-u-l">Discounted Shipping Rates</h2>
            <p class="f-s-18 f-c-gray">You can save more in shipping costs with ShoppRe.com due to its discounted shipping rates.
                We have high volumes of transactions with our global shipping partners and they offer us great rates that you can take advantage of.
                As the weight of the shipment increases, the rates are more optimized!
            </p>
            <h2 class="f-s-20 f-c-d-greay f-w-8 txt-u-l">Multiple Shipping Options</h2>
            <p class="f-s-18 f-c-gray">We are partnered up with DHL, DTDC & other special courier partners for special items.
                Over a period of time, we have been able to identify the efficiency of each partner concerning different countries
                & we only consider the best option to each destination. However, if you have another preference, it can also be taken care of.
            </p>
            <h2 class="f-s-20 f-c-d-greay f-w-8 txt-u-l">More Inclusive Services; Inspection & Photos</h2>
            <p class="f-s-18 f-c-gray">ShoppRe.com comes with a slew of extra benefits & services. You’ll get an email notification when each of your packages arrives at your locker.
                You can see the photos of the items just to ensure that it is to your expectation. ShoppRe’s QC team will notify you in case of any damage & help you return
                the damaged item to the supplier. We will finally <a href="/consolidation-service">consolidate & re-pack</a>  them in one box & ship it off to you.
                You can use any form of online payment – Credit/Debit Card, PayPal, PayTM, Wire Transfer or Moneygram to compensate us for our services.
            </p>
            <br>
            <br>
            <br>
        </div>
    </section>

@endsection
