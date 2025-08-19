@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-0 py-md-3">

        <div class="row">
          <div class="col-md-7">
              <h3 class="lexicon-heading pb-2">{{$notice->title}}</h3>
              <img class="img-fluid" src="{{asset("images/notices/".$notice->cover)}}" alt="cover">
          </div>
          <div class="col-md-5 fs-1 text-center">
              <div class="card p-4">
              @if($notice->time){{ \Carbon\Carbon::createFromFormat('H:i', $notice->time)->format('g:i A') }}@endif<br>
              @if($notice->date){{ \Carbon\Carbon::parse($notice->date)->format('d F Y') }}@endif<br>
              </div>
              <p class="fs-6 text-start mt-5"><span class="fw-bold">Venue:</span> {{$notice->venue}}</p>
              <p class="fs-6 text-start"><span class="fw-bold">Host Name:</span> {{$notice->host_name}}</p>
          </div>
        </div>

        <div class="row mt-3 mb-3">
          <div class="col-md-7">
            <p>{!!$notice->description!!}</p>
          </div>
        </div>

        
      </div>
    </section>

@endsection