@extends('Backend.MockTest.layouts.app')

@section('content')
    <section>
      <div class="container py-4">
        <div class="row justify-content-center">

          <div class="col-md-3">
            <a href="{{url('admin/mocktest/1/dashboard')}}" class="mock-card-one">Listening</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/2/dashboard')}}" class="mock-card-one">Reading</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/3/dashboard')}}" class="mock-card-one">Writing</a>
          </div>

        </div>
      </div>
    </section>
@endsection