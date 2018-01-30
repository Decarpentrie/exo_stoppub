#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: usager
#------------------------------------------------------------

CREATE TABLE usager(
        id_usager     int (11) Auto_increment  NOT NULL ,
        nom_usager    Varchar (25) NOT NULL ,
        premon_usager Varchar (25) NOT NULL ,
        region_usager Varchar (25) ,
        email_usager  Varchar (25) ,
        PRIMARY KEY (id_usager )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: publicite
#------------------------------------------------------------

CREATE TABLE publicite(
        id_publicitaire     Int NOT NULL ,
        nom_plubicitaire    Varchar (25) NOT NULL ,
        type_publicite      Varchar (25) NOT NULL ,
        produit             Varchar (25) NOT NULL ,
        mail_envoi          Varchar (25) NOT NULL ,
        numero_publicitaire Int NOT NULL ,
        adresse             Varchar (25) NOT NULL ,
        date_reception      Date NOT NULL ,
        PRIMARY KEY (id_publicitaire )
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: information
#------------------------------------------------------------

CREATE TABLE information(
        id_usager       Int NOT NULL ,
        id_publicitaire Int NOT NULL ,
        PRIMARY KEY (id_usager ,id_publicitaire )
)ENGINE=InnoDB;

ALTER TABLE information ADD CONSTRAINT FK_information_id_usager FOREIGN KEY (id_usager) REFERENCES usager(id_usager);
ALTER TABLE information ADD CONSTRAINT FK_information_id_publicitaire FOREIGN KEY (id_publicitaire) REFERENCES publicite(id_publicitaire);
