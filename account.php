<?php
include "conn.php";
if(isset($_POST['save'])){
    $user=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $insert=$conn->query("INSERT INTO son VALUES(null,'$user','$email','$pass')");
    if($insert){
        echo "<script>alert('Account Well Created')</script>";
        echo "<script>window.location.replace('login.php')</script>";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="acountst.css">
    <title>Document</title>
</head>
<body>
<div class="header">
     <a href="index.php">Home</a>
     <a href="search.php">Searching</a>
     <a href="account.php"> <button  class="new">New acount</button></a>
</div>

  <div class="nextpart">

<fieldset>
<legend>REGISTERATION FROM </legend>
    <form action="account.php" method="post">
       <i> <label for="">Username</label><br>
        <i><input type="text" name="username" id="" placeholder="Enter your username" required><br><br></i>
       <i> <label for="">Email</label><br>
        <i><input type="email" name="email" id="" placeholder="Enter your Email" required><br><br></i>
        <i><label for="">Password</label><br>
        <i><input type="password" name="password" id="" placeholder="Enter your Password" required><br><br></i>
        <button name="save" class="send">submite</button>
    </form>

</div>
</fieldset>
</body>
</html>