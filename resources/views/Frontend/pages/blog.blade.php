@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-3 py-md-5">

        <div class="row">
          <div class="col-12">
            <div class="page-banner" style="background-image: url('{{asset("assets/img/blogs-back.jpg")}}');">
              <h3 class="text-center text-md-start pt-5 ps-0 ps-md-5">BLOG</h3>
            </div>
          </div>
        </div>

        <div class="row mt-5 mb-3">
          <div class="col-md-4">
            <h3 class="lexicon-heading">{{$blog->title}}</h3>
          </div>
          <div class="col-md-4 text-md-center">
              <!--Writer Name-->
          </div>
          <div class="col-md-4 text-md-end">{{$blog->created_at->format('d M Y')}}</div>
        </div>

        <div class="row">

          <div class="col-md-8">
            <img class="img-fluid w-100" src="{{asset('images/blogs/'.$blog->image)}}" alt="image">
            <p>{!!$blog->description!!}</p>
          </div>



          <div class="col-md-4">
            <div class="row">
              @foreach($blogs as $data)
              <div class="col-md-12 mb-3">
                <div class="card">
                  <img src="{{asset('images/blogs/'.$data->image)}}" class="card-img-top rounded" alt="image">
                  <div class="card-body">
                    <h5 class="card-title mb-3">{{$data->title}}</h5>
                    <a href="{{url('blog',$data->id)}}" class="btn btn-primary-2">READ MORE</a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>

        </div>
        
      </div>
    </section>

@endsection