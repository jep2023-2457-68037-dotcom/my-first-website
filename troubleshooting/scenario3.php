<?php 
$conn = mysqli_connect("localhost","root","","class_db"); 

/*panget gamitin ang $age kasi pweding ma reveal lahat */
/*gagamitan natin ng prepared statement para yung value is treated as a number only.*/
$age = $_GET['age']; 

$sql = "SELECT * FROM students WHERE age = $age"; /* change this to 
$stmt = mysqli_prepare($conn, "SELECT * FROM students WHERE age = ?"); */

$res = mysqli_query($conn, $sql);
/*mysqli_stmt_bind_param($stmt, "i", $age);
mysqli_stmt_execute($stmt);

$res = mysqli_stmt_get_result($stmt);*/
?>