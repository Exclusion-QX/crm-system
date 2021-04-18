<?php

use yii\db\Migration;

/**
 * Class m210327_154803_create_table_company
 */
class m210327_154803_create_table_company extends Migration
{

    public function up()
    {
        $this->createTable('company', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200)->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('company');
    }

}
