<?php
session_start();

echo "logout seccessfully";
session_destroy();
header("location:lg-form.php");

?>
