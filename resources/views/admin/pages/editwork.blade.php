@extends('admin.index')
@section('title')
    Add Work
@endsection
@section('main')
    <a href="" class="btn btn-info">Add More work</a>
    <hr>

    <div class="card">
        <div class="card-body">
            <div class="card-title h3">
                This is the Add Work Form
            </div>
            <form action="{{ route('admin.update.work',$work->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <img src="{{ !empty($work->title_image) ? url('upload/images/' . $work->title_image) : url('default/no_image.jpg') }}"class="img-fluid mb-3"
                                alt="" id="showtitleimage">
                            <input type="file" class="form-control border-dark" name="title_image" id="uptitleimage">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-primary" placeholder="Add Work Title"
                                name="work_title" value="{{$work->work_title}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-info" placeholder="Add Working Dates"
                                name="working_dates" value="{{$work->working_dates}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-success" placeholder="Add Client Name"
                                name="client" value="{{$work->client}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-warning" placeholder="Add Website Link"
                                name="website" value="{{$work->website}}">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card-title h3">Optional</div>
                <hr>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card-title h3">First Image Data</div>
                        <div class="form-group">
                            <img src="{{ !empty($work->First_image) ? url('upload/images/' . $work->First_image) : url('default/no_image.jpg') }}"class="img-fluid mb-3" alt=""
                                id="showfirstimage">
                            <input type="file" class="form-control border-dark" name="First_image" id="upfirstimage">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-info" placeholder="Add First Image Title"
                                name="First_title" value="{{$work->First_title}}">
                        </div>
                        <div class="form-group">
                            <textarea name="First_detail" id="" class="form-control border-warning rounded"
                                placeholder="Add Frist Image Detail" cols="30" rows="10" >{{$work->First_detail}}</textarea>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card-title h3">Second Image Data</div>
                        <div class="form-group">
                            <img src="{{ !empty($work->second_image) ? url('upload/images/' . $work->second_image) : url('default/no_image.jpg') }}"class="img-fluid mb-3" alt=""
                                id="showsecondimage">
                            <input type="file" class="form-control border-dark " name="second_image" id="upsecondimage">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-info" placeholder="Add Second Image Title"
                                name="second_title" value="{{$work->second_title}}">
                        </div>
                        <div class="form-group">
                            <textarea name="second_detail" id="" class="form-control border-warning rounded"
                                placeholder="Add Second Image Detail" cols="30" rows="10" >{{$work->second_detail}}</textarea>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card-title h3">Third Image Data</div>
                        <div class="form-group">
                            <img src="{{ !empty($work->third_image) ? url('upload/images/' . $work->third_image) : url('default/no_image.jpg') }}"class="img-fluid mb-3" alt=""
                                id="showthirdimage">
                            <input type="file" class="form-control border-dark " name="third_image" id="upthirdimage">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-info" placeholder="Add Third Image Title"
                                name="third_title" value="{{$work->third_title}}">
                        </div>
                        <div class="form-group">
                            <textarea name="third_detail" id="" class="form-control border-warning rounded"
                                placeholder="Add Third Image Detail" cols="30" rows="10">{{$work->third_detail}}</textarea>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card-title h3">Forth Image Data</div>
                        <div class="form-group">
                            <img src="{{ !empty($work->forth_image) ? url('upload/images/' . $work->forth_image) : url('default/no_image.jpg') }}"class="img-fluid mb-3" alt=""
                                id="showforthimage">
                            <input type="file" class="form-control border-dark " name="forth_image"
                                id="upforthimage">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-info" placeholder="Add Forth Image Title"
                                name="forth_title" value="{{$work->forth_title}}">
                        </div>
                        <div class="form-group">
                            <textarea name="forth_detail" id="" class="form-control border-warning rounded"
                                placeholder="Add Forth Image Detail" cols="30" rows="10" >{{$work->forth_detail}}</textarea>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="card-title h3">Fifth Image Data</div>
                        <div class="form-group">
                            <img src="{{ !empty($work->fifth_image) ? url('upload/images/' . $work->fifth_image) : url('default/no_image.jpg') }}"class="img-fluid mb-3" alt=""
                                id="showfifthimage">
                            <input type="file" class="form-control border-dark " name="fifth_image"
                                id="upfifthimage">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control border-info" placeholder="Add Fifth Image Title"
                                name="fifth_title" value="{{$work->fifth_title}}">
                        </div>
                        <div class="form-group">
                            <textarea name="fifth_detail" id="" class="form-control border-warning rounded"
                                placeholder="" cols="30" rows="10" >{{$work->fifth_detail}}</textarea>
                        </div>

                    </div>

                </div>
                <button type="submit" class="btn btn-success" onclick="return updateAction()">Update Work Data</button>
            </form>
        </div>
    </div>

    <script>
        //to show image
        $(document).ready(function() {
            $('#uptitleimage').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showtitleimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
            $('#upfirstimage').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showfirstimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
            $('#upsecondimage').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showsecondimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
            $('#upthirdimage').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showthirdimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
            $('#upforthimage').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showforthimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
            $('#upfifthimage').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showfifthimage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })

        })
    </script>
@endsection
