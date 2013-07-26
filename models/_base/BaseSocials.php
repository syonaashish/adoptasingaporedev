<?php

/**
 * This is the model base class for the table "tbl_socials".
 *
 * Columns in table "tbl_socials" available as properties of the model:
 
      * @property integer $socialID
      * @property string $socailName
      * @property string $icon
      * @property string $body
      * @property string $headline
 *
 * There are no model relations.
 */
abstract class BaseSocials extends CActiveRecord {
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_socials';
    }

    public function rules() {
        return array(
            array('socialID, socailName, icon, body, headline', 'required'),
            array('socialID', 'numerical', 'integerOnly' => true),
            array('socailName, headline', 'length', 'max' => 100),
            array('icon', 'length', 'max' => 255),
            array('socialID, socailName, icon, body, headline', 'safe', 'on' => 'search'),
        );
    }
    
    public function __toString() {
        return (string) $this->socailName;
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
            'socialID' => Yii::t('app', 'Social'),
            'socailName' => Yii::t('app', 'Socail Name'),
            'icon' => Yii::t('app', 'Icon'),
            'body' => Yii::t('app', 'Body'),
            'headline' => Yii::t('app', 'Headline'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('socialID', $this->socialID);
        $criteria->compare('socailName', $this->socailName, true);
        $criteria->compare('icon', $this->icon, true);
        $criteria->compare('body', $this->body, true);
        $criteria->compare('headline', $this->headline, true);

        return new CActiveDataProvider(get_class($this), array(
                    'criteria' => $criteria,
                ));
    }
    
}