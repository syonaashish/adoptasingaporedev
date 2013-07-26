<?php $model = new Socials(); ?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'socials-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
        'socialID',
        'socailName',
        'icon',
        'body',
        'headline',
array(
			'class' => 'CButtonColumn',
		),
	),
)); ?>