@extends('Backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center fs-1 mb-3">
            Front Desk
        </div>
        
        <div class="col-md-4 mb-4">
            <a href="{{url('ieltsregistrations')}}" style="background:#EB5B00;" class="card pt-5 pb-4 text-center fs-4 text-white fw-bold">
                Total IELTS Registration<br>
                <span class="fs-1 mb-0 pb-0 d-block">{{$total_ieltsregistrations}}</span> 
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="{{url('placements')}}" style="background:#EB5B00;" class="card pt-5 pb-4 text-center fs-4 text-white fw-bold">
                Total Course Registration<br>
                <span class="fs-1 mb-0 pb-0 d-block">{{$total_placements}}</span> 
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="{{url('mcqstudents')}}" style="background:#EB5B00;" class="card pt-5 pb-4 text-center fs-4 text-white fw-bold">
                Total Placement Test<br>
                <span class="fs-1 mb-0 pb-0 d-block">{{$total_mcqstudents}}</span> 
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="{{url('lexiflies')}}" style="background:#EB5B00;" class="card pt-5 pb-4 text-center fs-4 text-white fw-bold">
                Total Lexifly<br>
                <span class="fs-1 mb-0 pb-0 d-block">{{$total_lexiflies}}</span> 
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="{{url('contacts')}}" style="background:#EB5B00;" class="card pt-5 pb-4 text-center fs-4 text-white fw-bold">
                Total Contact<br>
                <span class="fs-1 mb-0 pb-0 d-block">{{$total_contacts}}</span> 
            </a>
        </div>
        
    </div>
</div>
@endsection
