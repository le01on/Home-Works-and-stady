<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190624095247 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('RENAME TABLE `order` TO `orders`');
        $this->addSql('RENAME TABLE `user` TO `users`');
        // this up() migration is auto-generated, please modify it to your needs

    }

    public function down(Schema $schema) : void
    {
        $this->addSql('RENAME TABLE `orders` TO `order`');
        $this->addSql('RENAME TABLE `users` TO `user`');
        // this down() migration is auto-generated, please modify it to your needs

    }
}
