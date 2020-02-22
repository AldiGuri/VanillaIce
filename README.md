CREATE TABLE users (
id int(20) AUTO_INCREMENT PRIMARY KEY NOT NULL,
name TINYTEXT NOT NULL,
pwd TINYTEXT NOT NULL,
about LONGTEXT NOT NULL
);

INSERT INTO `users`(`name`, `pwd`, `about`) VALUES ("user","user","about user");

INSERT INTO `users`(`name`, `pwd`, `about`) VALUES ("admin","admin","about admin")
