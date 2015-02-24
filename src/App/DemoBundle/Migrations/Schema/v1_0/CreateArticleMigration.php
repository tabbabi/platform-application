<?php

namespace App\DemoBundle\Migrations\Schema\v1_0;

use Oro\Bundle\MigrationBundle\Migration\Migration;
use Oro\Bundle\MigrationBundle\Migration\QueryBag;
/**
 * Description of AppDemoBundle
 *
 * @author nour
 */
class CreateArticleMigration implements Migration
{
    public function up(\Doctrine\DBAL\Schema\Schema $schema, QueryBag $queries) {
        $table = $schema->createTable('app_article');
        $table->addColumn('id', 'integer', ['autoincrement' => true]);
        $table->addColumn('title', 'string', ['length' => 255]);
        $table->addColumn('content', 'string', ['length' => 255]);
        $table->setPrimaryKey(['id']);
    }

}
