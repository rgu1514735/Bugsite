<?php
session_start();
?>

<html lang="en">
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
            <li> <a href="uploadfil.php" id="uploadfile">Upload File</a> </li>
        </ul>
    </div>
    <div id="homecontent">
        <div id="comment">
            <div id="homediv">
                <form method="post" action="bug.php" enctype="multipart/form-data">
                    <h4 style="text-align: center">Please select your file</h4>
                    <table border="0" cellpadding='2' cellspacing='3' style="text-align: center; margin-left: 30%;margin-top: 0%;">

                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="file" name="document" style="width: 250px; background-color: white;"/> </td>

                        </tr>

                        <td>&nbsp;</td>
                        <td> <input type="submit" value="Post" name="submit"/> <input type="reset" value="Cancel" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

</div>
</body>
</html>