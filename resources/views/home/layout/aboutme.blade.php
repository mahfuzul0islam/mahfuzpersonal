<div class="site-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <h2 class="h4 mb-4">About Me</h2>
                <p>Hey there! I'm Mahfuzul Islam, a Laravel developer with a focus on user-friendly websites. I
                    love
                    combining tech with clear communication to make projects shine. Let's build something
                    awesome together!
                </p>
                <hr>
                <p>Feel free to check out my works here!</p>
                <p><a href="{{route('home.work')}}" class="btn btn-primary text-white px-5 shadow">My works</a></p>
            </div>
            <div class="col-md-4 ">

                <img src="{{ !empty($image->my_image) ? url('upload/images/' . $image->my_image) : url('default/my_no_image.png') }}" alt="Image" class="img-fluid  shadow">
                
            </div>
            <div class="col-md-4">
                <h2 class="h4 mb-4">My expertise and skills</h2>
                @foreach ($skills as $skill)
                <div class="progress-wrap mb-4">
                    <div class="d-flex">
                        <span > {{$skill->title}} </span>
                        <span class="text-success mx-auto"> {{$skill->duration}} </span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
