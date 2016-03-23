<?php

    session_start();
    if(!isset($_SESSION['username']))
    {
        header("Location: index.php");
    }
else{
    echo "ready";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="main.css";>
</head>
<body >
<div id="homecontainer">
    <div id="homeheader">
        &nbsp;
    </div>
    <div id="navbar">
        <ul>
            <li> <a href="#" id="homeref">Home</a> </li>
            <li class="view"> <a href="#" id="view">View</a>
                <div class="dropdown">
                    <a href="viewbug2.php">View Bug</a>
                </div>
            </li>
            <li> <a href="uploadfile.php" id="uploadfile">Upload File</a> </li>
        </ul>
    </div>
    <div id="homecontent">
        <div id="comment">
           <div id="homediv">
               <form method="post" action="bug.php">
                <table border="0" cellpadding='2' cellspacing='3' style="text-align: center;">
                    <tr>
                        <td><label>Title</label></td>
                        <td><input type="text" name="title"/> </td>

                    </tr>
                    <tr>
                        <td><label>Description</label></td>
                        <td> <textarea rows="23" cols="74" name="description"> </textarea></td>
                    </tr>
                    <tr>
                        <td><label>Post Date</label></td>
                        <td><input type="text" name="postdate" value="<?php echo date('d/m/y');?>" readonly/></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td> <input type="submit" value="Post"/> <input type="reset" value="Cancel" /> <a href="uploadfile.php"> Click here to Upload file</a></td>
                    </tr>
                </table>
                   </form>
           </div>
        </div>
    </div>

    </div>
</body>
</html>