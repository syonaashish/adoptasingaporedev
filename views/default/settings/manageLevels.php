<?php

if(!empty($_GET['subTab']))
{
$this->renderPartial("settings/levels/create");  
}  else {
	//  echo '<br /><a href="index.php?r=adoptasingaporedev/default/settings&tab='.$_GET['tab'].'&themeId='.(int)$_GET['themeId'].'&localAppId='.(int)$_GET['localAppId'].'&subTab=create#tabs-6" class="buttonS bGreen bWhite">Add New</a>';
  $this->renderPartial("settings/levels/admin");  

}

?>