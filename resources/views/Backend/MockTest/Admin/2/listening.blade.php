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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        <button onclick="takeNote()" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">Take Note</button>
    </div>

    <audio id="testAudio" src="{{ asset('adminMock/2/audio.mp3') }}"></audio>

    <!-- Start Modal -->
    <div class="modal fade" id="startModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content rounded-pill py-2">
                <div class="modal-body text-center">
                    <a href="#" id="fullscreenBtn2" class="btn btn-modal-start rounded-pill fw-bold"
                        data-bs-dismiss="modal">Click here to start the test</a>
                </div>
            </div>
        </div>
    </div>
    <div class="prev-next-div">
        <a class="up-btn" href="#" id="upBtn">
            <i class="fa-solid fa-square-caret-left"></i>
        </a>
        <a class="down-btn" href="#" id="downBtn">
            <i class="fa-solid fa-square-caret-right"></i>
        </a>
    </div>
    <form action="" method="" class="afterSubmitForm">
        @csrf

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
                            <button type="submit" class="afterSubmitBtn btn btn-outline-dark fw-bold">Finish
                                test</button>
                            <button class="btn btn-outline-dark ms-2" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <i class="bi bi-vector-pen"></i>
                            </button>
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
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="p-3 part-bottom">
                                            <div class="mb-4">
                                                <h3>Part 1</h3>
                                            </div>
                                            <!-- QUESTIONS START  -->
                                            <h5>Questions 1-5</h5>
                                            <p>Complete the form below.</p>
                                            <p>Write NO MORE THAN TWO WORDS AND/OR A NUMBER for each answer.</p>
                                            <h5>Southern Rental Car – booking</h5>
                                            <p>Name: William <input id="q1" type="text" name="answer1"
                                                    data-track="answer1" placeholder="1"></p>
                                            <p>Address: 10 <input id="q2" type="text" name="answer2"
                                                    data-track="answer2" placeholder="2"></p>
                                            <p>Contact number: 07 <input id="q3" type="text" name="answer3"
                                                    data-track="answer3" placeholder="3"></p>
                                            <p>Payment by credit card type: <input id="q4" type="text"
                                                    name="answer4" data-track="answer4" placeholder="4"></p>
                                            <p>Card No. 4550 1392 8309 3221</p>
                                            <p>Card expiry date: July 20XX</p>
                                            <p>Rental period: <input id="q5" type="text" name="answer5"
                                                    data-track="answer5" placeholder="5"></p>

                                            <h5>Questions 6-10</h5>
                                            <p>Answer the following questions USING NO MORE THAN TWO WORDS OR A NUMBER
                                            </p>
                                            <p>How much is the car per day? <input id="q6" type="text"
                                                    name="answer6" data-track="answer6" placeholder="6"></p>
                                            <p>What does the price include? <input id="q7" type="text"
                                                    name="answer7" data-track="answer7" placeholder="7"></p>
                                            <p>Who will he be visiting? <input id="q8" type="text"
                                                    name="answer8" data-track="answer8" placeholder="8"></p>
                                            <p>What kind of car does the agent recommend? <input id="q9"
                                                    type="text" name="answer9" data-track="answer9"
                                                    placeholder="9"></p>
                                            <p>What does he need to collect the car? <input id="q10"
                                                    type="text" name="answer10" data-track="answer10"
                                                    placeholder="10"></p>

                                            <!-- QUESTIONS END  -->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="part-middle"></div>
                                    </div>
                                    <div class="col-12 part-track d-flex justify-content-around align-items-center">
                                        <a href="#q1" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer1">1</a>
                                        <a href="#q2" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer2">2</a>
                                        <a href="#q3" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer3">3</a>
                                        <a href="#q4" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer4">4</a>
                                        <a href="#q5" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer5">5</a>
                                        <a href="#q6" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer6">6</a>
                                        <a href="#q7" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer7">7</a>
                                        <a href="#q8" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer8">8</a>
                                        <a href="#q9" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer9">9</a>
                                        <a href="#q10" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer10">10</a>
                                    </div>

                                </div>
                            </div>

                            <!-- PART 2 CONTENT -->
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="p-3 part-bottom">
                                            <div class="mb-4">
                                                <h3>Part 2</h3>
                                            </div>
                                            <!-- QUESTIONS START  -->
                                            <h5>Questions 11-15</h5>
                                            <p>Complete the tables below. If there is no information given, write X.</p>
                                            <p>Write NO MORE THAN TWO WORDS AND/OR A NUMBER for each answer.</p>


                                            <table class="table table-responsive table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Overlander</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Distance / km</td>
                                                        <td>
                                                            <p><input id="q11" type="text" name="answer11"
                                                                    data-track="answer11" placeholder="11"></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Highlight</td>
                                                        <td>3 volcanoes</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Time / hours</td>
                                                        <td>11</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Transalpine</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Distance / km</td>
                                                        <td>223</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Highlight</td>
                                                        <td>16 <input id="q12" type="text" name="answer12"
                                                                data-track="answer12" placeholder="12"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Time / hours</td>
                                                        <td>
                                                            <p><input id="q13" type="text" name="answer13"
                                                                    data-track="answer13" placeholder="13"></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Transcoastal</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Distance / km</td>
                                                        <td>
                                                            <p><input id="q14" type="text" name="answer14"
                                                                    data-track="answer14" placeholder="14"></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Highlight</td>
                                                        <td>
                                                            <p><input id="q15" type="text" name="answer15"
                                                                    data-track="answer15" placeholder="15"></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Time / hours</td>
                                                        <td>5</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h5>Questions 16-20</h5>
                                            <p>Complete the summary below USING NO MORE THAN TWO WORDS OR A NUMBER.</p>
                                            <p>
                                                Taking three days to complete, the <input id="q16"
                                                    type="text" name="answer16" data-track="answer16"
                                                    placeholder="16">
                                                is one of the world’s longest train journeys. The Ghan is shorter,
                                                passing through towns built by the <input id="q17"
                                                    type="text" name="answer17" data-track="answer17"
                                                    placeholder="17">
                                                There is also a sculpture designed to mark the laying of the <input
                                                    id="q18" type="text" name="answer18"
                                                    data-track="answer18" placeholder="18">
                                                concrete sleeper. The Overland was the first train to travel between the
                                                capital cities in two <input id="q19" type="text"
                                                    name="answer19" data-track="answer19" placeholder="19">
                                                and it is also the oldest journey of its kind on <input id="q20"
                                                    type="text" name="answer20" data-track="answer20"
                                                    placeholder="20">
                                            </p>

                                            <!-- QUESTIONS END  -->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="part-middle"></div>
                                    </div>
                                    <div class="col-12 part-track d-flex justify-content-around align-items-center">
                                        <a href="#q11" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer11">11</a>
                                        <a href="#q12" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer12">12</a>
                                        <a href="#q13" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer13">13</a>
                                        <a href="#q14" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer14">14</a>
                                        <a href="#q15" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer15">15</a>
                                        <a href="#q16" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer16">16</a>
                                        <a href="#q17" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer17">17</a>
                                        <a href="#q18" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer18">18</a>
                                        <a href="#q19" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer19">19</a>
                                        <a href="#q20" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer20">20</a>
                                    </div>

                                </div>
                            </div>

                            <!-- PART 3 CONTENT -->
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab" tabindex="0">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="p-3 part-bottom">
                                            <div class="mb-4">
                                                <h3>Part 3</h3>
                                            </div>
                                            <!-- QUESTIONS START  -->
                                            <h5>Questions 21-25</h5>
                                            <p>Circle the correct letter A–C.</p>

                                            <div class="col-md-12 mb-4">
                                                <h5 id="q21">21. Lyn is having difficulty completing her project
                                                    because</h5>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer21"
                                                        value="she doesn’t have enough information" id="answer211">
                                                    <label class="form-check-label" for="answer211">she doesn’t have
                                                        enough information</label>
                                                </div>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer21"
                                                        value="she can’t organise her presentation" id="answer212">
                                                    <label class="form-check-label" for="answer212">she can’t organise
                                                        her presentation</label>
                                                </div>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer21"
                                                        value="she doesn’t have enough time" id="answer213">
                                                    <label class="form-check-label" for="answer213">she doesn’t have
                                                        enough time</label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-4">
                                                <h5 id="q22">22. Her presentation is going to focus on</h5>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer22"
                                                        value="solar power in America" id="answer221">
                                                    <label class="form-check-label" for="answer221">solar power in
                                                        America</label>
                                                </div>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer22"
                                                        value="solar-powered water heaters" id="answer222">
                                                    <label class="form-check-label" for="answer222">solar-powered
                                                        water heaters</label>
                                                </div>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer22"
                                                        value="alternative energy technology" id="answer223">
                                                    <label class="form-check-label" for="answer223">alternative energy
                                                        technology</label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-4">
                                                <h5 id="q23">23. Why does Lyn think we should be looking for
                                                    alternative sources of energy?</h5>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer23"
                                                        value="Fossil fuels are expensive" id="answer231">
                                                    <label class="form-check-label" for="answer231">Fossil fuels are
                                                        expensive</label>
                                                </div>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer23"
                                                        value="Fossil fuels have an impact on the environment"
                                                        id="answer232">
                                                    <label class="form-check-label" for="answer232">Fossil fuels have
                                                        an impact on the environment</label>
                                                </div>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer23"
                                                        value="Fossil fuels are limited" id="answer233">
                                                    <label class="form-check-label" for="answer233">Fossil fuels are
                                                        limited</label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-4">
                                                <h5 id="q24">24. Solar power is a good form of alternative energy
                                                    because</h5>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer24"
                                                        value="it can be harnessed with simple technology"
                                                        id="answer241">
                                                    <label class="form-check-label" for="answer241">it can be
                                                        harnessed with simple technology</label>
                                                </div>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer24"
                                                        value="it is infinite" id="answer242">
                                                    <label class="form-check-label" for="answer242">it is
                                                        infinite</label>
                                                </div>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer24"
                                                        value="it can be applied equally well in any country"
                                                        id="answer243">
                                                    <label class="form-check-label" for="answer243">it can be applied
                                                        equally well in any country</label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-4">
                                                <h5 id="q25">25. Which graph best indicates what Lyn is
                                                    describing?</h5>
                                                <img src="https://ieltsonlinetests.com/sites/default/files/listening-test-1-section-3-Q25.png"
                                                    alt="Graph for Question 25" class="img-fluid mb-3">
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer25"
                                                        value="A" id="answer251">
                                                    <label class="form-check-label" for="answer251">A</label>
                                                </div>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer25"
                                                        value="B" id="answer252">
                                                    <label class="form-check-label" for="answer252">B</label>
                                                </div>
                                                <div class="form-check ps-5">
                                                    <input class="form-check-input" type="radio" name="answer25"
                                                        value="C" id="answer253">
                                                    <label class="form-check-label" for="answer253">C</label>
                                                </div>
                                            </div>


                                            <h5>Questions 26-30</h5>
                                            <p>Label the following diagram USING NO MORE THAN TWO WORDS AND / OR A
                                                NUMBER</p>
                                            <img src="https://ieltsonlinetests.com/sites/default/files/2018-11/listening-test-13-section-3-Q27.png"
                                                alt="image">

                                            <p><input id="q26" type="text" name="answer26"
                                                    data-track="answer26" placeholder="26"></p>
                                            <p><input id="q27" type="text" name="answer27"
                                                    data-track="answer27" placeholder="27"></p>
                                            <p><input id="q28" type="text" name="answer28"
                                                    data-track="answer28" placeholder="28"></p>
                                            <p><input id="q29" type="text" name="answer29"
                                                    data-track="answer29" placeholder="29"></p>
                                            <p><input id="q30" type="text" name="answer30"
                                                    data-track="answer30" placeholder="30"></p>

                                            <!-- QUESTIONS END  -->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="part-middle"></div>
                                    </div>
                                    <div class="col-12 part-track d-flex justify-content-around align-items-center">
                                        <a href="#q21" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer21">21</a>
                                        <a href="#q22" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer22">22</a>
                                        <a href="#q23" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer23">23</a>
                                        <a href="#q24" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer24">24</a>
                                        <a href="#q25" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer25">25</a>
                                        <a href="#q26" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer26">26</a>
                                        <a href="#q27" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer27">27</a>
                                        <a href="#q28" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer28">28</a>
                                        <a href="#q29" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer29">29</a>
                                        <a href="#q30" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer30">30</a>
                                    </div>

                                </div>
                            </div>

                            <!-- PART 4 CONTENT -->
                            <div class="tab-pane fade" id="pills-about" role="tabpanel"
                                aria-labelledby="pills-about-tab" tabindex="0">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="p-3 part-bottom">
                                            <div class="mb-4">
                                                <h3>Part 4</h3>
                                            </div>
                                            <!-- QUESTIONS START  -->
                                            <h5>Questions 31-40</h5>
                                            <p>Complete the sentences below using NO MORE THAN TWO WORDS OR A NUMBER</p>

                                            <p>Lecture on <input id="q31" type="text" name="answer31"
                                                    data-track="answer31" placeholder="31"></p>
                                            <p>Examples: tourism and <input id="q32" type="text"
                                                    name="answer32" data-track="answer32" placeholder="32"></p>
                                            <p>Common misconception is that marketing points to <input id="q33"
                                                    type="text" name="answer33" data-track="answer33"
                                                    placeholder="33"> in what is being provided.</p>
                                            <p>Marketing is actually essential in maintaining <input id="q34"
                                                    type="text" name="answer34" data-track="answer34"
                                                    placeholder="34"></p>
                                            <p>Selling a product is easier because it is <input id="q35"
                                                    type="text" name="answer35" data-track="answer35"
                                                    placeholder="35"> and customers do not have such different <input
                                                    id="q36" type="text" name="answer36"
                                                    data-track="answer36" placeholder="36"></p>
                                            <p>Aim: offer service beyond hopes of<input id="q37" type="text"
                                                    name="answer37" data-track="answer37" placeholder="37"></p>
                                            <p>Important to: (a) keep informed & (b) <input id="q38"
                                                    type="text" name="answer38" data-track="answer38"
                                                    placeholder="38"></p>
                                            <p>One way to achieve this:<input id="q39" type="text"
                                                    name="answer39" data-track="answer39" placeholder="39"></p>
                                            <p><input id="q40" type="text" name="answer40"
                                                    data-track="answer40" placeholder="40"> must always be available
                                                for any queries or problems.</p>

                                            <!-- QUESTIONS END  -->
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="part-middle"></div>
                                    </div>
                                    <div class="col-12 part-track d-flex justify-content-around align-items-center">
                                        <a href="#q31" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer31">31</a>
                                        <a href="#q32" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer32">32</a>
                                        <a href="#q33" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer33">33</a>
                                        <a href="#q34" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer34">34</a>
                                        <a href="#q35" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer35">35</a>
                                        <a href="#q36" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer36">36</a>
                                        <a href="#q37" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer37">37</a>
                                        <a href="#q38" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer38">38</a>
                                        <a href="#q39" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer39">39</a>
                                        <a href="#q40" class="btn btn-outline-sidebtn question-nav"
                                            data-question="answer40">40</a>
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
                            @php $firstTab = true; @endphp
                @foreach ($mockTest->sections as $section)
                    @if ($section->name === 'Listening')
                        @foreach ($section->questionGroups as $index => $group)
                            <li class="nav-item">
                                <button type="button" class="nav-link {{ $firstTab ? 'active' : '' }}"
                                    data-bs-toggle="pill" data-bs-target="#part{{ $index + 1 }}">
                                    Part {{ $index + 1 }}
                                </button>
                            </li>
                            @php $firstTab = false; @endphp
                        @endforeach
                    @endif
                @endforeach
                        </ul>

                    </div>
                </div>
            </div>
        </section>

    </form>

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

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

    <!-- after submit start -->
    <script>
        const form = document.querySelector('.afterSubmitForm');
        const btn = document.querySelector('.afterSubmitBtn');
        form.addEventListener('submit', function() {
            btn.disabled = true;
            btn.innerHTML =
                'Loading... <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>';
        });
    </script>
    <script>
        const form2 = document.querySelector('.afterSubmitForm2');
        const btn2 = document.querySelector('.afterSubmitBtn2');
        form2.addEventListener('submit', function() {
            btn2.disabled = true;
            btn2.innerHTML =
                'Loading... <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>';
        });
    </script>
    <script>
        const form3 = document.querySelector('.afterSubmitForm3');
        const btn3 = document.querySelector('.afterSubmitBtn3');
        form3.addEventListener('submit', function() {
            btn3.disabled = true;
            btn3.innerHTML =
                'Loading... <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>';
        });
    </script>
    <!-- after submit end -->

</body>

</html>
