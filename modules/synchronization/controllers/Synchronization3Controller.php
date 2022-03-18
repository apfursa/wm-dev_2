<?php

namespace app\controllers;

use app\models\synchronization\ImportDataBaseEmployees;
use app\models\synchronization\ImportDataBaseLead;
use app\models\synchronization\ImportDataBaseCompany;
use app\models\synchronization\ImportDataBaseDeal;
use app\models\synchronization\ImportDataBaseTel;
use app\models\synchronization\ImportDataBaseStatus;
use app\models\synchronization\ImportDataBaseCategory;
use app\models\synchronization\ImportDataBaseQualityControlData;
use app\models\synchronization\ImportDataBaseSyncStage;
use app\models\synchronization\ImportDataBaseIncomeExpense;
use app\models\synchronization\Company;
use app\models\synchronization\Deal;
use app\models\synchronization\Lead;
use app\models\synchronization\Tel;
use app\models\synchronization\Employees;
use app\models\synchronization\Status;
use app\models\synchronization\Category;


class Synchronization3Controller extends \yii\web\Controller {

    // Синхронизация компании
//    public function actionSynchronCompany() {
//        Company::synchronization();
//        return $this->render('synchronCompany');
//    }

//    public function actionSynchronDeal() {
//        Deal::synchronization();
//        return $this->render('synchronDeal');
//    }

    public function actionSynchronLead() {
        Lead::synchronization();
        return $this->render('synchronLead');
    }

    public function actionSynchronTel() {
        Tel::synchronization();
        return $this->render('synchronTel');
    }

    public function actionSynchronEmployees() {
        Employees::synchronization();
        return $this->render('synchronEmployees');
    }

    public function actionSynchronStatus() {
        Status::synchronization();
        return $this->render('synchronStatus');
    }

    public function actionSynchronCategory() {
        Category::synchronization();
        return $this->render('synchronCategory');
    }

    public function actionImportDataBaseCompany() {
        ImportDataBaseCompany::importData();
        return $this->render('importDataBaseCompany');
    }

    public function actionImportDataBaseDeal() {
        ImportDataBaseDeal::importData();
        return $this->render('importDataBaseDeal');
    }

    public function actionImportDataBaseLead() {
        ImportDataBaseLead::importData();
        return $this->render('importDataBaseLead');
    }

    public function actionImportDataBaseTel() {
        ImportDataBaseTel::importData();
        return $this->render('importDataBaseTel');
    }

    public function actionImportDataBaseEmployees() {
        ImportDataBaseEmployees::importData();
        return $this->render('importDataBaseEmployees');
    }

    public function actionImportDataBaseStatus() {
        ImportDataBaseStatus::importData();
        return $this->render('importDataBaseStatus');
    }

    public function actionImportDataBaseCategory() {
        ImportDataBaseCategory::importData();
        return $this->render('importDataBaseCategory');
    }

    public function actionImportDataBaseQualityControlData() {
        ImportDataBaseQualityControlData::importData();
        return $this->render('ImportDataBaseQualityControlData');
    }
    
    
    public function actionImportDataBaseSyncStage() {
        ImportDataBaseSyncStage::importData();
        return $this->render('ImportDataBaseSyncStage');
    }
    
    public function actionImportDataBaseIncomeExpense() {
        ImportDataBaseIncomeExpense::importData();
        return $this->render('ImportDataBaseIncomeExpense');
    }

}
