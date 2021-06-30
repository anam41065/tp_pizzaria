<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Veiculo;

/**
 * VeiculoSearch represents the model behind the search form of `app\models\Veiculo`.
 */
class VeiculoSearch extends Veiculo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['matricula', 'cod_classe'], 'safe'],
            [['n_classe'], 'integer'],
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
        $query = Veiculo::find();

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
            'n_classe' => $this->n_classe,
        ]);

        $query->andFilterWhere(['like', 'matricula', $this->matricula])
            ->andFilterWhere(['like', 'cod_classe', $this->cod_classe]);

        return $dataProvider;
    }
}
