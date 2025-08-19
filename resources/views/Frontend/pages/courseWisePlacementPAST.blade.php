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

        <form action="{{url('placement-store')}}" method="post" > @csrf
        <div class="row mt-5">
          <div class="col-12">
            <h3 class="lexicon-heading">Placement Test</h3>
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
            <p>Choose one of these titles to write about your reasons for applying for the course</p>
            <h3 class="lexicon-heading">Why do you want to enroll in this course?</h3>
            <p>Or If you are already an experienced Learner, explain why you want to take the Spoken/IELTS course and/or how you think it will benefit you.</p>
            <p>You must answer this question in continuous prose and write no less than 200 words.</p>
            <p>Remember that this is a course that will qualify you to be an English Learner. It is important you check your written work carefully</p>
            <p>Use of correct grammar, vocabulary, spelling and punctuation will all be taken into consideration when evaluating your application</p>
            <p>Failure to produce a well-written application form or not meeting the word limit may well prevent you from being accepted on to the course</p>
            <textarea name="why_enroll_course" id="why_enroll_course" rows="5" cols="33" class="form-control mt-2 white-form-control" placeholder="Write your Answer"></textarea>
          </div>

          <p class="fw-bold mt-4">NB: There will be several steps for your online enrollment of our courses, so everything you need to do it before the deadline</p>
          
          <p class="mb-0"> <span class="lexicon-heading">* Step 1:</span>  Fill out the form (writing part must be filled) & Send it back to us (lexiconeltc2014@gmail.com) /WhatsApp: 01913919470</p>
          <p class="mb-0"> <span class="lexicon-heading">* Step 2:</span>  Set time for the interview (Over phone/WhatsApp/zoom) & complete it via zoom</p>
          <p class="mb-0"> <span class="lexicon-heading">* Step 3:</span>  Payment confirmation only for the successful candidate (we will send you confirmation email & pre course task)</p>
          <p class="mb-0"> <span class="lexicon-heading">* Step 4:</span>  Pre-Course-Task completion (Grammar & Writing)</p>
          <p class="mb-0"> <span class="lexicon-heading">* Step 5:</span>  Pre-Course training (How to conduct class/ introduction to zoom) mandatory to join</p>


          <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary-2 px-5 py-2">SUBMIT</button>
          </div>


        </div>
        </form>
        
      </div>
    </section>
@endsection
