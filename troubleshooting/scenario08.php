 <?php 
$conn = mysqli_connect("localhost","root","","class_db"); 
 
$res = mysqli_query($conn,"SELECT * FROM students"); 
 
$row = mysqli_fetch_assoc($res);  /* out na to*/
 
/*add this loop para damay lahat nang row

while($row = mysqli_fetch_assoc($res)) { 
*/
echo $row['email'];} // prints first only ?> 
 
 