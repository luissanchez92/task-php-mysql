<?php
include("db.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query= "SELECT * FROM task WHERE id=$id";
    $result=mysqli_query($conn, $query);
    print_r($result);

    if(mysqli_num_rows($result)==1){
        $row= mysqli_fetch_array($result);
        print_r($row);
    }
}

?>