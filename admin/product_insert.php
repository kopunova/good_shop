<html>
<title>Админ. панель</title>
<body>
<a href="index.php">Админ. панель. Главная</a> <br>
<a href="product_list.php">Товары</a> <br>
<H1>Администрирование</H1>
<?php
$code = $_POST['code'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$db = new mysqli('localhost', 'root', '1111', 'good_shop');
if (mysqli_connect_errno()) {
	echo 'Не удалось установить соединение с БД.';	
	return;
}
$query = "insert into products (code, name) values ('".$code."', '".$name."')"; 
$result = $db->query($query);

if ($result) {
	echo $db->affected_rows." товар добавлен в базу данных.";	
} else {
	echo "Произошла ошибка. Товар не добавлен.";
} 

$db->close();
?>

</body>

</html>