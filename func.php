<?php
    //DON`T COMMENT OR REMOVE THIS NEVER!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    error_reporting(0);
    function get_or_post($variable_name, $default)
    {
        if(key_exists($variable_name, $_GET))
            return $_GET[$variable_name];
        else if (key_exists($variable_name, $_POST))
            return $_POST[$variable_name];
        else
            return $default;
    }

    function sql_req($query)
    {
        
        $conn = mysqli_connect('localhost', 'root', '', 'dbname');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        mysqli_set_charset($conn, 'utf8');

        $result = mysqli_query($conn, $query);

        mysqli_close($conn);

        while($row_user = mysqli_fetch_array($result)){
                $row_id = $row_user["id"];
                $row_login = $row_user["login"];
                $row_race = $row_user["race"];
                $row_score = $row_user["score"];
                $userinfo[] = array("id"=> $row_id , "login"=> $row_login, "race"=> $row_race, "score" => $row_score);
            }
        return $userinfo;
    }
?>