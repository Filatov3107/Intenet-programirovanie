<html>
<head><title> Сведения о магазинах </title></head>
<body>
<h3>Филатов Игорь ПИ323</h3>
<h2>Сведения о магазинах:</h2>
<table border="1">
    <tr>
        <th>id магазина</th>
        <th>название</th>
        <th>Адрес</th>
        <th>Редактировать</th>
        <th>Уничтожить</th>
    </tr>
</tr>
<?php
require_once 'connect1.php';
$link = mysqli_connect($host, $user, $password, $database) or die ("Невозможно
подключиться к серверу" . mysqli_error($link));
$result = mysqli_query($link, "SELECT id_as, name_as, address FROM autos"); // запрос на выборку сведений о пользователях
mysqli_select_db($link, "autos");

while ($row = mysqli_fetch_array($result)) {// для каждой строки из запроса
    echo "<tr>";
    echo "<td>" . $row['id_as'] . "</td>";
    echo "<td>" . $row['name_as'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td><a href='edit_store.php?id_as=" . $row['id_as']
        . "'>Редактировать</a></td>"; // запуск скрипта для редактирования
    echo "<td><a href='delete_store.php?id_as=" . $row['id_as']
        . "'>Удалить</a></td>"; // запуск скрипта для удаления записи
    echo "</tr>";
}
print "</table>";
$num_rows = mysqli_num_rows($result); // число записей в таблице БД
print("<P>Всего магазинов: $num_rows </p>");
?>
<p><a href="new_store.php"> Добавить магазин </a>
<p><a href="index.php"> Вернуться назад </a>
</body>
</html>