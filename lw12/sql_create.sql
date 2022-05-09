-- CREATE DATABASE university;
USE university;

CREATE TABLE faculty
(
	id					INT AUTO_INCREMENT	NOT	NULL,
	name_faculty		VARCHAR(255)		NOT NULL,
	PRIMARY KEY (id)
)	DEFAULT CHARACTER SET utf8mb4
	COLLATE 'utf8mb4_unicode_ci'
    ENGINE = InnoDB
;

CREATE TABLE class
(
	id					INT AUTO_INCREMENT	NOT	NULL,
    name_class			VARCHAR(255)		NOT NULL,
	name_faculty		VARCHAR(255)		NOT NULL,
	PRIMARY KEY (id)
)	DEFAULT CHARACTER SET utf8mb4
	COLLATE 'utf8mb4_unicode_ci'
    ENGINE = InnoDB
;

CREATE TABLE student
(
	id					INT AUTO_INCREMENT	NOT	NULL,
    name				VARCHAR(255)		NOT NULL,
	surename			VARCHAR(255)		NOT NULL,
	age					INT					NOT NULL,
    name_class			VARCHAR(255)		NOT NULL,
    PRIMARY KEY (id)
)	DEFAULT CHARACTER SET utf8mb4
	COLLATE 'utf8mb4_unicode_ci'
    ENGINE = InnoDB
;

-- DROP DATABASE university;
SHOW DATABASES;
-- SELECT * FROM facult;