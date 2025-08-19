@extends('Backend.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6 text-start fs-5">
            <a href="{{url('dashboard')}}">Dashboard</a> |
            <a >MCQs (IELTS - {{count($mcqs)}})</a>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{url('mcqs-yle')}}" class="btn btn-outline-info me-2">YLE</a>
            <a href="{{url('mcqs-esl')}}" class="btn btn-outline-info me-2">ESL</a>
            <a href="{{url('mcqs-ielts')}}" class="btn btn-info me-2">IELTS</a>
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
          <form action="{{url('mcqs')}}" method="post" enctype="multipart/form-data" > @csrf
          <input type="hidden" name="type" value="IELTS">
          <div class="modal-body">
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="question">Question</label>
                    <input type="text" name="question" id="question" value="{{old('question')}}" class="form-control mt-2" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="option1">Option 1</label>
                    <input type="text" name="option1" id="option1" value="{{old('option1')}}" class="form-control mt-2" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="option2">Option 2</label>
                    <input type="text" name="option2" id="option2" value="{{old('option2')}}" class="form-control mt-2" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="option3">Option 3</label>
                    <input type="text" name="option3" id="option3" value="{{old('option3')}}" class="form-control mt-2" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="option4">Option 4</label>
                    <input type="text" name="option4" id="option4" value="{{old('option4')}}" class="form-control mt-2" required>
                </div>
                <div class="col-12 mb-3">
                    <label for="answer">Answer</label>
                    <input type="text" name="answer" id="answer" value="{{old('answer')}}" class="form-control mt-2" required>
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
            @if(count($mcqs)>0)
            <div class="table-responsive">
                <table class="table table-dark table-responsive table-hover table-striped">
                  <thead class="table-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Question</th>
                      <th scope="col">Options</th>
                      <th scope="col" class="text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($mcqs as $data)
                    <tr>
                      <th scope="row">{{$loop->index+1}}</th>
                      <td>{{$data->question}}</td>
                      <td>
                          1. {{$data->option1}}<br>
                          2. {{$data->option2}}<br>
                          3. {{$data->option3}}<br>
                          4. {{$data->option4}}<br>
                          Answer: <span class="text-success">{{$data->answer}}</span>
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
                          <form action="{{url('mcqs/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('put')
                          <input type="hidden" name="type" value="{{$data->type}}">
                          <div class="modal-body">
                            <div class="row">

                                <div class="col-12 mb-3">
                                    <label for="question">Question</label>
                                    <input type="text" name="question" id="question" value="{{$data->question}}" class="form-control mt-2" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="option1">Option 1</label>
                                    <input type="text" name="option1" id="option1" value="{{$data->option1}}" class="form-control mt-2" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="option2">Option 2</label>
                                    <input type="text" name="option2" id="option2" value="{{$data->option2}}" class="form-control mt-2" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="option3">Option 3</label>
                                    <input type="text" name="option3" id="option3" value="{{$data->option3}}" class="form-control mt-2" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="option4">Option 4</label>
                                    <input type="text" name="option4" id="option4" value="{{$data->option4}}" class="form-control mt-2" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="answer">Answer</label>
                                    <input type="text" name="answer" id="answer" value="{{$data->answer}}" class="form-control mt-2" required>
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
                          <form action="{{url('mcqs/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('delete')
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
