<?php

use yii\db\Migration;

/**
 * Class m210418_140116_create_table_warhouse
 */
class m210418_140116_create_table_warhouse extends Migration
{
    public function up()
    {
        $this->createTable('warhouse', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer()->notNull(),
            'quantity' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('warhouse');
    }
}
