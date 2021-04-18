<?php

use yii\db\Migration;

/**
 * Class m210418_135852_create_table_product
 */
class m210418_135852_create_table_product extends Migration
{
    public function up()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'company_id' => $this->integer()->notNull(),
            'name' => $this->string(200)->notNull(),
            'price' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('product');
    }
}
