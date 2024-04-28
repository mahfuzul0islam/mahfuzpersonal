@extends('admin.index')
@section('title')
    My Posts
@endsection
@section('main')
    {{-- single post add here here --}}
    <div class="col-xl-6 col-lg-12 stretch-card  grid-margin">
        <div class="card shadow rounded">
            <div class="card-body">
                <h4>Add Posts Here:</h4>
                <img src="{{ !empty($post->image) ? url('upload/images/' . $post->image) : url('default/no_image.jpg') }}"class="img-fluid mb-2" alt="" id="showpostimage">
                <form action="{{route('admin.store.posts')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="file" class="form-control border border-secondary rounded-3" id="uppostimage" name="image">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control border border-secondary rounded-3"
                            placeholder="Add Title" name="title">
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <select class="form-select" aria-label="Default select example" name="posted_on">
                                <option selected class="text-secondary">Posted On</option>
                                <option value="Linkedin">Linkedin</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Instagram">Instagram</option>
                              </select>
                        </div>
                        <div class="col-md-8">
                            <input type="text" class="form-control border border-secondary rounded-3" placeholder="Post Link" name="post_link">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea  id="" rows="10" class="form-control border border-secondary mt-3 rounded-3" placeholder="Add Post Description" name="discription"></textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Post</button>

                </form>

            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        @foreach ($posts as $post)
            
        
        {{-- single card starts here --}}
        <div class="col-xl-3 col-lg-12 stretch-card  grid-margin">
            <div class="card shadow rounded">
                <div class="card-body">
                    <img src="{{ !empty($post->image) ? url('upload/images/' . $post->image) : url('default/no_image.jpg') }}"class="img-fluid mb-2" alt="">
                    <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 text-dark">
                        <h4>
                           {{$post->title}}
                        </h4>
                    </a>
                    <p>Posted on <span class="fst-italic text-primary">{{$post->posted_on}}</span>
                        On <span class="fst-italic">{{ $post->created_at->format('d-M-y') }}</span>
                    </p>
                    <p>
                        {{$post->discription}}
                    </p>
                    <a href="{{route('admin.posts.delete',$post->id)}}" onclick="return deleteAction()" class="btn btn-danger" >Delete Post</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <script>
        //to show image
        $(document).ready(function() {
            $('#uppostimage').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showpostimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        })
    </script>
@endsection
