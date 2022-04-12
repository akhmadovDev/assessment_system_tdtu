<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $status
 *
 * @property GroupSubject[] $groupSubjects
 * @property Student[] $students
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[GroupSubjects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroupSubjects()
    {
        return $this->hasMany(GroupSubject::className(), ['group_id' => 'id']);
    }

    /**
     * Gets query for [[Students]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['group_id' => 'id']);
    }
}
