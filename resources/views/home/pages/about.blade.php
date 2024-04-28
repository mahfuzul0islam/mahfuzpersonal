@extends('home.index')
@section('title')
    &mdash; About Me
@endsection
@section('banner-title')
    About Me
@endsection

@section('banner-text')
"This webpage is dedicated to me. Feel free to explore and learn more about who I am!"
@endsection



@section('home')
    <div class="site-wrap" id="home-section">
        @include('home.layout.navbar')
        @include('home.layout.banner')
        @include('home.layout.aboutme')


        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <h3 class="text-capitalize">{{$about->title}} :</h3>
                        <p>{{$about->description}}</p>
                        <br><br>
                        <a href="#">Verify This</a>
                    </div>
                    <div class="col-md-6 mt-3">
                        <img src="{{ !empty($about->image) ? url('upload/images/' . $about->image) : url('default/my_no_image.png') }}" alt="Image" class="img-fluid  shadow">
                    </div>
                </div>
            </div>
        </div>



        @include('home.layout.footer')



    </div>
@endsection
