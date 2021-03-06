<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181101145356 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article ADD id_creator_id INT DEFAULT NULL, DROP id_creator');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66C4A88E71 FOREIGN KEY (id_creator_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_23A0E66C4A88E71 ON article (id_creator_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66C4A88E71');
        $this->addSql('DROP INDEX IDX_23A0E66C4A88E71 ON article');
        $this->addSql('ALTER TABLE article ADD id_creator INT NOT NULL, DROP id_creator_id');
    }
}
