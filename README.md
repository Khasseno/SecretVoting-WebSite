# SecretVoting-WebSite

This website was created like educational project and the main goal of this website is anonymous voting. Project writed on PHP, like local server i used MAMP, in DB role - MYSQL 

For correct work you need to change variables inside "vendor/connect.php". This file need for connect with data base. You need to write your parametrs of Data base.

Project work with 2 tables in DB: "users" and "votes".
Table "users" need to keep information about users: logins, passwords, email, group, vote this user or not.
Table "votes" stores amount of vote for any group.

For create this tables you can use: 

**Create "users" table**:

CREATE TABLE \`users\` (
  \`id\` int(9) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  \`login\` varchar(32) NOT NULL,
  \`password\` varchar(32) NOT NULL,
  \`email\` varchar(32) NOT NULL,
  \`group\` varchar(10) NOT NULL,
  \`vote\` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

**Create "votes" table**:

CREATE TABLE \`votes\` (
  \`groupName\` varchar(10) NOT NULL,
  \`votes\` int(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

And you need to fill this table with standart values

INSERT INTO \`votes\` (\`groupName\`, \`votes\`) VALUES
('groupOne', 0),
('groupTwo', 0),
('groupThree', 0),
('groupFour', 0),
('groupFive', 0),
('groupSix', 0);
