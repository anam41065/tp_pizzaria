<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "utilizador".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $nome
 * @property string $email
 * @property string $cargo
 * @property string $authkey
 */
class Registar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'utilizador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nome', 'email', 'cargo', 'authKey'], 'required'],
            [['username', 'password'], 'string', 'max' => 30],
            [['nome', 'email', 'authKey'], 'string', 'max' => 50],
            [['cargo'], 'string', 'max' => 20],
            [['email'], 'unique'],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'nome' => 'Nome',
            'email' => 'Email',
            'cargo' => 'Cargo',
            'authKey' => 'Authkey',
        ];
    }
}
