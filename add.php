<?php 
   include 'config.php';
   $text = $_POST['text'];
   $sql = "INSERT INTO todolist (text) VALUES('$text')";
   $result = mysqli_query($conn, $sql);
   if($result){
    echo 1;
   }
   else{
    echo "Error: {$sql}" . mysqli_error($conn);
   }

?>
