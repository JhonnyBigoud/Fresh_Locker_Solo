<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20220927104212 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Change User with make:user for security and phone_number at NOT NULL';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE user CHANGE phone_number phone_number VARCHAR(20) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('ALTER TABLE user CHANGE phone_number phone_number VARCHAR(20) DEFAULT NULL');
    }
}
