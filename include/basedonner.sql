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

CREATE TABLE Medicaments(
   id           INT             NOT NULL,
   nom          VARCHAR (20)    NOT NULL,
   ref          VARCHAR (5)     NOT NULL,
   form         VARCHAR (15)    NOT NULL,
   prix_achat   INT             NOT NULL,
   prix_vente   FLOAT(7,2)      NOT NULL,
   prix_vente   FLOAT(7,2)      NOT NULL,
   qte          INT             UNSIGNED NOT NULL,
   aille        INT(3)          UNSIGNED,
   col          INT(3)          UNSIGNED,
   etage        INT(3)          UNSIGNED,
   expiration   DATE            NOT NULL,
   description  TEXT,
   PRIMARY KEY (id)
);