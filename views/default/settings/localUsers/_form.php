<?php
if(!empty($_REQUEST['id']))
{

    $model =  LocalUsers::model()->findByPk($_REQUEST['id']);
}
else
{
    $model = new LocalUsers();
}
$action = (isset($_REQUEST['nowAction']))?$_REQUEST['nowAction']:"Create";


if($action == "Delete"){


if(!empty($_REQUEST['nowAction']))
{
    if($_REQUEST['nowAction'] == "Delete"){

        $model->delete();
    Yii::app()->user->setFlash('success', "Deleted Successfully!");
    //sending to report
    $this->redirect("index.php?r=adoptasingaporedev/default/settings&tab=".$_GET['tab']."&themeId=".(int)$_REQUEST['themeId']."&localAppId=".(int)$_REQUEST['localAppId']."#tabs-2");
    }
}
}
?>