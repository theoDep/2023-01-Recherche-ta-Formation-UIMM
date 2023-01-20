<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230120083628 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE code (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', identifier VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE code_skill (code_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', skill_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', INDEX IDX_B268FD3B27DAFE17 (code_id), INDEX IDX_B268FD3B5585C142 (skill_id), PRIMARY KEY(code_id, skill_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `condition` (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', descriptive LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cost (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', descriptive VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE format (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', format_id BINARY(16) DEFAULT NULL COMMENT \'(DC2Type:uuid)\', name VARCHAR(255) NOT NULL, studies_level INT NOT NULL, duration INT NOT NULL, INDEX IDX_404021BFD629F605 (format_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation_code (formation_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', code_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', INDEX IDX_20CAD5D85200282E (formation_id), INDEX IDX_20CAD5D827DAFE17 (code_id), PRIMARY KEY(formation_id, code_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation_job (formation_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', job_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', INDEX IDX_4C88858C5200282E (formation_id), INDEX IDX_4C88858CBE04EA9 (job_id), PRIMARY KEY(formation_id, job_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation_condition (formation_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', condition_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', INDEX IDX_77ABD89E5200282E (formation_id), INDEX IDX_77ABD89E887793B6 (condition_id), PRIMARY KEY(formation_id, condition_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation_cost (formation_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', cost_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', INDEX IDX_4FF971BC5200282E (formation_id), INDEX IDX_4FF971BC1DBF857F (cost_id), PRIMARY KEY(formation_id, cost_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation_location (formation_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', location_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', INDEX IDX_990CDE3A5200282E (formation_id), INDEX IDX_990CDE3A64D218E (location_id), PRIMARY KEY(formation_id, location_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation_formation (formation_source BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', formation_target BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', INDEX IDX_8A3D71627F93715E (formation_source), INDEX IDX_8A3D7162667621D1 (formation_target), PRIMARY KEY(formation_source, formation_target)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE location (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', line_1 VARCHAR(255) NOT NULL, line_2 VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, zip_code INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', descriptive LONGTEXT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid)\', email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE code_skill ADD CONSTRAINT FK_B268FD3B27DAFE17 FOREIGN KEY (code_id) REFERENCES code (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE code_skill ADD CONSTRAINT FK_B268FD3B5585C142 FOREIGN KEY (skill_id) REFERENCES skill (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation ADD CONSTRAINT FK_404021BFD629F605 FOREIGN KEY (format_id) REFERENCES formation (id)');
        $this->addSql('ALTER TABLE formation_code ADD CONSTRAINT FK_20CAD5D85200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_code ADD CONSTRAINT FK_20CAD5D827DAFE17 FOREIGN KEY (code_id) REFERENCES code (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_job ADD CONSTRAINT FK_4C88858C5200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_job ADD CONSTRAINT FK_4C88858CBE04EA9 FOREIGN KEY (job_id) REFERENCES job (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_condition ADD CONSTRAINT FK_77ABD89E5200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_condition ADD CONSTRAINT FK_77ABD89E887793B6 FOREIGN KEY (condition_id) REFERENCES `condition` (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_cost ADD CONSTRAINT FK_4FF971BC5200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_cost ADD CONSTRAINT FK_4FF971BC1DBF857F FOREIGN KEY (cost_id) REFERENCES cost (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_location ADD CONSTRAINT FK_990CDE3A5200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_location ADD CONSTRAINT FK_990CDE3A64D218E FOREIGN KEY (location_id) REFERENCES location (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_formation ADD CONSTRAINT FK_8A3D71627F93715E FOREIGN KEY (formation_source) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_formation ADD CONSTRAINT FK_8A3D7162667621D1 FOREIGN KEY (formation_target) REFERENCES formation (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE code_skill DROP FOREIGN KEY FK_B268FD3B27DAFE17');
        $this->addSql('ALTER TABLE code_skill DROP FOREIGN KEY FK_B268FD3B5585C142');
        $this->addSql('ALTER TABLE formation DROP FOREIGN KEY FK_404021BFD629F605');
        $this->addSql('ALTER TABLE formation_code DROP FOREIGN KEY FK_20CAD5D85200282E');
        $this->addSql('ALTER TABLE formation_code DROP FOREIGN KEY FK_20CAD5D827DAFE17');
        $this->addSql('ALTER TABLE formation_job DROP FOREIGN KEY FK_4C88858C5200282E');
        $this->addSql('ALTER TABLE formation_job DROP FOREIGN KEY FK_4C88858CBE04EA9');
        $this->addSql('ALTER TABLE formation_condition DROP FOREIGN KEY FK_77ABD89E5200282E');
        $this->addSql('ALTER TABLE formation_condition DROP FOREIGN KEY FK_77ABD89E887793B6');
        $this->addSql('ALTER TABLE formation_cost DROP FOREIGN KEY FK_4FF971BC5200282E');
        $this->addSql('ALTER TABLE formation_cost DROP FOREIGN KEY FK_4FF971BC1DBF857F');
        $this->addSql('ALTER TABLE formation_location DROP FOREIGN KEY FK_990CDE3A5200282E');
        $this->addSql('ALTER TABLE formation_location DROP FOREIGN KEY FK_990CDE3A64D218E');
        $this->addSql('ALTER TABLE formation_formation DROP FOREIGN KEY FK_8A3D71627F93715E');
        $this->addSql('ALTER TABLE formation_formation DROP FOREIGN KEY FK_8A3D7162667621D1');
        $this->addSql('DROP TABLE code');
        $this->addSql('DROP TABLE code_skill');
        $this->addSql('DROP TABLE `condition`');
        $this->addSql('DROP TABLE cost');
        $this->addSql('DROP TABLE format');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE formation_code');
        $this->addSql('DROP TABLE formation_job');
        $this->addSql('DROP TABLE formation_condition');
        $this->addSql('DROP TABLE formation_cost');
        $this->addSql('DROP TABLE formation_location');
        $this->addSql('DROP TABLE formation_formation');
        $this->addSql('DROP TABLE job');
        $this->addSql('DROP TABLE location');
        $this->addSql('DROP TABLE skill');
        $this->addSql('DROP TABLE `user`');
    }
}
