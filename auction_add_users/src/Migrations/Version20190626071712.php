<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190626071712 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE users MODIFY last_name VARCHAR(45) NULL, MODIFY first_name VARCHAR(45) NULL, MODIFY phone VARCHAR(45) NULL, MODIFY date_registration datetime DEFAULT CURRENT_TIMESTAMP() AUTO_INCREMENT');

// this up() migration is auto-generated, please modify it to your needs

    }

    public function down(Schema $schema) : void
    {
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE users MODIFY last_name VARCHAR(45) NOT NULL, users MODIFY first_name VARCHAR(45) NOT NULL, MODIFY phone VARCHAR(45) NOT NULL');
// this down() migration is auto-generated, please modify it to your needs

    }
}
