<?php
declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version00000000000000 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'PostGIS';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf('postgresql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog');
        $this->addSql('COMMENT ON EXTENSION plpgsql IS \'PL/pgSQL procedural language\';');
        $this->addSql('CREATE EXTENSION IF NOT EXISTS postgis WITH SCHEMA public;');
        $this->addSql('COMMENT ON EXTENSION postgis IS \'PostGIS geometry, geography, and raster spatial types and functions\';');
        $this->addSql('CREATE EXTENSION IF NOT EXISTS "uuid-ossp";');
    }

    public function down(Schema $schema) : void
    {
        $this->abortIf('postgresql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'postgresql\'.');
        $this->addSql('DROP EXTENSION IF EXISTS postgis;');
        $this->addSql('DROP EXTENSION IF EXISTS plpgsql;');
    }
}
