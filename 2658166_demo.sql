

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_from` int(11) NOT NULL,
  `message_to` int(11) NOT NULL,
  `message_content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;


INSERT INTO messages VALUES
("10","8","5","this message was sent from test to you HOSSAM"),
("11","6","5","hello test"),
("12","6","6","hello i am");




CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;


INSERT INTO users VALUES
("5","hossam","h@h.h","df2852a2b39ef0790c7acc806cdaca35","2018-03-15 17:03:39"),
("6","hussien","hussien.mohamed13@yahoo.com","e10adc3949ba59abbe56e057f20f883e","2018-03-15 17:10:16"),
("7","hasan","hasan@gmai.com","f5bb0c8de146c67b44babbf4e6584cc0","2018-03-16 11:51:31"),
("8","test","test@test.test","098f6bcd4621d373cade4e832627b4f6","2018-03-17 16:28:09"),
("9","mallam","mohmed.allam2011@gmail.com","2019363f1fcfe907edbfedfcccd4e9ad","2018-03-17 21:05:52");


