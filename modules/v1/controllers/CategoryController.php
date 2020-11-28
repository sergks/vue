<?php

namespace app\modules\v1\controllers;

use app\modules\v1\models\Category;

class CategoryController extends ApiController
{
    public function actionList()
    {
        $categories = Category::find()
            ->orderBy(['name' => SORT_ASC])
            ->all();

        return $categories;
    }
}