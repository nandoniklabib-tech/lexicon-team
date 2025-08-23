INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, '<b>Questions 1-2</b><br>The text has 5 paragraphs (A - E).<br>Which paragraph contains each of the following pieces of information?', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, 'A possible security problem', 'select', 36, {"A"."B"}, NULL, NOW(), NOW());


INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(3, 'How long is the radio show? ___', 'fill_blank', 14, 21, NULL, NOW(), NOW()),
(3, 'What is the general focus of the programme?___','fill_blank', 15, 22, NULL, NOW(), NOW()),
(3, 'Where is Professor Ripley from? ___', 'fill_blank', 16, 23, NULL, NOW(), NOW()),
(3, 'According to Professor Ripley, what animals do people most associate with the African bush? ___', 'fill_blank', 17, 24, NULL, NOW(), NOW());