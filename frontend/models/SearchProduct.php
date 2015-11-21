<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Product;

/**
 * SearchProduct represents the model behind the search form about `frontend\models\Product`.
 */
class SearchProduct extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'pr_sum'], 'integer'],
            [['pr_name', 'image'], 'safe'],
            [['pr_price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'pr_sum' => $this->pr_sum,
            'pr_price' => $this->pr_price,
        ]);

        $query->andFilterWhere(['like', 'pr_name', $this->pr_name])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
