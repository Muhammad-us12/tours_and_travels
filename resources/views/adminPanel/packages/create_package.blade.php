
@extends('adminPanel/master')   
         @section('content')        
         
                    <!-- Start Content-->
                    <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-right">
                                            <a href="{{ URL::to('packages_list') }}" class="btn btn-info">Packages List</a>
                                        </div>
                                        <h4 class="page-title">Package</h4>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- end row -->
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Create Package</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                                <li class="nav-item">
                                                    <a href="#home1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                                        <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                        <span class="d-none d-md-block">Package Details</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                                        <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                        <span class="d-none d-md-block">Facilities</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#settings1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                        <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                        <span class="d-none d-md-block">Include & Exclude</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#settings1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                        <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                        <span class="d-none d-md-block">Iternary</span>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#settings1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                        <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                        <span class="d-none d-md-block">Payments Instruction</span>
                                                    </a>
                                                </li>
                                                
                                            </ul>

                                            <div class="tab-content">
                                                <div class="tab-pane" id="home1">
                                                    <p>...</p>
                                                </div>
                                                <div class="tab-pane show active" id="profile1">
                                                    <p>...</p>
                                                </div>
                                                <div class="tab-pane" id="settings1">
                                                    <p>...</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
         @endsection

         @section('scripts')
           
         @endsection
                    <!-- container -->

                