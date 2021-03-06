DROP DATABASE IF EXISTS camagru ;

CREATE DATABASE camagru;
USE camagru ;

CREATE TABLE T_USERS (
    -- USER_ID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    USER_LOGIN VARCHAR(32) NOT NULL PRIMARY KEY,
    USER_PASSWORD VARCHAR(255) NOT NULL,
    USER_EMAIL VARCHAR(128) NOT NULL,
    USER_DATE DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    USER_UPDATE DATETIME NULL

) ;

CREATE TABLE T_IMAGES (
    IMG_ID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    IMG_PATH VARCHAR(255) NOT NULL,
    USER_LOGIN VARCHAR(32) NOT NULL,
    REV_ID  INT(10) NOT NULL,
    IMG_DATE DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_img_user FOREIGN KEY(USER_LOGIN) REFERENCES T_USERS(USER_LOGIN)
) ;


CREATE TABLE T_REVIEWS (
    REV_ID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    REV_TEXT VARCHAR(255) NOT NULL,
    USER_LOGIN VARCHAR(32) NOT NULL,
    IMG_ID INT(10) NOT NULL,
    REV_DATE DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT fk_rev_user FOREIGN KEY(USER_LOGIN) REFERENCES T_USERS(USER_LOGIN),
    CONSTRAINT fk_rev_img FOREIGN KEY(IMG_ID) REFERENCES T_IMAGES(IMG_ID)
) ;

ALTER TABLE T_IMAGES
ADD CONSTRAINT fk_img_rev FOREIGN KEY(REV_ID) REFERENCES T_REVIEWS(REV_ID);
