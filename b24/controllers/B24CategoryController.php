<?php

namespace app\b24\controllers;

use app\b24\models\B24Category;
use app\b24\models\B24CategorySearch;

class B24CategoryController extends B24ActiveRestController
{
    public $modelClass = B24Category::class;
    public $modelClassSearch = B24CategorySearch::class;

    public function actionTest(){
        return $this->modelClass::find()->where(['id' => 16])->one();
    }
}