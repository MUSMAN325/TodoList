<?php
  $LIST =$_GET['list'];
  $DATE =$_GET['date'];



  $Con = mysqli_connect("localhost","root","","userdb");
  mysqli_query($Con, "INSERT INTO `tbluser`( `list`,`Date`) VALUES ('$LIST','$DATE')");
header("location:index.php")
?>



   