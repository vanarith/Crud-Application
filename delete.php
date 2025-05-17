<?php
include "db_conn.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 

    $sql = "DELETE FROM user WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php?msg=Deleted successfully");
        exit();
    } else {
        echo "Failed to delete record: " . mysqli_error($conn);
    }
} else {
    echo "No ID provided.";
}
?>
