<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "utilizador".
 *
 * @property int $id
 * @property string $id_utilizador
 * @property string $passe
 * @property string $nome
 * @property string $email
 * @property string $cargo
 * @property string $authkey
 */
class Utilizador extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
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
            [['username', 'password'], 'string', 'max' => 30],
            [['nome', 'email', 'authKey'], 'string', 'max' => 50],
            [['cargo'], 'string', 'max' => 20],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['authKey'], 'unique']
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
    
    public static function findIdentity($id){
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null){
        throw new NotSupportedException();//I don't implement this method because I don't have any access token column in my database
    }

    public function getId(){
        return $this->id;
    }

    public function getAuthKey(){
        return $this->authKey;
    }

    public function validateAuthKey($authKey){
        return $this->authKey === $authKey;
    }
    public static function findByUsername($username){
        return self::findOne(['username'=>$username]);
    }

    public function validatePassword($password){
        return $this->password === $password;
    }
}
