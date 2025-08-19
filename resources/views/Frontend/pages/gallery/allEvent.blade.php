@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-3 py-md-5">

        <div class="row">
          <div class="col-12">
            <div class="page-banner" style="background-image: url('{{asset("images/settings/".$setting->event_image)}}');">
              <h3 class="text-center text-md-start pt-5 ps-0 ps-md-5">EVENTS</h3>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12">
            <h3 class="lexicon-heading">SEE THE EVENTS THAT WE MADE</h3>
          </div>
        </div>

        <div class="row mt-3 justify-content-center">
          @foreach($events as $data)
          <div class="col-md-4 mb-4">
            <a  class="single-event-box" style="background-image: url('{{asset("images/events/".$data->image)}}');">
              <div class="single-event-content">
                <h6>{{$data->title}}</h6>
                <p class="fs-10">Date : {{$data->created_at->format('d M Y')}}</p>
              </div>
            </a>
          </div>
          @endforeach
        </div>
        
      </div>
    </section>
 
@endsection