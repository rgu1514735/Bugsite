<?php
session_start();
require_once('db.php');

        $username = $_SESSION['username'];
        $userid = $_SESSION['userid'];
        $usercomment = $_POST['comment'];
        $bugid = $_POST['bugid'];
        $commentid = rand(100000,999999);
        $postdate = date('d/m/y');

$sql = "insert into comment_table (comment,userid,postdate,bugid,commentid,username) values ('$usercomment','$userid','$postdate','$bugid','$commentid','$username')";
    if($result = mysql_query($sql))
    {
        echo '<script type="text/javascript">';
        echo 'alert("comment posted");';
        echo 'window.location.href = "viewbug2.php";';
        echo '</script>';
    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'alert("i didnt work o");';
        echo 'window.location.href = "viewbug2.php";';
        echo '</script>';
    }



?>