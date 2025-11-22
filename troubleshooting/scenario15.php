
<?php 
$page = $_GET['page']; /* ? intval($_GET['page']) : 0;
if($page < 0) $page = 0;  // restrict negative pages */

$limit = 5; 
$offset = $page * $limit; 
 
$sql = "SELECT * FROM students LIMIT $offset, $limit"; ?> 
