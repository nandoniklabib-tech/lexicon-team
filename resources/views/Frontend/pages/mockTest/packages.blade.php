@extends('Frontend.frontApp')

@section('content')
    <section id="testingCenter">
        <div class="container py-5">

        <!-- <div class="row align-items-center mt-5">
          <div class="col-md-12">
            <h3 class="lexicon-heading text-center text-md-start text-uppercase">Testing Center</h3>
          </div>
        </div> -->

        <div class="row align-items-center">
            
          <div class="col-md-4 mb-4">
            <div class="course-box p-4 glowBox text-center">
              <a href="#"><h4 class="lexicon-heading mb-0">Package 1</h4></a>
              <!-- <img class="img-fluid rounded my-3" src="{{asset('assets/img/mockTestOnline.webp')}}" alt="image"> -->
              <div class="mb-3 mt-3">
                <i class="bi bi-check-circle-fill"></i>
                <span class="ps-3">3 Mock Tests</span>
              </div>
              <div class=" d-flex justify-content-center align-items-center">
                <a href="#" class="btn btn-primary-2">REGISTER NOW</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="course-box p-4 glowBox">
              <a href="{{url('exam-date')}}"><h4 class="lexicon-heading mb-0">IELTS on Paper</h4></a>
              <img class="img-fluid rounded my-3" src="{{asset('assets/img/mockTestOnline.webp')}}" alt="image">
              <div class="text-start d-flex justify-content-between align-items-center">
                <a href="{{url('exam-date')}}" class="btn btn-primary-2">REGISTER NOW</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="course-box p-4 glowBox">
              <a href="{{url('exam-date')}}"><h4 class="lexicon-heading mb-0">A/0 Exam</h4></a>
              <img class="img-fluid rounded my-3" src="{{asset('assets/img/mockTestOnline.webp')}}" alt="image">
              <div class="text-start d-flex justify-content-between align-items-center">
                <a href="{{url('exam-date')}}" class="btn btn-primary-2">REGISTER NOW</a>
              </div>
            </div>
          </div>

        </div>

        </div>
    </section>
@endsection