<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_pagamento".
 *
 * @property int $id_pagamento
 * @property string $descricao
 *
 * @property Pedido[] $pedidos
 */
class TipoPagamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_pagamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descricao'], 'required'],
            [['descricao'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pagamento' => 'Id Pagamento',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * Gets query for [[Pedidos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedido::className(), ['id_pagamento' => 'id_pagamento']);
    }
}
