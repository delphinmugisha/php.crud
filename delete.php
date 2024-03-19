<?php
include "conn.php";
if (isset($_GET['delete'])) {
    $id=$_GET['delete'];
    $del=$conn->query("DELETE from client where id='$id'");
    if ($del) {
        ?>
        <script>
            window.alert("deleted data")
            window.location.href="select.php";
        </script>
        <?php
    }
    else {
        echo "not deleted";
    }
}
?>