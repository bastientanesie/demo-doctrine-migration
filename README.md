# demo-doctrine-migration

A simple demo of [Doctrine Migration](https://github.com/doctrine/migrations).

## Installation

This demo requires [Composer](https://getcomposer.org/). Run `composer install` to download all required dependencies.

You also need to create a database prior to using this demo.

## Configuration

### migrations.yml

The `migrations.yml` contains the configuration used by the Doctrine Migration CLI tool, and looks like this :

```yaml
name: My Migrations
migrations_namespace: MyApp\Migrations
table_name: migrations
migrations_directory: database/migration
```

* The `name` property defines the name of your migrations. 
* The `migrations_namespace` property defines the PHP Namespace used in the PHP classes generated by the CLI tool for your migrations. 
* The `migrations_table_name` property defines the SQL table name where your migration status is going to be stored. 
* The `migrations_migrations_directory_name` property defines the directory where your migration files are going to be stored, and can be relative to the path where your `migrations.yml` is.

You may refer to the [Doctrine Migration reference](http://docs.doctrine-project.org/projects/doctrine-migrations/en/latest/reference/introduction.html#configuration) about `migrations.yml`.

### migrations-db.php

`migrations-db.php` is the file used to define your database credentials. For a MySQL databse, it looks like this :

```php
<?php return [
    'driver' => 'pdo_mysql',
    'dbname' => 'doctrine_migration',
    'user' => 'my_user',
    'password' => 'my_password',
    'host' => '127.0.0.1',
    'charset' => 'utf8',
];
```

Please refer to the [Doctrine DBAL Documentation](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/configuration.html) to find out available drivers and their options.

## Usage

To run all migrations up to the latest, simply run `php vendor/bin/doctrine-migrations migrations:migrate`.

## Phinx alternative

You can find a [Phinx](https://github.com/robmorgan/phinx) version of this demo at [bastientanesie/demo-phinx-faker](https://github.com/bastientanesie/demo-phinx-faker), using Faker for database seeding.

## Usefull links

* [Doctrine Migration Documentation](http://docs.doctrine-project.org/projects/doctrine-migrations/en/latest/index.html)
* [Rob Allen's DevNotes: Standalone Doctrine Migrations redux](https://akrabat.com/standalone-doctrine-migrations-redux/)
* [Doctrine DBAL Documentation: Schema Representation](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/reference/schema-representation.html)
