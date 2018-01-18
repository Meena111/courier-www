<?php

namespace App\Http\Controllers;

use App\FlyerUsers;
use App\Mail\EmailChat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use Auth;
use App\Country;
use App\ShippingRate;
use App\Store;
use App\StoreCategory;
use App\StoreCatClub;
use App\FaqCategory;
use App\Page;
use App\FavoriteStore;
use App\Review;
use App\ChatEmail;

use App\Mail\ContactEnquiry;
use App\Mail\GetQuote;
use App\Http\Controllers\SchedulePickup;


class PageController extends Controller
{
    public function saveFlyerUser(Request $request)
    {
        $flyer_user = new FlyerUsers();
        $flyer_user->name = $request->username;
        $flyer_user->coupon_code = $request->coupon;
        $flyer_user->url = $request->url;
        $result = $flyer_user->save();
        return response()->json([ 'error'=>'0', 'apistatus'=> "Api Success"]);
    }

    public function newspaper(Request $request)
    {
        $coupon_code = "KOR-BLR-N";
        return view('offers.offer')->with(["coupon_code"=>$coupon_code]);
    }

    public function airport(Request $request)
    {
        $coupon_code = "KOR-BLR-A";
        return view('offers.offer')->with(["coupon_code"=>$coupon_code]);
    }

    public function chatMailConfirm()
    {
        return view('chat-email.confirm-chat-email');
    }

    public function pickupByAjex(Request $request)
    {
        return response()->json([ 'error'=>'0', 'request'=> $request->first_name]);
    }

    public function chatMailSent(Request $request)
    {
        $body = $request->all();
        unset($body['_token']);
        $chat_email = new ChatEmail($body);
        $result = $chat_email->save();
        $this->sendChatEmail($chat_email);
        return redirect(route('chatMail.confirm'));
    }

    public function sendChatEmail($chatData)
    {
        Mail::to($chatData->email)->bcc('support@shoppre.com')->send(new EmailChat($chatData));
    }

    public function chatMailIndex()
    {
           return view('chat-email.chat-email');
    }

    public function refundAndCancellation()
    {
     return view('page.refund-and-cancellation');
    }

    public function privacyPolicy()
    {
     return view('page.privacy-policy');
    }

    public function termsAndConditions()
    {
     return view('page.terms-and-conditions');
    }
   
    public function consolidationService()
    {
        return view('page.consolidation');
    }

    public function countryList()
    {
       $countries = Country::orderBy('name','asc')->get();

       return view('page.country-list')->with(['countries' => $countries]);
    }

    public function urlTargetShipping(Request $request)
    {
        $destination = $request->destination;
        $source = $request->source;
        $initial = $request->initial;
        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        $country = Country::where('slug',$destination)->first();

        if($country)
        {
            $prices_non_doc = ShippingRate::where('min','<=',1.5 )
                ->where('max','<=',2.0)
                ->where('item_type','=','nondoc')
                ->where('country_id',$country->id)->get();

            foreach ($prices_non_doc as $key => $field)
            {
                $disamount = ($country->discount / 100) * $field->amount;
                $prices_non_doc[$key]['amount'] = $disamount;
            }

            $prices_doc = ShippingRate::where('min','<=',1.5 )
                ->where('max','<=',2.0)
                ->where('item_type','=','doc')
                ->where('country_id',$country->id)->get();
            foreach ($prices_doc as $key => $field)
            {
                $disamount = ($country->discount / 100) * $field->amount;
                $prices_doc[$key]['amount'] = $disamount;
            }

            $title = ucwords($initial)." From ".ucwords($source)." To ".ucwords($destination). " - Courier Services To ".ucwords($destination);
            $description = "Shoppre offers Door to Door courier service to " .ucwords($destination).
                " from any part of ".ucwords($source) .". The charges are cheapest in " .ucwords($source)."for sending courier to ".ucwords($destination).". Sign Up Now!";
            $keywords = "ship your packages, delivered to your country, parcel services to ".ucwords($destination).",
              sending courier to ".ucwords($destination).", shipping";
            return view('page.url-target')->with(['source' => $source,'destination'=>$country->name,'title'=>$title,'description'=>$description,'keywords'=>$keywords,
                'prices_non_doc'=>$prices_non_doc,'prices_doc'=>$prices_doc,'countries'=>$countries]);
        }
        else
        {
         return redirect(route('home'));
        }
    }

    public function urlTargetSend(Request $request)
    {
        $destination = $request->destination;
        $source = $request->source;
        $content = $request->contents;
        $initial = $request->initial;
        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        $country = Country::where('slug',$destination)->first();
        if($country) {
            $prices_non_doc = ShippingRate::where('min', '<=', 1.5)
                ->where('max', '<=', 2.0)
                ->where('item_type', '=', 'nondoc')
                ->where('country_id', $country->id)->get();
            foreach ($prices_non_doc as $key => $field) {
                $disamount = ($country->discount / 100) * $field->amount;
                $prices_non_doc[$key]['amount'] = $disamount;
            }

            $prices_doc = ShippingRate::where('min', '<=', 1.5)
                ->where('max', '<=', 2.0)
                ->where('item_type', '=', 'doc')
                ->where('country_id', $country->id)->get();

            foreach ($prices_doc as $key => $field) {
                $disamount = ($country->discount / 100) * $field->amount;
                $prices_doc[$key]['amount'] = $disamount;
            }


            $title = ucwords($initial) . " " . ucwords($content) . " From " . ucwords($source) . " To " . ucwords($destination) . " - " . ucwords($content) . " Delivery " . ucwords($destination) . ".";
            $description = ucwords($initial) . " " . "rakhi, chocolates, sweets, cookies, dress, birthday gifts and more to your friends and family, get delivered to " . ucwords($destination) .
                " from " . ucwords($source) . ".";
            $keywords = ucwords($initial) . " " . ucwords($content) . ", delivery " . ucwords($content) . " to " . ucwords($destination) . ",
              gift overseas";

            return view('page.url-target')->with(['source' => $source, 'content' => $content, 'destination' => $destination,
                'title' => $title, 'description' => $description, 'keywords' => $keywords,
                'prices_non_doc' => $prices_non_doc, 'prices_doc' => $prices_doc, 'countries' => $countries]);
        }
        else
        {
            return redirect(route('home'));
        }

    }
    public function urlTargetContent(Request $request)
    {
        $destination = $request->destination;
        $source = $request->source;
        $cprefix = $request->cprefix;
        $cpostfix = $request->cpostfix;
        $initial = $request->initial;
        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        $country = Country::where('slug',$destination)->first();
        if($country) {
            $prices_non_doc = ShippingRate::where('min', '<=', 1.5)
                ->where('max', '<=', 2.0)
                ->where('item_type', '=', 'nondoc')
                ->where('country_id', $country->id)->get();
            foreach ($prices_non_doc as $key => $field) {
                $disamount = ($country->discount / 100) * $field->amount;
                $prices_non_doc[$key]['amount'] = $disamount;
            }

            $prices_doc = ShippingRate::where('min', '<=', 1.5)
                ->where('max', '<=', 2.0)
                ->where('item_type', '=', 'doc')
                ->where('country_id', $country->id)->get();
            foreach ($prices_doc as $key => $field) {
                $disamount = ($country->discount / 100) * $field->amount;
                $prices_doc[$key]['amount'] = $disamount;
            }
            $title = ucwords($initial) . " " . ucwords($cprefix) . " " . ucwords($cpostfix) . " From " . ucwords($source) . " To " . ucwords($destination) . ". - " . ucwords($initial) . " " . ucwords($cprefix) . " To " . ucwords($destination);
            $description = ucwords($initial) . " " . ucwords($cprefix) . " " . ucwords($cpostfix) . " From " . ucwords($source) . " To " . ucwords($destination) . ". " . "Shoppre offers door to door express delivery service for all your " . ucwords($cprefix) . " " . ucwords($cpostfix) .
                " at lowest shipping rates. Send Now!";
            $keywords = ucwords($initial) . " " . ucwords($cprefix) . " " . ucwords($cpostfix) . ", shipping " . ucwords($cprefix) . " " . ucwords($cpostfix) . ", parcel " . ucwords($cprefix) . " " . ucwords($cpostfix);

            return view('page.url-target')->with(['source' => $source, 'destination' => $destination, 'title' => $title,
                'description' => $description, 'keywords' => $keywords, 'prices_non_doc' => $prices_non_doc,
                'prices_doc' => $prices_doc, 'countries' => $countries]);
        }
        else
        {
            return redirect(route('home'));
        }
    }
    public function home()
    {
//        if(isset($_SERVER['HTTP_REFERER']))
//        {
//        $refercode = $_SERVER['HTTP_REFERER'];
//        echo $refercode;
//        exit;
//        }
        $reviews = Review::orderBy('updated_at', 'desc')
                            ->where('approve', '1')
                            ->limit(5)
                            ->get();
        return view('page.home')->with(['reviews' => $reviews]);
    }
    public function about()
    {
        return view('page.about');
    }
    public function partner()
    {
        return view('page.partner');
    }
    public function faq()
    {
        $categories = FaqCategory::all();
        return view('page.faq')->with('categories', $categories);
    }
    public function contact()
    {
        return view('page.contact');
    }
    public function submitContact(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|max:250',
            'lastname' => 'required|max:250',
            'email' => 'required|email|max:250',
            'country' => 'required',
            'msg_content' => 'required',
        ]);

        Mail::to("support@shoppre.com")->send(new ContactEnquiry($request));
        return redirect()->back()->with('message', 'Your enquiry has been submited.');
    }
    public function services()
    {
        return view('page.services');
    }
    public function howitworks()
    {
        return view('page.howitworks');
    }
    public function viewPage(Request $request)
    {
        $slug = $request->slug;
        $page = Page::where('slug', $slug)->first();
        if(empty($page)) return abort(404);
        return view('page.view')->with('page', $page);
    }
    public function pricing()
    {
        $reviews = Review::orderBy('updated_at', 'desc')
                            ->where('approve', '1')
                            ->limit(10)
                            ->get();
        $countries = Country::orderBy('name', 'asc')->where('shipping', '1')->get();
        return view('page.pricing')->with(['reviews' => $reviews, 'countries' => $countries]);

    }
    public function shipCalculate(Request $request)
    {
        $weight = $request->weight;
        $country = Country::find($request->country);
        if (isset($request->length) && isset($request->width) && isset($request->height)) {
            $volume = $request->length * $request->width * $request->height;
            if ($request->scale == "in") {
                $volume = $volume/2.54;
            }
            $volWeight = $volume/5000;
            if ($volWeight > $weight) {
                $weight = $volWeight;
            }
        }
        
        $unit = $request->unit;
        $discount = $country->discount;

        $type = $request->weight <= 2 ? $request->type : 'nondoc';

        if ($unit === "lbs") {
            $weight = $weight * 0.45;
        }

        if ($weight <= 300) {
            $rate = ShippingRate::where('country_id', $country->id)
                                ->where('item_type', $type)
                                ->where('min', '<', $weight)
                                ->where('max', '>=', $weight)
                                ->first();
        }else{
            $rate = ShippingRate::where('country_id', $country->id)
                                ->where('item_type', $type)
                                ->where('min', '<', $weight)
                                ->where('max', '=', 0)
                                ->first();
        }

        if (!empty($rate)) {
            $amount = $rate->rate_type == "fixed" ? $rate->amount : $rate->amount * $weight;

            $amount = number_format($amount, 2, '.', '');
            $time = $rate->timerange;

            return response()->json([ 'error'=>'0', 'time'=> $time, 'amount'=>$amount, 'discount'=>$discount ]);
        }else{
            return response()->json(['error'=>'1']);
        }
    }

    public function getQuote(Request $request)
    {
        $this->validate($request, [
            'state' => 'required|max:250',
            'city' => 'required|max:250',
            'pin' => 'required',
            'type' => 'required',
            'weight' => 'required',
            'unit' => 'required',
            'email' => 'required|email|max:250',
        ]);

        $mail = Mail::to("support@shoppre.com")->send(new GetQuote($request));
        return response()->json([ 'mail'=> $mail]);
    }

    public function stores()
    {
        $categories = StoreCategory::orderBy('category', 'asc')->get();
        $webs = StoreCatClub::where('cat_id', 1)
                            ->where('type', 'web')
                            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                            ->get();
        $fbs = StoreCatClub::where('cat_id', 1)
                            ->where('type', 'fb')
                            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                            ->get();
        $feats = StoreCatClub::where('cat_id', 1)
                            ->where('featured', 1)
                            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                            ->get();

        if (Auth::check()) {
            $favs = FavoriteStore::where('custid', Auth::id())->pluck('clubid')->toArray();
            return view('page.stores')->with(['categories'=>$categories, 'webs'=>$webs, 'fbs'=>$fbs, 'feats'=>$feats, 'favs'=>$favs]);
        }

        return view('page.stores')->with(['categories'=>$categories, 'webs'=>$webs, 'fbs'=>$fbs, 'feats'=>$feats]);
    }

    public function sortStores(Request $request)
    {
        $cat = $request->cat;
        $stores = array();

        $stores['web'] = StoreCatClub::where('cat_id', $cat)
                            ->where('type', 'web')
                            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                            ->get()
                            ->toArray();

        $stores['fb'] = StoreCatClub::where('cat_id', $cat)
                            ->where('type', 'fb')
                            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                            ->get()
                            ->toArray();

        $stores['feat'] = StoreCatClub::where('cat_id', $cat)
                            ->where('featured', 1)
                            ->select('store_cat_clubs.*', 'stores.name', 'stores.type', 'stores.logo')
                            ->join('stores', 'store_cat_clubs.store_id', '=', 'stores.id')
                            ->get()
                            ->toArray();
        if (Auth::check()) {
            $stores['custid'] = true;
            $stores['favs'] = FavoriteStore::where('custid', Auth::id())->pluck('clubid')->toArray();
        }

        return response()->json(['stores'=>$stores]);
    }

    public function reviews()
    {
        $countries = Country::orderBy('name', 'asc')->get();
        $reviews = Review::orderBy('updated_at', 'desc')->where('approve', '1')->paginate(10);
        return view('page.reviews')->with(['countries'=>$countries, 'reviews'=>$reviews]);
    }

    public function submitReview(Request $request)
    {
        $this->validate($request, [
            'person' => 'required|max:250',
            'countrid' => 'required',
            'review' => 'required',
            'rating' => 'required',
        ]);

        $review = new Review;
        $review->person = $request->person;
        $review->countrid = $request->countrid;
        $review->review = $request->review;
        $review->rating = $request->rating;
        $review->approve = '0';
        $review->save();

        return redirect()->back()->with('message', 'Success! Review has been submit for admin approval.');
    }
}
