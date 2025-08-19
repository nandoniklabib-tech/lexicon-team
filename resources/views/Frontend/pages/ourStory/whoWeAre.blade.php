@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-3 py-md-5">
        
        <div class="row align-items-center">
          <div class="col-md-7 text-center text-md-start">
            <h3 class="lexicon-heading">WHO WE ARE ?</h3>
            <p>Dear Students and Parents</p>
            <p class="fs-12">{!!$setting->who_we_are_description!!}</p>
          </div>
          <div class="col-md-5">
            <img class="img-fluid" src="{{asset('images/settings/'.$setting->who_we_are_image)}}" alt="">
          </div>
        </div>

      </div>
    </section>

@endsection