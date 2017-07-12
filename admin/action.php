<html>
<title>Админ. панель</title>
<body>
<?php
 
if (isset($_POST['product_add']))   {
    echo "<p>Нажата кнопка 5</p>";
    }
elseif  (isset($_POST['button2']))  {
    echo "<p>Нажата кнопка 5 *value</p>";
    }
elseif  ($_POST['button1'] == 'button4')    {
    echo "<p>Value = button5</p>";
}
elseif  ($POST['button2'] == 'Кнопка 4') {
    echo "<p>Кнопка 4</p>";
}
else    {
    echo "<p>Нажмите одну из кнопок!!!</p>";
}
?>

</body>

</html>