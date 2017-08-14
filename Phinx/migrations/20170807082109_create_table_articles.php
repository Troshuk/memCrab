<?php

use Phinx\Migration\AbstractMigration;

class CreateTableArticles extends AbstractMigration
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
    public function change()
    {
    	$articles = $this->table('articles');

    	$articles->addColumn('title', 'string', array('limit'=>150))
    		     ->addColumn('alias', 'string', array('limit'=>200))
    		     ->addColumn('text', 'text')
    		     ->addColumn('view', 'integer', array('default'=>10, 'null'=>TRUE))
    		     ->addColumn('home', 'enum', array('values'=>array('yes', 'no')))
    		     ->addColumn('date', 'timestamp', array('default'=>'CURRENT_TIMESTAMP'))
    		     ->addIndex(array('title', 'alias'), array('unique'=>TRUE))
    		     ->create();
    }
}