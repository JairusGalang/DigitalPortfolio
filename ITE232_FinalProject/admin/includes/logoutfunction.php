<?php
session_start();
session_destroy();

echo "<script>alert('You are now logged out!'); location.href='../login.php';</script>";

?>