
@extends('template/admindashboard/layout/default')
 @section('content')



    
    
    

    
    
    
    
    
    
    

<div id="bs-example-modal-lg" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
<div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body">
                <!--<div class="mt-2 mb-4">-->
                <!--    <a href="" class="text-success">-->
                <!--        <span>Create User</span>-->
                <!--    </a>-->
                <!--</div>-->

              

                       <form class="ps-3 pe-3" action="{{URL::to('super_admin/add_user_permission')}}"  method="post">
                 @csrf
                  


                                      <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="emailaddress" class="form-label">First Name</label>
                        <input class="form-control"  type="text" id="employee_id" name="first_name" value=""> 
                            </div>
                            <div class="col-md-4">
                                <label for="emailaddress" class="form-label">Last Name</label>
                        <input class="form-control"  type="text" id="employee_id" name="last_name" value=""> 
                            </div>
                            <div class="col-md-4">
                                <label for="emailaddress" class="form-label">Role Type</label>
                        <input class="form-control"  type="text" id="employee_name" name="role_type" value=""> 
                            </div>
                            
                        </div>
                       
                    </div>
                     <div class="mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="emailaddress" class="form-label">Email</label>
                        <input class="form-control"  type="email" id="employee_date" name="email" value="" autocomplete="off"> 
                            </div>
                            <div class="col-md-6">
                                <label for="emailaddress" class="form-label">Password</label>
                        <input class="form-control"  type="password" id="time_in" name="password" value="" autocomplete="off"> 
                            </div>
                             
                            
                        </div>
                       
                    </div>
                    
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-12">
                               <div class="col-span-12 sm:col-span-12 mt-2">
                                <label><b>Permissions</b></label>
                            </div>
                            <div class="col-span-12 sm:col-span-3">
                                 <input type="checkbox" name="user_permission[device]" class="input border mr-2" id="vertical-checkbox-chris-evans">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-chris-evans">Devices</label>
                            </div>
                            <div class="col-span-12 sm:col-span-3">
                                <input type="checkbox" name="user_permission[mobile]" class="input border mr-2" id="vertical-checkbox-liam-neeson">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-liam-neeson">Mobile</label>
                            </div>
                            <div class="col-span-12 sm:col-span-3">
                                <input type="checkbox" name="user_permission[category_mobile]" class="input border mr-2" id="vertical-checkbox-daniel-craig">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Category Mobile</label>
                            </div>
                            
                            
                            <div class="col-span-12 sm:col-span-3">
                                 <input type="checkbox" name="user_permission[stores]" class="input border mr-2" id="vertical-checkbox-daniel-craig">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Stores</label>
                            </div>
                            <div class="col-span-12 sm:col-span-3">
                                <input type="checkbox" name="user_permission[bookings]" class="input border mr-2" id="vertical-checkbox-daniel-craig">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Bookings</label>
                            </div>
                            <div class="col-span-12 sm:col-span-3">
                                <input type="checkbox" name="user_permission[user_manage_role]" class="input border mr-2" id="vertical-checkbox-daniel-craig">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">User Manage Role</label>
                            </div>
                            
                            <div class="col-span-12 sm:col-span-3">
                                <input type="checkbox" name="user_permission[settings]" class="input border mr-2" id="vertical-checkbox-daniel-craig">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Settings</label>
                            </div>
                            
                            
                            
                            </div>
                            
                             
                            
                        </div>
                       
                    </div>
                   
                    
                    
                     
                    
                    
                    

                   

            
                    

                    <div class="mb-3">
                        <button name="submit" class="btn btn-primary" type="submit">submit</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->







<div id="bs2-example-modal-lg" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
<div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel"></h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>
            <!--<div class="modal-body">-->
            <!--    <div class="mt-2 mb-4">-->
            <!--        <a href="" class="text-success">-->
            <!--            <span>Edit</span>-->
            <!--        </a>-->
            <!--    </div>-->

             
                       <form class="ps-3 pe-3" action="{{URL::to('super_admin/edit_user_permission')}}" id="edit_user_role_form" method="post">
                 @csrf
                   <input type="hidden" name="user_id" id="edit_form_id">


                                        <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="emailaddress" class="form-label">First Name</label>
                        <input class="form-control"  type="text" id="edit_form_first_name" name="first_name" value=""> 
                            </div>
                            <div class="col-md-4">
                                <label for="emailaddress" class="form-label">Last Name</label>
                        <input class="form-control"  type="text" id="edit_form_last_name" name="last_name" value=""> 
                            </div>
                            <div class="col-md-4">
                                <label for="emailaddress" class="form-label">Role Type</label>
                        <input class="form-control"  type="text" id="edit_form_role_type" name="role_type" value=""> 
                            </div>
                            
                        </div>
                       
                    </div>
                     <div class="mb-3">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="emailaddress" class="form-label">Email</label>
                        <input class="form-control"  type="email" id="edit_form_email" name="email" value=""> 
                            </div>
                        <!--    <div class="col-md-6">-->
                        <!--        <label for="emailaddress" class="form-label">password</label>-->
                        <!--<input class="form-control"  type="password" id="time_in" name="password" value=""> -->
                        <!--    </div>-->
                             
                            
                        </div>
                       
                    </div>
                    
                   <div class="mb-3">
                        <div class="row">
                            <div class="col-md-12">
                               <div class="col-span-12 sm:col-span-12 mt-2">
                                <label><b>Permissions</b></label>
                            </div>
                            <div class="col-span-12 sm:col-span-3">
                                 <input type="checkbox" name="user_permission[device]" class="input border mr-2 device" id="vertical-checkbox-chris-evans">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-chris-evans">Devices</label>
                            </div>
                            <div class="col-span-12 sm:col-span-3">
                                <input type="checkbox" name="user_permission[mobile]" class="input border mr-2 mobile" id="vertical-checkbox-liam-neeson">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-liam-neeson">Mobile</label>
                            </div>
                            <div class="col-span-12 sm:col-span-3">
                                <input type="checkbox" name="user_permission[category_mobile]" class="input border mr-2 category_mobile" id="vertical-checkbox-daniel-craig">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Category Mobile</label>
                            </div>
                            
                            
                            <div class="col-span-12 sm:col-span-3">
                                 <input type="checkbox" name="user_permission[stores]" class="input border mr-2 stores" id="vertical-checkbox-daniel-craig">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Stores</label>
                            </div>
                            <div class="col-span-12 sm:col-span-3">
                                <input type="checkbox" name="user_permission[bookings]" class="input border mr-2 bookings" id="vertical-checkbox-daniel-craig">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Bookings</label>
                            </div>
                            <div class="col-span-12 sm:col-span-3">
                                <input type="checkbox" name="user_permission[user_manage_role]" class="input border mr-2 user_manage_role" id="vertical-checkbox-daniel-craig">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">User Manage Role</label>
                            </div>
                            
                            <div class="col-span-12 sm:col-span-3">
                                <input type="checkbox" name="user_permission[settings]" class="input border mr-2 settings" id="vertical-checkbox-daniel-craig">
                                <label class="cursor-pointer select-none" for="vertical-checkbox-daniel-craig">Settings</label>
                            </div>
                            
                            
                            
                            </div>
                            
                             
                            
                        </div>
                       
                    </div>
                   
                    
                    
                     
                    
                    
                    

                   

            
                    

                    <div class="mb-3">
                        <button name="submit" class="btn btn-primary" type="submit">submit</button>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->    
    


 











    <div class="row mt-5">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="header-title">MANAGE User Role</h4>
                                        <a style="float:right;" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Create User</a>
                                        @if(session()->has('message'))
        <div style="width:400px;" class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{session()->get('message')}} </strong>
</div>
    @endif

                                        
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="buttons-table-preview">
                                                <table id="example" class="table table-striped dt-responsive nowrap w-100">
                                                    <thead>
                                                        <tr>
                                                       
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Role Type</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Action</th>
                            
                              
                                                        </tr>
                                                    </thead>
                                                
                                                
                                                    <tbody>
                             @foreach($users as $key => $value)
                                        <tr>
                                            <td>{{$value->id ?? ''}}</td>
                                            <td>{{$value->first_name ?? ''}} {{$value->last_name ?? ''}}</td>
                                            <td>{{$value->role_type ?? ''}}</td>
                                            <td>{{$value->email ?? ''}}</td>
                                            <td class=""> 
                                                <?php
                                                if($value->is_active==0)
                                                {
                                                    ?>
                                                    
                                                    
                                                    <form action="{{URL::to('super_admin/inactivate_user',[$value->id])}}" >
                                                                    <input type="hidden" name="">
                                                                    <button class="btn btn-info">Active</button>
                                                                </form>
                                                    
                                                    <?php
                                                    
                                                }
                                                else
                                                {
                                                    ?>
                                                    
                                                    <form action="{{URL::to('super_admin/activate_user',[$value->id])}}" >
                                                                    <input type="hidden" name="">
                                                                    <button class="btn btn-info">Inactive</button>
                                                                </form>
                                                    
                                                    <?php
                                                    
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-info user_edit_role_btn" data-bs-toggle="modal" data-bs-target="#bs2-example-modal-lg"
                                                data-user_id="{{$value->id}}"
                                                data-first_name="{{$value->first_name}}"
                                                data-last_name="{{$value->last_name}}"
                                                data-user_email="{{$value->email}}"
                                                data-user_title="{{$value->role_type}}"
                                                data-user_permission="{{$value->user_permission}}"
                                                data-user_is_active="{{$value->is_active}}">
                                                   Edit
                                                </a>
                                                <a href="{{URL::to('super_admin/manage_user_role_delete')}}/{{$value->id}}" class="btn btn-info">
                                                  Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach

                                                    </tbody>
                                                </table>                                           
                                            </div> <!-- end preview-->
                                        
                                            
                                        </div> <!-- end tab-content-->
                                        
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div> <!-- end row-->
            



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

















<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example_1').DataTable({
           
           "order": [[ 0, 'desc' ], [ 1, 'desc' ]] 
        });
    } );
    
    
    
    $('.user_edit_role_btn').on('click',function(){

                $('#activate_user_btn').hide(); 
                $('#inactivate_user_btn').hide();
                $('#edit_user_role_form')[0].reset();
                $('#edit_form_id').val($(this).attr('data-user_id'));
                $('#edit_form_first_name').val($(this).attr('data-first_name'));
                 $('#edit_form_last_name').val($(this).attr('data-last_name'));
                $('#edit_form_role_type').val($(this).attr('data-user_title'));
                $('#edit_form_email').val($(this).attr('data-user_email'));
                var permissions = JSON.parse($(this).attr('data-user_permission'));
                
                
                if(permissions.device){$(".device").prop('checked', true);}
                
                if(permissions.mobile){$(".mobile").prop('checked', true);}
                
                if(permissions.stores){$(".stores").prop('checked', true);}
                
                
                if(permissions.category_mobile){$(".category_mobile").prop('checked', true);}
                
                if(permissions.user_manage_role){$(".user_manage_role").prop('checked', true);}
                
                if(permissions.bookings){$(".bookings").prop('checked', true);}
               
                if(permissions.settings){$(".settings").prop('checked', true);}
                          
                
                
                var is_active = $(this).attr('data-user_is_active');
                if(is_active == 1){$('#inactivate_user_btn').show();}else{$('#activate_user_btn').show();}
            });
</script>
@stop