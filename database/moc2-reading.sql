INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(5, '<b>Questions 1-4 </b><br>The text has 7 paragraphs (A - G).<br>Which paragraph contains each of the following pieces of information?', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(5, 'Traffic accidents are sometimes caused by lack of sleep.', 'select', 2, 1, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(5, 'The number of children included in the study', 'select', 3, 2, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(5, 'How two schools are trying to deal with the problem', 'select', 4, 3, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(5, 'How the effect of having less sleep was measured', 'select', 5, 4, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(5, '<b>Questions 5-8 </b><br>Complete the sentences below <b> USING NO MORE THAN THREE WORDS </b> from the text for each gap.', 'static', 6, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(5, 'Fallone is now studying the sleep patterns of children with ___', 'fill_blank', 7, 5, NULL, NOW(), NOW()),
(5, 'The researchers used ___ that show movement to check that children went to bed at the right time.', 'fill_blank', 8, 6, NULL, NOW(), NOW()),
(5, 'Students with less sleep had problems with memory, remembering new material, and ___', 'fill_blank', 9, 7, NULL, NOW(), NOW()),
(5, 'Fallone admitted that it was ___ for children to get enough sleep.', 'fill_blank', 10, 8, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(5, '<b>Questions 9-13 </b><br>Do the statements on the next page agree with the information given in Reading Passage 1?<br>In boxes 9 - 13 on your answer sheet, write<br>TRUE --- if the statement agrees with the information<br>FALSE --- if the statement contradicts the information.<br>NOT GIVEN --- If there is no information on this', 'static', 11, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(5, 'The results of the study were first distributed to principals of American schools,', 'select', 12, 9, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(5, 'Some of the children in the study had previously shown signs of sleeping problems..', 'select', 13, 10, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(5, 'The study could influence how doctors deal with children’s health problems.', 'select', 14, 11, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(5, 'Fallone does not let his daughter play soccer.', 'select', 15, 12, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(5, 'Staying up later is acceptable if the child is doing homework', 'select', 16, 13, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, '<b>Questions 14-17 </b><br>The text has 7 paragraphs (A - F).<br>Which paragraph does each of the following headings best fit?', 'static', 17, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, 'Education for the masses', 'select', 18, 14, '{"options":["A","B","C","D","E","F"]}', NOW(), NOW()),
(6, 'Future possibilities', 'select', 19, 15, '{"options":["A","B","C","D","E","F"]}', NOW(), NOW()),
(6, 'Globalisation and competition', 'select', 20, 16, '{"options":["A","B","C","D","E","F"]}', NOW(), NOW()),
(6, 'Funding problem', 'select', 21, 17, '{"options":["A","B","C","D","E","F"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, '<b>Questions 18-22 </b><br>According to the text, <b> FIVE </b> of the following statements are true.', 'static', 22, NULL, NULL, NOW(), NOW());
INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, 'Write the corresponding letters in answer boxes 18 to 22 in any order.', 'checkbox', 23, 18, NULL, NOW(), NOW());


INSERT INTO question_options (question_id, text, created_at, updated_at)
VALUES
(101, 'Some universities are joining with each other.', NOW(), NOW()),
(101, 'There are not enough graduates in developed countries.',  NOW(), NOW()),
(101, 'Many top companies now spend one-third of their budget on research and marketing',  NOW(), NOW()),
(101, 'The number of people from developed countries studying outside their home countries has doubled in the last two decades',  NOW(), NOW()),
(101, 'Scandinavian governments provide enough money for their universities.',  NOW(), NOW()),
(101, 'The largest university in the world is in Turkey.',  NOW(), NOW()),
(101, 'Italian students must have a five-minute interview with a professor before being accepted into university.',  NOW(), NOW()),
(101, 'Peter Drucker foresees the end of university campuses.',  NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, '<b>Questions 23-24 </b><br>Choose <b>TWO</b> letters', 'static', 24, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, 'What are <b>TWO</b> problems currently faced by universities, especially in Europe and globally?', 'checkbox', 25, 23, NULL, NOW(), NOW());

INSERT INTO question_options (question_id, text, created_at, updated_at)
VALUES
(103, 'pressure to charge students higher tuition fees', NOW(), NOW()),
(103, 'conflicts between university administrators and government funders',  NOW(), NOW()),
(103, 'decrease in student enrollment worldwide',  NOW(), NOW()),
(103, 'outdated library and lab resources',  NOW(), NOW()),
(103, 'shortage of qualified academic staff',  NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, '<b>Questions 25-26 </b><br>Choose <b>TWO</b> letters', 'static', 26, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(6, 'What are TWO possible solutions proposed by reformists or conservatives?', 'checkbox', 27, 25, NULL, NOW(), NOW());

INSERT INTO question_options (question_id, text, created_at, updated_at)
VALUES
(105, 'Expanding the use of internet-based tuition and private universities.', NOW(), NOW()),
(105, 'Replacing university professors with business professionals.',  NOW(), NOW()),
(105, 'Returning to traditional academic values and subjects.',  NOW(), NOW()),
(105, 'Focusing all education on job-specific training only',  NOW(), NOW()),
(105, 'Closing traditional campuses to save costs.',  NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(7, '<b>Questions 27-30 </b><br>For each question, only ONE of the choices is correct.<br>Write the corresponding letter in the appropriate box on your answer sheet.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(7, 'According to the diaries, in 1961, women rarely had free time on Sunday', 'mcq', 2, 27, NULL, NOW(), NOW()),
(7, 'People want to do more on Sundays because', 'mcq', 3, 28, NULL, NOW(), NOW()),
(7, 'Shopping habits have changed since 1961 in that', 'mcq', 4, 29, NULL, NOW(), NOW()),
(7, 'Compared with 1961,', 'mcq', 5, 30, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(107, '(A) mornings', NOW(), NOW()),
(107, '(B) afternoons', NOW(), NOW()),
(107, '(C) evenings', NOW(), NOW()),
(108, '(A) more shops are open.', NOW(), NOW()),
(108, '(B) it is a good day to graze', NOW(), NOW()),
(108, '(C) they are tired on Saturdays', NOW(), NOW()),
(109, '(A) people shop less at weekends.', NOW(), NOW()),
(109, '(B) men shop more than women', NOW(), NOW()),
(109, '(C) men do as much shopping as women.', NOW(), NOW()),
(110, '(A) women do far less housework on Sundays.', NOW(), NOW()),
(110, '(B) men do far less housework on Sundays.', NOW(), NOW()),
(110, '(C) men and women do far less housework on Sundays', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(7, '<b>Questions 31-35 </b><br>Complete the sentences below <b> USING NO MORE THAN THREE WORDS </b> from the text for each gap.', 'static', 6, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(7, 'Professor Gershuny discovered thousands of ___ at the BBC.', 'fill_blank', 7, 31, NULL, NOW(), NOW()),
(7, 'In 1961, people ate ___ tat 5 or 6 o’clock.', 'fill_blank', 8, 32, NULL, NOW(), NOW()),
(7, 'In 2001, people spent ___ 50 minutes on shopping on Sundays.', 'fill_blank', 9, 33, NULL, NOW(), NOW()),
(7, 'Shopping is something that is not as ___  as it was in 1961', 'fill_blank', 10, 34, NULL, NOW(), NOW()),
(7, 'In 1961, men would often go for a drink or be ___  before lunch.', 'fill_blank', 11, 35, NULL, NOW(), NOW());