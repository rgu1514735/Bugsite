<?php
session_start();
require_once "db.php";

    if(isset($_POST))
    {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $postdate = $_POST['postdate'];
        $userid = $_SESSION['userid'];
        $username = $_SESSION['username'];
        $fixeddate = '';
        $fixed = 0;
        $bugid = rand(1000,10000);



        $sql = "insert into bug (title,description,userid,postdate,fixdate,fixed,bugid,username) values ('$title','$description','$userid','$postdate','$fixeddate','$fixed','$bugid','$username')";
        if($result = mysqli_query($sql)) {
            echo '<script type="text/javascript">';
            echo 'alert("Bug is posted");';
            echo 'window.location.href = "homepage.php";';
            echo '</script>';
        }
        else
        {
            echo "there is an error";
        }
     }

?>