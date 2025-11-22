
<?php 
$newEmail = $_POST['email']; 
/* $id = $_POST['id']; //// para sa id nung student */
$sql = "UPDATE students SET email='$newEmail'"; /* add this to the last part '$newEmail' WHERE id = $id */
mysqli_query($conn,$sql); ?> 
