@extends('Backend.app')

@section('content')
<div class="container-fluid pt-5">
    <div class="row justify-content-around align-items-center">
        <div class="col-md-4 mb-3">
              <form action="{{url('profile-update/'.$user->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('put')

                <div class="row justify-content-center">
                    <div class="col-12 mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="email">Email</label>
                        <input type="email" disabled value="{{$user->email}}" class="form-control mt-2">
                    </div>
                    <div class="col-12 my-3">
                        <button type="submit" class="btn btn-success">Save changes</button>    
                    </div>
                </div>
                

              </form>
        </div>
        <div class="col-md-4 mb-3">
<form action="{{ url('profile-password-reset/' . $user->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row justify-content-center">
        <div class="col-12 mb-3">
            <label for="old_password">Old Password</label>
            <input type="password" name="old_password" id="old_password" class="form-control mt-2 @error('old_password') is-invalid @enderror" required>
            @error('old_password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        </div>
        <div class="col-12 mb-3">
            <label for="new_password">New Password</label>
            <input type="password" name="new_password" id="new_password" class="form-control mt-2 @error('new_password') is-invalid @enderror" required>
            @error('new_password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        </div>
        <div class="col-12 mb-3">
            <label for="new_password_confirmation">Confirm Password</label>
            <input type="password" name="new_password_confirmation" id="new_password_confirmation" class="form-control mt-2 @error('new_password_confirmation') is-invalid @enderror" required>
            @error('new_password_confirmation')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        </div>
        <div class="col-12 my-3">
            <button type="submit" class="btn btn-success">Save changes</button>    
        </div>
    </div>
</form>

        </div>
    </div>
</div>

@endsection
