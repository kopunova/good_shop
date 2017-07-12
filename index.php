<?php
session_start();
?>
<html>
<title>Магазин Good Shop</title>
<body>
<a href="index.php">Главная</a> <br>
<a href="registration.php">Зарегистрироваться </a> <br>
<a href="login.php">Войти</a> <br>
<a href="cart.php">Корзина</a> <br>

<form action="add_str.php" method="post">
Строка: <input type="text" name="str"> <br><br>
<input type="submit" value="Записать в файл">
</form>

<?php
if (isset($_SESSION['valid_user'])) {
	echo 'Добро пожаловать, '.$_SESSION['valid_user'].'<br>';	
	echo '<a href="logout.php">Выйти</a> <br>';
} 
?>

<H1>Магазин Good Shop</H1>
<H1>Товары</H1>

<?php
echo '<table border=1>
<tr> 
<td>id</td>
<td>Артикул</td>
<td>Название</td>
<td>Описание</td>
<td>Цена</td>
<td></td>
</tr>';
$db = new mysqli('localhost', 'root', '1111', 'good_shop');
if (mysqli_connect_errno()) {
	echo 'Не удалось установить соединение с БД.';	
	return;
}
$query = "SELECT * FROM products"; 
$result = $db->query($query); 
$num_results = $result->num_rows; 
for ($i=0; $i<$num_results; $i++) {	
	
	$row = $result->fetch_assoc(); 
	echo '<br>';
    echo '<tr>';	
	echo '<td>'; echo $row['id']; echo '</td>';
	echo '<td>'; echo $row['code']; echo '</td>';	
    echo '<td>'; echo $row['name']; echo '</td>';
	echo '<td>'; echo '</td>';
	echo '<td>'; echo '</td>';
	echo '<td>'; echo '<a href="product_delete.php?id='.$row['id'].'">В корзину</a>'; echo '</td>';	
	echo '</tr>';
}

$result->free();
$db->close();

echo '</table>';
?>






</body>

</html>






























