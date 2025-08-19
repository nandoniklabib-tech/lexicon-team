<!-- {{ asset('assets/css/') }} -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LEXICON - IELTS - Writing</title>

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
    
    <form action="{{url('free-mock-test-writing-store2')}}" method="post"> @csrf
    <input type="hidden" name="email" value="{{ session('mocktest.email') }}">

    <!-- top bar -->
    <section class="" style="width: 100%; height: 10vh; display: flex; align-items: center; background-color: rgb(255, 221, 221); border-bottom: 1px solid black;">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-5">
            <span class="fw-bold d-md-block d-none">{{ session('mocktest.name') }}</span>
            <!-- 30 minuties remaining -->
            <span id="countdown" class="fw-bold">60 : 00</span>
            <span class="d-md-inline d-none">remaining</span>
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
                            <div class="row justify-content-center">

                                <div class="col-md-12">
                                    <div class="px-md-5 px-3 pt-3 part-bottom" style="height:70vh;">
                                    <!-- QUESTIONS START  -->
                                     <div class="row">

                                        <!-- LEFT SIDE -->
                                        <div class="col-6" style="height:66vh;overflow:auto; border-right:.5px solid gray;">
                                            <div>
                                                <h2>Writing Task 1</h2>
                                                <h4>You should spend about <b>20 minutes</b> on this task.</h4>

                                                <p>The chart below gives information about global population percentages and distribution of wealth by region.</p>
                                                <p>Summarise the information by selecting and reporting the main features, and make comparisons where relevant.</p>
                                                <p>You should write <b>at least 150 words.</b></p>
                                                <img class="img-fluid" src="https://ieltsonlinetests.com/sites/default/files/2020-12/a1.png" alt="image">
                                                
                                            </div>
                                        </div>

                                        <!-- RIGHT SIDE -->
                                        <div class="col-6" style="height:66vh;overflow:auto; border-left:.5px solid gray;">
                                            <textarea class="w-100 p-3" name="answer1" data-track="answer1" id="q1" rows="13" cols="33" placeholder="Type your essay here ..."></textarea>
                                            <p class="fw-bold">Word Count: <span id="wordCount1">0</span></p>
                                        </div>

                                     </div>

                                    <!-- QUESTIONS END  -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="part-middle"></div>
                                </div>
                                <div class="col-md-10 part-track d-flex justify-content-around align-items-center">
                                    <a href="#q1" class="btn btn-outline-sidebtn question-nav" data-question="answer1">1</a>
                                </div>

                            </div>
                        </div>

                        <!-- PART 2 CONTENT -->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="row justify-content-center">

                                <div class="col-md-12">
                                    <div class="px-md-5 px-3 pt-3 part-bottom" style="height:70vh;">
                                    <!-- QUESTIONS START  -->
                                     <div class="row">

                                        <!-- LEFT SIDE -->
                                        <div class="col-6" style="height:66vh;overflow:auto; border-right:.5px solid gray;">
                                            <h2 class="fw-bold">Writing Task 2</h2>
                                            <h4>You should spend about <b>40 minutes</b> on this task.</h4>

                                            <p>Some cities create housing areas by providing taller buildings. Others create housing by building houses on a wider area of land. What solution is better?</p>
                                            <p>You should write <b>at least 250 words.</b></p>
                                        </div>
                                        
                                        <!-- RIGHT SIDE -->
                                        <div class="col-6" style="height:66vh;overflow:auto; border-left:.5px solid gray;">
                                            <textarea class="w-100 p-3" name="answer2" data-track="answer2" id="q2" rows="13" cols="33" placeholder="Type your essay here ..."></textarea>
                                            <p class="fw-bold">Word Count: <span id="wordCount2">0</span></p>
                                        </div>

                                     </div>

                                    <!-- QUESTIONS END  -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="part-middle"></div>
                                </div>
                                <div class="col-md-10 part-track d-flex justify-content-around align-items-center">
                                    <a href="#q2" class="btn btn-outline-sidebtn question-nav" data-question="answer2">2</a>
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
        let totalSeconds = (60 * 60) + 0;
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
    <script>
        const textareas = document.querySelectorAll('textarea');
        textareas.forEach((textarea, index) => {
            const wordCountSpan = document.getElementById(`wordCount${index + 1}`);
            textarea.addEventListener('input', () => {
                const text = textarea.value.trim();
                const words = text === '' ? 0 : text.split(/\s+/).length;
                wordCountSpan.textContent = words;
            });
        });
    </script>

  </body>
</html>