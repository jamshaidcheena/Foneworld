
@extends('template/admindashboard/layout/default')
 @section('content')

<div class="container mt-5">
@if(session()->has('message'))
<div style="width: 400px;" class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{session('message')}} </strong> 
</div>
@endif
<h4>View Bookings List</h4>
<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100 ">
    <thead>
        <tr>
            <th>id</th>
            <th>Invoice No</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Phone No</th>
            <th>Booking Date</th>
            <th>View Details</th>
            <th>Delete</th>
            
        </tr>
    </thead>


    <tbody>
        @foreach($bookings as $bookings_data)
        <tr>
            <td>{{$bookings_data->id}}</td>
            <td>{{$bookings_data->invoice_no ?? ''}}</td>
            <td>{{$bookings_data->c_first_name  ?? ''}} {{$bookings_data->c_last_name  ?? ''}}</td>
            <td>{{$bookings_data->c_email  ?? ''}}</td>
            <td>{{$bookings_data->c_phone_number  ?? ''}}</td>
            <td>{{$bookings_data->created_at  ?? ''}}</td>
            <td><a href="{{URL::to('super_admin/view/booking/detail')}}/{{$bookings_data->invoice_no}}" class="btn btn-info">View Detail</a></td>
        <td>
            <a href="{{URL::to('super_admin/delete/booking')}}/{{$bookings_data->id}}" class="btn btn-info">Delete</a>
        </td>
            
        </tr>
        @endforeach
        <tbody>
</table>
</div>
@stop