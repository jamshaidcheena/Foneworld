<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use DB;
use Hash;
use Auth;
class ProductController extends Controller
{

  

    public function add_store()
    {
       
       return view('template/admindashboard/pages/store/add_store'); 
    }
    public function view_store()
    {
        $store=Store::orderBy('id','DESC')->get();
       return view('template/admindashboard/pages/store/view_store',compact('store')); 
    }
    public function submit_store(Request $request)
    {
        $store=new Store();
        $store->store_name=$request->store_name;
        $store->opening_weekdays=$request->opening_weekdays;
        $store->opening_time_1=$request->opening_time_1;
        $store->closing_time_1=$request->closing_time_1;

        $store->opening_weekends=$request->opening_weekends;
        $store->weekend_status=$request->weekend_status;
        $store->opening_time_2=$request->opening_time_2;
        $store->closing_time_2=$request->closing_time_2;
        $store->store_address=$request->store_address;
        $store->map_url=$request->map_url;
        $store->email=$request->email;
        $store->phone_no=$request->phone_no;
        $store->postal_code=$request->postal_code;
        $store->save();
    return redirect()->back()->with('message','Store Added Successful!');
    }
    public function edit_store(Request $request,$id)
    {
        $store=Store::find($id);
       return view('template/admindashboard/pages/store/edit_store',compact('store')); 
    }
    public function update_store(Request $request,$id)
    {
        $store=Store::find($id);
        if($store)
        {
            $store->store_name=$request->store_name;
            $store->opening_weekdays=$request->opening_weekdays;
            $store->opening_time_1=$request->opening_time_1;
            $store->closing_time_1=$request->closing_time_1;
    
            $store->opening_weekends=$request->opening_weekends;
            $store->weekend_status=$request->weekend_status;
            $store->opening_time_2=$request->opening_time_2;
            $store->closing_time_2=$request->closing_time_2;
            $store->store_address=$request->store_address;
            $store->map_url=$request->map_url;
        $store->email=$request->email;
        $store->phone_no=$request->phone_no;
        $store->postal_code=$request->postal_code;
            $store->update();
        return redirect('super_admin/view/store')->with('message','Store Updated Successful!');
        }
        else
        {
            return redirect('super_admin/view/store')->with('message','Store Not Updated Successful!');
        }
        
    }
    public function delete_store(Request $request,$id)
    {
        $store=Store::find($id);
        $store->delete();

        return redirect()->back()->with('message','Store Deleted Successful!');
    }

    public function view_bookings()
    {
        $bookings=DB::table('bookings')->orderBy('id','desc')->get();
        return view('template/admindashboard/pages/booking/view_bookings',compact('bookings'));   
    }


    public function view_bookings_api()
    {
        $bookings=DB::table('bookings')->orderBy('id','desc')->get();
        return response()->json($bookings);
    }

    public function view_bookings_details($id)
    {
        $bookings=DB::table('bookings')->where('invoice_no',$id)->first();
        //print_r($bookings);die();
        return view('template/admindashboard/pages/booking/view_booking_details',compact('bookings'));   
     
    }
    public function deleted_bookings(Request $request,$id)
    {
        $bookings=DB::table('bookings')->where('id',$id)->delete();

        return redirect()->back()->with('message','Booking Deleted Successful!');
    }
    public function user_role()
    {
        $users = DB::table('role_managers')->get();
        return view('template/admindashboard/pages/role/user_manage_role',compact('users'));   
    }
    public function settings()
    {
        return view('template/admindashboard/pages/setting/settings');   
    }

 
        
        
        
            public function add_user_permission(Request $request){
                
    
                
                $permission = [
        
                    'device' => 0,
        
                    'mobile' => 0,
        
                    'category_mobile' => 0,
        
                    
                    'stores' => 0,
        
                    'bookings' => 0,
        
                    'user_manage_role' => 0,
        
                   
        
                    'settings' => 0
                    
                    
                   
        
                ];
        
                if(isset($request->user_permission) && !empty($request->user_permission)){
        
                    
        
                    foreach ($_POST['user_permission'] as $key => $value) {
        
                        
        
                        if($value=="on"){
        
                            $permission[$key] = 1;
        
                        }
        
                    }
        
                }
        
                $per = json_encode($permission);
                
                $admin_id=auth()->guard('web')->user()->id;
                $add_user = DB::table('role_managers')->insert([
        
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'role_type' => $request->role_type,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'user_permission' =>$per,
                    'admin_id' => $admin_id,
        
                ]);
        
               
        
                    return redirect()->back()->with('message','Added User Role SuccessFull');
        
               
        
            }
        
            public function edit_user_permission(Request $request){
        
                $permission = [
        
                    'device' => 0,
        
                    'mobile' => 0,
        
                    'category_mobile' => 0,
        
                    
                    'stores' => 0,
        
                    'bookings' => 0,
        
                    'user_manage_role' => 0,
        
                   
        
                    'settings' => 0
                    
                    
                   
        
                ];
        
                if(isset($request->user_permission) && !empty($request->user_permission)){
        
                    
        
                    foreach ($_POST['user_permission'] as $key => $value) {
        
                        
        
                        if($value=="on"){
        
                            $permission[$key] = 1;
        
                        }
        
                    }
        
                }
        
                $per = json_encode($permission);
                
           
           
                $admin_id=auth()->guard('web')->user()->id;

                $id=$request->user_id;
                $add_user = DB::table('role_managers')->where('id',$id)->update([
        
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'role_type' => $request->role_type,
                    'email' => $request->email,
                    
                    'user_permission' =>$per,
                    'admin_id' => $admin_id,
        
                ]);
        
               
        
                    return redirect()->back()->with('message','Updated User Role SuccessFull');
        
        
            }
            
             public function manage_user_role_delete(Request $request,$id)
             {
        
                $add_user = DB::table('role_managers')->where('id',$id)->delete();       
                return redirect()->back()->with('message','Deleted User Role SuccessFull');   
                
            }
            public function activate_user(Request $request,$id){

                
                  $find_user=DB::table('role_managers')->where('id',$id)->update(['is_active'=>'0']);
                  return redirect()->back()->with('message','InActivated User Role SuccessFull'); 
              }
          
              public function inactivate_user(Request $request,$id){
          
               
                  $find_user=DB::table('role_managers')->where('id',$id)->update(['is_active'=>'1']);
                  return redirect()->back()->with('message','Activated User Role SuccessFull'); 
              }

              public function change_password(Request $request)
              {
                  //print_r($request->email);
                  $this->validate($request,
                      [
                          'current_password'=>'required',
                          'new_password'=>'required',
                          'cnew_password'=>'required',
          
                      ]);
          
          
                  if($request->input('new_password')==$request->input('cnew_password'))
                  {
                      if (Hash::check($request->input('current_password'), Auth::user()->password) == false)
                      {
                          return redirect()->back()->with('message','invalid current password');
                      }
          
                      $user = Auth::user();
                      $user->password = Hash::make($request->input('new_password'));
                      $user->save();
                      return redirect()->back()->with('message','password updated successfully');
          
                  }
                  else
                  {
                      return redirect()->back()->with('message','confirm password password does not match!!');
                  }
          
          
              }
              
}
?>