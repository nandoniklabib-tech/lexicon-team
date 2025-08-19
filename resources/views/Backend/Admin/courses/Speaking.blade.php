@extends('Backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <a href="{{url('courses')}}" class="btn btn-secondary">Back</a>
            <a href="{{url('courses/'.$course->id.'/Listening')}}" class="btn btn-outline-primary fw-bold text-uppercase">Listening</a>
            <a href="{{url('courses/'.$course->id.'/Reading')}}" class="btn btn-outline-primary fw-bold text-uppercase">Reading</a>
            <a href="{{url('courses/'.$course->id.'/Writing')}}" class="btn btn-outline-primary fw-bold text-uppercase">Writing</a>
            <a href="{{url('courses/'.$course->id.'/Speaking')}}" class="btn btn-primary fw-bold text-uppercase">Speaking</a>
        </div>
    </div>
</div>
@endsection
