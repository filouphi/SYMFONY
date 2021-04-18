<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210112201947 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE rendez_vous_services (rendez_vous_id INT NOT NULL, services_id INT NOT NULL, INDEX IDX_9B27A34A91EF7EAA (rendez_vous_id), INDEX IDX_9B27A34AAEF5A6C1 (services_id), PRIMARY KEY(rendez_vous_id, services_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE rendez_vous_services ADD CONSTRAINT FK_9B27A34A91EF7EAA FOREIGN KEY (rendez_vous_id) REFERENCES rendez_vous (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rendez_vous_services ADD CONSTRAINT FK_9B27A34AAEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rendez_vous ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_65E8AA0AA76ED395 ON rendez_vous (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE rendez_vous_services');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0AA76ED395');
        $this->addSql('DROP INDEX IDX_65E8AA0AA76ED395 ON rendez_vous');
        $this->addSql('ALTER TABLE rendez_vous DROP user_id');
    }
}
