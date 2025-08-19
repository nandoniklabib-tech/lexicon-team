@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-3 py-md-5">
        
        <div class="row align-items-center">
          <div class="col-md-5 text-center text-md-start">
            <h3 class="lexicon-heading">VISION</h3>
            <p>Dear Students and Parents</p>
            <p class="fs-12">{!!$setting->vision_description!!}</p>
          </div>
          <div class="col-md-7">
            <img class="img-fluid" src="{{asset('images/settings/'.$setting->vision_image)}}" alt="">
          </div>
        </div>
        <div class="row align-items-center mt-5">
          <div class="col-md-7 order-2 order-md-1">
            <img class="img-fluid" src="{{asset('images/settings/'.$setting->mission_image)}}" alt="">
          </div>
          <div class="col-md-5 text-center text-md-end order-1 order-md-2">
            <h3 class="lexicon-heading">MISSION</h3>
            <p>Dear Students and Parents</p>
            <p class="fs-12">{!!$setting->mission_description!!}</p>
          </div>
        </div>

      </div>
    </section>
 
@endsection