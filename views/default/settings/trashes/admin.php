<?php $model = new Trashes(); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'trashes-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
        'trashID',
        'trashName',
        'trashImage',
array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>