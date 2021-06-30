<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "veiculo".
 *
 * @property string $matricula
 * @property string $cod_classe
 * @property int $n_classe
 *
 * @property Pedido[] $pedidos
 */
class Veiculo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'veiculo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['matricula', 'cod_classe', 'n_classe'], 'required'],
            [['n_classe'], 'integer'],
            [['matricula'], 'string', 'max' => 9],
            [['cod_classe'], 'string', 'max' => 10],
            [['matricula'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'matricula' => 'Matricula',
            'cod_classe' => 'Cod Classe',
            'n_classe' => 'N Classe',
        ];
    }

    /**
     * Gets query for [[Pedidos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedido::className(), ['id_veiculo' => 'matricula']);
    }
}
