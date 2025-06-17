<?php
include "conn.php";
if(isset($_POST['save'])){
     $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $day=$_POST['day'];
    $time=$_POST['time'];
    $date=$_POST['date'];
    $present=$_POST['present/absent'];
    $insert=$conn->query("INSERT INTO teacher VALUES(null,'$f_name','$l_name','$day','$time','$date','$present')");
    if($insert){
        echo "<script>alert('thank your for available')</script>";
        header("location:display.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teachstyle.css">
    <title>Document</title>
</head>
<body>
    <h1>ATENDENSE LIST OF TEACHERS</h1>
    <form action="" method="post">
    <fieldset>
        <label for="">F_name</label><br>
        <input type="text" name="f_name" id="" placeholder="Enter Your First_Name" required><br><br>
        <label for="">L_name</label><br>
        <input type="text" name="l_name" id="" placeholder="Enter Your Last_Name" required><br><br>
        <label for="">Day</label><br>
        <input type="day" name="day" id="" placeholder="Enter the Present Day" required><br><br>
        <label for="">Time</label><br>
        <input class="law" type="time" name="time" id="" required><br><br>
        <label for="">Date</label><br>
        <input class="law" type="date" name="date" id="" required><br><br>
        <label for="">Adse/Pres</label><br>
        <input type="text" name="present/absent" id="" placeholder="write Present & Absent" required><br><br>
        <button name="save">Submite</button>
    </fieldset>
    </form>
</body>
</html>