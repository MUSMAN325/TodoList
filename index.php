<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
</head>
<style>


    body {
    /* background-color: #FF9800; */
    background-color: aqua;
    color: black;
  }
  .vertical-container {
    height: 60px;
    display: -webkit-flex;
    display:         flex;
    -webkit-align-items: center;
            align-items: center;
    -webkit-justify-content: center;
            justify-content: center;
  }
  h1.vertical-container {
    font-size: 275%;
  }

  .input{
    width: 60%;
    /* border: 2px solid black; */
    margin: 0px auto;
    text-align: center;
  }
  .input input{
    width: 80%;
    height: auto;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 18px;
    padding: 8px;
    border-radius: 3px;

   }
   
  .input button{
    padding: 12px 15px;
    font-weight: bold;
    background-color: #FF9800;
    border: none;
    border-radius: 4px;
    color: white;
    box-shadow: 0px 3px 4px gray;
    cursor: pointer;
  }
  .input button:hover{
    background-color: darkcyan;
    color: white;
  }
  .Delete{
    
    margin-left: 675px;
    margin-top: 10px;
      
  }
  
</style>
<body>
    
  <h1 class="vertical-container">TODO APP</h1>

<form action="insert.php" >
    <div class="input">
<input type="text" name="list" >

<button>Add Task</button>

<br><br>

<input type="datetime-local" name="date"  style="width: 300px;">

</div>
</form>
<?php

include 'config.php';
$RawData = mysqli_query($Con, "select * from tbluser");
?>

<table class = "table table-bordered mt-5" style = "width: 60%; margin:auto;">
   
    <tbody>
   <?php

   while($row = mysqli_fetch_array($RawData)){
   ?>
   <tr style="background-color:white;">
       
       <td  ><?php echo $row['list'] ?></td>
       <td  ><?php echo $row['Date'] ?></td>
       
     
       <td style="width: 10px;"><a href="delete.php? Id= <?php echo $row['Id'] ?>"class = "btn btn-outline-danger">Delete</a></td>
       <td style="width: 10px;"><a href="update.php? Id= <?php echo $row['Id'] ?>"  class = "btn btn-outline-success">Update</a></td>
       
    </tr>
   <?php
   }
   ?>
       </tbody>
</table>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
</body>
</html>