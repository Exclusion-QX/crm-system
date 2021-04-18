<?php

use yii\db\Migration;

/**
 * Class m210327_150956_alter_table_user
 */
class m210327_150956_alter_table_user extends Migration
{

    public function up()
    {
        $this->addColumn('{{%user}}', 'users_group_id', $this->integer());
        $this->addColumn('{{%user}}', 'company_id', $this->integer());
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'users_group_id');
        $this->dropColumn('{{%user}}', 'company_id');
    }

}
