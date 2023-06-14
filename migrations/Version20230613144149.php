<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230613144149 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(120) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fondant_candle (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(120) NOT NULL, description LONGTEXT DEFAULT NULL, price DOUBLE PRECISION NOT NULL, quantity INT NOT NULL, image VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_product (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, amount INT NOT NULL, register_date DATETIME NOT NULL, INDEX IDX_2530ADE6A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_product_poured_candle (order_product_id INT NOT NULL, poured_candle_id INT NOT NULL, INDEX IDX_A0249078F65E9B0F (order_product_id), INDEX IDX_A02490787195AF5D (poured_candle_id), PRIMARY KEY(order_product_id, poured_candle_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_product_fondant_candle (order_product_id INT NOT NULL, fondant_candle_id INT NOT NULL, INDEX IDX_3CF330E9F65E9B0F (order_product_id), INDEX IDX_3CF330E97C320034 (fondant_candle_id), PRIMARY KEY(order_product_id, fondant_candle_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE poured_candle (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(120) NOT NULL, description LONGTEXT DEFAULT NULL, price DOUBLE PRECISION NOT NULL, quantity INT NOT NULL, image VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(120) NOT NULL, description LONGTEXT DEFAULT NULL, price DOUBLE PRECISION NOT NULL, quantity INT NOT NULL, image VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(60) DEFAULT NULL, lastname VARCHAR(60) DEFAULT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, address VARCHAR(255) DEFAULT NULL, phone_number VARCHAR(20) DEFAULT NULL, username VARCHAR(40) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE order_product ADD CONSTRAINT FK_2530ADE6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE order_product_poured_candle ADD CONSTRAINT FK_A0249078F65E9B0F FOREIGN KEY (order_product_id) REFERENCES order_product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE order_product_poured_candle ADD CONSTRAINT FK_A02490787195AF5D FOREIGN KEY (poured_candle_id) REFERENCES poured_candle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE order_product_fondant_candle ADD CONSTRAINT FK_3CF330E9F65E9B0F FOREIGN KEY (order_product_id) REFERENCES order_product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE order_product_fondant_candle ADD CONSTRAINT FK_3CF330E97C320034 FOREIGN KEY (fondant_candle_id) REFERENCES fondant_candle (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_product DROP FOREIGN KEY FK_2530ADE6A76ED395');
        $this->addSql('ALTER TABLE order_product_poured_candle DROP FOREIGN KEY FK_A0249078F65E9B0F');
        $this->addSql('ALTER TABLE order_product_poured_candle DROP FOREIGN KEY FK_A02490787195AF5D');
        $this->addSql('ALTER TABLE order_product_fondant_candle DROP FOREIGN KEY FK_3CF330E9F65E9B0F');
        $this->addSql('ALTER TABLE order_product_fondant_candle DROP FOREIGN KEY FK_3CF330E97C320034');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE fondant_candle');
        $this->addSql('DROP TABLE order_product');
        $this->addSql('DROP TABLE order_product_poured_candle');
        $this->addSql('DROP TABLE order_product_fondant_candle');
        $this->addSql('DROP TABLE poured_candle');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
