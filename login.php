<?php
include "conn.php";
include "conn.php";
if(isset($_POST['login'])){
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $select=$conn->query("SELECT * FROM son WHERE username='$user' and password='$pass'");
    $row=mysqli_fetch_array($select);
    $num=mysqli_num_rows($select);
    $_SESSION['login']=$user;
    if($row){
        echo "<script>window.location.replace('display.php')</script>";
    }
    else{
        echo "<script>alert('Your Not Allowed To Access With Out Account Create New')</script> ";
        echo "<script>window.location.replace('login.php')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <title>Document</title>
</head>
<body>
<body>
    <div class="head">
     <a href="index.php">Home</a>
     <a href="search.php">Searching</a>
     <a href="login.php"><button class="red">log in</button></a>
</div>
    
 <div class="nextpart">
    <fieldset>
    <legend>LOGIN</legend>
    <form action="login.php" method="post">
        <label for="">Username</label><br>
        <input type="text" name="username" id="" placeholder="Enter your username" required><br><br>
        <label for="">Password</label><br>
        <input type="password" name="password" id="" placeholder="Enter your Password" required><br><br>
        <button name="login" class="send">Send</button><br><br>
        <a href="account.php"><i>Create New Account</i></a>
    </form>
    </fieldset>
     </div>

</body>
</html>