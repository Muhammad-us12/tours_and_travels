<?php 
 
                                    
     $agent_data = Auth::user()->img;
                           
                        
   
                        
?>

                       
<!DOCTYPE html>
    <html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2022 08:24:45 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('public/adminPanel/assets/images/favicon.ico') }}">

        <!-- third party css -->
        <link href="{{ asset('public/adminPanel/assets/css/vendor/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- App css -->
        <link href="{{ asset('public/adminPanel/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('public/adminPanel/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style"/>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">        @yield('style')
        <style>
            .change_user:hover{
                cursor: pointer;
            }
        </style>
    </head>

    <body class="loading" data-layout-color="light" data-leftbar-theme="dark" data-layout-mode="fluid" data-rightbar-onstart="true">
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">
    
                <!-- LOGO -->
                <a href="{{ URL::to('/dashboard') }}" style="font-size: 1.3rem;color: wheat;" class="logo text-center logo-light">
                    <!--<span class="logo-lg">-->
                    <!--    <img src="{{ asset('public/adminPanel/assets/images/logo.png') }}" alt="" style="width:180px;">-->
                    <!--</span>-->
                    
                    Tours And Travels
                    <span class="logo-sm">
                        <img src="{{ asset('public/adminPanel/assets/images/logo_sm.png') }}" alt="" height="16">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="{{ URL::to('/dashboard') }}" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{ asset('public/adminPanel/assets/images/logo-dark.png') }}" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('public/adminPanel/assets/images/logo_sm_dark.png') }}" alt="" height="16">
                    </span>
                </a>
    
                <div class="h-100" id="leftside-menu-container" data-simplebar>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="{{ URL::to('dashboard') }}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">4</span>
                                <span> Dashboards </span>
                            </a>
                            
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#destinations" aria-expanded="false" aria-controls="destinations" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">4</span>
                                <span> Destinations </span>
                            </a>
                            <div class="collapse" id="destinations">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('destinations_list') }}">Destinations</a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#blogsNav" aria-expanded="false" aria-controls="blogsNav" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">4</span>
                                <span> Blogs </span>
                            </a>
                            <div class="collapse" id="blogsNav">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('blogs-list') }}">Blogs List</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('blogs-add') }}">Add Blogs</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('blogs-categories') }}">Blog Categories</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#packages" aria-expanded="false" aria-controls="packages" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">4</span>
                                <span> Packages </span>
                            </a>
                            <div class="collapse" id="packages">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('packages_list') }}">Packages List</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('create_package') }}">Create Packages</a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#Activities" aria-expanded="false" aria-controls="Activities" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">4</span>
                                <span> Activities </span>
                            </a>
                            <div class="collapse" id="Activities">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('activities_list') }}">Activities List</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('create_activities') }}">Create Activities</a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#bookings_list" aria-expanded="false" aria-controls="bookings_list" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">4</span>
                                <span> Bookings </span>
                            </a>
                            <div class="collapse" id="bookings_list">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('bookings_list') }}">Tentative Bookings</a>
                                    </li>
                                    <li>
                                        <a href="{{ URL::to('confirmed_bookings_list') }}">Confrimed Bookings</a>
                                    </li>
                                    
                                  
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#payment_request" aria-expanded="false" aria-controls="payment_request" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">4</span>
                                <span> Payment Request </span>
                            </a>
                            <div class="collapse" id="payment_request">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('admin_payment_request') }}">Payment Request</a>
                                    </li>
                                    
                                  
                                </ul>
                            </div>
                        </li>

                        

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#reviews" aria-expanded="false" aria-controls="reviews" class="side-nav-link">
                                <i class="uil-home-alt"></i>
                                <span class="badge bg-success float-end">4</span>
                                <span> Reviews </span>
                            </a>
                            <div class="collapse" id="reviews">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ URL::to('reviews_list') }}">Reviews</a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </li>
                    
                       
                    </ul>

                    <!-- Help Box -->
                    
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
                                        <input type="text" class="form-control" placeholder="Search bar..." aria-label="Recipient's username">
                                    </form>
                                </div>
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
                                        
                                        <img src="{{ asset('public/images/persons/'.Auth::user()->img.'') }}" alt="user-image" class="rounded-circle">
                                    </span>

                                    <span>
                                        <span class="account-user-name">{{ Auth::user()->name }}</span>
                                        <span class="account-position">Super Admin</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    

                                    <!-- item-->
                                    <a href="{{ URL::to('change_password') }}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>Change Password</span>
                                    </a>
                                    


                                    <!-- item-->
                                    <form method="POST" action="{{ route('logout') }}">
                            @csrf
                                    <button  type="submit" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                        </button>
                                    </form>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        
                        <!--<div class="app-search dropdown d-none d-lg-block">-->
                        <!--    <form>-->
                        <!--        <div class="input-group">-->
                        <!--            <input type="text" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">-->
                        <!--            <span class="mdi mdi-magnify search-icon"></span>-->
                        <!--            <button class="input-group-text btn-primary" type="submit">Search</button>-->
                        <!--        </div>-->
                        <!--    </form>-->

                        <!--    <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">-->
                                <!-- item-->
                        <!--        <div class="dropdown-header noti-title">-->
                        <!--            <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>-->
                        <!--        </div>-->

                                <!-- item-->
                        <!--        <a href="javascript:void(0);" class="dropdown-item notify-item">-->
                        <!--            <i class="uil-notes font-16 me-1"></i>-->
                        <!--            <span>Analytics Report</span>-->
                        <!--        </a>-->

                                <!-- item-->
                        <!--        <a href="javascript:void(0);" class="dropdown-item notify-item">-->
                        <!--            <i class="uil-life-ring font-16 me-1"></i>-->
                        <!--            <span>How can I help you?</span>-->
                        <!--        </a>-->

                                <!-- item-->
                        <!--        <a href="javascript:void(0);" class="dropdown-item notify-item">-->
                        <!--            <i class="uil-cog font-16 me-1"></i>-->
                        <!--            <span>User profile settings</span>-->
                        <!--        </a>-->

                                <!-- item-->
                        <!--        <div class="dropdown-header noti-title">-->
                        <!--            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>-->
                        <!--        </div>-->

                        <!--        <div class="notification-list">-->
                                    <!-- item-->
                        <!--            <a href="javascript:void(0);" class="dropdown-item notify-item">-->
                        <!--                <div class="d-flex">-->
                        <!--                    <img class="d-flex me-2 rounded-circle" src="{{ asset('public/adminPanel/assets/images/users/avatar-2.jpg') }}" alt="Generic placeholder image" height="32">-->
                        <!--                    <div class="w-100">-->
                        <!--                        <h5 class="m-0 font-14">Erwin Brown</h5>-->
                        <!--                        <span class="font-12 mb-0">UI Designer</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </a>-->

                                    <!-- item-->
                        <!--            <a href="javascript:void(0);" class="dropdown-item notify-item">-->
                        <!--                <div class="d-flex">-->
                        <!--                    <img class="d-flex me-2 rounded-circle" src="{{ asset('public/adminPanel/assets/images/users/avatar-5.jpg') }}" alt="Generic placeholder image" height="32">-->
                        <!--                    <div class="w-100">-->
                        <!--                        <h5 class="m-0 font-14">Jacob Deo</h5>-->
                        <!--                        <span class="font-12 mb-0">Developer</span>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </a>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </div>
                    <!-- end Topbar -->