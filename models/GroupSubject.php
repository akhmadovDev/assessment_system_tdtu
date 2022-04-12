<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "group_subject".
 *
 * @property int $id
 * @property int|null $group_id
 * @property int|null $subject_id
 * @property int|null $semester
 * @property string|null $academic_year
 *
 * @property Group $group
 * @property Subject $subject
 */
class GroupSubject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group_subject';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'subject_id', 'semester'], 'integer'],
            [['academic_year'], 'string', 'max' => 50],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::className(), 'targetAttribute' => ['group_id' => 'id']],
            [['subject_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subject::className(), 'targetAttribute' => ['subject_id' => 'id']],
            [['status'], 'boolean']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_id' => 'Guruh',
            'subject_id' => 'Fan',
            'semester' => 'Semester',
            'academic_year' => 'O\'quv Yili',
        ];
    }

    /**
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    /**
     * Gets query for [[Subject]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubject()
    {
        return $this->hasOne(Subject::className(), ['id' => 'subject_id']);
    }
}
