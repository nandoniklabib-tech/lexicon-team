INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(19, '<b>Questions 1-7</b> <br>Complete the form below.<br>Write NO MORE THAN THREE WORDS AND/OR A NUMBER for each answer.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(19, '<b>Details of Order</b>', 'static', 2, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(19, 'Party Host', 'static', 3, NULL, '{"table_no":1,"row":1,"col":1}', NOW(), NOW()),
(19, 'Example: Customer`s oldest daughter', 'static', 4, NULL, '{"table_no":1,"row":1,"col":2}', NOW(), NOW()),
(19, 'Occasion', 'static', 5, NULL, '{"table_no":1,"row":2,"col":1}', NOW(), NOW()),
(19, '18th birthday', 'static', 6, NULL, '{"table_no":1,"row":2,"col":2}', NOW(), NOW()),
(19, 'Number of Guests Invited', 'static', 7, NULL, '{"table_no":1,"row":3,"col":1}', NOW(), NOW()),
(19, ' ___', 'fill_blank', 8, 1, '{"table_no":1,"row":3,"col":2}', NOW(), NOW()),
(19, 'Customer Budget', 'static', 9, NULL, '{"table_no":1,"row":4,"col":1}', NOW(), NOW()),
(19, '___ £800', 'fill_blank', 10, 2, '{"table_no":1,"row":4,"col":2}', NOW(), NOW()),
(19, 'Marquee Size', 'static', 11, NULL, '{"table_no":1,"row":5,"col":1}', NOW(), NOW()),
(19, '___ X 9 metres', 'fill_blank', 12, 3, '{"table_no":1,"row":5,"col":2}', NOW(), NOW()),
(19, '___ Cost', 'fill_blank', 13, 4, '{"table_no":1,"row":6,"col":1}', NOW(), NOW()),
(19, '£450', 'static', 14, NULL, '{"table_no":1,"row":6,"col":2}', NOW(), NOW()),
(19, '___', 'fill_blank', 15, 5, '{"table_no":1,"row":7,"col":1}', NOW(), NOW()),
(19, '£150', 'static', 16, NULL, '{"table_no":1,"row":7,"col":2}', NOW(), NOW()),
(19, 'Lighting Cost', 'static', 17, NULL, '{"table_no":1,"row":8,"col":1}', NOW(), NOW()),
(19, 'approximately ₤ ___', 'fill_blank', 18, 6, '{"table_no":1,"row":8,"col":2}', NOW(), NOW()),
(19, 'Number of Guests', 'static', 19, NULL, '{"table_no":1,"row":9,"col":1}', NOW(), NOW()),
(19, 'seated 30 / standing 50', 'static', 20, NULL, '{"table_no":1,"row":9,"col":2}', NOW(), NOW()),
(19, 'Furniture Cost', 'static', 21, NULL, '{"table_no":1,"row":10,"col":1}', NOW(), NOW()),
(19, 'per table £4.00 / per chair £3.00', 'static', 22, NULL, '{"table_no":1,"row":10,"col":2}', NOW(), NOW()),
(19, 'Dates Marquee Required', 'static', 23, NULL, '{"table_no":1,"row":11,"col":1}', NOW(), NOW()),
(19, 'Set-up date ___ To be taken down on June 7th', 'fill_blank', 24, 7, '{"table_no":1,"row":11,"col":2}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(19, '<b>Questions 8-10</b> <br>Complete the form below.<br>Write NO MORE THAN THREE WORDS AND/OR A NUMBER for each answer.', 'static', 25, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(19, '<b>Customer Details</b>', 'static', 26, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(19, 'Name', 'static', 27, NULL, '{"table_no":2,"row":1,"col":1}', NOW(), NOW()),
(19, '___', 'fill_blank', 28, 8, '{"table_no":2,"row":1,"col":2}', NOW(), NOW()),
(19, 'Postcode', 'static', 29, NULL, '{"table_no":2,"row":2,"col":1}', NOW(), NOW()),
(19, '___', 'fill_blank', 30, 9, '{"table_no":2,"row":2,"col":2}', NOW(), NOW()),
(19, 'Contact Number', 'static', 31, NULL, '{"table_no":2,"row":3,"col":1}', NOW(), NOW()),
(19, '___', 'fill_blank', 32, 10, '{"table_no":2,"row":3,"col":2}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(20, '<b>Questions 11-15</b><br>Label the map below of a typical medieval castle.<br>Write the correct letter, A-G, next to questions 11-15.', 'static', 33, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(20, '', 'static', 34, NULL, '{"image":"images/mockTestImage/Questions3_2_1.png"}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(20, 'Chapel', 'select', 35, 11, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(20, 'Great Hall', 'select', 36, 12, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(20, 'Great Chambers', 'select', 37, 13, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(20, 'Bakehouse', 'select', 38, 14, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(20, 'Stables', 'select', 39, 15, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at) VALUES (20, '<b>Questions 16-20</b><br>Choose the correct letter, A, B or C.', 'static', 40, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(20, 'Medieval castles', 'mcq', 41, 16, NULL, NOW(), NOW()),
(20, 'The early medieval Keep served as', 'mcq', 42, 17, NULL, NOW(), NOW()),
(20, 'In later medieval castles, the Keep', 'mcq', 43, 18, NULL, NOW(), NOW()),
(20, 'Underground dungeons were built in response to', 'mcq', 44, 19, NULL, NOW(), NOW()),
(20, 'The least effective line of defence was', 'mcq', 45, 20, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(279, 'A. shared a common design.', NOW(), NOW()),
(279, 'B. were each unique.', NOW(), NOW()),
(279, 'C. had the same methods of fortification in common.', NOW(), NOW()),
(280, 'A. a prison and fortified tower.', NOW(), NOW()),
(280, 'B. a fortified tower and living area.', NOW(), NOW()),
(280, 'C. a fortified entrance to the inner castle area.', NOW(), NOW()),
(281, 'A. evolved into a set of different buildings.', NOW(), NOW()),
(281, 'B. was used purely for accommodation.', NOW(), NOW()),
(281, 'C. played a less significant role in the castle`s domestic life.', NOW(), NOW()),
(282, 'A. a shift in the medieval belief system.', NOW(), NOW()),
(282, 'B. the Keep being no longer used for prisoners.', NOW(), NOW()),
(282, 'C. a call for harsher treatment of prisoners.', NOW(), NOW()),
(283, 'A. the portcullis.', NOW(), NOW()),
(283, 'B. the drawbridge.', NOW(), NOW()),
(283, 'C. the barbican.', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(21, '<b>Questions 21-25</b><br>Choose the correct letter, A, B or C.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(21, 'Julie and Dave thought the lecture', 'mcq', 2, 21, NULL, NOW(), NOW()),
(21, 'Hamlet was a play', 'mcq', 3, 22, NULL, NOW(), NOW()),
(21, 'In the time of James I', 'mcq', 4, 23, NULL, NOW(), NOW()),
(21, 'Shakespeare introduced ghosts into plays', 'mcq', 5, 24, NULL, NOW(), NOW()),
(21, 'Shakespeare`s audience would probably have', 'mcq', 6, 25, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(285, 'A. gave a new insight into Shakespeare`s style.', NOW(), NOW()),
(285, 'B. offered a thought-provoking view on Shakespeare and his work.', NOW(), NOW()),
(285, 'C. explained Shakespeare`s belief in ghosts.', NOW(), NOW()),
(286, 'A. which reflected popular belief in the supernatural.', NOW(), NOW()),
(286, 'B. that recorded historical events.', NOW(), NOW()),
(286, 'C. seemingly in conflict with accepted beliefs.', NOW(), NOW()),
(287, 'A. a belief in ghosts was not tolerated.', NOW(), NOW()),
(287, 'B. more people believed in ghosts.', NOW(), NOW()),
(287, 'C. certain religious beliefs were not acceptable.', NOW(), NOW()),
(288, 'A. because he believed in a spirit world.', NOW(), NOW()),
(288, 'B. as a theatrical device.', NOW(), NOW()),
(288, 'C. to provoke religious debate.', NOW(), NOW()),
(289, 'A. secretly approved of a supernatural content in plays.', NOW(), NOW()),
(289, 'B. shown approval for plays with a supernatural content.', NOW(), NOW()),
(289, 'C. disapproved of the inclusion of ghosts in plays.', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(21, '<b>Questions 26-30</b><br>What does Julie say about the following subjects?<br>Write the correct letter, A, B or C, next to questions 26-30.<br><b>A.</b> cornful, dismissive<br><b>B.</b> open-minded<br><b>C.</b> believing', 'static', 7, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(21, 'witches / astrology', 'select', 8, 26, '{"options":["A","B","C"]}', NOW(), NOW()),
(21, 'ghosts', 'select', 9, 27, '{"options":["A","B","C"]}', NOW(), NOW()),
(21, 'UFOs/aliens', 'select', 10, 28, '{"options":["A","B","C"]}', NOW(), NOW()),
(21, 'premonitions', 'select', 11, 29, '{"options":["A","B","C"]}', NOW(), NOW()),
(21, 'telepathy', 'select', 12, 30, '{"options":["A","B","C"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(22, '<b>Questions 31-35</b><br>Complete the notes below.<br>Write NO MORE THAN THREE WORDS for each answer.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(22, 'Darwin is credited with having ___ popular beliefs about Man`s creation.', 'fill_blank', 2, 31, NULL, NOW(), NOW()),
(22, 'However, Alfred Russell Wallace simultaneously came up with an ___ to Darwin.', 'fill_blank', 3, 32, NULL, NOW(), NOW()),
(22, 'Unfortunately for Wallace, Darwin seems to have been given the ___ for the theory of evolution.', 'fill_blank', 4, 33, NULL, NOW(), NOW()),
(22, 'Darwin`s theory ___ , upsetting the religious authorities of his time.', 'fill_blank', 5, 34, NULL, NOW(), NOW()),
(22, 'Today, it is often accepted that Man is a product ___ and not spontaneous creation.', 'fill_blank', 6, 35, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(22, '<b>Questions 36-40</b><br>Complete the sentences below.<br>Write NO MORE THAN TWO WORDS for each answer.', 'static', 7, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(22, 'The absence of a ___ might be seen by some to discredit Darwin`s theory.', 'fill_blank', 8, 36, NULL, NOW(), NOW()),
(22, 'Finding an evolutionary bridge between Man and ape would provide undeniable ___ the theory of evolution.', 'fill_blank', 9, 37, NULL, NOW(), NOW()),
(22, 'When ___ of the Piltdown Man was first unearthed in 1908, it seemed Darwin`s theory was no longer in doubt.', 'fill_blank', 10, 38, NULL, NOW(), NOW()),
(22, 'In fact, the hoax proved ___ that scientists and the Press alike believed in its validity.', 'fill_blank', 11, 39, NULL, NOW(), NOW()),
(22, 'After 40 years, Piltdown Man ___ as being no more than a fake.', 'fill_blank', 12, 40, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(23, 'Questions 1-8<br>Do the following statements agree with the information given in the text?<br>For questions 1-8, write', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(23, '<b>TRUE.</b>	if the statement agrees with the information<br><b>FALSE.</b>	if the statement contradicts the information<br><b>NOT GIVEN.</b>	If there is no information on this', 'static', 2, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(23, 'People usually daydream when they are walking around.', 'select', 3, 1, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(23, 'Some people can daydream when they are asleep.', 'select', 4, 2, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(23, 'Some daydreams help us to be more successful in our lives.', 'select', 5, 3, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(23, 'Most lorry drivers daydream in their jobs to make them more interesting.', 'select', 6, 4, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(23, 'Factory workers daydream more than lorry drivers.', 'select', 7, 5, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(23, 'Daydreaming helps people to be creative.', 'select', 8, 6, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(23, 'Old people daydream more than young people.', 'select', 9, 7, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(23, 'Escapist people are generally very happy.', 'select', 10, 8, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(23, '<b>Questions 9-10</b><br>Complete the sentences below.<br>Choose NO MORE THAN THREE WORDS from the text for each answer.', 'static', 11, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(23, 'Writers, artists and other creative people use daydreaming to ___', 'fill_blank', 12, 9, NULL, NOW(), NOW()),
(23, 'The areas of the brain used in daydreaming are also used for complicated ___', 'fill_blank', 13, 10, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(23, '<b>Questions 11-13</b><br>Choose the correct letter, A, B, C or D.', 'static', 14, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(23, 'Daydreams are', 'mcq', 15, 11, NULL, NOW(), NOW()),
(23, 'In the nineteenth century, many people believed that daydreaming was', 'mcq', 16, 12, NULL, NOW(), NOW()),
(23, 'People who daydream a lot', 'mcq', 17, 13, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(322, 'A. dreams that we have when we fall asleep in daytime.', NOW(), NOW()),
(322, 'B. about things that happened that make us sad.', NOW(), NOW()),
(322, 'C. often about things that we would like to happen.', NOW(), NOW()),
(322, 'D. activities that only a few people are able to do.', NOW(), NOW()),
(323, 'A. helpful in factory work.', NOW(), NOW()),
(323, 'B. a way of avoiding work.', NOW(), NOW()),
(323, 'C. something that few people did.', NOW(), NOW()),
(323, 'D. a healthy activity.', NOW(), NOW()),
(324, 'A. usually have creative jobs.', NOW(), NOW()),
(324, 'B. are much happier than other people.', NOW(), NOW()),
(324, 'C. are less intelligent than other people.', NOW(), NOW()),
(324, 'D. do not have as many friends as other people.', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(24, '<b>Questions 14-19</b><br>The text has seven paragraphs, A-G.<br>Which paragraph contains the following information?<br>Write the correct letter, A-G, next to questions 14-19.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(24, 'a 19th-century opinion of what children should learn', 'select', 2, 14, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(24, 'the most difficult sums', 'select', 3, 15, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(24, 'the effect of pressure on doing something', 'select', 4, 16, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(24, 'how children learn the times table', 'select', 5, 17, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(24, 'a politician who got a sum wrong', 'select', 6, 18, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(24, 'a history of the times table', 'select', 7, 19, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(24, '<b>Questions 20-25</b><br>Do the following statements agree with the information given in the text?<br>For questions 20-25, write<br><br><b>TRUE.</b>	if the statement agrees with the information<br><b>FALSE.</b>	if the statement contradicts the information<br><b>NOT GIVEN.</b>	If there is no information on this', 'static', 8, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(24, 'Pythagoras invented the times table in China.', 'select', 9, 20, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(24, 'Stephen Byers and George Osborne were asked the same question.', 'select', 10, 21, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(24, 'All children in the UK have to learn the multiplication table.', 'select', 11, 22, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(24, 'George Osborne did not know the answer to 7 X 8.', 'select', 12, 23, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(24, '7 X 8 is the hardest sum that children have to learn.', 'select', 13, 24, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(24, 'Stephen Byers got the sum wrong because he choked.', 'select', 14, 25, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(25, '<b>Questions 26-31</b><br>Choose the correct letter, A, B, C or D.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(25, 'Which of the following statements is accurate?', 'mcq', 2, 26, NULL, NOW(), NOW()),
(25, 'What does the writer mean by patient treatment being `legitimised abuse`?', 'mcq', 3, 27, NULL, NOW(), NOW()),
(25, 'What brought about changes in the treatment of mentally ill patients?', 'mcq', 4, 28, NULL, NOW(), NOW()),
(25, 'What was a feature of early care in the community schemes?', 'mcq', 5, 29, NULL, NOW(), NOW()),
(25, 'What is true of care in the community schemes today?', 'mcq', 6, 30, NULL, NOW(), NOW()),
(25, 'What can be said of the writer`s attitude towards care in the community?', 'mcq', 7, 31, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(340, 'A. In the 20th century, illegal surgical procedures were carried out on the mentally ill.', NOW(), NOW()),
(340, 'B. The Victorian era saw an increase in mental illness amongst married couples.', NOW(), NOW()),
(340, 'C. Mental institutions of the past were better-equipped for dealing with the mentally ill.', NOW(), NOW()),
(340, 'D. In the past, others often benefitted when a patient was sent to a mental asylum.', NOW(), NOW()),
(341, 'A. There were proper guidelines for the punishment of mentally ill patients.', NOW(), NOW()),
(341, 'B. Maltreatment of mentally ill patients was not illegal and so was tolerated.', NOW(), NOW()),
(341, 'C. Only those who were legally entitled to do so could punish mentally ill patients.', NOW(), NOW()),
(341, 'D. Physical abuse of mentally ill patients was a legal requirement of mental institutions.', NOW(), NOW()),
(342, 'A. A radio documentary exposed patient maltreatment.', NOW(), NOW()),
(342, 'B. People rebelled against the consistent abuse of mentally ill patients.', NOW(), NOW()),
(342, 'C. Previous treatments of mentally ill patients were proved to be ineffective.', NOW(), NOW()),
(342, 'D. The maltreatment of mentally ill patients could never be revealed.', NOW(), NOW()),
(343, 'A. Patient support was the responsibility more of relatives than professionals.', NOW(), NOW()),
(343, 'B. Advanced professional help was available to patients.', NOW(), NOW()),
(343, 'C. All mentally ill patients could benefit from the scheme.', NOW(), NOW()),
(343, 'D. Patients were allowed to enjoy full independence.', NOW(), NOW()),
(344, 'A. They permit greater patient autonomy.', NOW(), NOW()),
(344, 'B. More professional services are available to patients.', NOW(), NOW()),
(344, 'C. Family support networks have become unnecessary.', NOW(), NOW()),
(344, 'D. All patients can now become part of these schemes.', NOW(), NOW()),
(345, 'A. He believes that the scheme has proved to be a failure.', NOW(), NOW()),
(345, 'B. He believes that it can only work under certain circumstances.', NOW(), NOW()),
(345, 'C. He believes that it will never work as mentally ill patients will always be disadvantaged.', NOW(), NOW()),
(345, 'D. He believes it has failed due to patient neglect by professional helpers.', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(25, '<b>Questions 32-36</b><br>Look at the following statements, 32-36, and the list of people, A-C.<br>Match each statement to the correct person.<br><br><b>A.</b>	Dr. Mayalla<br><b>B.</b>	Anita Brown<br><b>C.</b>	Bob Ratchett', 'static', 8, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(25, 'This person acknowledges certain inadequacies in the concept of care in the community, but recognises that attempts have been made to improve on existing schemes.', 'select', 9, 32, '{"options":["A","B","C"]}', NOW(), NOW()),
(25, 'This person whilst emphasising the benefits to the patient from care in the community schemes is critical of traditional care methods.', 'select', 10, 33, '{"options":["A","B","C"]}', NOW(), NOW()),
(25, 'This person’s views have been moderated by their professional contact with the mentally ill.', 'select', 11, 34, '{"options":["A","B","C"]}', NOW(), NOW()),
(25, 'This person places the welfare of others above that of the mentally ill.', 'select', 12, 35, '{"options":["A","B","C"]}', NOW(), NOW()),
(25, 'This person acknowledges that a mistrust of care in the community schemes may be unfounded.', 'select', 13, 36, '{"options":["A","B","C"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(25, '<b>Questions 37-40</b><br>Do the following statements agree with the information given in the text?<br>For questions 37-40, write<br><b>TRUE.</b>	if the statement agrees with the information<br><b>FALSE.</b>	if the statement contradicts the information<br><b>NOT GIVEN.</b>	If there is no information on this', 'static', 14, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(25, 'There is a better understanding of the dynamics of mental illness today.', 'select', 15, 37, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(25, 'Community care schemes do not provide adequate psychological support for patients.', 'select', 16, 38, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(25, 'Dr. Mayalla believes that the scheme is less successful than in the past.', 'select', 17, 39, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(25, 'The goal of community care schemes is to make patients less dependent on the system.', 'select', 18, 40, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW());



