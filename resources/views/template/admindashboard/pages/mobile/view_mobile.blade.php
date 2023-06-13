
@extends('template/admindashboard/layout/default')
 @section('content')

<div class="container mt-5">
@if(session()->has('message'))
<div style="width: 400px;" class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{session('message')}} </strong> 
</div>
@endif
<h4>View Category Mobile List</h4>
<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100 ">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <!-- <th>Description</th> -->
            <th>Edit</th>
            <th>Delete</th>
            
        </tr>
    </thead>


    <tbody>
        @foreach($device as $device_data)
        <tr>
            <td>{{$device_data->id}}</td>
            <td>{{$device_data->name}}</td>
            <!-- <td>{{$device_data->mobile_description}}</td> -->
            <td><a  href="{{URL::to('super_admin/edit/mobile')}}/{{$device_data->id}}" class="btn btn-info">Edit</a></td>
        <td>
            <a href="{{URL::to('super_admin/delete/mobile')}}/{{$device_data->id}}" class="btn btn-info">Delete</a>
        </td>
            
        </tr>
        @endforeach
        <tbody>
</table>
</div>
@stop