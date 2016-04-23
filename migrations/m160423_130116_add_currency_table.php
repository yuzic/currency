<?php
use yii\db\Schema;
use yii\db\Migration;

class m160423_130116_add_currency_table extends Migration
{
    public function up()
    {
        $this->createTable('currency', [
            'id' => Schema::TYPE_PK,
            'price' => Schema::TYPE_DECIMAL . ' NOT NULL',
            'date_at' => Schema::TYPE_DATE,
            'currency_type_id' => Schema::TYPE_SMALLINT . ' NOT NULL REFERENCES currency_type(id)'
        ]);
    }

    public function down()
    {
        $this->dropTable('currency');
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
