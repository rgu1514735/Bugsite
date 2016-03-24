<?php
require_once("db.php");
session_start();
if(!isset($_SESSION['username']))
{
    header("Location: index.php");
}


$userid = $_GET['usernum'];
$bugid = $_GET['bugid'];
//$usename = $_GET['username'];

$sql = "select * from bug where bugid = '$bugid' and userid = '$userid'";
$sql2 = "select * from comment_table where bugid = '$bugid'";

$result = mysql_query($sql);
$res = mysql_query($sql2);

?>


<html lang="en" xmlns:width="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="jquery/jquery-2.1.0.js"></script>
    <title>View Comment</title>
    <link rel="stylesheet" type="text/css" href="main.css";>


</head>
<body>
<div id="homecontainer">
    <div id="homeheader">
        &nbsp;
    </div>
    <div id="navbar">
        <ul>
            <li> <a href="homepage.php" id="homeref">Home</a> </li>
            <li class="view"> <a href="#" id="view">View</a>
                <div class="dropdown">

                    <a href="viewbug2.php">View Bug</a>
                </div>
            </li>
            <li> <a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div id="homecontent">
        <div id="comment">
            <div id="homediv">
                <div id="commentsection">
                    <fieldset>
                        <h3 style="font-size: x-large; margin-bottom: 0%;">Title</h3>
                        <p style="font-size: large; font-style: italic; color: darkblue; margin-top: 0%;"><?php $row = mysql_fetch_assoc($result); echo $row['title'];?> </p>
                        <h3 style="font-size: x-large; margin-bottom: 0%; margin-top: 0%;">Description</h3>
                        <p style="font-size: large; color: #666666; margin-top: 0%;"><?php  echo $row['description'];?></p>
                        <?php

                        while($commentrow = mysql_fetch_assoc($res)){
                            if($commentrow['bugid'] == '') {
                                echo '<p>No comment </p>';
                            }
                            else
                            {
                                echo '<fieldset>';
                                echo '<p style="font-size: larger; font-style: italic; margin-top: 0%; margin-bottom: 0%;"> Username - ';
                                echo $commentrow['username'];
                                echo '</p>';
                                echo '<p> Comment - ';
                                echo $commentrow['comment'];
                                echo '</p>';
                                echo '<p style="font-size: small;">Post Date - ';
                                echo $commentrow['postdate'];
                                echo '</p>';
                                echo '</fieldset>';

                            }
                        }
                        ?>
                        <form method="post" action="adminfixed.php">
                            <textarea rows="2" cols="89" name="comment" style="margin-top: 10px;"></textarea>
                            <label>Fixed</label> <input type="radio" name="fix" value="fixed"/> <input type="radio" name="fix" value="notfixed"/>
                            <input type="submit" value="Post"/> <input type="reset" value="Cancel" />

                            <input type="text" value="<?php echo $bugid;?>" name="bugid" style="display: none;"/>


                        </form>
                    </fieldset>
                </div>

            </div>
        </div>
    </div>

</div>
</body>
</html>
