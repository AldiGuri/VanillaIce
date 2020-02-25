CREATE TABLE users (
id int(20) AUTO_INCREMENT PRIMARY KEY NOT NULL,
name TINYTEXT NOT NULL,
pwd TINYTEXT NOT NULL,
about LONGTEXT NOT NULL
);

CREATE TABLE `msg` (
`name` varchar(256) NOT NULL,
`email` varchar(256) NOT NULL,
`subject` text NOT NULL,
`message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users`(`name`, `pwd`, `about`) VALUES ("user","user","about user");

INSERT INTO `users`(`name`, `pwd`, `about`) VALUES ("admin","admin","about admin")
