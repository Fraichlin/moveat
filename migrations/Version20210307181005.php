<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210307181005 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE administrateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, theme VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_programme_psycho (article_id INT NOT NULL, programme_psycho_id INT NOT NULL, INDEX IDX_27CD172D7294869C (article_id), INDEX IDX_27CD172D40F8C9F1 (programme_psycho_id), PRIMARY KEY(article_id, programme_psycho_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE astuce (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, contenu VARCHAR(1000) NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE coach (id INT AUTO_INCREMENT NOT NULL, id_admin_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, telephone VARCHAR(255) DEFAULT NULL, type VARCHAR(255) NOT NULL, statut INT NOT NULL, photo VARCHAR(255) NOT NULL, adresse_cabinet VARCHAR(255) NOT NULL, adresse_salle VARCHAR(255) DEFAULT NULL, specialite VARCHAR(255) DEFAULT NULL, INDEX IDX_3F596DCC34F06E85 (id_admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exercice (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, calories DOUBLE PRECISION NOT NULL, photo_ou_gif VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exercice_programme_sportif (exercice_id INT NOT NULL, programme_sportif_id INT NOT NULL, INDEX IDX_5805A3D089D40298 (exercice_id), INDEX IDX_5805A3D018DF3F9B (programme_sportif_id), PRIMARY KEY(exercice_id, programme_sportif_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre (id INT AUTO_INCREMENT NOT NULL, id_prog_gn_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, login VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, taille DOUBLE PRECISION NOT NULL, poids DOUBLE PRECISION NOT NULL, photo VARCHAR(255) DEFAULT NULL, INDEX IDX_F6B4FB29BDF5CB7B (id_prog_gn_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme_general (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme_nutritionnel (id INT AUTO_INCREMENT NOT NULL, id_prog_gn_id INT NOT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_24AA92DABDF5CB7B (id_prog_gn_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme_psycho (id INT AUTO_INCREMENT NOT NULL, id_prog_gn_id INT NOT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_30996C5EBDF5CB7B (id_prog_gn_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme_sportif (id INT AUTO_INCREMENT NOT NULL, id_prog_gn_id INT NOT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_92F0906BDF5CB7B (id_prog_gn_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, id_membre_id INT NOT NULL, id_coach_id INT NOT NULL, date DATE NOT NULL, statut INT NOT NULL, INDEX IDX_65E8AA0AEAAC4B6D (id_membre_id), INDEX IDX_65E8AA0A6CCBBA04 (id_coach_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repas (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, calories DOUBLE PRECISION NOT NULL, type VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repas_programme_nutritionnel (repas_id INT NOT NULL, programme_nutritionnel_id INT NOT NULL, INDEX IDX_9C92498D1D236AAA (repas_id), INDEX IDX_9C92498D932BD79C (programme_nutritionnel_id), PRIMARY KEY(repas_id, programme_nutritionnel_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article_programme_psycho ADD CONSTRAINT FK_27CD172D7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_programme_psycho ADD CONSTRAINT FK_27CD172D40F8C9F1 FOREIGN KEY (programme_psycho_id) REFERENCES programme_psycho (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE coach ADD CONSTRAINT FK_3F596DCC34F06E85 FOREIGN KEY (id_admin_id) REFERENCES administrateur (id)');
        $this->addSql('ALTER TABLE exercice_programme_sportif ADD CONSTRAINT FK_5805A3D089D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercice_programme_sportif ADD CONSTRAINT FK_5805A3D018DF3F9B FOREIGN KEY (programme_sportif_id) REFERENCES programme_sportif (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29BDF5CB7B FOREIGN KEY (id_prog_gn_id) REFERENCES programme_general (id)');
        $this->addSql('ALTER TABLE programme_nutritionnel ADD CONSTRAINT FK_24AA92DABDF5CB7B FOREIGN KEY (id_prog_gn_id) REFERENCES programme_general (id)');
        $this->addSql('ALTER TABLE programme_psycho ADD CONSTRAINT FK_30996C5EBDF5CB7B FOREIGN KEY (id_prog_gn_id) REFERENCES programme_general (id)');
        $this->addSql('ALTER TABLE programme_sportif ADD CONSTRAINT FK_92F0906BDF5CB7B FOREIGN KEY (id_prog_gn_id) REFERENCES programme_general (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0AEAAC4B6D FOREIGN KEY (id_membre_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A6CCBBA04 FOREIGN KEY (id_coach_id) REFERENCES coach (id)');
        $this->addSql('ALTER TABLE repas_programme_nutritionnel ADD CONSTRAINT FK_9C92498D1D236AAA FOREIGN KEY (repas_id) REFERENCES repas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repas_programme_nutritionnel ADD CONSTRAINT FK_9C92498D932BD79C FOREIGN KEY (programme_nutritionnel_id) REFERENCES programme_nutritionnel (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE coach DROP FOREIGN KEY FK_3F596DCC34F06E85');
        $this->addSql('ALTER TABLE article_programme_psycho DROP FOREIGN KEY FK_27CD172D7294869C');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A6CCBBA04');
        $this->addSql('ALTER TABLE exercice_programme_sportif DROP FOREIGN KEY FK_5805A3D089D40298');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0AEAAC4B6D');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29BDF5CB7B');
        $this->addSql('ALTER TABLE programme_nutritionnel DROP FOREIGN KEY FK_24AA92DABDF5CB7B');
        $this->addSql('ALTER TABLE programme_psycho DROP FOREIGN KEY FK_30996C5EBDF5CB7B');
        $this->addSql('ALTER TABLE programme_sportif DROP FOREIGN KEY FK_92F0906BDF5CB7B');
        $this->addSql('ALTER TABLE repas_programme_nutritionnel DROP FOREIGN KEY FK_9C92498D932BD79C');
        $this->addSql('ALTER TABLE article_programme_psycho DROP FOREIGN KEY FK_27CD172D40F8C9F1');
        $this->addSql('ALTER TABLE exercice_programme_sportif DROP FOREIGN KEY FK_5805A3D018DF3F9B');
        $this->addSql('ALTER TABLE repas_programme_nutritionnel DROP FOREIGN KEY FK_9C92498D1D236AAA');
        $this->addSql('DROP TABLE administrateur');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE article_programme_psycho');
        $this->addSql('DROP TABLE astuce');
        $this->addSql('DROP TABLE coach');
        $this->addSql('DROP TABLE exercice');
        $this->addSql('DROP TABLE exercice_programme_sportif');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP TABLE programme_general');
        $this->addSql('DROP TABLE programme_nutritionnel');
        $this->addSql('DROP TABLE programme_psycho');
        $this->addSql('DROP TABLE programme_sportif');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE repas');
        $this->addSql('DROP TABLE repas_programme_nutritionnel');
    }
}
