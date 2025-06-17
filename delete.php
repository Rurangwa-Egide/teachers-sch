<?php
include "conn.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $delete=$conn->query(" DELETE FROM son WHERE id=$id");
    if($delete){
        echo "<script>window.location.replace('display.php')</script>";
    }

}

?>