<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Empregado;

/**
 * EmpregadoSearch represents the model behind the search form of `app\models\Empregado`.
 */
class EmpregadoSearch extends Empregado
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_empregado'], 'integer'],
            [['nome', 'contacto', 'rua', 'cod_postal', 'n_porta'], 'safe'],
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
        $query = Empregado::find();

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
            'id_empregado' => $this->id_empregado,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'contacto', $this->contacto])
            ->andFilterWhere(['like', 'rua', $this->rua])
            ->andFilterWhere(['like', 'cod_postal', $this->cod_postal])
            ->andFilterWhere(['like', 'n_porta', $this->n_porta]);

        return $dataProvider;
    }
}
