@extends('Frontend.frontApp')

@section('content')
<section>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card p-4">
                    <form action="{{url('exam-date-test-store')}}" method="post"> @csrf
                    <input type="hidden" name="exam_title" value="{{$examdate->title}}">
                    <input type="hidden" name="exam_date" value="{{$examdate->date}}">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label for="test_name" class="mb-2">Choose test *</label>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="test_name" value="IELTS Academic" id="IELTSAcademic" checked>
                              <label class="form-check-label" for="IELTSAcademic">
                                IELTS Academic
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="test_name" value="IELTS General Training" id="IELTSGeneralTraining">
                              <label class="form-check-label" for="IELTSGeneralTraining">
                                IELTS General Training
                              </label>
                            </div>
                        </div>
                        <!--@foreach($examdatetimes as $examdatetime)-->
                        <!--<p>{{$examdatetime->time}}</p>-->
                        <!--@endforeach-->
                        <div class="col-md-12 mb-4">
                            <label for="requirement" class="mb-2">Does the test taker have any special requirements for the test? *</label>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="requirement" value="No" id="No" checked>
                              <label class="form-check-label" for="No">
                                No
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="requirement" value="Yes" id="Yes">
                              <label class="form-check-label" for="Yes">
                                Yes
                              </label>
                            </div>
                        </div>
                        <div id="requirement_detail_div" class="col-md-12 mb-4" style="display: none;">
                            <label for="requirement_detail" class="mb-2">Requirements</label>
                            <textarea name="requirement_detail" id="requirement_detail" rows="3" cols="33" class="form-control"></textarea>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="exam_date_time" class="mb-2">Time Schedule *</label>
                            @error('exam_date_time') <div class="alert alert-danger py-2">{{ $message }}</div> @enderror
                            @foreach($examdatetimes as $examdatetime)
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="exam_date_time" value="{{$examdatetime->time}}" id="examdatetime{{$examdatetime->id}}" checked>
                              <label class="form-check-label" for="examdatetime{{$examdatetime->id}}">
                                @if($examdatetime->time){{ \Carbon\Carbon::createFromFormat('H:i', $examdatetime->time)->format('g:i A') }}@endif
                              </label>
                            </div>
                            @endforeach
                        </div>
                        
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const requirementRadios = document.getElementsByName("requirement");
    const requirementDetailDiv = document.getElementById("requirement_detail_div");

    function toggleRequirementDetail() {
      const selectedValue = document.querySelector('input[name="requirement"]:checked').value;
      if (selectedValue === "Yes") {
        requirementDetailDiv.style.display = "block";
      } else {
        requirementDetailDiv.style.display = "none";
      }
    }

    // Initialize visibility on page load
    toggleRequirementDetail();

    // Attach event listeners
    requirementRadios.forEach(radio => {
      radio.addEventListener("change", toggleRequirementDetail);
    });
  });
</script>

                        
                        <div class="col-md-12 mb-4">
                            <label for="name" class="mb-2">Name *</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="phone" class="mb-2">Mobile *</label>
                            <input type="text" name="mobile" id="phone" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="email" class="mb-2">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection