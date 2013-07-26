<?php
if(!empty($_REQUEST['id']))
{
    $model =  Content::model()->findByPk($_REQUEST['id']);
}
else
{
    $model = new Content;
}

 $action = (isset($_REQUEST['nowAction']))?$_REQUEST['nowAction']:"Create";


if($action == "Delete")
{
     $model->delete();
    Yii::app()->user->setFlash('success', "Deleted Successfully!");	    
    //sending to report
    $this->redirect("index.php?r=adoptasingaporedev/default/settings&tab=".$_GET['tab']."&themeId=".(int)$_REQUEST['themeId']."&localAppId=".(int)$_REQUEST['localAppId']."#tabs-3");
   
}
if (isset($_POST['Content']))
{
 
 
    
    $model->setAttributes($_POST['Content']);
    
   
    try
    {
	if ($model->save())
	{
	    if($action == "Create")
	    {
		Yii::app()->user->setFlash('success', "Added Successfully!");	    
		//send to form again
		//$this->redirect("index.php?r=dogoodsg/default/settings&tab=manageEvents&themeId=".(int)$_REQUEST['themeId']."&localAppId=".(int)$_REQUEST['localAppId']."&subTab=create#tabs-4");
		
		$this->redirect("index.php?r=adoptasingaporedev/default/settings&tab=".$_GET['tab']."&themeId=".(int)$_REQUEST['themeId']."&localAppId=".(int)$_REQUEST['localAppId']."#tabs-3");
	    }
	    else
	    {
		Yii::app()->user->setFlash('success', "Updated Successfully!");	    
		//sending to report
		$this->redirect("index.php?r=adoptasingaporedev/default/settings&tab=".$_GET['tab']."&themeId=".(int)$_REQUEST['themeId']."&localAppId=".(int)$_REQUEST['localAppId']."#tabs-3");
	    }
	    
	}
        else
        {
            $this->redirect("index.php?r=adoptasingaporedev/default/settings&tab=".$_GET['tab']."&themeId=".(int)$_REQUEST['themeId']."&localAppId=".(int)$_REQUEST['localAppId']."&subTab=create#tabs-3");
	    
        }
	 
	
    }
    catch (Exception $e)
    {
	
        $model->addError('', $e->getMessage());
    }
}
elseif (isset($_GET['Content']))
{
    $model->attributes = $_GET['Content'];
}

//  $this->render('create',array( 'model'=>$model));
?>

<div class="widget fluid">
    <div class="whead bWhite"><h6>Edit Content</h6></div>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'content-form',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>
    
        <div class="row">
            <?php echo $form->labelEx($model,'title'); ?>
            <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'title'); ?>
        </div>
<!--        <div class="row">
            <?php //echo $form->labelEx($model,'slug'); ?>
            <?php //echo $form->textField($model,'slug',array('size'=>60,'maxlength'=>50)); ?>
            <?php //echo $form->error($model,'slug'); ?>
            
        </div>-->
    <input size="60" maxlength="50" name="Content[slug]" id="Content_slug" type="hidden" value="<?php echo $model->slug; ?>">
        <div class="row">
            <?php echo $form->labelEx($model,'content'); ?>
           <div style="float:left;border:1px solid; width: 700px;">
           <textarea name="Content[content]" id="Content_content" ><?php echo $model->content; ?></textarea>
           </div>
            <?php echo $form->error($model,'content'); ?>
        </div>
         <div class="row">
            <?php
        echo CHtml::submitButton(Yii::t('app', 'Save'));
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => 'javascript:history.go(-1)'));
$this->endWidget(); ?>
</div>
</div> <!-- form -->
<script>
    
        $("#Content_content").cleditor({
                width:        700, // width not including margins, borders or padding
                height:       400, // height not including margins, borders or padding
                
                
              });
          
    </script>   

