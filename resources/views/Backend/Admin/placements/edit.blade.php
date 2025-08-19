@extends('Backend.app')

@section('content')

    <section class="main-content-background">
      
    <div class="container-fluid">    
        <div class="row justify-content-center">
            <div class="col-md-12 text-start fs-5">
                <a href="{{url('dashboard')}}">Dashboard</a> |
                <a href="{{url('placements')}}">Placements</a> |
                <a >Edit Form</a>
            </div>
        </div>
    </div>
    
      <div class="container py-md-5">

        <form action="{{url('placements',$placement->id)}}" method="post"  enctype="multipart/form-data"> @csrf @method('put')
        <div class="row">
            
          <div class="col-12">
            <h3 class="lexicon-heading">Course Registration</h3>
            <span class="fs-5">Students Personal Information</span>
            <!--<span>(As Indicate on your Passport)</span>-->
          </div>

          <!--<div class="col-md-4 my-3">-->
          <!--  <label for="test_type">Type Of Test</label>-->
          <!--  <select name="test_type" id="test_type" class="form-select mt-2 white-form-control">-->
          <!--    <option value="Place Holder">Place Holder</option>-->
          <!--    <option value="Abc">Abc</option>-->
          <!--  </select>-->
          <!--</div>-->
          
          <div class="col-md-4 my-3">
            <label for="course_id">Course</label>
            <select name="course_id" id="course_id" class="form-select mt-2 white-form-control">
              <option value="{{$placement->course_id}}" hidden>{{$placement->course->title}}</option>
              @foreach($courses as $course)
              <option value="{{$course->id}}">{{$course->title}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-md-4 my-3">
            <label for="enrollment_date">Enrollment Date</label>
            <input type="date" name="enrollment_date" value="{{$placement->enrollment_date}}" id="enrollment_date" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="batch">Batch</label>
            <input type="text" name="batch" value="{{$placement->batch}}" id="batch" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$placement->name}}" id="name" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="father_name">Father's Name</label>
            <input type="text" name="father_name" value="{{$placement->father_name}}" id="father_name" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="mother_name">Mother's Name</label>
            <input type="text" name="mother_name" value="{{$placement->mother_name}}" id="mother_name" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="email">Mailing Address</label>
            <input type="email" name="email" value="{{$placement->email}}" id="email" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="blood_group">Blood Group</label>
            <input type="text" name="blood_group" value="{{$placement->blood_group}}" id="blood_group" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="profession">Study/Work</label>
            <input type="text" name="profession" value="{{$placement->profession}}" id="profession" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="phone">Cell Number</label>
            <input type="text" name="phone" value="{{$placement->phone}}" id="phone" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="gurdian_phone">Gurdian Cell No.</label>
            <input type="text" name="gurdian_phone" value="{{$placement->gurdian_phone}}" id="gurdian_phone" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="fb">FB</label>
            <input type="text" name="fb" value="{{$placement->fb}}" id="fb" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="reference">Reference</label>
            <input type="text" name="reference" value="{{$placement->reference}}" id="reference" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="course_start">Course Starts</label>
            <input type="date" name="course_start" value="{{$placement->course_start}}" id="course_start" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="course_end">Course Ends</label>
            <input type="date" name="course_end" value="{{$placement->course_end}}" id="course_end" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="image">Photo</label>
            <input type="file" name="image" id="image" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="renewal1">Renewal 1st Term</label>
            <input type="number" name="renewal1" value="{{$placement->renewal1}}" id="renewal1" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="renewal2">Renewal 2nd Term</label>
            <input type="number" name="renewal2" value="{{$placement->renewal2}}" id="renewal2" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="renewal3">Renewal 3rd Term</label>
            <input type="number" name="renewal3" value="{{$placement->renewal3}}" id="renewal3" class="form-control mt-2 white-form-control">
          </div>
  
          <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary px-5 py-2">UPDATE</button>
          </div>


        </div>
        </form>
        
      </div>
    </section>
    
@endsection
