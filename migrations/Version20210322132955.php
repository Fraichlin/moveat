<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210322132955 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE article_programme_psycho (article_id INT NOT NULL, programme_psycho_id INT NOT NULL, INDEX IDX_27CD172D7294869C (article_id), INDEX IDX_27CD172D40F8C9F1 (programme_psycho_id), PRIMARY KEY(article_id, programme_psycho_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE astuce (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, contenu VARCHAR(1000) NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE exercice_programme_sportif (exercice_id INT NOT NULL, programme_sportif_id INT NOT NULL, INDEX IDX_5805A3D089D40298 (exercice_id), INDEX IDX_5805A3D018DF3F9B (programme_sportif_id), PRIMARY KEY(exercice_id, programme_sportif_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme_psycho (id INT AUTO_INCREMENT NOT NULL, id_prog_gn_id INT NOT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_30996C5EBDF5CB7B (id_prog_gn_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme_sportif (id INT AUTO_INCREMENT NOT NULL, id_prog_gn_id INT NOT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_92F0906BDF5CB7B (id_prog_gn_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, id_membre_id INT NOT NULL, id_coach_id INT NOT NULL, date DATE NOT NULL, statut INT NOT NULL, INDEX IDX_65E8AA0AEAAC4B6D (id_membre_id), INDEX IDX_65E8AA0A6CCBBA04 (id_coach_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repas_programme_nutritionnel (repas_id INT NOT NULL, programme_nutritionnel_id INT NOT NULL, INDEX IDX_9C92498D1D236AAA (repas_id), INDEX IDX_9C92498D932BD79C (programme_nutritionnel_id), PRIMARY KEY(repas_id, programme_nutritionnel_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, sexe VARCHAR(255) NOT NULL, telephone VARCHAR(255) DEFAULT NULL, taille DOUBLE PRECISION DEFAULT NULL, poids DOUBLE PRECISION DEFAULT NULL, specialite VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, statut VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, justificatif VARCHAR(255) DEFAULT NULL, date_inscription DATETIME DEFAULT NULL, date_validation DATETIME DEFAULT NULL, date_modification DATETIME DEFAULT NULL, date_blocage DATETIME DEFAULT NULL, date_deblocage DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article_programme_psycho ADD CONSTRAINT FK_27CD172D7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_programme_psycho ADD CONSTRAINT FK_27CD172D40F8C9F1 FOREIGN KEY (programme_psycho_id) REFERENCES programme_psycho (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercice_programme_sportif ADD CONSTRAINT FK_5805A3D089D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercice_programme_sportif ADD CONSTRAINT FK_5805A3D018DF3F9B FOREIGN KEY (programme_sportif_id) REFERENCES programme_sportif (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE programme_psycho ADD CONSTRAINT FK_30996C5EBDF5CB7B FOREIGN KEY (id_prog_gn_id) REFERENCES programme_general (id)');
        $this->addSql('ALTER TABLE programme_sportif ADD CONSTRAINT FK_92F0906BDF5CB7B FOREIGN KEY (id_prog_gn_id) REFERENCES programme_general (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0AEAAC4B6D FOREIGN KEY (id_membre_id) REFERENCES membre (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A6CCBBA04 FOREIGN KEY (id_coach_id) REFERENCES coach (id)');
        $this->addSql('ALTER TABLE repas_programme_nutritionnel ADD CONSTRAINT FK_9C92498D1D236AAA FOREIGN KEY (repas_id) REFERENCES repas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repas_programme_nutritionnel ADD CONSTRAINT FK_9C92498D932BD79C FOREIGN KEY (programme_nutritionnel_id) REFERENCES programme_nutritionnel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE administrateur CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE prenom prenom VARCHAR(255) DEFAULT NULL, CHANGE photo photo VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE coach ADD adresse VARCHAR(255) NOT NULL, ADD justificatif VARCHAR(255) NOT NULL, ADD date_inscription DATE NOT NULL, ADD date_validation DATE DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL, DROP type, DROP adresse_cabinet, DROP adresse_salle, CHANGE id_admin_id id_admin_id INT DEFAULT NULL, CHANGE telephone telephone VARCHAR(255) DEFAULT NULL, CHANGE specialite specialite VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE membre ADD date_inscription DATE NOT NULL, ADD updated_at DATETIME DEFAULT NULL, CHANGE id_prog_gn_id id_prog_gn_id INT DEFAULT NULL, CHANGE photo photo VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article_programme_psycho DROP FOREIGN KEY FK_27CD172D40F8C9F1');
        $this->addSql('ALTER TABLE exercice_programme_sportif DROP FOREIGN KEY FK_5805A3D018DF3F9B');
        $this->addSql('DROP TABLE article_programme_psycho');
        $this->addSql('DROP TABLE astuce');
        $this->addSql('DROP TABLE exercice_programme_sportif');
        $this->addSql('DROP TABLE programme_psycho');
        $this->addSql('DROP TABLE programme_sportif');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE repas_programme_nutritionnel');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE administrateur CHANGE nom nom VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE prenom prenom VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE photo photo VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE coach ADD type VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD adresse_cabinet VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD adresse_salle VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, DROP adresse, DROP justificatif, DROP date_inscription, DROP date_validation, DROP updated_at, CHANGE id_admin_id id_admin_id INT DEFAULT NULL, CHANGE telephone telephone VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE specialite specialite VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE membre DROP date_inscription, DROP updated_at, CHANGE id_prog_gn_id id_prog_gn_id INT DEFAULT NULL, CHANGE photo photo VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
