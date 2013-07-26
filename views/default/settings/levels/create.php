<?php
$model = new Levels();
$this->renderPartial('settings/levels/_form', array(
			'model' => $model,
			'buttons' => 'create'));

?>