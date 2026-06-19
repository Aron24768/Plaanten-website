CREATE DATABASE IF NOT EXISTS Wordbloemetjesbeunhaas;
USE Wordbloemetjesbeunhaas;
 
CREATE TABLE IF NOT EXISTS accounts (
  username varchar(50)  NOT NULL PRIMARY KEY,
  password varchar(255)  NOT NULL,
  name     varchar(100) NOT NULL,
  email    varchar(100) NOT NULL UNIQUE
);
 