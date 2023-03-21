<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230313171810 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE creation_nft (id INT AUTO_INCREMENT NOT NULL, idcompte_id INT DEFAULT NULL, nom VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_A2FDAB538CDECFD5 (idcompte_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nft (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE creation_nft ADD CONSTRAINT FK_A2FDAB538CDECFD5 FOREIGN KEY (idcompte_id) REFERENCES compte (id)');
        $this->addSql('ALTER TABLE compte DROP INDEX email, ADD UNIQUE INDEX UNIQ_CFF65260E7927C74 (email)');
        $this->addSql('ALTER TABLE compte CHANGE email email VARCHAR(180) NOT NULL, CHANGE password password VARCHAR(255) NOT NULL, CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE creation_nft DROP FOREIGN KEY FK_A2FDAB538CDECFD5');
        $this->addSql('DROP TABLE creation_nft');
        $this->addSql('DROP TABLE nft');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE compte DROP INDEX UNIQ_CFF65260E7927C74, ADD INDEX email (email)');
        $this->addSql('ALTER TABLE compte CHANGE email email VARCHAR(50) NOT NULL, CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE password password VARCHAR(60) NOT NULL');
    }
}
