<?php

namespace app\modules\v1\controllers;

class ProductController extends ApiController
{
    public function actionHome()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'iPhone 11',
                'image' => 'https://cdn1.ozone.ru/s3/multimedia-8/wc1200/6024092216.jpg',
                'price' => 80000
            ],
            [
                'id' => 2,
                'name' => 'Galaxy s10',
                'image' => 'https://cdn1.ozone.ru/s3/multimedia-8/wc1200/6024092216.jpg',
                'price' => 60000
            ],
            [
                'id' => 3,
                'name' => 'ZTE Phone A11',
                'image' => 'https://cdn1.ozone.ru/s3/multimedia-8/wc1200/6024092216.jpg',
                'price' => 45000
            ]
        ];

        return $products;
    }

    public function actionCatalog()
    {
        $products = [
            [
                'id' => 1,
                'name' => 'iPhone 11',
                'image' => 'https://cdn1.ozone.ru/s3/multimedia-8/wc1200/6024092216.jpg',
                'price' => 80000
            ],
            [
                'id' => 2,
                'name' => 'Galaxy s10',
                'image' => 'https://cdn1.ozone.ru/s3/multimedia-8/wc1200/6024092216.jpg',
                'price' => 60000
            ],
            [
                'id' => 3,
                'name' => 'ZTE Phone A11',
                'image' => 'https://cdn1.ozone.ru/s3/multimedia-8/wc1200/6024092216.jpg',
                'price' => 45000
            ],
            [
                'id' => 3,
                'name' => 'ZTE Phone A12',
                'image' => 'https://cdn1.ozone.ru/s3/multimedia-8/wc1200/6024092216.jpg',
                'price' => 5000
            ]
        ];

        return $products;
    }
}