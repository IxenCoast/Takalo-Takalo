Create database Takalo;
use Takalo;

CREATE TABLE User 
(
    iduser varchar(200) primary key  auto_increment not null,
    Email varchar(200),
    Mot_de_passe varchar(200)
);
INSERT INTO User VALUES 
(
    null,
    "Niaro000@gmail.com",
    "Niaro000"
);

INSERT INTO User VALUES 
(
    null,
    "Niando123@gmail.com",
    "Niando123"
);

INSERT INTO User VALUES 
(
    null,
    "Cedric345@gmail.com",
    "Cedric345"
);