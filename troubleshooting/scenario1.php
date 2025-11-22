
<?php 
$conn = mysqli_connect("localhost", "root", "", "class_db"); 
 
$id = $_POST['id']; /* dapat "GET" to hindi "POST" */  
/* $id = $_GET['id']; */
 
$sql = "SELECT * FROM students WHERE id = $id"; /* mali yung sa id dito kase yung sa db is "student_id" yung nakalagay, hindi "id" */

/* so ang gagawin dito is change the "id = $id" to "student_id = $id"; */

$res = mysqli_query($conn, $sql); 
$r = mysqli_fetch_assoc($res); 
 
echo $r['first_name']; ?> 

