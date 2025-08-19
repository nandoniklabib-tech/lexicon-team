@extends('Frontend.frontApp')

@section('content')

<div class="container py-3">
    <form action="{{url('mcq-check')}}" method="get"> @csrf
    <div class="row">
        <div class="col-12 text-center fs-3 mb-3">YLE Placement Test <hr></div>    
        <input type="hidden" name="type" value="YLE">
        <input type="hidden" name="mcqstudent_id" value="{{$mcqstudent_id}}">
        @foreach($mcqs as $mcq)
        <div class="col-md-6 mb-5">
            {{$loop->index+1}}. {{$mcq->question}} <br>
            
            <div class="form-check">
              <input class="form-check-input" type="radio" name="answers[{{ $mcq->id }}]" value="{{ $mcq->option1 }}" id="option1{{$mcq->id}}" required>
              <label class="form-check-label" for="option1{{$mcq->id}}">
                {{$mcq->option1}}
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="answers[{{ $mcq->id }}]" value="{{ $mcq->option2 }}" id="option2{{$mcq->id}}">
              <label class="form-check-label" for="option2{{$mcq->id}}">
                {{$mcq->option2}}
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="answers[{{ $mcq->id }}]" value="{{ $mcq->option3 }}" id="option3{{$mcq->id}}">
              <label class="form-check-label" for="option3{{$mcq->id}}">
                {{$mcq->option3}}
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="answers[{{ $mcq->id }}]" value="{{ $mcq->option4 }}" id="option4{{$mcq->id}}">
              <label class="form-check-label" for="option4{{$mcq->id}}">
                {{$mcq->option4}}
              </label>
            </div>
            <!--Answer : {{$mcq->answer}}-->
        </div>
        @endforeach
        <div class="col-12 text-center mt-5">
            <button type="submit" class="btn btn-success px-5">SUBMIT</button>
        </div>
    </div>
    </form>
</div>

@endsection