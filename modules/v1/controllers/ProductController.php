<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\Product;
use Yii;

class ProductController extends ApiController
{
    public function actionHome()
    {
        $products = Product::find()
            ->orderBy(['createdAt' => SORT_DESC])
            ->limit(3)
            ->all();

        return $products;
    }

    public function actionCatalog()
    {
        $products = Product::find()
            ->all();

        return $products;
    }

    public function actionCreate()
    {
        $model = new Product();
        $model->load(Yii::$app->request->getBodyParams(), '');
        $model->save();

        return $model;
    }
}