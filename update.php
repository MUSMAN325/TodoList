<!DOCTYPE html>
<?php
include 'Config.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <?php
    $Id = $_GET['Id'];
    $RData = mysqli_query($Con, "select * from tbluser where Id = $Id");
    $Record = mysqli_fetch_array($RData);
    ?>

    <div class="container pad">
        <div class="row justify-content-center">
            <form action="update1.php" method="GET" class = "pad">
               
                <input value="<?php echo $Record['list'] ?>" type="text" name="list">
                <input value="<?php echo $Record['Date'] ?>" type="datetime-local" name="Date">
                <button type="submit" class="btn btn-danger btn-block mt-3">Update</button>
                <input type="text" name="Id" value="<?php echo $Record['Id'] ?>">
            </form>
        </div>
        <div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>

</body>

</html>