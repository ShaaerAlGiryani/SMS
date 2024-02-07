<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="Login.css">

</head>
<body>
    <form class="box" action="SignUpPost.php" method="POST">
       <h1>Sign Up</h1>
       <input required type="text" name="username" id="username" placeholder="UserName"><br>
       <input required type="email" name="email" id="email" placeholder="Email"><br>
       <input required type="password" name="password" id="username" placeholder="Password"><br>
       <input required type="firstname" name="firstname" id="firstname" placeholder="FirstName"><br>
       <input required type="lastname" name="lastname" id="lastname" placeholder="LastName"><br>
       <input required type="userage" name="userage" id="userage" placeholder="UserAge"><br>

       <h7>Gender</h7>
       <select name="gender">
                <option disabled selected>Choose</option>   
                <option>Male</option>
                <option>Female</option>
       </select>
       <br>
       <h7>Birthday</h7>
       <input required type="date" name="birthday" id="birthday" placeholder="Birthday"><br>

       <br>

       <input type="submit" name="submit" id="submit" value="Sign Up"><br>
       <h4>OR</h4>
       <a href="Login.php">Log in</a>
    </form>
</body>
</html>