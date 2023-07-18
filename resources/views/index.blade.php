
<?php 
  use App\Helpers\Helper;
?>
@extends('website/includes/master')



@section('content')

    <section data-anim-wrap class="masthead -type-4">
      <div data-anim-child="slide-up" class="masthead-slider overflow-x-hidden js-masthead-slider-4">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="masthead__image">
              <img src="{{ asset('public/frontend/img/masthead/4/bg.webp') }}" alt="image">
            </div>
            
            <div class="container">
              <div class="row justify-center">
                <div class="col-xl-9">
                  <div class="masthead__content">
                    <div class="text-center">
                      <h1 data-anim-child="slide-up delay-2" style="margin-top:-5rem; margin-bottom:10rem;" class="text-60 lg:text-40 md:text-30 text-white">Find Your Dream Luxury Hotel</h1>
                     
                    </div>

                    <div data-anim-child="slide-up delay-5" class="mainSearch bg-white rounded-4 shadow-1">
                  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="masthead__image">
              <img src="{{ asset('public/frontend/img/masthead/4/naran.jpg') }}" alt="image">
            </div>

            <div class="container">
              <div class="row justify-center">
                <div class="col-xl-9">
                  <div class="masthead__content">
                    <div class="text-center">
                      <h1 data-anim-child="slide-up delay-2" style="margin-top:-5rem; margin-bottom:10rem;" class="text-60 lg:text-40 md:text-30 text-white">Find Your Dream Luxury Hotel</h1>
                      
                    </div>

                    <div data-anim-child="slide-up delay-5" class="mainSearch bg-white rounded-4 shadow-1">
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="masthead__image">
              <img src="{{ asset('public/frontend/img/masthead/4/sea.jpg') }}" alt="image">
            </div>

            <div class="container">
              <div class="row justify-center">
                <div class="col-xl-9">
                  <div class="masthead__content">
                    <div class="text-center">
                      <h1 data-anim-child="slide-up delay-2" style="margin-top:-5rem; margin-bottom:10rem;" class="text-60 lg:text-40 md:text-30 text-white">Find Your Dream Luxury Hotel</h1>
                    
                    </div>

                    <div data-anim-child="slide-up delay-5" class="mainSearch bg-white rounded-4 shadow-1">
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="masthead-slider__nav -prev js-prev">
          <button class="button -outline-white size-50 flex-center text-white rounded-full">
            <i class="icon-arrow-left"></i>
          </button>
        </div>

        <div class="masthead-slider__nav -next js-next">
          <button class="button -outline-white size-50 flex-center text-white rounded-full">
            <i class="icon-arrow-right"></i>
          </button>
        </div>
      </div>

      <div class="masthead__scroll">
        <div class="text-14 text-white">Scroll Now</div>
        <div class="-line"></div>
      </div>
      

      <div class="tabs -bookmark js-tabs" style="width: 80%;position: absolute;top: 75%;left: 50%;transform: translate(-50%, -50%);">
                <div class="tabs__controls d-flex items-center js-tabs-controls">

                  <div class="">
                    <button class="tabs__button px-30 py-20 rounded-4 fw-600 text-white js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">
                    <i class="icon-destination text-20 mr-10"></i>
                      Tours
                    </button>
                  </div>

                  <div class="">
                    <button class="tabs__button px-30 py-20 rounded-4 fw-600 text-white js-tabs-button " data-tab-target=".-tab-item-2">
                    <i class="icon-ski text-20 mr-10"></i>
                      Activity
                    </button>
                  </div>

                  <div class="">
                    <button class="tabs__button px-30 py-20 rounded-4 fw-600 text-white js-tabs-button " data-tab-target=".-tab-item-3">
                    <i class="icon-car text-20 mr-10"></i>
                      Transfers
                    </button>
                  </div>

                

                  

                </div>

                <div class="tabs__content js-tabs-content" style="transform: translate(0, -92%);">

                  <div class="tabs__pane -tab-item-1 is-tab-el-active">
                    <form action="{{ URL::to('packages-list') }}" method="post">
                      @csrf
                      <div class="mainSearch bg-white pr-20 py-20 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 shadow-1">
                        <div class="button-grid items-center">
                            <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                                <label for="">Destination</label>
                                <select name="destination" id="">
                                @isset($all_destinations)
                                        @foreach($all_destinations as $index => $dest_res)
                                        <option value="{{ $dest_res->id }}">{{ $dest_res->dest_name }}</option>
                                      @endforeach
                                @endisset      
                                </select>

                            </div>

                            <div class="px-30 lg:py-20 lg:px-0">
                                <label for="">Start Date</label>
                                <input type="date" name="start_date" value="{{ date('Y-m-d') }}" class="form-control">
                            </div>

                            <div class="button-item">
                              <button class="mainSearch__submit button -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white">
                                <i class="icon-search text-20 mr-10"></i>
                                Search
                              </button>
                            </div>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="tabs__pane -tab-item-2 ">
                  <form action="{{ URL::to('activities-list') }}" method="post">
                      @csrf
                      <div class="mainSearch bg-white pr-20 py-20 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 shadow-1">
                        <div class="button-grid items-center">
                            <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                                <label for="">Destination</label>
                                <select name="destination" id="">
                                @isset($all_destinations)
                                        @foreach($all_destinations as $index => $dest_res)
                                        <option value="{{ $dest_res->id }}">{{ $dest_res->dest_name }}</option>
                                      @endforeach
                                @endisset      
                                </select>

                            </div>

                            <div class="px-30 lg:py-20 lg:px-0">
                                <label for="">Start Date</label>
                                <input type="date" name="start_date" value="{{ date('Y-m-d') }}" class="form-control">
                            </div>

                            <div class="button-item">
                              <button class="mainSearch__submit button -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white">
                                <i class="icon-search text-20 mr-10"></i>
                                Search
                              </button>
                            </div>
                        </div>
                      </div>
                    </form>
                  </div>

                  <div class="tabs__pane -tab-item-3 ">
                    <div class="mainSearch bg-white pr-20 py-20 lg:px-20 lg:pt-5 lg:pb-20 rounded-4 shadow-1">
                      <div class="button-grid items-center">

                        <div class="searchMenu-loc px-30 lg:py-20 lg:px-0 js-form-dd js-liverSearch">

                          <div data-x-dd-click="searchMenu-loc">
                            <h4 class="text-15 fw-500 ls-2 lh-16">Location</h4>

                            <div class="text-15 text-light-1 ls-2 lh-16">
                              <input autocomplete="off" type="search" placeholder="Where are you going?" class="js-search js-dd-focus" />
                            </div>
                          </div>


                          <div class="searchMenu-loc__field shadow-2 js-popup-window" data-x-dd="searchMenu-loc" data-x-dd-toggle="-is-active">
                            <div class="bg-white px-30 py-30 sm:px-0 sm:py-15 rounded-4">
                              <div class="y-gap-5 js-results">

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">London</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Greater London, United Kingdom</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">New York</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">New York State, United States</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Paris</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">France</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Madrid</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Spain</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                                <div>
                                  <button class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                                    <div class="d-flex">
                                      <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                                      <div class="ml-10">
                                        <div class="text-15 lh-12 fw-500 js-search-option-target">Santorini</div>
                                        <div class="text-14 lh-12 text-light-1 mt-5">Greece</div>
                                      </div>
                                    </div>
                                  </button>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>


                  

                        <div class="searchMenu-guests px-30 lg:py-20 lg:px-0 js-form-dd js-form-counters">

                          <div data-x-dd-click="searchMenu-guests">
                            <h4 class="text-15 fw-500 ls-2 lh-16">Guest</h4>

                            <div class="text-15 text-light-1 ls-2 lh-16">
                              <span class="js-count-adult">2</span> adults
                              -
                              <span class="js-count-child">1</span> childeren
                              -
                              <span class="js-count-room">1</span> room
                            </div>
                          </div>


                          <div class="searchMenu-guests__field shadow-2" data-x-dd="searchMenu-guests" data-x-dd-toggle="-is-active">
                            <div class="bg-white px-30 py-30 rounded-4">
                              <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                  <div class="text-15 fw-500">Adults</div>
                                </div>

                                <div class="col-auto">
                                  <div class="d-flex items-center js-counter" data-value-change=".js-count-adult">
                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                      <i class="icon-minus text-12"></i>
                                    </button>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                      <div class="text-15 js-count">2</div>
                                    </div>

                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                      <i class="icon-plus text-12"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>

                              <div class="border-top-light mt-24 mb-24"></div>

                              <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                  <div class="text-15 lh-12 fw-500">Children</div>
                                  <div class="text-14 lh-12 text-light-1 mt-5">Ages 0 - 17</div>
                                </div>

                                <div class="col-auto">
                                  <div class="d-flex items-center js-counter" data-value-change=".js-count-child">
                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                      <i class="icon-minus text-12"></i>
                                    </button>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                      <div class="text-15 js-count">1</div>
                                    </div>

                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                      <i class="icon-plus text-12"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>

                              <div class="border-top-light mt-24 mb-24"></div>

                              <div class="row y-gap-10 justify-between items-center">
                                <div class="col-auto">
                                  <div class="text-15 fw-500">Rooms</div>
                                </div>

                                <div class="col-auto">
                                  <div class="d-flex items-center js-counter" data-value-change=".js-count-room">
                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-down">
                                      <i class="icon-minus text-12"></i>
                                    </button>

                                    <div class="flex-center size-20 ml-15 mr-15">
                                      <div class="text-15 js-count">1</div>
                                    </div>

                                    <button class="button -outline-blue-1 text-blue-1 size-38 rounded-4 js-up">
                                      <i class="icon-plus text-12"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        <div class="button-item">
                          <button class="mainSearch__submit button -dark-1 py-15 px-35 h-60 col-12 rounded-4 bg-blue-1 text-white">
                            <i class="icon-search text-20 mr-10"></i>
                            Search
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>


                

                </div>
              </div>
    </section>

    
    

  

    
            <section class="layout-pt-lg layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Special Offers</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-20 pt-40">
          <div data-anim-child="slide-left delay-3" class="col-lg-6 col-sm-6">

            <div class="ctaCard -type-1 rounded-4 ">
              <div class="ctaCard__image ratio ratio-41:45" style="height: 195px;">
                <img class="img-ratio js-lazy" src="#" data-src="{{ asset('public/frontend/img/backgrounds/road.jpg') }}" alt="image">
              </div>

              <div class="ctaCard__content py-50 px-50 lg:py-30 lg:px-30">


                <h4 class="text-30 lg:text-24 text-white">Free Personalized Itinerary</h4>

                <div class="d-inline-block mt-30">
                  <a href="{{ URL::to('custom_package_create') }}" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Create Custom Package</a>
                </div>
              </div>
            </div>

          </div>

          <div data-anim-child="slide-left delay-4" class="col-lg-6 col-sm-6">

            <div class="ctaCard -type-1 rounded-4 ">
              <div class="ctaCard__image ratio ratio-41:45" style="height: 195px;">
                <img class="img-ratio js-lazy" src="#" data-src="{{ asset('public/frontend/img/backgrounds/river.jpg') }}" alt="image">
              </div>

              <div class="ctaCard__content py-50 px-50 lg:py-30 lg:px-30">


                <h4 class="text-30 lg:text-24 text-white">Explore Pakistan on Budget</h4>

                <div class="d-inline-block mt-30">
                  <a href="#" class="button px-48 py-15 -blue-1 -min-180 bg-white text-dark-1">Learn More</a>
                </div>
              </div>
            </div>

          </div>

          
        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
      <div class="container">
        <div class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Why Choose Us</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-40 justify-between pt-50">

          <div class="col-lg-3 col-sm-6">

            <div class="featureIcon -type-1 ">
              <div class="d-flex justify-center">
                <img src="#" data-src="{{ asset('public/frontend/img/featureIcons/3/1.svg') }}" alt="image" class="js-lazy">
              </div>

              <div class="text-center mt-30">
                <h4 class="text-18 fw-500">Best Price Guarantee</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-sm-6">

            <div class="featureIcon -type-1 ">
              <div class="d-flex justify-center">
                <img src="#" data-src="{{ asset('public/frontend/img/featureIcons/3/2.svg') }}" alt="image" class="js-lazy">
              </div>

              <div class="text-center mt-30">
                <h4 class="text-18 fw-500">Easy & Quick Booking</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-sm-6">

            <div class="featureIcon -type-1 ">
              <div class="d-flex justify-center">
                <img src="#" data-src="{{ asset('public/frontend/img/featureIcons/3/3.svg') }}" alt="image" class="js-lazy">
              </div>

              <div class="text-center mt-30">
                <h4 class="text-18 fw-500">Customer Care 24/7</h4>
                <p class="text-15 mt-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row justify-center text-center">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Top Destinations</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">These popular destinations have a lot to offer</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-40 justify-between pt-40 sm:pt-20">

        @isset($top_destinations[0])
          <div data-anim-child="slide-up delay-3" class="col-xl-3 col-md-4 col-sm-6">

            <a href="#" class="citiesCard -type-3 d-block rounded-4 ">
              <div class="citiesCard__image ratio ratio-1:1">
                <img class="img-ratio js-lazy" src="#" data-src="{{ asset('public/images/Destinations/'.$top_destinations[0]->dest_img.'') }}" alt="image">
              </div>

              <div class="citiesCard__content px-30 py-30">
                <h4 class="text-26 fw-600 text-white">{{ $top_destinations[0]->dest_name }}</h4>
                <div class="text-15 text-white">1,714 properties</div>
              </div>
            </a>

          </div>
        @endisset
        @isset($top_destinations[1])
          <div data-anim-child="slide-up delay-4" class="col-xl-6 col-md-4 col-sm-6">

            <a href="#" class="citiesCard -type-3 d-block rounded-4 h-full">
              <div class="citiesCard__image ">
                <img class="img-ratio js-lazy" src="#" data-src="{{ asset('public/images/Destinations/'.$top_destinations[1]->dest_img.'') }}" alt="image">
              </div>

              <div class="citiesCard__content px-30 py-30">
                <h4 class="text-26 fw-600 text-white">{{ $top_destinations[1]->dest_name }}</h4>
                <div class="text-15 text-white"></div>
              </div>
            </a>

          </div>
        @endisset

        @isset($top_destinations[2])
          <div data-anim-child="slide-up delay-5" class="col-xl-3 col-md-4 col-sm-6">

            <a href="#" class="citiesCard -type-3 d-block rounded-4 ">
              <div class="citiesCard__image ratio ratio-1:1">
                <img class="img-ratio js-lazy" src="#" data-src="{{ asset('public/images/Destinations/'.$top_destinations[2]->dest_img.'') }}" alt="image">
              </div>

              <div class="citiesCard__content px-30 py-30">
                <h4 class="text-26 fw-600 text-white">{{ $top_destinations[2]->dest_name }}</h4>
                <div class="text-15 text-white">1,714 properties</div>
              </div>
            </a>

          </div>
          @endisset
          @isset($top_destinations[3])
          <div data-anim-child="slide-up delay-6" class="col-xl-6 col-md-4 col-sm-6">

            <a href="#" class="citiesCard -type-3 d-block rounded-4 h-full">
              <div class="citiesCard__image ">
                <img class="img-ratio js-lazy" src="#" data-src="{{ asset('public/images/Destinations/'.$top_destinations[3]->dest_img.'') }}" alt="image">
              </div>

              <div class="citiesCard__content px-30 py-30">
                <h4 class="text-26 fw-600 text-white">{{ $top_destinations[3]->dest_name }}</h4>
                <div class="text-15 text-white"></div>
              </div>
            </a>

          </div>
          @endisset

          @isset($top_destinations[4])
          <div data-anim-child="slide-up delay-7" class="col-xl-3 col-md-4 col-sm-6">

            <a href="#" class="citiesCard -type-3 d-block rounded-4 ">
              <div class="citiesCard__image ratio ratio-1:1">
                <img class="img-ratio js-lazy" src="#" data-src="{{ asset('public/images/Destinations/'.$top_destinations[4]->dest_img.'') }}" alt="image">
              </div>

              <div class="citiesCard__content px-30 py-30">
                <h4 class="text-26 fw-600 text-white">{{ $top_destinations[4]->dest_name }}</h4>
                <div class="text-15 text-white">1,714 properties</div>
              </div>
            </a>

          </div>
          @endisset

          @isset($top_destinations[5])
          <div data-anim-child="slide-up delay-8" class="col-xl-3 col-md-4 col-sm-6">

            <a href="#" class="citiesCard -type-3 d-block rounded-4 ">
              <div class="citiesCard__image ratio ratio-1:1">
                <img class="img-ratio js-lazy" src="#" data-src="{{ asset('public/images/Destinations/'.$top_destinations[5]->dest_img.'') }}" alt="image">
              </div>

              <div class="citiesCard__content px-30 py-30">
                <h4 class="text-26 fw-600 text-white">{{ $top_destinations[5]->dest_name }}</h4>
                <div class="text-15 text-white">1,714 properties</div>
              </div>
            </a>

          </div>
          @endisset
        </div>
      </div>
    </section>


    <section class="layout-pt-md layout-pb-md">
      <div data-anim="slide-up delay-1" class="container">
        <div class="row y-gap-10 justify-between items-end">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Top Tours</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>

          <div class="col-sm-auto">

            <div class="dropdown js-dropdown js-hotel-active">
              <div class="dropdown__button d-flex items-center rounded-4 border-light justify-between text-16 fw-500 px-20 h-50 w-140 sm:w-full text-14" data-el-toggle=".js-hotel-toggle" data-el-toggle-active=".js-hotel-active">
                <span class="js-dropdown-title">Hotel</span>
                <i class="icon icon-chevron-sm-down text-7 ml-10"></i>
              </div>

              <div class="toggle-element -dropdown  js-click-dropdown js-hotel-toggle">
                <div class="text-14 y-gap-15 js-dropdown-list">

                  <div><a href="#" class="d-block js-dropdown-link">Animation</a></div>

                  <div><a href="#" class="d-block js-dropdown-link">Design</a></div>

                  <div><a href="#" class="d-block js-dropdown-link">Illustration</a></div>

                  <div><a href="#" class="d-block js-dropdown-link">Lifestyle</a></div>

                  <div><a href="#" class="d-block js-dropdown-link">Business</a></div>

                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="relative overflow-hidden pt-40 sm:pt-20 js-section-slider" data-gap="30" data-scrollbar data-slider-cols="xl-4 lg-3 md-2 sm-2 base-1" data-nav-prev="js-hotels-prev" data-pagination="js-hotels-pag" data-nav-next="js-hotels-next">
          <div class="swiper-wrapper">
          @isset($top_packages)
            @foreach($top_packages as $packag_res)
            <div class="swiper-slide">

              <a href="{{ URL::to('package_details/'.$packag_res->id.'') }}" class="hotelsCard -type-1 ">
                <div class="hotelsCard__image">

                  <div class="cardImage ratio ratio-1:1">
                    <div class="cardImage__content">


                      <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider" style="height:100%;">
                        <div class="swiper-wrapper">

                          <div class="swiper-slide">
                            <img class="col-12" src="{{ asset('public/images/Packages/'.$packag_res->feacture_img.'') }}" style="width:100%;height:100%;" alt="image">
                          </div>

                          <div class="swiper-slide">
                            <img class="col-12" src="{{ asset('public/images/Packages/'.$packag_res->baaner_img.'') }}" style="width:100%;height:100%;" alt="image">
                          </div>

                        </div>

                        <div class="cardImage-slider__pagination js-pagination"></div>

                        <div class="cardImage-slider__nav -prev">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                            <i class="icon-chevron-left text-10"></i>
                          </button>
                        </div>

                        <div class="cardImage-slider__nav -next">
                          <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                            <i class="icon-chevron-right text-10"></i>
                          </button>
                        </div>
                      </div>

                    </div>
                    <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                      Best Seller
                    </div>
                  </div>
                    <div class="cardImage__wishlist">
                      <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                        <i class="icon-heart text-12"></i>
                      </button>
                    </div>


                  </div>

                </div>

                <div class="hotelsCard__content mt-10">
                  <h4 class="hotelsCard__title text-dark-1 text-18 lh-16 fw-500">
                    <span>{{ Str::limit($packag_res->package_title,40) }}</span>
                  </h4>

                  <div style="display:flex;">
                    <div class="icon-location-2 text-light-1 text-12 pt-4" style="margin: 5px;"></div>
                    <p class="text-light-1 lh-14 text-14 mt-5">{{ $packag_res->packageDestination->dest_name }}</p>

                  </div>
                  
                  <div class="d-flex items-center mt-20">
                    <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">{{ $packag_res->stars_rating }}.0</div>
                    <div class="icon-star text-yellow-1 text-10 mr-5"></div>
                    <div class="text-14 text-dark-1 fw-500 ml-10">Package Duration</div>
                    <div class="text-14 text-light-1 ml-10">{{ $packag_res->duration }} Days</div>
                  </div>

                  <div class="mt-5">
                    <div class="fw-500">
                      Starting from <span class="text-blue-1">US ${{ $packag_res->adult_sale_price }}</span>
                    </div>
                  </div>
                </div>
              </a>

            </div>
            @endforeach
          @endisset


          </div>


          <div class="d-flex x-gap-15 items-center justify-center sm:justify-start pt-40 sm:pt-20">
            <div class="col-auto">
              <button class="d-flex items-center text-24 arrow-left-hover js-hotels-prev">
                <i class="icon icon-arrow-left"></i>
              </button>
            </div>

            <div class="col-auto">
              <div class="pagination -dots text-border js-hotels-pag"></div>
            </div>

            <div class="col-auto">
              <button class="d-flex items-center text-24 arrow-right-hover js-hotels-next">
                <i class="icon icon-arrow-right"></i>
              </button>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="layout-pt-md layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up" class="row y-gap-20 justify-between items-end">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Trending Activity</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>

          <div class="col-auto">

            <a href="#" class="button -md -blue-1 bg-blue-1-05 text-blue-1">
              More <div class="icon-arrow-top-right ml-15"></div>
            </a>

          </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">

        @isset($top_activities)
            @foreach($top_activities as $activity_res)
          <div data-anim-child="slide-up delay-{{ $loop->iteration }}" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="{{ URL::to('activity_details/'.$activity_res->id.'') }}" class="activityCard -type-1 rounded-4 ">
              <div class="activityCard__image">

                <div class="cardImage ratio ratio-1:1">
                  <div class="cardImage__content">


                    <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider" style="height:100%;">
                      <div class="swiper-wrapper">

                        <div class="swiper-slide">
                          <img class="col-12" src="{{ asset('public/images/Activities/'.$activity_res->feacture_img.'') }}" style="width:100%;height:100%;" alt="image">
                        </div>

                        <div class="swiper-slide">
                          <img class="col-12" src="{{ asset('public/images/Activities/'.$activity_res->baaner_img.'') }}" style="width:100%;height:100%;" alt="image">
                        </div>

                        

                      </div>

                      <div class="cardImage-slider__pagination js-pagination"></div>

                      <div class="cardImage-slider__nav -prev">
                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                          <i class="icon-chevron-left text-10"></i>
                        </button>
                      </div>

                      <div class="cardImage-slider__nav -next">
                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                          <i class="icon-chevron-right text-10"></i>
                        </button>
                      </div>
                    </div>

                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                </div>

              </div>

              <div class="activityCard__content mt-10">
                <div class="text-14 lh-14 text-light-1 mb-5">{{ $activity_res->activity_duration }}+ hours</div>

                <h4 class="activityCard__title lh-16 fw-500 text-dark-1 text-18">
                  <span>{{ $activity_res->activity_title }}</span>
                </h4>

                <div style="display:flex;">
                    <div class="icon-location-2 text-light-1 text-12 pt-4" style="margin: 5px;"></div>
                    <p class="text-light-1 lh-14 text-14 mt-5">{{ $activity_res->activity_palce_address }}</p>

                  </div>
                  
                <div class="row justify-between items-center pt-10">
                  <div class="col-auto">
                    <div class="d-flex items-center">
                      <div class="icon-star text-yellow-1 text-10 mr-5"></div>

                      <div class="text-14 text-light-1">
                        <span class="text-15 text-dark-1 fw-500">{{ $activity_res->stars_rating }}</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="text-14 text-light-1">
                      From <span class="text-16 fw-500 text-dark-1">US${{ $activity_res->adult_sale_price }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </a>

          </div>
            @endforeach
          @endisset

          

        </div>
      </div>
    </section>

    

    <section class="layout-pt-md layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up" class="row y-gap-20 justify-between items-end">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Popular Car Hire</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames ac ante ipsum</p>
            </div>
          </div>

          <div class="col-auto">

            <a href="#" class="button -md -blue-1 bg-blue-1-05 text-blue-1">
              More <div class="icon-arrow-top-right ml-15"></div>
            </a>

          </div>
        </div>

        <div class="row y-gap-30 pt-40 sm:pt-20">

          <div data-anim-child="slide-up delay-1" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="car-single.html" class="carCard -type-1 d-block rounded-4 ">
              <div class="carCard__image">

                <div class="cardImage ratio border-light ratio-6:5">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="{{ asset('public/frontend/img/cars/1.png') }}" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                </div>

              </div>

              <div class="carCard__content mt-10">
                <div class="d-flex items-center lh-14 mb-5">
                  <div class="text-14 text-light-1">Heathrow Airport</div>
                  <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                  <div class="text-14 text-light-1 uppercase">Luxury</div>
                </div>

                <h4 class="text-dark-1 text-18 lh-16 fw-500">
                  Mercedes-Benz E-Class <span class="text-15 text-light-1 fw-400">or similar</span>
                </h4>
                <p class="text-light-1 lh-14 text-14 mt-5"></p>

                <div class="row x-gap-20 y-gap-10 items-center pt-5">
                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-user-2 mr-10"></i>
                      <div class="lh-14">4</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-luggage mr-10"></i>
                      <div class="lh-14">1</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-transmission mr-10"></i>
                      <div class="lh-14">Automatic </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-speedometer mr-10"></i>
                      <div class="lh-14">Unlimited</div>
                    </div>
                  </div>
                </div>

                <div class="d-flex items-center mt-20">
                  <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-dark-1">4.8</div>
                  <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                  <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                </div>

                <div class="mt-5">
                  <div class="text-light-1">
                    <span class="fw-500 text-dark-1">US$72</span> total
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-2" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="car-single.html" class="carCard -type-1 d-block rounded-4 ">
              <div class="carCard__image">

                <div class="cardImage ratio border-light ratio-6:5">
                  <div class="cardImage__content">


                    <div class="cardImage-slider rounded-4 overflow-hidden js-cardImage-slider">
                      <div class="swiper-wrapper">

                        <div class="swiper-slide">
                          <img class="col-12" src="{{ asset('public/frontend/img/cars/2.png') }}" alt="image">
                        </div>

                        <div class="swiper-slide">
                          <img class="col-12" src="{{ asset('public/frontend/img/cars/3.png') }}" alt="image">
                        </div>

                        <div class="swiper-slide">
                          <img class="col-12" src="{{ asset('public/frontend/img/cars/1.png') }}" alt="image">
                        </div>

                      </div>

                      <div class="cardImage-slider__pagination js-pagination"></div>

                      <div class="cardImage-slider__nav -prev">
                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-prev">
                          <i class="icon-chevron-left text-10"></i>
                        </button>
                      </div>

                      <div class="cardImage-slider__nav -next">
                        <button class="button -blue-1 bg-white size-30 rounded-full shadow-2 js-next">
                          <i class="icon-chevron-right text-10"></i>
                        </button>
                      </div>
                    </div>

                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                </div>

              </div>

              <div class="carCard__content mt-10">
                <div class="d-flex items-center lh-14 mb-5">
                  <div class="text-14 text-light-1">Heathrow Airport</div>
                  <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                  <div class="text-14 text-light-1 uppercase">Suv</div>
                </div>

                <h4 class="text-dark-1 text-18 lh-16 fw-500">
                  Jaguar F-Pace <span class="text-15 text-light-1 fw-400">or similar</span>
                </h4>
                <p class="text-light-1 lh-14 text-14 mt-5"></p>

                <div class="row x-gap-20 y-gap-10 items-center pt-5">
                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-user-2 mr-10"></i>
                      <div class="lh-14">4</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-luggage mr-10"></i>
                      <div class="lh-14">1</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-transmission mr-10"></i>
                      <div class="lh-14">Automatic </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-speedometer mr-10"></i>
                      <div class="lh-14">Unlimited</div>
                    </div>
                  </div>
                </div>

                <div class="d-flex items-center mt-20">
                  <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-dark-1">4.8</div>
                  <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                  <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                </div>

                <div class="mt-5">
                  <div class="text-light-1">
                    <span class="fw-500 text-dark-1">US$72</span> total
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-3" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="car-single.html" class="carCard -type-1 d-block rounded-4 ">
              <div class="carCard__image">

                <div class="cardImage ratio border-light ratio-6:5">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="{{ asset('public/frontend/img/cars/3.png') }}" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                  <div class="cardImage__leftBadge">
                    <div class="py-5 px-15 rounded-right-4 text-12 lh-16 fw-500 uppercase bg-blue-1 text-white">
                      Best Seller
                    </div>
                  </div>

                </div>

              </div>

              <div class="carCard__content mt-10">
                <div class="d-flex items-center lh-14 mb-5">
                  <div class="text-14 text-light-1">Heathrow Airport</div>
                  <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                  <div class="text-14 text-light-1 uppercase">Suv</div>
                </div>

                <h4 class="text-dark-1 text-18 lh-16 fw-500">
                  Volvo XC90 <span class="text-15 text-light-1 fw-400">or similar</span>
                </h4>
                <p class="text-light-1 lh-14 text-14 mt-5"></p>

                <div class="row x-gap-20 y-gap-10 items-center pt-5">
                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-user-2 mr-10"></i>
                      <div class="lh-14">4</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-luggage mr-10"></i>
                      <div class="lh-14">1</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-transmission mr-10"></i>
                      <div class="lh-14">Automatic </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-speedometer mr-10"></i>
                      <div class="lh-14">Unlimited</div>
                    </div>
                  </div>
                </div>

                <div class="d-flex items-center mt-20">
                  <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-dark-1">4.8</div>
                  <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                  <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                </div>

                <div class="mt-5">
                  <div class="text-light-1">
                    <span class="fw-500 text-dark-1">US$72</span> total
                  </div>
                </div>
              </div>
            </a>

          </div>

          <div data-anim-child="slide-up delay-4" class="col-xl-3 col-lg-3 col-sm-6">

            <a href="car-single.html" class="carCard -type-1 d-block rounded-4 ">
              <div class="carCard__image">

                <div class="cardImage ratio border-light ratio-6:5">
                  <div class="cardImage__content">

                    <img class="rounded-4 col-12" src="{{ asset('public/frontend/img/cars/4.png') }}" alt="image">


                  </div>

                  <div class="cardImage__wishlist">
                    <button class="button -blue-1 bg-white size-30 rounded-full shadow-2">
                      <i class="icon-heart text-12"></i>
                    </button>
                  </div>


                </div>

              </div>

              <div class="carCard__content mt-10">
                <div class="d-flex items-center lh-14 mb-5">
                  <div class="text-14 text-light-1">Heathrow Airport</div>
                  <div class="size-3 bg-light-1 rounded-full ml-10 mr-10"></div>
                  <div class="text-14 text-light-1 uppercase">Luxury</div>
                </div>

                <h4 class="text-dark-1 text-18 lh-16 fw-500">
                  BMW 5 Series <span class="text-15 text-light-1 fw-400">or similar</span>
                </h4>
                <p class="text-light-1 lh-14 text-14 mt-5"></p>

                <div class="row x-gap-20 y-gap-10 items-center pt-5">
                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-user-2 mr-10"></i>
                      <div class="lh-14">4</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-luggage mr-10"></i>
                      <div class="lh-14">1</div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-transmission mr-10"></i>
                      <div class="lh-14">Automatic </div>
                    </div>
                  </div>

                  <div class="col-auto">
                    <div class="d-flex items-center text-14 text-dark-1">
                      <i class="icon-speedometer mr-10"></i>
                      <div class="lh-14">Unlimited</div>
                    </div>
                  </div>
                </div>

                <div class="d-flex items-center mt-20">
                  <div class="flex-center bg-yellow-1 rounded-4 size-30 text-12 fw-600 text-dark-1">4.8</div>
                  <div class="text-14 text-dark-1 fw-500 ml-10">Exceptional</div>
                  <div class="text-14 text-light-1 ml-10">3,014 reviews</div>
                </div>

                <div class="mt-5">
                  <div class="text-light-1">
                    <span class="fw-500 text-dark-1">US$72</span> total
                  </div>
                </div>
              </div>
            </a>

          </div>

        </div>
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-lg bg-dark-3">
      <div class="container">
        <div class="row y-gap-60">
          <div class="col-xl-5 col-lg-6">
            <h2 class="text-30 text-white">What our customers are<br> saying us?</h2>
            <p class="text-white mt-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius tortor nibh, sit amet tempor nibh finibus et. Aenean eu enim justo.</p>

            <div class="row y-gap-30 text-white pt-60 lg:pt-40">
              <div class="col-sm-5 col-6">
                <div class="text-30 lh-15 fw-600">13m+</div>
                <div class="lh-15">Happy People</div>
              </div>

              <div class="col-sm-5 col-6">
                <div class="text-30 lh-15 fw-600">4.88</div>
                <div class="lh-15">Overall rating</div>

                <div class="d-flex x-gap-5 items-center pt-10">

                  <div class="icon-star text-white text-10"></div>

                  <div class="icon-star text-white text-10"></div>

                  <div class="icon-star text-white text-10"></div>

                  <div class="icon-star text-white text-10"></div>

                  <div class="icon-star text-white text-10"></div>

                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-10">


            <div class="testimonials-slider-2 js-testimonials-slider-2">
              <div class="swiper-wrapper">

              @isset($last_reviews)
                @foreach($last_reviews as $review_res)
                <div class="swiper-slide">
                  <div class="testimonials -type-1 bg-white rounded-4 pt-40 pb-30 px-40 shadow-2">
                    <div class="">
                      <p class="testimonials__text lh-18 fw-500 text-dark-1" style="height:145px;">&quot;{{ Str::limit($review_res->review,200) }}.&quot;</p>

                      <div class="pt-20 mt-28 border-top-light">
                        <div class="row x-gap-20 y-gap-20 items-center">
                          <div class="col-md-4">
                            <img src="{{ asset('public/images/Reviews/'.$review_res->picture.'') }}" style="width: 75px;border-radius: 50%;height: 75px;" alt="image">
                          </div>

                          <div class="col-md-8">
                            <div class="text-15 fw-500 lh-14">{{ $review_res->name }}</div>
                            <div class="text-14 lh-14 text-light-1 mt-5">
                                <div class="d-flex items-center mt-20">
                                  <div class="flex-center bg-blue-1 rounded-4 size-30 text-12 fw-600 text-white">{{ $review_res->ratings }}</div>
                                  <div class="icon-star text-yellow-1 text-10 mr-5"></div>
                                  <h6>Rating</h6>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              @endisset

              </div>


              <div class="d-flex x-gap-15 items-center justify-center pt-30">
                <div class="col-auto">
                  <button class="d-flex items-center text-24 arrow-left-hover text-white js-prev">
                    <i class="icon icon-arrow-left"></i>
                  </button>
                </div>

                <div class="col-auto">
                  <div class="pagination -dots text-white-50 js-pagination"></div>
                </div>

                <div class="col-auto">
                  <button class="d-flex items-center text-24 arrow-right-hover text-white js-next">
                    <i class="icon icon-arrow-right"></i>
                  </button>
                </div>
              </div>

            </div>
          </div>
        </div>

      
      </div>
    </section>

    <section class="layout-pt-lg layout-pb-md">
      <div data-anim-wrap class="container">
        <div data-anim-child="slide-up delay-1" class="row">
          <div class="col-auto">
            <div class="sectionTitle -md">
              <h2 class="sectionTitle__title">Our Top Articles</h2>
              <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames</p>
            </div>
          </div>
        </div>

        <div class="row y-gap-30 pt-40">

        @isset($last_blogs)
          @foreach($last_blogs as $blog_res)
          <div data-anim-child="slide-up delay-{{ $loop->iteration }}" class="col-lg-3 col-sm-6">

            <a href="" class="blogCard -type-1 d-block ">
              <div class="blogCard__image">
                <div class="ratio ratio-1:1 rounded-4 rounded-8">
                  <img class="img-ratio js-lazy" src="#" data-src="{{ asset('public/images/blogs/'.$blog_res->picture.'') }}" alt="image">
                </div>
              </div>

              <div class="mt-20">
                <h4 class="text-dark-1 text-18 fw-500">{{ Str::limit($blog_res->title,50) }}</h4>
                <div class="text-light-1 text-15 lh-14 mt-5">{{ date('F d Y',strtotime($blog_res->created_at)) }}</div>
              </div>
            </a>

          </div>
          @endforeach
        @endisset

          
        </div>
      </div>
    </section>
    

    

  @endsection

  @section('scripts')
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script> -->

    <script>
      function liveSearch() {
        const targets = document.querySelectorAll('.js-liverSearch')
        if (!targets) return

        const destinations = '<?php echo json_encode($all_destinations); ?>';
        const data = JSON.parse(destinations); 
        console.log(data);
        targets.forEach(el => {
          const search = el.querySelector('.js-search')
          const results = el.querySelector('.js-results')
          let searchTerm = ''

          results.querySelectorAll('.js-search-option').forEach(option => {
            const title = option.querySelector('.js-search-option-target').innerHTML
            const dest_id = option.querySelector('.destination_id').value

            // dest_id
            option.addEventListener('click', () => {
              search.value = title
              $('#destination_id') = title
              el.querySelector('.js-popup-window').classList.remove('-is-active')
            })
          })

          search.addEventListener('input', (event) => {
            searchTerm = event.target.value.toLowerCase()
            showList(searchTerm, results)

            results.querySelectorAll('.js-search-option').forEach(option => {
              const title = option.querySelector('.js-search-option-target').innerHTML

              option.addEventListener('click', () => {
                search.value = title
                el.querySelector('.js-popup-window').classList.remove('-is-active')
              })
            })
          })
        })

        const showList = (searchTerm, resultsEl) => {
          resultsEl.innerHTML = '';

          data
            .filter((item) => item.city.toLowerCase().includes(searchTerm))
            .forEach((e) => {
              const div = document.createElement('div')

              div.innerHTML = `
                <button type="button" class="-link d-block col-12 text-left rounded-4 px-20 py-15 js-search-option">
                  <div class="d-flex">
                    <div class="icon-location-2 text-light-1 text-20 pt-4"></div>
                    <div class="ml-10">
                      <div class="text-15 lh-12 fw-500 js-search-option-target">${e.city}</div>
                      <div class="text-14 lh-12 text-light-1 mt-5">${e.country}</div>
                      <input type="text" class="destination_id" value="${e.id}">
                    </div>
                  </div>
                </button>
              `

              resultsEl.appendChild(div)
            })
        }
      }
    </script>
  @endsection

