<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form of `app\models\Cliente`.
 */
class ClienteSearch extends Cliente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_cliente', 'n_porta'], 'integer'],
            [['contacto', 'nome', 'rua', 'cod_postal'], 'safe'],
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
        $query = Cliente::find();

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
            'num_cliente' => $this->num_cliente,
            'n_porta' => $this->n_porta,
        ]);

        $query->andFilterWhere(['like', 'contacto', $this->contacto])
            ->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'rua', $this->rua])
            ->andFilterWhere(['like', 'cod_postal', $this->cod_postal]);

        return $dataProvider;
    }
}
