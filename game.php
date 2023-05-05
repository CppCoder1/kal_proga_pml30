<?php
    include "func.php";

    $id = get_or_post("id", -1);

    $res = get_or_post("res", "lose");

    $response = sql_req("SELECT * FROM player where id = " . $id);

    $score = intval($response[0]["score"]);

    if ($res === "win")
        $score += 10;
    else
        $score -= 8;

    sql_req("UPDATE player SET score = " . $score . " where id = " . $id);

    $players = sql_req("SELECT * FROM player ORDER BY score DESC");

    ?>

<html>
    <head>
        <title>The Game</title>
    </head>
    <body>
        <h1>Рейтинговая таблица</h1>
        <table border="1px">
            <tr>
            <td>
                Счёт
            </td>
            <td>
                Игрок
            </td>
            </tr>
            <?php
                foreach($players as $player)
                {
                    if ($player["id"] ==  $id)
                    {
                        echo "<tr style=\"color: red;\">";
                    }
                    else
                    {
                        echo "<tr style=\"color: blue;\">";
                    }
                    echo "<td>" .  $player["score"] . "</td><td>" . $player["login"] . "</td></tr>";
                }
            ?>
        </table> 
        
    <form action="index.php">
        <input type="submit" value="Вернуться на главную"/>
    </form>
    </body>

</html>
