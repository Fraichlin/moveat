<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210518232839 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE nutritional_program (id INT AUTO_INCREMENT NOT NULL, nutritionist_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, breackfast VARCHAR(255) NOT NULL, lunch VARCHAR(255) NOT NULL, dinner VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_56696BE1BE035A4B (nutritionist_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE nutritional_program ADD CONSTRAINT FK_56696BE1BE035A4B FOREIGN KEY (nutritionist_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE appointment CHANGE message message VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE comment CHANGE patient_id patient_id INT DEFAULT NULL, CHANGE nu_program_id nu_program_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE postuler CHANGE program_id program_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE postuler ADD CONSTRAINT FK_8EC5A68D3EB8070A FOREIGN KEY (program_id) REFERENCES programs (id)');
        $this->addSql('ALTER TABLE postuler ADD CONSTRAINT FK_8EC5A68DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE nom nom VARCHAR(255) DEFAULT NULL, CHANGE prenom prenom VARCHAR(255) DEFAULT NULL, CHANGE telephone telephone VARCHAR(255) DEFAULT NULL, CHANGE taille taille DOUBLE PRECISION DEFAULT NULL, CHANGE poids poids DOUBLE PRECISION DEFAULT NULL, CHANGE specialite specialite VARCHAR(255) DEFAULT NULL, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE photo photo VARCHAR(255) DEFAULT NULL, CHANGE justificatif justificatif VARCHAR(255) DEFAULT NULL, CHANGE date_inscription date_inscription DATETIME DEFAULT NULL, CHANGE date_validation date_validation DATETIME DEFAULT NULL, CHANGE date_blocage date_blocage DATETIME DEFAULT NULL, CHANGE date_deblocage date_deblocage DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C71FC2016');
        $this->addSql('DROP TABLE nutritional_program');
        $this->addSql('ALTER TABLE appointment CHANGE message message VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE comment CHANGE patient_id patient_id INT DEFAULT NULL, CHANGE nu_program_id nu_program_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE postuler DROP FOREIGN KEY FK_8EC5A68D3EB8070A');
        $this->addSql('ALTER TABLE postuler DROP FOREIGN KEY FK_8EC5A68DA76ED395');
        $this->addSql('ALTER TABLE postuler CHANGE program_id program_id INT DEFAULT NULL, CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles VARCHAR(255) NOT NULL COLLATE utf8mb4_bin, CHANGE nom nom VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE prenom prenom VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE telephone telephone VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE taille taille DOUBLE PRECISION DEFAULT \'NULL\', CHANGE poids poids DOUBLE PRECISION DEFAULT \'NULL\', CHANGE specialite specialite VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE adresse adresse VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE photo photo VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE justificatif justificatif VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE date_inscription date_inscription DATETIME DEFAULT \'current_timestamp()\', CHANGE date_validation date_validation DATETIME DEFAULT \'NULL\', CHANGE date_blocage date_blocage DATETIME DEFAULT \'NULL\', CHANGE date_deblocage date_deblocage DATETIME DEFAULT \'NULL\', CHANGE updated_at updated_at DATETIME DEFAULT \'NULL\'');
    }
}
