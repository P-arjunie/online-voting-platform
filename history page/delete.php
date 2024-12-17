<?php
include'config.php';

if(isset($_GET['deleteid'])){

    $id=$_GET['deleteid'];

    $sql="delete from details1 where userid=$id";
  $result=mysqli_query($conn,$sql);
if($result){
    header("Location:history.php");
}
else{
die(mysqli_error($conn));
}
}


?>