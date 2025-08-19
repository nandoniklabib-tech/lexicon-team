<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>
    
    <!-- favicon -->
    <link rel="shortcut icon" href="" type="image/x-icon">

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
                                <li class="nav-item">
                                    <a class="nav-link {{'admin/mocktests'==request()->path()?'active':''}}" href="{{ url('admin/mocktests') }}">{{ __('Mocktests') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{'admin-mocktest-writing-reports'==request()->path()?'active':''}}" href="{{ url('admin-mocktest-writing-reports') }}">{{ __('Writing Reports') }}</a>
                                </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link {{ request()->is('') ? 'active' : '' }} dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Writing
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item {{ request()->is('admin/mocktest/writing/1/info') ? 'active' : '' }}" href="{{ url('admin/mocktest/writing/1/info') }}">
                                        One
                                    </a>
                                    <a class="dropdown-item {{ request()->is('admin/mocktest/writing/2/info') ? 'active' : '' }}" href="{{ url('admin/mocktest/writing/2/info') }}">
                                        Two
                                    </a>
                                    <a class="dropdown-item {{ request()->is('admin/mocktest/writing/3/info') ? 'active' : '' }}" href="{{ url('admin/mocktest/writing/3/info') }}">
                                        Three
                                    </a>
                                    <a class="dropdown-item {{ request()->is('admin/mocktest/writing/4/info') ? 'active' : '' }}" href="{{ url('admin/mocktest/writing/4/info') }}">
                                        Four
                                    </a>
                                    <a class="dropdown-item {{ request()->is('admin/mocktest/writing/5/info') ? 'active' : '' }}" href="{{ url('admin/mocktest/writing/5/info') }}">
                                        Five
                                    </a>
                                    <a class="dropdown-item {{ request()->is('admin/mocktest/writing/6/info') ? 'active' : '' }}" href="{{ url('admin/mocktest/writing/6/info') }}">
                                        Six
                                    </a>
                                </div>
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

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

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
