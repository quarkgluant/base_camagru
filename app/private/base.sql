CREATE TABLE users (
    USER_ID int(10) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
    USER_LOGIN varchar(32) NOT NULL UNIQUE KEY,
    USER_PASSWORD varchar(255) NOT NULL,
    USER_EMAIL varchar(128) NOT NULL
) ;
