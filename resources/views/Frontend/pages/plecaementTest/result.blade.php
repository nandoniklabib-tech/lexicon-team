@extends('Frontend.frontApp')

@section('content')

<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-12 text-center fs-3 mb-3">{{$type}} Placement Test <hr></div>
        <div class="col-12 text-center mb-3">
            Name: {{$mcqstudent->name}} 
            <br>
            Grade: 
            @if($score==14 || $score==15) C2 @endif
            @if($score==12 || $score==13) C1 @endif
            @if($score==10 || $score==11) B2 @endif
            @if($score==8 || $score==9) B1 @endif
            @if($score==6 || $score==7) A2 @endif
            @if($score<=5 && $score>=1) A1 @endif
            @if($score==0) Fail @endif 
            <br>
            Score: {{$score}} out of {{$total}} 
            <br>
        </div>
    </div>
</div>

@endsection