@extends('admin.index')
@section('title')
    Abouts, Skills And Address
@endsection
@section('main')
    {{-- sliks part start  --}}
    <div class="row mb-5">
        <div class="col-md-7">
            <div class="card mt-3">
                <div class="card-body">

                    <h3>
                        My expertise and skills
                    </h3>


                    <form class="row mt-3" action="{{ route('admin.store.skills') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6 mt-2">
                            <input type="text" class="form-control border  border-dark rounded-3 " name="title"
                                placeholder="My expertise and skills">
                        </div>
                        <div class="col-md-3 mt-2">
                            <input type="text" class="form-control border  border-info text-info rounded-3 "
                                name="duration" placeholder="Duration">
                        </div>
                        <div class="col-md-3 mt-2 ">
                            <button type="submit" class="btn btn-primary text-light"><i class="mdi mdi-plus"></i> Add
                                Skills</button>
                        </div>
                    </form>
                    @foreach ($skills as $skill)
                        <div class="row mt-3">
                            <div class="col-md-7">{{ $skill->title }}</div>
                            <div class="col-md-2 text-info ">{{ $skill->duration }}</div>
                            <div class="col-md-3">
                                <a href="{{ route('admin.delete.skill', $skill->id) }}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                        <hr>
                    @endforeach

                </div>
            </div>
        </div>
        {{-- address  --}}
        <div class="col-md-5">
            <div class="card mt-3">
                <div class="card-body">
                    <h3>
                        Curent Address
                    </h3>

                    <p class="text-capitalize">
                        -> {{ $address->address }}
                    </p>

                    <form class="row my-3 " action="{{ route('admin.update.address', $address->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-6">
                            <input type="text" class="form-control border  border-dark rounded-3"
                                placeholder="Current Address" name="address">
                        </div>
                        <div class="col-3">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- about add section starts here  -->
    <div class="row">
        <div class="col-xl-9 col-lg-12 stretch-card  grid-margin">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3">
                            <h3>
                                Update About Image :
                            </h3>
                            <img src="{{ !empty($about->image) ? url('upload/images/' . $about->image) : url('default/my_image.jpg') }}"
                                class="img-fluid " alt="" id="showaboutimage">
                        </div>
                        <div class="col-xl-9">
                            <h3>About Image Description :</h3>
                            <form action="{{ route('admin.update.about', $about->id) }}" method="POST"
                                enctype="multipart/form-data" class="mt-3">
                                @csrf
                                <div class="col-xl-7">
                                    <input type="file" class="form-control border border-secondary  rounded-3"
                                        name="image" id="upaboutimage">
                                </div>
                                <div class="col-xl-7 mt-3">
                                    <input type="text" class="form-control border border-secondary  rounded-3"
                                        placeholder="About Title" name="title" value="{{ $about->title }}">
                                </div>
                                <div class="col-xl-12">
                                    <textarea  id="" rows="18" class="form-control border border-secondary mt-3 rounded-3"
                                        placeholder="About Description :" name="description"  >{{ $about->description }}</textarea>
                                </div>
                                <div class="col-xl-7 mt-3">
                                    <input type="text" class="form-control border border-secondary  rounded-3"
                                        placeholder="About Link" name="link" value="{{ $about->link}}">
                                </div>
                                <div class="my-3">
                                    <button type="submit" class="btn btn-success text-light" onclick="return updateAction()">Add A New About</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </div>
    <!-- about add section ends here  -->
    <!-- about section starts here  -->
    
    <!-- about section ends here  -->
    <script>
        //to show image
        $(document).ready(function() {
            $('#upaboutimage').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showaboutimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })

        })
    </script>
@endsection
