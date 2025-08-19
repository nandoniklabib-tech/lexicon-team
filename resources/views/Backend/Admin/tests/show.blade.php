@extends('Backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-4">
            @if($testlistening)
            <a href="{{url('testlistenings/'.$testlistening->id.'/edit')}}" class="card py-5 px-2 text-center text-decoration-none fs-3">
                Listening
            </a>
            @else
            <a class="card py-5 px-2 text-center text-decoration-none fs-3">
                Listening
            </a>
            @endif
        </div>
        <div class="col-md-4">
            @if($testreading)
            <a href="{{url('testreadings/'.$testreading->id.'/edit')}}" class="card py-5 px-2 text-center text-decoration-none fs-3">
                Reading
            </a>
            @else
            <a class="card py-5 px-2 text-center text-decoration-none fs-3">
                Reading
            </a>
            @endif
        </div>
        <div class="col-md-4">
            @if($testwriting)
            <a href="{{url('testwritings/'.$testwriting->id.'/edit')}}" class="card py-5 px-2 text-center text-decoration-none fs-3">
                Writing
            </a>
            @else
            <a class="card py-5 px-2 text-center text-decoration-none fs-3">
                Writing
            </a>
            @endif
        </div>
    </div>
</div>
@endsection
