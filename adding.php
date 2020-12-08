<?php
    require_once ("connect_db.php");
    try {
        if (isset($_POST['name']) && isset($_POST['phoneNum']) && isset($_POST['login']) && isset($_POST['password']))
        {
            $query_insert_TP = "INSERT INTO `table_person` (`id`, `name`, `tel`) 
            VALUES ('',{$_POST['name']}', '{$_POST['phoneNum']}')";
            $insert_TP = $pdo->exec($query_insert_TP);

            $query_insert_TU = "INSERT INTO `table_user` (`id`, `login`, `password`, `is_active`) 
            VALUES ('', '{$_POST['login']}', '{$_POST['password']}', '1')";
            $insert_TU = $pdo->exec($query_insert_TU);
    
            if($insert_TP && $insert_TU)
                {
                    echo "Запись добавлена в базу данных";
                }
                else echo "Fail";
        }
    }
     catch (PDOException $e) {
        echo "Ошибка выполнения запроса". $e->getMessage();
    }

    require_once ("connect_db.php");
    try {
    $query_select = "SELECT table_person.name, table_person.tel, table_user.login, table_user.password  FROM table_person, table_user WHERE table_person.id = table_user.id";
         echo "<table align=center><tr><th>Имя пользователя</th><th>Телефон</th><th>Логин</th><th>Пароль</th></tr>";
         foreach($pdo->query($query_select) as $row)
        {
            echo "<tr>";
                    for($j = 0; $j<4; ++$j) echo "<td>$row[$j]</td>";
            echo "</tr>";
        }
            echo "</table>";
        include "index.php";
    } catch (PDOException $e) {
        echo "Ошибка выполнения запроса". $e->getMessage();
    }
       
?>