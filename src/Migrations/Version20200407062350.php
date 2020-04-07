<?php
declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200407062350 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'MultiPolygonFeature';
    }

    public function up(Schema $schema) : void
    {
        $this->abortIf('postgresql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE IF NOT EXISTS multi_polygon_feature (id CHAR(36) NOT NULL --(DC2Type:guid)
        , geometry geometry(MULTIPOLYGON, 0) DEFAULT NULL, PRIMARY KEY(id))');
    }

    public function down(Schema $schema) : void
    {
        $this->abortIf('postgresql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP TABLE IF EXISTS multi_polygon_feature');
    }
}
