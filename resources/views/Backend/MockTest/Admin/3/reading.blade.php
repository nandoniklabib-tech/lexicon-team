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
    
    <form action="{{url('admin-mocktest-reading-exam-store')}}" method="post"> @csrf

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
                                                <h3>Part 1</h3>
                                                <h2>Reading Passage 1</h2>
                                                <p>You should spend about 20 minutes on Questions 1-14 which are based on this passage.</p>
                                                <img style="width:100%;height:300px;" src="https://iotcdn.oss-ap-southeast-1.aliyuncs.com/2020-11/Survivor%20from%20the%20sky.jpg" alt="image">
                                                <h3 class="my-4">Survivor from the sky</h3>
                                                <p>In a remarkable documentary, Wings of Hope, German director Werner Herzog re-counts the true story of an eighteen-year-old girl, the sole survivor of a plane crash in the Amazon jungle in 1971. Twenty-nine years later, Herzog returns to the jungle with Juliane Koepke, now a 46-year-old biologist, and she tells her amazing story on film.</p>
                                                <p>Juliane had just graduated from high school in Lima, Peru and, with her mother, was flying out to spend Christmas at her father’s research station in the jungle. A half hour into the flight they encountered a horrific storm. In the midst of wild turbulence, the plane was struck by lightning and fell into a nosedive. Passengers screamed as baggage flew around the compartment. Then the plane broke into pieces and suddenly Juliane found herself outside free-falling 30,000 feet. ‘I was suspended in mid-air, still in my scat. It wasn’t so much that I had left the plane but that the plane had left me. It simply wasn’t there any more. I was all alone with my row of seats,’ says Juliane. ‘I sailed on through the air, then I tumbled into a fall. The seatbelt squeezed my stomach and I couldn’t breathe any more.’ Before she lost consciousness, Juliane saw the dense jungle below, ‘a deep green, like broccoli’, with no clearings for hundreds of miles.</p>
                                                <p>Somehow, miraculously, Juliane survived that fall from the sky. In the film, she speculates on a number of factors which may have combined to save her. First, the storm had produced a strong updraft from the thunder clouds. Secondly, being strapped into a row of seats, she was aware of falling in a spiralling movement, like a maple seed pod. Then, hitting the canopy of trees, she tumbled through a maze of vines which slowed her landing in deep mud.</p>
                                                <p>But surviving the fall, though miraculous in itself, was just the beginning. When Juliane awoke hours later, wet and covered with mud, she was still strapped to her seat. Staggering to her feet, she assessed her injuries: a fractured bone in the neck, concussion and deep cuts in her leg and back. She was also in shock, lost and totally alone in the Amazon jungle.</p>
                                                <p>No doubt it was her familiarity with the wilderness that enabled her to cope. Her parents were biologists and Juliane had grown up in the jungle. She realised her only hope was to follow a little stream of water nearby, trusting that it would eventually lead to a larger river and rescue. With no provisions, dressed in the miniskirt she had worn on the plane and wearing just one shoe, she set off through the jungle. She passed broken fragments from the plane - a wheel, an engine. ‘Initially, I saw planes circling above me, but after a few days I realised the search had been called off,’ she said.</p>
                                                <p>Surprisingly she felt no hunger but as the days passed her health was deteriorating rapidly. The gash in her shoulder, where flies had laid their eggs was now crawling with maggots. ‘I knew I’d perish in the jungle so I stayed in the water.’ Walking in the stream, however, presented one risk more serious than any others. Before each step she had to poke ahead in the sand with a stick, to avoid treading on poisonous sting rays, lying hidden on the bottom.</p>
                                                <p>As the stream grew into a river, swimming was the only option. However, here in deeper water, there were new threats. Crocodiles basking on the shores slipped silently into the water as she passed. Juliane trusted that they feared humans and were entering the water to hide. She swam on. On the tenth day, starving and barely conscious, she spotted a hut and a canoe. They belonged to three woodcutters working nearby. Rescue was at hand.</p>
                                                <p>For this 46-year-old woman, re-living such a traumatic experience on film must have been a great challenge. But she shows little emotion. Flying back into the jungle, she sits in the same seat (19F) as on that fateful day. She is dispassionate, unemotional in describing the flight. On the ground, when they finally locate the crash site, in dense jungle, Juliane is scientific in her detachment, looking through the debris, now buried under dense vegetation. She examines a girl’s purse, the skeleton of a suitcase. Walking along the stream, she spots the engine which she remembers passing on the third day. Her arms and legs are covered with mosquitoes, but she seems to ignore all discomfort. Then, back in the town, standing in front of a monument erected in memory of the victims of the crash, entitled Alas de Esperanza (Wings of Hope), Juliane comments simply, T emerged, as the sole embodiment of hope from this disaster.</p>
                                                <p></p>
                                            </div>
                                        </div>

                                        <!-- RIGHT SIDE -->
                                        <div class="col-6" style="height:66vh;overflow:auto; border-left:.5px solid gray;">
 
                                            <!-- QUESTIONS START  -->

                                            <!-- QUESTIONS END  -->

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
                                            <p>You should spend about 20 minutes on <b> Questions 15-27</b> which are based on this passage.</p>
                                            <img style="width:100%;height:300px;" src="https://iotcdn.oss-ap-southeast-1.aliyuncs.com/2020-11/The%20race%20to%20make%20spider%20silk1.jpg" alt="image">
                                            <h5>The race to make spider silk</h5>
                                            <p>The strength, toughness, and elasticity of silk continue to fascinate scientists, who wonder what gives this natural material its unusual qualities. Finer than human hair, lighter than cotton, and ounce for ounce stronger than steel, silk is of special interest to materials researchers. They are trying to duplicate its properties and synthesise it for large-scale production. Silk holds the promise of wear-resistant shoes and clothes; stronger ropes, nets, seatbelts and parachutes; rustfree panels and bumpers for automobiles; improved sutures and bandages; artificial tendons and ligaments; supports for weakened blood vessels as well as bulletproof vests.</p>
                                            <p>Many insects secrete silks of varying quality. Best known is the moth bombyx mori, whose caterpillar is commonly known as the silkworm. It spins its cocoon from a single thread between 300 and 900 metres long and has been used for centuries to make fine garments. But the focus of scientific attention today is on spider silk: tougher, stretchier, and more waterproof than silkworm strands. Spiders make as many as seven different types of silk, but one spider and two types of silk are at the centre of intense interest. The spider is the golden orb-weaving spider, nephila clavipes. Its two silks under investigation go by the evocative names ‘dragline’ and ‘capture’.</p>
                                            <p>Dragline is the silk which forms the frame for the wheel-shaped webs and enables the dangling spider to drop down and grab its prey. This silk exhibits a combination of strength and toughness unmatched by high-performance synthetic fibre.</p>
                                            <p>Capture silk is the resilient substance at the centre of the web. To catch a speeding insect, it may stretch to almost three times its original length. Insects get entangled in the sticky web because the stretchiness of capture silk lets the web move back and forth after the insect hits it. If the web were stiff, the insect might just bounce off. Whereas dragline is stronger, capture silk is more flexible, five times more flexible in fact.</p>
                                            <p>Because the orb weaver’s survival depends on its silk, some 400 million years of evolution have fine-tuned a remarkably tough and versatile material. Now, research groups all over the world are competing to spin the first artificial spider silk, a job that requires a three-step approach: to determine the fibre’s molecular architecture, to understand the genes that yield silk proteins, and then to learn how to spin the raw material into threads.</p>
                                            <p>The first two steps are well underway. The molecular structure for both dragline and capture silk is known and now researchers have cloned several genes for the silks and unravelled their protein structure.</p>
                                            <p>The next step is to find hosts for the artificial genes. Plants and fungi, as well as bacteria, are being considered. If a hardy plant could express a dragline silk gene, silk proteins could eventually be harvested in large quantities, processed into a liquid, polymer, and spun in factories, A different experimental approach is to insert the web gene into goats in order to collect the protein from the goats’ milk. Goats are being used instead of the simpler and much cheaper bacteria, because the secret of the protein’s strength lies in how the molecules cross-link with one another. When bacteria is used to make artificial web, the protein folds in a way that prevents it. from cross-linking properly, resulting in hard while lumps. The spider makes protein in a manner similar to the way mammals make milk, so the researchers hope that the protein made in the goats’ mammary glands will be able to cross-link properly. Once the protein is extracted from the goats’ milk, the next step is to find a way to spin it.</p>
                                            <p>Spiders make their silk in environmentally friendly ways. They process proteins from water-based solutions which, from a manufacturing point of view, is very attractive. The process of making synthetic fibres like nylon, on the other hand, requires petroleum products or organic solvents and results in pollution. So bio-technologists arc motivated by both the practical and economic potential of generating artificial spider silk. Globally, as much as 60 per cent of the threads used to weave clothing come from natural fibre, including cotton, wool, and silk. The aim is to offer substitutes for natural fibres that arc free of the problems of poor wash-wear performance: stretching, wrinkling arid shrinkage. They are seeking a better-than-natural alternative fibre for which there is a major market. Bio-inspired materials are providing a new frontier for the fibre business.</p>

                                        </div>
                                        
                                        <!-- RIGHT SIDE -->
                                        <div class="col-6" style="height:66vh;overflow:auto; border-left:.5px solid gray;">
 
                                            <!-- QUESTIONS START  -->

                                            <!-- QUESTIONS END  -->
                                        
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
                                            <p>You should spend about 20 minutes on <b> Questions 28-40</b> which are based on this passage.</p>
                                            <img style="width:100%;height:300px;" src="https://iotcdn.oss-ap-southeast-1.aliyuncs.com/2020-11/Map%20wars.jpg" alt="image">
                                            <h5>Map wars</h5>
                                            <p>A map of the world expresses a point of view. A correct model of the earth is a sphere - or an ellipsoid to be precise. Photographs of the earth from space provide comforting reassurance on that point. If you wish to know the relative positions of the continents and the oceans you should go out and buy yourself a globe and spin it around.</p>
                                            <p>But a globe cannot be pinned to a wall or printed in a book. For that you need a two-dimensional representation. This is where the problems start since you cannot project three-dimensional information onto a flat plane without making certain assumptions. The arguments between cartographers mostly concern what those assumptions should be.</p>
                                            <p>The simplest two-dimensional representation is a ‘cylindrical’ projection - what you get by wrapping a sheet of paper around a globe and simply transferring the information across. This means it indicates true north and south. So, Newfoundland is directly north of Venezuela and it appears that way on the map. East and west similarly are also indicated correctly. Such a map demonstrates what is called ‘fidelity of axis’.</p>
                                            <p>One of the longest-lived cylindrical projections was based on the needs of sixteenth century navigators. Gerhard Kremer, a Flemish mathematician, produced his view of the world in 1569. ‘Kremer’ translates to ‘merchant’ in English and ‘mercator’ in Latin. And the Mercator projection survives to this day in many books and maps.</p>
                                            <p>But fidelity of angle is only achieved at a cost. To make it work, the further away you get from the equator, the further apart you have to move the horizontal lines of latitude. As these distances increase so do the sizes of the countries underneath them. So, by the time you get to the North or South Poles the lines would be drawn infinitely far apart and the Arctic and Antarctic regions can scarcely be represented at all since they would be infinitely large. More importantly the relative sizes of intermediate areas are completely distorted; South America seems smaller than Europe whereas in fact it is twice the size. These changes in scale distort both the size and shape of countries. Given such defects, it is surprising that the Mercator projection has survived so long, especially as dozens of other more satisfactory projections have appeared since. One of the best known of these is the Aitoff projection of 1889, which attempted to represent country sizes and shapes more correctly. But to do so required a compromise - the lines of latitude and longitude had to be ‘bent’. Fidelity of axis had thus been lost and you could no longer judge north, south, east and west so easily. Most of us, however, did not notice that these projections were different from Mercator. We assumed that all maps were simply factual statements.</p>
                                            <p>Dr. Arno Peters, a German historian, was irritated by the maps he saw widely published, particularly by the survival of Mercator which he argued, gave a euro-centric view of the world. It shrank the developing countries since most of these are around the equator, and it expanded the richer countries since they lay further north. Even the equator itself is shown two thirds of the way down on the traditional Mercator map. Dr. Peters insisted that his map, which first appeared in 1985, has equal-area projection so that no country is given prominence over another, plus fidelity of axis to avoid the disorientating effect of bent lines of latitude and longitude.</p>
                                            <p>Then there is the question of country shape. If you were to take a photo of a globe in its normal position you would find the countries around the equator like Zaire or Ecuador came out of it pretty well. They would be shown relatively large and with something close to their correct shape. But further north or south there are considerable distortions: Australia tails away alarmingly. Dr. Peters decided that the minimum distortions should occur not at the equator but at the 45 degree lines of latitude, as these are much more populated areas. However, this controversial Peters map does radically change the shape of both Africa and South America; and although all projections distort to some extent, it is clear that Africa appears exceptionally long and thin on the Peters map.</p>
                                            <p>But the oddity of the Peters projection is at least partly responsible for its success, as there has been widespread discussion on the misrepresentation of country sizes in previous maps. The issues which the Peters map raises are relatively simple. If you decide you want an equal area map with fidelity of axis you will always get something resembling the Peters projection. If you decide that shape is more significant you will get something else.</p>
                                            <p>The real value of the Peters projection is that it has made the world think about something that before was never taken seriously: that maps of the world represent a point of view just as do press articles or TV programmes or photographs. But it isn’t recommended that you navigate a '747’ round the world with the Peters projection or with any other single global projection they would all lead you astray!</p>
                                            
                                        </div>
                                        
                                        <!-- RIGHT SIDE -->
                                        <div class="col-6" style="height:66vh;overflow:auto; border-left:.5px solid gray;">
                                          
                                            <!-- QUESTIONS START  -->

                                            <!-- QUESTIONS END  -->
                                        
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

  </body>
</html>