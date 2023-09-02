<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmark - HelpLink</title>
    <link rel="stylesheet" href="bookmark.css">
</head>

<body>
    <div class="main">
        <h1 style="text-align: center;color:black;margin:1rem;">Bookmarks</h1>
        <div class="wrapper">
            <?php
            session_start();
            include 'header.php';
            include 'C:/xampp/htdocs/Hackathon 2/db_con.php';
            $asql = "SELECT * FROM `bookmark` WHERE `volun_id`='$id'";
            $aresult = mysqli_query($conn, $asql);
            $acount = mysqli_num_rows($aresult);
            if ($acount == 0) echo '<script>alert("No results")</script>';
            else {
                while ($arow = mysqli_fetch_assoc($aresult)) {
                    $event_arow_id = $arow['event_id'];
                    $sql = "SELECT * FROM `event` WHERE `id`='$event_arow_id'";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_num_rows($result);
                    if ($row == 0) {
                        echo '<h1 style="color:black;">No results to show</h1>';
                    } else {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $event_id = $row['id'];
                            $name = $row['name'];
                            $des = $row['des'];
                            $location = $row['location'];
                            $time = $row['time'];
                            $volunteers = $row['volunterr_count'];
                            $work = $row['work'];
                            $organ_id = $row['organization_id'];

                            $organ_sql = "SELECT * FROM `organization` WHERE `id`='$organ_id'";
                            $organ_result = mysqli_query($conn, $organ_sql);
                            while ($organ_row = mysqli_fetch_assoc($organ_result)) {
                                echo '<div class="card">
                                <div class="card-left blue-bg">
                                <img src="../organization/profile_pictures/' ?><?= $organ_row['img'] ?><?php echo '">
                                </div>
                                <div class="card-center">
                                <h3>' . $name . '</h3>
                                <p class="card-detail">' . substr($des, 0, 150) . '...</p>
                                <p class="card-loc"><ion-icon name="location-outline"></ion-icon>' . $location . '
                                </p>
                                <div class="card-sub">
                            <p><ion-icon name="today-outline"></ion-icon>1 min ago</p>
                            <p><ion-icon name="hourglass-outline"></ion-icon>' . $time . '</p>
                            <p><ion-icon name="people-outline"></ion-icon>' . $volunteers . ' Volunters</p>
                            </div>
                            </div>
                            <div class="card-right">
                            <div class="card-tag">
                            <h5>Work</h5>
                            <a href="#">' . $work . '</a>
                            </div>
                            <div class="card-salary">
                            <a href="organization_profile.php?organid=' . $organ_id . '&volunid=' . $id . '">
                            <p><b>' . $organ_row['name'] . '</b></p>
                            </a>
                            </div>
                            <div class="card-tag" style="margin-top:1rem;">
                            <a href="event.php?catid=' . $event_id . '&volunid=' . $id . '" style="background: #4c50d3;
                            color: white;
                            border-radius: 10px;
                            padding: 7px;
                            margin-top: 5px;
                        }">Explore</a> 
                        <form action="delete_bookmark.php?catid=' . $event_id . '&volunid=' . $id . '" method="post">
                        <input style="background: #4c50d3;
                        color: white;
                        border-radius: 10px;
                        padding: 7px;
                        margin-top: 5px;
                    }" type="submit" name="delete_bookmark" value="Delete">
                    </form>
                    </div>
                    </div>
                    </div>';
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                    }
                                                                                                        ?>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.querySelector('.sidebar');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('open');
        });
    </script>
</body>

</html>