<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210330220647 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE nutrition (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nutrition_programme (nutrition_id INT NOT NULL, programme_id INT NOT NULL, INDEX IDX_C2564F1BB5D724CD (nutrition_id), INDEX IDX_C2564F1B62BB7AEE (programme_id), PRIMARY KEY(nutrition_id, programme_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE nutrition_programme ADD CONSTRAINT FK_C2564F1BB5D724CD FOREIGN KEY (nutrition_id) REFERENCES nutrition (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE nutrition_programme ADD CONSTRAINT FK_C2564F1B62BB7AEE FOREIGN KEY (programme_id) REFERENCES programme (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE patient ADD nutrition_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EBB5D724CD FOREIGN KEY (nutrition_id) REFERENCES nutrition (id)');
        $this->addSql('CREATE INDEX IDX_1ADAD7EBB5D724CD ON patient (nutrition_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE nutrition_programme DROP FOREIGN KEY FK_C2564F1BB5D724CD');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EBB5D724CD');
        $this->addSql('DROP TABLE nutrition');
        $this->addSql('DROP TABLE nutrition_programme');
        $this->addSql('DROP INDEX IDX_1ADAD7EBB5D724CD ON patient');
        $this->addSql('ALTER TABLE patient DROP nutrition_id');
    }
}
