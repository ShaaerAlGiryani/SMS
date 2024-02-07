<?php
include('Connection.php');
include('UserClass.php');
$user=new User();
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$userage=$_POST['userage'];
$gender=$_POST['gender'];
$birthday=$_POST['birthday'];
$user->setUsername($username);
$user->setFirstname($firstname);
$user->setLastname($lastname);
$user->setPassword($password);
$user->setBirthday($birthday);
$user->setEmail($email);
$user->setGender($gender);
$user->setUserage($userage);
}
$sql="INSERT INTO tbluser(UserName,FirstName,LastName,UserPassword,UserBirthday,UserAge,Gender,UserEmail) 
                  VALUES('$username','$firstname','$lastname','$password','$birthday','$userage','$gender','$email')";
                  mysqli_query($conn,$sql);
                  header('location:Login.php');

?>