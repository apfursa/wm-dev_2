<?php

namespace app\b24\controllers;

use app\b24\models\B24Stage;
//use app\b24\models\B24CategorySearch;

class B24StageController extends B24ActiveRestController
{
    public $modelClass = B24Stage::class;
    //public $modelClassSearch = B24CategorySearch::class;

    public function actionTest(){
        return $this->modelClass::find()->where(['id' => [1, 11]])->all();
    }

    public function actionOne(){
        return $this->modelClass::find()->where(['id' => 35])->one();
    }
}