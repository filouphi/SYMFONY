<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210111183217 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX IDX_65E8AA0A79F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous_services (rendez_vous_id INT NOT NULL, services_id INT NOT NULL, INDEX IDX_9B27A34A91EF7EAA (rendez_vous_id), INDEX IDX_9B27A34AAEF5A6C1 (services_id), PRIMARY KEY(rendez_vous_id, services_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE services (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone INT NOT NULL, role VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A79F37AE5 FOREIGN KEY (id_user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE rendez_vous_services ADD CONSTRAINT FK_9B27A34A91EF7EAA FOREIGN KEY (rendez_vous_id) REFERENCES rendez_vous (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rendez_vous_services ADD CONSTRAINT FK_9B27A34AAEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rendez_vous_services DROP FOREIGN KEY FK_9B27A34A91EF7EAA');
        $this->addSql('ALTER TABLE rendez_vous_services DROP FOREIGN KEY FK_9B27A34AAEF5A6C1');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A79F37AE5');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE rendez_vous_services');
        $this->addSql('DROP TABLE services');
        $this->addSql('DROP TABLE users');
    }
}
