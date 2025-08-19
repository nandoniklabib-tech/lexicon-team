@extends('Backend.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-12">
            <a href="{{url('tests',$testwriting->test_id)}}" class="btn btn-dark ps-1 pe-2 py-0"><i class="bi bi-arrow-left-short"></i> Back</a>
        </div>
    </div>
    <form action="{{url('testwritings',$testwriting->id)}}" method="post"> @csrf @method('put')
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
                <div class="col-md-12 mb-3">
                    <label for="answer1">Task 1:</label>
                    <textarea name="answer1" id="answer1" class="form-control mt-2" cols="33" rows="10" disabled>{{$testwriting->answer1}}</textarea>
                </div>
                <div class="col-md-12">
                    <label for="mark1">Mark 1:</label>
                    <input type="number" name="mark1" value="{{$testwriting->mark1}}" class="form-control">
                </div>
            </div>
        </div>
    </div>
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
                <div class="col-md-12 mb-3">
                    <label for="answer2">Task 2:</label>
                    <textarea name="answer2" id="answer2" class="form-control mt-2" cols="33" rows="10" disabled>{{$testwriting->answer2}}</textarea>
                </div>
                <div class="col-md-12">
                    <label for="mark2">Mark 2:</label>
                    <input type="number" name="mark2" value="{{$testwriting->mark2}}" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-success px-5">Submit</button>
        </div>
    </div>
    </form>
</div>
@endsection
