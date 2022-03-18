<?php

namespace app\modules\synchronization\models;

use Yii;
use wm\admin\models\settings\events\Events;
use yii\base\Model;
use yii\helpers\ArrayHelper;
use wm\admin\models\Settings;
use yii\db\Exception;

class SynchronizationCompany extends Model {

    public static function synchronization($classB24, $classSql) {
        $maxCountQuerySync = Settings::getParametrByName('maxCountQuery');
        $isSync = Settings::getParametrByName(self::$isSyncError);

        $isSyncAdd = false;
        while (!$isSyncAdd && $maxCountQuerySync >= 2 && $isSync) {
            $isSyncAdd = self::synchronAdd($maxCountQuerySync, $classB24, $classSql);
        }

        $isSyncUpdate = false;
        while (!$isSyncUpdate && $maxCountQuerySync >= 2 && $isSync) {
            $isSyncUpdate = self::synchronUpdate($maxCountQuerySync, $classB24, $classSql);
        }

        $isSyncDelete = false;
        while (!$isSyncDelete && $maxCountQuerySync >= 2 && $isSync) {
            $isSyncDelete = self::synchronDelete($maxCountQuerySync, $classB24, $classSql);
        }
    }

    public static function synchronAdd(&$maxCountQuerySync, $classB24, $classSql) {
//        Yii::warning($classB24, '$classB24');
//        Yii::warning($classSql, '$classSql');
        $answerB24 = Events::getOffline(self::$onCrmAdd);
        Yii::warning($answerB24, '$answerB24');
        $maxCountQuerySync--;
        $eventsB24 = ArrayHelper::getValue($answerB24, 'result.events');
        Yii::warning($eventsB24, '$eventsB24');
        $arrayId = self::getArrayId($eventsB24);
        Yii::warning($arrayId, '$arrayId');
        if ($arrayId) {
            $arrObjCompanyB24 = $classB24::find()->where(['ID' => $arrayId])->all();
            $arrCompanyB24 = ArrayHelper::toArray($arrObjCompanyB24);
            Yii::warning($arrCompanyB24, '$arrCompanyB24');
            $maxCountQuerySync--;
            foreach($arrCompanyB24 as $oneCompanyB24){
                $oneCompanySql = self::findModel($oneCompanyB24['ID'], $classSql);
                Yii::warning(ArrayHelper::toArray($oneCompanySql), '$oneCompanySql');
                $oneCompanySql->load($oneCompanyB24, '');
                Yii::warning(ArrayHelper::toArray($oneCompanySql), '$oneCompanySql_load');
                $oneCompanySql->save();
                Yii::warning(ArrayHelper::toArray($oneCompanySql), '$oneCompanySql_save');
                if ($oneCompanySql->errors) {
                    Yii::error($oneCompanySql->errors, '$oneCompanySql SynchronizationCompany add Save');
                    Yii::error($arrayId, '$arrayIdOnCrmCompanyAdd');
                    $setingsSyncModel = Settings::find()->where(['name_id' => self::$isSyncError])->one();
                    $setingsSyncModel->value = 0;
                    $setingsSyncModel->save();
                    throw new Exception('Ошибка добавления записи в БД при синхронизации.');
                }
            }
        }
        return count($arrayId) < 50 ? true : false;
    }

    public static function synchronUpdate(&$maxCountQuerySync, $classB24, $classSql) {
        Yii::warning($classB24, '$classB24');
        Yii::warning($classSql, '$classSql');
        $answerB24 = Events::getOffline(self::$onCrmUpdate);
        Yii::warning($answerB24, '$answerB24');
        $maxCountQuerySync--;
        $eventsB24 = ArrayHelper::getValue($answerB24, 'result.events');
        Yii::warning($eventsB24, '$eventsB24');
        $arrayId = self::getArrayId($eventsB24);
        Yii::warning($arrayId, '$arrayId');
        if ($arrayId) {
            $arrObjCompanyB24 = $classB24::find()->where(['ID' => $arrayId])->all();
            $arrCompanyB24 = ArrayHelper::toArray($arrObjCompanyB24);
            Yii::warning($arrCompanyB24, '$arrCompanyB24');
            $maxCountQuerySync--;
            foreach ($arrCompanyB24 as $oneCompanyB24) {
                $oneCompanySql = self::findModel($oneCompanyB24['ID'], $classSql);
                Yii::warning(ArrayHelper::toArray($oneCompanySql), '$oneCompanySql');
                $oneCompanySql->load($oneCompanyB24, '');
                Yii::warning(ArrayHelper::toArray($oneCompanySql), '$oneCompanySql_load');
                $oneCompanySql->save();
                Yii::warning(ArrayHelper::toArray($oneCompanySql), '$oneCompanySql_save');
                if ($oneCompanySql->errors) {
                    Yii::error($oneCompanySql->errors, '$oneCompanySql SynchronizationCompany update Save');
                    Yii::error($arrayId, '$arrayIdOnCrmCompanyUpdate');
                    $setingsSyncModel = Settings::find()->where(['name_id' => self::$isSyncError])->one();
                    $setingsSyncModel->value = 0;
                    $setingsSyncModel->save();
                    throw new Exception('Ошибка изменения записи в БД при синхронизации.');
                }
            }
        }
        return count($arrayId) < 50 ? true : false;
    }

    public static function synchronDelete(&$maxCountQuerySync, $classB24, $classSql) {
        Yii::warning($classB24, '$classB24');
        Yii::warning($classSql, '$classSql');
        $answerB24 = Events::getOffline(self::$onCrmDelete);
        Yii::warning($answerB24, '$answerB24');
        $maxCountQuerySync--;
        $eventsB24 = ArrayHelper::getValue($answerB24, 'result.events');
        Yii::warning($eventsB24, '$eventsB24');
        $arrayId = self::getArrayId($eventsB24);
        Yii::warning($arrayId, '$arrayId');
        if ($arrayId) {
            foreach ($arrayId as $id) {
                $model = $classSql::find()->where(['ID' => $id])->one();
                if ($model) {
                    $model->delete();
                }
            }
        }
        return count($arrayId) < 50 ? true : false;
    }

    public static function getArrayId($eventsB24) {
        $arrayId = [];
        foreach ($eventsB24 as $value) {
            $arrayId[] = ArrayHelper::getValue($value, 'EVENT_DATA.FIELDS.ID');
        }
        return $arrayId;
    }

    public static function findModel($id, $classSql) {
        if ($model = $classSql::find()->where(['id' => $id])->one()) {
            return $model;
        } else {
            $model = new $classSql;
            return $model;
        }
    }
}
