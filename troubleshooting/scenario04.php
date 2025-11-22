<?php 
$conn = mysqli_connect("localhost","root","","class_db"); 

$first = $_POST['fname']; 
$last = $_POST['lname']; 

/*if(!empty($first) && !empty($last)) add ito para ma check kung may laman yung form bago i insert*/
$sql = "INSERT INTO students (first_name,last_name) VALUES ('$first',
'$last')"; 
mysqli_query($conn, $sql); 

echo "Inserted!";
 
?> 
