<div class="site-section bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-7 mx-auto text-center">
                <h2 class="heading-29190">Posts</h2>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 mb-4">
                    
                    <div class="post-entry-1 h-100">
                        <span class="">
                            <img src="{{ !empty($post->image) ? url('upload/images/' . $post->image) : url('default/no_image.jpg') }}"
                                alt="Image" class="img-fluid ">
                        </span>
                        <div class="post-entry-1-contents rounded">
                            <h2><a href="{{$post->post_link}}" target="_blank">{{$post->title}}</a></h2>
                            <span class="meta d-inline-block mb-3">Posted<span class="mx-2">on</span>
                                    <span class="fw-bold text-success">{{$post->posted_on}}</span></span>
                            <p>{{$post->discription}}</p>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
