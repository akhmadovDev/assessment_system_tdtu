<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "assessment".
 *
 * @property int $id
 * @property int|null $student_id
 * @property string|null $type
 * @property string|null $rating
 * @property int|null $status
 * @property string|null $date
 *
 * @property Student $student
 */
class Assessment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'assessment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id', 'status'], 'integer'],
            [['date'], 'safe'],
            [['type'], 'string', 'max' => 100],
            [['rating'], 'string', 'max' => 10],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Talabal Id',
            'type' => 'Baholash Turi',
            'rating' => 'Rating',
            'status' => 'Status',
            'date' => 'Baholash Kuni',
        ];
    }

    /**
     * Gets query for [[Student]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
