<?php

namespace Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161029225915 extends AbstractMigration
{
    /**
     * @param Schema $schema
     * @see http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/schema-representation.html
     */
    public function up(Schema $schema)
    {
        $postTable = $schema->createTable('Post');

        $postTable->addColumn('idPost', 'integer', [
            'unsigned' => true,
            'autoincrement' => true,
        ]);
        $postTable->addColumn('idUser', 'integer', [
            'unsigned' => true,
        ]);
        $postTable->addColumn('title', 'string', [
            'limit' => 255,
        ]);
        $postTable->addColumn('description', 'text', [
            'notnull' => false,
        ]);
        $postTable->addColumn('content', 'text', [
            'notnull' => false,
        ]);
        $postTable->addColumn('createdAt', 'datetime');
        $postTable->addColumn('updatedAt', 'datetime', [
            'notnull' => false,
        ]);
        $postTable->setPrimaryKey([
            'idPost'
        ]);

        $postTable->addForeignKeyConstraint(
            'User', // Foreign table
            ['idUser'], // Local columns
            ['idUser'], // Foreign columns
            ['onDelete' => 'CASCADE'],
            'fk_Post_User'
        );
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $schema->dropTable('Post');
    }
}
