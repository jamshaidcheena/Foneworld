<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
class DeviceController extends Controller
{
    public function add_devices()
    {
       return view('template/admindashboard/pages/devices/add_devices'); 
    }
    public function submit_devices(Request $request)
    {
       $device=new Device();
       $device->device=$request->device;
       $device->shop_name=$request->shop_name;
       $device->rating=$request->rating;
       $device->description=$request->description;
       if($request->file('device_image')){
        $file= $request->file('device_image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image/device_image'), $filename);
        $device['device_image']= $filename;
    }
    $device->save();
    return redirect()->back()->with('message','Device Added Successful!');
    }
}
