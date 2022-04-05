<?php
CREATE DATABASE users;
CREATE TABLE `users` ( `id` INT(11) NOT NULL AUTO_INCREMENT, `name` VARCHAR(255) NULL DEFAULT NULL, 
`age` VARCHAR(255) NULL DEFAULT NULL, `email` VARCHAR(255) NULL DEFAULT NULL, `created` DATETIME NULL DEFAULT NULL,
 PRIMARY KEY (`id`) ) COLLATE = 'latin1_swedish_ci' ENGINE = InnoDB AUTO_INCREMENT = 1;
INSERT INTO
   `users` (`id`, `name`, `age`, `email`, `created`) 
VALUES
   (
      NULL, 'ajay', '27', 'ajay@mail.com', NULL
   )
, 
   (
      NULL, 'abhay', '23', 'abhay@mail.com', NULL
   )
;
?>