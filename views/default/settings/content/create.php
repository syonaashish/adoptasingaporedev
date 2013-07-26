<?php
$model = new Content();
$this->renderPartial('settings/content/_form', array(
			'model' => $model,
			'buttons' => 'create'));

?>