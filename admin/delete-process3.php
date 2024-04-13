<?php
include_once '../partials/_dbconnect.php';
$sql = "DELETE FROM product WHERE id='" . $_GET["id"] . "'";

$result = mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
    echo "<script>window.location = 'product-list.php';</script> ";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>