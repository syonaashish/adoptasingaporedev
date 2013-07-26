<div class="wide form">

<?php $form = $this->beginWidget('CActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'levelID'); ?>
		<?php echo $form->textField($model,'levelID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'levelName'); ?>
		<?php echo $form->textField($model,'levelName',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'areaType'); ?>
		<?php echo $form->textField($model,'areaType',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'trashItems'); ?>
		<?php echo $form->textField($model,'trashItems'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'timerCountDown'); ?>
		<?php echo $form->textField($model,'timerCountDown'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'subLevel'); ?>
		<?php echo $form->textField($model,'subLevel',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'bonusPoint'); ?>
		<?php echo $form->textField($model,'bonusPoint'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->