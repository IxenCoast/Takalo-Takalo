drop database takalo;
create DATABASE takalo;
use takalo;

CREATE TABLE utilisateur(idu int AUTO_INCREMENT PRIMARY key, nom varchar(255), mail varchar(255), mdp varchar(255));

insert into utilisateur values (null, "Admin", "a@r.c", "root");
insert into utilisateur values (null, "Koto", "konto@r.c", "oui");
insert into utilisateur values (null, "Bojo", "bojo@r.c", "1234");
insert into utilisateur values (null, "Tax", "tax@r.c", "0000");
insert into utilisateur values (null, "Robs", "robs@r.c", "1000");

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


create TABLE produit(idp int PRIMARY key AUTO_INCREMENT, nom varchar(255), idu int, idc int ,img varchar(255), FOREIGN key (idu) REFERENCES utilisateur(idu), FOREIGN key (idc) REFERENCES categorie(idc));
INSERT INTO produit VALUES
(
    null,
    "iphone 12 pro max",
    1,
    1,
    "image1"
);
INSERT INTO produit VALUES
(
    null,
    "iphone 14 pro max",
    2,
    1,
    "image2"
);
INSERT INTO produit VALUES
(
    null,
    "samsung S22",
    2,
    1,
    "image3"
);
INSERT INTO produit VALUES
(
    null,
    "Redmi note 12 pro",
    3,
    1,
    "image4"
);
INSERT INTO produit VALUES
(
    null,
    "Asus",
    1,
    2,
    "image5"
);
INSERT INTO produit VALUES
(
    null,
    "MacOS",
    2,
    2,
    "image6"
);
INSERT INTO produit VALUES
(
    null,
    "Dell",
    3,
    2,
    "image7"
);
INSERT INTO produit VALUES
(
    null,
    "Nike TN",
    1,
    3,
    "image8"
);
INSERT INTO produit VALUES
(
    null,
    "Adidas",
    2,
    3,
    "image9"
);
INSERT INTO produit VALUES
(
    null,
    "Air jord",
    3,
    3,
    "image10"
);
INSERT INTO produit VALUES
(
    null,
    "T-shirt",
    1,
    4,
    "image11"
);
INSERT INTO produit VALUES
(
    null,
    "Patalon",
    2,
    4,
    "image12"
);
INSERT INTO produit VALUES
(
    null,
    "T-shirt jord",
    3,
    4,
    "image13"
);
INSERT INTO produit VALUES
(
    null,
    "Lambourghini",
    1,
    5,
    "image14"
);
INSERT INTO produit VALUES
(
    null,
    "ferrari",
    2,
    5,
    "image15"
);
INSERT INTO produit VALUES
(
    null,
    "Mazda CX5",
    3,
    5,
    "image16"
);
