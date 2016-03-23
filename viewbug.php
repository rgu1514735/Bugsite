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
            <li> <a href="#" id="homeref">Home</a> </li>
            <li class="view"> <a href="#" id="view">View</a>
                <div class="dropdown">
                    <a href="#">View Comment</a>
                    <a href="#">View Bug</a>
                </div>
            </li>
            <li> <a href="#" id="uploadfile">Upload File</a> </li>
        </ul>
    </div>
    <div id="homecontent">
        <div id="comment">
            <div id="homediv">
                <form method="post" action="viewbug2.php">
                    <h4 style="text-align: center">Please enter the bug title you want to view</h4>
                    <table border="1" cellpadding='2' cellspacing='3' style="text-align: center; margin-left: 30%;margin-top: 0%;">

                        <tr>
                            <td><label>Title</label></td>
                            <td><input type="text" name="title"/> </td>

                        </tr>

                            <td>&nbsp;</td>
                            <td> <input type="submit" value="Post"/> <input type="reset" value="Cancel" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

</div>
</body>
</html>