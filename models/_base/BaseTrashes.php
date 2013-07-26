<?php

/**
 * This is the model base class for the table "tbl_trashes".
 *
 * Columns in table "tbl_trashes" available as properties of the model:
 
      * @property integer $trashID
      * @property string $trashName
      * @property string $trashImage
 *
 * There are no model relations.
 */
abstract class BaseTrashes extends CActiveRecord {
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_trashes';
    }

    public function rules() {
        return array(
            array('trashName, trashImage', 'required'),
            array('trashName', 'length', 'max' => 100),
            array('trashImage', 'length', 'max' => 255),
            array('trashID, trashName, trashImage', 'safe', 'on' => 'search'),
        );
    }
    
    public function __toString() {
        return (string) $this->trashName;
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
            'trashID' => Yii::t('app', 'Trash'),
            'trashName' => Yii::t('app', 'Trash Name'),
            'trashImage' => Yii::t('app', 'Trash Image'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('trashID', $this->trashID);
        $criteria->compare('trashName', $this->trashName, true);
        $criteria->compare('trashImage', $this->trashImage, true);

        return new CActiveDataProvider(get_class($this), array(
                    'criteria' => $criteria,
                ));
    }
    
}