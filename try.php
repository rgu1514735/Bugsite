<?php

/*require_once "db.php";

$bugnumber = "select * from bug ";
if($res = mysql_query($bugnumber))
{

    $size_of_array = mysql_num_rows($res);
    echo $size_of_array;
    while($result = mysql_fetch_assoc($res))
    {
        echo "   ";
        echo $result['title'];


        echo "   ";
        echo $result['description'];

        echo $result['userid'];
        echo "   ";
        echo $result['postdate'];
        echo "<br/>";






    }

}*/
$i=0;
    while($i<10) {
        $j = $i;
        echo "<form method='post' action='try2.php'>";
        echo "<input type='text' value='$i' name='$j'/>";
        echo "<input type='submit' name='$i'/>";
        $_SESSION['i'] = $i;
        echo "</form>";
        $i++;

    }







?>