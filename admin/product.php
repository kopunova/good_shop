<html>
<title>Админ. панель</title>
<body>
<a href="index.php">Админ. панель. Главная</a> <br>
<a href="product_list.php">Товары</a> <br>
<H1>Администрирование</H1>
<?php
$id = $_GET['id'];

$db = new mysqli('localhost', 'root', '1111', 'good_shop');
if (mysqli_connect_errno()) {
	echo 'Не удалось установить соединение с БД.';	
	return;
}
$query = "SELECT * FROM products where id = '".$id."'";

$result = $db->query($query); 
$num_results = $result->num_rows; 

echo '<form action="product_update.php" method="post">';
for ($i=0; $i<$num_results; $i++) {	
	
	$row = $result->fetch_assoc();
	echo 'id: <input type="text" name="id" value="'.$row['id'].'"> <br><br>';
	echo 'Артикул: <input type="text" name="code" value="'.$row['code'].'"> <br><br>';
	echo 'Название: <input type="text" name="name" value="'.$row['name'].'"> <br><br>';
	echo 'Описание: <input type="text" name="description" value="'.$row['description'].'"> <br><br>';
	echo 'Цена: <input type="text" name="price" value="'.$row['price'].'"> <br><br>';		

}
echo '<input type="submit" value="Сохранить">
</form>';

$result->free();

$db->close();
?>

</body>

</html>