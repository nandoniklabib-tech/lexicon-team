'mcq','fill_blank','multi_select','checkbox','table','true_false','select','static','others'

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