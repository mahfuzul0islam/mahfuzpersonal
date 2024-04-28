@extends('home.index')
@section('title')
    &mdash; Posts
@endsection
@section('banner-title')
    Posts
@endsection

@section('banner-text')
    "I regularly share my work on social media. Feel free to check it out and consider following me for updates!"
@endsection



@section('home')
    <div class="site-wrap" id="home-section">
        @include('home.layout.navbar')
        @include('home.layout.banner')

        <div class="site-section bg-light">
            <div class="container">
                <div class="row">
                    <!-- this is it  -->
                    @foreach ($posts as $post)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="post-entry-1 h-100">
                                <a href="#">
                                    <img src="{{ !empty($post->image) ? url('upload/images/' . $post->image) : url('default/no_image.jpg') }}"
                                        alt="Image" class="img-fluid">
                                </a>
                                <div class="post-entry-1-contents">
                                    <h2><a href="{{ $post->post_link }}" target="_blank">{{ $post->title }}</a></h2>
                                    <span class="meta d-inline-block mb-3">Posted<span class="mx-2">on</span>
                                        <span class="fw-bold text-success">{{ $post->posted_on }}</span></span>
                                    <p>{{ $post->discription }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach





                </div>

            </div>
        </div>




        @include('home.layout.footer')



    </div>
@endsection
