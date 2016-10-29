<?php

namespace Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class Version20161029224142 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $query = <<<SQL
    CREATE TABLE `User` (
        `idUser` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
        `username` VARCHAR(20) NOT NULL,
        `password` VARCHAR(40) NOT NULL,
        `email` VARCHAR(100) NOT NULL,
        `firstName` VARCHAR(30) DEFAULT NULL,
        `lastLame` VARCHAR(30) DEFAULT NULL,
        `createdAt` DATETIME NOT NULL,
        `updatedAt` DATETIME DEFAULT NULL,
        PRIMARY KEY (`idUser`),
        UNIQUE KEY `username` (`username`,`email`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SQL;

        $this->addSql($query);
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('DROP TABLE User');
    }
}
