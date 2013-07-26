<?php 

if(!empty($_REQUEST['id']))
{
    $model = Levels::model()->findByPk($_REQUEST['id']);
}
else
{
    $model = new Levels;
}

 $action = (isset($_REQUEST['nowAction']))?$_REQUEST['nowAction']:"Create";


if($action == "Delete")
{
     $model->delete();
    Yii::app()->user->setFlash('success', "Deleted Successfully!");	    
    //sending to report
    $this->redirect("index.php?r=adoptasingaporedev/default/settings&tab=".$_GET['tab']."&themeId=".(int)$_REQUEST['themeId']."&localAppId=".(int)$_REQUEST['localAppId']."#tabs-1");
   
}

if (isset($_POST['Levels']))
{
 
 
    
    $model->setAttributes($_POST['Levels']);    
       
    
    try
    {
	if ($model->save())
	{
	    if($action == "Create")
	    {
		Yii::app()->user->setFlash('success', "Added Successfully!");	    
		//send to form again
		//$this->redirect("index.php?r=dogoodsg/default/settings&tab=manageEvents&themeId=".(int)$_REQUEST['themeId']."&localAppId=".(int)$_REQUEST['localAppId']."&subTab=create#tabs-4");
		
		$this->redirect("index.php?r=adoptasingaporedev/default/settings&tab=".$_GET['tab']."&themeId=".(int)$_REQUEST['themeId']."&localAppId=".(int)$_REQUEST['localAppId']."#tabs-1");
	    }
	    else
	    {
		Yii::app()->user->setFlash('success', "Updated Successfully!");	    
		//sending to report
		$this->redirect("index.php?r=adoptasingaporedev/default/settings&tab=".$_GET['tab']."&themeId=".(int)$_REQUEST['themeId']."&localAppId=".(int)$_REQUEST['localAppId']."#tabs-1");
	    }
	    
	}
        else
        {
            $this->redirect("index.php?r=adoptasingaporedev/default/settings&tab=".$_GET['tab']."&themeId=".(int)$_REQUEST['themeId']."&localAppId=".(int)$_REQUEST['localAppId']."&subTab=create#tabs-1");
	    
        }
	 
	
    }
    catch (Exception $e)
    {
	
        $model->addError('', $e->getMessage());
    }
}
elseif (isset($_GET['Levels']))
{
    $model->attributes = $_GET['Levels'];
}

//  $this->render('create',array( 'model'=>$model));
?>

<div class="widget fluid">
    <div class="whead bWhite"><h6>Edit Level</h6></div>
   

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
    <div class="row">
            <?php
        echo CHtml::submitButton(Yii::t('app', 'Save'));
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => 'javascript:history.go(-1)'));
$this->endWidget(); ?>
    </div>
</div> <!-- form -->