@extends('Backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <table class="table table-dark table-responsive table-hover table-striped">
              <thead class="table-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Date & Time</th>
                  <th scope="col">Test ID</th>
                  <th scope="col">Student Name</th>
                  <th scope="col">Student Email</th>
                  <th scope="col">Student Education</th>
                  <th scope="col">Student Institute</th>
                  <th scope="col" class="text-end">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tests as $data)
                <tr>
                  <th scope="row">{{$loop->index+1}}</th>
                  <td class="text-nowrap">{{$data->created_at->setTimezone('Asia/Dhaka')->format('d M Y - h:i A')}}</td>
                  <td>{{$data->id}}</td>
                  <td>{{$data->user->name}}</td>
                  <td>{{$data->user->email}}</td>
                  <td>{{$data->user->education}}</td>
                  <td>{{$data->user->institution}}</td>
                  <td class="text-end">
                    <a href="{{url('tests',$data->id)}}" class="btn btn-outline-primary py-0 px-1 fw-bold">Show</a>  
                    <!--<a href="#" class="btn btn-outline-success py-0 px-1 fw-bold" data-bs-toggle="modal" data-bs-target="#Edit{{$data->id}}">Edit</a>  -->
                    <a href="#" class="btn btn-outline-danger py-0 px-1 fw-bold" data-bs-toggle="modal" data-bs-target="#Delete{{$data->id}}">Delete</a> 
                  </td>
                </tr>
                <!-- Edit{{$data->id}} -->
                <div class="modal fade" id="Edit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <form action="{{url('tests',$data->id)}}" method="post" enctype="multipart/form-data"> @csrf @method('put')
                      <div class="modal-body">
                        <input type="text" name="name" value="{{$data->name}}" class="form-control" placeholder="Course Name Here">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
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
                      <form action="{{url('tests',$data->id)}}" method="post" enctype="multipart/form-data"> @csrf @method('delete')
                      <div class="modal-body fs-3 text-danger text-center">
                        Are you sure ?
                      </div>
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
    </div>
</div>
@endsection
