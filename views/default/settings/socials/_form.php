<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>.
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'socials-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>
    
        <div class="row">
            <?php echo $form->labelEx($model,'socialID'); ?>
            <?php echo $form->textField($model,'socialID'); ?>
            <?php echo $form->error($model,'socialID'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'socailName'); ?>
            <?php echo $form->textField($model,'socailName',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'socailName'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'icon'); ?>
            <?php echo $form->textField($model,'icon',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'icon'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'body'); ?>
            <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'body'); ?>
        </div>
        
        <div class="row">
            <?php echo $form->labelEx($model,'headline'); ?>
            <?php echo $form->textField($model,'headline',array('size'=>60,'maxlength'=>100)); ?>
            <?php echo $form->error($model,'headline'); ?>
        </div>
            <?php
        echo CHtml::submitButton(Yii::t('app', 'Save'));
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => 'javascript:history.go(-1)'));
$this->endWidget(); ?>
</div> <!-- form -->