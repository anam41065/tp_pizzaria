<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "codpostal".
 *
 * @property string $cod_postal
 * @property string $localidade
 *
 * @property Cliente[] $clientes
 * @property Empregado[] $empregados
 */
class Codpostal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'codpostal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_postal', 'localidade'], 'required'],
            [['cod_postal'], 'string', 'max' => 10],
            [['localidade'], 'string', 'max' => 200],
            [['cod_postal'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cod_postal' => 'Cod Postal',
            'localidade' => 'Localidade',
        ];
    }

    /**
     * Gets query for [[Clientes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Cliente::className(), ['cod_postal' => 'cod_postal']);
    }

    /**
     * Gets query for [[Empregados]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmpregados()
    {
        return $this->hasMany(Empregado::className(), ['cod_postal' => 'cod_postal']);
    }
}
