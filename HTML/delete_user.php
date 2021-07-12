<?php
include('connection.php');
if (isset($_POST['delete'])) {
    $id =$_POST['Deliting_id'];
    $sql = "DELETE FROM contactus WHERE contactus_id={$id}";

    if (mysqli_query($conn, $sql)) {
     header("Location:Admin-NewQueries.php");
    } else {
      echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);

 ?>
