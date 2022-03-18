<?php

namespace app\models;

//use Yii;
//use wm\admin\models\settings\events\Events;
//use wm\b24tools\b24Tools;
//use yii\helpers\ArrayHelper;
//use wm\admin\models\Settings;
//use yii\db\Exception;
use wm\yii\db\ActiveRecord;

class Employees extends ActiveRecord {

    public static function tableName() {
        return 'employees';
    }

    public function rules() {
        return [
            [[
            "id",
            "active",
            "email",
            "lastLogin",
            "dateRegister",
            "isOnline",
            "name",
            "lastName",
            "secondName",
            "personalGender",
            "personalProfession",
            "personalWww",
            "personalBirthday",
            "personalPhoto",
            "personalIcq",
            "personalPhone",
            "personalFax",
            "personalMobile",
            "personalPager",
            "personalStreet",
            "personalCity",
            "personalState",
            "personalZip",
            "personalCountry",
            "timeZoneOffset",
            "workCompany",
            "workPosition",
            "workPhone",
            "ufDepartment",
            "ufInterests",
            "ufSkills",
            "ufWebSites",
            "ufXing",
            "ufLinkedin",
            "ufFacebook",
            "ufTwitter",
            "ufSkype",
            "ufDistrict",
            "ufPhoneInner",
            "userType"
                ], 'safe'],
        ];
    }

    public function attributeLabels() {
        return [
            "id" => '',
            "active" => '',
            "email" => '',
            "lastLogin" => '',
            "dateRegister" => '',
            "isOnline" => '',
            "name" => '',
            "lastName" => '',
            "secondName" => '',
            "personalGender" => '',
            "personalProfession" => '',
            "personalWww" => '',
            "personalBirthday" => '',
            "personalPhoto" => '',
            "personalIcq" => '',
            "personalPhone" => '',
            "personalFax" => '',
            "personalMobile" => '',
            "personalPager" => '',
            "personalStreet" => '',
            "personalCity" => '',
            "personalState" => '',
            "personalZip" => '',
            "personalCountry" => '',
            "timeZoneOffset" => '',
            "workCompany" => '',
            "workPosition" => '',
            "workPhone" => '',
            "ufDepartment" => '',
            "ufInterests" => '',
            "ufSkills" => '',
            "ufWebSites" => '',
            "ufXing" => '',
            "ufLinkedin" => '',
            "ufFacebook" => '',
            "ufTwitter" => '',
            "ufSkype" => '',
            "ufDistrict" => '',
            "ufPhoneInner" => '',
            "userType" => ''
        ];
    }

//    public static function synchronization() {
//        $maxCountQuerySync = Settings::getParametrByName('maxCountQuerySync');
//        $isSync = Settings::getParametrByName(self::$isSyncError);
//
//        $isSyncAdd = false;
//        while (!$isSyncAdd && $maxCountQuerySync >= 2 && $isSync) {
//            $isSyncAdd = self::synchronAdd($maxCountQuerySync);
//        }
//    }
//
//    public static function synchronAdd(&$maxCountQuerySync) {
//        $answerB24 = Events::getOffline(self::$onCrmAdd);
//        //Yii::warning($answerB24, '$answerB24');
//        $maxCountQuerySync--;
//        $eventsB24 = ArrayHelper::getValue($answerB24, 'result.events');
//        $arrayId = self::getArrayId($eventsB24);
//        if ($arrayId) {
//            $B24List = self::getB24List($arrayId, self::$crmList);
//            $maxCountQuerySync--;
//            foreach ($B24List as $oneEntity) {
//                $model = self::findModel($oneEntity['ID']);
//                //$model = new self::$modelClass;
//                $convertedFieldsOneEntity = self::convertFieldsOneEntity($oneEntity);
//                $model->load($convertedFieldsOneEntity);
//                $model->save();
//                if ($model->errors) {
//                    Yii::error($model->errors, '$model Employees add Save');
//                    Yii::error($arrayId, '$arrayIdonUserAdd');
//                    $setingsSyncModel = Settings::find()->where(['name_id' => self::$isSyncError])->one();
//                    $setingsSyncModel->value = 0;
//                    $setingsSyncModel->save();
//                    throw new Exception('Ошибка добавления записи в БД при синхронизации.');
//                }
//            }
//        }
//        return count($arrayId) < 50 ? true : false;
//    }
//
//    public static function getArrayId($eventsB24) {
//        $arrayId = [];
//        foreach ($eventsB24 as $value) {
//            $arrayId[] = ArrayHelper::getValue($value, 'EVENT_DATA.FIELDS.ID');
//        }
//        return $arrayId;
//    }
//
//    public static function getB24List($arrayId, $crm) {
//        $component = new b24Tools();
//        $b24App = $component->connectFromAdmin();
//        $obB24 = new \Bitrix24\B24Object($b24App);
//        $answerB24 = $obB24->client->call(
//                        $crm,
//                        ['filter' => ["ID" => $arrayId]],
//                )['result'];
//        return $answerB24;
//    }
//
//    public static function convertFieldsOneEntity($oneEntity) {
//        $convertedFieldsOneEntity = [];
//        foreach ($oneEntity as $key => $value) {
//            $a = \yii\helpers\Inflector::variablize(strtolower($key));
//            $convertedFieldsOneEntity[$a] = $value;
//        }
//        return $convertedFieldsOneEntity;
//    }
//
//    public static function findModel($id) {
//        if ($model = self::find()->where(['id' => $id])->one()) {
//            return $model;
//        } else {
//            $model = new self::$modelClass;
//            return $model;
//        }
//    }

}
