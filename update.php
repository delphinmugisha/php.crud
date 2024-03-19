<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "conn.php";
    if (isset($_GET['edit'])) {
        $id=$_GET['edit'];
        $select=$conn->query("select * from client where id='$id'");
        $fetch=mysqli_fetch_array($select);
    }
    ?>

<form action="" method="POST">
  cl_name
  <input type="text" name="cl_name" value="<?php echo $fetch['cl_name'];?>"><br><br>
  cl_age
  <input type="text" name="cl_age" value="<?php echo $fetch['cl_age'];?>"><br><br>
  cl_password
  <input type="text" name="cl_password" value="<?php echo $fetch['cl_password'];?>"><br><br>
<button type="submit" name="submit">update</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $a=$_POST['cl_name'];
    $b=$_POST['cl_age'];
    $c=$_POST['cl_password'];
    $update=$conn->query("UPDATE client SET cl_name='$a',cl_age='$b',cl_password='$c' where id='$id'");
    if ($update) {
        ?>
        <script>
            window.alert("modified well")
            window.location.href="select.php";
        </script>
        <?php
    }
}

?>

</body>
</html>