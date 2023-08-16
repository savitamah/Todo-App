<?php
$host = "localhost";
$db_name = "todo_app";
$username = "root";
$password = ""; // default for Laragon's MySQL is blank
$conn = mysqli_connect("$host", "$username", "$password", "$db_name") or exit("Connection Failed.");
?>
