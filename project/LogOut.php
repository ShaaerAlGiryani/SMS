<?php
session_start();
include('Connection.php');
session_unset();
session_destroy();
header('Location:Login.php');
?>