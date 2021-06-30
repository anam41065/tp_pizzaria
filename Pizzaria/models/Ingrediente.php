<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingrediente".
 *
 * @property int $id_ingrediente
 * @property string $nome
 * @property int $quantidade
 * @property string $descricao
 *
 * @property PizzaIngr[] $pizzaIngrs
 * @property Pizza[] $pizzas
 */
class Ingrediente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingrediente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'quantidade', 'descricao'], 'required'],
            [['quantidade'], 'integer'],
            [['nome'], 'string', 'max' => 100],
            [['descricao'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ingrediente' => 'Id Ingrediente',
            'nome' => 'Nome',
            'quantidade' => 'Quantidade',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * Gets query for [[PizzaIngrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPizzaIngrs()
    {
        return $this->hasMany(PizzaIngr::className(), ['id_ingrediente' => 'id_ingrediente']);
    }

    /**
     * Gets query for [[Pizzas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPizzas()
    {
        return $this->hasMany(Pizza::className(), ['numero' => 'id_pizza'])->viaTable('pizza_ingr', ['id_ingrediente' => 'id_ingrediente']);
    }
}
