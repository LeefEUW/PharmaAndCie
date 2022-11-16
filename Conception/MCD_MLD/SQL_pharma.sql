create database pharma;
use pharma;

CREATE table droits(
id_droits int primary key not null auto_increment,
nom_droit varchar(50)
)engine=InnoDB;

CREATE table utilisateurs(
id_util int primary key auto_increment not null,
nom_util varchar(50),
prenom_util varchar(50),
mail_util varchar(100) not null unique,
mdp_util varchar(50),
id_droits int,
constraint fk_id_droits foreign key (id_droits) references droits(id_droits) on delete set null
)engine=InnoDB;

CREATE table categorie_produit(
id_cat_prod int primary key not null auto_increment,
nom_cat varchar(50)
)engine=InnoDB;

CREATE table produit(
id_produit int primary key not null auto_increment,
nom_produit varchar(50),
prix_produit float,
image_produit varchar(255),
id_cat_prod int,
desc_produit text,
constraint fk_id_cat_prod foreign key (id_cat_prod) references categorie_produit(id_cat_prod)
)engine=InnoDB;

CREATE table categorie_art(
id_categorie_art int primary key not null auto_increment,
nom_cat_art varchar(50)
)engine=InnoDB;

CREATE table articles(
id_articles int primary key not null auto_increment,
titre_art varchar(50),
img_art varchar(50),
id_categorie_art int,
contenu_art text,
constraint fk_id_categorie_art foreign key (id_categorie_art) references categorie_art(id_categorie_art)
)engine=InnoDB;



SELECT * FROM produit natural join categorie_produit where id_cat_prod = 2;


