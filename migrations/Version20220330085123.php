<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220330085123 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE "user" ADD roles JSON NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER email TYPE VARCHAR(180)');
        $this->addSql('ALTER TABLE "user" ALTER password TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE "user" ALTER address SET NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER address TYPE VARCHAR(50)');
        $this->addSql('ALTER TABLE "user" ALTER postcode SET NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER postcode TYPE VARCHAR(8)');
        $this->addSql('ALTER TABLE "user" RENAME COLUMN lastname TO lasname');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74');
        $this->addSql('ALTER TABLE "user" DROP roles');
        $this->addSql('ALTER TABLE "user" ALTER email TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE "user" ALTER password TYPE VARCHAR(50)');
        $this->addSql('ALTER TABLE "user" ALTER address DROP NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER address TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE "user" ALTER postcode DROP NOT NULL');
        $this->addSql('ALTER TABLE "user" ALTER postcode TYPE VARCHAR(5)');
        $this->addSql('ALTER TABLE "user" RENAME COLUMN lasname TO lastname');
    }
}
