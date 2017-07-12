<html>
<title>Админ. панель</title>
<body>
<a href="index.php">Админ. панель. Главная</a> <br>
<a href="product_list.php">Товары</a> <br>
<H1>Администрирование</H1>
<?php
$id = $_POST['id'];
$code = $_POST['code'];

$db = new mysqli('localhost', 'root', '1111', 'good_shop');
if (mysqli_connect_errno()) {
	echo 'Не удалось установить соединение с БД.';	
	return;
}
$query = "update products set code='".$code."' where id = '".$id."'";

$result = $db->query($query);

if ($result) {
	echo $db->affected_rows." товар обновлен.";	
} else {
	echo "Произошла ошибка. Товар не обновлен.";
} 

$db->close();
?>

</body>

</html>