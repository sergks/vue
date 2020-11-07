<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\LoginForm;
use yii\rest\Controller;

class UserController extends ApiController
{
    public function actionLogin()
    {
        $form = new LoginForm();
        $form->load(\Yii::$app->request->getBodyParams(), '');

        if ($form->validate()) {
            $form->login();
            return $form->getUser();
        }

        return $form;
    }
}