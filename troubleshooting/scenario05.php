<?php 
$conn = mysqli_connect("localhost","root","","class_db"); 

/* $id = intval($_GET['id']);  add this para ma convert yung ininput to integer*/
$sql = "DELETE FROM students WHERE id = " . $_GET['id']; /* cahnge the id = ". $_GET['id']; to id = . $id; */
/* so now kapag may nag try ng /id=0 or 1=1, magiging 0 nlang sya*/

mysqli_query($conn, $sql); ?> 
