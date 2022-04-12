<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%subject}}`.
 */
class m220331_015535_create_subject_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%subject}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'type' => $this->string(100),
            'status' => $this->boolean()->defaultValue(1),
            'description' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%subject}}');
    }
}
