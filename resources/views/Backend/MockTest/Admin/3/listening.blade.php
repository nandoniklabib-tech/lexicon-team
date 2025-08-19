<!-- {{ asset('assets/css/') }} -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LEXICON - IELTS - Listening</title>

    <!-- favicon -->
     <link rel="shortcut icon" href="" type="image/x-icon">

    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
   
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('assets/css/free_mock_test.css') }}?version={{ time() }}">

  </head>
  <body class="">

    <!-- offcavas for note start  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Notes</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div id="notesList" style="margin-top: 20px;"></div>
        </div>
    </div>
    <!-- offcavas for note end  -->
 
    <div id="contextMenu">
        <button onclick="highlightSelectedText()">Highlight</button>
        <button onclick="clearHighlight()">Clear</button>
        <button onclick="clearAllHighlights()">Clear All</button>
        <button onclick="takeNote()" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" >Take Note</button>
    </div>

<audio id="testAudio" src="{{ asset('assets/audios/25june1st.mp3') }}"></audio>

<!-- Start Modal -->
<div class="modal fade" id="startModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered">
    <div class="modal-content rounded-pill py-2">
      <div class="modal-body text-center">
        <a href="#" id="fullscreenBtn2" class="btn btn-modal-start rounded-pill fw-bold" data-bs-dismiss="modal">Click here to start the test</a>
      </div>
    </div>
  </div>
</div>
 
<div class="prev-next-div">
    <a class="up-btn" href="#" id="upBtn">
        <!-- <i class="fa-regular fa-square-caret-left-fill"></i> -->
        <i class="fa-solid fa-square-caret-left"></i>
    </a>
    <a class="down-btn" href="#" id="downBtn">
        <!-- <i class="fa-regular fa-square-caret-right"></i> -->
        <i class="fa-solid fa-square-caret-right"></i>
    </a>
</div>
    
    <form action="{{url('admin-mocktest-listening-exam-store')}}" method="post"> @csrf

    <!-- top bar -->
    <section class="" style="width: 100%; height: 10vh; display: flex; align-items: center; background-color: rgb(255, 221, 221); border-bottom: 1px solid black;">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-5">
            <span class="fw-bold d-md-block d-none">{{ session('mocktest.name') }}</span>
            <!-- 30 minuties remaining -->
            <span id="countdown" class="fw-bold">30 : 00</span>
            <span class="d-md-inline d-none">remaining</span>
            <i class="bi bi-volume-up ps-md-5 ps-2"></i> 
            <span class="d-md-inline d-none"> 
                Audio is playing 
            </span>
          </div>
          <div class="col-7">
            <div class="d-flex justify-content-end align-items-center"> 
              <button type="submit" class="btn btn-outline-dark fw-bold">Finish test</button>
              <button class="btn btn-outline-dark ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <!-- <i class="bi bi-pencil-square"></i> -->
                <i class="bi bi-vector-pen"></i>
              </button>
              <!-- <i class="bi bi-wifi fs-3 ps-3"></i>
              <i class="bi bi-bell fs-3 ps-3"></i>
              <i class="bi bi-list fs-3 ps-3"></i>
              <i class="bi bi-pencil-square fs-3 ps-3"></i> -->
              <a class="text-dark" href="#" id="fullscreenBtn" title="Toggle Fullscreen">
                <i id="fullscreenIcon" class="fa-solid fa-maximize fs-3 ps-3"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- question content  -->
    <section style="width: 100%; height: 80vh; display: flex; align-items: center;">
        <div class="container-fluid">
            <div class="row align-items-center">

                <div class="col-md-12">

                    <div class="tab-content" id="pills-tabContent">

                        <!-- PART 1 CONTENT -->
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="p-3 part-bottom">
                                        <div class="mb-4">
                                            <h3>Part 1</h3>
                                            <p class="mb-0">Listen and answer questions 1 - 10.</p>
                                        </div>
                                    <!-- QUESTIONS START  -->
                                        
                                    <!-- QUESTIONS END  -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="part-middle"></div>
                                </div>
                                <div class="col-12 part-track d-flex justify-content-around align-items-center">
                                    <a href="#q1" class="btn btn-outline-sidebtn question-nav" data-question="answer1">1</a>
                                    <a href="#q2" class="btn btn-outline-sidebtn question-nav" data-question="answer2">2</a>
                                    <a href="#q3" class="btn btn-outline-sidebtn question-nav" data-question="answer3">3</a>
                                    <a href="#q4" class="btn btn-outline-sidebtn question-nav" data-question="answer4">4</a>
                                    <a href="#q5" class="btn btn-outline-sidebtn question-nav" data-question="answer5">5</a>
                                    <a href="#q6" class="btn btn-outline-sidebtn question-nav" data-question="answer6">6</a>
                                    <a href="#q7" class="btn btn-outline-sidebtn question-nav" data-question="answer7">7</a>
                                    <a href="#q8" class="btn btn-outline-sidebtn question-nav" data-question="answer8">8</a>
                                    <a href="#q9" class="btn btn-outline-sidebtn question-nav" data-question="answer9">9</a>
                                    <a href="#q10" class="btn btn-outline-sidebtn question-nav" data-question="answer10">10</a>
                                </div>

                            </div>
                        </div>

                        <!-- PART 2 CONTENT -->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="p-3 part-bottom">
                                        <div class="mb-4">
                                            <h3>Part 2</h3>
                                            <p class="mb-0 fw-bold">Questions 11-20</p>
                                        </div>
                                    <!-- QUESTIONS START  -->
                                     
                                    <!-- QUESTIONS END  -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="part-middle"></div>
                                </div>
                                <div class="col-12 part-track d-flex justify-content-around align-items-center">
                                    <a href="#q11" class="btn btn-outline-sidebtn question-nav" data-question="answer11">11</a>
                                    <a href="#q12" class="btn btn-outline-sidebtn question-nav" data-question="answer12">12</a>
                                    <a href="#q13" class="btn btn-outline-sidebtn question-nav" data-question="answer13">13</a>
                                    <a href="#q14" class="btn btn-outline-sidebtn question-nav" data-question="answer14">14</a>
                                    <a href="#q15" class="btn btn-outline-sidebtn question-nav" data-question="answer15">15</a>
                                    <a href="#q16" class="btn btn-outline-sidebtn question-nav" data-question="answer16">16</a>
                                    <a href="#q17" class="btn btn-outline-sidebtn question-nav" data-question="answer17">17</a>
                                    <a href="#q18" class="btn btn-outline-sidebtn question-nav" data-question="answer18">18</a>
                                    <a href="#q19" class="btn btn-outline-sidebtn question-nav" data-question="answer19">19</a>
                                    <a href="#q20" class="btn btn-outline-sidebtn question-nav" data-question="answer20">20</a>
                                </div>

                            </div>
                        </div>
                        
                        <!-- PART 3 CONTENT -->
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="p-3 part-bottom">
                                        <div class="mb-4">
                                            <h3>Part 3</h3>
                                            <p class="mb-0">Questions 21-25</p>
                                        </div>
                                    <!-- QUESTIONS START  -->
                                     
                                    <!-- QUESTIONS END  -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="part-middle"></div>
                                </div>
                                <div class="col-12 part-track d-flex justify-content-around align-items-center">
                                    <a href="#q21" class="btn btn-outline-sidebtn question-nav" data-question="answer21">21</a>
                                    <a href="#q22" class="btn btn-outline-sidebtn question-nav" data-question="answer22">22</a>
                                    <a href="#q23" class="btn btn-outline-sidebtn question-nav" data-question="answer23">23</a>
                                    <a href="#q24" class="btn btn-outline-sidebtn question-nav" data-question="answer24">24</a>
                                    <a href="#q25" class="btn btn-outline-sidebtn question-nav" data-question="answer25">25</a>
                                    <a href="#q26" class="btn btn-outline-sidebtn question-nav" data-question="answer26">26</a>
                                    <a href="#q27" class="btn btn-outline-sidebtn question-nav" data-question="answer27">27</a>
                                    <a href="#q28" class="btn btn-outline-sidebtn question-nav" data-question="answer28">28</a>
                                    <a href="#q29" class="btn btn-outline-sidebtn question-nav" data-question="answer29">29</a>
                                    <a href="#q30" class="btn btn-outline-sidebtn question-nav" data-question="answer30">30</a>
                                </div>
                                
                            </div>
                        </div>

                        <!-- PART 4 CONTENT -->
                        <div class="tab-pane fade" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab" tabindex="0">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="p-3 part-bottom">
                                        <div class="mb-4">
                                            <h3>Part 4</h3>
                                            <p class="mb-0">Questions 31-40</p>
                                        </div>
                                    <!-- QUESTIONS START  -->
                                     
                                    <!-- QUESTIONS END  -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="part-middle"></div>
                                </div>
                                <div class="col-12 part-track d-flex justify-content-around align-items-center">
                                    <a href="#q31" class="btn btn-outline-sidebtn question-nav" data-question="answer31">31</a>
                                    <a href="#q32" class="btn btn-outline-sidebtn question-nav" data-question="answer32">32</a>
                                    <a href="#q33" class="btn btn-outline-sidebtn question-nav" data-question="answer33">33</a>
                                    <a href="#q34" class="btn btn-outline-sidebtn question-nav" data-question="answer34">34</a>
                                    <a href="#q35" class="btn btn-outline-sidebtn question-nav" data-question="answer35">35</a>
                                    <a href="#q36" class="btn btn-outline-sidebtn question-nav" data-question="answer36">36</a>
                                    <a href="#q37" class="btn btn-outline-sidebtn question-nav" data-question="answer37">37</a>
                                    <a href="#q38" class="btn btn-outline-sidebtn question-nav" data-question="answer38">38</a>
                                    <a href="#q39" class="btn btn-outline-sidebtn question-nav" data-question="answer39">39</a>
                                    <a href="#q40" class="btn btn-outline-sidebtn question-nav" data-question="answer40">40</a>
                                </div>

                            </div>
                        </div>

                    </div>



                </div>

            </div>
        </div>
    </section>

    <!-- bottom bar -->
    <section class="bottom-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- BOTTOM BUTTON -->
                    <ul class="nav nav-pills d-flex justify-content-around" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bottom-btn active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Part 1</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bottom-btn" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Part 2</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bottom-btn" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Part 3</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link bottom-btn" id="pills-about-tab" data-bs-toggle="pill" data-bs-target="#pills-about" type="button" role="tab" aria-controls="pills-about" aria-selected="false">Part 4</button>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    </form>
    
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    <script src="{{ asset('assets/js/button_active.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/answer_tracking.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/fullscreen.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/start_modal.js') }}?version={{ time() }}"></script>
    <script>
        let totalSeconds = (30 * 60) + 0;
        const countdownElement = document.getElementById('countdown');
        const startBtn = document.getElementById('fullscreenBtn2');
        let timerStarted = false;
        let timer;

        function updateCountdown() {
            const minutes = Math.floor(totalSeconds / 60);
            const seconds = totalSeconds % 60;

            const formattedTime = `${String(minutes).padStart(2, '0')} : ${String(seconds).padStart(2, '0')}`;
            countdownElement.textContent = formattedTime;

            if (totalSeconds > 0) {
            totalSeconds--;
            } else {
            clearInterval(timer);
            countdownElement.textContent = "Time's up!";
            }
        }

        startBtn.addEventListener('click', function(e) {
            e.preventDefault();

            if (!timerStarted) {
            timerStarted = true;
            updateCountdown(); // Call immediately
            timer = setInterval(updateCountdown, 1000);
            }
        });
    </script> 
    <script src="{{ asset('assets/js/play_audio.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/up_down.js') }}?version={{ time() }}"></script>
    <script src="{{ asset('assets/js/highlight.js') }}?version={{ time() }}"></script>

  </body>
</html>