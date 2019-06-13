<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190613064629 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F529939832BAC194 FOREIGN KEY (bank_details_id) REFERENCES bank_details (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398D7707B45 FOREIGN KEY (order_status_id) REFERENCES order_status (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398D614C7E7 FOREIGN KEY (price_id) REFERENCES price (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F52993984584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F52993984584665A ON `order` (product_id)');
        $this->addSql('ALTER TABLE address_cities ADD CONSTRAINT FK_E20434D4A21B310F FOREIGN KEY (address_countries_id) REFERENCES address_countries (id)');
        $this->addSql('ALTER TABLE product_category ADD CONSTRAINT FK_CDFC7356727ACA70 FOREIGN KEY (parent_id) REFERENCES product_category (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADD614C7E7 FOREIGN KEY (price_id) REFERENCES price (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADBE6903FD FOREIGN KEY (product_category_id) REFERENCES product_category (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD557B630 FOREIGN KEY (product_status_id) REFERENCES product_status (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD7E3C61F9 FOREIGN KEY (owner_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04ADF675F31B FOREIGN KEY (author_id) REFERENCES author (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD1B37B1CE FOREIGN KEY (product_about_id) REFERENCES product_about (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D34A04ADD614C7E7 ON product (price_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D34A04AD1B37B1CE ON product (product_about_id)');
        $this->addSql('ALTER TABLE bid_history ADD CONSTRAINT FK_79922F584584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE bid_history ADD CONSTRAINT FK_79922F58A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product_photo ADD CONSTRAINT FK_B5EBFF444584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649F5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64938248176 FOREIGN KEY (currency_id) REFERENCES currency (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64974D00D09 FOREIGN KEY (profile_user_id) REFERENCES user_profile (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6498E0E3CA6 FOREIGN KEY (user_role_id) REFERENCES user_role (id)');
        $this->addSql('ALTER TABLE delivery ADD CONSTRAINT FK_3781EC1050866FD0 FOREIGN KEY (address_cities_id) REFERENCES address_cities (id)');
        $this->addSql('ALTER TABLE delivery ADD CONSTRAINT FK_3781EC10F3193EC2 FOREIGN KEY (delivery_service_id) REFERENCES delivery_service (id)');
        $this->addSql('ALTER TABLE delivery ADD CONSTRAINT FK_3781EC102F924C2F FOREIGN KEY (delivery_status_id) REFERENCES delivery_status (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE address_cities DROP FOREIGN KEY FK_E20434D4A21B310F');
        $this->addSql('ALTER TABLE bid_history DROP FOREIGN KEY FK_79922F584584665A');
        $this->addSql('ALTER TABLE bid_history DROP FOREIGN KEY FK_79922F58A76ED395');
        $this->addSql('ALTER TABLE delivery DROP FOREIGN KEY FK_3781EC1050866FD0');
        $this->addSql('ALTER TABLE delivery DROP FOREIGN KEY FK_3781EC10F3193EC2');
        $this->addSql('ALTER TABLE delivery DROP FOREIGN KEY FK_3781EC102F924C2F');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F529939832BAC194');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398D7707B45');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398D614C7E7');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F52993984584665A');
        $this->addSql('DROP INDEX UNIQ_F52993984584665A ON `order`');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADD614C7E7');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADBE6903FD');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD557B630');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD7E3C61F9');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04ADF675F31B');
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD1B37B1CE');
        $this->addSql('DROP INDEX UNIQ_D34A04ADD614C7E7 ON product');
        $this->addSql('DROP INDEX UNIQ_D34A04AD1B37B1CE ON product');
        $this->addSql('ALTER TABLE product_category DROP FOREIGN KEY FK_CDFC7356727ACA70');
        $this->addSql('ALTER TABLE product_photo DROP FOREIGN KEY FK_B5EBFF444584665A');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649F5B7AF75');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64938248176');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64974D00D09');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6498E0E3CA6');
    }
}
