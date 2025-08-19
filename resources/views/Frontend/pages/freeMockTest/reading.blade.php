@extends('Frontend.frontApp')

@section('content')
<form action="{{url('free-mock-test-reading-store')}}" method="post"> @csrf
<div class="container py-4">
    <div class="row justify-content-center mb-3">
        <div class="col-md-6 mb-md-0 mb-4">
            <a href="{{url('free-mock-test')}}" class="btn btn-dark ps-1 pe-2 py-0"><i class="bi bi-arrow-left-short"></i> Back</a>
            <button type="submit" class="btn btn-success ms-3 px-2 py-0 fw-bold">FINISH</button>
        </div>
        <div class="col-md-6 text-end">
            <ul class="nav nav-pills mb-3 justify-content-md-end justify-content-center" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link px-2 py-0 active" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">Section 1</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link px-2 py-0" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">Section 2</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link px-2 py-0" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false">Section 3</button>
              </li>
            </ul>
        </div>
    </div>
    
    <div class="row justify-content-center mb-3">
        <div class="col-md-12">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab" tabindex="0">
                <div class="row justify-content-center mb-3">
                    
        <div class="col-md-12">
            <h4 class="text-center fw-bold">Growing of the Aging Society</h4>
        </div>
        <div class="col-md-12 mb-2">
            <h5 class="fw-bold">A</h5>
            <p>American scientists say that the elderly are now healthier, happier and more independent. The results of a study that has taken place over a 14-year period will be released at the end of the month. The research will show that common health disorders suffered by the elderly are affecting fewer people and happening after in life.</p>
        </div>
        <div class="col-md-12 mb-2">
            <h5 class="fw-bold">B</h5>
            <p>Over the last 14 years, The National Long-term Health Care Survey has gathered data from more than 20,000 males and females over the age of 65 about their health and lifestyles. The group has analysed the results of data gathered in 1994 on conditions such as arthritis, high blood pressure and poor circulation; these were the most common medical complaints for this age group. The results show that these conditions are troubling a smaller proportion of people each year and decreasing very quickly. Other diseases suffered by the elderly including dementia, emphysema and arteriosclerosis are also affecting fewer people.</p>
        </div>
        <div class="col-md-12 mb-2">
            <h5 class="fw-bold">C</h5>
            <p>According to Kenneth Manton, a demographer from Duke University in North Carolina, “the question of what should be considered normal ageing has really changed.”He also mentioned that diseases suffered by many people around the age of 65 in 1982 are now not occurring until people reach the age of 70-75. </p>
        </div>
        <div class="col-md-12 mb-2">
            <h5 class="fw-bold">D</h5>
            <p>It is clear that due to medical advances some diseases are not as prominent as they used to be. However, there was also be other factors influencing this change. For instance, improvements in childhood nutrition in the first quarter of the twentieth century gave many people a better start in life than was possible before.</p>
        </div>
        <div class="col-md-12 mb-2">
            <h5 class="fw-bold">E</h5>
            <p>The data also shows some negative changes in public health. The research suggests that the rise of respiratory conditions such as lung cancer and bronchitis may reflect changing smoking habits and an increase in air pollution. Manton says that as we have been exposed to worse and worse pollution, it is not surprising that some people over the age of 60 are suffering as a result. </p>
        </div>
        <div class="col-md-12 mb-2">
            <h5 class="fw-bold">F</h5>
            <p>Manton also found that better-educated people are likely to live longer. For instance, women of 65 with less than eight years of education are expected to live to around 82. Those who studied more could be able to live seven years longer. Whilst some of this can be attributed to better-educated people usually having a higher income, Manton believes it is mainly because they pay closer attention to their health. </p>
        </div>
        <div class="col-md-12 mb-2">
            <h5 class="fw-bold">G</h5>
            <p>Also, the survey estimated how independent people of 65 were and found a striking trend. In the 1994 survey, almost 80% of them were able to complete activities such as eating and dressing alone as well as handling difficult tasks, like cooking and managing their financial affairs. This situation indicates an important drop among disabled elderly people in the population. If 14 years ago, the apparent trends in the US had continued, researchers believe that there would be one million disabled elderly people in today’s population. Manton shows the trend saved more than $200 billion for the US’s governments Medicare system, and it has suggested the elderly American population is less of a financial burden than expected.</p>
        </div>
        <div class="col-md-12 mb-2">
            <h5 class="fw-bold">H</h5>
            <p>The growing number of independent elderly people is probably linked to the huge increase in home medical aids. For instance, the research shows the use of raising toilet seat covers and bath seats has increased by more than fifty per cent. Also, these developments about health benefits are reported by the MacArthur Foundation’s research group for successful ageing. It found the elderly who are able to take care of themselves were more likely to stay healthy in their old age.</p>
        </div>
        <div class="col-md-12 mb-2">
            <h5 class="fw-bold">I</h5>
            <p>Retaining a certain level of daily physical activity may also help brain function, according to Carl Cotman, a neuroscientist at the University of California at Irvine. He found that rats exercising on a treadmill have higher levels of a brain-derived neurotrophic factor in their brains. He believes the hormone which holds neuron functions may prevent the active human’s brain function from declining. </p>
        </div>
        <div class="col-md-12 mb-2">
            <h5 class="fw-bold">J</h5>
            <p>Teresa Seeman, a social epidemiologist at the University of Southern California in Los Angeles, was conducting the same research. She found a line between self-esteem and stress in people over 70. The elderly who did challenging activities such as driving have more control of their mind and have a lower level of the stress hormone cortisol in their brains. Chronically high levels of this hormone can cause heart disease.</p>
        </div>
        <div class="col-md-12 mb-2">
            <h5 class="fw-bold">K</h5>
            <p>However, an independent life may have negative points. Seeman knew that the elderly people that were living alone were able to retain higher levels of stress hormones even when sleeping. The research indicates that elderly people are happier if they can live an independent life but also acknowledge when they need help.</p>
        </div>
        <div class="col-md-12 mb-2">
            <h5 class="fw-bold">L</h5>
            <p>Seeman says, “With many cases of research about ageing, these results help common sense.”Also, the situations show that we may be ignoring some of the simple factors. She mentions, “The sort of thing your grandmother always used to talk to you about seems to be exactly right.”</p>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 1-6</h5>
            <p>Reading Passage 1 has twelve paragraphs, A-L.</p>
            <p>Choose the correct heading for paragraphs B-G from the list of headings below. </p>
            <p>Write the correct number, i-vii, in boxes 1-6 on your answer sheet.</p>
        </div>
        <div class="col-md-8 mb-2">
            <h5>List of Headings </h5>
            <p class="mb-0">i. Disorders strike much later in life.</p>
            <p class="mb-0">ii. Drawbacks in public health.</p>
            <p class="mb-0">iii. Longevity based on high education.</p>
            <p class="mb-0">iv. The elderly people of today got better nutrition when they were children.</p>
            <p class="mb-0">v. The elderly are becoming more well off.</p>
            <p class="mb-0">vi. Mst of independent people over 65 complete activities themselves.</p>
            <p class="mb-0">vii. Diseases have decreased recently.</p>
        </div>
        <div class="col-md-12 mb-2">
            <p class="">
                <b>0</b> Paragraph <b>A</b> 
                <select class="" disabled>
                    <option value="" hidden>v. The elderly are becoming more well off.</option>
                    <option value="i. Disorders strike much later in life.">i. Disorders strike much later in life.</option>
                    <option value="ii. Drawbacks in public health.">ii. Drawbacks in public health.</option>
                    <option value="iii. Longevity based on high education.">iii. Longevity based on high education.</option>
                    <option value="iv. The elderly people of today got better nutrition when they were children.">iv. The elderly people of today got better nutrition when they were children.</option>
                    <option value="v. The elderly are becoming more well off.">v. The elderly are becoming more well off.</option>
                    <option value="vi. Mst of independent people over 65 complete activities themselves.">vi. Mst of independent people over 65 complete activities themselves.</option>
                    <option value="vii. Diseases have decreased recently.">vii. Diseases have decreased recently.</option>
                </select>
            </p>
            <p class="">
                <b>1</b> Paragraph <b>B</b> 
                <select name="answer1">
                    <option value="" hidden></option>
                    <option value="i. Disorders strike much later in life.">i. Disorders strike much later in life.</option>
                    <option value="ii. Drawbacks in public health.">ii. Drawbacks in public health.</option>
                    <option value="iii. Longevity based on high education.">iii. Longevity based on high education.</option>
                    <option value="iv. The elderly people of today got better nutrition when they were children.">iv. The elderly people of today got better nutrition when they were children.</option>
                    <option value="v. The elderly are becoming more well off.">v. The elderly are becoming more well off.</option>
                    <option value="vi. Mst of independent people over 65 complete activities themselves.">vi. Mst of independent people over 65 complete activities themselves.</option>
                    <option value="vii. Diseases have decreased recently.">vii. Diseases have decreased recently.</option>
                </select>
            </p>
            <p class="">
                <b>2</b> Paragraph <b>C</b> 
                <select name="answer2">
                    <option value="" hidden></option>
                    <option value="i. Disorders strike much later in life.">i. Disorders strike much later in life.</option>
                    <option value="ii. Drawbacks in public health.">ii. Drawbacks in public health.</option>
                    <option value="iii. Longevity based on high education.">iii. Longevity based on high education.</option>
                    <option value="iv. The elderly people of today got better nutrition when they were children.">iv. The elderly people of today got better nutrition when they were children.</option>
                    <option value="v. The elderly are becoming more well off.">v. The elderly are becoming more well off.</option>
                    <option value="vi. Mst of independent people over 65 complete activities themselves.">vi. Mst of independent people over 65 complete activities themselves.</option>
                    <option value="vii. Diseases have decreased recently.">vii. Diseases have decreased recently.</option>
                </select>
            </p>
            <p class="">
                <b>3</b> Paragraph <b>D</b> 
                <select name="answer3">
                    <option value="" hidden></option>
                    <option value="i. Disorders strike much later in life.">i. Disorders strike much later in life.</option>
                    <option value="ii. Drawbacks in public health.">ii. Drawbacks in public health.</option>
                    <option value="iii. Longevity based on high education.">iii. Longevity based on high education.</option>
                    <option value="iv. The elderly people of today got better nutrition when they were children.">iv. The elderly people of today got better nutrition when they were children.</option>
                    <option value="v. The elderly are becoming more well off.">v. The elderly are becoming more well off.</option>
                    <option value="vi. Mst of independent people over 65 complete activities themselves.">vi. Mst of independent people over 65 complete activities themselves.</option>
                    <option value="vii. Diseases have decreased recently.">vii. Diseases have decreased recently.</option>
                </select>
            </p>
            <p class="">
                <b>4</b> Paragraph <b>E</b> 
                <select name="answer4">
                    <option value="" hidden></option>
                    <option value="i. Disorders strike much later in life.">i. Disorders strike much later in life.</option>
                    <option value="ii. Drawbacks in public health.">ii. Drawbacks in public health.</option>
                    <option value="iii. Longevity based on high education.">iii. Longevity based on high education.</option>
                    <option value="iv. The elderly people of today got better nutrition when they were children.">iv. The elderly people of today got better nutrition when they were children.</option>
                    <option value="v. The elderly are becoming more well off.">v. The elderly are becoming more well off.</option>
                    <option value="vi. Mst of independent people over 65 complete activities themselves.">vi. Mst of independent people over 65 complete activities themselves.</option>
                    <option value="vii. Diseases have decreased recently.">vii. Diseases have decreased recently.</option>
                </select>
            </p>
            <p class="">
                <b>5</b> Paragraph <b>F</b> 
                <select name="answer5">
                    <option value="" hidden></option>
                    <option value="i. Disorders strike much later in life.">i. Disorders strike much later in life.</option>
                    <option value="ii. Drawbacks in public health.">ii. Drawbacks in public health.</option>
                    <option value="iii. Longevity based on high education.">iii. Longevity based on high education.</option>
                    <option value="iv. The elderly people of today got better nutrition when they were children.">iv. The elderly people of today got better nutrition when they were children.</option>
                    <option value="v. The elderly are becoming more well off.">v. The elderly are becoming more well off.</option>
                    <option value="vi. Mst of independent people over 65 complete activities themselves.">vi. Mst of independent people over 65 complete activities themselves.</option>
                    <option value="vii. Diseases have decreased recently.">vii. Diseases have decreased recently.</option>
                </select>
            </p>
            <p class="">
                <b>6</b> Paragraph <b>G</b> 
                <select name="answer6">
                    <option value="" hidden></option>
                    <option value="i. Disorders strike much later in life.">i. Disorders strike much later in life.</option>
                    <option value="ii. Drawbacks in public health.">ii. Drawbacks in public health.</option>
                    <option value="iii. Longevity based on high education.">iii. Longevity based on high education.</option>
                    <option value="iv. The elderly people of today got better nutrition when they were children.">iv. The elderly people of today got better nutrition when they were children.</option>
                    <option value="v. The elderly are becoming more well off.">v. The elderly are becoming more well off.</option>
                    <option value="vi. Mst of independent people over 65 complete activities themselves.">vi. Mst of independent people over 65 complete activities themselves.</option>
                    <option value="vii. Diseases have decreased recently.">vii. Diseases have decreased recently.</option>
                </select>
            </p>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 7-13</h5>
            <p>Do the following statements reflect the claims of the writer in Reading Passage 1?</p>
            <p>In boxes 7-13 on your answer sheet, write</p>
            <p><b>TRUE</b> - if the statement agrees with the information</p>
            <p><b>FALSE</b> - if the statement contradicts the information</p>
            <p><b>NOT GIVEN</b> - if there is no information on this</p>
            
        </div>
        <div class="col-md-12 mb-2">
            <p class="">
                <b>7</b> Smoking habits are a crucial cause in some cancers. 
                <select name="answer7">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
            <p class="">
                <b>8</b> The better-educated elderly people tend to live longer. 
                <select name="answer8">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
            <p class="">
                <b>9</b> People over 65 can independently manage a variety of tasks. 
                <select name="answer9">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
            <p class="">
                <b>10</b> Elderly people have overcome dementia as a result of home medical aids 
                <select name="answer10">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
            <p class="">
                <b>11</b> Continuing physical exercises is likely to assist digestive function. 
                <select name="answer11">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
            <p class="">
                <b>12</b> People over 70 who still do challenging things such as driving are able to lower their level of the hormone cortisol which is linked to heart disease. 
                <select name="answer12">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
            <p class="">
                <b>13</b> Isolation may cause a higher level of stress hormones. 
                <select name="answer13">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
        </div>
                    
                </div>
              </div>
              <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab" tabindex="0">
                <div class="row justify-content-center mb-3">
                    
        <div class="col-md-12 mb-2">
            <h4 class="fw-bold">SECTION 2</h4>
            <p class="mb-0">READING PASSAGE 2</p>
            <p>You should spend about 20 minutes on Question 14-26 which are based on Reading Passage 2 below. </p>
            <h5 class="fw-bold text-center">Space Flight Tourism</h5>
            <p>Falcon 1’s successful launch on 28th of September was an outstanding achievement for the fledgeling space tourism industry. When a rocket made by Space X in Hawthorne, California, reached an orbit of 500 kilometres from the Earth, it became possible for 
privately developed rocket too.
</p>
            <p>Two days after the launch, Virgin Galactic started a business with the US National 
Oceanic and Atmospheric Administration which will be accepted by US scientists as a way of researching climate change using a spacecraft.
</p>
            <p>No doubt the civilian space flight industry is an exciting area and this was apparent at the International Aeronautical Congress in Glasgow last month. It displayed slick 
promotional videos, and models of the “Nearly Ready”spacecraft in orbit to the people who would be investing money in the project.
</p>
            <p>However, in spite of increasing confidence, it is also necessary to be cautious: cana civilian spacecraft be safe like holiday airlines? Gerardine Goh, a lawyer at DLR, the 
German Aerospace Centre in Bonn and a member of Germany’s delegation to the UN’s 
Office of Outer Space Affairs reported that as it is not global, there need to be 
enforceable regulations in place to guarantee the safety of a civilian spacecraft. She said, “Ships should be equipped to be seaworthy, aircraft should be equipped to be airworthy but there is no legislation in place to ensure that a spacecraft is spaceworthy.”
</p>
            <p>At the International Association for the Advancement of Space Safety, Goh is planning to 
press the UN to force civilian space operators to warrant which spacecraft are designed 
and built to minimum safety standards. She says, “Mass commercial space flight does not currently have international safety regulations.”and “We deeply need a UN treaty 
which offers us this.”
</p>
            <p>One way companies are planning to transport tourists into space is with a “mother 
ship”, an aircraft which carries a rocket at an altitude of 16 kilometres before launching it, says Goh. “But with launching the aircraft, the ICAO’s air safety standards only apply 
to the mother ship and the rocket capsule until they are separated. After that, we do 
not have any safety standards for the capsule itself. It is a critical problem.”From 16 kilometres to the Karman line, the point of 100 kilometres up where space is 
considered to start, the rocket will be travelling within a legal vacuum. Here, lawyers cannot agree on whether it is a plane or a rocket. Some insist that if you are in a well- equipped functioning rocket, more strict safety measures should try to be incorporated into the spaceship’s design.
</p>
            <p>The other aspects of the UN’s 1967 treaty for outer space exploration may be discussed again if civilian space flight turns out to be successful. For example, countries must consider how to rescue and repatriate astronauts crashing or landing in their land. Also, governments have to decide if the money generated by the space flight industry will be enough to cover the cost of rescuing space tourists.</p>
            <p>Civilian space flight companies are very aware of the risks in this field as they have already had the experience of dealing with a tragedy. Unfortunately, three engineers 
were killed and another three were severely injured in 2007, when nitrous oxide rocket 
fuel suddenly exploded during fuel flow tests at a Scaled Composites facility in Mojave, 
California. The company is establishing WhiteKnightTwo, a carrier aircraft and SpaceShip 
Two, a six-seater rocket for Virgin Galactic. The facility was regulated by California’s health and safety regulator, and it has now modified its technology to decrease the risks.
</p>
            <p>However, space flight’s dangers are far from just fuel issues. According to Laurent 
Gathier of Dassault Aviation developing the VSH of a rocketpowered sub-orbital tourist 
space plane, other critical safety factors are with depressurization risks, passengers close to the engine and the activities of flight trajectories including cosmic ray shielding. 
Civilian space companies should incorporate the safety features into their designs. For 
instance, the VSH will equip an ejector seat for all tourists and staff. It is a device for bailing out of the spacecraft with a default of 40,000 feet (12 kilometres).
</p>
            <p>Goh’s vision is essentially against the Federal Aviation Administration Office of 
Commercial Space Transportation (AST) and does not have any schemes to regulate civilian space flight safety until 2012. The Commercial Space Launch Amendments Act of 
2004 mentions that George Nield as AST chief said, the civilian space flight regulation must not “stifle”the developing technologies with inconvenient rules.
</p>
            <p>Before launching, a hands-off approach to civilian space flight could be quite risky. Goh 
said, “A lack of safety standards and a lot of operational burdens will leave a commercial space flight in the dangerous activity categories in terms of the insurance.”It means insurance costs will be very high. Critics who are developing safety standards also insist that the “at-your-own-risk”mentality that is applied to risky sports like scuba-diving should also be applied to civilian space flight.
</p>
            <p></p>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 14-20</h5>
            <p class="mb-0">Complete the summary.</p>
            <p class="mb-0">Choose <b>NO MORE THAN THREE WORDS</b> from the passage for each answer</p>
            <p>Write your answers in boxes <b>14-20</b> on your answer sheet.</p>
        </div>
        <div class="col-md-12 mb-2">
            <p>
                On 28 September the emerging space tourism industry was enormous. In Hawthorne, California, a rocket was erected by 14 <input type="text" name="answer14"> Climate change was monitored by 15 <input type="text" name="answer15">. in US National Oceanic and Atmospheric Administration using its spacecraft. In Glasgow, at the International Aeronautical meeting, it is apparent that civilian space flight industry is growing, as it showed the 16 <input type="text" name="answer16"> spacecraft which promised sub-orbital flights. Although developing confirmation, non-regulation is clear to guarantee 17 <input type="text" name="answer17"> A method for space business is cooperating with a 18 <input type="text" name="answer18">conveyable at 16 kilometres in the skies. From 16 kilometres to 100 kilometres’travelling may be available, but lawyers definitely cannot agree with whether it is a 19 <input type="text" name="answer19"> or a rocket. 20 <input type="text" name="answer20">ceeees need to be revisited if civilian space flight proves successful.
            </p>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 21-26</h5>
            <p class="mb-0">Complete each sentence with the correct ending A-I below.</p>
            <p class="mb-0">Write the correct letter A-I in boxes 21-26 on your answer sheet.</p>
        </div>
        <div class="col-md-12 mb-2">
            <p class="">
                <b>21</b> Civilian space flight companies
                <select name="answer21">
                    <option value="" hidden></option>
                    <option value="A. assisted some minimum safety standards may prevent that.">A. assisted some minimum safety standards may prevent that.</option>
                    <option value="B. emphasised a civilian space flight must not be under a severe regulation for technical advancement.">B. emphasised a civilian space flight must not be under a severe regulation for technical advancement.</option>
                    <option value="C. hardly need a reminder of the danger when considering past experiences.">C. hardly need a reminder of the danger when considering past experiences.</option>
                    <option value="D. will protect a commercial space flight.">D. will protect a commercial space flight.</option>
                    <option value="E. try to develop a module of safety regulations applied to civilian space flight.">E. try to develop a module of safety regulations applied to civilian space flight.</option>
                    <option value="F. made up for an ejector seat for tourists and the crew in case of a craft emergency in the skies.">F. made up for an ejector seat for tourists and the crew in case of a craft emergency in the skies.</option>
                    <option value="G. indicated the main safety problems were with passengers’proximity to the powerful engine.">G. indicated the main safety problems were with passengers’proximity to the powerful engine.</option>
                    <option value="H. believed that scuba-diving should be applied to civilian space flight.">H. believed that scuba-diving should be applied to civilian space flight.</option>
                    <option value="I. kept costs stratospheric.">I. kept costs stratospheric.</option>
                </select>
            </p>
            <p class="">
                <b>22</b> Laurent Gathier
                <select name="answer22">
                    <option value="" hidden></option>
                    <option value="A. assisted some minimum safety standards may prevent that.">A. assisted some minimum safety standards may prevent that.</option>
                    <option value="B. emphasised a civilian space flight must not be under a severe regulation for technical advancement.">B. emphasised a civilian space flight must not be under a severe regulation for technical advancement.</option>
                    <option value="C. hardly need a reminder of the danger when considering past experiences.">C. hardly need a reminder of the danger when considering past experiences.</option>
                    <option value="D. will protect a commercial space flight.">D. will protect a commercial space flight.</option>
                    <option value="E. try to develop a module of safety regulations applied to civilian space flight.">E. try to develop a module of safety regulations applied to civilian space flight.</option>
                    <option value="F. made up for an ejector seat for tourists and the crew in case of a craft emergency in the skies.">F. made up for an ejector seat for tourists and the crew in case of a craft emergency in the skies.</option>
                    <option value="G. indicated the main safety problems were with passengers’proximity to the powerful engine.">G. indicated the main safety problems were with passengers’proximity to the powerful engine.</option>
                    <option value="H. believed that scuba-diving should be applied to civilian space flight.">H. believed that scuba-diving should be applied to civilian space flight.</option>
                    <option value="I. kept costs stratospheric.">I. kept costs stratospheric.</option>
                </select>
            </p>
            <p class="">
                <b>23</b> VSH devised for a safety
                <select name="answer23">
                    <option value="" hidden></option>
                    <option value="A. assisted some minimum safety standards may prevent that.">A. assisted some minimum safety standards may prevent that.</option>
                    <option value="B. emphasised a civilian space flight must not be under a severe regulation for technical advancement.">B. emphasised a civilian space flight must not be under a severe regulation for technical advancement.</option>
                    <option value="C. hardly need a reminder of the danger when considering past experiences.">C. hardly need a reminder of the danger when considering past experiences.</option>
                    <option value="D. will protect a commercial space flight.">D. will protect a commercial space flight.</option>
                    <option value="E. try to develop a module of safety regulations applied to civilian space flight.">E. try to develop a module of safety regulations applied to civilian space flight.</option>
                    <option value="F. made up for an ejector seat for tourists and the crew in case of a craft emergency in the skies.">F. made up for an ejector seat for tourists and the crew in case of a craft emergency in the skies.</option>
                    <option value="G. indicated the main safety problems were with passengers’proximity to the powerful engine.">G. indicated the main safety problems were with passengers’proximity to the powerful engine.</option>
                    <option value="H. believed that scuba-diving should be applied to civilian space flight.">H. believed that scuba-diving should be applied to civilian space flight.</option>
                    <option value="I. kept costs stratospheric.">I. kept costs stratospheric.</option>
                </select>
            </p>
            <p class="">
                <b>24</b> AST chief George Nield
                <select name="answer24">
                    <option value="" hidden></option>
                    <option value="A. assisted some minimum safety standards may prevent that.">A. assisted some minimum safety standards may prevent that.</option>
                    <option value="B. emphasised a civilian space flight must not be under a severe regulation for technical advancement.">B. emphasised a civilian space flight must not be under a severe regulation for technical advancement.</option>
                    <option value="C. hardly need a reminder of the danger when considering past experiences.">C. hardly need a reminder of the danger when considering past experiences.</option>
                    <option value="D. will protect a commercial space flight.">D. will protect a commercial space flight.</option>
                    <option value="E. try to develop a module of safety regulations applied to civilian space flight.">E. try to develop a module of safety regulations applied to civilian space flight.</option>
                    <option value="F. made up for an ejector seat for tourists and the crew in case of a craft emergency in the skies.">F. made up for an ejector seat for tourists and the crew in case of a craft emergency in the skies.</option>
                    <option value="G. indicated the main safety problems were with passengers’proximity to the powerful engine.">G. indicated the main safety problems were with passengers’proximity to the powerful engine.</option>
                    <option value="H. believed that scuba-diving should be applied to civilian space flight.">H. believed that scuba-diving should be applied to civilian space flight.</option>
                    <option value="I. kept costs stratospheric.">I. kept costs stratospheric.</option>
                </select>
            </p>
            <p class="">
                <b>25</b> Insurance costs
                <select name="answer25">
                    <option value="" hidden></option>
                    <option value="A. assisted some minimum safety standards may prevent that.">A. assisted some minimum safety standards may prevent that.</option>
                    <option value="B. emphasised a civilian space flight must not be under a severe regulation for technical advancement.">B. emphasised a civilian space flight must not be under a severe regulation for technical advancement.</option>
                    <option value="C. hardly need a reminder of the danger when considering past experiences.">C. hardly need a reminder of the danger when considering past experiences.</option>
                    <option value="D. will protect a commercial space flight.">D. will protect a commercial space flight.</option>
                    <option value="E. try to develop a module of safety regulations applied to civilian space flight.">E. try to develop a module of safety regulations applied to civilian space flight.</option>
                    <option value="F. made up for an ejector seat for tourists and the crew in case of a craft emergency in the skies.">F. made up for an ejector seat for tourists and the crew in case of a craft emergency in the skies.</option>
                    <option value="G. indicated the main safety problems were with passengers’proximity to the powerful engine.">G. indicated the main safety problems were with passengers’proximity to the powerful engine.</option>
                    <option value="H. believed that scuba-diving should be applied to civilian space flight.">H. believed that scuba-diving should be applied to civilian space flight.</option>
                    <option value="I. kept costs stratospheric.">I. kept costs stratospheric.</option>
                </select>
            </p>
            <p class="">
                <b>26</b> Critics
                <select name="answer26">
                    <option value="" hidden></option>
                    <option value="A. assisted some minimum safety standards may prevent that.">A. assisted some minimum safety standards may prevent that.</option>
                    <option value="B. emphasised a civilian space flight must not be under a severe regulation for technical advancement.">B. emphasised a civilian space flight must not be under a severe regulation for technical advancement.</option>
                    <option value="C. hardly need a reminder of the danger when considering past experiences.">C. hardly need a reminder of the danger when considering past experiences.</option>
                    <option value="D. will protect a commercial space flight.">D. will protect a commercial space flight.</option>
                    <option value="E. try to develop a module of safety regulations applied to civilian space flight.">E. try to develop a module of safety regulations applied to civilian space flight.</option>
                    <option value="F. made up for an ejector seat for tourists and the crew in case of a craft emergency in the skies.">F. made up for an ejector seat for tourists and the crew in case of a craft emergency in the skies.</option>
                    <option value="G. indicated the main safety problems were with passengers’proximity to the powerful engine.">G. indicated the main safety problems were with passengers’proximity to the powerful engine.</option>
                    <option value="H. believed that scuba-diving should be applied to civilian space flight.">H. believed that scuba-diving should be applied to civilian space flight.</option>
                    <option value="I. kept costs stratospheric.">I. kept costs stratospheric.</option>
                </select>
            </p>
        </div> 
                    
                </div>
              </div>
              <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab" tabindex="0">
                <div class="row justify-content-center mb-3">
                    
        <div class="col-md-12 mb-2">
            <h4 class="fw-bold">SECTION 3</h4>
            <p class="mb-0">READING PASSAGE 3</p>
            <p>You should spend about 20 minutes on Question 27-40 which are based on Reading Passage 3 below.</p>
            <h5 class="fw-bold text-center">Doctor’s Rights and Drinks</h5>
            <p>New Yorker John Davin started his campaign for election to Congress on 26th of 
September 1922. Actually, he was not a politician, but a doctor who practiced in a local 
city for 40 years at the top of his profession. Davin and other doctors with the same opinions were faced with the task of arguing their cases in front of the people. Also, they made a new political party, the Medical Rights League, and decided that Davin should run as a candidate for the coming election. What did they want? Beer, or more precisely, a doctor who had the right to prescribe it.
</p>
            <p>The Congress had legislated the law prohibiting the sale of alcohol in January 1920. The aim was to transform a nation of drinkers and gamblers into one of hard-working, law- abiding, teetotal citizens. It was now illegal to sell or buy a drink that included more 
than 0.5 per cent alcohol “for beverage purpose.”Only medical alcohol was allowed, but the conditions were so strict. Doctors could prescribe “liquor”when there was a “need 
to afford relief from a known ailment”. Patients could not have more than a pint of 
liquor “within 10 days at any time”. Doctors who needed to prescribe alcohol were approved for a permit. But the current law said nothing about beer, traditional alcohol for ailments from anaemia to anthrax. So, could they prescribe beer or not?
</p>
            <p>As doctors were requesting permission to prescribe beer, someone had to make a 
decision. That person was Attorney General Mitchell Palmer, a staunch supporter of 
Prohibition. To the delight of doctors and dismay of prohibitionists, he urged “it was not the purpose of Congress to prohibit the use of liquor for non-beverage usages.”The 
Congress accepted medicinal alcohol for non-beverage usages. It was for “beer and 
other malt liquors.”
</p>
            <p>The Prohibitionists were very enraged. They had suspicions that doctors were in league with the brewers and that their intentions were more to disrupt Prohibition than for medicinal purposes. Although brandy and whisky might have some medicinal advantages, in their view, beer was not needed at pharmacies. Congressman Andrew</p>
            <p>Volstead, who drafted the National Prohibition Act, criticized the decision saying “It is 
not a worthy argument that beer is medicine,”“Everything in beer except the alcohol is 
similar to the bears that can be bought without any prescription.”He immediately set New Yorker John Davin started his campaign for election to Congress on 26th of 
September 1922. Actually, he was not a politician, but a doctor who practiced in a local 
city for 40 years at the top of his profession. Davin and other doctors with the same opinions were faced with the task of arguing their cases in front of the people. Also, they made a new political party, the Medical Rights League, and decided that Davin should run as a candidate for the coming election. What did they want? Beer, or more precisely, a doctor who had the right to prescribe it.
</p>
            <p>The Congress had legislated the law prohibiting the sale of alcohol in January 1920. The aim was to transform a nation of drinkers and gamblers into one of hard-working, law- abiding, teetotal citizens. It was now illegal to sell or buy a drink that included more 
than 0.5 per cent alcohol “for beverage purpose.”Only medical alcohol was allowed, but the conditions were so strict. Doctors could prescribe “liquor”when there was a “need 
to afford relief from a known ailment”. Patients could not have more than a pint of 
liquor “within 10 days at any time”. Doctors who needed to prescribe alcohol were approved for a permit. But the current law said nothing about beer, traditional alcohol for ailments from anaemia to anthrax. So, could they prescribe beer or not?
</p>
            <p>As doctors were requesting permission to prescribe beer, someone had to make a 
decision. That person was Attorney General Mitchell Palmer, a staunch supporter of 
Prohibition. To the delight of doctors and dismay of prohibitionists, he urged “it was not the purpose of Congress to prohibit the use of liquor for non-beverage usages.”The 
Congress accepted medicinal alcohol for non-beverage usages. It was for “beer and 
other malt liquors.”
</p>
            <p>The Prohibitionists were very enraged. They had suspicions that doctors were in league with the brewers and that their intentions were more to disrupt Prohibition than for medicinal purposes. Although brandy and whisky might have some medicinal advantages, in their view, beer was not needed at pharmacies. Congressman Andrew 
Volstead, who drafted the National Prohibition Act, criticized the decision saying “It is 
not a worthy argument that beer is medicine,”“Everything in beer except the alcohol is 
similar to the bears that can be bought without any prescription.”He immediately set
</p>
            <p></p>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 27-33</h5>
            <p class="mb-0">Do the following statements reflect the claims of the writer in Reading Passage 3?</p>
            <p class="">In boxes <b>27-33</b> on your answer sheet, write</p>
            <p class="mb-0"><b>YES</b> - if the statement reflects the opinion of the writer</p>
            <p class="mb-0"><b>NO</b> - if the statement contradicts the opinion of the writer</p>
            <p class="mb-0"><b>NOT GIVEN</b> - if it is impossible to say what the writer thinks about this</p>
        </div>
        <div class="col-md-12 mb-2">
            <p class="">
                <b>27</b> John Davin has been ready for the election to Congress.
                <select name="answer27">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
            <p class="">
                <b>28</b> The Medical Rights League was made to support the right to prescribe beer by Davin and like-minded doctors.
                <select name="answer28">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
            <p class="">
                <b>29</b> It was illegal to sell or buy a beverage that contained over 0.5 per cent alcohol.
                <select name="answer29">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
            <p class="">
                <b>30</b> Congress only granted beer as medical alcohol.
                <select name="answer30">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
            <p class="">
                <b>31</b> As beer might have some benefit for medicinal use, it was in a pharmacy.
                <select name="answer31">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
            <p class="">
                <b>32</b> The American Medical Association (AMA) has funded a scientific basis.
                <select name="answer32">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
            <p class="">
                <b>33</b> If children have diphtheria, alcohol may cure them.
                <select name="answer33">
                    <option value="" hidden></option>
                    <option value="TRUE">TRUE</option>
                    <option value="FALSE">FALSE</option>
                    <option value="NOT GIVEN">NOT GIVEN</option>
                </select>
            </p>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 34-35</h5>
            <p class="">Choose the appropriate letters <b>A-D</b> and write them in boxes <b>34-35</b> on your answer sheet.</p>
        </div>
        <div class="col-md-12 mb-2">
            <p><b>34</b> In 1922, the reason John Davin began a campaign</p>
            <div class="ps-4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer34" id="341" value="A. was against beer and other malt liquors.">
                  <label class="form-check-label" for="341">
                    A. <span class="fw-normal">was against beer and other malt liquors.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer34" id="342" value="B. was to assert a doctor’s right to prescribe beer.">
                  <label class="form-check-label" for="342">
                    B. <span class="fw-normal">was to assert a doctor’s right to prescribe beer.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer34" id="343" value="C. was for the Medical Rights League’s duty.">
                  <label class="form-check-label" for="343">
                    C. <span class="fw-normal">was for the Medical Rights League’s duty.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer34" id="344" value="D. was to oppose strong-minded politicians.">
                  <label class="form-check-label" for="344">
                    D. <span class="fw-normal">was to oppose strong-minded politicians.</span>
                  </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <p><b>35</b> In 1917, the American Medical Association (AMA)</p>
            <div class="ps-4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer35" id="351" value="A. decided beer is a worthless remedy.">
                  <label class="form-check-label" for="351">
                    A. <span class="fw-normal">decided beer is a worthless remedy.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer35" id="352" value="B. declared beer has an effect as a tonic.">
                  <label class="form-check-label" for="352">
                    B. <span class="fw-normal">declared beer has an effect as a tonic.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer35" id="353" value="C. decided beer won’t be any evidence of a medical basis.">
                  <label class="form-check-label" for="353">
                    C. <span class="fw-normal">decided beer won’t be any evidence of a medical basis.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer35" id="354" value="D. assisted a patient with cancer.">
                  <label class="form-check-label" for="354">
                    D. <span class="fw-normal">assisted a patient with cancer.</span>
                  </label>
                </div>
            </div>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 36-39</h5>
            <p class="mb-0">Complete the summary below.</p>
            <p class="mb-0">Choose <b>ONE</b> word from Reading Passage 3 for each answer.</p>
            <p class="">Write your answers in boxes <b>36-39</b> on your answer sheet.</p>
            <p class="">
Once prohibition affected homes, doctors stimulated interests in 36 <input type="text" name="answer36"> 
Besides, as doctors affirmed the effects of alcohol, beer was guaranteed to cure. 37 <input type="text" name="answer37">When children with  38 <input type="text" name="answer38">  transferred dual-infections,
Alcohol could save them. According to 39 <input type="text" name="answer39">, most physicians believed the effects of therapeutic usage of whisky in the treatment of a limited number of diseases to be remarkably impressive.
            </p>
        </div>
        <div class="col-md-12 mb-2">
            <h5>Questions 40</h5>
            <p class="mb-0">Choose the appropriate letter <b>A-D</b> and write it in the box <b>40</b> on your answer sheet.</p>
            <p class="mb-0">This text is taken form</p>
            <div class="ps-4">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer40" id="401" value="A. a medical textbook for a beginner.">
                  <label class="form-check-label" for="401">
                    A. <span class="fw-normal">a medical textbook for a beginner.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer40" id="402" value="B. acritical reseagrch of the scientific basis of a beverage.">
                  <label class="form-check-label" for="402">
                    B. <span class="fw-normal">acritical reseagrch of the scientific basis of a beverage.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer40" id="403" value="C. amagazine article about alcohol issues.">
                  <label class="form-check-label" for="403">
                    C. <span class="fw-normal">amagazine article about alcohol issues.</span>
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="answer40" id="404" value="D. a document against government prohibition.">
                  <label class="form-check-label" for="404">
                    D. <span class="fw-normal">a document against government prohibition.</span>
                  </label>
                </div>
            </div>
        </div> 
                    
                </div>
              </div>
            </div>
        </div>
    </div>
    
    
    <!--<div class="row justify-content-center">-->
    <!--    <div class="col-md-12 text-center">-->
    <!--        <button type="submit" class="btn btn-success px-5">Submit</button>-->
    <!--    </div>-->
    <!--</div>-->
    
</div>
</form>
@endsection
