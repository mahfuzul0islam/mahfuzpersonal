@extends('home.index')
@section('title')
    &mdash; Contacts
@endsection
@section('banner-title')
    Contact Me
@endsection

@section('banner-text')
    I'm here to assist you with any kind of information or services you may need. Whether you're looking for assistance or
    have inquiries, feel free to reach out to me. I'm dedicated to providing you with prompt and reliable support. Thank you
    for considering my services!
@endsection



@section('home')
    <div class="site-wrap" id="home-section">
        @include('home.layout.navbar')
        @include('home.layout.banner')

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5">
                        @if (session()->has('message'))
                            <div class="alert alert-{{ session()->get('alert-type') }} alert-dismissible" id="sessionAlert">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger d-flex align-items-center alert-dismissible" id="errorAlert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li class="text-capitalize mt-3">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('home.contact.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-md-6 mb-4 mb-lg-0">
                                    <input type="text" class="form-control" placeholder="First name" name="first_name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Topic" name="topic">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Email address" name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea id class="form-control" placeholder="Write your message." cols="30" rows="10" name="message"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 mr-auto">
                                    <button type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                        onclick="return submitAction()">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 ml-auto">
                        <div class="bg-white p-3 p-md-5">
                            <h3 class="text-black mb-4">Contact Info</h3>
                            <ul class="list-unstyled footer-link">
                                <li class="d-block mb-3">
                                    <span class="d-block text-black">Current Address:</span>
                                    <span class="text-capitalize">{{ $address->address }}</span>
                                </li>
                                <li class="d-block mb-3">
                                    <span class="d-block text-black">Permanent Address:</span>
                                    <span>Digholia, Khulna, Bangladesh</span>
                                </li>
                                <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942
                                        290</span></li>
                                <li class="d-block mb-3"><span
                                        class="d-block text-black">Email:</span><span>mahfuzul1125@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        @include('home.layout.footer')



    </div>
    <script>
        // Hide alerts after 5 seconds
        setTimeout(() => {
            const sessionAlert = document.getElementById('sessionAlert');
            if (sessionAlert) {
                sessionAlert.style.display = 'none';
            }

            const errorAlert = document.getElementById('errorAlert');
            if (errorAlert) {
                errorAlert.style.display = 'none';
            }
        }, 5000);
    </script>
@endsection
