@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-3 py-md-5">

        <div class="row">
          <div class="col-12">
            <div class="page-banner" style="background-image: url('{{asset("images/settings/".$setting->ceo_image_back)}}');">
              <h3 class="text-center text-md-start pt-5 ps-0 ps-md-5">ABOUT US</h3>
            </div>
          </div>
        </div>

        <div class="row align-items-center mt-4">
          <div class="col-md-7 text-center text-md-start">
            <h3 class="lexicon-heading">Message From CEO</h3>
            
            <p class="fs-12">{!!$setting->ceo_description!!}</p>
          </div>
          <!--<div class="col-md-5 custom-background" style="background-image:url('{{asset("assets/img/ceoPhotoBack2.png")}}');">-->
          <div class="col-md-5">
            <img class="img-fluid" src="{{asset('images/settings/'.$setting->ceo_image)}}" alt="">
          </div>
        </div>

      </div>
    </section>

@endsection