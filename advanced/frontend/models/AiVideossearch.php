<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Aivideos;

/**
 * Aivideossearch represents the model behind the search form of `frontend\models\Aivideos`.
 */
class Aivideossearch extends Aivideos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Video_ID'], 'integer'],
            [['Title', 'Instructor', 'Platform', 'Duration', 'Description', 'Video_Link'], 'safe'],
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
        $query = Aivideos::find();

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
            'Video_ID' => $this->Video_ID,
        ]);

        $query->andFilterWhere(['like', 'Title', $this->Title])
            ->andFilterWhere(['like', 'Instructor', $this->Instructor])
            ->andFilterWhere(['like', 'Platform', $this->Platform])
            ->andFilterWhere(['like', 'Duration', $this->Duration])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'Video_Link', $this->Video_Link]);

        return $dataProvider;
    }
}
