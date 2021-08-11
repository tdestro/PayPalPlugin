<?php

declare(strict_types=1);

namespace Sylius\PayPalPlugin\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210811040849 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sylius_paypal_plugin_pay_pal_credentials (id VARCHAR(255) NOT NULL, payment_method_id INT DEFAULT NULL, access_token VARCHAR(255) NOT NULL, creation_time TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, expiration_time TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C56F54AD5AA1164F ON sylius_paypal_plugin_pay_pal_credentials (payment_method_id)');
        $this->addSql('ALTER TABLE sylius_paypal_plugin_pay_pal_credentials ADD CONSTRAINT FK_C56F54AD5AA1164F FOREIGN KEY (payment_method_id) REFERENCES sylius_payment_method (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE sylius_paypal_plugin_pay_pal_credentials');
    }
}
