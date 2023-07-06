<?php
$con = mysqli_connect("localhost", "root", "", "it-firm");
if ($con) {
    $deleteQuery = "TRUNCATE TABLE contacts";
    $deleteResult = mysqli_query($con, $deleteQuery);

    if ($deleteResult) {
        echo 'Table cleared successfully.';
    } else {
        echo 'Error occurred while clearing the table.';
    }
} else {
    echo 'Database connection failed.';
}
?>
