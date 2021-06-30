<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedido".
 *
 * @property int $num_pedido
 * @property int $quantidade
 * @property string $descricao
 * @property int $id_cliente
 * @property string $data
 * @property int $valor
 * @property int $id_empregado
 * @property string $id_veiculo
 * @property int $id_pagamento
 *
 * @property LinhaProduto[] $linhaProdutos
 * @property Pizza[] $pizzas
 * @property Cliente $cliente
 * @property Empregado $empregado
 * @property Veiculo $veiculo
 * @property TipoPagamento $pagamento
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pedido';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['quantidade', 'descricao', 'id_cliente', 'data', 'valor', 'id_empregado', 'id_veiculo', 'id_pagamento'], 'required'],
            [['quantidade', 'id_cliente', 'valor', 'id_empregado', 'id_pagamento'], 'integer'],
            [['data'], 'safe'],
            [['descricao'], 'string', 'max' => 100],
            [['id_veiculo'], 'string', 'max' => 8],
            [['id_cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['id_cliente' => 'num_cliente']],
            [['id_empregado'], 'exist', 'skipOnError' => true, 'targetClass' => Empregado::className(), 'targetAttribute' => ['id_empregado' => 'id_empregado']],
            [['id_veiculo'], 'exist', 'skipOnError' => true, 'targetClass' => Veiculo::className(), 'targetAttribute' => ['id_veiculo' => 'matricula']],
            [['id_pagamento'], 'exist', 'skipOnError' => true, 'targetClass' => TipoPagamento::className(), 'targetAttribute' => ['id_pagamento' => 'id_pagamento']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num_pedido' => 'Num Pedido',
            'quantidade' => 'Quantidade',
            'descricao' => 'Descricao',
            'id_cliente' => 'Id Cliente',
            'data' => 'Data',
            'valor' => 'Valor',
            'id_empregado' => 'Id Empregado',
            'id_veiculo' => 'Id Veiculo',
            'id_pagamento' => 'Id Pagamento',
        ];
    }

    /**
     * Gets query for [[LinhaProdutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLinhaProdutos()
    {
        return $this->hasMany(LinhaProduto::className(), ['cod_pedido' => 'num_pedido']);
    }

    /**
     * Gets query for [[Pizzas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPizzas()
    {
        return $this->hasMany(Pizza::className(), ['numero' => 'id_pizza'])->viaTable('linha_produto', ['cod_pedido' => 'num_pedido']);
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['num_cliente' => 'id_cliente']);
    }

    /**
     * Gets query for [[Empregado]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpregado()
    {
        return $this->hasOne(Empregado::className(), ['id_empregado' => 'id_empregado']);
    }

    /**
     * Gets query for [[Veiculo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVeiculo()
    {
        return $this->hasOne(Veiculo::className(), ['matricula' => 'id_veiculo']);
    }

    /**
     * Gets query for [[Pagamento]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPagamento()
    {
        return $this->hasOne(TipoPagamento::className(), ['id_pagamento' => 'id_pagamento']);
    }
}
