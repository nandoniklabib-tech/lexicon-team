@extends('Frontend.frontApp')

@section('content')

    <section class="main-content-background">
      <div class="container py-3 py-md-5">
        
        <div class="row">
          <div class="col-12">
            <div class="page-banner" style="background-image: url('{{asset("images/settings/".$setting->ielts_reg_image)}}');">
              <h3 class="text-center text-md-start pt-5 ps-0 ps-md-5">IELTS Registration</h3>
            </div>
          </div>
        </div>

        <form action="{{url('ielts-registration-store')}}" method="post"> @csrf
        <div class="row mt-5">
          <div class="col-12">
            <h3 class="lexicon-heading">IELTS Registration</h3>
            <span class="fs-5">Students Personal Information</span>
            <span>(As Indicate on your Passport)</span>
          </div>

          <div class="col-md-4 my-3">
            <label for="first_name">Given Name</label>
            <input type="text" name="first_name" id="first_name" placeholder="First Name" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="last_name">Surname/Family Name</label>
            <input type="text" name="last_name" id="last_name" placeholder="First Name" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="dob">Date Of Birth</label>
            <input type="date" name="dob" id="dob" placeholder="First Name" class="form-control mt-2 white-form-control" required>
          </div>
          
          <div class="col-md-4 my-3">
            <label for="passport_number">Passport Number *</label>
            <input type="text" name="passport_number" id="passport_number" placeholder="First Name" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="passport_exp_date">Passport Expiry Date</label>
            <input type="date" name="passport_exp_date" id="passport_exp_date" placeholder="First Name" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="nid">NID Card Number <span class="fs-10">(If You dont have any Passport)</span></label>
            <input type="text" name="nid" id="nid" placeholder="First Name" class="form-control mt-2 white-form-control">
          </div>

          <div class="col-md-4 my-3">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" placeholder="Email" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" placeholder="First Name" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="occupation">Occupation</label>
            <input type="text" name="occupation" id="occupation" placeholder="occupation" class="form-control mt-2 white-form-control">
          </div>

          <div class="col-md-4 my-3">
            <label for="country_for_apply">Country to Apply for VISA</label>
            <select name="country_for_apply" id="country_for_apply" class="form-select mt-2 white-form-control">
              <option value="Place Holder">Place Holder</option>
              <option value="Abc">Abc</option>
            </select>
          </div>
          <div class="col-md-4 my-3">
            <label for="year_studied_english">How Many Years Have you Studied in English</label>
            <select name="year_studied_english" id="year_studied_english" class="form-select mt-2 white-form-control">
               <option value="Place Holder">Place Holder</option>
              <option value="Abc">Abc</option>
            </select>
          </div>
          <div class="col-md-4 my-3">
            <label for="test_type">Type Of Test</label>
            <select name="test_type" id="test_type" class="form-select mt-2 white-form-control">
              <option value="Place Holder">Place Holder</option>
              <option value="Abc">Abc</option>
            </select>
          </div>

          <div class="col-md-4 my-3">
            <label for="test_date">Preferred Test Date</label>
            <input type="date" name="test_date" id="test_date" placeholder="First Name" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="test_venue">Test Venue</label>
            <select name="test_venue" id="test_venue" class="form-select mt-2 white-form-control">
              <option value="Place Holder">Place Holder</option>
              <option value="Abc">Abc</option>
            </select>
          </div>
          <div class="col-md-4 my-3">
            <label for="test_format">Test Format</label>
            <select name="test_format" id="test_format" class="form-select mt-2 white-form-control">
              <option value="Place Holder">Place Holder</option>
              <option value="Abc">Abc</option>
            </select>
          </div>

          <div class="col-md-4 my-3">
            <label for="passport_nid_image">Upload Passport or NID Scan Copy</label>
            <input type="file" name="passport_nid_image" id="passport_nid_image" placeholder="First Name" class="form-control mt-2 white-form-control">
          </div>

          <div class="col-12 mt-5">
            <span class="fs-5">If you are Under 18, Please fill out the option Below</span>
            <span>(As Indicate on your Passport, Or NID Card)</span>
          </div>

          <div class="col-md-4 my-3">
            <label for="guardian_name">Guardian's Name</label>
            <input type="text" name="guardian_name" id="guardian_name" placeholder="First Name" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="guardian_dob">Guardian's Date of Birth</label>
            <input type="date" name="guardian_dob" id="guardian_dob" placeholder="First Name" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="guardian_email">Guardians Mail Address</label>
            <input type="email" name="guardian_email" id="guardian_email" placeholder="First Name" class="form-control mt-2 white-form-control">
          </div>
          
          <div class="col-md-4 my-3">
            <label for="guardian_phone">Guardian’s Phone Number</label>
            <input type="text" name="guardian_phone" id="guardian_phone" placeholder="First Name" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="guardian_passport_nid">Guardian’s Passport Number or NID Number</label>
            <input type="text" name="guardian_passport_nid" id="guardian_passport_nid" placeholder="First Name" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="guardian_passport_exp_date">Guardian’s Passport Expiry Date</label>
            <input type="date" name="guardian_passport_exp_date" id="guardian_passport_exp_date" placeholder="First Name" class="form-control mt-2 white-form-control">
          </div>

          <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary-2 px-5 py-2">SUBMIT</button>
          </div>


        </div>
        </form>
        
      </div>
    </section>

@endsection