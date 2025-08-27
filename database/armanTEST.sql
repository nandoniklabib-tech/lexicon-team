-- STATIC
INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, 'TEXT', 'static', order_no, NULL, NULL, NOW(), NOW());

-- INPUT
INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, '___', 'fill_blank', order_no, NULL, NULL, NOW(), NOW());

-- TABLE 
INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, 'Name', 'static', 27, NULL, '{"table_no":2,"row":1,"col":1}', NOW(), NOW()),
(1, '___', 'fill_blank', 28, 8, '{"table_no":2,"row":1,"col":2}', NOW(), NOW()),
(1, 'Postcode', 'static', 29, NULL, '{"table_no":2,"row":2,"col":1}', NOW(), NOW()),
(1, '___', 'fill_blank', 30, 9, '{"table_no":2,"row":2,"col":2}', NOW(), NOW()),
(1, 'Contact Number', 'static', 31, NULL, '{"table_no":2,"row":3,"col":1}', NOW(), NOW()),
(1, '___', 'fill_blank', 32, 10, '{"table_no":2,"row":3,"col":2}', NOW(), NOW());

-- SELECT 
INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(2, '', 'select', 35, 11, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(2, '', 'select', 36, 12, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(2, '', 'select', 37, 13, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(2, '', 'select', 38, 14, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(2, '', 'select', 39, 15, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW());

-- MCQ 
INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(2, '', 'mcq', 41, 16, NULL, NOW(), NOW());
-- 41 FROM AFTER QUESTION INSERT 
INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(41, 'A. .', NOW(), NOW()),
(41, 'B. .', NOW(), NOW()),
(41, 'C. .', NOW(), NOW());