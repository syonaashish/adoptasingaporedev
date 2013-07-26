<?php

/**
 * This is the model base class for the table "tbl_levels".
 *
 * Columns in table "tbl_levels" available as properties of the model:
 
      * @property integer $levelID
      * @property string $levelName
      * @property string $areaType
      * @property integer $trashItems
      * @property integer $timerCountDown
      * @property string $subLevel
      * @property integer $bonusPoint
 *
 * There are no model relations.
 */
abstract class BaseLevels extends CActiveRecord {
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_levels';
    }

    public function rules() {
        return array(
            array('levelName, areaType, trashItems, timerCountDown, subLevel, bonusPoint', 'required'),
            array('trashItems, timerCountDown, bonusPoint', 'numerical', 'integerOnly' => true),
            array('levelName, areaType', 'length', 'max' => 255),
            array('subLevel', 'length', 'max' => 100),
            array('levelID, levelName, areaType, trashItems, timerCountDown, subLevel, bonusPoint', 'safe', 'on' => 'search'),
        );
    }
    
    public function __toString() {
        return (string) $this->levelName;
    }

    public function behaviors() {
        return array();
    }

    public function relations() {
        return array(
        );
    }

    public function attributeLabels() {
        return array(
            'levelID' => Yii::t('app', 'Level'),
            'levelName' => Yii::t('app', 'Level Name'),
            'areaType' => Yii::t('app', 'Area Type'),
            'trashItems' => Yii::t('app', 'Trash Items'),
            'timerCountDown' => Yii::t('app', 'Timer Count Down'),
            'subLevel' => Yii::t('app', 'Sub Level'),
            'bonusPoint' => Yii::t('app', 'Bonus Point'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('levelID', $this->levelID);
        $criteria->compare('levelName', $this->levelName, true);
        $criteria->compare('areaType', $this->areaType, true);
        $criteria->compare('trashItems', $this->trashItems);
        $criteria->compare('timerCountDown', $this->timerCountDown);
        $criteria->compare('subLevel', $this->subLevel, true);
        $criteria->compare('bonusPoint', $this->bonusPoint);

        return new CActiveDataProvider(get_class($this), array(
                    'criteria' => $criteria,
                ));
    }
    
}