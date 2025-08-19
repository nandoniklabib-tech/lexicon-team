@extends('Backend.MockTest.layouts.app')

@section('content')

  <style>
    .mock-card-one{
      text-decoration:none;
      text-align:center;
      border:2px solid black;
      padding:50px 10px; 
      display:block;
      font-size:22px;
      color:black;
      font-weight:500;
      margin-bottom:30px;
    }
  </style>
    <section>
      <div class="container">

        <!-- <div class="row justify-content-center">
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/1/dashboard')}}" class="mock-card-one">Mock Test 1</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/2/dashboard')}}" class="mock-card-one">Mock Test 2</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/3/dashboard')}}" class="mock-card-one">Mock Test 3</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/4/dashboard')}}" class="mock-card-one">Mock Test 4</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/5/dashboard')}}" class="mock-card-one">Mock Test 5</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/6/dashboard')}}" class="mock-card-one">Mock Test 6</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/7/dashboard')}}" class="mock-card-one">Mock Test 7</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/8/dashboard')}}" class="mock-card-one">Mock Test 8</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/9/dashboard')}}" class="mock-card-one">Mock Test 9</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/10/dashboard')}}" class="mock-card-one">Mock Test 10</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/11/dashboard')}}" class="mock-card-one">Mock Test 11</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/12/dashboard')}}" class="mock-card-one">Mock Test 12</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/13/dashboard')}}" class="mock-card-one">Mock Test 13</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/14/dashboard')}}" class="mock-card-one">Mock Test 14</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/15/dashboard')}}" class="mock-card-one">Mock Test 15</a>
          </div>
          <div class="col-md-3">
            <a href="{{url('admin/mocktest/16/dashboard')}}" class="mock-card-one">Mock Test 16</a>
          </div>
        </div> -->

      </div>
    </section>

    <section>
      <div class="container-fluid py-2">

        <div class="row">
            <div class="col-12">
                @if(count($testwritings)>0)
                <div class="table-responsive">
                    <table class="table table-dark table-responsive table-hover table-striped">
                      <thead class="table-dark">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">TestInfo</th>
                          <th scope="col">StudentInfo</th>
                          <th scope="col" class="text-end">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($testwritings as $data)
                        <tr>
                          <th scope="row">{{$loop->index+1}}</th>
                          <td>{{$data->exam}}</td>
                          <td>
                            {{$data->name}} <br>
                            {{$data->email}}
                          </td>
                          <td class="text-end text-nowrap">
                              <a href="{{url('admin/mocktest/writing/pdf/'.$data->id)}}" target="_blank" class="btn btn-outline-primary fw-bold px-1 py-0">PDF</a>
                              <a href="#" class="btn btn-outline-success fw-bold px-1 py-0" data-bs-toggle="modal" data-bs-target="#Edit{{$data->id}}">Marking</a>
                              <a href="#" class="btn btn-outline-danger fw-bold px-1 py-0" data-bs-toggle="modal" data-bs-target="#Delete{{$data->id}}">Delete</a>
                          </td>
                        </tr>
                        <!-- Edit{{$data->id}} -->
                        <div class="modal fade" id="Edit{{$data->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                  {{$data->exam}}
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form action="{{url('testwritings/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('put')
                              <div class="modal-body">
                                <div class="row justify-content-center">
                                  
                                    <div class="col-md-6 mb-3">
                                      <h5 class="fw-bold">Answer Part1: </h5>
                                       <p>{{$data->answer1}}</p>
                                       <label for="mark1">Mark for Part1 *</label>
                                       <input type="number" name="mark1" id="mark1{{$data->id}}" value="{{$data->mark1}}" min="1" max="9" class="form-control mt-2">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                      <h5 class="fw-bold">Answer Part2: </h5>
                                       <p>{{$data->answer1}}</p>
                                       <label for="mark2">Mark for Part2 *</label>
                                       <input type="number" name="mark2" id="mark2{{$data->id}}" value="{{$data->mark2}}" min="1" max="9" class="form-control mt-2">
                                    </div>

                                    <div class="col-4">
                                      <div class=" text-white fs-1 text-center">
                                          Band Score: <span id="bScore{{$data->id}}">0</span>
                                      </div>
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
                              <form action="{{url('testwritings/'.$data->id)}}" method="post" enctype="multipart/form-data" > @csrf @method('delete')
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
    </section>

<script>
  // Wait for DOM to be ready
  window.addEventListener('DOMContentLoaded', () => {
    // Select all inputs that start with ID 'mark1'
    document.querySelectorAll('input[id^="mark1"]').forEach(input => {
      const id = input.id.replace('mark1', '');

      const mark1Input = document.getElementById('mark1' + id);
      const mark2Input = document.getElementById('mark2' + id);
      const bScoreSpan = document.getElementById('bScore' + id);

      function updateScore() {
        const val1 = parseFloat(mark1Input.value) || 0;
        const val2 = parseFloat(mark2Input.value) || 0;

        if (val1 > 0 && val2 > 0) {
          bScoreSpan.textContent = ((val1 + val2) / 2).toFixed(1);
        } else {
          bScoreSpan.textContent = 0;
        }
      }

      mark1Input.addEventListener('input', updateScore);
      mark2Input.addEventListener('input', updateScore);

      // Initial score update on page load
      updateScore();
    });
  });
</script>



@endsection