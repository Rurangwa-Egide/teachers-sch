<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="displaystyle.css">
    <title>Document</title>
</head>
<body>
   <div class="header">
         <a href="teacher.php">Teachers</a>
        <a href="#">Displine-master</a>
        <a href="#">librarian</a>
        <a href="#">securetery</a>
        <a href="#">Accountant</a>
        <a href="logout.php"><i><b><button>Logout</button></b></i></a>
        <a href="#"><i><b><button>report</button></b></i></a>
</div>

 <div class="nextpart">

<table border="2">
    <tr>
          <th colspan="5" style="text-transform: uppercase;  color: white;">table of all employees</th>
    </tr>
    <tr>
     <th>ID</th>
     <th>USERNAME</th>
     <th>EMAIL</th>
     <th colspan="2">OPTION</th>

    </tr>
</div>
</body>
</html>


<?php

include "conn.php";
$count=1;
$select=$conn->query("SELECT * FROM son");
while($row=mysqli_fetch_assoc($select)){

?>
<tr>
<td><?php echo $count++;?></td>
<td><?php echo $row['username']?></td>
<td><?php echo $row['email']?></td>
<td><a href="delete.php?id='<?php echo $row['id'];?>'">DELETE</a></td>
<td><a href="updated.php?id='<?php echo $row['id'];?>'">UPDATE</a></td>

</tr>
<?php


}
?>

</table>
<br><br><br>
