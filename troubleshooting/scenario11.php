<?php
if(isset($_POST['email'])){
    $email = $_POST['email'];
    echo "Email: " . $email;
}
?>

<form method="POST">
    Email: <input name="email">
    <input type="submit" value="Save">
</form>
