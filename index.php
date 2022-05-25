 
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Манга. Поиск персонажей. Краткое содержание.</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com ">
    <link rel="preconnect" href="https://fonts.gstatic.com " crossorigin>
    <link href="https://fonts.googleapis.com/css2 ?family=Lora&display=swap" rel="таблица стилей">
    <link rel="icon" href="img/icon.png" type="image/x-icon">
</head>
<body class="">
    <header>
       <div class="logo">
          <a href="index.php">
              <img class="graficlogo" src="img/logo2.png" alt="Manga">
          </a>
       </div>
    </header>
<?php
     require 'configDB.php';
     $mangas = $pdo->query('SELECT * FROM `manga`');
    $page = 1;
    echo '<div class="page">';
    while($row = $mangas->fetch(PDO::FETCH_OBJ)){
        echo '<div class="card"> <img class="card-photo" src="img/'.$row->picture_name.'.jpg" alt="'.$row->name.'">
            <p class="center"><a class="card-title" href="manga.php?manga='.$row->id.'">'.$row->name.'</a></p>';
        $page++;
        if($page % 3 == 0)
        echo '</div>';
        echo '<div class="page">';
    }
     ?>
         </div>
</body>
</html>
