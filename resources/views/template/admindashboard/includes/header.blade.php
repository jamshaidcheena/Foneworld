<?php
if(auth()->guard('role_managers')->user())
{
    $user_permission=auth()->guard('role_managers')->user()->user_permission;
    $user_permission=json_decode($user_permission);
}
else
{
    $user_permission='';
}

//print_r($user_permission);die();

?>

<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2022 08:24:45 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Admin Dashboard | FoneWorld</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/admindashboard/assets/images/favicon.ico')}}">

        <!-- third party css -->
        <link href="{{ asset('public/admindashboard/assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{ asset('public/admindashboard/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/admindashboard/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>

        <link href="{{ asset('public/admindashboard/assets/css/vendor/dataTables.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ asset('public/admindashboard/assets/css/vendor/responsive.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/admindashboard/assets/css/vendor/buttons.bootstrap5.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu" style="background-color:#032549;">
    
                <!-- LOGO -->
                <a href="{{URL::to('super_admin')}}" class="logo text-center logo-light" style="background-color:#032549 !important;">
                    <span class="logo-lg">
              <img src="{{ asset('public/frontend/images/logo.png')}}" alt="" style="width: 100px;height: 33px;">
                    </span>
                    <span class="logo-sm">
                    <img src="{{ asset('public/frontend/images/logo.png')}}" alt="" style="width: 100px;height: 33px;">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="{{URL::to('super_admin')}}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                    <img src="{{ asset('public/frontend/images/logo.png')}}" alt="" style="width: 100px;height: 33px;">
                    </span>
                    <span class="logo-sm">
                    <img src="{{ asset('public/frontend/images/logo.png')}}" alt="" style="width: 100px;height: 33px;">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="{{URL::to('super_admin')}}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">4</span>
                                <span> Dashboards </span>
                            </a>
                            
                        </li>

                        <li class="side-nav-title side-nav-item">Apps</li>

                        

                       

                        <?php
                        if($user_permission)
                        {
                        if($user_permission->device == 1)
                        {
                        ?>  

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Devices </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{URL::to('super_admin/add/devices')}}">Add Devices</a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('super_admin/view/devices')}}">view Devices</a>
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                </ul>
                            </div>
                        </li>

                        <?php
                        }
                        }
                        else
                        {
                        ?>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Devices </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{URL::to('super_admin/add/devices')}}">Add Devices</a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('super_admin/view/devices')}}">view Devices</a>
                                    </li>
                                    
                                    
                                    
                                    
                                    
                                </ul>
                            </div>
                        </li>

                        <?php
                        }
                        ?>
                        <?php
                        if($user_permission)
                        {
                        if($user_permission->mobile == 1)
                        {
                        ?>  
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce1" aria-expanded="false" aria-controls="sidebarEcommerce1" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Mobile </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce1">
                                <ul class="side-nav-second-level">
                                   
                                    <li>
                                        <a href="{{URL::to('super_admin/add/mobile')}}">Add Mobile</a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('super_admin/view/mobile')}}">View Mobile</a>
                                    </li>
                                    
                                    
                                    
                                    
                                </ul>
                            </div>
                        </li>

                        <?php
                        }
                        }
                        else
                        {
                        ?>
 <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce1" aria-expanded="false" aria-controls="sidebarEcommerce1" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Mobile </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce1">
                                <ul class="side-nav-second-level">
                                   
                                    <li>
                                        <a href="{{URL::to('super_admin/add/mobile')}}">Add Mobile</a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('super_admin/view/mobile')}}">View Mobile</a>
                                    </li>
                                    
                                    
                                    
                                    
                                </ul>
                            </div>
                        </li>
                        <?php
                        }
                        ?>
                        <?php
                        if($user_permission)
                        {
                        if($user_permission->category_mobile == 1)
                        {
                        ?>  
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce2" aria-expanded="false" aria-controls="sidebarEcommerce2" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span>Category Mobile </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce2">
                                <ul class="side-nav-second-level">
                                   
                                    
                                    <li>
                                        <a href="{{URL::to('super_admin/add/sub/mobile')}}">Add Category Mobile</a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('super_admin/view/sub/mobile')}}">View Category Mobile</a>
                                    </li>
                                    
                                    
                                    
                                    
                                </ul>
                            </div>
                        </li>
                        <?php
                        }
                        }
                        else
                        {
                        ?>
                         <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce2" aria-expanded="false" aria-controls="sidebarEcommerce2" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span>Category Mobile </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce2">
                                <ul class="side-nav-second-level">
                                   
                                    
                                    <li>
                                        <a href="{{URL::to('super_admin/add/sub/mobile')}}">Add Category Mobile</a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('super_admin/view/sub/mobile')}}">View Category Mobile</a>
                                    </li>
                                    
                                    
                                    
                                    
                                </ul>
                            </div>
                        </li>
                        <?php
                        }
                        ?>
                         <?php
                        if($user_permission)
                        {
                        if($user_permission->stores == 1)
                        {
                        ?>  
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce111" aria-expanded="false" aria-controls="sidebarEcommerce111" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Stores </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce111">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{URL::to('super_admin/add/store')}}">Add Stores</a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('super_admin/view/store')}}">View Stores</a>
                                    </li>
                                    
                                    
                                    
                                </ul>
                            </div>
                        </li>
                        <?php
                        }
                        }
                        else
                        {
                        ?>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommerce111" aria-expanded="false" aria-controls="sidebarEcommerce111" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Stores </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommerce111">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{URL::to('super_admin/add/store')}}">Add Stores</a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('super_admin/view/store')}}">View Stores</a>
                                    </li>
                                    
                                    
                                    
                                </ul>
                            </div>
                        </li>

<?php
                        }
                        ?>
                        <?php
                        if($user_permission)
                        {
                        if($user_permission->bookings == 1)
                        {
                        ?>  
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommercebookings" aria-expanded="false" aria-controls="sidebarEcommercebookings" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Bookings </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommercebookings">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{URL::to('super_admin/view/bookings')}}">View Bookings</a>
                                    </li>
                                    
                                    
                                    
                                    
                                </ul>
                            </div>
                        </li>
                        <?php
                        }
                        }
                        else
                        {
                        ?>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarEcommercebookings" aria-expanded="false" aria-controls="sidebarEcommercebookings" class="side-nav-link">
                                <i class="uil-store"></i>
                                <span> Bookings </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarEcommercebookings">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{URL::to('super_admin/view/bookings')}}">View Bookings</a>
                                    </li>
                                    
                                    
                                    
                                    
                                </ul>
                            </div>
                        </li>
                        <?php
                        }
                        ?>
                         <?php
                        if($user_permission)
                        {
                        if($user_permission->user_manage_role == 1)
                        {
                        ?>  
                        <li class="side-nav-item">
                        <a href="{{URL::to('super_admin/user/manage/role')}}" class="side-nav-link">
                            <i class="uil-copy-alt"></i>
                            <span> User Manage Role </span>
                        </a>
                    </li>
                    <?php
                        }
                        }
                        else
                        {
                        ?>
                        <li class="side-nav-item">
                        <a href="{{URL::to('super_admin/user/manage/role')}}" class="side-nav-link">
                            <i class="uil-copy-alt"></i>
                            <span> User Manage Role </span>
                        </a>
                    </li>
                         <?php
                        }
                        ?>
                         <?php
                        if($user_permission)
                        {
                        if($user_permission->settings == 1)
                        {
                        ?>  
                    <li class="side-nav-item">
                        <a href="{{URL::to('super_admin/user/settings')}}" class="side-nav-link">
                            <i class="uil-copy-alt"></i>
                            <span> Settings </span>
                        </a>
                    </li>
                    <?php
                        }
                        }
                        else
                        {
                        ?>
                         <li class="side-nav-item">
                        <a href="{{URL::to('super_admin/user/settings')}}" class="side-nav-link">
                            <i class="uil-copy-alt"></i>
                            <span> Settings </span>
                        </a>
                    </li>
                         <?php
                        }
                        ?>
                    <li class="side-nav-item">
                        <a href="{{URL::to('admin_logout')}}" class="side-nav-link">
                            <i class="uil-copy-alt"></i>
                            <span> Logout </span>
                        </a>
                    </li>






                    </ul>

                   
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
                        <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list d-lg-none">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-search noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                    <form class="p-3">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    </form>
                                </div>
                            </li>
                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('public/admindashboard/assets/images/flags/us.jpg')}}" alt="user-image" class="me-0 me-sm-1" height="12"> 
                                    <span class="align-middle d-none d-sm-inline-block">English</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ asset('public/admindashboard/assets/images/flags/germany.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ asset('public/admindashboard/assets/images/flags/italy.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                    </a>
                
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ asset('public/admindashboard/assets/images/flags/spain.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <img src="{{ asset('public/admindashboard/assets/images/flags/russia.jpg')}}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                    </a>

                                </div>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-bell noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                
                            </li>

                            <li class="dropdown notification-list d-none d-sm-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-view-apps noti-icon"></i>
                                </a>
                                
                            </li>

                            <li class="notification-list">
                                <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                    <i class="dripicons-gear noti-icon"></i>
                                </a>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="{{ asset('public/admindashboard/assets/images/users/avatar-1.jpg')}}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <?php
                                        if(auth()->guard('web')->user())
                                        {
                                            $name=auth()->guard('web')->user()->name;
                                            $email=auth()->guard('web')->user()->email;  
                                        }
                                        if(auth()->guard('role_managers')->user())
                                        {
                                            $first_name=auth()->guard('role_managers')->user()->first_name;
                                            $last_name=auth()->guard('role_managers')->user()->last_name;
                                            $name=$first_name . ' '. $last_name;
                                            $email=auth()->guard('role_managers')->user()->email;
                                        }
                                        ?>
                                        <span class="account-user-name">{{$name}}</span>
                                        <span class="account-position">{{$email}}</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="{{URL::to('super_admin/profile')}}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>My Account</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{URL::to('super_admin/user/settings')}}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>Settings</span>
                                    </a>

                                  
                                  
                                    <!-- item-->
                                    <a href="{{URL::to('admin_logout')}}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <button class="input-group-text btn-primary" type="submit">Search</button>
                                </div>
                            </form>

                            
                        </div>
                    </div>
                    <!-- end Topbar -->