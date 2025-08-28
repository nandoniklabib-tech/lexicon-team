INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(10, '<b>Questions 1-2</b><br>Choose the correct letter A–C.<br>Example: <br>The customer went to South Africa <br>A. last month <br> B. last week <br> C. last year.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(10, 'The travel agent:', 'mcq', 2, 1, NULL, NOW(), NOW()),
(10, 'The customer:', 'mcq', 3, 2, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(118, '(A) thinks Europe is a good destination', NOW(), NOW()),
(118, '(B) can personally recommend Vancouver', NOW(), NOW()),
(118, '(C) does not think America is a good choice.', NOW(), NOW()),
(119, '(A) is going to Europe next year', NOW(), NOW()),
(119, '(B) knows people living in Canada', NOW(), NOW()),
(119, '(C) wants to go to the warmest place', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(10, '<b>Questions 3-6</b> <br> Complete the form using <b>NO MORE THAN TWO WORDS OR A NUMBER.<br><br>The Travel Depot flight reservations
</b>', 'static', 4, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(10, 'Customer’s name:', 'static', 5, NULL, '{"table_no":1,"row":1,"col":1}', NOW(), NOW()),
(10, 'Jim ___', 'fill_blank', 6, 3, '{"table_no":1,"row":1,"col":2}', NOW(), NOW()),
(10, 'Address', 'static', 7, NULL, '{"table_no":1,"row":2,"col":1}', NOW(), NOW()),
(10, '10 Allen Road, Oldham', 'static', 8, NULL, '{"table_no":1,"row":2,"col":2}', NOW(), NOW()),
(10, 'Destination', 'static', 9, NULL, '{"table_no":1,"row":3,"col":1}', NOW(), NOW()),
(10, 'Vancouver, Canada', 'static', 10, NULL, '{"table_no":1,"row":3,"col":2}', NOW(), NOW()),
(10, 'Contact number:', 'static', 11, NULL, '{"table_no":1,"row":4,"col":1}', NOW(), NOW()),
(10, '0151___ (home number)', 'fill_blank', 12, 4, '{"table_no":1,"row":4,"col":2}', NOW(), NOW()),
(10, 'Flight number', 'static', 13, NULL, '{"table_no":1,"row":5,"col":1}', NOW(), NOW()),
(10, '___', 'fill_blank', 14, 5, '{"table_no":1,"row":5,"col":2}', NOW(), NOW()),
(10, 'Length of stay (nights):', 'static', 15, NULL, '{"table_no":1,"row":6,"col":1}', NOW(), NOW()),
(10, '___', 'fill_blank', 16, 6, '{"table_no":1,"row":6,"col":2}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(10, '<b>Questions 7-10 </b><br>Complete the sentences below <b> USING NO MORE THAN TWO WORDS OR A NUMBER </b>', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(10, 'The travel agent recommends some form of ___ cover for peace of mind.', 'fill_blank', 18, 7, NULL, NOW(), NOW()),
(10, 'There are two types of cover, but the best cover is offered with the ___ Star policy.', 'fill_blank', 19, 8, NULL, NOW(), NOW()),
(10, 'The client can see a play at the theatre for $ ___', 'fill_blank', 20, 9, NULL, NOW(), NOW()),
(10, 'The flight and the insurance together cost £ ___', 'fill_blank', 21, 10, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(11, '<b>Questions 11-15</b><br>Select the correct answers<br>', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(11, 'Who is the speaker addressing?', 'mcq', 2, 11, NULL, NOW(), NOW()),
(11, 'Rental property in the city…', 'mcq', 3, 12, NULL, NOW(), NOW()),
(11, 'Lisa Brown believes…', 'mcq', 4, 13, NULL, NOW(), NOW()),
(11, 'Property in the countryside is becoming more popular because…', 'mcq', 5, 14, NULL, NOW(), NOW()),
(11, 'What kind of properties does the speaker specialise in?', 'mcq', 6, 15, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(139, 'Property agents', NOW(), NOW()),
(139, 'People selling houses', NOW(), NOW()),
(139, 'People in the countryside', NOW(), NOW()),
(139, 'People buying second homes', NOW(), NOW()),
(140, 'is very easy to find', NOW(), NOW()),
(140, 'is becoming more difficult to find', NOW(), NOW()),
(140, 'is an investment opportunity', NOW(), NOW()),
(140, 'is often the only option', NOW(), NOW()),
(141, 'most people will own their own home at some time', NOW(), NOW()),
(141, 'there is a psychological factor involved in owning your own home', NOW(), NOW()),
(141, 'fewer people are interested in owning a house', NOW(), NOW()),
(141, 'most young people need a deposit before they can buy a house.', NOW(), NOW()),
(142, 'people want to get away from the city', NOW(), NOW()),
(142, 'some parts of the city are becoming overcrowded', NOW(), NOW()),
(142, 'the concept of the home office means that some people don"t need to go into work', NOW(), NOW()),
(142, 'public transport is beginning to serve outlying areas.', NOW(), NOW()),
(143, 'Commercial', NOW(), NOW()),
(143, 'Investment', NOW(), NOW()),
(143, 'First homes', NOW(), NOW()),
(143, 'Rural', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(11, '<b>Questions 16-20</b><br>Answer the following questions USING <b>NO MORE THAN THREE WORDS OR A NUMBER</b><br>What end of the market are the properties?', 'static', 7, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(11, 'What end of the market are the properties? ___', 'fill_blank', 8, 16, NULL, NOW(), NOW()),
(11, 'What does the speaker compare buying houses with? ___','fill_blank', 9, 17, NULL, NOW(), NOW()),
(11, 'What kind of equity can be the result of buying a property when the market is high? ___', 'fill_blank', 10, 18, NULL, NOW(), NOW()),
(11, 'How does she describe the feeling of successful property investment? ___', 'fill_blank', 11, 19, NULL, NOW(), NOW()),
(11, 'How can you ask the speaker a question? ___', 'fill_blank', 12, 20, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(12, '<b>Questions 21-24</b><br>Answer the following questions USING <b>NO MORE THAN THREE WORDS OR A NUMBER</b><br>', 'static', 13, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(12, 'How long is the radio show? ___', 'fill_blank', 14, 21, NULL, NOW(), NOW()),
(12, 'What is the general focus of the programme?___','fill_blank', 15, 22, NULL, NOW(), NOW()),
(12, 'Where is Professor Ripley from? ___', 'fill_blank', 16, 23, NULL, NOW(), NOW()),
(12, 'According to Professor Ripley, what animals do people most associate with the African bush? ___', 'fill_blank', 17, 24, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(12, '<b>Questions 25-28</b> <br> Complete the form using <b>NO MORE THAN TWO WORDS OR A NUMBER.</b><br>', 'static',18 , NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(12, '', 'static',19 , NULL, '{"table_no":2,"row":1,"col":1}', NOW(), NOW()),
(12, 'Threats', 'static',20 , NULL, '{"table_no":2,"row":1,"col":2}', NOW(), NOW()),
(12, 'Natural habitat', 'static', 21, NULL, '{"table_no":2,"row":1,"col":3}', NOW(), NOW()),
(12, 'Population', 'static', 22, NULL, '{"table_no":2,"row":1,"col":4}', NOW(), NOW()),
(12, 'African lions', 'static', 23, NULL, '{"table_no":2,"row":2,"col":1}', NOW(), NOW()),
(12, '', 'static', 24, NULL, '{"table_no":2,"row":2,"col":2}', NOW(), NOW()),
(12, 'bush', 'static', 25, NULL, '{"table_no":2,"row":2,"col":3}', NOW(), NOW()),
(12, 'Estimated to be ___', 'fill_blank', 26, 25, '{"table_no":2,"row":2,"col":4}', NOW(), NOW()),
(12, 'Tigers', 'static', 27, NULL, '{"table_no":2,"row":3,"col":1}', NOW(), NOW()),
(12, '___', 'fill_blank', 28, 26, '{"table_no":2,"row":3,"col":2}', NOW(), NOW()),
(12, 'forests and plains', 'static', 29, NULL, '{"table_no":2,"row":3,"col":3}', NOW(), NOW()),
(12, 'ewer than ___', 'fill_blank', 30, 27, '{"table_no":2,"row":3,"col":4}', NOW(), NOW()),
(12, 'Snow leopards', 'static', 31, NULL, '{"table_no":2,"row":4,"col":1}', NOW(), NOW()),
(12, 'Expansion of ___', 'fill_blank', 32, 28, '{"table_no":2,"row":4,"col":2}', NOW(), NOW()),
(12, 'high-altitude pastures', 'static', 33, NULL, '{"table_no":2,"row":4,"col":3}', NOW(), NOW()),
(12, '', 'static', 34, NULL, '{"table_no":2,"row":4,"col":4}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(12, '<b>Questions 29-30</b><br>Circle the appropriate answer<br>', 'static', 35, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(12, 'Where is the WWF currently funding projects to help the snow leopard?', 'mcq', 36, 29, NULL, NOW(), NOW()),
(12, 'Listeners should telephone', 'mcq', 37, 30, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(173, 'Nepal, Pakistan and Bhutan', NOW(), NOW()),
(173, 'Nepal and Pakistan', NOW(), NOW()),
(173, 'Bhutan and Nepal', NOW(), NOW()),
(173, 'Pakistan and Bhutan', NOW(), NOW()),
(174, 'immediately if they want to put forward an opinion', NOW(), NOW()),
(174, 'during the commercial break', NOW(), NOW()),
(174, 'in 10 minutes if they have anything they want to ask the professor', NOW(), NOW()),
(174, 'if they have any information regarding pumas or jaguars.', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(13, '<b>Questions 31</b><br>Circle the appropriate answer<br>', 'static', 38, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(13, 'The students are expecting', 'mcq', 36, 31, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(176, 'to hear a lecture on overpopulation', NOW(), NOW()),
(176, 'Mr Mackenzie', NOW(), NOW()),
(176, 'a guest speaker', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(13, '<b>Questions 32-36</b> <br> Complete the form using <b>NO MORE THAN TWO WORDS OR A NUMBER.</b><br>', 'static',37, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(13, '42 million adults ___', 'fill_blank',38, 32, '{"table_no":3,"row":1,"col":1}', NOW(), NOW()),
(13, '50 million adults have the reading ability of a ___ year-old.', 'fill_blank',39, 33, '{"table_no":3,"row":2,"col":1}', NOW(), NOW()),
(13, 'Increasing by around ___  and a quarter million per year. Illiteracy costs', 'fill_blank',40, 34, '{"table_no":3,"row":3,"col":1}', NOW(), NOW()),
(13, '', 'static',41, NULL, '{"table_no":3,"row":4,"col":1}', NOW(), NOW()),
(13, 'Unemployment', 'static', 42, NULL, '{"table_no":3,"row":4,"col":2}', NOW(), NOW()),
(13, 'Unrealised earnings', 'static', 43, NULL, '{"table_no":3,"row":4,"col":3}', NOW(), NOW()),
(13, 'Literacy programmes', 'static', 44, NULL, '{"table_no":3,"row":4,"col":4}', NOW(), NOW()),
(13, 'cost (in billions of US dollars)', 'static', 45, NULL, '{"table_no":3,"row":5,"col":1}', NOW(), NOW()),
(13, '$ ___', 'fill_blank', 46, 35, '{"table_no":3,"row":5,"col":2}', NOW(), NOW()),
(13, '237', 'static', 47, NULL, '{"table_no":3,"row":5,"col":3}', NOW(), NOW()),
(13, '$ ___', 'fill_blank', 48, 36, '{"table_no":3,"row":5,"col":4}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(13, '<b>Questions 37</b><br>Circle the appropriate answer<br>', 'static', 49, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(13, 'Illiteracy is increasing because many young learners are', 'mcq', 50, 37, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(190, 'not being taught how to break words into sounds', NOW(), NOW()),
(190, 'given word lists which are too long', NOW(), NOW()),
(190, 'not challenged enough in the classroom.', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(13, '<b>Questions 38-40</b><br>Answer the following questions USING <b>NO MORE THAN THREE WORDS OR A NUMBER</b><br>', 'static', 51, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(13, 'English is made up of 26 letters, with 44 ___', 'fill_blank', 52, 38, NULL, NOW(), NOW()),
(13, 'and 70 ways of ___ .','fill_blank', 53, 39, NULL, NOW(), NOW()),
(13, 'Unsuccessful teaching practices persist, however, because reading is ___', 'fill_blank', 54, 40, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(14, '<b>Questions 1-4 </b><br>The text has 7 paragraphs (A - G).<br>Which paragraph contains each of the following pieces of information?', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(14, 'Traffic accidents are sometimes caused by lack of sleep.', 'select', 2, 1, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(14, 'The number of children included in the study', 'select', 3, 2, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(14, 'How two schools are trying to deal with the problem', 'select', 4, 3, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW()),
(14, 'How the effect of having less sleep was measured', 'select', 5, 4, '{"options":["A","B","C","D","E","F","G"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(14, '<b>Questions 5-8 </b><br>Complete the sentences below <b> USING NO MORE THAN THREE WORDS </b> from the text for each gap.', 'static', 6, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(14, 'Fallone is now studying the sleep patterns of children with ___', 'fill_blank', 7, 5, NULL, NOW(), NOW()),
(14, 'The researchers used ___ that show movement to check that children went to bed at the right time.', 'fill_blank', 8, 6, NULL, NOW(), NOW()),
(14, 'Students with less sleep had problems with memory, remembering new material, and ___', 'fill_blank', 9, 7, NULL, NOW(), NOW()),
(14, 'Fallone admitted that it was ___ for children to get enough sleep.', 'fill_blank', 10, 8, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(14, '<b>Questions 9-13 </b><br>Do the statements on the next page agree with the information given in Reading Passage 1?<br>In boxes 9 - 13 on your answer sheet, write<br>TRUE --- if the statement agrees with the information<br>FALSE --- if the statement contradicts the information.<br>NOT GIVEN --- If there is no information on this', 'static', 11, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(14, 'The results of the study were first distributed to principals of American schools,', 'select', 12, 9, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(14, 'Some of the children in the study had previously shown signs of sleeping problems..', 'select', 13, 10, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(14, 'The study could influence how doctors deal with children’s health problems.', 'select', 14, 11, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(14, 'Fallone does not let his daughter play soccer.', 'select', 15, 12, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(14, 'Staying up later is acceptable if the child is doing homework', 'select', 16, 13, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(15, '<b>Questions 14-17 </b><br>The text has 7 paragraphs (A - F).<br>Which paragraph does each of the following headings best fit?', 'static', 17, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(15, 'Education for the masses', 'select', 18, 14, '{"options":["A","B","C","D","E","F"]}', NOW(), NOW()),
(15, 'Future possibilities', 'select', 19, 15, '{"options":["A","B","C","D","E","F"]}', NOW(), NOW()),
(15, 'Globalisation and competition', 'select', 20, 16, '{"options":["A","B","C","D","E","F"]}', NOW(), NOW()),
(15, 'Funding problem', 'select', 21, 17, '{"options":["A","B","C","D","E","F"]}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(15, '<b>Questions 18-22 </b><br>According to the text, <b> FIVE </b> of the following statements are true.', 'static', 22, NULL, NULL, NOW(), NOW());
INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(15, 'Write the corresponding letters in answer boxes 18 to 22 in any order.', 'checkbox', 23, 18, NULL, NOW(), NOW());


INSERT INTO question_options (question_id, text, created_at, updated_at)
VALUES
(217, 'Some universities are joining with each other.', NOW(), NOW()),
(217, 'There are not enough graduates in developed countries.',  NOW(), NOW()),
(217, 'Many top companies now spend one-third of their budget on research and marketing',  NOW(), NOW()),
(217, 'The number of people from developed countries studying outside their home countries has doubled in the last two decades',  NOW(), NOW()),
(217, 'Scandinavian governments provide enough money for their universities.',  NOW(), NOW()),
(217, 'The largest university in the world is in Turkey.',  NOW(), NOW()),
(217, 'Italian students must have a five-minute interview with a professor before being accepted into university.',  NOW(), NOW()),
(217, 'Peter Drucker foresees the end of university campuses.',  NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(15, '<b>Questions 23-24 </b><br>Choose <b>TWO</b> letters', 'static', 24, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(15, 'What are <b>TWO</b> problems currently faced by universities, especially in Europe and globally?', 'checkbox', 25, 23, NULL, NOW(), NOW());

INSERT INTO question_options (question_id, text, created_at, updated_at)
VALUES
(219, 'pressure to charge students higher tuition fees', NOW(), NOW()),
(219, 'conflicts between university administrators and government funders',  NOW(), NOW()),
(219, 'decrease in student enrollment worldwide',  NOW(), NOW()),
(219, 'outdated library and lab resources',  NOW(), NOW()),
(219, 'shortage of qualified academic staff',  NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(15, '<b>Questions 25-26 </b><br>Choose <b>TWO</b> letters', 'static', 26, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(15, 'What are TWO possible solutions proposed by reformists or conservatives?', 'checkbox', 27, 25, NULL, NOW(), NOW());

INSERT INTO question_options (question_id, text, created_at, updated_at)
VALUES
(221, 'Expanding the use of internet-based tuition and private universities.', NOW(), NOW()),
(221, 'Replacing university professors with business professionals.',  NOW(), NOW()),
(221, 'Returning to traditional academic values and subjects.',  NOW(), NOW()),
(221, 'Focusing all education on job-specific training only',  NOW(), NOW()),
(221, 'Closing traditional campuses to save costs.',  NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(16, '<b>Questions 27-30 </b><br>For each question, only ONE of the choices is correct.<br>Write the corresponding letter in the appropriate box on your answer sheet.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(16, 'According to the diaries, in 1961, women rarely had free time on Sunday', 'mcq', 2, 27, NULL, NOW(), NOW()),
(16, 'People want to do more on Sundays because', 'mcq', 3, 28, NULL, NOW(), NOW()),
(16, 'Shopping habits have changed since 1961 in that', 'mcq', 4, 29, NULL, NOW(), NOW()),
(16, 'Compared with 1961,', 'mcq', 5, 30, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(223, '(A) mornings', NOW(), NOW()),
(223, '(B) afternoons', NOW(), NOW()),
(223, '(C) evenings', NOW(), NOW()),
(224, '(A) more shops are open.', NOW(), NOW()),
(224, '(B) it is a good day to graze', NOW(), NOW()),
(224, '(C) they are tired on Saturdays', NOW(), NOW()),
(225, '(A) people shop less at weekends.', NOW(), NOW()),
(225, '(B) men shop more than women', NOW(), NOW()),
(225, '(C) men do as much shopping as women.', NOW(), NOW()),
(226, '(A) women do far less housework on Sundays.', NOW(), NOW()),
(226, '(B) men do far less housework on Sundays.', NOW(), NOW()),
(226, '(C) men and women do far less housework on Sundays', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(16, '<b>Questions 31-35 </b><br>Complete the sentences below <b> USING NO MORE THAN THREE WORDS </b> from the text for each gap.', 'static', 6, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(16, 'Professor Gershuny discovered thousands of ___ at the BBC.', 'fill_blank', 7, 31, NULL, NOW(), NOW()),
(16, 'In 1961, people ate ___ tat 5 or 6 o’clock.', 'fill_blank', 8, 32, NULL, NOW(), NOW()),
(16, 'In 2001, people spent ___ 50 minutes on shopping on Sundays.', 'fill_blank', 9, 33, NULL, NOW(), NOW()),
(16, 'Shopping is something that is not as ___  as it was in 1961', 'fill_blank', 10, 34, NULL, NOW(), NOW()),
(16, 'In 1961, men would often go for a drink or be ___  before lunch.', 'fill_blank', 11, 35, NULL, NOW(), NOW());
INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(16, '<b>Questions 36-40 </b><br>Do the following statements agree with the information given in Reading Passage 3?<br>In boxes 36-40 on your answer sheet, write<br>TRUE --- if the statement agrees with the information<br>FALSE --- if the statement contradicts the information.<br>NOT GIVEN --- If there is no information on this', 'static', 12, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(16, 'Mr. Atchison usually eats out.', 'select', 13, 36, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(16, 'Mrs. Hallows’ husband does no household chores on Sundays.', 'select', 14, 37, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(16, 'Mrs. Hallows thinks the shops are too busy on Sundays.', 'select', 15, 38, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(16, 'Mr. Jones is a widower.', 'select', 16, 39, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW()),
(16, 'Mr. Jones does household chores on Sundays.', 'select', 17, 40, '{"options":["TRUE","FALSE","NOT GIVEN"]}', NOW(), NOW());

