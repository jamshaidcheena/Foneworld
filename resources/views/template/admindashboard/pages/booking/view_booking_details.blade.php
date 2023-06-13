
@extends('template/admindashboard/layout/default')
 @section('content')
<?php

$booking_details=json_decode($bookings->booking_details);
?>
 <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title">Booking Details</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <!-- Product image -->
                                                <a href="javascript: void(0);" class="text-center d-block mb-4">
                                                    <img src="assets/images/products/product-5.jpg" class="img-fluid" style="max-width: 280px;" alt="Product-img">
                                                </a>

                                               
                                            </div> <!-- end col -->
                                            <div class="col-lg-7">
                                                <form class="ps-lg-4">
                                                    <!-- Product title -->
                                                    <h3 class="mt-0">{{$booking_details->title ?? ''}} <a href="javascript: void(0);" class="text-muted"><i class="mdi mdi-square-edit-outline ms-2"></i></a> </h3>
                                                    <p class="mb-1">Screen Type: {{$booking_details->screen_type ?? ''}}</p>
                                                    <p class="mb-1">Warranty Period: {{$booking_details->warranty_period ?? ''}}</p>
                                                    <p class="mb-1">Repair Time: {{$booking_details->repair_time ?? ''}}</p>
                                                    
                                                    
                                                   

                                                    <!-- Product description -->
                                                    <div class="mt-4">
                                                        <h6 class="font-14">Price:</h6>
                                                        <h3>{{$booking_details->currency ?? ''}} {{$booking_details->price ?? ''}}</h3>
                                                    </div>

                                                    <!-- Quantity -->
                                                
                                        
                                                    <!-- Product description -->
                                                    <div class="mt-4">
                                                        <h6 class="font-14">Description:</h6>
                                                        <p>{{$booking_details->imp_message ?? ''}} </p>
                                                    </div>

                                                    <!-- Product information -->
                                                    <div class="mt-4">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h6 class="font-14">Mobile Network:</h6>
                                                                <p class="text-sm lh-150">{{$bookings->mobile_network ?? ''}}</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <h6 class="font-14">Device Passcode:</h6>
                                                                <p class="text-sm lh-150">{{$bookings->c_device_passcode ?? ''}}</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <h6 class="font-14">Post Code:</h6>
                                                                <p class="text-sm lh-150">{{$bookings->c_post_code ?? '0'}}</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div> <!-- end col -->
                                        </div> <!-- end row-->

                                        <div class="table-responsive mt-4">
                                            <table class="table table-bordered table-centered mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Invoice No</th>
                                                        <th>User Name</th>
                                                        <th>Email</th>
                                                        <th>Phone No</th>
                                                        <th>Booking Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$bookings->invoice_no ?? ''}}</td>
                                                        <td>{{$bookings->c_first_name ?? ''}} {{$bookings->c_last_name ?? ''}}</td>
                                                        <td>
                                                        {{$bookings->c_email ?? ''}}
                                                        </td>
                                                        <td> {{$bookings->c_phone_number ?? ''}}</td>
                                                        <td> {{$bookings->created_at ?? ''}}</td>
                                                    </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                        
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div>
@stop