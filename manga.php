<?php
require 'configDB.php';
$manga = $_GET['manga'];
$mangainfo = $pdo->query('SELECT * FROM `manga` WHERE `id`= '.$manga.'');
$manga = $mangainfo->fetch(PDO::FETCH_OBJ);
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>'.$manga->name.'</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com ">
    <link rel="preconnect" href="https://fonts.gstatic.com " crossorigin>
    <link href="https://fonts.googleapis.com/css2 ?family=Lora&display=swap" rel="таблица стилей">
    <link rel="icon" href="../img/icon.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <a href="../index.html">
                <img class="graficlogo" src="../img/logo2.png" alt="Manga">
            </a>
        </div>
    </header>
<div> <h1 class="zagolovok">'.$manga->name.'</h1>
</div>
<div>
        <div class="card-1">
            <img class="card-photo" src="img/'.$manga->picture_name.'.jpg" alt="Сказания о демонах и богах">
        </div>
        <div>
            <p class="card-3">Тип: '.$manga->type.'</p>
            <p class="card-2">Формат вывпуска: '.$manga->format.'</p>
            <p class="card-2">Год релиза: '.$manga->year.'</p>
            <p class="card-2">Статус тайтла: '.$manga->status.'</p>
            <p class="card-2">Статус перевода: '.$manga->translate.'</p>
            <p class="card-2">Автор: '.$manga->author.'</p>
            <p class="card-2">Художник: '.$manga->artist.'</p>
            <p class="card-2">Издательство: '.$manga->publisher.'</p>
            <p class="card-2">Загруженно глав: '.$manga->chapters.'</p>
 </div>


    </div>';
?>
