@extends('Frontend.frontApp')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-12">

        <div id="Old" class="card shadow-lg">
          <div class="row justify-content-center">
            <div class="col-12">
              <img class="img-fluid rounded-top" src="https://cdielts.gelielts.com/img/intro-banner.jpg" alt="image">
            </div>

            <div class="col-md-8 text-center py-5">
              <h3>Welcome "{{ session('mocktest.name') }}" !</h3>
              <p>Get familiar with IELTS on computer and IELTS Online with this familiarisation test, which will give you an idea of what to expect in the Listening, Reading and Writing sections.</p>
            </div>

            <div class="col-11 pb-5">
              <div class="row justify-content-center">

                <div class="col-md-4">
                  <div class="card p-3 text-center shadow">
                    <div>
                      <h4>IELTS on Computer: <br>Academic</h4>
                      <hr>
                    </div>
                    <div>
                      <p>The IELTS Academic test is suitable for those wanting to study in an English-speaking environment or for professional registration purposes.</p>
                      <p>IELTS Academic can be taken at a test centre (on computer or paper) or online at home.</p>
                    </div>
                    <div>
                      <a id="toNew" href="#New" class="btn btn-primary-2">Select In Centre Academic</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card p-3 text-center shadow">
                    <div>
                      <h4>IELTS on Computer: <br>General Training</h4>
                      <hr>
                    </div>
                    <div>
                      <p>The IELTS Academic test is suitable for those wanting to study in an English-speaking environment or for professional registration purposes.</p>
                      <p>IELTS Academic can be taken at a test centre (on computer or paper) or online at home.</p>
                    </div>
                    <div>
                      <a id="toNew" href="#New" class="btn btn-primary-2">Select In Centre General Training</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card p-3 text-center shadow">
                    <div>
                      <h4>IELTS Online: <br>Academic</h4>
                      <hr>
                    </div>
                    <div>
                      <p>The IELTS Academic test is suitable for those wanting to study in an English-speaking environment or for professional registration purposes.</p>
                      <p>IELTS Academic can be taken at a test centre (on computer or paper) or online at home.</p>
                    </div>
                    <div>
                      <a id="toNew" href="#New" class="btn btn-primary-2">Select IELTS Online Academic</a>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>
        </div>

        <div id="New" class="card shadow-lg d-none">
          <div class="row">
            <div class="col-12 text-center pt-5 pb-3">
              <h3>You have chosen the Academic test.</h3>
              <a id="toOld" href="#Old" class="">Select a different test</a>
            </div>
          </div>
          <div class="row my-5 px-3 align-items-center">
            <div class="col-md-6 d-md-block d-none" style="width:50%;height:1100px;background-image:url('https://cdielts.gelielts.com/img/welcome-bg.jpg');background-size:cover; background-repeat:no-repeat;background-position: left;">
            </div>
            <div class="col-md-6 px-4">
              <h4>How do the familiarisation tests work?</h4>
              <p>There are three sections to this IELTS on computer familiarisation test:</p>
              <p>Listening (30 minutes)</p>
              <p>Reading (60 minutes)</p>
              <p>Writing (60 minutes)</p>
              <p>The Writing section is scored by a person in the real test. In this familiarisation test, the writing is not scored.</p>
              <p>The Speaking section is conducted face-to-face and does not form part of this test.</p>
              <h4 class="mt-5">How to use this familiarisation test</h4>
              <p>Take this test on a computer for the most accurate test experience.</p>
              <p>Warning: Do not close your browser during the test. You will not get your results.</p>
              <p>Press "Finish Test" to end the test.</p>
              <p>Please note that these buttons are not available in the real computer-delivered test.</p>
              <p>IELTS on computer has helpful tools for taking notes and reviewing. Press "Help" before you start for more details.</p>
              <h4 class="mt-5">After you finish the test</h4>
              <p>Once you have completed the familiarisation test, you will receive an email with a link of your percentage marks for your Listening and Reading answers.</p>
              <p>You will be able to match these with the Common European Framework of Reference for Languages (CEFR) framework levels.</p>
              <p>You can explore further marking or practice options with our partners, GEL IELTS.</p>
              <a href="{{url('free-mock-test-dashboard')}}" class="btn btn-primary-2">Start Test</a>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>
<script>
  // Get the elements
  const oldDiv = document.getElementById("Old");
  const newDiv = document.getElementById("New");
  const toNewBtn = document.getElementById("toNew");
  const toOldBtn = document.getElementById("toOld");

  // Event to switch to New
  toNewBtn.addEventListener("click", function (e) {
    e.preventDefault(); // prevent page jump
    oldDiv.classList.add("d-none");
    newDiv.classList.remove("d-none");
  });

  // Event to switch back to Old
  toOldBtn.addEventListener("click", function (e) {
    e.preventDefault(); // prevent page jump
    newDiv.classList.add("d-none");
    oldDiv.classList.remove("d-none");
  });
</script>
@endsection
