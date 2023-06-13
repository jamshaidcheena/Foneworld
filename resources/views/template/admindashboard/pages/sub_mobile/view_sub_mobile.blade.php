
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
            
            <th>Edit</th>
            <th>Delete</th>
            
        </tr>
    </thead>


    <tbody>
        @foreach($sub_mobile as $sub_mobile)
        <tr>
            <td>{{$sub_mobile->id}}</td>
            <td>{{$sub_mobile->name}}</td>
            
            <td><a  href="{{URL::to('super_admin/edit/sub/mobile')}}/{{$sub_mobile->id}}" class="btn btn-info">Edit</a></td>
        <td>
            <a href="{{URL::to('super_admin/delete/sub/mobile')}}/{{$sub_mobile->id}}" class="btn btn-info">Delete</a>
        </td>
            
        </tr>
        @endforeach
        <tbody>
</table>
</div>
@stop