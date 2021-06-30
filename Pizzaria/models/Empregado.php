<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empregado".
 *
 * @property int $id_empregado
 * @property string $nome
 * @property string $contacto
 * @property string $rua
 * @property string $cod_postal
 * @property string $n_porta
 *
 * @property Codpostal $codPostal
 * @property Pedido[] $pedidos
 */
class Empregado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'empregado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'contacto', 'rua', 'cod_postal', 'n_porta'], 'required'],
            [['nome', 'rua'], 'string', 'max' => 200],
            [['contacto'], 'string', 'max' => 15],
            [['cod_postal', 'n_porta'], 'string', 'max' => 10],
            [['cod_postal'], 'exist', 'skipOnError' => true, 'targetClass' => Codpostal::className(), 'targetAttribute' => ['cod_postal' => 'cod_postal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_empregado' => 'Id Empregado',
            'nome' => 'Nome',
            'contacto' => 'Contacto',
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
        return $this->hasMany(Pedido::className(), ['id_empregado' => 'id_empregado']);
    }
}
