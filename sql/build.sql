DROP DATABASE IF EXISTS talk2me;
CREATE DATABASE talk2me;
USE talk2me;

CREATE TABLE words (
    wordID      INT(11)      NOT NULL    AUTO_INCREMENT,
    wordName    VARCHAR(50)  NOT NULL,
    location    VARCHAR(100) NOT NULL,
    PRIMARY KEY (wordID)
);

INSERT INTO words VALUES 
(DEFAULT, 'hello', 'soundbites/hello'),
(DEFAULT, 'there', 'soundbites/there');

GRANT SELECT, INSERT, DELETE, UPDATE
ON talk2me.*
TO user1@localhost
IDENTIFIED BY 'pass';