<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241108211146 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sup_hour (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, category VARCHAR(255) NOT NULL, hour_min INT DEFAULT NULL, hour_max INT NOT NULL, rate DOUBLE PRECISION NOT NULL, INDEX IDX_19962D1FF92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sup_hour ADD CONSTRAINT FK_19962D1FF92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE sup_hour DROP FOREIGN KEY FK_19962D1FF92F3E70');
        $this->addSql('DROP TABLE sup_hour');
    }
}
