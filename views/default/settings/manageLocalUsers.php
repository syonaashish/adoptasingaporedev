<?php


if(!empty($_GET['nowAction']))
{
    $this->renderPartial("settings/localUsers/_form");
}  else {
    //echo '<br /><a href="index.php?r=adoptasingaporedev/default/settings&tab='.$_GET['tab'].'&themeId='.(int)$_GET['themeId'].'&localAppId='.(int)$_GET['localAppId'].'&subTab=create#tabs-3" class="buttonS bGreen bWhite">Add New Pledge</a>';
    $this->renderPartial("settings/localUsers/admin");

}
?>
