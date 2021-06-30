<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_massa".
 *
 * @property int $id_massa
 * @property string $nome
 * @property string $descricao
 *
 * @property Pizza[] $pizzas
 */
class TipoMassa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_massa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'descricao'], 'required'],
            [['nome'], 'string', 'max' => 20],
            [['descricao'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_massa' => 'Id Massa',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * Gets query for [[Pizzas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPizzas()
    {
        return $this->hasMany(Pizza::className(), ['id_massa' => 'id_massa']);
    }
}
