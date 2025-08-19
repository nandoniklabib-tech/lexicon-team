@extends('Backend.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 text-start fs-5">
            <a href="{{url('dashboard')}}">Dashboard</a> |
            <a href="{{url('blogcategories')}}">Categories</a> |
            <a >{{$blogcategory->title}}</a> |
            <a >Blogs</a>
        </div>
        <div class="col-md-4 text-end">
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
          <form action="{{url('blogs')}}" method="post" enctype="multipart/form-data" > @csrf
          <input type="hidden" name="blogcategory_id" value="{{$blogcategory->id}}">
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
                <div class="col-12 mb-3">
                    <label for="description">Description</label>
                    <textarea name="description" rows="3" cols="33" class="form-control mt-2" id="description">{!!old('description')!!}</textarea>
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
            @if(count($blogs)>0)
            <div class="table-responsive">
                <table class="table table-dark table-responsive table-hover table-striped">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col" class="text-center">Image</th>
                      <th scope="col" class="text-center">Description</th>
                      <th scope="col" class="text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($blogs as $data)
                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{$data->title}}</td>
                      <td class="text-center"><img width="100px" height="70px" src="{{asset('images/blogs/'.$data->image)}}" alt="image"></td>
                      <td class="text-center">
                        <a href="#" class="myTooltips" data-bs-custom-class="myTooltipColor" data-bs-placement="top" title="{!!$data->description!!}">
                            Hover Me
                        </a>
                      </td>
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
                          <form action="{{url('blogs/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('put')
                          <div class="modal-body">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" value="{{$data->title}}" class="form-control mt-2" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="image">Image [ 3*2 ]</label>
                                    <img width="200px" height="140px" src="{{asset('images/blogs/'.$data->image)}}" alt="image">
                                    <input type="file" name="image" id="image" class="form-control mt-2">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" rows="3" cols="33" class="form-control mt-2" id="description{{$data->id}}">{!!$data->description!!}</textarea>
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
                          <form action="{{url('blogs/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('delete')
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

<!-- editor -->
<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector('#description'));
</script>

@foreach($blogs as $data)
<script>
    ClassicEditor
        .create( document.querySelector('#description{{$data->id}}'));
</script>
@endforeach

@endsection
