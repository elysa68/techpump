<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221118114612 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `affiliate` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, web VARCHAR(255) NOT NULL, nats_code VARCHAR(255) NOT NULL, css_folder VARCHAR(255) NOT NULL, google_analytics VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('INSERT INTO `techpump`.`affiliate` (`name`,`web`,`nats_code`,`css_folder`,`google_analytics`) VALUES ( "conejox", "http://www.conejox.com", "MjYwNS4xLjI1LjQzLjAuMC4wLjAuMA","conejox.com","UA-26020144-23")');
        $this->addSql('INSERT INTO `techpump`.`affiliate` (`name`,`web`,`nats_code`,`css_folder`,`google_analytics`) VALUES ( "babosas", "http://www.babosas.com", "MjYwNS4xLjIuMi4wLjAuMC4wLjA","babosas","UA-26020144-23")');
        $this->addSql('INSERT INTO `techpump`.`affiliate` (`name`,`web`,`nats_code`,`css_folder`,`google_analytics`) VALUES ( "cerdas", "http://www.cerdas.com", "MjYwNS4xLjIuMi4wLjAuMC4wLjA","cerdas.com","UA-26020144-23")');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE `affiliate`');
    }
}
