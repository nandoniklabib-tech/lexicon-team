@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-3 py-md-5">

        <div class="row">
          <div class="col-12">
            <div class="page-banner" style="background-image: url('{{asset("images/settings/".$setting->score_image)}}');">
              <h3 class="text-center text-md-start pt-5 ps-0 ps-md-5">TOP SCORER</h3>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-12">
            <h3 class="lexicon-heading">SEE TOP ON THE LIST</h3>
          </div>
        </div>

        <div class="row mt-5">
          @foreach($scorers as $data)
          <div class="col-md-3 mb-4">
            <div class="topscorer-single-box text-center">
              @if ($loop->first)
              <div class="best-scorer" style="background-image: url('{{asset("assets/img/topScorer.png")}}')"></div>
              @endif
              <div>
                <div class="topscorer-image">
                  <img class="img-fluid" src="{{asset('images/scorers/'.$data->image)}}" alt="image">
                </div>
                <h5 class="fw-bold fs-6 mt-3 mb-0">{{$data->name}}</h5>
                <div class="" style="display:flex; flex-direction: column;aling-items-center; justify-content:center; height:120px;">
                    @if($data->speaking_status)<p class="mb-0 fw-normal lexicon-heading">Speaking : {{$data->speaking}}</p>@endif
                    @if($data->listening_status)<p class="mb-0 fw-normal lexicon-heading">Listening : {{$data->listening}}</p>@endif
                    @if($data->reading_status)<p class="mb-0 fw-normal lexicon-heading">Reading : {{$data->reading}}</p>@endif
                    @if($data->writing_status)<p class="mb-0 fw-normal lexicon-heading">Writing : {{$data->writing}}</pc>@endif
                </div>
              </div>
              <div>
                <a class="btn btn-primary-2">SCORE : {{$data->score}} / 9</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        
      </div>
    </section>

@endsection