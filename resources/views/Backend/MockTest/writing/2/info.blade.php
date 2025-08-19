@extends('Backend.MockTest.layouts.app')

@section('content')
<div class="container py-5">

    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
              <form class="card bg-white p-4" action="{{url('admin/mocktest/writing/2/store')}}" method="post" enctype="multipart/form-data" > @csrf
                <div class="row">
                    
                    <div class="col-12 mb-3">
                        <label for="name" class="d-flex justify-content-between">
                            Name *
                        </label>
                        <input type="text" name="name" id="name" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="phone" class="d-flex justify-content-between">
                            Phone *
                            <i class="bi bi-info-circle" data-bs-toggle="tooltip" title="For contact with you."></i>
                        </label>
                        <input type="text" name="phone" id="phone" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="email" class="d-flex justify-content-between">
                            Email *
                            <i class="bi bi-info-circle" data-bs-toggle="tooltip" title="Please provide a valid email address, as we will send your result to that email."></i>
                        </label>
                        <input type="email" name="email" id="email" class="form-control mt-2" required>
                    </div>
                    <div class="col-12 mb-0 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                </div>
              </form>
      </div>
    </div>
</div>
@endsection