<?php

require_once "db.php";


if(isset($_POST))
{
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $sql = "select * from register_user where username = '$username' and password = '$password'";

    if($result = mysqli_query($sql))
    {
        session_start();
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['userid'] = $row['userid'];
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