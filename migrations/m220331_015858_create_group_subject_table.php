<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%group_subject}}`.
 */
class m220331_015858_create_group_subject_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%group_subject}}', [
            'id' => $this->primaryKey(),
            'group_id' => $this->integer(),
            'subject_id' => $this->integer(),
            'semester' => $this->integer(),
            'academic_year' => $this->string(50),
            'status' => $this->boolean()->defaultValue(1)
        ]);

        $this->addForeignKey(
            'fk-group_id-group',
            'group_subject',
            'group_id',
            'group',
            'id'
        );

        $this->addForeignKey(
            'fk-subject_id-subject',
            'group_subject',
            'subject_id',
            'subject',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%group_subject}}');
    }
}
