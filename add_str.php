<html>
<title></title>
<body>
<a href="index.php">Главная</a> <br>

<?php
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT']; 
$str = $_POST['str'];
//echo "$DOCUMENT_ROOT/..";
$fp = fopen("$DOCUMENT_ROOT/../orders/orders.txt", 'ab');
fwrite($fp, $str);
fclose($fp);
?>

</body>

</html>