<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
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

    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
  </head>
  <body class="black-background">
    <div class="container py-4">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-6 col-10">
          <div class="row">
            <div class="col-12 text-center">
              <a href="{{url('/')}}"><img src="{{asset('/assets/img/white logo.png')}}" alt="image"></a>
            </div>
            <h5 class="text-center lexicon-heading mb-4">Create An Account</h5>
            <form method="POST" action="{{ route('register') }}"> @csrf
            <div class="col-md-12 mb-4">
              <label for="name" class="custom-label">Full Name</label>
              <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control custom-form-control mt-2 @error('name') is-invalid @enderror" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--<div class="col-md-12 mb-4">-->
            <!--  <label for="user_name" class="custom-label">User Name</label>-->
            <!--  <input type="text" name="user_name" id="user_name" class="form-control custom-form-control mt-2" placeholder="Arman Sharif">-->
            <!--</div>-->
            <div class="col-md-12 mb-4">
              <label for="email" class="custom-label">Email Address</label>
              <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control custom-form-control mt-2 @error('email') is-invalid @enderror" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-12 mb-4">
              <label for="password" class="custom-label">Password</label>
              <input type="password" name="password" id="password" class="form-control custom-form-control mt-2 @error('password') is-invalid @enderror" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-12 mb-5">
              <label for="password-confirm" class="custom-label">Confirm Password</label>
              <input type="password" name="password_confirmation" id="password-confirm" class="form-control custom-form-control mt-2" required autocomplete="new-password">
            </div>
            <div class="col-md-12 mb-4">
              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary-2 w-100 py-2 fs-6">Create My Account</button>
                </div>
              </div>
            </div>
            </form>
            <p class="text-center">Already have an account ? <a href="{{url('login')}}" class="lexicon-heading">Login Instead</a></p>

          </div>
        </div>
      </div>
    </div>

    <!-- bootstrap js -->
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
        // Validation errors
        @if ($errors->any())
            toastr.options = { "closeButton": true, "progressBar": true }
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script>

  </body>
</html>