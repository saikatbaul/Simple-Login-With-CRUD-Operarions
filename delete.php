<?php
include_once 'connection.php';
$sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
   header("location: list.php");
   exit();
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>