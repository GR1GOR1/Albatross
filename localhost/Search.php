<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ваша посылка</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <a href="Search_Sklad.php"><img src="images/albatros.jpg" width="140" height="68" alt="photo">
        </a>
        <div_1><a href="index.php">ГЛАВНАЯ</a></div_1>
        <div>
            <form action="Search.php" method="post">
                <input name="search" type="text" size="30" minlength="5" maxlength="5" placeholder="Уникальный код" />
                <input type="submit" value="Найти" />
            </form>
            <?php print ("$output");?>
        </div>
    </header>
    <main>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'info') or die(mysqli_error($connection));
  $output = '';
  if(isset($_POST['search'])) {
    $search = $_POST['search'];
      $search = preg_replace("#[^0-9a-z]i#","", $search);
        if ($search == ''){ 
            echo "";
        }else{
 
      
      $result = mysqli_query($conn, "SELECT * FROM sklad_1 WHERE UCode LIKE '%$search%'") or die ("Could not search");    
    if($result){
        $rows = mysqli_num_rows($result);
        if ($rows>0){
        $k=1;
            echo "<table border='3'><tr><th>Код</th><th>Город отправления</th><th>Отправитель</th><th>Город прибытия</th><th>Получатель</th><th>Статус</th><th>Стоимость</th><th>Вес</th><th>Габариты</th><th>Адрес склада</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 10; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    }
        $result = mysqli_query($conn, "SELECT * FROM sklad_2 WHERE UCode LIKE '%$search%'") or die ("Could not search");    
    if($result){
        $rows = mysqli_num_rows($result);
        if ($rows>0){
        $k=1;
            echo "<table border='3'><tr><th>Код</th><th>Город отправления</th><th>Отправитель</th><th>Город прибытия</th><th>Получатель</th><th>Статус</th><th>Стоимость</th><th>Вес</th><th>Габариты</th><th>Адрес склада</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 10 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    }
       $result = mysqli_query($conn, "SELECT * FROM sklad_3 WHERE UCode LIKE '%$search%'") or die ("Could not search");    
    if($result){
        $rows = mysqli_num_rows($result);
        if ($rows>0){
        $k=1;
        echo "<table border='3'><tr><th>Код</th><th>Город отправления</th><th>Отправитель</th><th>Город прибытия</th><th>Получатель</th><th>Статус</th><th>Стоимость</th><th>Вес</th><th>Габариты</th><th>Адрес склада</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
            for ($j = 0 ; $j < 10 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";
    }
    }
    }
        }
    if ($k == 0)
        echo ("По вашему запросу ничего не найдено");
?>
    </main>

</body>

</html>
