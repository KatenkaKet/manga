 <?php
  $dsn = 'mysql:host=localhost;dbname=manga_db';
    $pdo = new PDO($dsn, 'root', '');
/*try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }
 catch(PDOException $e)
    {
        echo 'Подключение не удалось: '.$e->getMessage();
    }
*/
 ?>
