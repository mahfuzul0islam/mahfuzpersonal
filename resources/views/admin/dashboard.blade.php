@extends('admin.index')
@section('title')
    Dashboard
@endsection
@section('main')
    <!-- top image and skills parts starts -->
    <div class="row">
        <div class="col-xl-3 col-lg-12  grid-margin">
            <div class="card">
                <div class="card-body">
                    <img src="{{ !empty($image->my_image) ? url('upload/images/' . $image->my_image) : url('default/my_image.jpg') }}"
                        alt="" class="img-fluid ">
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h3>
                        My expertise and skills
                    </h3>
                    @foreach ($skills as $skill)
                        <div class="row mt-3">
                            <div class="col-8">{{$skill->title}}</div>
                            <div class="col-4 text-info ">{{$skill->duration}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h3>
                        Curent Address
                    </h3>
                    <p>
                        {{$address->address}}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-9  grid-margin">
            <div class="card">
                <div class="card-body">
                    <img src="{{ !empty($image->banner_image) ? url('upload/images/' . $image->banner_image) : url('default/banner_image.jpg') }}"
                        alt="" class="img-fluid ">
                </div>
            </div>
        </div>
    </div>
    <!-- top image and skills parts ends -->
    <!-- about section starts here  -->
    <div class="row">
        <div class="col-xl-3 col-lg-12 stretch-card  grid-margin">
            <div class="card">
                <div class="card-body">
                    <img src="{{ !empty($about->image) ? url('upload/images/' . $about->image) : url('default/my_image.jpg') }}"
                        class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="col-xl-9 stretch-card grid-margin">
            <div class="card">
                <div class="card-body">
                    <h3 class="">
                        {{ $about->title }}
                    </h3>
                    <p>
                        {{ $about->description }}
                        <br>
                    </p>
                    <a href="{{ $about->link }}"
                        class="link link-success  link-infolink-offset-2 link-underline link-underline-opacity-0">Verify
                        link</a>
                </div>
            </div>
        </div>
    </div>
    <!-- about section ends here  -->
    <!-- my work section starts here  -->

    <div class="row">
        @foreach ($works as $work)
            <div class="col-xl-3 col-lg-12 stretch-card  grid-margin">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ !empty($work->title_image) ? url('upload/images/' . $work->title_image) : url('default/no_image.jpg') }}"class="img-fluid"
                            alt="">
                        <h4 class="mt-2">{{ $work->work_title }}</h4>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
    <!-- my work section ends here  -->
@endsection
