<?php

//$document = $_POST['document'];
$maximum_size = 50 * 1024 * 1024;
$upload_dir = "uploads";
//if (!file_exists('uploads')) {
    //mkdir('uploads', 0777, true);
//}


    if ($_FILES['document']['size'] < $maximum_size) {

        $title = $_POST['title'];
        $description = $_POST['description'];
        $postdate = $_POST['postdate'];
        $userid = $_SESSION['userid'];
        $username = $_SESSION['username'];
        $fixeddate = '';
        $fixed = 0;
        $bugid = rand(1000, 10000);
        $attachmentid = rand(1000,10000);


        $filename = $_FILES['document']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);


        if ($ext == "txt" || $ext == "JPG" || $ext == "PNG" || $ext == "jpg" || $ext == "png") {


            $sql = "insert into bug (title,description,userid,postdate,fixdate,fixed,bugid,username) values ('$title','$description','$userid','$postdate','$fixeddate','$fixed','$bugid','$username')";

            if ($result = mysql_query($sql)) {
                echo $ext;
                //$filename = $bugid;
                move_uploaded_file($_FILES['document']['tmp_name'], $upload_dir . '/' . $filename);

                $url = $upload_dir . '/' . $filename;

                $sql2 = "insert into attachment (attachmentid,url,bugid,userid) values ('$attachmentid','$url','$bugid','$userid')";
                mysql_query($sql2);
                echo '<script type="text/javascript">';
                echo 'alert("Bug is posted");';
                echo 'window.location.href = "homepage.php";';
                echo '</script>';
            } else {
                echo "there is an error in file portion";
            }

        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Invalid file type. Only text file accepted");';
            echo 'window.location.href = "homepage.php";';
            echo '</script>';
            echo 'failed';


        }
    }

?>