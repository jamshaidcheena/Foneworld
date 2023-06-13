@extends('template/admindashboard/layout/default')
 @section('content')

<style>
 .bootstrap-timepicker-widget
 {
    top: 41.391px !important;
 }
</style>


            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

<div class="container card mt-3">
    <div class="card-header">
        <h4>Edit Store</h4>
    </div>
    <div class="card-body">
<form action="{{URL::to('super_admin/update/store',[$store->id])}}" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
@csrf    
<div class="row">

<div class="col-md-3">
        <div class="mb-3">
    <label for="example-select" class="form-label">Store Name</label>
    <input type="text" name="store_name" value="{{$store->store_name ?? ''}}" required class="form-control">
</div>
</div>
       
<div class="col-md-3">
        <div class="mb-3">
    <label for="example-select" class="form-label">Select Opening days</label>
    <select class="form-select" required id="example-select" name="opening_weekdays">

        <option value="mon_to_fri">Mon To Fri</option>
        
       
    </select>
</div>
    </div>
    
    <div class="col-md-3">
    <div class="mb-3">
    <label class="form-label">Opening Times</label>
    <div class="input-group" id="timepicker-input-group1">
        <input id="timepicker" value="{{$store->opening_time_1 ?? ''}}" type="text" required name="opening_time_1" class="form-control" data-provide="timepicker">
        <span class="input-group-text"><i class="dripicons-clock"></i></span>
    </div>
</div>
    </div>

    <div class="col-md-3">

    <div class="mb-0">
    <label class="form-label">Closing Times</label>
    <div class="input-group" id="timepicker-input-group2">
        <input id="timepicker2" value="{{$store->closing_time_1 ?? ''}}" required type="text" name="closing_time_1" class="form-control" data-provide='timepicker' data-show-meridian="false" >
        <span class="input-group-text"><i class="dripicons-clock"></i></span>
    </div>
</div>

    
    </div>

    <div class="col-md-3">
        <div class="mb-3">
    <label for="example-select" class="form-label">Select Opening days</label>
    <select class="form-select"  id="example-select" name="opening_weekends" required>

        <option value="sat_to_sun">Sat To Sun</option>
        
       
    </select>
</div>
    </div>
       
<div class="col-md-3">
        <div class="mb-3">
    <label for="example-select" class="form-label">Select</label>
    <select class="form-select" onchange="WeekendFun()" id="weekend_slc" name="weekend_status" required>
    <option value="">Select</option>
        <option <?php if($store->weekend_status == 'open'){ echo 'selected';} ?> value="open">Open</option>
        <option <?php if($store->weekend_status == 'open'){ echo 'close';} ?> value="close">close</option>
        
       
    </select>
</div>
    </div>
    
    <div class="col-md-3" id="opening_time_weekend">
    <div class="mb-3">
    <label class="form-label">Opening Times</label>
    <div class="input-group" id="timepicker-input-group1">
        <input id="timepicker5" value="{{$store->opening_time_2 ?? ''}}" required type="text"  name="opening_time_2" class="form-control" data-provide="timepicker">
        <span class="input-group-text"><i class="dripicons-clock"></i></span>
    </div>
</div>
    </div>

    <div class="col-md-3" id="closing_time_weekend">

    <div class="mb-0">
    <label class="form-label">Closing Times</label>
    <div class="input-group" id="timepicker-input-group2">
        <input id="timepicker6" value="{{$store->closing_time_2 ?? ''}}" required type="text" name="closing_time_2" class="form-control" data-provide='timepicker' data-show-meridian="false" >
        <span class="input-group-text"><i class="dripicons-clock"></i></span>
    </div>
</div>

    
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Email</label>
    <input  required type="email"  value="{{$store->email ?? ''}}" name="email" class="form-control"  >
    </div>
    </div>

    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Phone No</label>
    <input  required type="number" value="{{$store->phone_no ?? ''}}" name="phone_no" class="form-control"  >
    </div>
    </div>
    <div class="col-md-4">
    <div class="mb-3">
    <label for="example-select" class="form-label">Postal Code</label>
    <input  required type="text" value="{{$store->postal_code ?? ''}}" name="postal_code" class="form-control"  >
    </div>
    </div>

    <div class="col-md-12">
    <div class="mb-3">
    <label for="example-select" class="form-label">Store Address</label>
    <textarea class="form-control" required name="store_address" id="example-textarea" rows="2">{{$store->store_address ?? ''}}</textarea>
    </div>
    </div>
    <div class="col-md-12">
    <div class="mb-3">
    <label for="example-select" class="form-label">Store Map URL</label>
    <input  required type="text" value="{{$store->map_url ?? ''}}" name="map_url" class="form-control"  >
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

            <script>

    
function WeekendFun(){
    var value = $('#weekend_slc').val();
    if(value == 'close')
    {
        $('#opening_time_weekend').fadeOut();
  $('#closing_time_weekend').fadeOut();
    }
    else
    {
        $('#opening_time_weekend').fadeIn();
        $('#closing_time_weekend').fadeIn();
    }
    
   
  
   
}
</script>


@stop

