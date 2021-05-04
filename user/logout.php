<?php
session_start();
unset($_SESSION["cnum"]);

session_destroy();
header("Location:../index.php");
?>