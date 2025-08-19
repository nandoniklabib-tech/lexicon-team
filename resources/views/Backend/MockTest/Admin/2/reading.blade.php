<!-- {{ asset('assets/css/') }} -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LEXICON - IELTS - Reading</title>

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
    
    <form class="afterSubmitForm" action="{{url('admin-mocktest-reading-exam-store')}}" method="post"> @csrf

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
              <button type="submit" class="afterSubmitBtn btn btn-outline-dark fw-bold">Finish test</button>
              <button class="btn btn-outline-dark ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <!-- <i class="bi bi-pencil-square"></i> -->
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
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="row justify-content-center">

                                <div class="col-md-12">
                                    <div class="px-md-5 px-3 pt-3 part-bottom" style="height:70vh;">
                                    <!-- QUESTIONS START  -->
                                     <div class="row">

                                        <!-- LEFT SIDE -->
                                        <div class="col-6" style="height:66vh;overflow:auto; border-right:.5px solid gray;">
                                            <div>
                                                <h3>Part 1</h3>
                                                <h2>Reading Passage 1</h2>
                                                <p>You should spend about 20 minutes on Questions 1 -13, which are based on Reading Passage 1 below.</p>
                                                <img style="width:100%;height:300px;" src="{{asset('adminMock/2/T2S1_0.jpg')}}" alt="image">
                                                <h5>Secret of Thailand's Success?</h5>
                                                <p>A. It is a question officials here in Asia are being posed more and more: Why are your economies so vibrant? Answers include young and swelling populations, decreased debt, growing cities, emerging middle-class consumer sectors, evolving markets and, of course, ( China’s rise. Add this to that list: Women and their increasing role in Asia’s economies. The idea is that the more opportunities women have, the more vibrant economies are and, consequently, the less need there is to amass a huge public debt to boost growth. It is an idea bolstered by a new survey by MasterCard International Inc., which compares the socio-economic level of women with men in Asia-Pacific nations. The gauge uses four key indicators: participation in the labour force, college education, managerial positions, and above-median income.</p>
                                                <p>B. Which Asian nation is doing host when it comes to women’s advancement? Thailand. It scored 92.3 of a possible 100, and according to MasterCard’s index, 100 equals gender equality. The survey was based on interviews with 300 to 350 women in thirteen nations and national statistics. Malaysia came in second with a score of 86.2, while China came in third with 68.4. The average score in Asia was 67.7. At the bottom of the list is South Korea (45.5), followed by Indonesia (52.5), and Japan (54.5). Perhaps it is a bizarre coincidence, yet MasterCard’s findings fit quite neatly with two important issues in Asia: economic leadership and debt. Thailand, Malaysia, and China are three economies widely seen as the future of Asia. Thailand’s economic boom in recent years has prompted many leaders in the region to look at its growth strategy. Malaysia, which has a female central bank governor, is one of Asia’s rising economic powers. China, of course, is the world’s hottest economy, and one that is shaking up trade patterns and business decisions everywhere.</p>
                                                <p>C. Something all three economies have in common is an above-average level of female participation. What the three worst ranked economies share are severe long-term economic challenges of high levels of debt and a female workforce that is being neglected. Research in economic history is very conclusive on the role of women in economic growth and development, says Yuwa Hedrick-Wong, an economic adviser to MasterCard. The more extensive women’s participation at all areas of economic activities, the higher the probability for stronger economic growth. That, Hedrick-Wong says, means societies and economies that consistently fail to fully incorporate women’s ability and talent in businesses, and the workplace will suffer the consequences. Take Korea, which has been walking in place economically in recent years. Immediately following the 1997— 1998 Asian financial crisis, Korea became a regional role model as growth boomed and unemployment fell. Yet a massive increase in household debt left consumers overexposed and growth slowed.</p>
                                                <p>D. Maybe it is a just coincidence that Korea also ranks low on measures of gender equality published by the United Nations. As of 2003, for example, it ranked below Honduras, Paraguay, Mauritius, and Ukraine in terms of women’s economic and political empowerment. Utilising more of its female workforce would deepen Korea’s labour pool and increase potential growth rates in the economy. The same goes for Japan. The reluctance of Asia’s biggest economy to increase female participation and let more women into the executive suite exacerbates its biggest long-term challenge: a declining birth rate. In 2003, the number of children per Japanese woman fell to a record low of 1.29 versus about. 2 in the early 1970s. Preliminary government statistics suggest the rate declined further in 2004. The trend is nothing short of a crisis for a highly indebted nation of 126 million that has yet to figure out how to fund the national pension system down the road. Yet Japan has been slow to realise that for many women, the decision to delay childbirth is a form of rebellion against societal expectations to have children and become housewives,</p>
                                                <p>E. It may be 2005, yet having children is a career-ending decision for millions of bright, ambit ions, and well-educated Japanese, Until corrected, Japan’s birth rate will drop and economic growth will lag, UN Secretary General Kofi Annan was absolutely right earlier this month when he said no other policy is as likely to raise economic productivity than the empowerment of women. Here, in Thailand, the government is getting some decent marks in this regard, and the economy’s 6 per cent-plus growth rate may be a direct result. Thailand still has a long way to go. Yet the Bank of Thailand’s deputy governor, Tarisa Watanagase, is a woman, as are seven of nine assistant governors. Then there’s Jada Wattanasiritham, who runs Siam Commercial Bank Plc, Thailand’s fourth-biggest lender. How many female chief executives can you name in Japan or Korea? Looked at broadly in Asia, MasterCard’s survey is on to something. It is that giving women more opportunities to contribute to an economy is not just about fairness, but dollars and sense, too.</p>
                                                
                                                
                                            </div>
                                        </div>

                                        <!-- RIGHT SIDE -->
                                        <div class="col-6" style="height:66vh;overflow:auto; border-left:.5px solid gray;">
                                            <h5>Questions 1-4</h5>
                                            <p>The text has 5 paragraphs (A - E).</p>
                                            <p>Which paragraph contains each of the following pieces of information?</p>

                                            <p>
                                                <select name="answer1" id="q1" data-track="answer1">
                                                    <option value="" hidden>1</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>   The fact that a woman runs one of Thailand’s biggest banks 
                                            </p>
                                            <p>
                                                <select name="answer2" id="q2" data-track="answer2">
                                                    <option value="" hidden>2</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>  The number of countries included in the survey  
                                            </p>
                                            <p>
                                                <select name="answer3" id="q3" data-track="answer3">
                                                    <option value="" hidden>3</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>    The fact that Japan’s birth rate is falling quickly
                                            </p>
                                            <p>
                                                <select name="answer4" id="q4" data-track="answer4">
                                                    <option value="" hidden>4</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                </select>    The criteria used to get a score for each country
                                            </p>

                                            <H5>Questions 5-8</H5>
                                            <p>Complete the following sentences using NO MORE THAN THREE WORDS from the text for each gap.</p>
                                        
                                            <p>Higher consumption in the<input id="q5" type="text" name="answer5" data-track="answer5" placeholder="5">sector of the market is one reason that Asia’s economies are doing well.</p>
                                            <p>The scores were decided through a combination of interviews and<input id="q6" type="text" name="answer6" data-track="answer6" placeholder="6"></p>
                                            <p>Higher<input id="q7" type="text" name="answer7" data-track="answer7" placeholder="7">has created an economic problem for Korea.</p>
                                            <p>Japanese politicians have not yet decided how to get money for the<input id="q8" type="text" name="answer8" data-track="answer8" placeholder="8"></p>

                                            <h5>Questions 9-13</h5>
                                            <p>Do the following statements agree with the information given in Reading Passage 1?</p>
                                            <p>In boxes 9 - 13 on your answer sheet, write</p>

                                            <p>TRUE.	if the statement agrees with the information</p>
                                            <p>FALSE.	if the statement contradicts the information</p>
                                            <p>NOT GIVEN.	If there is no information on this</p>

                                            <p>
                                                <select name="answer9" id="q9" data-track="answer9">
                                                    <option value="" hidden>9</option>
                                                    <option value="TRUE">TRUE</option>
                                                    <option value="FALSE">FALSE</option>
                                                    <option value="NOT GIVEN">NOT GIVEN</option>
                                                </select> Other countries are looking at the example of Thailand to see if its policies can help their economies.   
                                            </p>
                                            <p>
                                                <select name="answer10" id="q10" data-track="answer10">
                                                    <option value="" hidden>10</option>
                                                    <option value="TRUE">TRUE</option>
                                                    <option value="FALSE">FALSE</option>
                                                    <option value="NOT GIVEN">NOT GIVEN</option>
                                                </select> Higher female participation in an economy always leads to greater economic growth.   
                                            </p>
                                            <p>
                                                <select name="answer11" id="q11" data-track="answer11">
                                                    <option value="" hidden>11</option>
                                                    <option value="TRUE">TRUE</option>
                                                    <option value="FALSE">FALSE</option>
                                                    <option value="NOT GIVEN">NOT GIVEN</option>
                                                </select>    Female participation in the economy is lower in Japan than in most other developed economies.
                                            </p>
                                            <p>
                                                <select name="answer12" id="q12" data-track="answer12">
                                                    <option value="" hidden>12</option>
                                                    <option value="TRUE">TRUE</option>
                                                    <option value="FALSE">FALSE</option>
                                                    <option value="NOT GIVEN">NOT GIVEN</option>
                                                </select>  Most of the Bank of Thailand’s assistant governors are female.  
                                            </p>
                                            <p>
                                                <select name="answer13" id="q13" data-track="answer13">
                                                    <option value="" hidden>13</option>
                                                    <option value="TRUE">TRUE</option>
                                                    <option value="FALSE">FALSE</option>
                                                    <option value="NOT GIVEN">NOT GIVEN</option>
                                                </select>    The writer considers 'fairness’ to be a bad reason for giving women top jobs.
                                            </p>

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
                                    <a href="#q2" class="btn btn-outline-sidebtn question-nav" data-question="answer2">2</a>
                                    <a href="#q3" class="btn btn-outline-sidebtn question-nav" data-question="answer3">3</a>
                                    <a href="#q4" class="btn btn-outline-sidebtn question-nav" data-question="answer4">4</a>
                                    <a href="#q5" class="btn btn-outline-sidebtn question-nav" data-question="answer5">5</a>
                                    <a href="#q6" class="btn btn-outline-sidebtn question-nav" data-question="answer6">6</a>
                                    <a href="#q7" class="btn btn-outline-sidebtn question-nav" data-question="answer7">7</a>
                                    <a href="#q8" class="btn btn-outline-sidebtn question-nav" data-question="answer8">8</a>
                                    <a href="#q9" class="btn btn-outline-sidebtn question-nav" data-question="answer9">9</a>
                                    <a href="#q10" class="btn btn-outline-sidebtn question-nav" data-question="answer10">10</a>
                                    <a href="#q11" class="btn btn-outline-sidebtn question-nav" data-question="answer11">11</a>
                                    <a href="#q12" class="btn btn-outline-sidebtn question-nav" data-question="answer12">12</a>
                                    <a href="#q13" class="btn btn-outline-sidebtn question-nav" data-question="answer13">13</a>
                                    <a href="#q14" class="btn btn-outline-sidebtn question-nav" data-question="answer14">14</a>
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
                                            <div>
                                                <h3>Part 2</h3>
                                                <h2>Reading Passage 2</h2>
                                            </div>
                                            <p>You should spend about 20 minutes on Questions 14 - 26, which are based on Reading Passage 2 below.</p>
                                            <img style="width:100%;height:300px;" src="{{asset('adminMock/2/T2S2_0.jpg')}}" alt="image">
                                            <h5>Patients Are a Virtue</h5>
                                            <p>A. Despite conference jeers, job cuts, and a financial crisis, health secretary Patricia Hewitt may find a reason to smile this week, as the NHS (British National Health Service) was named one of the top places to work by students. Among engineering, science, and IT students, the health service was ranked second in this year’s Univer-sum UK graduate survey of ideal employers, a leap of 54 places from last year. The annual survey, conducted in the UK since 1997, canvassed the opinions of more than 7,700 final and penultimate-year students studying for degrees in business, engineering, science, IT, and the humanities, at 39 universities, between January and March this year.</p>
                                            <p>B. Each student was presented with a list of 130 employers, nominated by students through a separate process, from which they selected the five they considered to be ideal employers. The Universum list is based on the frequency of an organisation being selected as an ideal employer, following a weighting process. This year, government departments and public sector organisations dominated the top spots, with the BBC ranked first among humanities, engineering, science, and IT students, retaining its place from last year, and coming third for those studying business. Among humanities students, the BBC was followed closely by the Foreign and Commonwealth Office and the Civil Service fast stream. The Cabinet Office and the Ministry of Defence were not far behind, ranked fifth and sixth respectively. As well as the NHS, engineering, science, and IT students favoured the Environment Agency, which leapt 83 places, from 86 in 2005 to number three this year. Meanwhile, business students voted accountancy giants PricewaterhouseCoopers (PwC) as their favoured employer, followed by HSBC.</p>
                                            <p>C. At a London awards ceremony sponsored by the Guardian, Foluke Ajayi, head of NHS careers at NHS employers, said its success this year reflected the reality of the health service, which is the third largest employer in the world and the largest in Europe. “We employ people in other clinical areas, such as health care. We employ IT managers, engineers, architects,” she said, adding that the health service is no longer seen as a “second choice” career. “People recognise that they can give something back to the community, but still develop a worthwhile career.”</p>
                                            <p>D. Sarah Churchman, director of student recruitment and diversity at PwC, said her company’s success is down to a good campus presence, its commitment to invest in its employees and, with offices around the world, the chance to travel, something which just under half of the students polled said was an important factor when it came to looking for work. One of the big four accountancy firms, PwC is not into gimmicks, and it does not offer freebies but, said Churchman, it does offer “a solid foundation” for anyone wanting a career in business. “We sell our people skills, so we are interested in building skills. We’re not selling something, we invest in our people,” she added.</p>
                                            <p>E. Further down the rankings, but still with reason to celebrate, was John Lewis, which matched bumper sales this year with a leap from 111th place in 2005 to 26th among this year’s humanities students. Sky found itself in 12th place, up from 104th last year, and the Environment Agency also proved popular among this student group, rising from 138th in 2005 to 7th this year. Among the business fraternity, shell saw a reversal of fortunes, rising to 30th place after last year’s 76thposition. There were a few dramatic drops in the rankings. The Bank of England fell from 14th in 2005 to 27th this year among humanities students, although it retained its mid-table position among those studying business. British Airways also saw a slight dip, as did McKinsey & Co, which dropped from 11th to 22ndamong business undergraduates.</p>
                                            <p>F. Perhaps more surprisingly, this year was the first appearance in the rankings of Teach First, a small charity launched three years ago that aims to create the “leaders of the future” by encouraging top graduates who would not normally consider a career in teaching to commit to work in “challenging” secondary schools for at least two years. The organisation came straight in at number eight among humanities students and was voted 22nd by those studying engineering, science, and IT. James Darley, director of graduate recruitment at Teach First, said he was “bowled over” by the news. “We were not expecting this. We’re a registered charity, only able to physically go to 15 universities.”</p>
                                            <p>G. The scheme, based on one run in the US, has the backing of more than 80 businesses, including Deloitte and HSBC. During their two years, candidates undertake leadership training and emerge from the programme with a range of skills and experiences. “We hope in the long term they will be our ambassadors, as we call them, in politics, industry, charities, who will have done it and continue to support the educationally disadvantaged,” adds Darley. This year, 260 graduates are expected to take up the Teach First challenge in schools in London and Manchester, More are expected over the coming years, as the scheme expands to Birmingham and three other cities by 2008. Of the first set of recruits to complete the programme, half have gone on to work for “some amazing companies”, while the other half have chosen to stay on in their schools for a further year - 20% in leadership roles.</p>
                                            <p>H. While more than half of students were concerned about achieving a good work life balance, a third said they wanted a job that would challenge them. Although male Students tended to focus more on the practical aspects of work, such as “building a sound financial base”, women, particularly those studying for humanities degrees, had a more idealistic outlook, saying making a contribution to society was a key career goal. Almost half of all students said that paid overtime was a key part of any company compensation package, However, business students said that the most important compensation, apart from salary, was performance-related bonuses, while important considerations for humanities students were retirement plans. Working overseas also scored highly among those surveyed this year, with 45% of business students, and 44% of humanities students, listing it as a priority. Ethical considerations and corporate social responsibilities were also mentioned, with a large percentage of humanities and engineering, science and IT students saying it was a key consideration when it came to choosing an employer.</p>
                                            <p></p>
                                            
                                            

                                        </div>
                                        
                                        <!-- RIGHT SIDE -->
                                        <div class="col-6" style="height:66vh;overflow:auto; border-left:.5px solid gray;">

                                            <h5>Questions 14-17</h5>
                                            <p>The text has 8 paragraphs (A - H).</p>
                                            <p>Which paragraph does each of the following headings best fit?</p>

                                            <p>
                                                <select name="answer14" id="q14" data-track="answer14">
                                                    <option value="" hidden>14</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>   Most popular employers for different students
                                            </p>
                                            <p>
                                                <select name="answer15" id="q15" data-track="answer15">
                                                    <option value="" hidden>15</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>   Students’ expectations
                                            </p>
                                            <p>
                                                <select name="answer16" id="q16" data-track="answer16">
                                                    <option value="" hidden>16</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>   Give and develop with the NHS
                                            </p>
                                            <p>
                                                <select name="answer17" id="q17" data-track="answer17">
                                                    <option value="" hidden>17</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                    <option value="G">G</option>
                                                    <option value="H">H</option>
                                                </select>   Reason for the NHS to be happy
                                            </p>

                                            <H5>Questions 23-24</H5>
                                            <p>According to the information given in the text, choose the correct answer or answers from the choices given.</p>


                                        <div class="col-md-12 mb-4">
                                            <h5 id="q23">23. The survey covered students</h5>
                                            <div class="form-check ps-5">
                                                <input class="form-check-input" type="radio" name="answer23" value="from all British universities" id="answer231">
                                                <label class="form-check-label" for="answer231">
                                                    from all British universities
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input class="form-check-input" type="radio" name="answer23" value="studying a variety of subjects" id="answer232">
                                                <label class="form-check-label" for="answer232">
                                                    studying a variety of subjects
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input class="form-check-input" type="radio" name="answer23" value="who were in their last year of studies only" id="answer233">
                                                <label class="form-check-label" for="answer233">
                                                    who were in their last year of studies only
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-4">
                                            <h5 id="q24">24. The BBC</h5>
                                            <div class="form-check ps-5">
                                                <input class="form-check-input" type="radio" name="answer24" value="was first choice in most categories" id="answer241">
                                                <label class="form-check-label" for="answer241">
                                                    was first choice in most categories
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input class="form-check-input" type="radio" name="answer24" value="was unpopular with business students" id="answer242">
                                                <label class="form-check-label" for="answer242">
                                                    was unpopular with business students
                                                </label>
                                            </div>
                                            <div class="form-check ps-5">
                                                <input class="form-check-input" type="radio" name="answer24" value="employs more graduates than most other organisations and companies" id="answer243">
                                                <label class="form-check-label" for="answer243">
                                                    employs more graduates than most other organisations and companies
                                                </label>
                                            </div>
                                        </div>


                                        </div>

                                     </div>

                                    <!-- QUESTIONS END  -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="part-middle"></div>
                                </div>
                                <div class="col-md-10 part-track d-flex justify-content-around align-items-center">
                                    <a href="#q15" class="btn btn-outline-sidebtn question-nav" data-question="answer15">15</a>
                                    <a href="#q16" class="btn btn-outline-sidebtn question-nav" data-question="answer16">16</a>
                                    <a href="#q17" class="btn btn-outline-sidebtn question-nav" data-question="answer17">17</a>
                                    <a href="#q18" class="btn btn-outline-sidebtn question-nav" data-question="answer18">18</a>
                                    <a href="#q19" class="btn btn-outline-sidebtn question-nav" data-question="answer19">19</a>
                                    <a href="#q20" class="btn btn-outline-sidebtn question-nav" data-question="answer20">20</a>
                                    <a href="#q21" class="btn btn-outline-sidebtn question-nav" data-question="answer21">21</a>
                                    <a href="#q22" class="btn btn-outline-sidebtn question-nav" data-question="answer22">22</a>
                                    <a href="#q23" class="btn btn-outline-sidebtn question-nav" data-question="answer23">23</a>
                                    <a href="#q24" class="btn btn-outline-sidebtn question-nav" data-question="answer24">24</a>
                                    <a href="#q25" class="btn btn-outline-sidebtn question-nav" data-question="answer25">25</a>
                                    <a href="#q26" class="btn btn-outline-sidebtn question-nav" data-question="answer26">26</a>
                                    <a href="#q27" class="btn btn-outline-sidebtn question-nav" data-question="answer27">27</a>
                                </div>

                            </div>
                        </div>
                        
                        <!-- PART 3 CONTENT -->
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                            <div class="row justify-content-center">

                                <div class="col-md-12">
                                    <div class="px-md-5 px-3 pt-3 part-bottom" style="height:70vh;">
                                    <!-- QUESTIONS START  -->
                                     <div class="row">

                                        <!-- LEFT SIDE -->
                                        <div class="col-6" style="height:66vh;overflow:auto; border-right:.5px solid gray;">
                                            <div>
                                                <h3>Part 3</h3>
                                                <h2>Reading Passage 3</h2>
                                            </div>
                                            <p>You should spend about 20 minutes on Questions 27 - 40, which are based on Reading Passage 3 below.</p>
                                            <img style="width:100%;height:300px;" src="{{asset('adminMock/2/T2S3_0.jpg')}}" alt="image">

                                            <h5>Rise of the Robots</h5>
                                            <p>If you are into technology, you are living in wonderful times. Things are developing in leaps and bounds, especially gadgets. Let us look at the technology that is set to break through.</p>

                                            <h6>CELESTRON SKYSCOUT</h6>
                                            <p>Backyard stargazing goes seriously hi-tech with the Celestron SkyScout, which was judged to be the Best of Innovations at the New York Consumer Electronics Show press preview event in November. It is not difficult to see why. The SkyScout is a hand-held viewing device that is capable of finding and identifying more than 6,000 celestial objects visible to the naked eye, thus transforming the night sky into your own personal planetarium. Using GPS technology and a substantial celestial database, the camcorder-sized SkyScout enables stargazers to point the device at any visible object in the sky, press a button, and then listen to a commentary. For the truly celestially challenged, if you want to view a star or planet but do not have a clue which bit of the heavens to look in, do not despair; the SkyScout’s "locate” feature will guide you to it using illuminated arrows in the viewfinder.</p>

                                            <h6>NOKIA N91</h6>
                                            <p>This amazing mobile jukebox is due out early in 2006. Nokia’s N91 looks set to be in a class of its own as a multimedia mobile phone. It will play music, take photos, surf the web and download videos, store contact details, and generally organise your life. The robust little phone, resplendent in its stainless steel case, is the first Nokia to be equipped with a hard drive (4Gb), which means that it can store up to 3,000 songs. The N91, which has a hi-fi quality headset and remote control, supports a wide range of digital music formats, including MP3, Real, WAV, and WMA. It uses wireless technology to allow users to find and buy music from the operator’s music store. You can also drag and drop music from your PC to the N91 and manage and share playlists. If you can find the time, you can get on the blower, too.</p>

                                            <h6>SEIKO SPECTRUM E-PAPER WATCH</h6>
                                            <p>The Seiko Spectrum is no ordinary wristwatch. At first glance, it is an attractive and futuristic bracelet-style watch. Look closer, however, and you will notice that its display is unlike any you have seen before. Rather than the usual LCD screen, the display is made of “e-paper” - from the electronic paper pioneers E Ink Corp - and shows a constantly changing mosaic pattern along with the time. Because e-paper is so flexible and thin, it allows the display to curve round the wrist along with the watch band - something conventional liquid-crystal displays cannot do, as they have to be flat. Seiko says the e-paper display not only produces far better contrast than an LCD screen, but requires no power to retain an image, so the batteries last longer. Seiko is releasing only 500 of the watches next month, priced at about £1,250 - so you'd better lose no time.</p>

                                            <h6>HIGH-DEFINITION TV</h6>
                                            <p>HDTV, already available in the United States, Japan, and Australia, will hit the UK in 2006. When you watch a programme filmed in the HD format, you will see a much sharper, clearer and more vibrant image. This is due partly to the way a programme is filmed, but also to the high-definition TV set itself, which uses either 720 or 1,080 visible rows of pixels (depending on which format the individual HDTV uses) to display images, compared to the 576 rows of pixels used in current sets.</p>

                                            <h6>ELECTROLUX TRILOBITE 2.0 ROBOT VACUUM CLEANER</h6>
                                            <p>Next time you are expecting visitors, do not bother to vacuum first - wait until they arrive, and then entertain them with this little gadget. The Electrolux Trilobite 2.0 is a robotic vacuum cleaner that navigates its way around your floors using ultrasound, just like a bat. It pings out ultrasound vibrations at surfaces to create a map of the room, which it remembers for future cleaning assignments. The Trilobite has no problem avoiding collision with things placed on the floor. Special magnetic strips are placed in doorways, near stairs and other openings. These act as a wall, keeping the Trilobite in the room. You can also programme it to glide round when you’re at work or after you've gone to bed. When Electrolux introduced the original Trilobite in 2001, it was voted among the 100 most innovative designs (though whether the judges were dedicated couch potatoes, and thus biased, we were not aide to discover). The name comes from the hard-shelled sea creature from the Paleozoic era (between 250 million and 560 million years ago) that roamed the ocean floor feeding on particles and small animals.</p>

                                            <h6>HONDA ASIMO ROBOT</h6>
                                            <p>Need an extra pair of hands around the office? Look no further; this mouth, the Honda Motor Company showcased its second-generation humanoid robot, Asimo. The machine has come a long way since its first incarnation five years ago. The 1.3 metre-tall droid is now capable of performing a variety of office tasks, including reception duties, serving drinks and acting as an information guide, as well as making deliveries. Using multiple sensors, Asimo has the ability to recognise the surrounding environment and interact with people using integrated circuit tags. It can walk and run at a fair pace, and push a cart. Honda plans to start using Asimo’s receptionist functions at its Wako Building in Japan early in 2006, and it is hoped it will become available for leasing afterwards. It could soon be pushing a cart at an office near you.</p>

                                        </div>
                                        
                                        <!-- RIGHT SIDE -->
                                        <div class="col-6" style="height:66vh;overflow:auto; border-left:.5px solid gray;">
                                            <h5>Questions 27-30</h5>
                                            <p>For each question, only ONE of the choices is correct.</p>
                                            <p>Write the corresponding letter in the appropriate box on your answer sheet.</p>

<div class="col-md-12 mb-4">
    <h5 id="q27">27. The Celestron SkyScout can</h5>
    <div class="form-check ps-5">
        <input class="form-check-input" type="radio" name="answer27" value="tell you information about the stars" id="answer271">
        <label class="form-check-label" for="answer271">
            tell you information about the stars
        </label>
    </div>
    <div class="form-check ps-5">
        <input class="form-check-input" type="radio" name="answer27" value="tell you where in the world you are" id="answer272">
        <label class="form-check-label" for="answer272">
            tell you where in the world you are
        </label>
    </div>
    <div class="form-check ps-5">
        <input class="form-check-input" type="radio" name="answer27" value="find objects in the sky that are not normally visible" id="answer273">
        <label class="form-check-label" for="answer273">
            find objects in the sky that are not normally visible
        </label>
    </div>
</div>

<div class="col-md-12 mb-4">
    <h5 id="q28">28. The Seiko Spectrum e-paper watch</h5>
    <div class="form-check ps-5">
        <input class="form-check-input" type="radio" name="answer28" value="cannot be bent" id="answer281">
        <label class="form-check-label" for="answer281">
            cannot be bent
        </label>
    </div>
    <div class="form-check ps-5">
        <input class="form-check-input" type="radio" name="answer28" value="can be used for surfing the Internet" id="answer282">
        <label class="form-check-label" for="answer282">
            can be used for surfing the Internet
        </label>
    </div>
    <div class="form-check ps-5">
        <input class="form-check-input" type="radio" name="answer28" value="is being produced as a limited edition" id="answer283">
        <label class="form-check-label" for="answer283">
            is being produced as a limited edition
        </label>
    </div>
</div>

<div class="col-md-12 mb-4">
    <h5 id="q29">29. The Electrolux Trilobite 2.0 robot vacuum cleaner</h5>
    <div class="form-check ps-5">
        <input class="form-check-input" type="radio" name="answer29" value="asks permission before moving from room to room" id="answer291">
        <label class="form-check-label" for="answer291">
            asks permission before moving from room to room
        </label>
    </div>
    <div class="form-check ps-5">
        <input class="form-check-input" type="radio" name="answer29" value="uses lasers to help it avoid objects" id="answer292">
        <label class="form-check-label" for="answer292">
            uses lasers to help it avoid objects
        </label>
    </div>
    <div class="form-check ps-5">
        <input class="form-check-input" type="radio" name="answer29" value="is programmable" id="answer293">
        <label class="form-check-label" for="answer293">
            is programmable
        </label>
    </div>
</div>

<div class="col-md-12 mb-4">
    <h5 id="q30">30. The Honda Asimo robot</h5>
    <div class="form-check ps-5">
        <input class="form-check-input" type="radio" name="answer30" value="has two pairs of hands" id="answer301">
        <label class="form-check-label" for="answer301">
            has two pairs of hands
        </label>
    </div>
    <div class="form-check ps-5">
        <input class="form-check-input" type="radio" name="answer30" value="uses lasers to help it recognise its surroundings" id="answer302">
        <label class="form-check-label" for="answer302">
            uses lasers to help it recognise its surroundings
        </label>
    </div>
    <div class="form-check ps-5">
        <input class="form-check-input" type="radio" name="answer30" value="can run" id="answer303">
        <label class="form-check-label" for="answer303">
            can run
        </label>
    </div>
</div>


                                            <h5>Questions 31-35</h5>
                                            <p>Complete the following sentences using NO MORE THAN THREE WORDS from the text for each gap.</p>

                                            <p>The SkyScout uses GPS and<input id="q31" type="text" name="answer31" data-track="answer31" placeholder="31">to help you find a star.</p>
                                            <p>The Seiko Spectrum does not need batteries to power the<input id="q32" type="text" name="answer32" data-track="answer32" placeholder="32"></p>
                                            <p>HDTV uses more<input id="q33" type="text" name="answer33" data-track="answer33" placeholder="33">than conventional TV.</p>
                                            <p>The Trilobite 2.0 could be used to<input id="q34" type="text" name="answer34" data-track="answer34" placeholder="34">guests.</p>
                                            <p>Asimo first appeared <input id="q35" type="text" name="answer35" data-track="answer35" placeholder="35"></p>

                                            <h5>Questions 36-40</h5>
                                            <p>Do the following statements agree with the information given in Reading Passage 3?</p>
                                            <p>In boxes 36 - 40 on your answer sheet, write</p>
                                            
                                            <p>TRUE.	if the statement agrees with the information</p>
                                            <p>FALSE.	if the statement contradicts the information</p>
                                            <p>NOT GIVEN.	If there is no information on this</p>

                                            <p>
                                                <select name="answer36" id="q36" data-track="answer36">
                                                    <option value="" hidden>36</option>
                                                    <option value="TRUE">TRUE</option>
                                                    <option value="FALSE">FALSE</option>
                                                    <option value="NOT GIVEN">NOT GIVEN</option>
                                                </select> The Nokia N91 is strong.
                                            </p>
                                            <p>
                                                <select name="answer37" id="q37" data-track="answer37">
                                                    <option value="" hidden>37</option>
                                                    <option value="TRUE">TRUE</option>
                                                    <option value="FALSE">FALSE</option>
                                                    <option value="NOT GIVEN">NOT GIVEN</option>
                                                </select> E-paper can be torn easily.
                                            </p>
                                            <p>
                                                <select name="answer38" id="q38" data-track="answer38">
                                                    <option value="" hidden>38</option>
                                                    <option value="TRUE">TRUE</option>
                                                    <option value="FALSE">FALSE</option>
                                                    <option value="NOT GIVEN">NOT GIVEN</option>
                                                </select> HDTV is filmed differently to conventional TV.
                                            </p>
                                            <p>
                                                <select name="answer39" id="q39" data-track="answer39">
                                                    <option value="" hidden>39</option>
                                                    <option value="TRUE">TRUE</option>
                                                    <option value="FALSE">FALSE</option>
                                                    <option value="NOT GIVEN">NOT GIVEN</option>
                                                </select> The Trilobite 2.0 looks just like the original design.
                                            </p>
                                            <p>
                                                <select name="answer40" id="q40" data-track="answer40">
                                                    <option value="" hidden>40</option>
                                                    <option value="TRUE">TRUE</option>
                                                    <option value="FALSE">FALSE</option>
                                                    <option value="NOT GIVEN">NOT GIVEN</option>
                                                </select> Asimo is available for export.
                                            </p>

                                        </div>

                                     </div>

                                    <!-- QUESTIONS END  -->
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="part-middle"></div>
                                </div>
                                <div class="col-md-10 part-track d-flex justify-content-around align-items-center">
                                    <a href="#q28" class="btn btn-outline-sidebtn question-nav" data-question="answer28">28</a>
                                    <a href="#q29" class="btn btn-outline-sidebtn question-nav" data-question="answer29">29</a>
                                    <a href="#q30" class="btn btn-outline-sidebtn question-nav" data-question="answer30">30</a>
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
      
    <!-- after submit start -->
    <script>
        const form = document.querySelector('.afterSubmitForm');
        const btn = document.querySelector('.afterSubmitBtn');
        form.addEventListener('submit', function () {
            btn.disabled = true;
            btn.innerHTML = 'Loading... <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>';
        });
    </script>
    <script>
        const form2 = document.querySelector('.afterSubmitForm2');
        const btn2 = document.querySelector('.afterSubmitBtn2');
        form2.addEventListener('submit', function () {
            btn2.disabled = true;
            btn2.innerHTML = 'Loading... <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>';
        });
    </script>
    <script>
        const form3 = document.querySelector('.afterSubmitForm3');
        const btn3 = document.querySelector('.afterSubmitBtn3');
        form3.addEventListener('submit', function () {
            btn3.disabled = true;
            btn3.innerHTML = 'Loading... <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>';
        });
    </script>
    <!-- after submit end -->

  </body>
</html>