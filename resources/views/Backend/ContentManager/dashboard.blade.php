@extends('Backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center fs-1 mb-3">
            Content Manager
        </div>        
        <div class="col-md-4 mb-4">
            <a style="background: #EB5B00;" href="{{url('scorers')}}" class="card py-5 text-center fs-4 text-white fw-bold">
                05<br>
                TopScorers
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a style="background: #EB5B00;" href="{{url('events')}}" class="card py-5 text-center fs-4 text-white fw-bold">
                05<br>
                Events
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a style="background: #EB5B00;" href="{{url('blogs')}}" class="card py-5 text-center fs-4 text-white fw-bold">
                05<br>
                Blogs
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a style="background: #EB5B00;" href="{{url('trainers')}}" class="card py-5 text-center fs-4 text-white fw-bold">
                05<br>
                Trainers
            </a>
        </div>
    </div>
</div>
@endsection
