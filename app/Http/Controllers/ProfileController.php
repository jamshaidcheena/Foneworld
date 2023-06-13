<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use DB;
use Hash;
use Auth;
class ProfileController extends Controller
{

    public function get_list_products()
    {
        $products=DB::table('products')->orderBy('id','desc')->get();
        return response()->json($products);
    }
    public function add_products(Request $request)
    {
        // if($request->file('image')){
        //     $file= $request->file('image');
        //     $filename= $file->getClientOriginalName();
        //     $file-> move(public_path('public/Image/product'), $filename);
        //     $img= $filename;
        //     }
        //     else
        //     {
        //         $img='';
        //     }

        $products=DB::table('products')->insert([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'description'=>$request->description
           
            
                

        ]);
        return response()->json($products);
    }
    public function edit_products(Request $request,$id)
    {
        // if($request->file('image')){
        //     $file= $request->file('image');
        //     $filename= $file->getClientOriginalName();
        //     $file-> move(public_path('public/Image/product'), $filename);
        //     $img= $filename;
        //     }
        //     else
        //     {
        //         $img='';
        //     }

        $products=DB::table('products')->where('id',$id)->first();
        return response()->json($products);
    }
    public function delete_products(Request $request,$id)
    {
        // if($request->file('image')){
        //     $file= $request->file('image');
        //     $filename= $file->getClientOriginalName();
        //     $file-> move(public_path('public/Image/product'), $filename);
        //     $img= $filename;
        //     }
        //     else
        //     {
        //         $img='';
        //     }

        $products=DB::table('products')->where('id',$id)->delete();
        return response()->json($products);
    }
              
}
?>