<?php

use yii\db\Migration;

/**
 * Class m210327_143959_create_table_client
 */
class m210327_143959_create_table_client extends Migration
{

    public function up()
    {
        $this->createTable('client', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200)->notNull(),
            'phone' => $this->string(45)->notNull(),
            'email' => $this->string(45)->notNull(),
            'update_at' => $this->timestamp()->notNull(),
            'date_first_contact' => $this->timestamp()->notNull(),
            'date_first_sale' => $this->timestamp()->notNull(),
            'date_last_talk' => $this->timestamp()->notNull(),
            'name_social_network' => $this->string(45)->notNull(),
            'address_soc_net' => $this->string(200)->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('client');
    }
}
