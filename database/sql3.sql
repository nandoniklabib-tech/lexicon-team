INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, '<b>Questions 1-7</b> <br>Complete the form below.<br>Write NO MORE THAN THREE WORDS AND/OR A NUMBER for each answer.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, '<b>Details of Order</b>', 'static', 2, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, 'Party Host', 'static', 3, NULL, '{"table_no":1,"row":1,"col":1}', NOW(), NOW()),
(1, 'Example: Customer`s oldest daughter', 'static', 4, NULL, '{"table_no":1,"row":1,"col":2}', NOW(), NOW()),
(1, 'Occasion', 'static', 5, NULL, '{"table_no":1,"row":2,"col":1}', NOW(), NOW()),
(1, '18th birthday', 'static', 6, NULL, '{"table_no":1,"row":2,"col":2}', NOW(), NOW()),
(1, 'Number of Guests Invited', 'static', 7, NULL, '{"table_no":1,"row":3,"col":1}', NOW(), NOW()),
(1, ' ___', 'fill_blank', 8, 1, '{"table_no":1,"row":3,"col":2}', NOW(), NOW()),
(1, 'Customer Budget', 'static', 9, NULL, '{"table_no":1,"row":4,"col":1}', NOW(), NOW()),
(1, '___ £800', 'fill_blank', 10, 2, '{"table_no":1,"row":4,"col":2}', NOW(), NOW()),
(1, 'Marquee Size', 'static', 11, NULL, '{"table_no":1,"row":5,"col":1}', NOW(), NOW()),
(1, '___ X 9 metres', 'fill_blank', 12, 3, '{"table_no":1,"row":5,"col":2}', NOW(), NOW()),
(1, '___ Cost', 'fill_blank', 13, 4, '{"table_no":1,"row":6,"col":1}', NOW(), NOW()),
(1, '£450', 'static', 14, NULL, '{"table_no":1,"row":6,"col":2}', NOW(), NOW()),
(1, '___', 'fill_blank', 15, 5, '{"table_no":1,"row":7,"col":1}', NOW(), NOW()),
(1, '£150', 'static', 16, NULL, '{"table_no":1,"row":7,"col":2}', NOW(), NOW()),
(1, 'Lighting Cost', 'static', 17, NULL, '{"table_no":1,"row":8,"col":1}', NOW(), NOW()),
(1, 'approximately ₤ ___', 'fill_blank', 18, 6, '{"table_no":1,"row":8,"col":2}', NOW(), NOW()),
(1, 'Number of Guests', 'static', 19, NULL, '{"table_no":1,"row":9,"col":1}', NOW(), NOW()),
(1, 'seated 30 / standing 50', 'static', 20, NULL, '{"table_no":1,"row":9,"col":2}', NOW(), NOW()),
(1, 'Furniture Cost', 'static', 21, NULL, '{"table_no":1,"row":10,"col":1}', NOW(), NOW()),
(1, 'per table £4.00 / per chair £3.00', 'static', 22, NULL, '{"table_no":1,"row":10,"col":2}', NOW(), NOW()),
(1, 'Dates Marquee Required', 'static', 23, NULL, '{"table_no":1,"row":11,"col":1}', NOW(), NOW()),
(1, 'Set-up date ___ To be taken down on June 7th', 'fill_blank', 24, 7, '{"table_no":1,"row":11,"col":2}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, '<b>Questions 8-10</b> <br>Complete the form below.<br>Write NO MORE THAN THREE WORDS AND/OR A NUMBER for each answer.', 'static', 25, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, '<b>Customer Details</b>', 'static', 26, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, 'Name', 'static', 27, NULL, '{"table_no":2,"row":1,"col":1}', NOW(), NOW()),
(1, '___', 'fill_blank', 28, 8, '{"table_no":2,"row":1,"col":2}', NOW(), NOW()),
(1, 'Postcode', 'static', 29, NULL, '{"table_no":2,"row":2,"col":1}', NOW(), NOW()),
(1, '___', 'fill_blank', 30, 9, '{"table_no":2,"row":2,"col":2}', NOW(), NOW()),
(1, 'Contact Number', 'static', 31, NULL, '{"table_no":2,"row":3,"col":1}', NOW(), NOW()),
(1, '___', 'fill_blank', 32, 10, '{"table_no":2,"row":3,"col":2}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(2, '<b>Questions 11-15</b><br>Label the map below of a typical medieval castle.<br>Write the correct letter, A-G, next to questions 11-15.', 'static', 33, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(2, '', 'static', 34, NULL, '{"image":"images/mockTestImage/Questions3_2_1.png"}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(2, 'Chapel', 'select', 35, 11, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(2, 'Great Hall', 'select', 36, 12, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(2, 'Great Chambers', 'select', 37, 13, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(2, 'Bakehouse', 'select', 38, 14, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(2, 'Stables', 'select', 39, 15, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at) VALUES (2, '<b>Questions 16-20</b><br>Choose the correct letter, A, B or C.', 'static', 40, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(2, 'Medieval castles', 'mcq', 41, 16, NULL, NOW(), NOW()),
(2, 'The early medieval Keep served as', 'mcq', 42, 17, NULL, NOW(), NOW()),
(2, 'In later medieval castles, the Keep', 'mcq', 43, 18, NULL, NOW(), NOW()),
(2, 'Underground dungeons were built in response to', 'mcq', 44, 19, NULL, NOW(), NOW()),
(2, 'The least effective line of defence was', 'mcq', 45, 20, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(41, 'A. shared a common design.', NOW(), NOW()),
(41, 'B. were each unique.', NOW(), NOW()),
(41, 'C. had the same methods of fortification in common.', NOW(), NOW()),
(42, 'A. a prison and fortified tower.', NOW(), NOW()),
(42, 'B. a fortified tower and living area.', NOW(), NOW()),
(42, 'C. a fortified entrance to the inner castle area.', NOW(), NOW()),
(43, 'A. evolved into a set of different buildings.', NOW(), NOW()),
(43, 'B. was used purely for accommodation.', NOW(), NOW()),
(43, 'C. played a less significant role in the castle`s domestic life.', NOW(), NOW()),
(44, 'A. a shift in the medieval belief system.', NOW(), NOW()),
(44, 'B. the Keep being no longer used for prisoners.', NOW(), NOW()),
(44, 'C. a call for harsher treatment of prisoners.', NOW(), NOW()),
(45, 'A. the portcullis.', NOW(), NOW()),
(45, 'B. the drawbridge.', NOW(), NOW()),
(45, 'C. the barbican.', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(3, '<b>Questions 21-25</b><br>Choose the correct letter, A, B or C.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(3, 'Julie and Dave thought the lecture', 'mcq', 2, 21, NULL, NOW(), NOW()),
(3, 'Hamlet was a play', 'mcq', 3, 22, NULL, NOW(), NOW()),
(3, 'In the time of James I', 'mcq', 4, 23, NULL, NOW(), NOW()),
(3, 'Shakespeare introduced ghosts into plays', 'mcq', 5, 24, NULL, NOW(), NOW()),
(3, 'Shakespeare`s audience would probably have', 'mcq', 6, 25, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(47, 'A. gave a new insight into Shakespeare`s style.', NOW(), NOW()),
(47, 'B. offered a thought-provoking view on Shakespeare and his work.', NOW(), NOW()),
(47, 'C. explained Shakespeare`s belief in ghosts.', NOW(), NOW()),
(48, 'A. which reflected popular belief in the supernatural.', NOW(), NOW()),
(48, 'B. that recorded historical events.', NOW(), NOW()),
(48, 'C. seemingly in conflict with accepted beliefs.', NOW(), NOW()),
(49, 'A. a belief in ghosts was not tolerated.', NOW(), NOW()),
(49, 'B. more people believed in ghosts.', NOW(), NOW()),
(49, 'C. certain religious beliefs were not acceptable.', NOW(), NOW()),
(50, 'A. because he believed in a spirit world.', NOW(), NOW()),
(50, 'B. as a theatrical device.', NOW(), NOW()),
(50, 'C. to provoke religious debate.', NOW(), NOW()),
(51, 'A. secretly approved of a supernatural content in plays.', NOW(), NOW()),
(51, 'B. shown approval for plays with a supernatural content.', NOW(), NOW()),
(51, 'C. disapproved of the inclusion of ghosts in plays.', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(3, '<b>Questions 26-30</b><br>What does Julie say about the following subjects?<br>Write the correct letter, A, B or C, next to questions 26-30.<br><b>A.</b> cornful, dismissive<br><b>B.</b> open-minded<br><b>C.</b> believing', 'static', 7, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(3, 'witches / astrology', 'select', 8, 26, '{"options":["A","B","C"]}', NOW(), NOW()),
(3, 'ghosts', 'select', 9, 27, '{"options":["A","B","C"]}', NOW(), NOW()),
(3, 'UFOs/aliens', 'select', 10, 28, '{"options":["A","B","C"]}', NOW(), NOW()),
(3, 'premonitions', 'select', 11, 29, '{"options":["A","B","C"]}', NOW(), NOW()),
(3, 'telepathy', 'select', 12, 30, '{"options":["A","B","C"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, '<b>Questions 31-35</b><br>Complete the notes below.<br>Write NO MORE THAN THREE WORDS for each answer.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, 'Darwin is credited with having ___ popular beliefs about Man`s creation.', 'fill_blank', 2, 31, NULL, NOW(), NOW()),
(4, 'However, Alfred Russell Wallace simultaneously came up with an ___ to Darwin.', 'fill_blank', 3, 32, NULL, NOW(), NOW()),
(4, 'Unfortunately for Wallace, Darwin seems to have been given the ___ for the theory of evolution.', 'fill_blank', 4, 33, NULL, NOW(), NOW()),
(4, 'Darwin`s theory ___ , upsetting the religious authorities of his time.', 'fill_blank', 5, 34, NULL, NOW(), NOW()),
(4, 'Today, it is often accepted that Man is a product ___ and not spontaneous creation.', 'fill_blank', 6, 35, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, '<b>Questions 36-40</b><br>Complete the sentences below.<br>Write NO MORE THAN TWO WORDS for each answer.', 'static', 7, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, 'The absence of a ___ might be seen by some to discredit Darwin`s theory.', 'fill_blank', 8, 36, NULL, NOW(), NOW()),
(4, 'Finding an evolutionary bridge between Man and ape would provide undeniable ___ the theory of evolution.', 'fill_blank', 9, 37, NULL, NOW(), NOW()),
(4, 'When ___ of the Piltdown Man was first unearthed in 1908, it seemed Darwin`s theory was no longer in doubt.', 'fill_blank', 10, 38, NULL, NOW(), NOW()),
(4, 'In fact, the hoax proved ___ that scientists and the Press alike believed in its validity.', 'fill_blank', 11, 39, NULL, NOW(), NOW()),
(4, 'After 40 years, Piltdown Man ___ as being no more than a fake.', 'fill_blank', 12, 40, NULL, NOW(), NOW());