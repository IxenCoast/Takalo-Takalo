drop database takalo;
create DATABASE takalo;
use takalo;

CREATE TABLE user(idu int AUTO_INCREMENT PRIMARY key, mail varchar(255), mdp varchar(255));

create table categorie(idc int primary key not null AUTO_INCREMENT , nom varchar(255));
INSERT INTO categorie VALUES
(
    null,
    "phone"
);
INSERT INTO categorie VALUES
(
    null,
    "ordinateur"
);
INSERT INTO categorie VALUES
(
    null,
    "Chaussure"
);
INSERT INTO categorie VALUES
(
    null,
    "Vetement"
);
INSERT INTO categorie VALUES
(
    null,
    "Voiture"
);


create TABLE produit(idp int PRIMARY key not null, nom varchar(255), idu int, idc int ,img varchar(255), FOREIGN key (idu) REFERENCES user(idu), FOREIGN key (idc) REFERENCES categorie(idc));

INSERT INTO USER VALUE (NULL,'admin','admin@gmail.com','0000');