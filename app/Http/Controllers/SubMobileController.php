<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\SubMobile;

class SubMobileController extends Controller
{
    public function add_sub_mobile()
    {

        $Mobile=Mobile::all();
       return view('template/admindashboard/pages/sub_mobile/add_sub_mobile',compact('Mobile')); 
    }
    public function submit_sub_mobile(Request $request)
    {

       $device=new SubMobile();
       $device->mobile_id=$request->mobile_id;
       $device->name=$request->name;
       $device->rating=$request->rating;
       $device->post_in_pack_price=$request->post_in_pack_price;
       $device->sub_mobile_description=$request->sub_mobile_description;
       if($request->file('sub_mobile_image')){
        $file= $request->file('sub_mobile_image');
        $filename= $file->getClientOriginalName();
        $file-> move(public_path('public/Image/sub_mobile_image'), $filename);
        $device['sub_mobile_image']= $filename;
        }

    if(isset($request->front_screen))
    {
        $f_title=$request->f_title;
        $f_price=$request->f_price;
        $f_currency=$request->f_currency;
        $f_screen_type=$request->f_screen_type;
        $f_true_tone_colour=$request->f_true_tone_colour;
        $f_warranty_period=$request->f_warranty_period;

        $f_repair_time=$request->f_repair_time;
        $f_message=$request->f_message;
       
        if($request->file('f_image')){
            $file= $request->file('f_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/Image/sub_mobile_image'), $filename);
            $f_image= $filename;
        }
        else
        {
            $f_image='';  
        }

        $front_screen=[

                'title'=>$f_title,
                'price'=>$f_price,
                'currency'=>$f_currency,
                'screen_type'=>$f_screen_type,
                'true_tone_colour'=>$f_true_tone_colour,
                'warranty_period'=>$f_warranty_period,
                'imp_message'=>$f_message,
                'repair_time'=>$f_repair_time,
                'image'=>$f_image,


        ];

        $front_screen=json_encode($front_screen);
        $device->sub_mobile_front_screen=$front_screen;
        
    }
    if(isset($request->backcover))
    {
        $b_title=$request->b_title;
        $b_price=$request->b_price;
        $b_save_price=$request->b_save_price;
        $b_currency=$request->b_currency;
        $b_apple_logo=$request->b_apple_logo;
        $b_apple_part=$request->b_apple_part;

       
        $b_warranty_period=$request->b_warranty_period;

        $b_repair_time=$request->b_repair_time;
        
       
        if($request->file('b_image')){
            $file= $request->file('b_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/Image/sub_mobile_image'), $filename);
            $b_image= $filename;
        }
        else
        {
            $b_image='';  
        }

        $backcover=[

                'title'=>$b_title,
                'price'=>$b_price,
                'save_price'=>$b_save_price,
                'currency'=>$f_currency,
                'apple_logo'=>$b_apple_logo,
                'apple_part'=>$b_apple_part,
                'warranty_period'=>$b_warranty_period,
                'repair_time'=>$b_repair_time,
                'image'=>$b_image,


        ];

        $backcover=json_encode($backcover);
        $device->sub_mobile_front_back_cover=$backcover;
        
    }



    if(isset($request->baterry_charging))
    {
        $bc_title=$request->bc_title;
        $bc_price=$request->bc_price;
        $bc_currency=$request->bc_currency;
        $bc_warranty_period=$request->bc_warranty_period;
        $bc_repair_time=$request->bc_repair_time;

        $bc_message=$request->bc_message;

        
        
       
        if($request->file('bc_image')){
            $file= $request->file('bc_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/Image/sub_mobile_image'), $filename);
            $bc_image= $filename;
        }
        else
        {
            $bc_image='';  
        }

        $battery_and_charging=[

                'title'=>$bc_title,
                'price'=>$b_price,
                'save_price'=>$b_save_price,
                'price'=>$bc_price,
                'currency'=>$bc_currency,
                'warranty_period'=>$bc_warranty_period,
                'repair_time'=>$bc_repair_time,
                'message'=>$bc_message,
                'image'=>$bc_image,


        ];

        $battery_and_charging=json_encode($battery_and_charging);
        //print_r($battery_and_charging);die();
        $device->sub_mobile_battery_charging=$battery_and_charging;
        
    }
    if(isset($request->camera_front_rear))
    {
        $camera=$request->camera;
        $camera_title=$request->camera_title;
        $camera_price=$request->camera_price;
        $camera_currency=$request->camera_currency;
        $camera_warranty_period=$request->camera_warranty_period;

        $camera_repair_time=$request->camera_repair_time;

        $camera_message=$request->camera_message;
        
       
        if($request->file('camera_image')){
            $file= $request->file('camera_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/Image/sub_mobile_image'), $filename);
            $camera_image= $filename;
        }
        else
        {
            $camera_image='';  
        }

        $camera_data=[

                'camera'=>$camera,
                'camera_title'=>$camera_title,
                'camera_price'=>$camera_price,
                'camera_currency'=>$camera_currency,
                'camera_warranty_period'=>$camera_warranty_period,
                'camera_repair_time'=>$camera_repair_time,
                'camera_message'=>$camera_message,
                'camera_image'=>$camera_image,
                


        ];

        $camera_data=json_encode($camera_data);
        $device->sub_mobile_camera_front_rear=$camera_data;
        
    }
    if(isset($request->custom_dont_know))
    {
        $custom_title=$request->custom_title;
        $custom_price=$request->custom_price;
        $custom_currency=$request->custom_currency;
      
        $custom_message=$request->custom_message;

        
        
       
        if($request->file('custom_image')){
            $file= $request->file('custom_image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/Image/sub_mobile_image'), $filename);
            $custom_image= $filename;
        }
        else
        {
            $custom_image='';  
        }

        $custom_data=[

                'title'=>$custom_title,
                'price'=>$custom_price,
                'currency'=>$custom_currency,
                'message'=>$custom_message,
                'image'=>$custom_image,
                
                


        ];

        $custom_data=json_encode($custom_data);
        $device->sub_mobile_custom=$custom_data;
        
    }

    $device->save();
    return redirect()->back()->with('message','Mobile Added Successful!');
    }
    public function view_sub_mobile()
    {
        $sub_mobile=SubMobile::all();  
        return view('template/admindashboard/pages/sub_mobile/view_sub_mobile',compact('sub_mobile')); 
    }
    public function edit_sub_mobile($id)
    {
        $sub_mobile=SubMobile::find($id);
        $Mobile=Mobile::all();  
        return view('template/admindashboard/pages/sub_mobile/edit_sub_mobile',compact('sub_mobile','Mobile')); 
    }
    public function update_sub_mobile(Request $request,$id)
    {
        $device=SubMobile::find($id);
        if($device)
        {
        $device->mobile_id=$request->mobile_id;
        $device->name=$request->name;
        $device->rating=$request->rating;
        $device->post_in_pack_price=$request->post_in_pack_price;
        $device->sub_mobile_description=$request->sub_mobile_description;
        if($request->file('sub_mobile_image')){
         $file= $request->file('sub_mobile_image');
         $filename= $file->getClientOriginalName();
         $file-> move(public_path('public/Image/sub_mobile_image'), $filename);
         $device['sub_mobile_image']= $filename;
         }
 
     if(isset($request->front_screen))
     {
         $f_title=$request->f_title;
         $f_price=$request->f_price;
         $f_currency=$request->f_currency;
         $f_screen_type=$request->f_screen_type;
         $f_true_tone_colour=$request->f_true_tone_colour;
         $f_warranty_period=$request->f_warranty_period;
 
         $f_repair_time=$request->f_repair_time;
         $f_message=$request->f_message;
        
         if($request->file('f_image')){
             $file= $request->file('f_image');
             $filename= $file->getClientOriginalName();
             $file-> move(public_path('public/Image/sub_mobile_image'), $filename);
             $f_image= $filename;
         }
         else
         {
             $f_image='';  
         }
 
         $front_screen=[
 
                 'title'=>$f_title,
                 'price'=>$f_price,
                 'currency'=>$f_currency,
                 'screen_type'=>$f_screen_type,
                 'true_tone_colour'=>$f_true_tone_colour,
                 'warranty_period'=>$f_warranty_period,
                 'imp_message'=>$f_message,
                 'repair_time'=>$f_repair_time,
                 'image'=>$f_image,
 
 
         ];
 
         $front_screen=json_encode($front_screen);
         $device->sub_mobile_front_screen=$front_screen;
         
     }
     if(isset($request->backcover))
     {
         $b_title=$request->b_title;
         $b_price=$request->b_price;
         $b_save_price=$request->b_save_price;
         $b_currency=$request->b_currency;
         $b_apple_logo=$request->b_apple_logo;
         $b_apple_part=$request->b_apple_part;
 
        
         $b_warranty_period=$request->b_warranty_period;
 
         $b_repair_time=$request->b_repair_time;
         
        
         if($request->file('b_image')){
             $file= $request->file('b_image');
             $filename= $file->getClientOriginalName();
             $file-> move(public_path('public/Image/sub_mobile_image'), $filename);
             $b_image= $filename;
         }
         else
         {
             $b_image='';  
         }
 
         $backcover=[
 
                 'title'=>$b_title,
                 'price'=>$b_price,
                 'save_price'=>$b_save_price,
                 'currency'=>$f_currency,
                 'apple_logo'=>$b_apple_logo,
                 'apple_part'=>$b_apple_part,
                 'warranty_period'=>$b_warranty_period,
                 'repair_time'=>$b_repair_time,
                 'image'=>$b_image,
 
 
         ];
 
         $backcover=json_encode($backcover);
         $device->sub_mobile_front_back_cover=$backcover;
         
     }
 
 
 
     if(isset($request->baterry_charging))
     {
         $bc_title=$request->bc_title;
         $bc_price=$request->bc_price;
         $bc_currency=$request->bc_currency;
         $bc_warranty_period=$request->bc_warranty_period;
         $bc_repair_time=$request->bc_repair_time;
 
         $bc_message=$request->bc_message;
 
         
         
        
         if($request->file('bc_image')){
             $file= $request->file('bc_image');
             $filename= $file->getClientOriginalName();
             $file-> move(public_path('public/Image/sub_mobile_image'), $filename);
             $bc_image= $filename;
         }
         else
         {
             $bc_image='';  
         }
 
         $battery_and_charging=[
 
                 'title'=>$bc_title,
                 'price'=>$b_price,
                 'save_price'=>$b_save_price,
                 'price'=>$bc_price,
                 'currency'=>$bc_currency,
                 'warranty_period'=>$bc_warranty_period,
                 'repair_time'=>$bc_repair_time,
                 'message'=>$bc_message,
                 'image'=>$bc_image,
 
 
         ];
 
         $battery_and_charging=json_encode($battery_and_charging);
         //print_r($battery_and_charging);die();
         $device->sub_mobile_battery_charging=$battery_and_charging;
         
     }
     if(isset($request->camera_front_rear))
     {
         $camera=$request->camera;
         $camera_title=$request->camera_title;
         $camera_price=$request->camera_price;
         $camera_currency=$request->camera_currency;
         $camera_warranty_period=$request->camera_warranty_period;
 
         $camera_repair_time=$request->camera_repair_time;
 
         $camera_message=$request->camera_message;
         
        
         if($request->file('camera_image')){
             $file= $request->file('camera_image');
             $filename= $file->getClientOriginalName();
             $file-> move(public_path('public/Image/sub_mobile_image'), $filename);
             $camera_image= $filename;
         }
         else
         {
             $camera_image='';  
         }
 
         $camera_data=[
 
                 'camera'=>$camera,
                 'camera_title'=>$camera_title,
                 'camera_price'=>$camera_price,
                 'camera_currency'=>$camera_currency,
                 'camera_warranty_period'=>$camera_warranty_period,
                 'camera_repair_time'=>$camera_repair_time,
                 'camera_message'=>$camera_message,
                 'camera_image'=>$camera_image,
                 
 
 
         ];
 
         $camera_data=json_encode($camera_data);
         $device->sub_mobile_camera_front_rear=$camera_data;
         
     }
     if(isset($request->custom_dont_know))
     {
         $custom_title=$request->custom_title;
         $custom_price=$request->custom_price;
         $custom_currency=$request->custom_currency;
       
         $custom_message=$request->custom_message;
 
         
         
        
         if($request->file('custom_image')){
             $file= $request->file('custom_image');
             $filename= $file->getClientOriginalName();
             $file-> move(public_path('public/Image/sub_mobile_image'), $filename);
             $custom_image= $filename;
         }
         else
         {
             $custom_image='';  
         }
 
         $custom_data=[
 
                 'title'=>$custom_title,
                 'price'=>$custom_price,
                 'currency'=>$custom_currency,
                 'message'=>$custom_message,
                 'image'=>$custom_image,
                 
                 
 
 
         ];
 
         $custom_data=json_encode($custom_data);
         $device->sub_mobile_custom=$custom_data;
         
     }
 
     $device->update();
     return redirect()->back()->with('message','Mobile Category Updated Successful!');
    }
    else{
        return redirect()->back()->with('message','Mobile Category Not Updated Successful!');  
    }
    }

    public function delete_sub_mobile(Request $request,$id)
    {
        $device=SubMobile::find($id);
        $device->delete();
        return redirect()->back()->with('message','Mobile Category Deleted Successful!');  
    }
}
