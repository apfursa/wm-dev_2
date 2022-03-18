<?php

namespace app\modules\synchronization\controllers;


use wm\admin\models\settings\events\Events;
use yii\helpers\ArrayHelper;
use app\b24\models\B24Company;

class SynchronizationRunController extends \yii\web\Controller
{
//    public static $onCrmAdd = 'onCrmCompanyAdd';
//
//    public static function synchronization()
//    {
//        $arr = [
//            [
//                'entity' => 'company',
//            ],
//            [
//                'entity' => 'contact',
//            ],
//
//        ];
//
//        $answerB24 = Events::getOffline(self::$onCrmAdd);
//        $eventsB24 = ArrayHelper::getValue($answerB24, 'result.events');
//        $arrayId = self::getArrayId($eventsB24);
//        $models = B24Company::find()->where(['id' => $arrayId])->all();
//        $res = $this->asJson($models);
//        return $res;
//    }
}
