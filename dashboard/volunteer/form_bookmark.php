<?php 
$volun_id = $_GET['volunid'];
$event_id = $_GET['catid'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['bookmark'])) {
        include '../../db_con.php';
        $sql = "SELECT * FROM `bookmark` WHERE `volun_id`='$volun_id' AND `event_id`='$event_id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);
        if($row == 0){
            $sql = "INSERT INTO `bookmark`(`volun_id`,`event_id`) VALUES('$volun_id','$event_id')";
            $result = mysqli_query($conn, $sql);
            if($result) {
                // Use JavaScript to display the alert message
                echo '<script>alert("Successfully Bookmarked!");</script>';
            } else {
                echo 'There was some error. Please try again later!';
            }
        }
        else {
            echo '<script>alert("Already Bookmarked")</script>';
        }

        // Redirect to index.php after displaying the alert
        echo '<script>window.location.href = "index.php";</script>';
        exit;
    }
}
?>
