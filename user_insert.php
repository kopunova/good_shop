<html>
<title>Регистрация нового пользователя</title>
<body>
<a href="index.php">Главная</a> <br>
<H1>Регистрация нового пользователя</H1>

<?php
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$password_again = $_POST['password_again']; 

/*if (!isset($email)) {
	echo 'Не указан email.';
	return;	
}*/
/*if ($email = '') {
	echo 'Не указан email.';
	return;	
}*/
//echo $email; 

if ($password <> $password_again) {
	echo 'Не совпадает пароль.';
	return;	
}

$db = new mysqli('localhost', 'root', '1111', 'good_shop');
if (mysqli_connect_errno()) {
	echo 'Не удалось установить соединение с БД.';	
	return;
}
$query = "insert into users (name, email, password) values ('".$name."', '".$email."', '".$password."')"; 
$result = $db->query($query);

if ($result) {
	echo $db->affected_rows." пользователь зарегистрирован.";	
} else {
	echo "Произошла ошибка. Пользователь не зарегистрирован.";
} 

$db->close();

?>





</body>

</html>




























