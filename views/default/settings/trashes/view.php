<?php
$this->breadcrumbs = array(
    Yii::t('app', 'Trashes') => array('index'),
    Yii::t('app', $model->trashName),
);if(!isset($this->menu) || $this->menu === array()) {
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->trashID)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->trashID),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
/*array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),*/
);
}
?>

<h1><?php echo $model->trashName; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data' => $model,
'attributes' => array(
'trashID','trashName','trashImage',)));?>