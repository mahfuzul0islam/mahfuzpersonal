@extends('home.index')
@section('title')
    &mdash; Works
@endsection
@section('banner-title')
{{ $singlework->work_title }}
@endsection

@section('banner-text')
    "You can have a website similar to this one! Reach out and mention the title you're interested in. Thank you for
    checking out this project!"
@endsection



@section('home')
    <div class="site-wrap" id="home-section">
        @include('home.layout.navbar')
        @include('home.layout.banner')

        <div class="site-section bg-light">
            <div class="container">
                <div class=" justify-content-between mb-5">
                    <!-- header section  -->
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <img src="{{ !empty($singlework->title_image) ? url('upload/images/' . $singlework->title_image) : url('default/no_image.jpg') }}"
                                alt="Image" class="img-fluid">
                        </div>

                        <div class="col-md-6 mt-3">
                            <div class="mb-4">
                                <strong class="text-black font-weight-bold">Work Title:</strong>
                                <p>{{ $singlework->work_title }}</p>
                            </div>
                            <div class="mb-4">
                                <strong class="text-black font-weight-bold">Date Project:</strong>
                                <p> {{ $singlework->working_dates }} </p>
                            </div>
                            <div class="mb-4">
                                <strong class="text-black font-weight-bold">Client:</strong>
                                <p>{{ $singlework->client }}</p>
                            </div>
                            <div class="mb-4">
                                <strong class="text-black font-weight-bold">Website:</strong>
                                <p><a href="{{ $singlework->website }}" target="blank">{{ $singlework->website }}</a></p>
                            </div>
                        </div>
                    </div>

                    <!-- an other section  -->
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <h3 class="text-capitalize">{{ $singlework->First_title }}</h3>
                            <p>{{ $singlework->First_detail }}</p>
                        </div>
                        <div class="col-md-6 mt-3">
                            <img src="{{ !empty($singlework->First_image) ? url('upload/images/' . $singlework->First_image) : url('default/no_image.jpg') }}"
                                alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <!-- section end  -->
                    <!-- an other section  -->
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <img src="{{ !empty($singlework->second_image) ? url('upload/images/' . $singlework->second_image) : url('default/no_image.jpg') }}"
                                alt="Image" class="img-fluid">
                        </div>
                        <div class="col-md-6 mt-3">
                            <h3 class="text-capitalize">{{ $singlework->second_title }}</h3>
                            <p>{{ $singlework->second_detail }}</p>
                        </div>

                    </div>
                    <!-- section end  -->
                    
                    <!-- an other section  -->
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <h3 class="text-capitalize">{{ $singlework->third_title }}</h3>
                            <p>{{ $singlework->third_detail }}</p>
                        </div>
                        <div class="col-md-6 mt-3">
                            <img src="{{ !empty($singlework->third_image) ? url('upload/images/' . $singlework->third_image) : url('default/no_image.jpg') }}"
                                alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <!-- section end  -->
                    <!-- an other section  -->
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <img src="{{ !empty($singlework->forth_image) ? url('upload/images/' . $singlework->forth_image) : url('default/no_image.jpg') }}"
                                alt="Image" class="img-fluid">
                        </div>
                        <div class="col-md-6 mt-3">
                            <h3 class="text-capitalize">{{ $singlework->forth_title }}</h3>
                            <p>{{ $singlework->forth_detail }}</p>
                        </div>

                    </div>
                    <!-- section end  -->
                    <!-- an other section  -->
                    <div class="row">
                      <div class="col-md-6 mt-3">
                        <h3 class="text-capitalize">{{ $singlework->fifth_title }}</h3>
                        <p>{{ $singlework->fifth_detail }}</p>
                    </div>
                        <div class="col-md-6 mt-3">
                            <img src="{{ !empty($singlework->fifth_image) ? url('upload/images/' . $singlework->fifth_image) : url('default/no_image.jpg') }}"
                                alt="Image" class="img-fluid">
                        </div>
                    </div>
                    <!-- section end  -->
                </div>
            </div>
        </div>

        @include('home.layout.mywork')



        @include('home.layout.footer')



    </div>
@endsection
