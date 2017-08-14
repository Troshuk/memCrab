<?php

use Phinx\Migration\AbstractMigration;

class CreateTablePages extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $table = $this->table('pages',array('id'=>FALSE,'primary_key'=>array('pages_id')));

        $table->addColumn('pages_id', 'integer')
        ->addColumn('title', 'string')
        ->addColumn('created', 'datetime')
        ->create();
    }

    public function down()
    {
        $this->dropTable('pages');
    }
}