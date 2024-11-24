<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Aitools;

/**
 * Aitoolssearch represents the model behind the search form of `frontend\models\Aitools`.
 */
class Aitoolssearch extends Aitools
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Tool_ID'], 'integer'],
            [['Tool_Name', 'Tool_Type', 'Description', 'Official_Link', 'image_url'], 'safe'],
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
        $query = Aitools::find();

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
            'Tool_ID' => $this->Tool_ID,
        ]);

        $query->andFilterWhere(['like', 'Tool_Name', $this->Tool_Name])
            ->andFilterWhere(['like', 'Tool_Type', $this->Tool_Type])
            ->andFilterWhere(['like', 'Description', $this->Description])
            ->andFilterWhere(['like', 'Official_Link', $this->Official_Link])
            ->andFilterWhere(['like', 'image_url', $this->image_url]);

        return $dataProvider;
    }
}
