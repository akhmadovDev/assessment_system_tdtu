<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subject".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $type
 * @property string|null $description
 *
 * @property GroupSubject[] $groupSubjects
 */
class Subject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subject';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['type'], 'string', 'max' => 100],
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
            'name' => 'Fan nomi',
            'type' => 'Fan turi',
            'description' => 'QO\'shimcha',
        ];
    }

    /**
     * Gets query for [[GroupSubjects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroupSubjects()
    {
        return $this->hasMany(GroupSubject::className(), ['subject_id' => 'id']);
    }
}
