<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>.
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'levels-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>
    
        <div class="row">
            <?php echo $form->labelEx($model,'levelName'); ?>
            <?php echo $form->textField($model,'levelName',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'levelName'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'areaType'); ?>
            <?php echo $form->textField($model,'areaType',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'areaType'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'trashItems'); ?>
            <?php echo $form->textField($model,'trashItems'); ?>
            <?php echo $form->error($model,'trashItems'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'timerCountDown'); ?>
            <?php echo $form->textField($model,'timerCountDown'); ?>
            <?php echo $form->error($model,'timerCountDown'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'subLevel'); ?>
            <?php echo $form->textField($model,'subLevel',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'subLevel'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'bonusPoint'); ?>
            <?php echo $form->textField($model,'bonusPoint'); ?>
            <?php echo $form->error($model,'bonusPoint'); ?>
        </div>
            <?php
        echo CHtml::submitButton(Yii::t('app', 'Save'));
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => 'javascript:history.go(-1)'));
$this->endWidget(); ?>
</div> <!-- form -->