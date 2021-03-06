<?php //$model = LocalUsers::model()->findAll();
$model = new LocalUsers();

$criteria = new CDbCriteria();

?>

<!-- search-form -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'localUsers-grid',
/*    'dataProvider' =>new CActiveDataProvider('LocalUsers', array(
        'criteria' => $criteria,
        'pagination' => array(
            'pageSize' => 10,
        ),
    )),*/
	'dataProvider' => $model->search(),
	//'filter' => $model,
	'columns' => array(
        array(
            'header'=>'#',
            'class'=>'IndexColumn',
        ),
        array(
            'header'=>'Name',
            'name'=>'full_name',
            'value'=>'$data->full_name',
        ),

       
        array(
            'header'=>'Email',
            'name'=>'email_address',
            'value'=>'$data->email_address',
        ),
      userScore,     
      currentLevel,



array(
			'class' => 'CButtonColumn',
    'header'=>'Delete',
    'template'=>'{delete}',
    'buttons'=>array
    (
        'delete' => array
        (
            'url'=>'"index.php?r=adoptasingaporedev/default/settings&tab='.$_GET['tab'].'&themeId='.$_REQUEST['themeId'].'&localAppId='.$_REQUEST['localAppId'].'&nowAction=Delete&id=$data->id#tabs-2"'
        ),
    ),
		),
	),
    'itemsCssClass' => 'tDefault'
)); ?>

<script>

    function addHash()
    {
        $('.previous a').attr("href",$('.previous a').attr("href")+"#tabs-2");
        $('.page a').each(function(){  $(this).attr("href",$(this).attr("href")+"#tabs-2"); });
        $('.next a').attr("href",$('.next a').attr("href")+"#tabs-2");
    }
    addHash();
</script>