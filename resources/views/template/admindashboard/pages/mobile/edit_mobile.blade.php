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
<form action="{{URL::to('super_admin/update/mobile',[$mobile->id])}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
@csrf    
<div class="row">

<div class="col-md-4">
        <div class="mb-3">
    <label for="example-select" class="form-label">Select Your Devices</label>
    <select class="form-select" id="example-select" name="device_id" required>
    <option value="">Select Your Devices</option>
        @foreach($devices as $devices_data)
        <option <?php if($mobile->device_id == $devices_data->id){ echo 'selected';} ?> value="{{$devices_data->id}}">{{$devices_data->device}}</option>
       @endforeach
    </select>
</div>
</div>
        <div class="col-md-4">
        <div class="mb-3">
    <label for="example-select" class="form-label">Select Your Mobile</label>
    <select class="form-select" id="example-select" name="name" required>
    <option value="">Select Your Mobile</option>
        <option <?php if($mobile->name == 'Apple'){ echo 'selected';} ?> value="Apple">Apple</option>
        <option <?php if($mobile->name == 'Google'){ echo 'selected';} ?> value="Google">Google</option>
        <option <?php if($mobile->name == 'Samsung'){ echo 'selected';} ?> value="Samsung">Samsung</option>
        <option <?php if($mobile->name == 'Huawei'){ echo 'selected';} ?> value="Huawei">Huawei</option>
        <option <?php if($mobile->name == 'OnePlus'){ echo 'selected';} ?> value="OnePlus">OnePlus</option>
        <option <?php if($mobile->name == 'Oppo'){ echo 'selected';} ?> value="Oppo">Oppo</option>
        <option <?php if($mobile->name == 'HTC'){ echo 'selected';} ?> value="HTC">HTC</option>
        <option <?php if($mobile->name == 'Sony'){ echo 'selected';} ?> value="Sony">Sony</option>
       
    </select>
</div>
    </div>

    <!-- <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Shop Name</label>
    <input type="text" name="shop_name" required class="form-control">
    </div>
    </div> -->

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Image</label>
    <input type="file" value="{{$mobile->mobile_image ?? ''}}" name="mobile_image" required class="form-control">
    </div>
    </div>
   
    

    <div class="col-md-12">
    <div class="mb-3">
    <label for="example-select" class="form-label">Description</label>
    <textarea class="form-control" name="mobile_description" id="example-textarea" rows="5">{{$mobile->mobile_description ?? ''}}</textarea>
    </div>
    </div>

   
</div>
    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
</form>
</div>
</div>


      
<!-- ============================================================== -->
            <!-- Start Page Content end -->
            <!-- ============================================================== -->




@stop

