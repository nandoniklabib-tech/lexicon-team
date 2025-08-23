INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, '<b>Questions 1-2</b><br>Choose the correct letter A–C.<br>Example: <br>The customer went to South Africa <br>A. last month <br> B. last week <br> C. last year.', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, 'The travel agent:', 'mcq', 2, 1, NULL, NOW(), NOW()),
(1, 'The customer:', 'mcq', 3, 2, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(2, '(A) thinks Europe is a good destination', NOW(), NOW()),
(2, '(B) can personally recommend Vancouver', NOW(), NOW()),
(2, '(C) does not think America is a good choice.', NOW(), NOW()),
(3, '(A) is going to Europe next year', NOW(), NOW()),
(3, '(B) knows people living in Canada', NOW(), NOW()),
(3, '(C) wants to go to the warmest place', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, '<b>Questions 3-6</b> <br> Complete the form using <b>NO MORE THAN TWO WORDS OR A NUMBER.<br><br>The Travel Depot flight reservations
</b>', 'static', 4, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, 'Customer’s name:', 'static', 5, NULL, '{"table_no":1,"row":1,"col":1}', NOW(), NOW()),
(1, 'Jim ___', 'fill_blank', 6, 3, '{"table_no":1,"row":1,"col":2}', NOW(), NOW()),
(1, 'Address', 'static', 7, NULL, '{"table_no":1,"row":2,"col":1}', NOW(), NOW()),
(1, '10 Allen Road, Oldham', 'static', 8, NULL, '{"table_no":1,"row":2,"col":2}', NOW(), NOW()),
(1, 'Destination', 'static', 9, NULL, '{"table_no":1,"row":3,"col":1}', NOW(), NOW()),
(1, 'Vancouver, Canada', 'static', 10, NULL, '{"table_no":1,"row":3,"col":2}', NOW(), NOW()),
(1, 'Contact number:', 'static', 11, NULL, '{"table_no":1,"row":4,"col":1}', NOW(), NOW()),
(1, '0151___ (home number)', 'fill_blank', 12, 4, '{"table_no":1,"row":4,"col":2}', NOW(), NOW()),
(1, 'Flight number', 'static', 13, NULL, '{"table_no":1,"row":5,"col":1}', NOW(), NOW()),
(1, '___', 'fill_blank', 14, 5, '{"table_no":1,"row":5,"col":2}', NOW(), NOW()),
(1, 'Length of stay (nights):', 'static', 15, NULL, '{"table_no":1,"row":6,"col":1}', NOW(), NOW()),
(1, '___', 'fill_blank', 16, 6, '{"table_no":1,"row":6,"col":2}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, '<b>Questions 7-10 </b><br>Complete the sentences below <b> USING NO MORE THAN TWO WORDS OR A NUMBER </b>', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(1, 'The travel agent recommends some form of ___ cover for peace of mind.', 'fill_blank', 18, 7, NULL, NOW(), NOW()),
(1, 'There are two types of cover, but the best cover is offered with the ___ Star policy.', 'fill_blank', 19, 8, NULL, NOW(), NOW()),
(1, 'The client can see a play at the theatre for $ ___', 'fill_blank', 20, 9, NULL, NOW(), NOW()),
(1, 'The flight and the insurance together cost £ ___', 'fill_blank', 21, 10, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(2, '<b>Questions 11-15</b><br>Select the correct answers<br>', 'static', 1, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(2, 'Who is the speaker addressing?', 'mcq', 2, 11, NULL, NOW(), NOW()),
(2, 'Rental property in the city…', 'mcq', 3, 12, NULL, NOW(), NOW()),
(2, 'Lisa Brown believes…', 'mcq', 4, 13, NULL, NOW(), NOW()),
(2, 'Property in the countryside is becoming more popular because…', 'mcq', 5, 14, NULL, NOW(), NOW()),
(2, 'What kind of properties does the speaker specialise in?', 'mcq', 6, 15, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(23, 'Property agents', NOW(), NOW()),
(23, 'People selling houses', NOW(), NOW()),
(23, 'People in the countryside', NOW(), NOW()),
(23, 'People buying second homes', NOW(), NOW()),
(24, 'is very easy to find', NOW(), NOW()),
(24, 'is becoming more difficult to find', NOW(), NOW()),
(24, 'is an investment opportunity', NOW(), NOW()),
(24, 'is often the only option', NOW(), NOW()),
(25, 'most people will own their own home at some time', NOW(), NOW()),
(25, 'there is a psychological factor involved in owning your own home', NOW(), NOW()),
(25, 'fewer people are interested in owning a house', NOW(), NOW()),
(25, 'most young people need a deposit before they can buy a house.', NOW(), NOW()),
(26, 'people want to get away from the city', NOW(), NOW()),
(26, 'some parts of the city are becoming overcrowded', NOW(), NOW()),
(26, 'the concept of the home office means that some people don"t need to go into work', NOW(), NOW()),
(26, 'public transport is beginning to serve outlying areas.', NOW(), NOW()),
(27, 'Commercial', NOW(), NOW()),
(27, 'Investment', NOW(), NOW()),
(27, 'First homes', NOW(), NOW()),
(27, 'Rural', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(2, '<b>Questions 16-20</b><br>Answer the following questions USING <b>NO MORE THAN THREE WORDS OR A NUMBER</b><br>What end of the market are the properties?', 'static', 7, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(2, 'What end of the market are the properties? ___', 'fill_blank', 8, 16, NULL, NOW(), NOW()),
(2, 'What does the speaker compare buying houses with? ___','fill_blank', 9, 17, NULL, NOW(), NOW()),
(2, 'What kind of equity can be the result of buying a property when the market is high? ___', 'fill_blank', 10, 18, NULL, NOW(), NOW()),
(2, 'How does she describe the feeling of successful property investment? ___', 'fill_blank', 11, 19, NULL, NOW(), NOW()),
(2, 'How can you ask the speaker a question? ___', 'fill_blank', 12, 20, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(2, '<b>Questions 21-24</b><br>Answer the following questions USING <b>NO MORE THAN THREE WORDS OR A NUMBER</b><br>', 'static', 13, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(3, 'How long is the radio show? ___', 'fill_blank', 14, 21, NULL, NOW(), NOW()),
(3, 'What is the general focus of the programme?___','fill_blank', 15, 22, NULL, NOW(), NOW()),
(3, 'Where is Professor Ripley from? ___', 'fill_blank', 16, 23, NULL, NOW(), NOW()),
(3, 'According to Professor Ripley, what animals do people most associate with the African bush? ___', 'fill_blank', 17, 24, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(3, '<b>Questions 25-28</b> <br> Complete the form using <b>NO MORE THAN TWO WORDS OR A NUMBER.</b><br>', 'static',18 , NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(3, '', 'static',19 , NULL, '{"table_no":2,"row":1,"col":1}', NOW(), NOW()),
(3, 'Threats', 'static',20 , NULL, '{"table_no":2,"row":1,"col":2}', NOW(), NOW()),
(3, 'Natural habitat', 'static', 21, NULL, '{"table_no":2,"row":1,"col":3}', NOW(), NOW()),
(3, 'Population', 'static', 22, NULL, '{"table_no":2,"row":1,"col":4}', NOW(), NOW()),
(3, 'African lions', 'static', 23, NULL, '{"table_no":2,"row":2,"col":1}', NOW(), NOW()),
(3, '', 'static', 24, NULL, '{"table_no":2,"row":2,"col":2}', NOW(), NOW()),
(3, 'bush', 'static', 25, NULL, '{"table_no":2,"row":2,"col":3}', NOW(), NOW()),
(3, 'Estimated to be ___', 'fill_blank', 26, 25, '{"table_no":2,"row":2,"col":4}', NOW(), NOW()),
(3, 'Tigers', 'static', 27, NULL, '{"table_no":2,"row":3,"col":1}', NOW(), NOW()),
(3, '___', 'fill_blank', 28, 26, '{"table_no":2,"row":3,"col":2}', NOW(), NOW()),
(3, 'forests and plains', 'static', 29, NULL, '{"table_no":2,"row":3,"col":3}', NOW(), NOW()),
(3, 'ewer than ___', 'fill_blank', 30, 27, '{"table_no":2,"row":3,"col":4}', NOW(), NOW()),
(3, 'Snow leopards', 'static', 31, NULL, '{"table_no":2,"row":4,"col":1}', NOW(), NOW()),
(3, 'Expansion of ___', 'fill_blank', 32, 28, '{"table_no":2,"row":4,"col":2}', NOW(), NOW()),
(3, 'high-altitude pastures', 'static', 33, NULL, '{"table_no":2,"row":4,"col":3}', NOW(), NOW()),
(3, '', 'static', 34, NULL, '{"table_no":2,"row":4,"col":4}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(3, '<b>Questions 29-30</b><br>Circle the appropriate answer<br>', 'static', 35, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(3, 'Where is the WWF currently funding projects to help the snow leopard?', 'mcq', 36, 29, NULL, NOW(), NOW()),
(3, 'Listeners should telephone', 'mcq', 37, 30, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(57, 'Nepal, Pakistan and Bhutan', NOW(), NOW()),
(57, 'Nepal and Pakistan', NOW(), NOW()),
(57, 'Bhutan and Nepal', NOW(), NOW()),
(57, 'Pakistan and Bhutan', NOW(), NOW()),
(58, 'immediately if they want to put forward an opinion', NOW(), NOW()),
(58, 'during the commercial break', NOW(), NOW()),
(58, 'in 10 minutes if they have anything they want to ask the professor', NOW(), NOW()),
(58, 'if they have any information regarding pumas or jaguars.', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, '<b>Questions 31</b><br>Circle the appropriate answer<br>', 'static', 38, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, 'The students are expecting', 'mcq', 36, 29, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(60, 'to hear a lecture on overpopulation', NOW(), NOW()),
(60, 'Mr Mackenzie', NOW(), NOW()),
(60, 'a guest speaker', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, '<b>Questions 32-36</b> <br> Complete the form using <b>NO MORE THAN TWO WORDS OR A NUMBER.</b><br>', 'static',37, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, '42 million adults ___', 'fill_blank',38, 32, '{"table_no":3,"row":1,"col":1}', NOW(), NOW()),
(4, '50 million adults have the reading ability of a ___ year-old.', 'fill_blank',39, 33, '{"table_no":3,"row":2,"col":1}', NOW(), NOW()),
(4, 'Increasing by around ___  and a quarter million per year. Illiteracy costs', 'fill_blank',40, 34, '{"table_no":3,"row":3,"col":1}', NOW(), NOW()),
(4, '', 'static',41, NULL, '{"table_no":3,"row":4,"col":1}', NOW(), NOW()),
(4, 'Unemployment', 'static', 42, NULL, '{"table_no":3,"row":4,"col":2}', NOW(), NOW()),
(4, 'Unrealised earnings', 'static', 43, NULL, '{"table_no":3,"row":4,"col":3}', NOW(), NOW()),
(4, 'Literacy programmes', 'static', 44, NULL, '{"table_no":3,"row":4,"col":4}', NOW(), NOW()),
(4, 'cost (in billions of US dollars)', 'static', 45, NULL, '{"table_no":3,"row":5,"col":1}', NOW(), NOW()),
(4, '$ ___', 'fill_blank', 46, 35, '{"table_no":3,"row":5,"col":2}', NOW(), NOW()),
(4, '237', 'static', 47, NULL, '{"table_no":3,"row":5,"col":3}', NOW(), NOW()),
(4, '$ ___', 'fill_blank', 48, 36, '{"table_no":3,"row":5,"col":4}', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, '<b>Questions 37</b><br>Circle the appropriate answer<br>', 'static', 49, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, 'Illiteracy is increasing because many young learners are', 'mcq', 50, 37, NULL, NOW(), NOW());

INSERT INTO question_options(question_id, text, created_at, updated_at)
VALUES
(74, 'not being taught how to break words into sounds', NOW(), NOW()),
(74, 'given word lists which are too long', NOW(), NOW()),
(74, 'not challenged enough in the classroom.', NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, '<b>Questions 38-40</b><br>Answer the following questions USING <b>NO MORE THAN THREE WORDS OR A NUMBER</b><br>', 'static', 51, NULL, NULL, NOW(), NOW());

INSERT INTO questions (question_group_id, text, type, order_no, question_no, meta_data, created_at, updated_at)
VALUES
(4, 'English is made up of 26 letters, with 44 ___', 'fill_blank', 52, 38, NULL, NOW(), NOW()),
(4, 'and 70 ways of ___ .','fill_blank', 53, 39, NULL, NOW(), NOW()),
(4, 'Unsuccessful teaching practices persist, however, because reading is ___', 'fill_blank', 54, 40, NULL, NOW(), NOW());

