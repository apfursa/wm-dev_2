<?php

namespace app\b24\controllers;

use app\b24\models\B24Status;
use app\b24\models\B24StatusSearch;

class B24StatusController extends B24ActiveRestController
{
    public $modelClass = B24Status::class;
    public $modelClassSearch = B24StatusSearch::class;
}