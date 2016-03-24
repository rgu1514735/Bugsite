<?php
require_once('db.php');

$username = $_SESSION['username'];
$userid = $_SESSION['userid'];
$usercomment = $_POST['comment'];
$bugid = $_POST['bugid'];
$commentid = rand(100000,999999);
$postdate = date('d/m/y');
$fixed = $_POST['fix'];






$sql = "insert into comment_table (comment,userid,postdate,bugid,commentid,username) values ('$usercomment','$userid','$postdate','$bugid','$commentid','$username')";
if($result = mysql_query($sql))
{
    if($_POST['fix'] == 'fixed')
    {
        $sql2 = "update bug set fixed = 1 where bugid = '$bugid'";
        if(mysql_query($sql2))
        {
        echo 'fixed';
        }
    }
    else {
        echo 'not fixed';
    }
echo '<script type="text/javascript">';
    echo 'alert("comment posted");';
    echo 'window.location.href = "admminviewbug.php";';
    echo '</script>';
}
else
{
echo '<script type="text/javascript">';
    echo 'alert("i didnt work o");';
    echo 'window.location.href = "adminviewbug.php";';
    echo '</script>';
}

?>