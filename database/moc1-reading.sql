
INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(5, 'The cost of M-Pesa', 'select', 3, 2, '{"options":["A","B","C","D","E"]}', NOW(), NOW()),
(5, 'An international service similar to M-Pesa', 'select', 4, 3, '{"options":["A","B","C","D","E"]}', NOW(), NOW()),
(5, 'The fact that most Kenyans do not have a bank account', 'select', 5, 4, '{"options":["A","B","C","D","E"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(5, '<b>Questions 5-8 </b><br>Complete the sentences below <b> USING NO MORE THAN THREE WORDS </b> from the text for each gap.', 'static', 6, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(5, 'Safaricom is the ___ mobile phone company in Kenya.', 'fill_blank', 7, 5, NULL, NOW(), NOW()),
(5, 'An M-Pesa account needs to be credited by ___ ', 'fill_blank', 8, 6, NULL, NOW(), NOW()),
(5, '___ companies are particularly interested in using M-Pesa.', 'fill_blank', 9, 7, NULL, NOW(), NOW()),
(5, 'Companies like Moneygram and Western Union have ___ the international money transfer market.', 'fill_blank', 10, 8, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(5, '<b>Questions 9-13 </b><br>Do the statements on the next page agree with the information given in Reading Passage 1?<br>In boxes 9 - 13 on your answer sheet, write<br>TRUE --- if the statement agrees with the information<br>FALSE --- if the statement contradicts the information.<br>NOT GIVEN --- If there is no information on this', 'static', 11, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(5, 'Most Kenyans working in urban areas have relatives in rural areas.', 'select', 12, 9, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(5, 'So far, most of the people using M-Pesa have used it to send small amounts of money.', 'select', 13, 10, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(5, 'M-Pesa can only be used by people using one phone network.', 'select', 14, 11, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(5, 'M-Pesa can be used to buy products and services.', 'select', 15, 12, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(5, 'The GSM Association is a consumer organisation.', 'select', 16, 13, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, '<b>Questions 14-17 </b><br>The text has 7 paragraphs (A - G).<br>Which paragraph does each of the following headings best fit?', 'static', 17, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, 'Don"t wait!', 'select', 18, 14, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(6, 'Team up', 'select', 19, 15, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(6, 'Join a club', 'select', 20, 16, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(6, 'Use public transport', 'select', 21, 17, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, '<b>Questions 18-22 </b><br>According to the text, <b> FIVE <b> of the following statements are true.', 'static', 22, NULL, NULL, NOW(), NOW());
INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, 'Write the corresponding letters in answer boxes 18 to 22 in any order.', 'checkbox', 23, 18, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, '<b>Questions 23-24 </b><br>Choose <b>TWO</b> letters', 'static', 24, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, 'What are <b>TWO</b> problems currently faced by universities, especially in Europe and globally?', 'checkbox', 25, 23, NULL, NOW(), NOW());

INSERT INTO question_options (question_id, text, created_at, updated_at)
VALUES
(95, 'pressure to charge students higher tuition fees', NOW(), NOW()),
(95, 'conflicts between university administrators and government funders',  NOW(), NOW()),
(95, 'decrease in student enrollment worldwide',  NOW(), NOW()),
(95, 'outdated library and lab resources',  NOW(), NOW()),
(95, 'shortage of qualified academic staff',  NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, '<b>Questions 25-26 </b><br>Choose <b>TWO</b> letters', 'static', 26, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, 'What are TWO possible solutions proposed by reformists or conservatives?', 'checkbox', 27, 25, NULL, NOW(), NOW());

INSERT INTO question_options (question_id, text, created_at, updated_at)
VALUES
(97, 'Expanding the use of internet-based tuition and private universities.', NOW(), NOW()),
(97, 'Replacing university professors with business professionals.',  NOW(), NOW()),
(97, 'Returning to traditional academic values and subjects.',  NOW(), NOW()),
(97, 'Focusing all education on job-specific training only',  NOW(), NOW()),
(97, 'Closing traditional campuses to save costs.',  NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, 'Fuel costs', 'mcq', 28, 25, NULL, NOW(), NOW()),
(6, 'Using public transport', 'mcq', 29, 26, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(98, '(A) make up about 20% of the cost of running a car.', NOW(), NOW()),
(98, '(B) are related to the amount drivers pay for their cars.', NOW(), NOW()),
(98, '(C) depend on how far you drive.', NOW(), NOW()),
(98, '(D) Both A and C', NOW(), NOW()),
(98, '(E) Both B and C', NOW(), NOW()),
(99, '(A) will save money for British motorists, except in London.', NOW(), NOW()),
(99, '(B) and renting a car part of the time can save money.', NOW(), NOW()),
(99, '(C) costs Londoners about £1,700 a year', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(7, '<b>Questions 27-30 </b><br>For each question, only ONE of the choices is correct.<br>Write the corresponding letter in the appropriate box on your answer sheet.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(7, 'The GSBF lamps', 'mcq', 2, 27, NULL, NOW(), NOW()),
(7, 'More than half of India’s population uses', 'mcq', 3, 28, NULL, NOW(), NOW()),
(7, 'In India, the GSBF lamps are too expensive for most people', 'mcq', 4, 29, NULL, NOW(), NOW()),
(7, 'The GSBF lamps', 'mcq', 5, 30, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(101, '(A) provide light for 100,000 Indian villages.', NOW(), NOW()),
(101, '(B) are very expensive to install.', NOW(), NOW()),
(101, '(C) are powered by the sun', NOW(), NOW()),
(102, '(A) kerosene as a cooking fuel.', NOW(), NOW()),
(102, '(B) solar power as a cooking fuel.', NOW(), NOW()),
(102, '(C) will save money for British motorists, except in London.', NOW(), NOW()),
(103, '(A) in rural areas.', NOW(), NOW()),
(103, '(B) in urban areas.', NOW(), NOW()),
(103, '(C) in all areas', NOW(), NOW()),
(104, '(A) are not as reliable as electricity from the national power grid.', NOW(), NOW()),
(104, '(B) require skill to use.', NOW(), NOW()),
(104, '(C) only provide four hours of light a day', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(7, '<b>Questions 31-35 </b><br>Complete the sentences below <b> USING NO MORE THAN THREE WORDS </b> from the text for each gap.', 'static', 6, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(7, 'Another example of cheap technology helping poor people in the countryside is ___', 'fill_blank', 7, 31, NULL, NOW(), NOW()),
(7, 'Kerosene lamps and conventional bulbs give off less ___ than GSBF lamps.', 'fill_blank', 8, 32, NULL, NOW(), NOW()),
(7, 'It is unlikely that the Indian government will achieve its aim of connecting 112,000 villages to electricity because many villages are ___', 'fill_blank', 9, 33, NULL, NOW(), NOW()),
(7, 'GSBF lamps would be cheaper if it weren’t for ___', 'fill_blank', 10, 34, NULL, NOW(), NOW()),
(7, 'Users need to wipe ___  from the LED in order to keep it working well.', 'fill_blank', 11, 35, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(7, '<b>Questions 36-40 </b><br>Do the following statements agree with the information given in Reading Passage 3?<br>In boxes 36-40 on your answer sheet, write<br>TRUE --- if the statement agrees with the information<br>FALSE --- if the statement contradicts the information.<br>NOT GIVEN --- If there is no information on this', 'static', 12, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(7, 'Ganpat Jadhav’s monthly ration of kerosene was insufficient.', 'select', 13, 36, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(7, 'Kerosene causes many fires in homes in developing countries.', 'select', 14, 37, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(7, 'LED systems could solve the world’s energy problems.', 'select', 15, 38, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(7, 'Chaddha has so far funded the GSBF lamp project himself.', 'select', 16, 39, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(7, 'Microcredit would help to get more people to use LED lamps.', 'select', 17, 40, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW());