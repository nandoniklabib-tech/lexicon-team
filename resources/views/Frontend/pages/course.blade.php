@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-5">

        <div class="row align-items-center justify-content-between text-center text-md-start">
          <div class="col-md-5">
            <h5 class="lexicon-heading">{{$course->heading}}</h5>
            <p>{{$course->sub_heading}}</p>
            <h3 class="lexicon-heading">{{$course->title}}</h3>
            <h4>{{$course->sub_title}}</h4>
            <p class="fw-normal fs-14">{!!$course->description!!}</p>
            <a href="{{url('course/'.$course->id.'/placement')}}" class="btn btn-primary-2 px-4 py-2">Enroll The Course</a>
            <span class="fs-4 fw-bold ms-4">৳ {{$course->price}} BDT</span>

          </div>
          <div class="col-md-5">
            <div class="mt-5 card p-3 text-center">
            <h2 class="lexicon-heading mb-4">Emergency Contact</h2>
            <div>
            @if($setting->messenger)
            <a class="footer-social-link fs-2 pe-3 text-dark" href="https://m.me/{{$setting->messenger}}" target="_blank">
                <img class="social-img" src="{{asset("assets/img/Messenger.png")}}" alt="image">
            </a>
            @endif
            @if($setting->whatsapp)
            <a class="footer-social-link fs-2 text-dark" href="https://wa.me/88{{$setting->whatsapp}}" target="_blank">
                <img class="social-img" src="{{asset("assets/img/Whatsapp.png")}}" alt="image">
            </a>
            @endif
            </div>
            </div>
            <img class="img-fluid" src="{{asset('images/courses/'.$course->image)}}" alt="image">
          </div>
        </div>
        
        <div class="row bg-dark text-center mt-5 py-5 justify-content-around">
          <div class="col-12 col-md-2">
            <p class="text-white">Batch Start</p>
            <p class="lexicon-heading mb-0">{{$course->start_date}}</p>
          </div>
          <div class="col-12 col-md-2">
            <p class="text-white">Live classes</p>
            <p class="lexicon-heading mb-0">{{$course->class_schedule}}</p>
          </div>
          <div class="col-12 col-md-2">
            <p class="text-white">Instant support</p>
            <p class="lexicon-heading mb-0">{{$course->support}}</p>
          </div>
          <div class="col-12 col-md-2">
            <p class="text-white">Seats remaining</p>
            <p class="lexicon-heading mb-0">{{$course->seats}}</p>
          </div>
          <div class="col-12 col-md-2">
            <p class="text-white">Admission is ongoing.</p>
            <p class="lexicon-heading mb-0">{{$course->batch_name}}</p>
          </div>
        </div>

        <div class="row py-5 text-center text-md-start">
          <div class="col-md-8">
            <h3 class="mb-3">{{$course->extra_title}}</h3>
            <p>{!!$course->extra_description!!}</p>

          </div>
          <div class="col-md-4">
              
              @foreach($coursetrainers as $coursetrainer)
              <div class="d-flex align-items-start gap-3 border rounded p-3">
                  <div class="course-trainer-image" style="background-image:url('{{asset("images/trainers/".$coursetrainer->trainer->image)}}');"></div>
                  <div class="">
                      <h4>{{$coursetrainer->trainer->name}}</h4>
                      <p>{{$coursetrainer->trainer->designation}}</p>
                  </div>
              </div>
              <br>
              @endforeach
          </div>
        </div>

        <div class="row">
          <div class="col-md-7">
            <div class="accordion" id="accordionExample">
              @foreach($contents as $index => $content)  
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $index }}">
                  <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapseOne{{ $index }}">
                    {{$content->title}}
                  </button>
                </h2>
                <div id="collapseOne{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    {!! $content->description !!}
                  </div>
                </div>
              </div>
              @endforeach
              <!--<div class="accordion-item">-->
              <!--  <h2 class="accordion-header">-->
              <!--    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
              <!--      IELTS Course by Instructor name-->
              <!--    </button>-->
              <!--  </h2>-->
              <!--  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">-->
              <!--    <div class="accordion-body">-->
              <!--      <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <!--<div class="accordion-item">-->
              <!--  <h2 class="accordion-header">-->
              <!--    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
              <!--      Accordion Item #3-->
              <!--    </button>-->
              <!--  </h2>-->
              <!--  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">-->
              <!--    <div class="accordion-body">-->
              <!--      <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
            </div>
          </div>
        </div>
        
      </div>
    </section>

@endsection