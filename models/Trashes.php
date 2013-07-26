<?php


Yii::import('application.modules.adoptasingaporedev.models._base.BaseTrashes');

class Trashes extends BaseTrashes{
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function init() {
        return parent::init();
    }
     public function getDbConnection()
    {
        $db = Yii::app()->controller->module->db;
        return Yii::createComponent($db);
    }
}