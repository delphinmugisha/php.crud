<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
         cl_name
         <input type="text" name="cl_name"><br><br>
         cl_age
         <input type="number" name="cl_age"><br><br>
         cl_password
         <input type="password" name="cl_password">
         <button type="submit" name="submit">submit</button>

    </form>
</body>
</html>
<?php
include "conn.php";
if(isset($_POST['submit'])){
    $a=$_POST['cl_name'];
    $b=$_POST['cl_age'];
    $c=$_POST['cl_password'];
    $insert=$conn->query("insert into client(cl_name,cl_age,cl_password)values('$a','$b','$c')");
    if($insert){
        ?>
        <script>
            window.alert("inserted well")
            window.location.href='select.php';
        </script>
        <?php    
    }
    else{
        echo "not";
    }
}








?>