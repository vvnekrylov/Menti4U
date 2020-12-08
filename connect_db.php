<?php
    try {
        $pdo = new PDO ('mysql:host=mysql60.hostland.ru;dbname=host1323541_mentor4u', 'host1323541_menti', 'oax7LIlX');
    } catch (PDOException $e) {
        echo "Невозожно установить соединение с базой данных {$e}";
    }
?>