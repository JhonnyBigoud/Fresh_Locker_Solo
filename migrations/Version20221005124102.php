<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20221005124102 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'add field alias in Category';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE category ADD alias VARCHAR(50) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE category DROP alias');
    }
}
