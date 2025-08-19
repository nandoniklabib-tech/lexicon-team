@extends('Backend.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6 text-start fs-5">
            <a href="{{url('dashboard')}}">Dashboard</a> |
            <a >Scorers</a>
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
          <form action="{{url('scorers')}}" method="post" enctype="multipart/form-data" > @csrf
          <div class="modal-body">
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control mt-2" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="image">Image [ 1*1 ]</label>
                    <input type="file" name="image" id="image" class="form-control mt-2" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="speaking">Speaking</label>
                    <input type="text" name="speaking" id="speaking" value="{{old('speaking')}}" class="form-control mt-2" required>

                    <input type="hidden" name="speaking_status" value="0">
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="speaking_status" type="checkbox" value="1">
                    </div>
                
                </div>
                <div class="col-md-6 mb-3">
                    <label for="listening">Listening</label>
                    <input type="text" name="listening" id="listening" value="{{old('listening')}}" class="form-control mt-2" required>

                    <input type="hidden" name="listening_status" value="0">
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="listening_status" type="checkbox" value="1">
                    </div>
                
                </div>
                <div class="col-md-6 mb-3">
                    <label for="reading">Reading</label>
                    <input type="text" name="reading" id="reading" value="{{old('reading')}}" class="form-control mt-2" required>

                    <input type="hidden" name="reading_status" value="0">
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="reading_status" type="checkbox" value="1">
                    </div>
                
                </div>
                <div class="col-md-6 mb-3">
                    <label for="writing">Writing</label>
                    <input type="text" name="writing" id="writing" value="{{old('writing')}}" class="form-control mt-2" required>

                    <input type="hidden" name="writing_status" value="0">
                    <div class="form-check form-switch">
                        <input class="form-check-input" name="writing_status" type="checkbox" value="1">
                    </div>
                
                </div>
                <div class="col-md-12 mb-3">
                    <label for="score">Total Score</label>
                    <input type="text" name="score" id="score" value="{{old('score')}}" class="form-control mt-2" required>
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
            @if(count($scorers)>0)
            <div class="table-responsive">
                <table class="table table-dark table-responsive table-hover table-striped">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col" class="text-center">Image</th>
                      <th scope="col" class="text-center">Speaking</th>
                      <th scope="col" class="text-center">Listening</th>
                      <th scope="col" class="text-center">Reading</th>
                      <th scope="col" class="text-center">Writing</th>
                      <th scope="col" class="text-center">Score</th>
                      <th scope="col" class="text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($scorers as $data)
                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{$data->name}}</td>
                      <td class="text-center"><img width="40px" height="40px" src="{{asset('images/scorers/'.$data->image)}}" alt="image"></td>
                      <td class="text-center">{{$data->speaking}}</td>
                      <td class="text-center">{{$data->listening}}</td>
                      <td class="text-center">{{$data->reading}}</td>
                      <td class="text-center">{{$data->writing}}</td>
                      <td class="text-center">{{$data->score}}</td>
                      <td class="text-end text-nowrap">
                          <a href="#" class="btn btn-outline-success fw-bold px-1 py-0" data-bs-toggle="modal" data-bs-target="#Edit{{$data->id}}">Edit</a>
                          <a href="#" class="btn btn-outline-danger fw-bold px-1 py-0" data-bs-toggle="modal" data-bs-target="#Delete{{$data->id}}">Delete</a>
                      </td>
                    </tr>
                    <!-- Edit{{$data->id}} -->
                    <div class="modal fade" id="Edit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Form</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="{{url('scorers/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('put')
                          <div class="modal-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" value="{{$data->name}}" class="form-control mt-2" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="image">Image [ 1*1 ]</label>
                                    <img width="200px" height="200px" src="{{asset('images/scorers/'.$data->image)}}" alt="image">
                                    <input type="file" name="image" id="image" class="form-control mt-2">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="speaking">Speaking</label>
                                    <input type="text" name="speaking" id="speaking" value="{{$data->speaking}}" class="form-control mt-2">
                                    
                                    <div class="form-check form-switch">
                                      <input type="hidden" name="speaking_status" value="0">
                                      <input class="form-check-input" name="speaking_status" type="checkbox" role="switch" id="flexSwitchCheckChecked"  value="1" {{ $data->speaking_status ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="listening">Listening</label>
                                    <input type="text" name="listening" id="listening" value="{{$data->listening}}" class="form-control mt-2">                                    
                                    <div class="form-check form-switch">
                                      <input type="hidden" name="listening_status" value="0">
                                      <input class="form-check-input" name="listening_status" type="checkbox" role="switch" id="flexSwitchCheckChecked"  value="1" {{ $data->listening_status ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="reading">Reading</label>
                                    <input type="text" name="reading" id="reading" value="{{$data->reading}}" class="form-control mt-2">                                    
                                    <div class="form-check form-switch">
                                      <input type="hidden" name="reading_status" value="0">
                                      <input class="form-check-input" name="reading_status" type="checkbox" role="switch" id="flexSwitchCheckChecked"  value="1" {{ $data->reading_status ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="writing">Writing</label>
                                    <input type="text" name="writing" id="writing" value="{{$data->writing}}" class="form-control mt-2">                                    
                                    <div class="form-check form-switch">
                                      <input type="hidden" name="writing_status" value="0">
                                      <input class="form-check-input" name="writing_status" type="checkbox" role="switch" id="flexSwitchCheckChecked"  value="1" {{ $data->writing_status ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="score">Total Score</label>
                                    <input type="text" name="score" id="score" value="{{$data->score}}" class="form-control mt-2">
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
                          <form action="{{url('scorers/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('delete')
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Yes</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </tbody>
                </table>
            </div>
            @else
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
