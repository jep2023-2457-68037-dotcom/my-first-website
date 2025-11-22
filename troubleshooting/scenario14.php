
<?php 
$data = $_POST; 
 
$sql = "INSERT INTO students (first_name, last_name, email)       
  VALUES ($data[first_name], $data[last_name], $data[email])"; /* add quotes''*/
  /* VALUES ('{$data['first_name']}', '{$data['last_name']}', '{$data['email']}')*/
 ?>