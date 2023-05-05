<html>
    <head>
        <title>Home page</title>
    </head>
    <body>
        <h1>The Game</h1>
        <h3>Вы здесь новый или уже смешарик? Выберите, что вы хотите сделать</h3>
        <form method="POST" id="pers" action="pers.php">
            <label>Войти или зарегестрироваться</label></br>
            <label>Имя</label>
            <input name="name" type="text"/></br>
            <label>Раса</label>
            <select name="race" id="race" form="pers">
                <option value="1">Человек</option>
                <option value="2">Гоблин</option>
                <option value="3">Смешарик</option>
            </select></br>
            <label>Очки</label>
            <input name="points" type="number"/></br>
            <input type="submit" value="Стать смешариком"/>
        </form>
    <body>
</html>