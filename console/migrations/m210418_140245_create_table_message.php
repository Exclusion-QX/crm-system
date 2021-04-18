<?php

use yii\db\Migration;

/**
 * Class m210418_140245_create_table_message
 */
class m210418_140245_create_table_message extends Migration
{
    public function up()
    {
        $this->createTable('message', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'client_id' => $this->integer()->notNull(),
            'address_soc_net' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('message');
    }
}
