

<?php
include_once '../partials/_dbconnect.php';
$sql = "DELETE FROM subcategory WHERE id='" . $_GET["id"] . "'";

$result = mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
    echo "<script>window.location = 'sub-category-list.php';</script> ";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>