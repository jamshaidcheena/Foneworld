<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/hyper/saas/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2022 08:26:39 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Register | Admin Dashboard FoneWorld - Mobile Brands</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/admindashboard/assets/images/favicon.ico')}}">
        
        <!-- App css -->
        <link href="{{ asset('public/admindashboard/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/admindashboard/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>

    </head>
    
    <body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center" style="background-color:#032549;">
                                <a target="_blank" href="{{URL::to('/')}}">
                                    <span><img src="{{ asset('public/frontend/images/logo.png')}}" alt="" style="width: 120px;height: 50px;"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 fw-bold">Sign Up</h4>
                                    <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                                </div>
                                @if(session()->has('message'))
<div class="alert alert-primary alert-dismissible bg-primary text-white border-0 fade show" role="alert">
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{session('message')}} </strong> 
</div>
@endif
                                <form action="{{URL::to('admin/register/submit')}}" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label">Full Name</label>
                                        <input class="form-control" type="text" name="name" id="fullname" placeholder="Enter your name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Email address</label>
                                        <input class="form-control" name="email" type="email" id="emailaddress" required placeholder="Enter your email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup">
                                            <label class="form-check-label" for="checkbox-signup">I accept <a href="#" class="text-muted">Terms and Conditions</a></label>
                                        </div>
                                    </div> -->

                                    <div class="mb-3 text-center">
                                        <button class="btn btn-primary" type="submit" name="submit"> Sign Up </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                            <p class="text-muted">Already have account? <a href="{{URL::to('admin_login')}}" class="text-muted ms-1"><b>Log In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
        Copyright © 2023. FoneWorld by Sham. All Rights are Reserved
        </footer>

        <!-- bundle -->
        <script src="{{ asset('public/admindashboard/assets/js/vendor.min.js')}}"></script>
        <script src="{{ asset('public/admindashboard/assets/js/app.min.js')}}"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/hyper/saas/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2022 08:26:39 GMT -->
</html>
