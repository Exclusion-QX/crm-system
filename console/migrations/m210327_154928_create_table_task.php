<?php

use yii\db\Migration;

/**
 * Class m210327_154928_create_table_task
 */
class m210327_154928_create_table_task extends Migration
{

    public function up()
    {
        $this->createTable('task', [
            'id' => $this->primaryKey(),
            'order_id' => $this->integer()->notNull(),
            'company_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'name' => $this->string(200)->notNull(),
            'definition' => $this->timestamp()->notNull(),
            'date_first_sale' => $this->timestamp()->notNull(),
            'date_last_talk' => $this->timestamp()->notNull(),
            'name_social_network' => $this->string(45)->notNull(),
            'address_soc_net' => $this->string(200)->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('task');
    }

}
