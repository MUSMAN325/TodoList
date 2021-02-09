<?php
include 'config.php';
$Id =$_GET['Id'];
$List =$_GET['list'];
$Date =$_GET['Date'];

mysqli_query($Con,"UPDATE tbluser SET list='$List',Date='$Date' WHERE Id = '$Id'");
header("location:index.php");

?>