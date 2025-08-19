@extends('Backend.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6 text-start fs-5">
            <a href="{{url('dashboard')}}">Dashboard</a> |
            <a href="{{url('categories')}}">Categories</a> |
            <a >{{$category->title}}</a> |
            <a >Courses</a>
        </div>
        <div class="col-md-6 text-end">
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Add">Add New</a>
        </div>
    </div>
    <!-- Add -->
    <div class="modal fade" id="Add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Create Form</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{url('courses')}}" method="post" enctype="multipart/form-data" > @csrf
          <input type="hidden" name="category_id" value="{{$category->id}}">
          <div class="modal-body">
            <div class="row">
                
                <div class="col-md-6 mb-3">
                    <label for="heading">heading</label>
                    <input type="text" name="heading" id="heading" value="{{old('heading')}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="sub_heading">sub_heading</label>
                    <input type="text" name="sub_heading" id="sub_heading" value="{{old('sub_heading')}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="title">title *</label>
                    <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control mt-2" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="sub_title">sub_title</label>
                    <input type="text" name="sub_title" id="sub_title" value="{{old('sub_title')}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="image">image [ 1*1 ]</label>
                    <input type="file" name="image" id="image" value="{{old('image')}}" class="form-control mt-2">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="price">price</label>
                    <input type="number" name="price" id="price" value="{{old('price')}}" class="form-control mt-2">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="short_description">short_description</label>
                    <input type="text" name="short_description" id="short_description" value="{{old('short_description')}}" class="form-control mt-2">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="description">description</label>
                    <textarea name="description" rows="3" cols="33" class="form-control mt-2" id="description">{!!old('description')!!}</textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="start_date">Batch Start</label>
                    <input type="text" name="start_date" id="start_date" value="{{old('start_date')}}" class="form-control mt-2">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="class_schedule">Live classes</label>
                    <input type="text" name="class_schedule" id="class_schedule" value="{{old('class_schedule')}}" class="form-control mt-2">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="support">Instant support</label>
                    <input type="text" name="support" id="support" value="{{old('support')}}" class="form-control mt-2">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="seats">Seats remaining</label>
                    <input type="text" name="seats" id="seats" value="{{old('seats')}}" class="form-control mt-2">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="batch_name">Admission is ongoing.</label>
                    <input type="text" name="batch_name" id="batch_name" value="{{old('batch_name')}}" class="form-control mt-2">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="extra_title">extra_title</label>
                    <input type="text" name="extra_title" id="extra_title" value="{{old('extra_title')}}" class="form-control mt-2">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="extra_description">extra_description</label>
                    <textarea name="extra_description" rows="3" cols="33" class="form-control mt-2" id="extra_description">{!!old('extra_description')!!}</textarea>
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
            @if(count($courses)>0)
            <div class="table-responsive">
                <table class="table table-dark table-responsive table-hover table-striped">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Title</th>
                      <th scope="col" class="text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($courses as $data)
                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{$data->title}}</td>
                      <td class="text-end text-nowrap">
                          <a href="{{url('course/'.$data->id.'/trainers')}}" class="btn btn-outline-primary fw-bold px-1 py-0" >Trainers</a>
                          <a href="{{url('course/'.$data->id.'/contents')}}" class="btn btn-outline-primary fw-bold px-1 py-0" >Contents</a>
                          <a href="{{url('course/'.$data->id.'/features')}}" class="btn btn-outline-primary fw-bold px-1 py-0" >Features</a>
                          <a href="#" class="btn btn-outline-success fw-bold px-1 py-0" data-bs-toggle="modal" data-bs-target="#Edit{{$data->id}}">Edit</a>
                          <a href="#" class="btn btn-outline-danger fw-bold px-1 py-0" data-bs-toggle="modal" data-bs-target="#Delete{{$data->id}}">Delete</a>
                      </td>
                    </tr>
                    <!-- Edit{{$data->id}} -->
                    <div class="modal fade" id="Edit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Form</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form action="{{url('courses/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('put')
                          <div class="modal-body">
                            <div class="row">
                                
                                <div class="col-md-4 mb-3">
                                    <label for="heading">heading</label>
                                    <input type="text" name="heading" id="heading" value="{{$data->heading}}" class="form-control mt-2">
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label for="sub_heading">sub_heading</label>
                                    <input type="text" name="sub_heading" id="sub_heading" value="{{$data->sub_heading}}" class="form-control mt-2">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="title">title</label>
                                    <input type="text" name="title" id="title" value="{{$data->title}}" class="form-control mt-2" required>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label for="sub_title">sub_title</label>
                                    <input type="text" name="sub_title" id="sub_title" value="{{$data->sub_title}}" class="form-control mt-2">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="image">Image [ 1*1 ]</label>
                                    <img width="25px" height="25px" src="{{asset('images/courses/'.$data->image)}}" alt="image">
                                    <input type="file" name="image" id="image" value="{{$data->image}}" class="form-control mt-2">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="price">price</label>
                                    <input type="number" name="price" id="price" value="{{$data->price}}" class="form-control mt-2">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="short_description">short_description</label>
                                    <input type="text" name="short_description" id="short_description" value="{{$data->short_description}}" class="form-control mt-2">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="description">description</label>
                                    <textarea name="description" rows="3" cols="33" class="form-control mt-2" id="description{{$data->id}}">{!!$data->description!!}</textarea>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="start_date">Batch Start</label>
                                    <input type="text" name="start_date" id="start_date" value="{{$data->start_date}}" class="form-control mt-2">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="class_schedule">Live classes</label>
                                    <input type="text" name="class_schedule" id="class_schedule" value="{{$data->class_schedule}}" class="form-control mt-2">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="support">Instant support</label>
                                    <input type="text" name="support" id="support" value="{{$data->support}}" class="form-control mt-2">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="seats">Seats remaining</label>
                                    <input type="text" name="seats" id="seats" value="{{$data->seats}}" class="form-control mt-2">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="batch_name">Admission is ongoing.</label>
                                    <input type="text" name="batch_name" id="batch_name" value="{{$data->batch_name}}" class="form-control mt-2">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="extra_title">extra_title</label>
                                    <input type="text" name="extra_title" id="extra_title" value="{{$data->extra_title}}" class="form-control mt-2">
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="extra_description">extra_description</label>
                                    <textarea name="extra_description" rows="3" cols="33" class="form-control mt-2" id="extra_description{{$data->id}}">{!!$data->extra_description!!}</textarea>
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
                          <form action="{{url('courses/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('delete')
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
<script>
    ClassicEditor
        .create( document.querySelector('#extra_description'));
</script>

@foreach($courses as $data)
<script>
    ClassicEditor
        .create( document.querySelector('#description{{$data->id}}'));
</script>
<script>
    ClassicEditor
        .create( document.querySelector('#extra_description{{$data->id}}'));
</script>
@endforeach
@endsection
