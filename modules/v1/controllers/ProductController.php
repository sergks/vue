<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\Product;
use Yii;
use yii\web\NotFoundHttpException;

class ProductController extends ApiController
{
    public function actionHome()
    {
        $products = Product::find()
            ->orderBy(['createdAt' => SORT_DESC])
            ->where(['categoryId' => 1])
            ->limit(3)
            ->all();

        return $products;
    }

    public function actionCatalog()
    {
        $products = Product::find()
            ->orderBy(['createdAt' => SORT_DESC])
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

    public function actionInfo($url)
    {
        $product = Product::find()
            ->with(['category', 'propertiesValues', 'propertiesValues.property'])
            ->where(['url' => $url])
            ->one();

        if ($product === null) {
            throw new NotFoundHttpException('Товар не найден');
        }

        return $product;
    }
}