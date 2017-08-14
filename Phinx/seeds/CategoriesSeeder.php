<?php

use Phinx\Seed\AbstractSeed;

class CategoriesSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = array(
            array(
                'name'=>'Cat1'
                ),
            array(
                'name'=>'Item1',
                'parentId'=>1
                ),
            array(
                'name'=>'Item2',
                'parentId'=>1
                ),
            array(
                'name'=>'Item3',
                'parentId'=>1
                )
        );
        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
