@extends('Frontend.frontApp')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center mb-4">
        <h3>Well done!</h3> 
        <h5>You have completed the IELTS familiarisation test.</h5>
        <p class="mb-0">This test has been provided by GEL IELTS prep in partnership with the British Council.</p>
        <p class="mb-0">GEL IELTS prep have emailed your scores to vohigyf@mail.com</p>
      </div>
      <div class="col-12 text-center">
        <a href="{{url('/')}}" class="btn btn-primary-2">Go To Home Page</a>
      </div>
    </div>
</div>
@endsection
