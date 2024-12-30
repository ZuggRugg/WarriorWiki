CREATE DATABASE IF NOT EXISTS main;


CREATE TABLE users (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL,
password VARCHAR(255) NOT NULL,
permissions BIT
) ENGINE = 'innoDB' DEFAULT;


CREATE TABLE articles (
article_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY;
article_title VARCHAR(70),
article_content MEDIUMBLOB,
tags VARCHAR(50)
) ENGINE = 'innoDB' DEFAULT;


CREATE TABLE tags (
tag_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
tag_name VARCHAR(50),
FOREIGN KEY (tags) REFERENCES tags(tag_name)
) ENGINE = 'innoDB' DEFAULT;


INSERT INTO users (id, username, password, permissions) 
(1, "Administrator", "password", 1),
(2, "Shayne", "password", 0);
