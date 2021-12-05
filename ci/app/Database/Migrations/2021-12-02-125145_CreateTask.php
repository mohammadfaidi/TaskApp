<?php

namespace App\Database\Migrations;
//in migration class you have access to database ....in current object
use CodeIgniter\Database\Migration;

class CreateTask extends Migration
{
    public function up()
    {
                //add field to create column
        $this->forge->addField([
            'id' => [
                'type'           =>  'INT',
                'constraint'     =>5,
                'unsigned'       => true,
                'auto_increment' => true,

            ],

            'description' => [
                'type' => 'VARCHAR',
                'constraint' => '128',

            ]

        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('task');

    }

    public function down()
    {
        //
        $this->forge->dropTable('task');
    }
}
