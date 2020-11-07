<?php

namespace app\modules\v1\controllers;

class PageController extends ApiController
{
    public function actionDelivery()
    {
        return [
            'id' => 1,
            'name' => 'Доставка и оплата',
            'text' => 'The carousel is a slideshow for cycling through a series of content, built with CSS3D transforms. It works with a series of images, text, or custom markup.It also includes support for previous/next controls and indicators.'
        ];
    }

    public function actionContact()
    {
        return [
            'id' => 2,
            'name' => 'Контакты',
            'text' => 'The carousel is a slideshow for cycling through a series of content, built with CSS3D transforms. It works with a series of images, text, or custom markup.It also includes support for previous/next controls and indicators.'
        ];
    }
}