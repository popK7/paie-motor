<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241108215653 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE contribution (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_EA351E15F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE service (id INT AUTO_INCREMENT NOT NULL, contribution_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, emplyee_rate DOUBLE PRECISION NOT NULL, emloyer_rate DOUBLE PRECISION NOT NULL, start_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', end_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_E19D9AD2FE5E5FBD (contribution_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sming_setting (id INT AUTO_INCREMENT NOT NULL, country_id INT DEFAULT NULL, hours_per_year DOUBLE PRECISION NOT NULL, hours_per_month DOUBLE PRECISION NOT NULL, hours_per_week DOUBLE PRECISION NOT NULL, hours_per_day DOUBLE PRECISION NOT NULL, start_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', end_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_EC1CCDB1F92F3E70 (country_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contribution ADD CONSTRAINT FK_EA351E15F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
        $this->addSql('ALTER TABLE service ADD CONSTRAINT FK_E19D9AD2FE5E5FBD FOREIGN KEY (contribution_id) REFERENCES contribution (id)');
        $this->addSql('ALTER TABLE sming_setting ADD CONSTRAINT FK_EC1CCDB1F92F3E70 FOREIGN KEY (country_id) REFERENCES country (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contribution DROP FOREIGN KEY FK_EA351E15F92F3E70');
        $this->addSql('ALTER TABLE service DROP FOREIGN KEY FK_E19D9AD2FE5E5FBD');
        $this->addSql('ALTER TABLE sming_setting DROP FOREIGN KEY FK_EC1CCDB1F92F3E70');
        $this->addSql('DROP TABLE contribution');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE sming_setting');
    }
}
