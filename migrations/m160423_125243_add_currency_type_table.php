<?php
use yii\db\Schema;
use yii\db\Migration;

class m160423_125243_add_currency_type_table extends Migration
{
    public function up()
    {
        $this->createTable('currency_type', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('currency_type');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
