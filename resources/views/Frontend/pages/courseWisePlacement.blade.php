@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-3 py-md-5">
        <div class="row">
          <div class="col-12">
            <div class="page-banner" style="background-image: url('{{asset("images/settings/".$setting->placement_image)}}');">
              <h3 class="text-center text-md-start pt-5 ps-0 ps-md-5">Placement Test</h3>
            </div>
          </div>
        </div>

        <form action="{{url('placement-store')}}" method="post"  enctype="multipart/form-data"> @csrf
        <div class="row mt-5">
            
          <div class="col-12">
            <h3 class="lexicon-heading">Placement Test</h3>
            <span class="fs-5">Students Personal Information</span>
            <span>(As Indicate on your Passport)</span>
          </div>

          <!--<div class="col-md-4 my-3">-->
          <!--  <label for="test_type">Type Of Test</label>-->
          <!--  <select name="test_type" id="test_type" class="form-select mt-2 white-form-control">-->
          <!--    <option value="Place Holder">Place Holder</option>-->
          <!--    <option value="Abc">Abc</option>-->
          <!--  </select>-->
          <!--</div>-->
          
          <div class="col-md-4 my-3">
            <label for="enrollment_date">Enrollment Date</label>
            <input type="date" name="enrollment_date" id="enrollment_date" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="batch">Bacth</label>
            <input type="text" name="batch" id="batch" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="father_name">Father's Name</label>
            <input type="text" name="father_name" id="father_name" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="mother_name">Mother's Name</label>
            <input type="text" name="mother_name" id="mother_name" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="email">Mailing Address</label>
            <input type="email" name="email" id="email" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="blood_group">Blood Group</label>
            <input type="text" name="blood_group" id="blood_group" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="profession">Study/Work</label>
            <input type="text" name="profession" id="profession" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="phone">Cell Number</label>
            <input type="text" name="phone" id="phone" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="gurdian_phone">Gurdian Cell No.</label>
            <input type="text" name="gurdian_phone" id="gurdian_phone" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="fb">FB</label>
            <input type="text" name="fb" id="fb" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="course_start">Course Starts</label>
            <input type="date" name="course_start" id="course_start" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="course_end">Course Ends</label>
            <input type="date" name="course_end" id="course_end" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="reference">Reference</label>
            <input type="text" name="reference" id="reference" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="image">Photo</label>
            <input type="file" name="image" id="image" class="form-control mt-2 white-form-control" required>
          </div>
  
          <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary-2 px-5 py-2">SUBMIT</button>
          </div>


        </div>
        </form>
        
      </div>
    </section>
    
@endsection
