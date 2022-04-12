<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%assessment}}`.
 */
class m220331_020859_create_assessment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%assessment}}', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer(),
            'type' => $this->string(100),
            'rating' => $this->string(10),
            'status' => $this->boolean()->defaultValue(1),
            'date' => $this->date()
        ]);

        $this->addForeignKey(
            'fk-student_id-assessment',
            'assessment',
            'student_id',
            'student',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%assessment}}');
    }
}
