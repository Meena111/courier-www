<?php

namespace App\Http\Controllers;

use App\SchedulePickup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSchedulePickup;

use Auth;

class SchedulePickupController extends Controller
{
    public function detail()
    {
        return view('schedule-pickup.pickup-detail');
    }
    public function pickupView(Request $request)
    {
      $pickup_id = $request->id;
      $pickup_details = SchedulePickup::where('id',$pickup_id)->first();
//      echo $pickup_details;
//      exit;
        return view('schedule-pickup.pickup-detail')->with(['pickup_details' => $pickup_details]);
    }

    public function pickupList()
    {
        $pickups = SchedulePickup::orderBy('id','desc')->get();
        return view('schedule-pickup.schedule-pickup-list')->with(['pickups' => $pickups]);
    }

    public function mail()
    {
        return view('email.schedule-pickup');
    }

    public function index()
    {
        return view('schedule-pickup.schedule-pickup');
    }

    public function submit(Request $request)
    {
        $special_items = "";
        $body = $request->all();
        unset($body['_token']);
        $schedule_package = new SchedulePickup($body);
        if($request->home_made)
        {
            $special_items = $special_items.$request->home_made.",";
        }
        if($request->branded_food_items)
        {
            $special_items = $special_items.$request->branded_food_items.",";
        }
        if($request->liquid_items)
        {
            $special_items = $special_items.$request->liquid_items.",";
        }
        if($request->medicine_items)
        {
            $special_items = $special_items.$request->medicine_items.",";
        }
        if($request->other)
        {
            $special_items = $special_items.$request->other.",";
        }

        $schedule_package->special_items = $special_items;

        $schedule_package->save();

        $this->sendEmailSchedulePickup($schedule_package);

        return redirect(route('schedulePickup.confirmPickup'));
    }
     public function sendEmailSchedulePickup($schedule_package)
    {             
        Mail::to($schedule_package->email)->bcc('support@shoppre.com')->send(new EmailSchedulePickup($schedule_package));
    }

    public function confirm()
    {
        return view('schedule-pickup.confirm-pickup');
    }
}
