<?php 
$volun_id = $_GET['volunid'];
$event_id = $_GET['catid'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete_bookmark'])) {
        include '../../db_con.php';
        $sql = "DELETE FROM `bookmark` WHERE `volun_id`='$volun_id' AND `event_id`='$event_id'";
        $result = mysqli_query($conn, $sql);
        if($result) {
            // Use JavaScript to display the alert message
            echo '<script>alert("Successfully Deleted The Bookmarked!");</script>';
        } else {
            echo 'There was some error. Please try again later!';
        }

        // Redirect to index.php after displaying the alert
        echo '<script>window.location.href = "bookmark.php";</script>';
        exit;
    }
}
