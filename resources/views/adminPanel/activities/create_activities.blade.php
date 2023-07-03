
@extends('adminPanel/master')   
         @section('content')        
         
                    <!-- Start Content-->
                    <div class="container-fluid">

                            <!-- start page title -->
                            <div class="row">
                                <div class="col-12">
                                    <div class="page-title-box">
                                        <div class="page-title-right">
                                            <a href="{{ URL::to('activities_list') }}" class="btn btn-info">Activities List</a>
                                        </div>
                                        <h4 class="page-title">Activities</h4>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- end row -->
                            <div class="row">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Create Activities</h4>
                                    </div>
                                    <form action="{{ URL::to('activities_submit') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row p-3">
                                            <div class="col-md-12">
                                                <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                                                    <li class="nav-item">
                                                        <a href="#home1" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                                            <i class="mdi mdi-home-variant d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Acitivity Details</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#availability" data-bs-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                                            <i class="mdi mdi-account-circle d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Availability</span>
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
                                                        <a href="#price_details" data-bs-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                                            <i class="mdi mdi-settings-outline d-md-none d-block"></i>
                                                            <span class="d-none d-md-block">Price Details</span>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>

                                                <div class="tab-content">
                                            
                                                        <div class="tab-pane show active" id="home1">
                                                            <div class="row">
                                                            
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Activity Title</label>
                                                                        <input type="text" class="form-control" name="activity_title" required id="" aria-describedby="emailHelp" placeholder="Enter Package Title">
                                                                        @error('activity_title')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Language</label>
                                                                        <input type="text" class="form-control" name="language" id="" aria-describedby="emailHelp" placeholder="Enter Language">
                                                                        @error('language')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-2">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Group Size</label>
                                                                        <input type="number" class="form-control" required name="group_size" id="" aria-describedby="emailHelp" placeholder="Enter Group Size">
                                                                        @error('group_size')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Duration (Hours)</label>
                                                                        <input type="number" class="form-control" required name="activity_duration" id="" aria-describedby="emailHelp" placeholder="Enter Duration Hours">
                                                                        @error('activity_duration')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Start Date</label>
                                                                        <input type="date" class="form-control" required name="start_date" id="" aria-describedby="emailHelp" placeholder="Enter Category">
                                                                        @error('start_date')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">End Date</label>
                                                                        <input type="date" class="form-control" required name="end_date" id="" aria-describedby="emailHelp" placeholder="Enter Category">
                                                                        @error('end_date')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="mb-3">
                                                                        <label for="exampleInputEmail1" class="form-label">Stars Rating</label>
                                                                        <input type="number" class="form-control" required name="stars_rating" id="" aria-describedby="emailHelp" placeholder="Enter Stars Rating">
                                                                        @error('stars_rating')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="example-input-normal" class="form-label">Select Country</label>
                                                                        <select class="form-control select2" name="country" required id="country_id" onchange="getDestinations()" data-toggle="select2">
                                                                            @foreach($countriesList as $county_res)
                                                                                <option value="{{ $county_res->id }}" @if($county_res->name == 'PAKISTAN') selected @endif>{{ $county_res->name }}</option>
                                                                            
                                                                                @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="example-input-normal" class="form-label">Select Destination</label>
                                                                        <select class="form-control select2" name="destination" required id="destination_id" data-toggle="select2">
                                                                        
                                                                        </select>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="mb-3">
                                                                        <label for="example-input-normal" class="form-label">Activity Place Address</label>
                                                                        <input type="text" name="activity_palce_address" class="form-control" required value="{{ old('activity_palce_address') }}">
                                                                        @error('activity_palce_address')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="example-input-normal" class="form-label">Feature Image</label>
                                                                        <input type="file" class="form-control" name="feacture_img" required id="" aria-describedby="emailHelp" placeholder="Enter Category">
                                                                        @error('feacture_img')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="example-input-normal" class="form-label">Banner Image</label>
                                                                        <input type="file" class="form-control" name="baaner_img" id="" aria-describedby="emailHelp" placeholder="Enter Category">
                                                                        @error('baaner_img')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                    <div class="mb-3">
                                                                        <label for="example-textarea" class="form-label">Activity Description</label>
                                                                        <textarea class="summernote" name="description"></textarea>
                                                                        @error('description')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        
                                                        <div class="tab-pane" id="availability">
                                                            <div class="row">
                                                                <div class="col-md-4 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <div class="form-check form-checkbox-success mb-2">
                                                                            <input type="checkbox" class="form-check-input" name="availibilty_days[]" value="Monday" id="modnay" checked>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <label class="form-check-label" for="modnay">Monday</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <hr>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <div class="form-check form-checkbox-success mb-2">
                                                                            <input type="checkbox" class="form-check-input" name="availibilty_days[]" value="Tuesday" id="tuesday" checked>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <label class="form-check-label" for="tuesday">Tuesday</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <hr>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <div class="form-check form-checkbox-success mb-2">
                                                                            <input type="checkbox" class="form-check-input" name="availibilty_days[]" value="Wednesday" id="webnesday" checked>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <label class="form-check-label" for="webnesday">Wednesday</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <hr>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <div class="form-check form-checkbox-success mb-2">
                                                                            <input type="checkbox" class="form-check-input" name="availibilty_days[]" value="Thursday" id="thursday" checked>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <label class="form-check-label" for="thursday">Thursday</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <hr>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <div class="form-check form-checkbox-success mb-2">
                                                                            <input type="checkbox" class="form-check-input" name="availibilty_days[]" value="Friday" id="friday" checked>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <label class="form-check-label" for="friday">Friday</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <hr>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <div class="form-check form-checkbox-success mb-2">
                                                                            <input type="checkbox" class="form-check-input" name="availibilty_days[]" value="Saturday" id="saturday" checked>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <label class="form-check-label" for="saturday">Saturday</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <hr>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-4 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <div class="form-check form-checkbox-success mb-2">
                                                                            <input type="checkbox" class="form-check-input" name="availibilty_days[]" value="Sunday" id="sunday" checked>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-8 text-center">
                                                                    <div class="mb-3" style="margin-top:2rem;">
                                                                        <label class="form-check-label" for="sunday">Sunday</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>

                                                        <div class="tab-pane" id="profile1">
                                                            <div class="col-sm-12">
                                                                    <div class="mb-3">
                                                                        <label for="example-textarea" class="form-label">Add Facilities</label>
                                                                        <textarea class="summernote" name="facilities"></textarea>
                                                                        @error('facilities')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane" id="settings1">
                                                            
                                                            <div class="col-sm-12">
                                                                    <div class="mb-3">
                                                                        <label for="example-textarea" class="form-label">Included</label>
                                                                        <textarea class="summernote" name="included"></textarea>
                                                                        @error('included')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                            </div>

                                                            <div class="col-sm-12">
                                                                    <div class="mb-3">
                                                                        <label for="example-textarea" class="form-label">Excluded</label>
                                                                        <textarea class="summernote" name="excluded"></textarea>
                                                                        @error('excluded')
                                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                                        @enderror
                                                                    </div>
                                                            </div>
                                                        </div>


                                                        <div class="tab-pane" id="price_details">
                                                            <div class="row">
                                                                <div class="col-sm-3">
                                                                        <div class="mb-3">
                                                                            <label for="example-textarea" class="form-label">Adult Cost Price</label>
                                                                            <input type="number" step=".01" required class="form-control" name="adult_cost_price" id="" aria-describedby="emailHelp" placeholder="">
                                                                            @error('adult_cost_price')
                                                                                    <p class="text-danger mt-2">{{ $message }}</p>
                                                                            @enderror
                                                                        </div>
                                                                </div>

                                                                <div class="col-sm-3">
                                                                        <div class="mb-3">
                                                                            <label for="example-textarea" class="form-label">Adult Sale Price</label>
                                                                            <input type="number" step=".01" required class="form-control" name="adult_sale_price" id="" aria-describedby="emailHelp" placeholder="">
                                                                            @error('adult_sale_price')
                                                                                    <p class="text-danger mt-2">{{ $message }}</p>
                                                                            @enderror
                                                                        </div>
                                                                </div>

                                                                <div class="col-sm-3">
                                                                        <div class="mb-3">
                                                                            <label for="example-textarea" class="form-label">Child Cost Price</label>
                                                                            <input type="number" step=".01" required class="form-control" name="child_cost_price" id="" aria-describedby="emailHelp" placeholder="">
                                                                            @error('child_cost_price')
                                                                                    <p class="text-danger mt-2">{{ $message }}</p>
                                                                            @enderror
                                                                        </div>
                                                                </div>

                                                                <div class="col-sm-3">
                                                                        <div class="mb-3">
                                                                            <label for="example-textarea" class="form-label">Child Sale Price</label>
                                                                            <input type="number" step=".01" required class="form-control" name="child_sale_price" id="" aria-describedby="emailHelp" placeholder="">
                                                                            @error('child_sale_price')
                                                                                    <p class="text-danger mt-2">{{ $message }}</p>
                                                                            @enderror
                                                                        </div>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                        <div class="mb-3">
                                                                            <label for="example-textarea" class="form-label">Payments Instructions</label>
                                                                            <textarea class="form-control" name="Payment_instructions"></textarea>
                                                                        </div>
                                                                </div>

                                                                <div class="col-sm-12">
                                                                        <div class="mb-3">
                                                                            <label for="example-textarea" class="form-label">Cancelation Policy</label>
                                                                            <textarea class="form-control" name="cancelation_policy"></textarea>
                                                                        </div>
                                                                </div>

                                                                
                                                            </div>
                                                            
                                                        </div>

                                                </div>

                                            </div>

                                            <div class="col-md-12">
                                                <button type="submit" style="float:right" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                    </div>
         @endsection

         @section('scripts')
           <script>
                var counter = 1;
                function AddMoreItnerary(){
                    var itearneryHtml = `<div class="row" id="Itenaray${counter}">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="example-input-normal" class="form-label">Itinerary Title</label>
                                                    <input type="text" class="form-control" name="itinerary_title[]" id="" aria-describedby="emailHelp" placeholder="Enter Title">
                                                    @error('itinerary_title[]')
                                                            <p class="text-danger mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="example-input-normal" class="form-label">Itinerary Image</label>
                                                    <input type="file" class="form-control" name="itinerary_img[]" id="" aria-describedby="emailHelp" placeholder="Select Image">
                                                    @error('itinerary_img')
                                                            <p class="text-danger mt-2">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="example-textarea" class="form-label">Descripton</label>
                                                        <textarea class="summernote" name="interary_desc[]"></textarea>
                                                        @error('interary_desc')
                                                                <p class="text-danger mt-2">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <button class="btn btn-danger" onclick="RemoveItnearay(${counter})" style="float: right;">Remove</button>
                                            </div>

                                        </div>`;
                            $('#iternary_div').append(itearneryHtml);

                            $('.summernote').summernote({
                                placeholder: 'Hello stand alone ui',
                                tabsize: 2,
                                height: 150,
                                toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture', 'video']],
                                ['view', ['fullscreen', 'codeview', 'help']]
                                ]
                            });
                }

                function RemoveItnearay(counter){
                    $('#Itenaray'+counter+'').remove();
                }

                function getDestinations(){
                    var country_id = $('#country_id').val();
                    console.log('country '+country_id);

                    $.ajax({
                        url:"{{ URL::to('fetch_country_destinations') }}/"+country_id+"",
                        type:'GET',
                        data:{},
                        success:function(data) {
                            console.log(data);
                            let destinatinosHtml = ``;
                            data['destinations'].forEach((destination)=>{
                                destinatinosHtml += `<option value="${destination['id']}">${destination['dest_name']}</option>`
                                
                            });

                            $('#destination_id').html(destinatinosHtml);
                        }
                    });
                }

                getDestinations();

                $(document).ready(function() {
                    $('.summernote').summernote({
                        placeholder: 'Hello stand alone ui',
                        tabsize: 2,
                        height: 150,
                        toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                        ]
                    });
                });
           </script>
         @endsection
                    <!-- container -->

                