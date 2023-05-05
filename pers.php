<?php
include "func.php";
    $name = get_or_post("name", "Екатерина");
    $points = get_or_post("points", 100);
    $race = get_or_post("race", 1);
    
    sql_req("INSERT INTO player(login, race, score) VALUE(\"" . $name . "\"," . $race . "," . $points . ")");
    $user = sql_req("SELECT * FROM player where login = \"" . $name . "\"");
    $id = $user[0]["id"];
?>

<html>
    <head>
        <title>Personage page</title>
    </head>
    <body>
        <p>Привет, <?php echo $name;?></p>
        <form action="game.php" method="POST" id="rslt">
            <select id="res" name="res" form="rslt">
                <option value="win">Победа</option>
                <option value="lose">Поражение</option>
            </select></br>
            <input name="startgame" type="submit" value="Сыграть"/>
            <input name="id" id="id" type="hidden" value="<?php echo $id;?>"/>
        </form>
    </body>
</html>