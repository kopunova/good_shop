<?php
session_start();
if (isset($_SESSION['valid_user'])) {
	//echo 'Добро пожаловать, '.$_SESSION['valid_user'];	
	unset($_SESSION['valid_user']);
	session_destroy();
	} 
?>
<html>
<title></title>
<body>
<a href="index.php">Главная</a> <br>


</body>

</html>