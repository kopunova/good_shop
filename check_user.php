<?php
//echo '111';
session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$db = new mysqli('localhost', 'root', '1111', 'good_shop');
if (mysqli_connect_errno()) {
	echo 'Не удалось установить соединение с БД.';	
	return;
}
$query = "select * from users where email = '".$email."' and password = '".$password."'"; 
$result = $db->query($query);
$num_results = $result->num_rows; 
//echo $num_results;

if ($num_results == 0) {
	echo 'Не правильный email или пароль.';		
} else {
	$row = $result->fetch_assoc();
	//echo 'Добро пожаловать, '.$row['name'];	
	$_SESSION['valid_user'] = $row['id']; 	
} 
$result->free();
$db->close();
?>

<html>
<title>Войти</title>
<body>
<a href="index.php">Главная</a> <br>
<H1>Войти</H1>
<?php
if (isset($_SESSION['valid_user'])) {
	echo 'Добро пожаловать, '.$_SESSION['valid_user'];	
} 
?>

</body>

</html>




























