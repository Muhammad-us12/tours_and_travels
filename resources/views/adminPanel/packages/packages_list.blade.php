
@extends('adminPanel/master')   
         @section('style')
            <link href="{{ asset('public/adminPanel/assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css" />
         @endsection
         @section('content')        
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                       
                                    </div>
                                    <h4 class="page-title">Packages List</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col-sm-5">
                                                
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="text-sm-end">
                                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#standard-modal"><i class="mdi mdi-plus-circle me-2"></i>Add New</button>
                                                </div>
                                            </div><!-- end col-->
                                            <div class="col-md-12 m-2">
                                                @if(session('success'))
                                               

                                                <div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content modal-filled bg-success">
                                                            <div class="modal-body p-4">
                                                                <div class="text-center">
                                                                    <i class="dripicons-checkmark h1"></i>
                                                                    <h4 class="mt-2">Well Done!</h4>
                                                                    <p class="mt-3">{{ session('success') }}</p>
                                                                    <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div>

                                                
                                                @endif

                                                @if(session('error'))
                                                <div id="error-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content modal-filled bg-danger">
                                                            <div class="modal-body p-4">
                                                                <div class="text-center">
                                                                    <i class="dripicons-wrong h1"></i>
                                                                    <h4 class="mt-2">Oh snap!</h4>
                                                                    <p class="mt-3">{{ session('error') }}</p>
                                                                    <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                @endif
                                                
                                            </div>
                                        </div>
                
                                        <div class="table-responsive">
                                            <table id="scroll-horizontal-datatable" class="table table-centered w-100 nowrap">
                                                <thead class="table-light">
                                                    <tr>
                                                      
                                                        <th>ID</th>
                                                        <th>Picture</th>
                                                        <th>Title</th>
                                                        <th>Destination</th>
                                                        <th>Start Date</th>
                                                        <th>Adult Price</th>
                                                        <th>Child Price</th>
                                                        <th style="width: 85px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($all_packages)
                                                        @foreach($all_packages as $package_res)
                                                            <tr>
                                                                <td>
                                                                    {{ $package_res->id }}
                                                                </td>
                                                                
                                                            
                                                                <td>
                                                                    <img src="{{ asset('public/images/Packages/'.$package_res->feacture_img.'') }}" style="width:150px;" alt="">
                                                                </td>
                                                                <td>
                                                                    {{ $package_res->package_title }}
                                                                </td>
                                                                <td>
                                                                    {{ $package_res->packageDestination->dest_name }}
                                                                </td>
                                                                <td>
                                                                    Start :{{ date('d-m-Y',strtotime($package_res->start_date)) }}<br>
                                                                    End :{{ date('d-m-Y',strtotime($package_res->end_date)) }}
                                                                </td>

                                                                <td>
                                                                    <span class="badge bg-success" style="font-size: .8rem;">Sale Price :{{ $package_res->adult_sale_price }}</span>
                                                                    <br>
                                                                    <span class="badge bg-info" style="font-size: .8rem;">Cost Price :{{ $package_res->adult_cost_price }}</span>
                                                                    
                                                                    
                                                                </td>
                                                                <td>
                                                                    <span class="badge bg-success" style="font-size: .8rem;">Sale Price :{{ $package_res->child_sale_price }}</span>
                                                                    <br>
                                                                    <span class="badge bg-info" style="font-size: .8rem;">Cost Price :{{ $package_res->child_cost_price }}</span>
                                                                    
                                                                </td>

                                                            
                                                                <td class="table-action">
                                                                    <button onclick="updateCategory({{ $package_res->id }})" class="btn btn-info"> <i class="mdi mdi-square-edit-outline"></i></button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endisset
                                                    
                                                </tbody>
                                            </table>
                                            {!! $all_packages->links() !!}
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                     
                        <!-- end row -->

                    </div>

                   
         @endsection

         @section('scripts')
         <script>
            @if(session('success'))
                $(document).ready(function(){
                    $("#success-alert-modal").modal('show');
                })  
            @endif

            @if(session('error'))
                $(document).ready(function(){
                        $("#error-alert-modal").modal('show');
                })
            @endif

            
        </script>
          

         <script src="{{ asset('public/adminPanel/assets/js/vendor/jquery.dataTables.min.js') }}"></script>
         <script src="{{ asset('public/adminPanel/assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
         
            <script>
                $("#scroll-horizontal-datatable").DataTable({scrollX:!0,language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}})
              
            </script>            
         @endsection
                    <!-- container -->

                