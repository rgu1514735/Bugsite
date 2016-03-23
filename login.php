<?php

require_once "db.php";


if(isset($_POST))
{
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $sql = "select * from register_user where username = '$username' and password = '$password'";

    if($result = mysql_query($sql))
    {
        session_start();
        $row = mysql_fetch_array($result);
        $_SESSION['username'] = $row[2];
        $_SESSION['userid'] = $row[3];
        header("location: homepage.php");

    }
    else{

        echo '<script type="text/javascript">';
        echo 'alert("Wrong username or password");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
}


?>