@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-3 py-md-5">

        <div class="row">
          <div class="col-12">
            <div class="page-banner" style="background-image: url('{{asset("images/settings/".$setting->immigration_image)}}');">
              <h3 class="text-center text-md-start pt-5 ps-0 ps-md-5">LexiFly</h3>
              <p class="text-center text-white text-md-start pt-2 ps-0 ps-md-5">Choose The Country For Immigration</p>
            </div>
          </div>
        </div>

        <div class="row mt-5 mb-3">
          <div class="col-12">
            <h3 class="lexicon-heading">CHOOSE YOUR COUNTRY FOR IMMIGRATION</h3>
          </div>
        </div>

        <div class="row justify-content-center mt-5 mb-3">
          @foreach($lexiflycountries as $data)    
          <div class="col-md-3">
            <a href="#" class="text-center text-dark" data-bs-toggle="modal" data-bs-target="#immigration{{$data->id}}">
                <div class="lexifly-country-image mb-3" style="background-image: url('{{asset("images/lexiflycountries/".$data->image)}}');"></div>
                <h5>{{$data->name}}</h5>
            </a>
          </div>
        <!-- immigration{{$data->id}} -->
        <div class="modal fade" id="immigration{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{$data->name}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="{{url('lexifly-store')}}" method="post" enctype="multipart/form-data" > @csrf
              <input type="hidden" name="lexiflycountry_id" value="{{$data->id}}">
              <div class="modal-body">
                <div class="row">
                    
                    <div class="col-12 mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control mt-2" required>
                    </div>
                    
                </div>
              </div><div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
              </form>
            </div>
          </div>
        </div>
          
          @endforeach
        </div>

      </div>
    </section>

@endsection