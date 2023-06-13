<?php

namespace App\Http\Controllers;
use App\Models\Mobile;
use App\Models\Device;
use App\Models\SubMobile;
use App\Models\Booking;
use Illuminate\Http\Request;
use Session;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        Session::forget('select_repair_device');

        $mobile=Mobile::all();
       return view('template/frontend/index',compact('mobile')); 
    }
   public function all_category_mbl($id)
   {
    $all_categories_mbl=SubMobile::where('mobile_id',$id)->get();
    //print_r($all_categories_mbl);die();
    return view('template/frontend/pages/device_category',compact('all_categories_mbl')); 
   }
   public function select_device($id)
   {
    $select_device=SubMobile::find($id);
    //print_r($select_device);die();
    return view('template/frontend/pages/select_device',compact('select_device')); 
   }
   public function book_repair(Request $request,$slug)
   {
            if($slug == 'front_screen')
            {
                $front_screen_details=$request->front_screen_details;
                $front_screen_details=json_decode($front_screen_details);

                Session::put('select_repair_device',$front_screen_details);

                $title=$front_screen_details->title; 
                $slc_color=$request->slc_color;
                $mbl_name=$request->mbl_name;
                return redirect('collections/'.$mbl_name.'');
                //print_r($slc_color);die();
            }
            if($slug == 'back_cover')
            {
                $back_cover_details=$request->back_cover_details;
                $back_cover_details=json_decode($back_cover_details);

                Session::put('select_repair_device',$back_cover_details);

                $title=$back_cover_details->title; 
                $slc_color=$request->slc_color;
                $mbl_name=$request->mbl_name;
                return redirect('collections/'.$mbl_name.'');
                //print_r($slc_color);die();
            }
            if($slug == 'battery_charging')
            {
                $battery_charging_details=$request->battery_charging_details;
                $battery_charging_details=json_decode($battery_charging_details);

                Session::put('select_repair_device',$battery_charging_details);
                $mbl_name=$request->mbl_name;
                return redirect('collections/'.$mbl_name.'');
                //print_r($slc_color);die();
            }
            if($slug == 'camera_front')
            {
                $camera_front_details=$request->camera_front_details;
                $camera_front_details=json_decode($camera_front_details);

                Session::put('select_repair_device',$camera_front_details);
                $mbl_name=$request->mbl_name;
                return redirect('collections/'.$mbl_name.'');
                //print_r($slc_color);die();
            }
            if($slug == 'custom_repair')
            {
                $custom_repair=$request->custom_repair_details;
                $custom_repair=json_decode($custom_repair);
//print_r($request->custom_repair_details);die();
                Session::put('select_repair_device',$custom_repair);
                $mbl_name=$request->mbl_name;
                return redirect('collections/'.$mbl_name.'');
                //print_r($slc_color);die();
            }
   }
   public function collections_repair($slug)
   {

    $select_repair=SubMobile::where('name',$slug)->first();
    $post_in_pack_price=$select_repair->post_in_pack_price;
    //print_r($select_repair->post_in_pack_price);die();
    return view('template/frontend/pages/repairs',compact('post_in_pack_price')); 
   }
   public function proceed_store(Request $request)
   {
    $email=$request->email;
    
    print_r($email);die();
   }
   public function proceed_store_post_pack(Request $request)
   {
    $post_in_pack=$request->post_in_pack;
    
    //print_r($post_in_pack);die();
    return redirect('checkout');
    
   }
   public function checkout(Request $request)
   {
    $select_repair_device=Session::get('select_repair_device');
    //print_r($select_repair_device);die();
    return view('template/frontend/pages/checkout',compact('select_repair_device')); 
   }
   public function booking(Request $request)
   {

    $invoice_no=rand(9999999999999999,1000000000000000);

    $select_repair_device=Session::get('select_repair_device');

DB::table('bookings')->insert([

    'invoice_no'=>$invoice_no,
    'c_first_name'=>$request->c_first_name,
    'c_last_name'=>$request->c_last_name,
    'c_email'=>$request->c_email,
    'c_phone_number'=>$request->c_phone_number,
    'c_post_code'=>$request->c_post_code,
    'c_device_passcode'=>$request->c_device_passcode,
    'mobile_network'=>$request->mobile_network,
    'additional_information'=>$request->additional_information,
    'special_offers'=>$request->special_offers,
    'seen_web'=>$request->seen_web,
    'booking_details'=>json_encode($select_repair_device),
]);

    
    return redirect()->back();
   }







  

















}


?>