
@extends('template/admindashboard/layout/default')
 @section('content')





        

   <div>
    <div class="tab-content__pane" id="password">
                        <div class="">
                            <!-- BEGIN: Horizontal Bar Chart -->
                            <div class="">
                                <div class="card mt-3">
                                    <div class="card-header">
                                        <h2 class="font-medium text-base mr-auto">
                                            Change Password
                                        </h2>
                                    </div>
                                    @if(session()->has('message'))
<div style="width:400px;" class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{session('message')}} </strong>
</div>
@endif
                                    <div class="card-body">
                                     <form class="ps-3 pe-3" action="{{URL::to('super_admin/change-password')}}"  method="post">
                 @csrf
       


                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="emailaddress" class="form-label">Current Password</label>
                        <input class="form-control"  type="password" id="current_password" name="current_password" value=""> 
                            </div>
                            
                            <div class="col-md-4">
                                <label for="emailaddress" class="form-label">New Password</label>
                        <input class="form-control"  type="password" id="new_password" name="new_password" value=""> 
                            </div>
                            <div class="col-md-4">
                                <label for="emailaddress" class="form-label">Confirm New Password</label>
                        <input class="form-control"  type="password" id="cnew_password" name="cnew_password" value=""> 
                            </div>
                        </div>
                       
                    </div>
                    
                   
                    
                    
                     
                    
                    
                    

                   

            
                    

                    <div class="mb-3">
                        <button name="submit" class="btn btn-primary" type="submit">submit</button>
                    </div>

                </form>

                                   </div>
                                </div>
                            </div>
                            <!-- END: Horizontal Bar Chart -->
                        </div>

                    </div>



   
       
    </div>
    <!-- END: Content -->




 @stop