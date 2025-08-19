@extends('Backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <a href="{{url('courses')}}" class="btn btn-secondary">Back</a>
            <a href="{{url('courses/'.$course->id.'/Listening')}}" class="btn btn-outline-primary fw-bold text-uppercase">Listening</a>
            <a href="{{url('courses/'.$course->id.'/Reading')}}" class="btn btn-outline-primary fw-bold text-uppercase">Reading</a>
            <a href="{{url('courses/'.$course->id.'/Writing')}}" class="btn btn-primary fw-bold text-uppercase">Writing</a>
            <a href="{{url('courses/'.$course->id.'/Speaking')}}" class="btn btn-outline-primary fw-bold text-uppercase">Speaking</a>
        </div>
        <div class="col-12 mt-4">
            <form action="{{url('writes',$write->id)}}" method="post" enctype="multipart/form-data"> @csrf @method('put')
                <textarea name="description" class="form-control mb-3" cols="33" rows="3" placeholder="Write your text ..." required>{{$write->description}}</textarea>
                @if($write->image)<img class="img-fluid" src="{{asset('images/writes/'.$write->image)}}" alt="image">@endif
                <input type="file" name="image" class="form-control mb-3">
                <button type="submit" class="btn btn-primary px-5">Save Changes</button>
            </form>
        </div>
    </div>
</div>
@endsection
