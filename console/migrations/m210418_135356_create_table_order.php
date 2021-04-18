<?php

use yii\db\Migration;

/**
 * Class m210418_135356_create_table_order
 */
class m210418_135356_create_table_order extends Migration
{
    public function up()
    {
        $this->createTable('order', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'client_id' => $this->integer()->notNull(),
            'company_id' => $this->integer()->notNull(),
            'date_create' => $this->timestamp()->notNull(),
            'date_completed' => $this->timestamp()->notNull(),
            'price' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
            'stage' => $this->string(45)->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('order');
    }
}
