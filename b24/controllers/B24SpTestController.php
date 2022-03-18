<?php

namespace app\b24\controllers;

use app\b24\models\B24SpTest;
use app\b24\models\B24SpTestSearch;

class B24SpTestController extends B24ActiveRestController
{
    public $modelClass = B24SpTest::class;
    public $modelClassSearch = B24SpTestSearch::class;

    public function actions()
    {
        $actions = parent::actions();
//        $actions['data']['auth'] = function ()  {
//           $userId = Yii::$app->user->id;
//           $userModel = User::find()->where(['id' => $userId])->one();
//           $auth = $userModel->b24AccessParams;
//           return ArrayHelper::toArray(json_decode($auth));
//        };
        $actions['data']['prepareSearchQuery'] = function ($query, $requestParams) {
            return $query
                ->with([
                    'category',
                    'company',
                    'contact',
                    'createdBy0',
                    'updatedBy0',
                    'assignedBy',
                    'movedBy0',
                    'observers0',
                    'stage',
                    'source',
                ]);
        };
        return $actions;
    }
//
//    public function actions() {
//        $actions = parent::actions();
//        unset($actions['data']['auth']);
//        return $actions;
//    }
//
//
//
    public function actionTest()
    {
        return $this->modelClass::find()
            ->where(['id' => [8, 10]])
//            ->with([
//                'category',
//                'company',
//                'contact',
//                'createdBy0',
//                'updatedBy0',
//                'assignedBy',
//                'movedBy0',
//                'observers0',
//                'stage',
//                'source',
//            ])
            ->all();
//        return $this->modelClass::find()->where(['id' => 8])->one();
    }

    public function actionOne()
    {
        return $this->modelClass::find()->where(['id' => 10])->with(['category'])->one();
    }
}