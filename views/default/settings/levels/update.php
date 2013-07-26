<?php
$this->breadcrumbs = array(
    Yii::t('app', 'Levels') => array('index'),
    Yii::t('app', $model->levelName) => array('view','levelID'=>$model->levelID),
    Yii::t('app', 'Update'),
);
if(!isset($this->menu) || $this->menu === array())
$this->menu=array(
	array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->levelID),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
	//array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
);
?>

<h1> <?php echo Yii::t('app', 'Update');?> <?php echo $model->levelName; ?> </h1>
<?php
$this->renderPartial('_form', array(
			'model'=>$model));
?>