<?php

use yii\db\Migration;

/**
 * Class m210327_154546_create_table_user_group
 */
class m210327_154546_create_table_user_group extends Migration
{

    public function up()
    {
        $this->createTable('user_group', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200)->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('user_group');
    }

}
