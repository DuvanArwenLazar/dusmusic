CREATE DATABASE dusmusic;
USE dusmusic;

CREATE TABLE user_dus (
    id_u int(11),
    email_u varchar(55) UNIQUE,
    password_u varchar(255),
    username_u varchar(255),
    birthday_u varchar(20), 
    sex_u varchar(12),
    date_u date DEFAULT CURRENT_TIMESTAMP,

    PRIMARY KEY(id_u)
)