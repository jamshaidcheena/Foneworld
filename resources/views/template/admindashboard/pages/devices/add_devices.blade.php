@extends('template/admindashboard/layout/default')
 @section('content')

     



            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

<div class="container card mt-3">
    <div class="card-header">
        <h4>Add Devices</h4>
    </div>
    <div class="card-body">
<form action="{{URL::to('super_admin/submit/devices')}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
@csrf    
<div class="row">
        <div class="col-md-4">
        <div class="mb-3">
    <label for="example-select" class="form-label">Select Devices(Repair)</label>
    <select class="form-select" id="example-select" name="device" required>
    <option value="">Select Devices(Repair)</option>
        <option value="Phones">Phones</option>
        <option value="Tablets">Tablets</option>
        <option value="Laptops">Laptops</option>
       
    </select>
</div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Shop Name</label>
    <input type="text" name="shop_name" required class="form-control">
    </div>
    </div>


   
    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Select Your Rating</label>
    <select class="form-select" id="example-select" name="rating" required>
    <option value="">Select Your Mobile</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
       
    </select>
    </div>
    </div>

    <div class="col-md-12">
    <div class="mb-3">
    <label for="example-select" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="example-textarea" rows="5"></textarea>
    </div>
    </div>

    <div class="col-md-6">
    <div class="mb-3">
    <label for="example-select" class="form-label">Image</label>
    <input type="file" name="device_image" required class="form-control">
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

