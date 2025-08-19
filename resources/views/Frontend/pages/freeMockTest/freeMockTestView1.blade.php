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
    
    <form action="{{url('free-mock-test-listening-store2')}}" method="post"> @csrf
    <input type="hidden" name="email" value="{{ session('mocktest.email') }}">

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
                                        
                                        <h5>Questions 1 - 5</h5>
                                        <p>Circle the correct.</p>

                                        <p><b>Example:</b></p>
                                        <p>Andrea is feeling happy because ...</p>
                                        <p>A she’s seen Harry.</p>
                                        <p><b>B she’s finished her exams.</b></p>
                                        <p>C she can sleep in.</p>

                                        <div class="row">
                                            
                                        <div class="col-md-12 mb-4">
                                            <h5 id="q1">1. What is Harry’s problem?</h5>
                                            <div class="form-check ps-5">
                                                <input class="form-check-input" type="radio" name="answer1" value="He doesn’t want to sell his things" id="answer11">
                                                <label class="form-check-label" for="answer11">
                                                    He doesn’t want to sell his things
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input class="form-check-input" type="radio" name="answer1" value="He needs to decide what to do with his possessions" id="answer12">
                                                <label class="form-check-label" for="answer12">
                                                    He needs to decide what to do with his possessions
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input class="form-check-input" type="radio" name="answer1" value="C He wants to take everything to England" id="answer13">
                                                <label class="form-check-label" for="answer13">
                                                    C He wants to take everything to England
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <h5 id="q2">2. Creating community strategies</h5>
                                            <div>
                                                <img class="img-fluid w-50" src="{{ asset('mockTestImages/25juneListening2.PNG') }}" alt="image">
                                            </div>
                                            <div class="form-check ps-5">
                                                <input value="A" class="form-check-input" type="radio" name="answer2" id="answer21">
                                                <label class="form-check-label" for="answer21">
                                                    A
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input value="B" class="form-check-input" type="radio" name="answer2" id="answer22">
                                                <label class="form-check-label" for="answer22">
                                                    B
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input value="C" class="form-check-input" type="radio" name="answer2" id="answer23">
                                                <label class="form-check-label" for="answer23">
                                                    C
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <h5 id="q3">3. Where is Harry going to advertise his books for sale?</h5>
                                            <div class="form-check ps-5">
                                                <input value="In the university bookshop" class="form-check-input" type="radio" name="answer3" id="answer31">
                                                <label class="form-check-label" for="answer31">
                                                    In the university bookshop
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input value="In the student newspaper" class="form-check-input" type="radio" name="answer3" id="answer32">
                                                <label class="form-check-label" for="answer32">
                                                    In the student newspaper
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input value="In the economics department" class="form-check-input" type="radio" name="answer3" id="answer33">
                                                <label class="form-check-label" for="answer33">
                                                    In the economics department
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <h5 id="q4">4. Andrea thinks it is unlikely students will buy the furniture because ...</h5>
                                            <div class="form-check ps-5">
                                                <input value="they’re all doing the same thing" class="form-check-input" type="radio" name="answer4" id="answer41">
                                                <label class="form-check-label" for="answer41">
                                                    they’re all doing the same thing
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input value="they live at home" class="form-check-input" type="radio" name="answer4" id="answer42">
                                                <label class="form-check-label" for="answer42">
                                                    they live at home
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input value="it’s the summer vacation" class="form-check-input" type="radio" name="answer4" id="answer43">
                                                <label class="form-check-label" for="answer43">
                                                    it’s the summer vacation
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-4">
                                            <h5 id="q5">5. Andrea thinks that a second-hand shop ...</h5>
                                            <div class="form-check ps-5">
                                                <input value="may not pay well" class="form-check-input" type="radio" name="answer5" id="answer51">
                                                <label class="form-check-label" for="answer51">
                                                    may not pay well
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input value="may not take your goods" class="form-check-input" type="radio" name="answer5" id="answer52">
                                                <label class="form-check-label" for="answer52">
                                                    may not take your goods
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input value="may only take free goods" class="form-check-input" type="radio" name="answer5" id="answer53">
                                                <label class="form-check-label" for="answer53">
                                                    may only take free goods
                                                </label>
                                            </div>
                                        </div>

                                        </div>
                                        
                                        <h5 class="mt-5">Questions 6 - 10</h5>

                                        <p>Complete Harry’s notes using <b class="text-danger"> NO MORE THAN TWO WORDS.</b></p>

                                        <p><input id="q6" type="text" name="answer6" data-track="answer6" placeholder="6"> furniture etc. in Trading Post.</p>
                                        <p><input id="q7" type="text" name="answer7" data-track="answer7" placeholder="7"> or sell kitchen things.</p>
                                        <p>Get <input id="q8" type="text" name="answer8" data-track="answer8" placeholder="8"> first from second-hand shop.</p>
                                        <p>Give clothes to <input id="q9" type="text" name="answer9" data-track="answer9" placeholder="9"> shop.</p>
                                        <p><input id="q10" type="text" name="answer10" data-track="answer10" placeholder="10"> fridge and microwave to Andrea.</p>

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
                                        <p>Complete the Fitness Centre brochure using <b> NO MORE THAN TWO WORDS.</b></p>
                                        <h5 class="fw-bold">Semnoaks</h5>
                                        <h5 class="fw-bold">HEALTH & FITNESS CENTRE</h5>

                                    <p>Located conveniently at the <input id="q11" type="text" name="answer11" data-track="answer11" placeholder="11"> of Marion Street and Giles Street.</p>
                                    <h5 class="fw-bold">WE ARE OPEN FOR YOU</h5>
                                    <p>Monday - Friday <input id="q12" type="text" name="answer12" data-track="answer12" placeholder="12"> am to 9:30 pm</p>
                                    <p>Saturday 9:00 am to 4:00 pm</p>
                                    <p>Sunday 9:00 am to <input id="q13" type="text" name="answer13" data-track="answer13" placeholder="13"> pm</p>
                                    <h5 class="fw-bold">WET AREA</h5>
                                    <p>Aqua aerobic <input id="q14" type="text" name="answer14" data-track="answer14" placeholder="14"> for all ages and levels.</p>
                                    <p><input id="q15" type="text" name="answer15" data-track="answer15" placeholder="15"> lessons on weekday afternoons and weekend mornings.</p>
                                    <h5 class="fw-bold">SUPER-CIRCUIT CLASSES</h5>
                                    <p>A cardio-workout class that is easy to <input id="q16" type="text" name="answer16" data-track="answer16" placeholder="16"></p>
                                    <h5 class="fw-bold">AEROBIC & STEP CLASSES</h5>
                                    <p>Aerobics room holds over 55 participants.</p>
                                    <h5 class="fw-bold">LARGE WELL-EQUIPPED GYM</h5>
                                    <p>Have a personal fitness assessment & individual <input id="q17" type="text" name="answer17" data-track="answer17" placeholder="17"> to suit you.</p>
                                    <h5 class="fw-bold">CARDIO-VASCULAR ROOM</h5>
                                    <p>Use the treadmills, bikes and steppers to burn fat, increase fitness, warm up.</p>
                                    <p>Watch your favourite <input id="q18" type="text" name="answer18" data-track="answer18" placeholder="18"> while you exercise.</p>
                                    <p>WO FOR ONE SPECIAL MEMBERSHIP PLUS  <input id="q19" type="text" name="answer19" data-track="answer19" placeholder="19"> TRIAL OFFER</p>
                                    <p>ONLY $110 each for a whole <input id="q20" type="text" name="answer20" data-track="answer20" placeholder="20"> months! Get ready for summer.</p>
                                    <h5 class="fw-bold text-secondary">HURRY, OFFER ENDS SOON!</h5>

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
                                    <h5 class="fw-bold">Questions 21-30</h5>
                                    <p>Complete the notes below using <b> ONE WORD ONLY.</b></p>
                                    <h5 class="fw-bold">THE CANADIAN FOOD MARKET</h5>

                                    <p>Understanding subtle <input id="q21" type="text" name="answer21" data-track="answer21" placeholder="21"> between the Canadian and United States food sectors is important for successful food marketing</p>
                                    <p>Canada has many different ethnic groups: e.g. Toronto has large <input id="q22" type="text" name="answer22" data-track="answer22" placeholder="22"> and Asian populations</p>
                                    <p>Growth of ethnic specialities of Mediterranean, Caribbean, South East Asian and <input id="q23" type="text" name="answer23" data-track="answer23" placeholder="23"> foods</p>
                                    <p>Therefore demand is increasing for new <input id="q24" type="text" name="answer24" data-track="answer24" placeholder="24"> to prepare these foods plus condiments and sauces</p>
                                    <p>80% of Canadian market controlled by 8 major national chains</p>
                                    <p>Seminar to compare Canadian food trends with <input id="q25" type="text" name="answer25" data-track="answer25" placeholder="25"> and UK</p>
                                        
                                    <h5 class="fw-bold">Questions 26-30</h5>
                                    <p>Complete the table below.</p>
                                    <p>Write <b class="text-danger"> ONE WORD OR A NUMBER </b> for each answer.</p>
                                    <h5>RETAIL FOOD SECTOR</h5>


                                    <table class="table table-responsive table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">TREND</th>
                                                <th scope="col">COMMENTS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">INTEREST IN HEALTHY FOOD</th>
                                                <td>
                                                    <p>Salads are the third most commonly eaten food in Canadian <input id="q26" type="text" name="answer26" data-track="answer26" placeholder="26"></p>
                                                    <p>Most shoppers check <input id="q27" type="text" name="answer27" data-track="answer27" placeholder="27"> and nutritional information</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">NEW WAY OF LABELLING MEAT</th>
                                                <td>
                                                    <p>Labelled according to <input id="q28" type="text" name="answer28" data-track="answer28" placeholder="28"> technique e.g. simmering steak</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">'MOBILE MEALS'</th>
                                                <td>
                                                    <p>More meals eaten away from home</p>
                                                    <p><input id="q29" type="text" name="answer29" data-track="answer29" placeholder="29"> increase in sales of snacks projected over next 3 years</p>
                                                    <p>Growth in <input id="q30" type="text" name="answer30" data-track="answer30" placeholder="30"> snacks such as muesli bars</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

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
                                    <p>Complete the lecture notes using <b class="fw-bold"> NO MORE THAN THREE WORDS </b> for each answer.</p>
                                    <table class="table table-responsive table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5>PUBLIC SPEAKING</h5>
                                                    <p>Public speaking means speaking to <input id="q31" type="text" name="answer31" data-track="answer31" placeholder="31"> people</p>
                                                    <p>Lack of confidence usually due to <input id="q32" type="text" name="answer32" data-track="answer32" placeholder="32"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>A. PLANNING</h5>
                                                    <p>First part of public speaking is <input id="q33" type="text" name="answer33" data-track="answer33" placeholder="33"></p>
                                                    <p>This includes:<input id="q34" type="text" name="answer34" data-track="answer34" placeholder="34"> and length of talk</p>
                                                    <p>Make speech notes on small cards to talk from</p>
                                                    <p><input id="q35" type="text" name="answer35" data-track="answer35" placeholder="35"> with the audience (very important)</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>B. VOICE</h5>
                                                    <p>Speak slowly - this gives time for pronunciation and is easier for audience</p>
                                                    <p>- bigger audience requires <input id="q36" type="text" name="answer36" data-track="answer36" placeholder="36"> speech</p>
                                                    <p>Project your voice - rehearse and <input id="q37" type="text" name="answer37" data-track="answer37" placeholder="37"></p>
                                                    <p>Check intonation: varied tone and rhythm give <input id="q38" type="text" name="answer38" data-track="answer38" placeholder="38"></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h5>C. BODY LANGUAGE</h5>
                                                    <p>Lastly, think about your <input id="q39" type="text" name="answer39" data-track="answer39" placeholder="39"> and gestures</p>
                                                    <p>Show confidence by: head up, chin out, shoulders back</p>
                                                    <p>Avoid scratching and fiddling because this <input id="q40" type="text" name="answer40" data-track="answer40" placeholder="40"> and irritates your audience</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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