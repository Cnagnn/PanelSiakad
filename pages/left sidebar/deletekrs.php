<?php
include_once("config.php");

if(isset($_GET['no'])) {
    $no = $_GET['no'];
    
    $result = mysqli_query($con, "DELETE FROM krs WHERE NO=$no");
    
    if($result) {
        header("Location: krs.php");
    } else {
        echo "Error deleting record";
    }
} else {
    echo "Invalid request";
}
?>
