<?php

//$document = $_POST['document'];
$maximum_size = 50 * 1024 * 1024;
$upload_dir = "uploads";
if (!file_exists('uploads')) {
    mkdir('uploads', 0777, true);
}


    if ($_FILES['document']['size'] < $maximum_size) {

            $filename = $_FILES['document']['name'];
            $ext = pathinfo($filename, PATHINFO_EXTENSION);

            if ($ext == "txt" || $ext == "JPG" || $ext == "PNG"|| $ext == "jpg"|| $ext == "png") {
                move_uploaded_file($_FILES['document']['tmp_name'], $upload_dir . '/' . $filename);
                //echo $filename;
                echo '<script type="text/javascript">';
                echo 'alert("File Uploaded");';
                echo 'window.location.href = "uploadfile.php";';
                echo '</script>';

            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Invalid file type. Only text file accepted");';
                echo 'window.location.href = "uploadfile.php";';
                echo '</script>';

            }

    }

?>