<div class="wide form">

<?php $form = $this->beginWidget('CActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'trashID'); ?>
		<?php echo $form->textField($model,'trashID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'trashName'); ?>
		<?php echo $form->textField($model,'trashName',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'trashImage'); ?>
		<?php echo $form->textField($model,'trashImage',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->