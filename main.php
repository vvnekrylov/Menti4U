<?php
require_once 'connect_db.php';
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
            
    } catch (PDOException $e) {
        echo "Ошибка выполнения запроса". $e->getMessage();
    }
?>