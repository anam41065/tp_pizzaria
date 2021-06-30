<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pizza".
 *
 * @property int $numero
 * @property string $nome
 * @property float $preco
 * @property string $tamanho
 * @property int $id_massa
 *
 * @property LinhaProduto[] $linhaProdutos
 * @property Pedido[] $codPedidos
 * @property TipoMassa $massa
 * @property PizzaIngr[] $pizzaIngrs
 * @property Ingrediente[] $ingredientes
 */
class Pizza extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pizza';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'preco', 'tamanho', 'id_massa'], 'required'],
            [['preco'], 'number'],
            [['id_massa'], 'integer'],
            [['nome', 'tamanho'], 'string', 'max' => 20],
            [['id_massa'], 'exist', 'skipOnError' => true, 'targetClass' => TipoMassa::className(), 'targetAttribute' => ['id_massa' => 'id_massa']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'numero' => 'Numero',
            'nome' => 'Nome',
            'preco' => 'Preco',
            'tamanho' => 'Tamanho',
            'id_massa' => 'Id Massa',
        ];
    }

    /**
     * Gets query for [[LinhaProdutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLinhaProdutos()
    {
        return $this->hasMany(LinhaProduto::className(), ['id_pizza' => 'numero']);
    }

    /**
     * Gets query for [[CodPedidos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodPedidos()
    {
        return $this->hasMany(Pedido::className(), ['num_pedido' => 'cod_pedido'])->viaTable('linha_produto', ['id_pizza' => 'numero']);
    }

    /**
     * Gets query for [[Massa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMassa()
    {
        return $this->hasOne(TipoMassa::className(), ['id_massa' => 'id_massa']);
    }

    /**
     * Gets query for [[PizzaIngrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPizzaIngrs()
    {
        return $this->hasMany(PizzaIngr::className(), ['id_pizza' => 'numero']);
    }

    /**
     * Gets query for [[Ingredientes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientes()
    {
        return $this->hasMany(Ingrediente::className(), ['id_ingrediente' => 'id_ingrediente'])->viaTable('pizza_ingr', ['id_pizza' => 'numero']);
    }
}
