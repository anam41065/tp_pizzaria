<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pedido;

/**
 * PedidoSearch represents the model behind the search form of `app\models\Pedido`.
 */
class PedidoSearch extends Pedido
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_pedido', 'quantidade', 'id_cliente', 'valor', 'id_empregado', 'id_pagamento'], 'integer'],
            [['descricao', 'data', 'id_veiculo'], 'safe'],
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
        $query = Pedido::find();

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
            'num_pedido' => $this->num_pedido,
            'quantidade' => $this->quantidade,
            'id_cliente' => $this->id_cliente,
            'data' => $this->data,
            'valor' => $this->valor,
            'id_empregado' => $this->id_empregado,
            'id_pagamento' => $this->id_pagamento,
        ]);

        $query->andFilterWhere(['like', 'descricao', $this->descricao])
            ->andFilterWhere(['like', 'id_veiculo', $this->id_veiculo]);

        return $dataProvider;
    }
}
