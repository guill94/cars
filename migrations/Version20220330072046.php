<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220330072046 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE book_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE car_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE color_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE energy_type_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE manufacturer_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE model_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE model_type_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE test_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE book (id INT NOT NULL, id_car_id INT NOT NULL, id_user_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_CBE5A331E5F14372 ON book (id_car_id)');
        $this->addSql('CREATE INDEX IDX_CBE5A33179F37AE5 ON book (id_user_id)');
        $this->addSql('CREATE TABLE car (id INT NOT NULL, id_model_id INT NOT NULL, id_energy_type_id INT NOT NULL, id_color_id INT NOT NULL, fiscal_power DOUBLE PRECISION NOT NULL, real_power DOUBLE PRECISION NOT NULL, registration VARCHAR(15) NOT NULL, booking BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_773DE69D29AE5B72 ON car (id_model_id)');
        $this->addSql('CREATE INDEX IDX_773DE69DBD14DB41 ON car (id_energy_type_id)');
        $this->addSql('CREATE INDEX IDX_773DE69D2A01F320 ON car (id_color_id)');
        $this->addSql('CREATE TABLE color (id INT NOT NULL, name VARCHAR(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE energy_type (id INT NOT NULL, name VARCHAR(15) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE manufacturer (id INT NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE model (id INT NOT NULL, id_manufacturer_id INT NOT NULL, id_model_type_id INT DEFAULT NULL, name VARCHAR(50) NOT NULL, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D79572D9E37D77A5 ON model (id_manufacturer_id)');
        $this->addSql('CREATE INDEX IDX_D79572D91BF73407 ON model (id_model_type_id)');
        $this->addSql('CREATE TABLE model_type (id INT NOT NULL, name VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE test (id INT NOT NULL, id_car_id INT NOT NULL, id_user_id INT NOT NULL, day DATE NOT NULL, time TIME(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D87F7E0CE5F14372 ON test (id_car_id)');
        $this->addSql('CREATE INDEX IDX_D87F7E0C79F37AE5 ON test (id_user_id)');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A331E5F14372 FOREIGN KEY (id_car_id) REFERENCES car (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A33179F37AE5 FOREIGN KEY (id_user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69D29AE5B72 FOREIGN KEY (id_model_id) REFERENCES model (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69DBD14DB41 FOREIGN KEY (id_energy_type_id) REFERENCES energy_type (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE car ADD CONSTRAINT FK_773DE69D2A01F320 FOREIGN KEY (id_color_id) REFERENCES color (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE model ADD CONSTRAINT FK_D79572D9E37D77A5 FOREIGN KEY (id_manufacturer_id) REFERENCES manufacturer (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE model ADD CONSTRAINT FK_D79572D91BF73407 FOREIGN KEY (id_model_type_id) REFERENCES model_type (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0CE5F14372 FOREIGN KEY (id_car_id) REFERENCES car (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE test ADD CONSTRAINT FK_D87F7E0C79F37AE5 FOREIGN KEY (id_user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE book DROP CONSTRAINT FK_CBE5A331E5F14372');
        $this->addSql('ALTER TABLE test DROP CONSTRAINT FK_D87F7E0CE5F14372');
        $this->addSql('ALTER TABLE car DROP CONSTRAINT FK_773DE69D2A01F320');
        $this->addSql('ALTER TABLE car DROP CONSTRAINT FK_773DE69DBD14DB41');
        $this->addSql('ALTER TABLE model DROP CONSTRAINT FK_D79572D9E37D77A5');
        $this->addSql('ALTER TABLE car DROP CONSTRAINT FK_773DE69D29AE5B72');
        $this->addSql('ALTER TABLE model DROP CONSTRAINT FK_D79572D91BF73407');
        $this->addSql('DROP SEQUENCE book_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE car_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE color_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE energy_type_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE manufacturer_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE model_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE model_type_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE test_id_seq CASCADE');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE car');
        $this->addSql('DROP TABLE color');
        $this->addSql('DROP TABLE energy_type');
        $this->addSql('DROP TABLE manufacturer');
        $this->addSql('DROP TABLE model');
        $this->addSql('DROP TABLE model_type');
        $this->addSql('DROP TABLE test');
    }
}
