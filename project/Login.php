<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="Login.css">

</head>
<body>
    <form class="box" method="POST" action="LoginPost.php" >
        
       <label for="username"> Username</label><br>
       <input required type="text" name="username" id="username" placeholder="User Name ..."><br>
       <label for="password"> Password</label><br>
       <input required type="password" name="password" id="username" placeholder="Password"><br>
       <input type="submit" name="submit" id="submit" value="Login">
       <h4>OR</h4>
       <a href="SignUp.php">Create new account</a>
       

    </form>
</body>
</html>