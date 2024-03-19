<?php
include "conn.php";
$sel=$conn->query("select * from client");
if($sel){
    echo "selected";
}
else{
    echo "not";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="border-collapse: collapse;">
       <tr>
        <th>id</th>
        <th>cl_name</th>
        <th>cl_age</th>
        <th>cl_password</th>
        <th colspan="2">action</th>
       </tr>

       <?php
$i=1;
while ($rows=mysqli_fetch_array($sel)) {
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo $rows['cl_name'];?></td>
    <td><?php echo $rows['cl_age'];?></td>
    <td><?php echo $rows['cl_password'];?></td>
    <td><a href="update.php?edit=<?php echo $rows['id'];?>">edit</a></td>
    <td><a href="delete.php?delete=<?php echo $rows['id'];?>">delete</a></td>
  </tr>
  <?php
  $i++;
}
?>
</table>
</body>
</html>