<?php $model = new Levels(); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'levels-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
        'levelID',
        'levelName',
        'areaType',
        'trashItems',
        'timerCountDown',
        'subLevel',
        'bonusPoint',
array(
			'class' => 'CButtonColumn',
                                          
		),
	),
)); ?>