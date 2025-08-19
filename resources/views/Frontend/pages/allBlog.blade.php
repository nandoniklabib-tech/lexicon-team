@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-3 py-md-5">

        <div class="row">
          <div class="col-12">
            <div class="page-banner" style="background-image: url('{{asset("images/settings/".$setting->blogs_image)}}');">
              <h3 class="text-center text-md-start pt-5 ps-0 ps-md-5">BLOGS</h3>
            </div>
          </div>
        </div>

        <div class="row mt-2 mb-3">
          <div class="col-12 text-center">
            @foreach($blogcategories as $blogcategory)
            <a href="{{url('category-wise-blogs',$blogcategory->id)}}" class="btn btn-outline-dark">{{$blogcategory->title}}</a>
            @endforeach
          </div>
          <div class="col-12">
            <h3 class="lexicon-heading">READ THE BLOG</h3>
          </div>
        </div>

        <div class="row">
        <div class="col-md-12">
        <div class="row">
        
            @php $i = 0; @endphp
            @foreach($blogs as $data)
              <div class="col-md-6 blog-item" style="@if($i >= 4) display: none; @endif">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0 align-items-center">
                    <div class="col-md-6">
                      <img src="{{ asset('images/blogs/' . $data->image) }}" class="img-fluid rounded-start" alt="image">
                    </div>
                    <div class="col-md-6">
                      <div class="card-body">
                        <h5 class="card-title">{{ $data->title }}</h5>
                        <p class="card-text">
                          <small class="text-body-secondary">{{ $data->created_at }}</small>
                        </p>
                        <a href="{{ url('blog', $data->id) }}" class="btn btn-primary-2">READ MORE</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @php $i++; @endphp
            @endforeach
            
            <div class="text-center"><a href="#" id="loadMore" class="btn btn-primary-2 mt-3">Load More</a></div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
              $(document).ready(function() {
                let itemsToShow = 4;
                let totalItems = $('.blog-item').length;
            
                $('#loadMore').click(function(e) {
                  e.preventDefault();
                  itemsToShow += 4;
                  $('.blog-item').slice(0, itemsToShow).slideDown();
            
                  if (itemsToShow >= totalItems) {
                    $('#loadMore').hide();
                  }
                });
              });
            </script>

          
          
          
        </div>
        </div>
        </div>
        
      </div>
    </section>

@endsection