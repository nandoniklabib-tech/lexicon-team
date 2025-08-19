@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-3 py-md-5">

        <h3 class="lexicon-heading text-center">OUR ACHIEVEMENT</h3>
        @foreach($achievements as $data)
        @if($loop->iteration % 2 != 0) 
        <div class="row text-center text-md-start my-5 align-items-center">
          <div class="col-md-5 mb-3 mb-md-0"> 
            <div class="achieve-image" style="background-image: url('{{asset("images/achievements/".$data->image)}}');"></div>
          </div>
          <div class="col-md-2 mb-3 mb-md-0">
            <img class="img-fluid achiv-img-red" src="./assets/img/achiv1.png" alt="image">
          </div>
          <div class="col-md-5 mb-3 mb-md-0">
            <h4 class="lexicon-heading mt-5 mt-md-0">{{$data->title}}</h4>
            <p class="">{!!$data->description!!}</p>
          </div>
        </div>
        @else
        <div class="row text-center text-md-start mb-5 align-items-center">
          <div class="col-md-5 mb-3 mb-md-0 order-3 order-md-1">
            <h4 class="lexicon-heading mt-5 mt-md-0">{{$data->title}}</h4>
            <p class="">{!!$data->description!!}</p>
          </div>
          <div class="col-md-2 mb-3 mb-md-0 order-2 order-md-2">
            <img class="img-fluid achiv-img-black" src="./assets/img/achiv2.png" alt="image">
          </div>
          <div class="col-md-5 mb-3 mb-md-0 order-1 order-md-3">
            <div class="achieve-image" style="background-image: url('{{asset("images/achievements/".$data->image)}}');"></div>
          </div>
        </div>
        @endif
        @endforeach
        <!--<div class="row text-center text-md-start my-5 align-items-center">-->
        <!--  <div class="col-md-5 mb-3 mb-md-0">-->
        <!--    <div style="width: 100%; height: 200px;background-color: gray;"></div>-->
        <!--  </div>-->
        <!--  <div class="col-md-2 mb-3 mb-md-0">-->
        <!--    <img class="img-fluid achiv-img-red" src="./assets/img/achiv1.png" alt="image">-->
        <!--  </div>-->
        <!--  <div class="col-md-5 mb-3 mb-md-0">-->
        <!--    <h4 class="lexicon-heading mt-5 mt-md-0">2024</h4>-->
        <!--    <p>We are delighted to have this opportunity to address you. With 13 years of experience in English Language and IELTS teaching, I am deeply committed to providing exceptional education and guidance to our students.</p>-->
        <!--  </div>-->
        <!--</div>-->
        
        <!--<div class="row text-center text-md-end mb-5 align-items-center">-->
        <!--  <div class="col-md-5 mb-3 mb-md-0 order-3 order-md-1">-->
        <!--    <h4 class="lexicon-heading mt-5 mt-md-0">2023</h4>-->
        <!--    <p>We are delighted to have this opportunity to address you. With 13 years of experience in English Language and IELTS teaching, I am deeply committed to providing exceptional education and guidance to our students.</p>-->
        <!--  </div>-->
        <!--  <div class="col-md-2 mb-3 mb-md-0 order-2 order-md-2">-->
        <!--    <img class="img-fluid achiv-img-black" src="./assets/img/achiv2.png" alt="image">-->
        <!--  </div>-->
        <!--  <div class="col-md-5 mb-3 mb-md-0 order-1 order-md-3">-->
        <!--    <div style="width: 100%; height: 200px;background-color: gray;"></div>-->
        <!--  </div>-->
        <!--</div>-->

      </div>
    </section>
 
@endsection