<?php


namespace app\modules\synchronization\models;


use wm\b24tools\b24Tools;
use yii\helpers\ArrayHelper;
use yii\base\Model;
use Yii;
use yii\helpers\Inflector;
use yii\db\Migration;
use Bitrix24\B24Object;

class CreateTable extends Model
{


    public function createTable($entity, $crm)
    {
        $objMigr = new Migration();
        $objMigr->createTable($entity, [
            'ID' => $objMigr->primaryKey(),
        ]);
        $entityFields = self::fieldsEntity($crm);
        $table = Yii::$app->db->getTableSchema($entity);
        foreach ($entityFields as $oneField) {
            if (!isset($table->columns[$oneField])) {
                $objMigr->addColumn($table->name, $oneField, 'varchar(32)');
            }
        }
    }

    public static function getFieldsEntity($crm)
    {
        $component = new b24Tools();
        $b24App = $component->connectFromAdmin();
        $obB24 = new B24Object($b24App);
        $answerB24 = $obB24->client->call(
            $crm,
            )['result'];
        return $answerB24;
    }

    public static function fieldsEntity($crm)
    {
        $objData = self::getFieldsEntity($crm);
        $arrData = ArrayHelper::toArray($objData);
        $arrKeyUp = array_keys($arrData);
//        $fields = [];
//        foreach ($arrKeyUp as $field) {
//            $fields[] = Inflector::variablize(strtolower($field));
//        }
        return $arrKeyUp;
    }
}