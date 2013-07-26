<?php

/**
 * This is the model base class for the table "tbl_content".
 *
 * Columns in table "tbl_content" available as properties of the model:
 
      * @property integer $id
      * @property string $title
      * @property string $content
	  * @property string $slug
 *
 * There are no model relations.
 */
abstract class BaseContent extends CActiveRecord {
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_content';
    }

    public function rules() {
        return array(
            array('title, content', 'default', 'setOnEmpty' => true, 'value' => null),
            array('title,slug', 'length', 'max' => 255),
            array('content', 'safe'),
            array('id, title, content', 'safe', 'on' => 'search'),
        );
    }
    
    public function __toString() {
        return (string) $this->title;
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
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'content' => Yii::t('app', 'Content'),
	    'slug' => Yii::t('app', 'Page'),
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('slug', $this->slug, true);

/*        return new CActiveDataProvider(get_class($this), array(
                    'criteria' => $criteria,
                ));*/
				
				return new CActiveDataProvider(get_class($this), array(
                    'criteria' => $criteria,
      'sort'=>array(
   'defaultOrder'=>array(
       'id'=>false,
   ),
    ),
     
      'pagination' => array(
   
   'pageSize' => 100,
      ),
                ));
    }
    
}