<?php
session_start();
include('Connection.php');
if(isset($_POST['username'])&& isset($_POST['password']))
{
   $username=$_POST['username'];
   $password=$_POST['password'];
}
$sql="SELECT id,username FROM tbluser WHERE UserName='$username' AND UserPassword='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
if($row['username']===$username)
{
    $_SESSION['username']=$row['username'];
    $_SESSION['id']=$row['id'];
    header('location:HomePage.php');
    exit();
}
?>