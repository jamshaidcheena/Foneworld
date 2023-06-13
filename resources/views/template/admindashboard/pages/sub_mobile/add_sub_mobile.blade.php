@extends('template/admindashboard/layout/default')
 @section('content')

     



            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

<div class="container card mt-3">
    <div class="card-header">
        <h4>Add Mobile</h4>
    </div>
    <div class="card-body">
<form action="{{URL::to('super_admin/submit/sub/mobile')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
@csrf    
<div class="row">

<div class="col-md-3">
        <div class="mb-3">
    <label for="example-select" class="form-label">Select Your Mobile</label>
    <select class="form-select" id="example-select" name="mobile_id" required>
    <option value="">Select Your Mobile</option>
        @foreach($Mobile as $Mobile_data)
        <option value="{{$Mobile_data->id}}">{{$Mobile_data->name}}</option>
       @endforeach
    </select>
</div>
</div>
        <div class="col-md-3">
        <div class="mb-3">
    <label for="example-select" class="form-label">Mobile Name</label>
    <input type="text" name="name" required class="form-control">
</div>
    </div>
 
    <div class="col-md-3">
    <div class="mb-3">
    <label for="example-select" class="form-label">Image</label>
    <input type="file" name="sub_mobile_image" required class="form-control">
    </div>
    </div>
    <div class="col-md-3">
    <div class="mb-3">
    <label for="example-select" class="form-label">Post In Pack(Price)</label>
    <div class="input-group mb-2">
                <div class="input-group-text">GBP</div>
                <input type="number" name="post_in_pack_price" id="inlineFormInputGroup" required class="form-control">
               
            </div>
    
    </div>
    </div>
    <div class="col-md-12">
    <div class="mb-3">
    <label for="example-select" class="form-label">Description</label>
    <textarea class="form-control" name="sub_mobile_description" id="example-textarea" rows="5"></textarea>
    </div>
    </div>

<div class="col-md-12">
<div class="mb-3">
<div class="form-check form-switch">
    <input type="checkbox" class="form-check-input" name="front_screen" value="front_screen" id="front_screen">
    <label class="form-check-label" for="front_screen">Front Screen (Optional)</label>
</div>
</div>
</div>



<div class="row" id="show_front_screen" style="border: 1px solid #aab8c5;padding: 35px;display:none;">
<div class="col-md-4">
        <div class="mb-3">
    <label for="example-select" class="form-label">Title</label>
    <input type="text" name="f_title"  class="form-control">
</div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Price</label>
    <input type="text" name="f_price"  class="form-control">
    </div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Select Your Currency</label>
    <select class="form-select" id="example-select" name="f_currency" >
    
        <option value="GBP">GBP</option>
       
        
       
    </select>
    </div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Screen Type</label>
    <select class="form-select" id="example-select" name="f_screen_type">
    <option value="">Select Screen Type</option>
        <option value="LCD">LCD</option>
        <option value="OLED">OLED</option>
        
        
       
    </select>
    </div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">True Tone Colour</label>
    <input type="text" name="f_true_tone_colour"  class="form-control">
    </div>
    </div>


    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Warranty Period</label>
    <select class="form-select" id="example-select" name="f_warranty_period" >
    <option value="">Select Warranty Period</option>
        <option value="Lifetime">Lifetime</option>
        <option value="noLifetime">No Lifetime</option>
        
        
       
    </select>
    </div>
    </div>
   
    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Repair Time</label>
    <input type="text" name="f_repair_time"  class="form-control">
    </div>
    </div> 


    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Image</label>
    <input type="file" name="f_image"  class="form-control">
    </div>
    </div>
    <div class="col-md-12">
    <div class="mb-3">
    <label for="example-select" class="form-label">Important Display Message</label>
    <textarea class="form-control" name="f_message" id="example-textarea" rows="5"></textarea>
    </div>
    </div>

</div>





















    
<div class="col-md-12">
<div class="mb-3">
<div class="form-check form-switch">
    <input type="checkbox" class="form-check-input" name="backcover" value="backcover" id="backcover">
    <label class="form-check-label" for="backcover">Back Cover (Optional)</label>
</div>
</div>
</div>




<div class="row" id="show_backcover" style="border: 1px solid #aab8c5;padding: 35px;display:none;">
<div class="col-md-4">
        <div class="mb-3">
    <label for="example-select" class="form-label">Title</label>
    <input type="text" name="b_title"  class="form-control">
</div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Price</label>
    <input type="text" name="b_price" class="form-control">
    </div>
    </div>
    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Saving VS Apple store</label>
    <input type="text" name="b_save_price" class="form-control">
    </div>
    </div>
    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Select Your Currency</label>
    <select class="form-select" id="example-select" name="b_currency" >
    
        <option value="GBP">GBP</option>
        
        
       
    </select>
    </div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Apple Logo</label>
    <select class="form-select" id="example-select" name="b_apple_logo" >
    <option value="">Select Apple Logo</option>
        <option value="YES">YES</option>
        <option value="NO">NO</option>
        
        
       
    </select>
    </div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Genuine Apple part</label>
    <select class="form-select" id="example-select" name="b_apple_part" >
    <option value="">Select Genuine Apple part</option>
        <option value="YES">YES</option>
        <option value="NO">NO</option>
        
        
       
    </select>
    </div>
    </div>


    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Warranty Period</label>
    <select class="form-select" id="example-select" name="b_warranty_period">
    <option value="">Select Warranty Period</option>
        <option value="Lifetime">Lifetime</option>
        <option value="noLifetime">No Lifetime</option>
        
        
       
    </select>
    </div>
    </div>
   
    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Repair Time</label>
    <input type="text" name="b_repair_time"  class="form-control">
    </div>
    </div> 


    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Image</label>
    <input type="file" name="b_image"  class="form-control">
    </div>
    </div>
    

</div>















<div class="col-md-12">
<div class="mb-3">
<div class="form-check form-switch">
    <input type="checkbox" class="form-check-input" name="baterry_charging" value="baterry_charging" id="baterry_charging">
    <label class="form-check-label" for="baterry_charging">Battery & Charging (Optional)</label>
</div>
</div>
</div>



<div class="row" id="show_baterry_charging" style="border: 1px solid #aab8c5;padding: 35px;display:none;">
<div class="col-md-4">
        <div class="mb-3">
    <label for="example-select" class="form-label">Title</label>
    <input type="text" name="bc_title"  class="form-control">
</div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Price</label>
    <input type="text" name="bc_price" class="form-control">
    </div>
    </div>
   
    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Select Your Currency</label>
    <select class="form-select" id="example-select" name="bc_currency" >
    
        <option value="GBP">GBP</option>
        
        
       
    </select>
    </div>
    </div>

  




    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Warranty Period</label>
    <select class="form-select" id="example-select" name="bc_warranty_period">
    <option value="">Select Warranty Period</option>
        <option value="Lifetime">Lifetime</option>
        <option value="noLifetime">No Lifetime</option>
        
        
       
    </select>
    </div>
    </div>
   
    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Repair Time</label>
    <input type="text" name="bc_repair_time"  class="form-control">
    </div>
    </div> 


    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Image</label>
    <input type="file" name="bc_image"  class="form-control">
    </div>
    </div>

    <div class="col-md-12">
    <div class="mb-3">
    <label for="example-select" class="form-label">Repair Description</label>
    <textarea class="form-control" name="bc_message" id="example-textarea" rows="5"></textarea>
    </div>
    </div>
    

</div>






<div class="col-md-12">
<div class="mb-3">
<div class="form-check form-switch">
    <input type="checkbox" class="form-check-input" name="camera_front_rear" value="camera_front_rear" id="camera_front_rear">
    <label class="form-check-label" for="camera_front_rear">Camera Front & Rear (Optional)</label>
</div>
</div>
</div>



<div class="row" id="show_camera_front_rear" style="border: 1px solid #aab8c5;padding: 35px;display:none;">


<div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Select Camera</label>
    <select class="form-select" id="example-select" name="camera" >
    <option value="">Select Camera</option>
        <option value="Front">Front</option>
        <option value="Back">Back</option>
        <option value="Front_Back">Front & Back</option>
        
       
    </select>
    </div>
    </div>


<div class="col-md-4">
        <div class="mb-3">
    <label for="example-select" class="form-label">Title</label>
    <input type="text" name="camera_title"  class="form-control">
</div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Price</label>
    <input type="text" name="camera_price" class="form-control">
    </div>
    </div>
   
    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Select Your Currency</label>
    <select class="form-select" id="example-select" name="camera_currency" >

        <option value="GBP">GBP</option>
       
        
       
    </select>
    </div>
    </div>

  




    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Warranty Period</label>
    <select class="form-select" id="example-select" name="camera_warranty_period">
    <option value="">Select Warranty Period</option>
        <option value="Lifetime">Lifetime</option>
        <option value="noLifetime">No Lifetime</option>
        
        
       
    </select>
    </div>
    </div>
   
    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Repair Time</label>
    <input type="text" name="camera_repair_time"  class="form-control">
    </div>
    </div> 


    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Image</label>
    <input type="file" name="camera_image"  class="form-control">
    </div>
    </div>

    <div class="col-md-12">
    <div class="mb-3">
    <label for="example-select" class="form-label">Repair Description</label>
    <textarea class="form-control" name="camera_message" id="example-textarea" rows="5"></textarea>
    </div>
    </div>
    

</div>







<div class="col-md-12">
<div class="mb-3">
<div class="form-check form-switch">
    <input type="checkbox" class="form-check-input" name="custom_dont_know" value="custom_dont_know" id="custom_dont_know">
    <label class="form-check-label" for="custom_dont_know">I Dont Know? (Optional)</label>
</div>
</div>
</div>



<div class="row" id="show_custom_dont_know" style="border: 1px solid #aab8c5;padding: 35px;display:none;">





<div class="col-md-4">
        <div class="mb-3">
    <label for="example-select" class="form-label">Title</label>
    <input type="text" name="custom_title"  class="form-control">
</div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Price</label>
    <input type="text" name="custom_price" class="form-control">
    </div>
    </div>
   
    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Select Your Currency</label>
    <select class="form-select" id="example-select" name="custom_currency" >

        <option value="GBP">GBP</option>
       
        
       
    </select>
    </div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Image</label>
    <input type="file" name="custom_image"  class="form-control">
    </div>
    </div>

    <div class="col-md-12">
    <div class="mb-3">
    <label for="example-select" class="form-label">Description</label>
    <textarea class="form-control" name="custom_message" id="example-textarea" rows="5"></textarea>
    </div>
    </div>
    

</div>
    
</div>
    <button style="float: right;margin-top: 30px;" class="btn btn-primary" type="submit" name="submit">Submit</button>
</form>
</div>
</div>


      
<!-- ============================================================== -->
            <!-- Start Page Content end -->
            <!-- ============================================================== -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#front_screen").click(function(){
    
    $("#show_front_screen").fadeToggle("slow");
    
  });
  $("#backcover").click(function(){
    
    $("#show_backcover").fadeToggle("slow");
    
  });
  $("#baterry_charging").click(function(){
    
    $("#show_baterry_charging").fadeToggle("slow");
    
  });
  $("#camera_front_rear").click(function(){
    
    $("#show_camera_front_rear").fadeToggle("slow");
    
  });
  $("#custom_dont_know").click(function(){
    
    $("#show_custom_dont_know").fadeToggle("slow");
    
  });
  
});
</script>
@stop

