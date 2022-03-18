<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;
use app\modules\synchronization\models\Synchronization;
use app\models\Company;


class TestController extends Controller
{
    public function actionTest()
    {
        $arrDealId = Yii::$app->getRequest()->getBodyParams();
        $res = $this->asJson($arrDealId);
//        Yii::warning($arrDealId, '$arrDealId');
        return $res;

    }

    public function actionTestSynchronization()
    {
        Synchronization::synchronization();
//        $arrDealId = Yii::$app->getRequest()->getBodyParams();
//        $res = $this->asJson($arrDealId);
////        Yii::warning($arrDealId, '$arrDealId');
//        return $res;

    }

    public function actionCompany()
    {
        $com = new Company();
        $a = $com->rules();
//        $arrDealId = Yii::$app->getRequest()->getBodyParams();
        $res = $this->asJson($a);
//        Yii::warning($arrDealId, '$arrDealId');
        return $res;

    }

}
