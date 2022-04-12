<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GroupSubject;

/**
 * GroupSubjectSearch represents the model behind the search form of `app\models\GroupSubject`.
 */
class GroupSubjectSearch extends GroupSubject
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'group_id', 'subject_id', 'semester'], 'integer'],
            [['academic_year'], 'safe'],
            [['status'], 'boolean']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = GroupSubject::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'group_id' => $this->group_id,
            'subject_id' => $this->subject_id,
            'semester' => $this->semester,
        ]);

        $query->andFilterWhere(['like', 'academic_year', $this->academic_year]);

        return $dataProvider;
    }
}
