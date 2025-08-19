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
        <div class="row mt-3">
          <div class="col-12">
            <div class="notice-ticker position-relative overflow-hidden">
                <div class="notice-wrapper">
                    @foreach($examdates as $examdate)
                    <div class="notice-item lexicon-heading fw-normal">
                        <span class="lexicon-heading fw-normal">
                            {{$examdate->title}} -
                            {{ \Carbon\Carbon::parse($examdate->date)->format('d F Y') }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
          </div>

    <style>
    .notice-ticker {
        height: 2.5em; /* Adjust based on your font size */
        line-height: 2.5em;
    }
    .notice-wrapper {
        display: flex;
        flex-direction: column;
        transition: transform 0.6s ease-in-out;
    }
    .notice-item {
        height: 2.5em;
        white-space: nowrap;
    }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const wrapper = document.querySelector('.notice-wrapper');
            const items = document.querySelectorAll('.notice-item');
            let currentIndex = 0;
            const interval = 3000;
    
            if (items.length <= 1) return; // No need to animate
    
            setInterval(() => {
                currentIndex = (currentIndex + 1) % items.length;
                wrapper.style.transform = `translateY(-${currentIndex * 2.5}em)`;
            }, interval);
        });
    </script>
 
          <div class="col-12 mt-2">
            <h3 class="lexicon-heading">IELTS Registration</h3>
            <span class="fs-5">Students Personal Information</span>
            <span>(As Indicate on your Passport)</span>
          </div>

          <div class="col-md-4 my-3">
            <label for="first_name">Given Name</label>
            <input type="text" name="first_name" id="first_name" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="last_name">Surname/Family Name</label>
            <input type="text" name="last_name" id="last_name" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="dob">Date Of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control mt-2 white-form-control" required>
          </div>
          
          <div class="col-md-4 my-3">
            <label for="passport_number">Passport Number</label>
            <input type="text" name="passport_number" id="passport_number" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="passport_exp_date">Passport Expiry Date</label>
            <input type="date" name="passport_exp_date" id="passport_exp_date" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="nid">NID Card Number <span class="fs-10">(If You dont have any Passport)</span></label>
            <input type="text" name="nid" id="nid" class="form-control mt-2 white-form-control">
          </div>

          <div class="col-md-4 my-3">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" class="form-control mt-2 white-form-control" required>
          </div>
          <div class="col-md-4 my-3">
            <label for="test_type">The test type you intend to take</label>
            <select name="test_type" id="test_type" class="form-select mt-2 white-form-control">
              <option value="" hidden>Choose</option>
              <option value="Academic">Academic</option>
              <option value="General Training">General Training</option>
              <option value="UKVI">UKVI</option>
              <option value="IELTS Life Skills">IELTS Life Skills</option>
            </select>
          </div>

          <div class="col-md-4 my-3">
            <label for="test_date">Preferred Test Date</label>
            <input type="date" name="test_date" id="test_date" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="occupation">Occupation</label>
            <input type="text" name="occupation" id="occupation" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="country_for_apply">Country to Apply for VISA</label>
            <select name="country_for_apply" id="country_for_apply" class="form-select mt-2 white-form-control">
              <option value="" hidden>Choose</option>
              <option value="Australia">Australia</option>
              <option value="Canada">Canada</option>
              <option value="New Zeland">New Zeland</option>
              <option value="USA">USA</option>
              <option value="UK">UK</option>
              <option value="Ireland">Ireland</option>
              <option value="Germany">Germany</option>
              <option value="Sweden">Sweden</option>
              <option value="Norway">Norway</option>
              <option value="Finland">Finland</option>
            </select>
          </div>
          <div class="col-md-4 my-3">
            <label for="year_studied_english">How Many Years Have you Studied in English</label>
            <input type="text" name="year_studied_english" id="year_studied_english" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="test_venue">Test Venue</label>
            <select name="test_venue" id="test_venue" class="form-select mt-2 white-form-control">
              <option value="" hidden>Choose</option>
              <option value="IELTS on Computer">IELTS on Computer</option>
              <option value="IELTS on Paper">IELTS on Paper</option>
              <option value="A/0 Exam">A/0 Exam</option>
            </select>
          </div>
          <!--<div class="col-md-4 my-3">-->
          <!--  <label for="test_format">Test Format</label>-->
          <!--  <select name="test_format" id="test_format" class="form-select mt-2 white-form-control">-->
          <!--    <option value="Place Holder">Place Holder</option>-->
          <!--    <option value="Abc">Abc</option>-->
          <!--  </select>-->
          <!--</div>-->
          <!--<div class="col-md-4 my-3">-->
          <!--  <label for="test_type">Type Of Test</label>-->
          <!--  <select name="test_type" id="test_type" class="form-select mt-2 white-form-control">-->
          <!--    <option value="Place Holder">Place Holder</option>-->
          <!--    <option value="Abc">Abc</option>-->
          <!--  </select>-->
          <!--</div>-->


          <div class="col-md-4 my-3">
            <label for="passport_nid_image">Upload Passport or NID Scan Copy</label>
            <input type="file" name="passport_nid_image" id="passport_nid_image" class="form-control mt-2 white-form-control">
          </div>

          <div class="col-12 mt-5">
            <span class="fs-5">If you are Under 18, Please fill out the option Below</span>
            <span>(As Indicate on your Passport, Or NID Card)</span>
          </div>

          <div class="col-md-4 my-3">
            <label for="guardian_name">Guardian's Name</label>
            <input type="text" name="guardian_name" id="guardian_name" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="guardian_dob">Guardian's Date of Birth</label>
            <input type="date" name="guardian_dob" id="guardian_dob" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="guardian_email">Guardians Mail Address</label>
            <input type="email" name="guardian_email" id="guardian_email" class="form-control mt-2 white-form-control">
          </div>
          
          <div class="col-md-4 my-3">
            <label for="guardian_phone">Guardian’s Phone Number</label>
            <input type="text" name="guardian_phone" id="guardian_phone" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="guardian_passport_nid">Guardian’s Passport Number or NID Number</label>
            <input type="text" name="guardian_passport_nid" id="guardian_passport_nid" class="form-control mt-2 white-form-control">
          </div>
          <div class="col-md-4 my-3">
            <label for="guardian_passport_exp_date">Guardian’s Passport Expiry Date</label>
            <input type="date" name="guardian_passport_exp_date" id="guardian_passport_exp_date" class="form-control mt-2 white-form-control">
          </div>

          <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary-2 px-5 py-2">SUBMIT</button>
          </div>


        </div>
        </form>
        
      </div>
    </section>

@endsection