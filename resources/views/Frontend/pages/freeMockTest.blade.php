@extends('Frontend.frontApp')

@section('content')
<div class="container py-5">
        {{ session('mocktest.email') }}
    <div class="row justify-content-center">
        <!--<div class="col-md-12 mb-2">-->
        <!--    <a href="{{url('/')}}" class="btn btn-dark ps-1 pe-2 py-0"><i class="bi bi-arrow-left-short"></i> Back</a>-->
        <!--</div>-->
        <div class="col-md-4 mb-3">
            <div class="card glowBox">
              <!--<img src="..." class="card-img-top" alt="...">-->
              <div class="card-body">
                <h5 class="card-title lexicon-heading">Listening</h5>
                <p class="card-text">If you are ready to take the exam, then go ahead. [The exam can be taken only once]</p>
                @if($testlistening)
                    <a href="#" class="btn btn-success">Complete</a>
                    @if($listening_score>0) {{$listening_score}} out of 40. @endif
                @else
                    <a href="{{url('free-mock-test-listening')}}" class="btn btn-primary-2">Go Test</a>
                @endif
              </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card glowBox">
              <!--<img src="..." class="card-img-top" alt="...">-->
              <div class="card-body">
                <h5 class="card-title lexicon-heading">Reading</h5>
                <p class="card-text">If you are ready to take the exam, then go ahead. [The exam can be taken only once]</p>
                @if($testreading)
                    <a href="#" class="btn btn-success">Complete</a>
                    @if($reading_score>0) {{$reading_score}} out of 40. @endif
                @else
                    <a href="{{url('free-mock-test-reading')}}" class="btn btn-primary-2">Go Test</a>
                @endif
              </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card glowBox">
              <!--<img src="..." class="card-img-top" alt="...">-->
              <div class="card-body">
                <h5 class="card-title lexicon-heading">Writing</h5>
                <p class="card-text">If you are ready to take the exam, then go ahead. [The exam can be taken only once]</p>
                @if($testwriting)
                    <a href="#" class="btn btn-success">Complete</a> 
                    @if($writing_score>0) {{$writing_score}} out of 40. @endif
                @else
                    <a href="{{url('free-mock-test-writing')}}" class="btn btn-primary-2">Go Test</a>
                @endif
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
