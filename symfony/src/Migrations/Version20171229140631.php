<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20171229140631 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638719FB48E');
        $this->addSql('DROP INDEX IDX_4C62E638719FB48E ON contact');
        $this->addSql('ALTER TABLE contact CHANGE contacts_id compte_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638F2C56620 FOREIGN KEY (compte_id) REFERENCES compte (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638F2C56620 ON contact (compte_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638F2C56620');
        $this->addSql('DROP INDEX IDX_4C62E638F2C56620 ON contact');
        $this->addSql('ALTER TABLE contact CHANGE compte_id contacts_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638719FB48E FOREIGN KEY (contacts_id) REFERENCES compte (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638719FB48E ON contact (contacts_id)');
    }
}
