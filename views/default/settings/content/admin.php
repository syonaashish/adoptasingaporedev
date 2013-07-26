<?php $model = new Content(); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'content-grid',
	'dataProvider' => $model->search(),
//	'filter' => $model,
	'columns' => array(
        array(
 'header'=>'#',
 'class'=>'IndexColumn',
 ),
        'slug',
        'title',
        
array(
        'class' => 'CButtonColumn',
         'template'=>'{update}',
        'buttons'=>array
	  (
	    'update' => array
	    (
	     'url'=>'"index.php?r=adoptasingaporedev/default/settings&tab='.$_GET['tab'].'&themeId='.$_REQUEST['themeId'].'&localAppId='.$_REQUEST['localAppId'].'&subTab=create&nowAction=Update&id=$data->id#tabs-3"'
	    ),
	
	  ),
		),
	),
	'itemsCssClass' => 'tDefault',
)); ?>

<script>


function addHash()
{
 $('.previous a').attr("href",$('.previous a').attr("href")+"#tabs-3");
 $('.page a').each(function(){  $(this).attr("href",$(this).attr("href")+"#tabs-3"); });
 $('.next a').attr("href",$('.next a').attr("href")+"#tabs-3");
 
   $('tr th a').attr("href",$('tr th a').attr("href")+"#tabs-3");
}
addHash();
</script>