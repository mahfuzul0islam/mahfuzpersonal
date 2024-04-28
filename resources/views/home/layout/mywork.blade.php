<div class="site-section ">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 mx-auto text-center">
                <h2 class="heading-29190">My Works</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($works as $work)
                
            
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="item web">
                    <a href="{{route('home.work.single',$work->id)}}" class="item-wrap">
                        <span > View Work </span>  
                        <img class="img-fluid" src="{{ !empty($work->title_image) ? url('upload/images/' . $work->title_image) : url('default/no_image.jpg') }}">
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>