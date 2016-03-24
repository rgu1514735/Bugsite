<?php
require_once('db.php');
session_start();
if(!isset($_SESSION['username']))
{
    header("Location: index.php");
}




$sql = "select * from bug";

    $result = mysql_query($sql);



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="jquery/jquery-2.1.0.js"></script>
    <title>View Comment</title>
    <link rel="stylesheet" type="text/css" href="main.css">


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
            <li> <a href="uploadfile.php" id="uploadfile">Upload File</a> </li>
        </ul>
    </div>
    <div id="homecontent">
        <div id="viewcomment">
            <?php


            echo "<table cellpadding='2' cellspacing='7' style='background-color: aqua; width: 90%; text-align: justify;' border='0'>";
            echo "<tr>";
            echo "<td>";
            echo '<label>Title</label>';
            echo "</td>";
            echo "<td>";
            echo '<label>Description</label>';
            echo "</td>";
            echo "<td>";
            echo '<label>Posted By</label>';
            echo "</td>";
            echo "<td>";
            echo '<label>Post Date</label>';
            echo "</td>";
            echo "<td>";
            echo '<label>Status</label>';
            echo "</td>";
            echo"</tr>";
            while($res =mysql_fetch_assoc($result))
            {
                echo "<tr>";

                    echo "<td>";
                    echo $res['title'];
                    echo "</td>";


                    echo "<td style='width: 30%;'>";
                   echo $res['description'];
                   echo"</td>";


                    echo "<td>";
                   echo $res['username'];
                   echo"</td>";


                    echo "<td>";
                   echo $res['postdate'];
                   echo"</td>";
                    if($res['fixed'] == 0)
                    {
                        echo "<td>";
                        echo 'Not Fixed';
                        echo"</td>";
                    }
                    else
                    {
                        echo "<td>";
                        echo 'Fixed';
                        echo"</td>";
                    }


                //$bugid = $res['bugid'];
                    echo "<td>";
                $usernum =  $res['userid'];
                $bugid = $res['bugid'];
                $username = $res['username'];
                echo '<a href=comment.php?usernum='. $usernum.'&bugid='.$bugid.'>View Comment</a></br>';
              // echo '<a href="bug.php?bugID="'. $bugID.'>'.$bugTitle.'</a></br>';
                    echo"</td>";
                echo"</tr>";



            }
           echo "</table>";

            ?>
        </div>
    </div>

</div>
</body>