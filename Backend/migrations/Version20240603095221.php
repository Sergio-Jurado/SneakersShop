<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240603095221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, streetandnumber VARCHAR(255) NOT NULL, flooranddoor VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, postalcode VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, address_id INT DEFAULT NULL, sneaker_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_97A0ADA3F5B7AF75 (address_id), UNIQUE INDEX UNIQ_97A0ADA3B44896C4 (sneaker_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3F5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA3B44896C4 FOREIGN KEY (sneaker_id) REFERENCES sneaker (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3F5B7AF75');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA3B44896C4');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE ticket');
    }
}
