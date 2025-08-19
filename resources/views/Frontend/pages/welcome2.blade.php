@extends('Frontend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
              <!--<img src="..." class="card-img-top" alt="...">-->
              <div class="card-body">
                <h5 class="card-title">Free Mock Test</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                @auth
                <a href="{{url('free-mock-test')}}" class="btn btn-primary">Go Test</a>
                @else
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Login">Go Test</a>
                @endauth
              </div>
            </div>
        </div>
    </div>
</div>
<!-- Login -->
<div class="modal fade" id="Login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="{{url('login-free-test')}}" method="post"> @csrf
          <div class="row">
              <div class="col-md-12 mb-3">
                  <label for="email">Email:</label>
                  <input type="email" name="email" class="form-control mt-2" required>
              </div>
              <div class="col-md-12 mb-3">
                  <label for="password">Password:</label>
                  <input type="password" name="password" class="form-control mt-2" required>
              </div>
              <div class="col-md-12 my-3 text-center">
                  <button type="submit" class="btn btn-primary px-5">Login</button>
              </div>
              <div class="col-md-12 my-2 text-center">
                  Don't have an account, please
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Register" class="fw-bold text-decoration-none text-uppercase px-1">Register</a> 
                  first.
              </div>
          </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Register -->
<div class="modal fade" id="Register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="{{url('register-free-test')}}" method="post"> @csrf
          <div class="row">
              <div class="col-md-12 mb-3">
                  <label for="name">Name:</label>
                  <input type="text" name="name" id="name" class="form-control mt-2" required>
              </div>
              <div class="col-md-12 mb-3">
                  <label for="mobile">Mobile:</label>
                  <input type="text" name="mobile" id="mobile" class="form-control mt-2" required>
              </div>
              <div class="col-md-12 mb-3">
                  <label for="education">Education:</label>
                  <input type="text" name="education" id="education" class="form-control mt-2" required>
              </div>
              <div class="col-md-12 mb-3">
                  <label for="institution">Instituion:</label>
                  <input type="text" name="institution" id="institution" class="form-control mt-2" required>
              </div>
              <div class="col-md-12 mb-3">
                  <label for="email">Email:</label>
                  <input type="email" name="email" id="email" class="form-control mt-2" required>
              </div>
              <div class="col-md-12 mb-3">
                  <label for="password">Password:</label>
                  <input type="password" name="password" id="password" class="form-control mt-2" required>
              </div>
              <div class="col-md-12 my-3 text-center">
                  <button type="submit" class="btn btn-primary px-5">Register</button>
              </div>
              <div class="col-md-12 my-2 text-center">
                  Have an account, please
                  <a href="#" data-bs-toggle="modal" data-bs-target="#Login" class="fw-bold text-decoration-none text-uppercase px-1">Login</a> 
                  now.
              </div>
          </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@endsection
