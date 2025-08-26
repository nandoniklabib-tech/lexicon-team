<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('images/settings/'.$setting->favicon)}}" type="image/x-icon">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!--toastr css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .toast.toast-success, .toast.toast-error{ opacity: 1 !important; }
</style>

<style>
body{
    background-color: #333;
    color: gray;
}
.modal-content {
    background-color: #333;
}
.card{
    background-color: transparent;
    color: gray;
}
a{
    text-decoration:none;
}
.fs-10{ font-size:10px; }
label{font-weight:600;}
.nav-link {
    display: block;
    padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
    font-size: var(--bs-nav-link-font-size);
    font-weight: 600;
    color: var(--bs-nav-link-color);
    text-decoration: none;
    background: 0 0;
    border: 0;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}
.navbar-nav .nav-link.active, .navbar-nav .nav-link.show {
    color: red;
}
.nav-link:focus, .nav-link:hover {
    color: red;
}
.dropdown-item {
    display: block;
    width: 100%;
    padding: var(--bs-dropdown-item-padding-y) var(--bs-dropdown-item-padding-x);
    clear: both;
    font-weight: 600;
    color: var(--bs-dropdown-link-color);
    text-align: inherit;
    text-decoration: none;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    border-radius: var(--bs-dropdown-item-border-radius,0);
}
.dropdown-item.active, .dropdown-item:active {
    color: red;
    text-decoration: none;
    background-color: transparent;
}
.event-card{
width:100%;
height:250px;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
display:flex;
align-items:center;
justify-content:end;
}

.navbar-brand img{
  height: 30px;
  width: auto;
}
.myTooltipColor { --bs-tooltip-bg: #0A58CA; --bs-tooltip-color: white;}
</style>

</head>
<body class="">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('/')}}">
                  <img src="{{asset('assets/img/whiteLogo1.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                                <li class="nav-item">
                                    <a class="nav-link {{'dashboard'==request()->path()?'active':''}}" href="{{ url('dashboard') }}">{{ __('Dashboard') }}</a>
                                </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link {{'login'==request()->path()?'active':''}}" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link {{'register'==request()->path()?'active':''}}" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                            @if(Auth::user()->type=='Admin')
  
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('categories') || request()->is('categories/*') || request()->is('course/*/features') ? 'active' : '' }}" href="{{ url('categories') }}">{{ __('Courses') }}</a>
                            </li>
                            @endif
                            @if(Auth::user()->type=='Admin' || Auth::user()->type=='Front Desk')
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link {{ 
                                request()->is('ieltsregistrations') || 
                                request()->is('ieltsregistrations/*/edit') || 
                                request()->is('placements') || 
                                request()->is('examdatetests') || 
                                request()->is('mockteststudents') || 
                                request()->is('contacts') || 
                                request()->is('examtypes') || 
                                request()->is('lexiflies') || 
                                request()->is('admin-ielts-form') || 
                                request()->is('admin-placement-form') || 
                                request()->is('mcqstudents') || 
                                request()->is('mcqs') ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Data Collection
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    
                                    <a class="dropdown-item {{ request()->is('admin-ielts-form') ? 'active' : '' }}" href="{{ url('admin-ielts-form') }}">
                                        IELTS Registration Form
                                    </a>
                                    <a class="dropdown-item {{ request()->is('admin-placement-form') ? 'active' : '' }}" href="{{ url('admin-placement-form') }}">
                                        Course Registration Form
                                    </a>
                                    <a class="dropdown-item {{ request()->is('mcqs') ? 'active' : '' }}" href="{{ url('mcqs') }}">
                                        Placement Test MCQ
                                    </a>
                                    
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item {{ request()->is('ieltsregistrations') || request()->is('ieltsregistrations/*/edit') ? 'active' : '' }}" href="{{ url('ieltsregistrations') }}">
                                        IELTS Registration
                                    </a>
                                    <a class="dropdown-item {{ request()->is('placements') ? 'active' : '' }}" href="{{ url('placements') }}">
                                        Course Registration
                                    </a>
                                    <a class="dropdown-item {{ request()->is('mcqstudents') ? 'active' : '' }}" href="{{ url('mcqstudents') }}">
                                        Placement Test MCQ Students
                                    </a>
                                    <a class="dropdown-item {{ request()->is('mockteststudents') ? 'active' : '' }}" href="{{ url('mockteststudents') }}">
                                        Mocktest Students
                                    </a>
                                    <a class="dropdown-item {{ request()->is('contacts') ? 'active' : '' }}" href="{{ url('contacts') }}">
                                        Contacts
                                    </a>
                                    <a class="dropdown-item {{ request()->is('examdatetests') ? 'active' : '' }}" href="{{ url('examdatetests') }}">
                                        Exam Date Tests
                                    </a>
                                    <a class="dropdown-item {{ request()->is('examtypes') ? 'active' : '' }}" href="{{ url('examtypes') }}">
                                        Exam Types
                                    </a>
                                    <a class="dropdown-item {{ request()->is('lexiflies') ? 'active' : '' }}" href="{{ url('lexiflies') }}">
                                        Lexiflies
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link {{ request()->is('lexifly-higher-education') || request()->is('lexifly-immigration') ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Lexifly
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item {{ request()->is('lexifly-higher-education') ? 'active' : '' }}" href="{{ url('lexifly-higher-education') }}">
                                        Higher Education
                                    </a>
                                    <a class="dropdown-item {{ request()->is('lexifly-immigration') ? 'active' : '' }}" href="{{ url('lexifly-immigration') }}">
                                        Immigration
                                    </a>
                                </div>
                            </li>
                            @endif
                            @if(Auth::user()->type=='Admin' || Auth::user()->type=='Content Manager')
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link {{ request()->is('scorers') || request()->is('events') || request()->is('testimonials') ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Gallery
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item {{ request()->is('scorers') ? 'active' : '' }}" href="{{ url('scorers') }}">
                                        Top Scorers
                                    </a>
                                    <a class="dropdown-item {{ request()->is('events') ? 'active' : '' }}" href="{{ url('events') }}">
                                        Events
                                    </a>
                                    <a class="dropdown-item {{ request()->is('testimonials') ? 'active' : '' }}" href="{{ url('testimonials') }}">
                                        Testimonials
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link {{ request()->is('message-from-ceo-back') || request()->is('who-we-are-back') || request()->is('achievements') || request()->is('mission-vision-back') ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Our Story
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item {{ request()->is('message-from-ceo-back') ? 'active' : '' }}" href="{{ url('message-from-ceo-back') }}">
                                        Message From CEO
                                    </a>
                                    <a class="dropdown-item {{ request()->is('who-we-are-back') ? 'active' : '' }}" href="{{ url('who-we-are-back') }}">
                                        Who We Are
                                    </a>
                                    <a class="dropdown-item {{ request()->is('achievements') ? 'active' : '' }}" href="{{ url('achievements') }}">
                                        Our Achievement
                                    </a>
                                    <a class="dropdown-item {{ request()->is('mission-vision-back') ? 'active' : '' }}" href="{{ url('mission-vision-back') }}">
                                        Mission Vision
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link
                                {{ 
                                request()->is('blogcategories') || 
                                request()->is('blogcategory/*') ? 'active' : '' }}
                                " href="{{ url('blogcategories') }}">{{ __('Blogs') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{'trainers'==request()->path()?'active':''}}" href="{{ url('trainers') }}">{{ __('Trainers') }}</a>
                            </li>
                            @endif
                            @if(Auth::user()->type=='Admin')
                            <!--<li class="nav-item">-->
                            <!--    <a class="nav-link {{'courses'==request()->path()?'active':''}}" href="{{ url('courses') }}">{{ __('Courses') }}</a>-->
                            <!--</li>-->
                            <li class="nav-item">
                                <a class="nav-link {{'users'==request()->path()?'active':''}}" href="{{ url('users') }}">{{ __('Users') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{'examdates'==request()->path()?'active':''}}" href="{{ url('examdates') }}">{{ __('Exam Dates') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{'tests'==request()->path()?'active':''}}" href="{{ url('tests') }}">{{ __('Tests') }}</a>
                            </li>
                            @endif




                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link {{ 
                                request()->is('settings') || 
                                request()->is('background-images') || 
                                request()->is('partners') || 
                                request()->is('notices') || 
                                request()->is('sliders') || 
                                request()->is('users/*/edit') 
                                ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->type=='Admin')
                                    <a class="dropdown-item {{ request()->is('settings') ? 'active' : '' }}" href="{{ url('settings') }}">
                                        {{ __('Settings') }}
                                    </a>
                                    <a class="dropdown-item {{ request()->is('partners') ? 'active' : '' }}" href="{{ url('partners') }}">
                                        {{ __('Partners') }}
                                    </a>
                                    <a class="dropdown-item {{ request()->is('notices') ? 'active' : '' }}" href="{{ url('notices') }}">
                                        {{ __('Event') }}
                                    </a>
                                    <a class="dropdown-item {{ request()->is('sliders') ? 'active' : '' }}" href="{{ url('sliders') }}">
                                        {{ __('Sliders') }}
                                    </a>
                                    <a class="dropdown-item {{ request()->is('background-images') ? 'active' : '' }}" href="{{ url('background-images') }}">
                                        {{ __('Background Images') }}
                                    </a>
                                    @endif
                                    <a class="dropdown-item {{ request()->is('users/*/edit') ? 'active' : '' }}" href="{{ url('users/'.Auth::user()->id.'/edit') }}">
                                        {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-2">
            @yield('content')
        </main>
    </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    
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
    
             
<script>
  const tooltips = document.querySelectorAll('.myTooltips');
  tooltips.forEach(t => { new bootstrap.Tooltip(t); });
</script> 
      
    
</body>
</html>
