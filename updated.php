<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    background-color:rgb(8, 224, 206);
}

fieldset{
    width: 40%;
    height: 20rem;
    margin-left: 27%;
    margin-top: 7rem;
    border-radius: 20px;
}
label{
    margin-top: 5rem;
    margin-left: 43%;
    
}
input{
    all: unset;
    border-bottom: 2px solid black;
     margin-left: 32%;
     margin-top: 1rem;
     text-align: center;

}
button{
    width: 35%;
    margin-left: 32%;
    cursor: pointer;
    border-radius: 10px;
    border: transparent;
}
legend{
    margin-left: 38%;
}
</style>
<body>

<?php
include "conn.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $up="SELECT * FROM son WHERE id=$id";
    $run=mysqli_query($conn,$up);
     while ($row=mysqli_fetch_assoc($run)){

?>
<fieldset>
    <legend>UPDATING DATA</legend>
    <form action="" method="post">
        <label for="">Username</label><br>
        <input type="text" name="username" value="<?php echo $row['username']?>" required><br><br>
        <label for="">Email</label><br>
        <input type="email" name="email" value="<?php echo $row['email']?>" required><br><br>
        <label for="">Password</label><br>
        <input type="text" name="password" value="<?php echo $row['password']?>" required><br><br>
        <button name="update">Update</button>
    </form>
</fieldset>

<?php

}
}

?>

</body>
</html>


<?php

include "conn.php";
if(isset($_POST['update'])){
    $id=$_GET['id'];
    $user=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $upa="UPDATE son SET username='$user', email='$email', password='$pass' WHERE id=$id";
    $rum=mysqli_query($conn,$upa);
    if($rum){ 
        echo "<script>alert('well data updated')</script>";
        echo "<script>window.location.replace('display.php')</script>";
    }
}






?>