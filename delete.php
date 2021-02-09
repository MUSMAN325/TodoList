<?php
include 'config.php';
$ID = $_GET['Id'];
mysqli_query($Con,"Delete from tbluser where Id= $ID");
header("location:index.php")
?>