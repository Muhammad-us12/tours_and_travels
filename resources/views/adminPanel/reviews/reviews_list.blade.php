
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
                                    <h4 class="page-title">Reviews List</h4>
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
                                                        <th>Name</th>
                                                        <th>Rating</th>
                                                        <th>Review</th>
                                                        <th style="width: 85px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @isset($all_reviews)
                                                        @foreach($all_reviews as $review_res)
                                                            <tr>
                                                                <td>
                                                                    {{ $review_res->id }}
                                                                </td>
                                                                
                                                            
                                                                <td>
                                                                    <img src="{{ asset('public/images/Reviews/'.$review_res->picture.'') }}" style="width:100px;" alt="">
                                                                </td>
                                                                <td>
                                                                    {{ $review_res->name }}
                                                                </td>
                                                                <td>
                                                                    {{ $review_res->ratings }}
                                                                </td>
                                                                <td>
                                                                    {{ $review_res->review }}
                                                                </td>
                                                            
                                                                <td class="table-action">
                                                                    <button onclick="updateCategory({{ $review_res->id }})" class="btn btn-info"> <i class="mdi mdi-square-edit-outline"></i></button>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endisset
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                     
                        <!-- end row -->

                    </div>

                    <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="standard-modalLabel">Add Review</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <form action="{{ URL::to('reviews_submit') }}" id="review_form" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="modal-body">
                                
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                                    <input type="text" class="form-control" required name="name" id="" aria-describedby="emailHelp" placeholder="Enter Person Name">
                                                    @error('name')
                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                        @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Stars </label>
                                                    <input type="number" class="form-control" id="rating_value" name="ratings">
                                                    @error('ratings')
                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Select Picture</label>
                                                    <input type="file" class="form-control" name="picture" id="" aria-describedby="emailHelp" placeholder="Enter Category">
                                                </div>
                                                @error('picture')
                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                        @enderror
                                            </div>
                                            
                                            <div class="col-md-12">
                                                    <label class="form-check-label" for="customCheckcolor2">Review</label>
                                                    <textarea class="form-control" name="review" id="" cols="30" rows="4"></textarea>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                    
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div id="update-category-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="standard-modalLabel">Update Category</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                </div>
                                <form action="{{ URL::to('blog-cat-update') }}" method="post">
                                    @csrf
                                    <div class="modal-body">

                                        <div class="card-body" id="placeholder_div">
                                            <h5 class="card-title placeholder-glow">
                                                <span class="placeholder col-6"></span>
                                            </h5>
                                            <p class="card-text placeholder-glow">
                                                <span class="placeholder col-7"></span>
                                                <span class="placeholder col-4"></span>
                                                <span class="placeholder col-4"></span>
                                                <span class="placeholder col-6"></span>
                                                <span class="placeholder col-8"></span>
                                            </p>
                                        </div>
                                
                                        <div class="mb-3" id="form_div" style="display:none;">
                                            <label for="exampleInputEmail1" class="form-label">Category</label>
                                            <input type="text" class="form-control" name="category_name" id="category_name" aria-describedby="emailHelp" placeholder="Enter Category">
                                            <input type="text" class="form-control" hidden name="category_id" id="category_id" aria-describedby="emailHelp" placeholder="Enter Category">
                                        </div>
                                        
                                    
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
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
          

            

            <script>
                updateCategory = (catId)=>{
                    $("#update-category-modal").modal('show');
                    $.ajax({
                        url:"{{ URL::to('category-data') }}/"+catId,
                        type:'GET',
                        data:{
                            // '_token' : '<?php echo csrf_token() ?>',
                            // 'category_id':catId
                        },
                        success:function(data) {
                            $('#placeholder_div').css('display','none');
                            $('#form_div').css('display','block');
                            $('#category_name').val(data['category_name']);
                        }
                    });
                    $('#category_id').val(catId);
                }

                function submit_review() {
                    var rating = $('#getting-values').rateit('value');

                    $('#rating_value').val(rating)
                    $('#review_form').submit()
                }
            </script>
         <script src="{{ asset('public/adminPanel/assets/js/vendor/jquery.dataTables.min.js') }}"></script>
         <script src="{{ asset('public/adminPanel/assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
         
         <script src="{{ asset('public/adminPanel/assets/js/vendor/jquery.rateit.min.js') }}"></script>
        <script src="{{ asset('public/adminPanel/assets/js/ui/component.rating.js') }}"></script>
            <script>
                $("#scroll-horizontal-datatable").DataTable({scrollX:!0,language:{paginate:{previous:"<i class='mdi mdi-chevron-left'>",next:"<i class='mdi mdi-chevron-right'>"}},drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}})
              
            </script>            
         @endsection
                    <!-- container -->

                