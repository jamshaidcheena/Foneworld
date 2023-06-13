
@extends('template/admindashboard/layout/default')
 @section('content')

<div class="container mt-5">
@if(session()->has('message'))
<div style="width: 400px;" class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{session('message')}} </strong> 
</div>
@endif
<h4>View Store List</h4>
<table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100 ">
    <thead>
        <tr>
            <th>id</th>
            <th>Store Name</th>
            <th>Store Opening Days</th>
            <th>Store Opening Days</th>
            <th>Store Address</th>
            <th>Edit</th>
            <th>Delete</th>
            
        </tr>
    </thead>


    <tbody>
        @foreach($store as $store_data)
        <tr>
            <td>{{$store_data->id}}</td>
            <td>{{$store_data->store_name ?? ''}}</td>
            <td>{{$store_data->opening_weekdays  ?? ''}}<br>
            {{$store_data->opening_time_1  ?? ''}}<br>
            {{$store_data->closing_time_1  ?? ''}}

        
        </td>
            <td>{{$store_data->opening_weekends  ?? ''}}<br>
            {{$store_data->opening_time_2  ?? ''}}<br>
            {{$store_data->closing_time_2  ?? ''}}
        </td>
            <td>{{$store_data->store_address  ?? ''}}</td>
            <td><a href="{{URL::to('super_admin/edit/store')}}/{{$store_data->id}}" class="btn btn-info">Edit</a>
           
        </td>
        <td>
            <a href="{{URL::to('super_admin/delete/store')}}/{{$store_data->id}}" class="btn btn-info">Delete</a>
        </td>
            
        </tr>
        @endforeach
        <tbody>
</table>
</div>
@stop