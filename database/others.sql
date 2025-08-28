insert into sections(mock_test_id,name,order_no,duration,updated_at,created_at)
values
(3,'Listening',1,30,now(),now()),
(3,'Reading',2,60,now(),now()),
(3,'Writing',2,60,now(),now());
insert into question_groups(section_id,title,description,media_file,updated_at,created_at)
values
(7,'listening part 1','listening part 1',null,now(),now()),
(7,'listening part 2','listening part 2',null,now(),now()),
(7,'listening part 3','listening part 3',null,now(),now()),
(7,'listening part 4','listening part 4',null,now(),now()),
(8,'reading part 1','reading part 1',null,now(),now()),
(8,'reading part 2','reading part 2',null,now(),now()),
(8,'reading part 1','reading part 3',null,now(),now()),
(9,'writing part 1','writing part 1',null,now(),now()),
(9,'writing part 2','writing part 2',null,now(),now());


INSERT INTO writing_passages (question_group_id, title, content,created_at, updated_at)
VALUES
(9,NULL,'You should spend about 40 minutes on this task.<br>Some people think that physical strength is important for success in sport, while other people think that mental strength is more important.<br> Discuss both views and give your own opinion.<br>You should write at least 250 words.',NOW(),NOW());