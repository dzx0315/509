<?php
/**功能：人人登陆
* 
*/
class RenrenAction extends Action
{
	Public function author()
	{
		include './APIs/renren/requires.php';
		global $config;
		$author=new RenRenOauth();
		echo $author->getAuthorizeUrl();
		
	}
}

?>