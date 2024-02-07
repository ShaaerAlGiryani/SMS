<?php
session_start();
include('Connection.php');
if(isset($_SESSION['id']) && isset($_SESSION['username']))
{
    $id =$_SESSION['id'];
    $user =$_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="posts.css">
    <title>homepage</title>
</head>
<body>
    <form class="WP" action="Posts.php">
        <header>
        <h2>Add post</h2>
        <select  name="KindOfPost" >
            <option value="option1">Cultural</option>
            <option value="option2">Politician</option>
            <option value="option3">Sports</option>
            <option value="option4">Entertainment</option>
        </select>
    </header>
    <div class="phoVidPub" >
        <textarea class="post" placeholder="Write your post here..."></textarea>
        <div class="link">
        <a href="#">Photo</a>
        <a href="#">Video</a>
        <input type="submit" value="publish" name="publish">
    </div>
        </div>  
    </form>
    <header>
        <h2><a href="#" class="logo">SOCIAL MEDIA</a></h2>
        <ul>
            <li><a href="HomePage.php">Home</a></li>
            <li><a href="About.html">About</a></li>
            <li><a href="LogOut.php">Sginout</a></li>

        </ul>
        <?php
           echo $user;
        ?>
        
    </header>
</body>
</html>


