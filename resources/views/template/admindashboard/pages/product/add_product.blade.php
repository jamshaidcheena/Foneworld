@extends('template/admindashboard/layout/default')
 @section('content')

     



            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

<div class="container card mt-3">
    <div class="card-header">
        <h4>Add Product</h4>
    </div>
    <div class="card-body">
<form class="needs-validation" novalidate>
    <div class="row">
        <div class="col-md-6">
        <div class="mb-3">
    <label for="example-select" class="form-label">Select Devices(Repair)</label>
    <select class="form-select" id="example-select">
    <option value="">Select Devices(Repair)</option>
        <option value="Phones">Phones</option>
        <option value="Tablets">Tablets</option>
        <option value="Laptops">Laptops</option>
       
    </select>
</div>
    </div>
    <div class="col-md-6">
    <div class="mb-3">
    <label for="example-select" class="form-label">Select Your Mobile</label>
    <select class="form-select" id="example-select">
    <option value="">Select Your Mobile</option>
        <option value="Apple">Apple</option>
        <option value="Samsung">Samsung</option>
        <option value="Google">Google</option>
        <option value="Vivo">Vivo</option>
        <option value="Oppo">Oppo</option>
       
    </select>
    </div>
    </div>
</div>
    <button class="btn btn-primary" type="submit">Submit form</button>
</form>
</div>
</div>


      
<!-- ============================================================== -->
            <!-- Start Page Content end -->
            <!-- ============================================================== -->




@stop

