<?php

require_once "db.php";


$userid = 'userid';

$fixeddate = '';
$fixed = 0;
$bugid = rand(1000, 10000);
$attachmentid = rand(1000,10000);


$url = '';//$upload_dir . '/' . $filename;

$sql2 = "insert into attachment(attachmentid,url,bugid,userid) values ('$attachmentid','$url','$bugid','$userid')";
 if(mysql_query($sql2))
 {
     echo 'worked';
 }
else{
    echo 'not worked';
}






?>