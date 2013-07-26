<?php
$model = new Flavour();
$this->renderPartial('settings/recipes/_form', array(
    'model' => $model,
    'buttons' => 'create'));

?>