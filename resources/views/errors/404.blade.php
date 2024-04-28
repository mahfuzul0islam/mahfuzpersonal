@extends('home.index')

@section('title')
     404
@endsection



@section('home')
    <div class="site-wrap" id="home-section">
        <div class="ftco-blocks-cover-1">
            <div class="site-section-cover overlay"
                style="background-image: url('{{ asset('default/custom_404.jpg')}}')">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7 text-center">
                            <h1 class="mb-4 text-white">4 0 4</h1>
                            <p class="mb-4">There is no page. Please go back</p>
                            <p><a href="{{ route('home.index') }}" class="btn btn-primary btn-outline-white py-3 px-5">Home</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        @include('home.layout.footer')



    </div>
@endsection
