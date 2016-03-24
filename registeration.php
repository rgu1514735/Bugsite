<?php
require_once "db.php";

if(isset($_POST))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone_no = $_POST['phone_no'];
    $password = $_POST['password'];

    $fname = stripslashes($fname);
    $lname = stripslashes($lname);
    $email = stripslashes($email);
    $username = stripslashes($username);
    $phone_no = stripslashes($phone_no);
    $password = stripslashes($password);

    //$password = md5($password);

    $check_user = "select * from register_user WHERE username = '$username' or email ='$email'";
    $user_check =mysql_query($check_user);
    if(mysqli_fetch_array($user_check) < 1) {

        $userid =rand(10000,99999);

        $sql = "insert into register_user (fname,lname,email,username,userid,phone_no,password) values ('$fname','$lname','$email','$username','$userid','$phone_no','$password')";
        if ($result = mysql_query($sql)) {
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $userid;
            echo '<script type="text/javascript">';
            echo 'alert("Registration completed");';
            echo 'window.location.href = "homepage.php";';
            echo '</script>';

        }

    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'alert("Username or Email already exists");';
        echo 'window.location.href = "index.php";';
        echo '</script>';

    }

}


?>