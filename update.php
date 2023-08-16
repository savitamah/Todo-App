<?php 
  include 'config.php';

  $id = $_POST['id'];

  // $sql = "INSERT INTO todolist (text) VALUES('$text')";
   $sql = "UPDATE todolist SET text= '$text' WHERE id = $id";
   $result = mysqli_query($conn, $sql);
   if($result){
    echo 1;
   }
   else{
    echo "Error: {$sql}" . mysqli_error($conn);
   }

?>