<?php

namespace app\modules\v1\controllers;

class PageController extends ApiController
{
    public function actionDelivery()
    {
        return [
            'id' => 1,
            'name' => 'Доставка и оплата',
            'text' => 'Текст страницы "Доставка и оплата"'
        ];
    }

    public function actionContact()
    {
        return [
            'id' => 2,
            'name' => 'Наши контакты',
            'text' => 'Текст страницы "Наши контакты"'
        ];
    }
}