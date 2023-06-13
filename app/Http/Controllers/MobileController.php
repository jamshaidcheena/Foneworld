<?php

namespace App\Http\Controllers;
use App\Models\Mobile;
use App\Models\Device;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function add_mobile()
    {

        $devices=Device::all();
       return view('template/admindashboard/pages/mobile/add_mobile',compact('devices')); 
    }
    public function view_mobile()
    {
        $device=Mobile::all();
        return view('template/admindashboard/pages/mobile/view_mobile',compact('device')); 
    }
    public function submit_mobile(Request $request)
    {
       $device=new Mobile();
       $device->device_id=$request->device_id;
       $device->name=$request->name;
       $device->rating=$request->rating;
       $device->mobile_description=$request->mobile_description;
       if($request->file('mobile_image')){
        $file= $request->file('mobile_image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image/mobile_image'), $filename);
        $device['mobile_image']= $filename;
    }
    $device->save();
    return redirect()->back()->with('message','Mobile Added Successful!');
    }

    public function edit_mobile($id)
    {
        $devices=Device::all();
        $mobile=Mobile::where('id',$id)->first();
        //print_r($mobile);die();
        return view('template/admindashboard/pages/mobile/edit_mobile',compact('mobile','devices')); 
    }
    public function update_mobile(Request $request,$id)
    {
       $device=Mobile::find($id);
       if($device)
       {
        $device->device_id=$request->device_id;
        $device->name=$request->name;
        $device->rating=$request->rating;
        $device->mobile_description=$request->mobile_description;
        if($request->file('mobile_image')){
         $file= $request->file('mobile_image');
         $filename= date('YmdHi').$file->getClientOriginalName();
         $file-> move(public_path('public/Image/mobile_image'), $filename);
         $device['mobile_image']= $filename;
     }
     $device->update();
     return redirect()->back()->with('message','Mobile updated Successful!');
       }
       else{
        return redirect()->back()->with('message','Mobile updated Not Successful!');
       }
      
    }
    public function delete_mobile(Request $request,$id)
    {
       $device=Mobile::find($id);
       if($device)
       {
        $device->device_id=$request->device_id;
       
     $device->delete();
     return redirect()->back()->with('message','Mobile deleted Successful!');
       }
       else{
        return redirect()->back()->with('message','Mobile deleted Not Successful!');
       }
      
    }
}
