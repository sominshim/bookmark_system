CREATE TABLE `user` (
	`username`	varchar(16)	NOT NULL,
	`email`	varchar(100)	NOT NULL,
	`pwd`	char(40)	NOT NULL
);

CREATE TABLE `bookmark` (
	`bm_URL`	varchar(255)	NOT NULL,
	`username`	varchar(16)	NOT NULL
);

ALTER TABLE `user` ADD CONSTRAINT `PK_USER` PRIMARY KEY (
	`username`
);

ALTER TABLE `bookmark` ADD CONSTRAINT `PK_BOOKMARK` PRIMARY KEY (
	`bm_URL`
);
-- create table user (username varchar(16) NOT NULL,
--     email varchar(100) NOT NULL,
--     pwd char(40) NOT NULL,   
--     PRIMARY KEY (username));