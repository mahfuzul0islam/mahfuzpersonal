@extends('admin.index')
@section('title')
    Banner Image
@endsection
@section('main')
    
    <div class="row">
        <div class="col-xl-3 col-lg-12  grid-margin">
            <div class="card">
                <h3 class="text-capitalize ps-3 pt-3">my image</h3>
                <div class="card-body">
                    <img src="{{ !empty($images->my_image) ? url('upload/images/' . $images->my_image) : url('default/my_image.jpg') }}"
                        alt="" class="img-fluid " id="showmyimage">

                </div>

            </div>
            <div class="card mt-3">
                <h3 class="text-capitalize ps-3 pt-3">image section</h3>
                
                <form action="{{ route('admin.images.update', $images->id) }}" id="confirmationForm" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h4 class="text-capitalize ps-3 pt-3">my image section</h4>
                    <input type="file" class="form-control p-3 border border-secondary " name="my_image" id="upmyimage">
                    <h4 class="text-capitalize ps-3 pt-3">banner image section</h4>
                    <input type="file" class="form-control p-3 border border-secondary " name="banner_image"
                        id="upbannerimage">
                    <div class="m-4 ">  
                        <button type="submit" class="btn btn-success" onclick="return updateAction()">Update</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="col-xl-9  grid-margin">
            <div class="card">
                <h3 class="text-capitalize ps-3 pt-3">banner image :</h3>
                <div class="card-body">
                    <img src="{{ !empty($images->banner_image) ? url('upload/images/' . $images->banner_image) : url('default/no_image.jpg') }}"
                        alt="" class="img-fluid " id="showbannerimage">
                </div>

            </div>

        </div>
    </div>

    <script>
        //to show image
        $(document).ready(function() {
            $('#upmyimage').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showmyimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
            $('#upbannerimage').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showbannerimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        })
    </script>
@endsection
