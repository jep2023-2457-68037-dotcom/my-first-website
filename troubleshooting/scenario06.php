<?php 
$conn = mysqli_connect("localhost","root","","class_db"); 
 
$id = $_POST['id']; 
$email = $_POST['email']; 
 
$sql = "UPDATE students SET email=$email WHERE id=$id"; /*lagay ng quote sa '$email' */
$res = mysqli_query($conn, $sql); 
 
echo "Updated!"; /*tanggalin nalang to tas ipalit itong sa baba */
/*for error checking to*/
/* if($res) {
    echo "Updated!";
    } else {
    echo "Error updating: " . mysqli_error($conn); */ 
    ?>

