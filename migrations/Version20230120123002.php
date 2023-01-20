<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230120123002 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE formation_format (formation_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', format_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', INDEX IDX_FEA37CF25200282E (formation_id), INDEX IDX_FEA37CF2D629F605 (format_id), PRIMARY KEY(formation_id, format_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE formation_format ADD CONSTRAINT FK_FEA37CF25200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_format ADD CONSTRAINT FK_FEA37CF2D629F605 FOREIGN KEY (format_id) REFERENCES format (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFD629F605');
        $this->addSql('DROP INDEX IDX_404021BFD629F605 ON formation');
        $this->addSql('ALTER TABLE formation DROP format_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation_format DROP FOREIGN KEY FK_FEA37CF25200282E');
        $this->addSql('ALTER TABLE formation_format DROP FOREIGN KEY FK_FEA37CF2D629F605');
        $this->addSql('DROP TABLE formation_format');
        $this->addSql('ALTER TABLE formation ADD format_id BINARY(16) DEFAULT NULL COMMENT \'(DC2Type:uuid)\'');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFD629F605 FOREIGN KEY (format_id) REFERENCES formation (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_404021BFD629F605 ON formation (format_id)');
    }
}
