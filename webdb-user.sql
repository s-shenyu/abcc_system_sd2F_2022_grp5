CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_createdate` date NOT NULL,
  `user_changedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000008;