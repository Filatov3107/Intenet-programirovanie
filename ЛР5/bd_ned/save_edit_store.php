<html>
<body>
<?php
include("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database);
if ($mysqli->connect_errno) {
    echo "Невозможно подключиться к серверу";
} // установление соединения с сервером


$id_as = $_GET['id_as'];
$name_as = $_GET['name_as'];
$address = $_GET['address'];

$zapros = "UPDATE autos SET name_as='$name_as', address='$address' 
WHERE id_as='$id_as'";

$result = $mysqli->query($zapros);
if ($result) {
    if ($_SESSION['type'] == 1)
        echo "Все сохранено.<a href=stores.php> Вернуться к списку магазинов </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Все сохранено.<a href=storesAdm.php> Вернуться к списку магазинов </a>";
} else {
    if ($_SESSION['type'] == 1)
        echo "Ошибка сохранения.<a href=stores.php> Вернуться к списку магазинов </a>";
    elseif ($_SESSION['type'] == 2)
        echo "Ошибка сохранения.<a href=storesAdm.php> Вернуться к списку магазинов </a>";
}
?>
</body>
</html>