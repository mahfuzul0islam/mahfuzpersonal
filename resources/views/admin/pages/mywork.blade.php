@extends('admin.index')
@section('title')
    My works
@endsection
@section('main')
    <a href="{{ route('admin.add.work') }}" class="btn btn-info">Add More work</a>
    <hr>

    <div class="row">
        @foreach ($works as $work)
            <div class="col-xl-3 col-lg-12 stretch-card  grid-margin">
                <div class="card shadow rounded">
                    <div class="card-body">
                        <img src="{{ !empty($work->title_image) ? url('upload/images/' . $work->title_image) : url('default/no_image.jpg') }}"class="img-fluid mb-2 border-dark border" alt="">
                        <h4>{{$work->work_title}}</h4>
                        <a href="{{route('admin.edit.work',$work->id)}}" class="btn btn-warning text-light">Edit</a>
                        <a href="{{route('admin.delete.work',$work->id)}}" class="btn btn-danger text-light" onclick="return deleteAction()">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
