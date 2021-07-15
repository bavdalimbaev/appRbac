<?php

use yii\db\Migration;

/**
 * Class m210715_055720_create_posts
 */
class m210715_055720_create_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey()->notNull()->append('AUTO_INCREMENT'),
            'title' => $this->string(),
            'description' => $this->text(),
            'user_id' => $this->integer(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('post');
    }

}
