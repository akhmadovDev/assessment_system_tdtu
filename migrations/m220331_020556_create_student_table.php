<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%student}}`.
 */
class m220331_020556_create_student_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%student}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(255),
            'group_id' => $this->integer(),
            'status' => $this->boolean()->defaultValue(1),
            'description' => $this->text()
        ]);

        $this->addForeignKey(
            'fk-student-group_id-group',
            'student',
            'group_id',
            'group',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%student}}');
    }
}
