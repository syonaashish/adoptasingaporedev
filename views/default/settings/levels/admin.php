<?php $model = new Levels(); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'levels-grid',
	'dataProvider' => $model->search(),
	//'filter' => $model,
	'columns' => array(
       array(
 'header'=>'#',
 'class'=>'IndexColumn',
 ),
        'levelName',
        'areaType',
        'trashItems',
        'timerCountDown',
        'subLevel',
        'bonusPoint',
array(
        'class' => 'CButtonColumn',
         'template'=>'{update}{delete}',
        'buttons'=>array
	  (
	    'update' => array
	    (
	     'url'=>'"index.php?r=adoptasingaporedev/default/settings&tab='.$_GET['tab'].'&themeId='.$_REQUEST['themeId'].'&localAppId='.$_REQUEST['localAppId'].'&subTab=create&nowAction=Update&id=$data->levelID#tabs-1"'
	    ),
	      'delete' => array
	    (
	     'url'=>'"index.php?r=adoptasingaporedev/default/settings&tab='.$_GET['tab'].'&themeId='.$_REQUEST['themeId'].'&localAppId='.$_REQUEST['localAppId'].'&subTab=create&nowAction=Delete&id=$data->levelID#tabs-1"'
	    ),
	  ),
		),
	),
    'itemsCssClass' => 'tDefault',
)); ?>

<script>

function addHash()
{
 $('.previous a').attr("href",$('.previous a').attr("href")+"#tabs-1");
 $('.page a').each(function(){  $(this).attr("href",$(this).attr("href")+"#tabs-1"); });
 $('.next a').attr("href",$('.next a').attr("href")+"#tabs-1");
 
   $('tr th a').attr("href",$('tr th a').attr("href")+"#tabs-1");
}
addHash();
</script>