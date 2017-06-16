<?php
session_start();
unset($_SESSION["success"]);
header("Location:hw8.php");
?>