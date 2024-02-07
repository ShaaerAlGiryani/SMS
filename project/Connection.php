<?php
$conn =mysqli_connect('localhost','root','','sms_db');
if(!$conn)
{
    die('Error'.mysqli_connect_error());
}
?>