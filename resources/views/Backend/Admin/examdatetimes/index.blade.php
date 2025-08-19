@extends('Backend.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6 text-start fs-5">
            <a href="{{url('dashboard')}}">Dashboard</a> |
            <a href="{{url('examdates')}}">Exam Dates</a> |
            <a >Exam Date Times</a>
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
          <form action="{{url('examdatetimes')}}" method="post" enctype="multipart/form-data" > @csrf
          <input type="hidden" name="examdate_id" value="{{$examdate->id}}">
          <div class="modal-body">
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="time">Time</label>
                    <input type="time" name="time" id="time" value="{{old('time')}}" class="form-control mt-2" required>
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
            @if(count($examdatetimes)>0)
            <div class="table-responsive">
                <table class="table table-dark table-responsive table-hover table-striped">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Time</th>
                      <th scope="col" class="text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($examdatetimes as $data)
                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{ \Carbon\Carbon::createFromFormat('H:i', $data->time)->format('g:i A') }}</td>
                      <td class="text-end text-nowrap">
                          <a href="#" class="btn btn-outline-success fw-bold px-1 py-0" data-bs-toggle="modal" data-bs-target="#Edit{{$data->id}}">Edit</a>
                          <!--<a href="#" class="btn btn-outline-danger fw-bold px-1 py-0" data-bs-toggle="modal" data-bs-target="#Delete{{$data->id}}">Delete</a>-->
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
                          <form action="{{url('examdatetimes/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('put')
                          <div class="modal-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="title">Title</label>
                                    <select name="title" id="title" class="form-select mt-2" required>
                                        <option value="{{$data->title}}" hidden>{{$data->title}}</option>
                                        <option value="A/O level exam">A/O level exam</option>
                                        <option value="Ielts on computer">Ielts on computer</option>
                                        <option value="Ielts paper based exam">Ielts paper based exam</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="date">Date</label>
                                    <input type="date" name="date" id="date" value="{{$data->date}}" class="form-control mt-2" required>
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
                          <form action="{{url('examdatetimes/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('delete')
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
