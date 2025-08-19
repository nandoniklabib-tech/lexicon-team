@extends('Frontend.frontApp')

@section('content')
<form action="{{url('free-mock-test-writing-store')}}" method="post"> @csrf
<div class="container py-4">
    
    <div class="row justify-content-center mb-3">
        <div class="col-md-6 mb-md-0 mb-4">
            <a href="{{url('free-mock-test')}}" class="btn btn-dark ps-1 pe-2 py-0"><i class="bi bi-arrow-left-short"></i> Back</a>
            <button type="submit" class="btn btn-success ms-3 px-2 py-0 fw-bold">FINISH</button>
        </div>
        <div class="col-md-6 text-end">
            <ul class="nav nav-pills mb-3 justify-content-md-end justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link px-2 py-0 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Task 1</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link px-2 py-0" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Task 2</button>
              </li>
            </ul>
        </div>
    </div>
    
    <div class="row justify-content-center mb-3">
        <div class="col-md-12">

            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <div class="card p-4">
                            <h3>TASK 1</h3>
                            <p>You should spend about 20 minutes on this task. Write at least 150 words.</p>
                            <p>After you finish, use the checklist to evaluate your writing task. Then, compare your task with the sample answer.</p>
                            <p>The graph below shows the population of India and China from the year 2000 to the present day with projections for growth to the year 2050.</p>
                            <p>Summarise the information by selecting and reporting the main features, and make comparisons where relevant.</p>
                            <img class="img-fluid" src="{{asset('custom/freeMockTest/writing/writing1.png')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-4">
                            <label for="answer1">Task 1:</label>
                            <textarea name="answer1" id="answer1" class="form-control mt-2" cols="33" rows="10" required></textarea>
                        </div>
                    </div>
                </div> 
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-6">
                        <div class="card p-4">
                            <h3>TASK 2</h3>
                            <p>You should spend about 40 minutes on this task. Write at least 250 words</p>
                            <p>After you finish, use the checklist to evaluate your writing task. Then, compare your task with the sample answer.</p>
                            <p>Write about the following topic: Many people go through life doing work that they hate or have no talent for. Why does this happen? What are the consequences of this situation?</p>
                            <p>Give reasons for your answer and include any relevant examples from your own knowledge or experience.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-4">
                            <label for="answer2">Task 2:</label>
                            <textarea name="answer2" id="answer2" class="form-control mt-2" cols="33" rows="10" required></textarea>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
    


    <!--<div class="row justify-content-center">-->
    <!--    <div class="col-md-12 text-center">-->
    <!--        <button type="submit" class="btn btn-success px-5 fw-bold">FINISH</button>-->
    <!--    </div>-->
    <!--</div>-->
    
</div>
</form>
@endsection
