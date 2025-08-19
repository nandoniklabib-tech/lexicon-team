@extends('Backend.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12 text-start fs-5">
            <a href="{{url('dashboard')}}">Dashboard</a> |
            <a >Lexiflies</a>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12">
            @if(count($lexiflies)>0)
            <div class="table-responsive">
                <table class="table table-dark table-responsive table-hover table-striped">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Date & Time</th>
                      <th scope="col">Type</th>
                      <th scope="col">Country</th>
                      <th scope="col">University</th>
                      <th scope="col">Name</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Email</th>
                      <th scope="col" class="text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($lexiflies as $data)
                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td class="text-nowrap">{{$data->created_at->setTimezone('Asia/Dhaka')->format('d M Y - h:i A')}}</td>
                      <td class="text-nowrap">{{$data->type}}</td>
                      <td class="text-nowrap">{{$data->country}}</td>
                      <td class="text-nowrap">{{$data->university}}</td>
                      <td class="text-nowrap">{{$data->name}}</td>
                      <td class="text-nowrap">{{$data->phone}}</td>
                      <td class="text-nowrap">{{$data->email}}</td>
                      <td class="text-end text-nowrap">
                          <!--<a href="#" class="btn btn-outline-success fw-bold px-1 py-0" data-bs-toggle="modal" data-bs-target="#Edit{{$data->id}}">Edit</a>-->
                          <a href="#" class="btn btn-outline-danger fw-bold px-1 py-0" data-bs-toggle="modal" data-bs-target="#Delete{{$data->id}}">Delete</a>
                      </td>
                    </tr>
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
                          <form action="{{url('lexiflies/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('delete')
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
