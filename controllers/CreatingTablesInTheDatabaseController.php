<?php


namespace app\controllers;

use app\models\ImportDataBaseDeal;
use app\models\Test;
use app\models\ChatBot;
use app\modules\synchronization\models\CreateTable;

class CreatingTablesInTheDatabaseController extends \yii\web\Controller
{
    public function actionCreateTables()
    {
        $arr = [
            'deal' => 'crm.deal.fields',
            'contact' => 'crm.contact.fields',
            'company' => 'crm.company.fields',
        ];
        foreach($arr as $entity => $crm){
            CreateTable::createTable($entity, $crm);
        }
    }
}