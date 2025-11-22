<?php 
$conn = mysqli_connect("localhost","root","","class_db"); 
 
$fname = $_POST['fname']; 
 
$sql = "SELECT * FROM students WHERE first_name = $fname"; /* mali yung $fname*, dapat meron nito 'quotes' */
/* $sql = "SELECT * FROM students WHERE first_name = '$fname'"; */
/*kapag text yung hinahanap is dapat my quotes yan, kasi kung wala, aakalain ni sql is column name yung hinahanap */

$res = mysqli_query($conn, $sql);
?>
