<?php
require_once '../../requires.php';

$oauth = new RenRenOauth();
$access_token = $_GET['access_token'];
$key = $oauth->getSessionKey($access_token);
var_dump($key);
echo '<br/><br/>';
?>
<a href="../api/5_api.php?session_key=<?php echo $key['renren_token']['session_key']; ?>">Test Api ºÃÓÑ</a>
<a href="../api/6_api.php?session_key=<?php echo $key['renren_token']['session_key']; ?>">Test Api ×´Ì¬</a>
<a href="../api/7_api.php?session_key=<?php echo $key['renren_token']['session_key']; ?>">Test Api ĞÅÏ¢</a>