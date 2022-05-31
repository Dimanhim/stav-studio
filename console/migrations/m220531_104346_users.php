<?php

use yii\db\Migration;

/**
 * Class m220531_104346_users
 */
class m220531_104346_users extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id'                    => Schema::TYPE_PK,

            'name'                  => Schema::TYPE_STRING . ' NOT NULL',
            'phone'                 => Schema::TYPE_STRING,
            'email'                 => Schema::TYPE_STRING,
            'username'              => Schema::TYPE_STRING,
            'password'              => Schema::TYPE_STRING,
            'password_hash'         => Schema::TYPE_STRING,
            'auth_key'              => Schema::TYPE_STRING,
            'status_id'             => Schema::TYPE_INTEGER,
            'user_position'         => Schema::TYPE_STRING,
            'role'                  => Schema::TYPE_STRING,

            'is_active'             => Schema::TYPE_SMALLINT,
            'deleted'               => Schema::TYPE_SMALLINT,
            'position'              => Schema::TYPE_INTEGER,
            'created_at'            => Schema::TYPE_INTEGER,
            'updated_at'            => Schema::TYPE_INTEGER,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220531_104346_users cannot be reverted.\n";

        return false;
    }
    */
}
