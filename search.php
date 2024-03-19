<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="number" name="number"><br><br>
    <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>
<?php
include "conn.php";
if (isset($_POST['submit'])) {
    $number=$_POST['number'];

?>

<table border="1">
<tr>
    <th>id</th>
    <th>cl_name</th>
    <th>cl_age</th>
    <th>cl_password</th>
</tr>

<?php
$sel=$conn->query("select * from client where id='$number'");
while ($row=mysqli_fetch_array($sel)) {
    ?>

<tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['cl_name'];?></td>
    <td><?php echo $row['cl_age'];?></td>
    <td><?php echo $row['cl_password'];?></td>
</tr>
<?php
}
}
?>
</table>