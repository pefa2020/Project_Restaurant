-- create and select the database
CREATE DATABASE restaurant;
USE restaurant;  -- MySQL command

-- create the tables
CREATE TABLE menuCategories (
  menuCategoryID     INT(11)        NOT NULL   AUTO_INCREMENT,
  menuCategoryName   VARCHAR(255)   NOT NULL,
  PRIMARY KEY (menuCategoryID)
);

CREATE TABLE dishes (
  dishID             INT(11)        NOT NULL   AUTO_INCREMENT,
  menuCategoryID     INT(11)        NOT NULL,
  dishCode           VARCHAR(10)    NOT NULL   UNIQUE,
  dishName           VARCHAR(255)   NOT NULL,
  description        TEXT           NOT NULL,
  price              DECIMAL(10,2)  NOT NULL,
  dateAdded          DATETIME       NOT NULL,
  PRIMARY KEY (dishID)
);

CREATE TABLE customers (
  customerID         INT            NOT NULL   AUTO_INCREMENT,
  firstName          VARCHAR(60)    NOT NULL,
  lastName           VARCHAR(60)    NOT NULL,
  emailAddress       VARCHAR(255)   NOT NULL   UNIQUE,
  streetAddress      VARCHAR(60)    NOT NULL,
  city               VARCHAR(40)    NOT NULL,
  state              VARCHAR(2)     NOT NULL,
  zipCode            VARCHAR(10)    NOT NULL,
  reference          VARCHAR(60)    NOT NULL,
  dateAdded          DATETIME       NOT NULL,
  PRIMARY KEY (customerID)
);