drop database takalo;
create DATABASE takalo;
use takalo;

CREATE TABLE utilisateur(idu int AUTO_INCREMENT PRIMARY key, nom varchar(255), mail varchar(255), mdp varchar(255));

insert into utilisateur values (null, "Anja", "anja@moov.mg", "root");
insert into utilisateur values (null, "Koto", "koto@moov.mg", "oui");
insert into utilisateur values (null, "Bakoly", "bakoly@moov.mg", "1234");
insert into utilisateur values (null, "Tanjona", "tanjona@moov.mg", "0000");
insert into utilisateur values (null, "Robin", "robin@moov.mg", "1000");
insert into utilisateur values (null, "Admin", "root@moov.mg", "root");

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


create TABLE produit(idp int PRIMARY key AUTO_INCREMENT, nom varchar(255), idu int, idc int ,img varchar(255),title VARCHAR(250) , Description  VARCHAR(250), prix int, FOREIGN key (idu) REFERENCES utilisateur(idu), FOREIGN key (idc) REFERENCES categorie(idc));
INSERT INTO produit VALUES
(
    null,
    "iphone 12 pro max",
    1,
    1,
    "image1",
    "IPHONE 12 PRO MAX",
    "L'iPhone 12 Pro Max est le modèle grand-format haut de gamme de la 14e génération de smartphone d'Apple annoncé le 13 octobre 2020. Il est équipé d'un écran de 6,7 pouces OLED HDR 60 Hz, d'un triple capteur photo avec ultra grand-angle et téléobjectif (x5 optique) et d'un SoC Apple A14 Bionic compatible 5G (sub-6 GHz).",
    2000000
);
INSERT INTO produit VALUES
(
    null,
    "iphone 14 pro max",
    2,
    1,
    "image2",
    "IPHONE 14 PRO MAX",
    "Ultra lumineux et équipé de la fonctionnalité always-on, l'iPhone 14 Pro Max propose une super dalle OLED de 6,7 pouces. Il embarque également un nouveau module caméra, avec un nouvel ultra-grand-angle, un zoom optique x3 et, surtout, un capteur de 48 Mpx.",
    2500000
);
INSERT INTO produit VALUES
(
    null,
    "samsung S22",
    2,
    1,
    "image3",
    "SAMSUNG S22",
    "Le Samsung Galaxy S22 est l'un 3 smartphones de la gamme Galaxy S22 annoncé le 9 février 2022. Il est équipé d'un SoC Exynos 2200 épaulé par 8 Go de RAM et 128 ou 256 Go de stockage. Il est équipé d'un écran AMOLED 120 Hz de 6,1 pouces et d'un triple capteur photo polyvalent de 50+10+12 mégapixels.",
    1200000
);
INSERT INTO produit VALUES
(
    null,
    "Redmi note 12 pro",
    3,
    1,
    "image4",
    "REDMI NOTE 12 PRO",
    "Le Xiaomi 12 Pro, version plus musclée de la famille Xiaomi 12 annoncée en 2021 est un smartphone haut de gamme muni d'un écran AMOLED de 6,73 pouces rafraîchi à 120 Hz adaptatif et animé par un SoC Qualcomm Snapdragon 8 Gen1 et jusqu'à 12 Go de RAM ainsi que jusqu'à 256 Go de stockage."
    ,10000
);
INSERT INTO produit VALUES
(
    null,
    "Asus",
    1,
    2,
    "image5",
    "ASSUS",
    "Le ASUS Laptop incarne l'alliance de nouvelles technologies avec une grande variété de fonctionnalités simples d'utilisation. À la portée de tous, il se décline par ailleurs en plusieurs coloris différents.",
    140000
);
INSERT INTO produit VALUES
(
    null,
    "MacOS",
    2,
    2,
    "image6",
    "MACOS",
    "macOS est le système d’exploitation qui fait battre le cœur de chaque Mac. Il permet de réaliser des choses qui seraient impossibles sur d’autres ordinateurs. Parce qu’il est conçu pour le matériel qui l’accueille, et inversement. macOS intègre une panoplie d’apps ultra‑performantes, toutes élaborées avec le plus grand soin. Il fonctionne aussi parfaitement avec iCloud pour assurer la synchronisation de vos photos, documents et autres contenus sur tous vos appareils.",
    2909000
);
INSERT INTO produit VALUES
(
    null,
    "Dell",
    3,
    2,
    "image7",
    "DELL",
    "Dell Technologies, Inc est une entreprise américaine troisième plus grand constructeur d'ordinateurs au monde en 2012 derrière Hewlett-Packard et Lenovo4."
    ,109000);
INSERT INTO produit VALUES
(
    null,
    "Nike TN",
    1,
    3,
    "image8",
    "NIKE TN",
    "La Nike Air Max Plus est une sneaker fabriquée et commercialisée par Nike depuis 1998. Modèle dérivée de la « stab » créée en 1981, la « Tn » originaire de 1998 est un modèle emblématique."
    ,209000);
INSERT INTO produit VALUES
(
    null,
    "Adidas",
    2,
    3,
    "image9",
    "ADIDAS",
    "Adidas (anciennement Gebrüder Dassler Schuhfabrik) est une firme allemande fondée en 1949 par Adolf Dassler, spécialisée dans la fabrication d'articles de sport, basée à Herzogenaurach en Allemagne"
    ,109000);
INSERT INTO produit VALUES
(
    null,
    "Air jord",
    3,
    3,
    "image10",
    "AIR JORD4",
    "Cette Air Jordan 4 présente une tige en cuir nubuck blanc. Dans le coloris Air Jordan 4 GS Hot Lava, des lignes rouges tourbillonnantes accentuent la semelle intermédiaire noire et les ailes du tristement célèbre système de laçage Jordan 4."
    ,109000);
INSERT INTO produit VALUES
(
    null,
    "T-shirt",
    1,
    4,
    "image11",
    "T-SHIRT VK55",
    "La matière et la forme différencient un T-shirt et un sweat-shirt : un sweat-shirt est plus épais, souvent réalisé en molleton moins extensible et plus chaud, et il est usuellement à manches longues et coupé plus ample."
    ,709000);
INSERT INTO produit VALUES
(
    null,
    "Patalon",
    2,
    4,
    "image12",
    "PATALON",
    "Un pantalon est un vêtement porté sur la partie inférieure du corps, les deux jambes étant couvertes séparément."
    ,10000);
INSERT INTO produit VALUES
(
    null,
    "T-shirt jord",
    3,
    4,
    "image13",
    "T-SHIRT JORD",
    "Voilà une collection qui devrait attirer ton attention. Tu trouveras ci-dessous ton future t-shirt Jordan, marqués du célèbre Jumpman. Ils sont disponibles en blanc, en noir, en rouge ou encore en gris, sont fabriqués avec des tissus de qualité premium mais surtout, outre les designs classiques,"
    ,5000);
INSERT INTO produit VALUES
(
    null,
    "Lamborghini",
    1,
    5,
    "image14",
    "LAMBORGHINI",
    "Ayant fait fortune en à peine dix ans, Ferruccio Lamborghini décide d'assouvir sa passion pour les « belles mécaniques » et les GT italiennes. Désireux de produire des automobiles plus performantes, plus sophistiquées et plus fiables que les Ferrari et Maserati, il fonde, le 30 octobre 1963, la firme Automobili Lamborghini spécialisée dans la production de voitures sportives de prestige. "
    ,10900002658);
INSERT INTO produit VALUES
(
    null,
    "ferrari",
    2,
    5,
    "image15",
    "FERRARI",
    "Ferrari, constructeur automobile italien dont le nom provient de son fondateur Enzo Ferrari constructeur de nombreux modèles de voitures de sport "
    ,1090009999000);
INSERT INTO produit VALUES
(
    null,
    "Mazda CX5",
    3,
    5,
    "image16",
    "MAZDA CX5",
    "Pour son second opus, le CX-5 emploie une méthode bien connue des constructeurs d'Outre-Rhin afin de préserver son succès : l'évolution douce"
    ,10900077);

create table Demande(
    idd int AUTO_INCREMENT primary key,
    idp int,
    idpf int,
    dte datetime,
    dta datetime,
    dtr datetime,
    FOREIGN key (idp) REFERENCES produit(idp),
    FOREIGN key (idpf) REFERENCES produit(idp)
) 