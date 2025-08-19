@extends('Frontend.frontApp')

@section('content')
<div class="container py-5">

    <div class="row justify-content-center">
      <div class="col-md-6 text-center fs-3">
        Complete Your Listening Mock Test
      </div>
    </div>
    <div class="row justify-content-center py-4">
      <div class="col-4">
        <div class="card p-4 text-start">
          <p>Your mark is: {{$totalMark}} out of 40</p>
          <p>Correct: {{$correctCount}} </p>
          <p>Wrong: {{$wrongCount}} </p>
          <!-- <p>No answer: {{$noAnswerCount}} </p> -->
          <h5>Band score is: {{$score}} out of 9</h5>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <a href="{{url('free-mock-test-dashboard')}}" class="btn btn-primary-2">Go To Another Test</a>
      </div>
    </div>
    
</div>
@endsection
