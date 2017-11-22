DROP DATABASE pharmacie;
CREATE DATABASE pharmacie;
USE pharmacie;


CREATE TABLE employers(
   id       INT             NOT NULL,
   nom      VARCHAR (20)    NOT NULL,
   prenom   VARCHAR (20)    NOT NULL,
   email    VARCHAR (100)   NOT NULL,
   password VARCHAR (30)    NOT NULL,
   admin    BOOLEAN         NOT NULL default 0,
   PRIMARY KEY (id)
);