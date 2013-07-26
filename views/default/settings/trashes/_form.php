<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>.
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'trashes-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>
    
        <div class="row">
            <?php echo $form->labelEx($model,'trashName'); ?>
            <?php echo $form->textField($model,'trashName',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'trashName'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'trashImage'); ?>
            <?php echo $form->textField($model,'trashImage',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'trashImage'); ?>
        </div>
            <?php
        echo CHtml::submitButton(Yii::t('app', 'Save'));
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => 'javascript:history.go(-1)'));
$this->endWidget(); ?>
</div> <!-- form -->