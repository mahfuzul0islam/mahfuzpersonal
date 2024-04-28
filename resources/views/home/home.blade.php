@extends('home.index')

@section('title')
     Web Agency
@endsection
@section('banner-title')
    Mahfuz Web Design Agency
@endsection
@section('banner-text')
    Excited to help new businesses with the latest tech and awesome websites.
    We're all about
    being creative and making sure users love what we do..
@endsection

@section('banner-button')
    <p><a href="{{ route('home.contact') }}" class="btn btn-primary btn-outline-white py-3 px-5">Contact Me</a></p>
@endsection

@section('home')
    <div class="site-wrap" id="home-section">
        @include('home.layout.navbar')
        @include('home.layout.banner')
        @include('home.layout.aboutme')
        @include('home.layout.service')
        @include('home.layout.mywork')
        @include('home.layout.posts')
        @include('home.layout.footer')



    </div>
@endsection
