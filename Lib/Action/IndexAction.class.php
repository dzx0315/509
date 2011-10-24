<?php
/**
* 
*/
class RenrenAction extends Action
{
	Public function Author()
	{
		include './APIs/renren/requires.php';
		echo $config->AUTHORIZEURL;
		echo "有改变了";
		
	}
}

?>