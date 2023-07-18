
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
                                    <h4 class="page-title">Custom Packages List</h4>
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
                                                        <th>Passenger</th>
                                                        <th>email</th>
                                                        <th>phone</th>
                                                        <th>Destinations</th>
                                                        <th>Start Date</th>
                                                        <th>Duration</th>
                                                        <th>Group Size</th>
                                                        <th>Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($custom_packages)
                                                        @foreach($custom_packages as $package_res)
                                                            <tr>
                                                                <td>
                                                                    {{ $loop->iteration }}
                                                                </td>
                                                                
                                                            
                                                                <td>
                                                                    {{ $package_res->lead_name }}
                                                                </td>
                                                                <td>
                                                                    {{ $package_res->lead_email }}
                                                                </td>
                                                                <td>
                                                                    {{ $package_res->lead_phone }}
                                                                </td>
                                                                <td>
                                                                    <?php 
                                                                        $destination = json_decode($package_res->destinations);
                                                                        foreach($destination as $dest_res){
                                                                            echo $dest_res;
                                                                        }
                                                                    ?>
                                                                </td>
                                                                <td>
                                                                    {{ $package_res->start_date }}
                                                                </td>
                                                                <td>
                                                                    {{ $package_res->duration }}
                                                                </td>
                                                                <td>
                                                                    {{ $package_res->group_size }}
                                                                </td>
                                                                <td>
                                                                    @if($package_res->status == 'done')
                                                                    <span class="badge bg-success" onclick="change_payment_status({{ $package_res->id }},'{{ $package_res->status }}')">{{ $package_res->status }}</span> 
                                                                    @endif     

                                                                    @if($package_res->status == 'pending')
                                                                    <span class="badge bg-danger" onclick="change_payment_status({{ $package_res->id }},'{{ $package_res->status }}')">{{ $package_res->status }}</span> 
                                                                    @endif
                                                                </td>
                                                               
                                                            
                                                               
                                                            </tr>
                                                        @endforeach
                                                    @endisset
                                                    
                                                </tbody>
                                            </table>
                                            {!! $custom_packages->links() !!}
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                     
                        <!-- end row -->

                    </div>
                    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-modal="true" style="display: none;">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="standard-modalLabel">Update Status</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <div class="modal-body">
                                <form action="{{ URL::to('update_custom_package_status') }}" method="post">
                                    @csrf
                                    <div class="row">
                                                <div class="col-md-12">
                                                    <label for="">Select Status</label>
                                                    <select id="payment_status" class="form-control" name="payment_status" id="">
                                                        <option value="done">Done</option>
                                                        <option value="pending">Pending</option>
                                                    </select>
                                                    <input type="text" id="payment_id" name="payment_id" hidden>

                                                </div>
                                                
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" onclick="return confirm('Are You Sure')" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
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
                
                function change_payment_status(id,status){
                    $('#standard-modal').modal('show');
                    $('#payment_id').val(id);
                    $('#payment_status').val(status).change();
                }
            </script>            
         @endsection
                    <!-- container -->

                