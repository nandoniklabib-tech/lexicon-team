@extends('Backend.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6 text-start fs-5">
            <a href="{{url('dashboard')}}">Dashboard</a> |
            <a >Events</a>
        </div>
        <div class="col-md-6 text-end">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Add">Add New</a>
        </div>
    </div>
    <!-- Add -->
    <div class="modal fade" id="Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Create Form</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{url('events')}}" method="post" enctype="multipart/form-data" > @csrf
          <div class="modal-body">
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control mt-2" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="image">Image [ 3*2 ]</label>
                    <input type="file" name="image" id="image" class="form-control mt-2" required>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            <div class="row">
            @if(count($events)>0)
            @foreach($events as $data)
                <div class="col-md-4 mb-3">
                    <div class="card p-2 event-card" style="background-image:url('{{asset("images/events/".$data->image)}}');">
                        <div class="text-white" style="text-shadow:2px 2px 2px black;">{{$data->title}}</div>
                        <div class="text-center">
                            <a href="#" class="btn btn-success fw-bold px-1 py-0" data-bs-toggle="modal" data-bs-target="#Edit{{$data->id}}">Edit</a>
                            <a href="#" class="btn btn-danger fw-bold px-1 py-0" data-bs-toggle="modal" data-bs-target="#Delete{{$data->id}}">Delete</a>
                        </div>
                    </div>
                </div>
                <!-- Edit{{$data->id}} -->
                <div class="modal fade" id="Edit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Form</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="{{url('events/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('put')
                      <div class="modal-body">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" value="{{$data->title}}" class="form-control mt-2" required>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="image">Image [ 3*2 ]</label>
                                <img width="200px" height="140px" src="{{asset('images/events/'.$data->image)}}" alt="image">
                                <input type="file" name="image" id="image" class="form-control mt-2">
                            </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Delete{{$data->id}} -->
                <div class="modal fade" id="Delete{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Confirmation</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body fw-bold fs-3 text-center text-danger">
                        Are you sure ?
                      </div>
                      <form action="{{url('events/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('delete')
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
            @endforeach
            @else
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card px-2 py-5 fs-2 text-center">
                        No data avialable
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@endsection
