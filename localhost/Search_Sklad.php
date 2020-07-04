<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>АДМИН</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <a href="Search_Sklad.php"><img src="images/albatros.jpg" width="140" height="68" alt="photo">
        </a>
         <div_1><a href="index.php">ГЛАВНАЯ</a></div_1>
        <div>
            <form action="Search_Sklad.php" method="post">
                <input name="search" type="text" size="30" minlength="8" maxlength="8" placeholder="Код склада" />
                <input type="submit" value="Найти" />
            </form>
            <?php print ("$output");?>
        </div>
    </header>
    <h1>Внимание!</h1>
    <h1>Данная информация только для Администрации</h1>
    
    <main>
        <?php
    $conn = mysqli_connect('localhost', 'root', '', 'info') or die(mysqli_error($connection));
  $output = '';
  
        if(isset($_POST['search'])) {
    $search = $_POST['search'];
      $search = preg_replace("#[^0-9a-z]i#","", $search);
      
      if ($search == qwe123rt){
      $result = mysqli_query($conn, "SELECT * FROM sklad_1") or die ("Could not search");    
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
          }
      if ($search == qwe123yu){
        $result = mysqli_query($conn, "SELECT * FROM sklad_2") or die ("Could not search");    
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
     if ($search == qwe123io){ 
       $result = mysqli_query($conn, "SELECT * FROM sklad_3") or die ("Could not search");    
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
    
?>
    </main>


</body>

</html>
