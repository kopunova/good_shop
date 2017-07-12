<html>
<title>Админ. панель</title>
<body>
<a href="index.php">Админ. панель. Главная</a> <br>
<H1>Администрирование</H1>
<H1>Товары</H1>
<a href="product_add.php">Добавить новый товар</a>

<?php
echo '<table border=1>
<tr> 
<td>id</td>
<td>Артикул</td>
<td>Название</td>
<td>Описание</td>
<td>Цена</td>
<td></td>
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
	echo '<td>'; echo '<a href="product.php?id='.$row['id'].'">Изменить</a>'; echo '</td>';
	echo '<td>'; echo '<a href="product_delete.php?id='.$row['id'].'">Удалить</a>'; echo '</td>';	
	echo '</tr>';
}

$result->free();
$db->close();

echo '</table>';
?>






</body>

</html>






























