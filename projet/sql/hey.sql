drop database if exists test_g7;
create database test_g7;
use test_g7;
create table stock (genre varchar(100), prix varchar(100));
insert into stock (genre, prix) values ("Costume Homme bleu-gris","47 000Da"), ("Monteau Homme beige","20 000Da"), ("Blazer Homme & Pantalon tailleur","10 000Da"),
("Homme Blazer à carreaux à bouton & Pantalon tailleur","25 000Da"),("Extended Sizes Homme Blazer à bouton ceinturé & Pantalon tailleur","62 000Da"),
("Homme Ensemble pantalon & blazer à col châle sans fleuri","48 000Da");
insert into stock (genre, prix) values ("Combinaison avec encolure V à nœud","3200Da"),("froncé Top bandeau & Short & à bouton Blazer","5000Da"),("Combinaison à bouton à fines brides","3200 Da"),
("Blazer à poche à bouton","4700Da"),("Robe moulante femme","5000Da"),("Combinaison ample découpe à bouton","3200Da");
create table login(nom varchar(20),prenom varchar(20),email varchar(40),mdp varchar(30));
insert into login(nom,prenom,email,mdp) values("admin","admin","admin@admin.com","admin");
create table messages(nom varchar(20),prenom varchar(20),wilaya varchar(20),sujet varchar(256));
create table contact(email varchar(30), UnMessage varchar(256));

