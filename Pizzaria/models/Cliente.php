<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $num_cliente
 * @property string $contacto
 * @property string $nome
 * @property string $rua
 * @property string $cod_postal
 * @property int $n_porta
 *
 * @property Codpostal $codPostal
 * @property Pedido[] $pedidos
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contacto', 'nome', 'rua', 'cod_postal', 'n_porta'], 'required'],
            [['n_porta'], 'integer'],
            [['contacto'], 'string', 'max' => 15],
            [['nome'], 'string', 'max' => 100],
            [['rua'], 'string', 'max' => 200],
            [['cod_postal'], 'string', 'max' => 10],
            [['cod_postal'], 'exist', 'skipOnError' => true, 'targetClass' => Codpostal::className(), 'targetAttribute' => ['cod_postal' => 'cod_postal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num_cliente' => 'Num Cliente',
            'contacto' => 'Contacto',
            'nome' => 'Nome',
            'rua' => 'Rua',
            'cod_postal' => 'Cod Postal',
            'n_porta' => 'N Porta',
        ];
    }

    /**
     * Gets query for [[CodPostal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodPostal()
    {
        return $this->hasOne(Codpostal::className(), ['cod_postal' => 'cod_postal']);
    }

    /**
     * Gets query for [[Pedidos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedido::className(), ['id_cliente' => 'num_cliente']);
    }
}
