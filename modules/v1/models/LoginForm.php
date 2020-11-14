<?php

namespace app\modules\v1\models;

use yii\base\Model;

class LoginForm extends Model
{
    public $email;
    public $password;

    public function rules()
    {
        return [
            [['email', 'password'], 'required'],
            [['email'], 'email', 'message' => 'Некорректный Email.'],
            [['email', 'password'], 'string', 'max' => 64, 'min' => 3]
        ];
    }

    public function login()
    {
        // TODO: сделать авторизацию
    }

    public function getUser()
    {
        return [
            'id' => 1,
            'name' => 'Иван',
            'email' => $this->email,
            'accessToken' => md5(microtime(true))
        ];
    }
}