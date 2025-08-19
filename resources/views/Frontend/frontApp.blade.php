<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$setting->title}}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('images/settings/'.$setting->favicon)}}" type="image/x-icon">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&display=swap" rel="stylesheet">
    

<!--toastr css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .toast.toast-success, .toast.toast-error{ opacity: 1 !important; }
</style>


  <!-- slik slider css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
.slick-prev, .slick-next {
  width: 25px;
  height: 25px;
  background: transparent;
}
.slick-prev { 
  left: -25px; 
}
.slick-next { 
  right: -25px; 
}
.slick-prev:before, .slick-next:before {
  font-size: 22px;
  color: red;
}

.slick-dots li button:before {
  font-size: 20px;
  opacity: .5;
  color: gray;
}
.slick-dots li.slick-active button:before {
  opacity: 1;
  color: red;
}
</style>
    
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}?version={{ time() }}">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-white py-0 my-0 sticky-top shadow-sm">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/')}}">
          <img src="{{asset('images/settings/'.$setting->logo)}}" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{url('/')}}#">HOME</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ request()->is('testing-center') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                OUR SERVICES
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{url('/#testingCenter')}}">Testing Center</a></li>
                <li><a class="dropdown-item" href="{{url('/#mockTest')}}">
                    Live Mock Test 
                    <img style="height:30px;width:auto;" src="{{asset('assets/img/onsale3.jpg')}}" alt="onsale">
<!--                <span style="-->
<!--background-image:url({{asset('assets/img/onsale2.jpg')}});-->
<!--background-repeat: no-repeat;-->
<!--background-position: center;-->
<!--background-size: contain;" class="text-white px-3"></span>-->
  </a></li>
                <li><a class="dropdown-item" href="{{url('/#peparationCenter')}}">IELTS Preperation</a></li>
                <!--<li><a class="dropdown-item" href="{{url('mocktest')}}">IELTS Mocktest</a></li>-->
                <li><a class="dropdown-item" href="{{url('ielts-registration')}}">IELTS Registration</a></li>
                <li><a class="dropdown-item" href="{{url('/#lexifly')}}">Higher Education</a></li>
                <li><a class="dropdown-item" href="{{url('/#lexifly')}}">Immigration</a></li>
                <!--<li><a class="dropdown-item" href="#">ESL Courses</a></li>-->
                <!--<li><a class="dropdown-item" href="#">Cambridge Young <br> Learners (YLE)</a></li>-->
                <!--<li><a class="dropdown-item" href="#">PTE</a></li>-->
                
                
                @foreach($categories as $category)
                <li><a class="dropdown-item" href="{{url('/#courses')}}">{{$category->title}}</a></li>
                @endforeach

              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                COURSES
              </a>
              <ul class="dropdown-menu">
                @foreach($categories as $category)
                <li><a class="dropdown-item" href="{{url('/#courses')}}">{{$category->title}}</a></li>
                @endforeach
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/#lexifly')}}">LEXIFLY</a>
            </li>
            <!--<li class="nav-item dropdown">-->
            <!--  <a class="nav-link dropdown-toggle {{ request()->is('higher-education') || request()->is('immigration') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
            <!--    LEXIFLY-->
            <!--  </a>-->
            <!--  <ul class="dropdown-menu">-->
            <!--    <li><a class="dropdown-item {{ request()->is('higher-education') ? 'active' : '' }}" href="{{url('higher-education')}}">Higher Education</a></li>-->
            <!--    <li><a class="dropdown-item {{ request()->is('immigration') ? 'active' : '' }}" href="{{url('immigration')}}">Immigration</a></li>-->
            <!--  </ul>-->
            <!--</li>-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ request()->is('message-from-ceo') || request()->is('who-we-are') || request()->is('achievement') || request()->is('mission-vision') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                OUR STORY
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item {{ request()->is('message-from-ceo') ? 'active' : '' }}" href="{{url('message-from-ceo')}}">Message From CEO</a></li>
                <li><a class="dropdown-item {{ request()->is('who-we-are') ? 'active' : '' }}" href="{{url('who-we-are')}}">Who we are ?</a></li>
                <li><a class="dropdown-item {{ request()->is('achievement') ? 'active' : '' }}" href="{{url('achievement')}}">Our Achievement</a></li>
                <li><a class="dropdown-item {{ request()->is('mission-vision') ? 'active' : '' }}" href="{{url('mission-vision')}}">Mission Vision</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle {{ request()->is('all-event') || request()->is('top-scorer') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                GALLERY
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item {{ request()->is('top-scorer') ? 'active' : '' }}" href="{{url('top-scorer')}}">TOP SCORER</a></li>
                <li><a class="dropdown-item {{ request()->is('all-event') ? 'active' : '' }}" href="{{url('all-event')}}">EVENTS</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('all-blog') || request()->is('category-wise-blogs/*') || request()->is('blog/*') ? 'active' : '' }}" href="{{url('all-blog')}}">BLOGS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="{{url('contact')}}">CONTACT US</a>
            </li>

          </ul>
          <ul class="navbar-nav mS-auto mb-2 mb-lg-0 d-block d-lg-none d-xl-block">
            <!-- <li class="nav-item">
              <a class="btn btn-primary-2" href="">UPCOMING IELTS DATES</a>
            </li> -->
            <li class="nav-item">
              <a class="btn btn-primary-2" href="{{url('exam-date')}}">ExamDate</a>
            </li>
            @auth
            <!--<li class="nav-item">-->
            <!--  <a class="btn btn-primary-2" href="{{url('dashboard')}}">DASHBOARD</a>-->
            <!--</li>-->
            @else
            <!--<li class="nav-item">-->
            <!--  <a class="btn btn-primary-2" href="{{url('login')}}">SIGN-IN/SIGN-UP</a>-->
            <!--</li>-->
            @endauth
          </ul>
        </div>
      </div>
    </nav>
    
    @yield('content')

    <footer>
      <div class="container pt-5">
        <div class="row mb-3 text-center text-md-start">
          <div class="col-md-2">
            <h6 class="lexicon-heading mb-4">SERVICES</h6>
            
            <p><a href="{{url('/#testingCenter')}}" class="footerLink">Testing Center</a></p>
            <p><a href="{{url('/#mockTest')}}" class="footerLink">Live Mock Test</a></p>
            <p><a href="{{url('/#peparationCenter')}}" class="footerLink">IELTS Preperation</a></p>
            <p><a href="{{url('ielts-registration')}}" class="footerLink">IELTS Registration</a></p>
            <p><a href="{{url('/#lexifly')}}" class="footerLink">Higher Education</a></p>
            <p><a href="{{url('/#lexifly')}}" class="footerLink">Immigration</a></p>
            
          </div>
          <div class="col-md-2">
            <h6 class="lexicon-heading mb-4">COURSES</h6>
            @foreach($categories as $category)    
            <p><a href="{{url('/#courses')}}" class="footerLink">{{$category->title}}</a></p>
            @endforeach
          </div>
          
          <div class="col-md-3">
            <h6 class="lexicon-heading mb-4">CONTACTS</h6>
            <p><a href="mailto:{{$setting->email}}" class="footerLink"><i class="bi bi-envelope"></i> {{$setting->email}}</a></p>
            @if($setting->mobile1)
            <p>
              <a href="tel:{{$setting->mobile1}}" class="footerLink"><i class="bi bi-telephone"></i> 
              {{$setting->mobile1}} 
              </a>
            </p>
            @endif
            @if($setting->mobile2)
            <p>
              <a href="tel:{{$setting->mobile2}}" class="footerLink"><i class="bi bi-telephone"></i> 
              {{$setting->mobile2}} 
              </a>
            </p>
            @endif
            @if($setting->mobile3)
            <p>
              <a href="tel:{{$setting->mobile3}}" class="footerLink"><i class="bi bi-telephone"></i> 
              {{$setting->mobile3}} 
              </a>
            </p>
            @endif
            @if($setting->mobile4)
            <p>
              <a href="tel:{{$setting->mobile4}}" class="footerLink"><i class="bi bi-telephone"></i> 
              {{$setting->mobile4}} 
              </a>
            </p>
            @endif
            <p><a target="_blank" href="https://maps.app.goo.gl/vEXQmyLrhG7uSEvQ9" class="footerLink"><i class="bi bi-geo-alt"></i> {{$setting->address}}</a></p>
          
          
          <!--<div class="row">-->
          <!--    <div class="col-12">-->
          <!--        <h6 class="lexicon-heading my-4">PARTNER</h6>-->
          <!--        <div class="slider-partner">-->
          <!--          @foreach($partners as $partner)-->
          <!--          <img class="img-fluid" src="{{asset('images/partners/'.$partner->image)}}" alt="image">-->
          <!--          @endforeach-->
          <!--        </div>-->
          <!--    </div>-->
          <!--</div>-->
          
          </div>
          <div class="col-md-5 text-center text-md-end">
            <h6 class="lexicon-heading mb-4">SUBSCRIBE FOR NEWSLETTER</h6>
            <div class="d-flex justify-content-md-end justify-content-center mb-3">
            <input type="text" name="" id="" class="form-control footer-mail-input" placeholder="Enter your mail to get the latest news"> <br>
            </div>
            <a href="" class="btn btn-primary-2 px-4 py-2">SUBSCRIBE</a>
            <div class="d-flex gap-md-4 gap-2 justify-content-center justify-content-md-end mt-4">
                @if($setting->facebook)<a class="footer-social-link fs-2" href="{{$setting->facebook}}" target="_blank"><i class="bi bi-facebook"></i></a>@endif
                @if($setting->instagram)<a class="footer-social-link fs-2" href="{{$setting->instagram}}" target="_blank"><i class="bi bi-instagram"></i></a>@endif
                @if($setting->twitter)<a class="footer-social-link fs-2" href="{{$setting->twitter}}" target="_blank"><i class="bi bi-twitter-x"></i></a>@endif
                @if($setting->linkedin)<a class="footer-social-link fs-2" href="{{$setting->linkedin}}" target="_blank"><i class="bi bi-linkedin"></i></a>@endif
                @if($setting->youtube)<a class="footer-social-link fs-2" href="{{$setting->youtube}}" target="_blank"><i class="bi bi-youtube"></i></a>@endif
                @if($setting->website)<a class="footer-social-link fs-2" href="{{$setting->website}}" target="_blank"><i class="bi bi-globe"></i></a>@endif
                @if($setting->whatsapp)<a class="footer-social-link fs-2" href="https://wa.me/88{{$setting->whatsapp}}" target="_blank"><i class="bi bi-whatsapp"></i></a>@endif
                @if($setting->messenger)<a class="footer-social-link fs-2" href="https://m.me/{{$setting->messenger}}" target="_blank"><i class="bi bi-messenger"></i></a>@endif
            </div>
            <div class="col-12 mt-4">
            <div class="row">
                <div class="col-md-4">
                  <img class="img-fluid" src="{{asset('assets/img/footerBrand/1.png')}}" alt="image">
                </div>
                <div class="col-md-4">
                  <img class="img-fluid" src="{{asset('assets/img/footerBrand/2.png')}}" alt="image">
                </div>
                <div class="col-md-4">
                  <img class="img-fluid" src="{{asset('assets/img/footerBrand/3.png')}}" alt="image">
                </div>
            </div>
            </div>
          </div>
        </div>
        <div style="width: 100%;height: 2px;background-color: var(--color-one);"></div>
        <div class="row py-2">
          <div class="col-12 text-center">All copyrights Reserved 2025 by <a href="https://baeinnovation.com/" target="_blank">BaeInnovation</a> © 2025</div>
        </div>
      </div>
    </footer>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
      const sentences = [
          "IELTS on Paper",
          "O/A Level Exam",
          "IELTS Preparation",
          "LEXIFLY",
          "Certified Trainers"
      ];
      
      let sentenceIndex = 0;
      let charIndex = 0;
      let isDeleting = false;

      function typeEffect() {
          let currentText = sentences[sentenceIndex];
          let displayText = isDeleting 
              ? currentText.substring(0, charIndex--) 
              : currentText.substring(0, charIndex++);

          document.getElementById("writeText").innerHTML = displayText;

          let typingSpeed = isDeleting ? 50 : 100;

          if (!isDeleting && charIndex === currentText.length + 1) {
              typingSpeed = 1000; // Pause after typing
              isDeleting = true;
          } else if (isDeleting && charIndex === 0) {
              isDeleting = false;
              sentenceIndex = (sentenceIndex + 1) % sentences.length; // Move to next sentence
              typingSpeed = 500;
          }

          setTimeout(typeEffect, typingSpeed);
      }

      window.onload = () => {
          setTimeout(typeEffect, 500);
      };
    </script>
  
    
    <!--ajax js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--toastr js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        @if(Session::has('success'))
            toastr.options={ "closeButton":true, "progressBar":true, }
            toastr.success("{{ session('success')}}")
        @endif
        @if(Session::has('warning'))
            toastr.options={ "closeButton":true, "progressBar":true, }
            toastr.warning("{{ session('warning')}}")
        @endif
        @if(Session::has('error'))
            toastr.options={ "closeButton":true, "progressBar":true, }
            toastr.error("{{ session('error')}}")
        @endif
    </script>

    <!-- slik slider js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.5.2/jquery-migrate.min.js" integrity="sha512-BzvgYEoHXuphX+g7B/laemJGYFdrq4fTKEo+B3PurSxstMZtwu28FHkPKXu6dSBCzbUWqz/rMv755nUwhjQypw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      // slider one
      $(document).ready(function(){
        $('.slider-one').slick({

          dots: true,

          infinite: true,
          speed: 300,

          slidesToShow: 3,
          slidesToScroll: 1,

          autoplay: true,
          autoplaySpeed: 2000,

          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                arrows: true,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                arrows: false,
              }
            }
          ]

        });
      });
      // slider two
      $(document).ready(function(){
        $('.slider-two').slick({

          dots: true,

          infinite: true,
          speed: 300,

          slidesToShow: 4,
          slidesToScroll: 1,

          autoplay: true,
          autoplaySpeed: 2000,

          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                arrows: true,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                arrows: false,
              }
            }
          ]

        });
      });
      // slider four
      $(document).ready(function(){
        $('.slider-four').slick({

          dots: true,

          infinite: true,
          speed: 1000,

          slidesToShow: 4,
          slidesToScroll: 1,

          autoplay: true,
          autoplaySpeed: 5000,

          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4,
                arrows: true,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                arrows: false,
              }
            }
          ]

        });
      });
      // slider partner
      $(document).ready(function(){
        $('.slider-partner').slick({

          dots: true,
          arrows: false,
          infinite: true,
          speed: 3000,

          slidesToShow: 1,
          slidesToScroll: 1,

          autoplay: true,
          autoplaySpeed: 100,

          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 1,
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
              }
            }
          ]

        });
      });
      // slider banner
      $(document).ready(function(){
        $('.slider-banner').slick({

          dots: true,
          arrows: false,
          infinite: true,
          speed: 100,

          slidesToShow: 1,
          slidesToScroll: 1,

          autoplay: true,
          autoplaySpeed: 3000,

        });
      });
      
    </script>
 
    <!--COUNTER START-->
    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script>
      $(document).ready(function () {
        // When the counter section is in viewport, start the counting animation
        $('#counter').waypoint(
          function () {
            $('.counter-item').each(function () {
              $(this).prop('Counter', 0).animate(
                {
                  Counter: $(this).text().replace(/,/g, ''),
                },
                {
                  duration: 3000,
                  easing: 'swing',
                  step: function (now) {
                    $(this).text(Math.ceil(now).toLocaleString());
                  },
                }
              );
            });
            this.destroy();
          },
          {
            offset: '75%',
          }
        );
      });
    </script>
    <!--COUNTER END -->
  
    <script>
    document.addEventListener('DOMContentLoaded', function () {
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
      const tooltipList = [...tooltipTriggerList].map(el => new bootstrap.Tooltip(el));
    });
    </script>
     
    <!--GO TO ID THEN NAVBAR OFF START -->
    <script>
      document.querySelectorAll('.navbar-nav .nav-link').forEach(link => {
        link.addEventListener('click', function (e) {
          if (link.classList.contains('dropdown-toggle')) {
            return;
          }
          const navbarCollapse = document.querySelector('.navbar-collapse');
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse && navbarCollapse.classList.contains('show')) {
            bsCollapse.hide();
          }
        });
      });
      document.querySelectorAll('.dropdown-menu .dropdown-item').forEach(link => {
        link.addEventListener('click', function () {
          const navbarCollapse = document.querySelector('.navbar-collapse');
          const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
          if (bsCollapse && navbarCollapse.classList.contains('show')) {
            bsCollapse.hide();
          }
        });
      });
    </script>
    <!--GO TO ID THEN NAVBAR OFF END -->

  </body>
</html>