<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210308190122 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (idArticle INT AUTO_INCREMENT NOT NULL, nom VARCHAR(254) DEFAULT \'NULL\', theme VARCHAR(254) DEFAULT \'NULL\', idProgramme INT DEFAULT NULL, INDEX ASSOCIATION8_FK (idProgramme), UNIQUE INDEX ARTICLE_PK (idArticle), PRIMARY KEY(idArticle)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coach (idCoach INT AUTO_INCREMENT NOT NULL, nom VARCHAR(254) DEFAULT \'NULL\', prenom VARCHAR(254) DEFAULT \'NULL\', login VARCHAR(254) DEFAULT \'NULL\', password VARCHAR(254) DEFAULT \'NULL\', email VARCHAR(254) DEFAULT \'NULL\', sexe VARCHAR(254) DEFAULT \'NULL\', telephone VARCHAR(254) DEFAULT \'NULL\', adresse VARCHAR(255) NOT NULL, type VARCHAR(254) DEFAULT \'NULL\', statut INT NOT NULL, dateInscription DATE DEFAULT \'current_timestamp()\' NOT NULL, dateValidation DATE DEFAULT \'NULL\', UNIQUE INDEX COACH_PK (idCoach), PRIMARY KEY(idCoach)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coachphysique (addresseSallesport VARCHAR(254) DEFAULT \'NULL\', idCoach INT NOT NULL, PRIMARY KEY(idCoach)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exercice (idExercice INT AUTO_INCREMENT NOT NULL, nom VARCHAR(254) DEFAULT \'NULL\', calories DOUBLE PRECISION DEFAULT \'NULL\', photoOuGif VARCHAR(254) DEFAULT \'NULL\', type VARCHAR(254) DEFAULT \'NULL\', idProgramme INT DEFAULT NULL, INDEX ASSOCIATION9_FK (idProgramme), UNIQUE INDEX EXERCICE_PK (idExercice), PRIMARY KEY(idExercice)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medecin (addresseCabinet VARCHAR(254) DEFAULT \'NULL\', specialite VARCHAR(254) DEFAULT \'NULL\', idCoach INT NOT NULL, PRIMARY KEY(idCoach)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre (idMembre INT AUTO_INCREMENT NOT NULL, nom VARCHAR(254) DEFAULT \'NULL\', prenom VARCHAR(254) DEFAULT \'NULL\', email VARCHAR(254) DEFAULT \'NULL\', login VARCHAR(254) DEFAULT \'NULL\', password VARCHAR(254) DEFAULT \'NULL\', sexe VARCHAR(254) DEFAULT \'NULL\', taille DOUBLE PRECISION DEFAULT \'NULL\', poids DOUBLE PRECISION DEFAULT \'NULL\', idProgGen INT DEFAULT NULL, INDEX ASSOCIATION6_FK (idProgGen), UNIQUE INDEX MEMBRE_PK (idMembre), PRIMARY KEY(idMembre)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nutritioniste (idCoach INT NOT NULL, PRIMARY KEY(idCoach)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme (idProgramme INT AUTO_INCREMENT NOT NULL, nom VARCHAR(254) DEFAULT \'NULL\', type VARCHAR(254) DEFAULT \'NULL\', idProgGen INT DEFAULT NULL, INDEX ASSOCIATION5_FK (idProgGen), UNIQUE INDEX PROGRAMME_PK (idProgramme), PRIMARY KEY(idProgramme)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programmealimentaire (idProgramme INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(idProgramme)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programmegeneral (idProgGen INT AUTO_INCREMENT NOT NULL, titre VARCHAR(254) DEFAULT \'NULL\', UNIQUE INDEX PROGRAMMEGENERAL_PK (idProgGen), PRIMARY KEY(idProgGen)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programmepsycho (idProgramme INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(idProgramme)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programmesportif (idProgramme INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(idProgramme)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE psychotherapeute (idCoach INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(idCoach)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendezvous (idMembre INT NOT NULL, idCoach INT NOT NULL, date DATETIME DEFAULT \'NULL\', statut INT DEFAULT NULL, INDEX ASSOCIATION3_FK (idCoach), INDEX ASSOCIATION4_FK (idMembre), PRIMARY KEY(idMembre, idCoach)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repas (idRepas INT AUTO_INCREMENT NOT NULL, idProgramme INT DEFAULT NULL, nom VARCHAR(254) DEFAULT \'NULL\', calories DOUBLE PRECISION DEFAULT \'NULL\', type VARCHAR(254) DEFAULT \'NULL\', INDEX ASSOCIATION7_FK (idProgramme), UNIQUE INDEX REPAS_PK (idRepas), PRIMARY KEY(idRepas)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66C13692A9 FOREIGN KEY (idProgramme) REFERENCES programmepsycho (idProgramme)');
        $this->addSql('ALTER TABLE coachphysique ADD CONSTRAINT FK_506121D2289D2ED1 FOREIGN KEY (idCoach) REFERENCES coach (idCoach)');
        $this->addSql('ALTER TABLE exercice ADD CONSTRAINT FK_E418C74DC13692A9 FOREIGN KEY (idProgramme) REFERENCES programmesportif (idProgramme)');
        $this->addSql('ALTER TABLE medecin ADD CONSTRAINT FK_1BDA53C6289D2ED1 FOREIGN KEY (idCoach) REFERENCES coach (idCoach)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB295D91AFB3 FOREIGN KEY (idProgGen) REFERENCES programmegeneral (idProgGen)');
        $this->addSql('ALTER TABLE nutritioniste ADD CONSTRAINT FK_848980F9289D2ED1 FOREIGN KEY (idCoach) REFERENCES medecin (idCoach)');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FF5D91AFB3 FOREIGN KEY (idProgGen) REFERENCES programmegeneral (idProgGen)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE coachphysique DROP FOREIGN KEY FK_506121D2289D2ED1');
        $this->addSql('ALTER TABLE medecin DROP FOREIGN KEY FK_1BDA53C6289D2ED1');
        $this->addSql('ALTER TABLE nutritioniste DROP FOREIGN KEY FK_848980F9289D2ED1');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB295D91AFB3');
        $this->addSql('ALTER TABLE programme DROP FOREIGN KEY FK_3DDCB9FF5D91AFB3');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66C13692A9');
        $this->addSql('ALTER TABLE exercice DROP FOREIGN KEY FK_E418C74DC13692A9');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE coach');
        $this->addSql('DROP TABLE coachphysique');
        $this->addSql('DROP TABLE exercice');
        $this->addSql('DROP TABLE medecin');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP TABLE nutritioniste');
        $this->addSql('DROP TABLE programme');
        $this->addSql('DROP TABLE programmealimentaire');
        $this->addSql('DROP TABLE programmegeneral');
        $this->addSql('DROP TABLE programmepsycho');
        $this->addSql('DROP TABLE programmesportif');
        $this->addSql('DROP TABLE psychotherapeute');
        $this->addSql('DROP TABLE rendezvous');
        $this->addSql('DROP TABLE repas');
    }
}
