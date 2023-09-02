<?php
// include './db_con.php';
session_start();
include 'C:/xampp/htdocs/Hackathon 2/db_con.php';
if (isset($_SESSION['volun_loggedin'])) {
    if (!$_SESSION['volun_loggedin']) {
        // header('../../organization/login.php');
        exit;
    } else {
        $id = "";
        $organ_username = $_SESSION['volun_username'];
        $sql = "SELECT * FROM `volunteer` WHERE `name`='$organ_username'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
        }
    }
} else {
    // header('../../organization/login.php');
    exit;
}
?>
<?php
$sort = 'N';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['sort_btn'])) {
        $options = $_POST['options'];
        if ($options == 'newest') $sort = 'N';
        else $sort = 'O';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Nunito:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <title>HelpLink- Volunters Dashboard</title>
    <style>
        :root {
            --primaryColor: #4c50d3;
            --secondaryColor: #ffce00;
            --fontColor: #1e1e1e;
            --whiteColor: #fff;
            --greyColor: #e7e7e7;
            --darkGreyColor: #5f5f5f;
            --softPurple: #e7e8ff;
            --softBlue: #c3e1ff;
            --softYellow: #fff5cc;
            --softRed: #ffcbc8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            font-family: 'lato', sans-serif;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
        }

        .sidebar {
            width: 20%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: space-between;
            padding: 2rem;
            background-color: #1e1e1e;
            color: var(--whiteColor);
            position: fixed;
            left: 0;
        }

        .logo {
            letter-spacing: 2;
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .menu a {
            display: flex;
            align-items: center;
            color: var(--whiteColor);
            text-decoration: none;
        }

        .menu ion-icon {
            margin-right: 0.5rem;
        }

        .menu a:hover {
            color: var(--secondaryColor);
        }

        .profile {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem;
            background-color: var(--whiteColor);
            color: var(--fontColor);
            border: none;
            border-radius: 10px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            cursor: pointer;
        }

        .profile:hover {
            background-color: var(--secondaryColor);
        }

        .profile-img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
        }

        .profile-name p {
            font-size: 12px;
        }

        .main {
            /* width: calc(100% - 20% - 25%); */
            width: 100%;
            min-height: 100%;
            min-width: 300px;
            height: max-content;
            display: flex;
            flex-direction: column;
            padding: 2rem 2%;
            margin-left: 20%;
            background-color: var(--softPurple);
            z-index: 1
        }

        .main-header {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .menu-bar {
            background-color: var(--whiteColor);
            padding: 0.5rem;
            border-radius: 20px;
            display: none;
        }

        .search {
            width: 100%;
            display: flex;
            justify-content: space-between;
            border: none;
            background-color: none;
            border-radius: 20px;
            padding: 0.5rem 1rem;
            position: relative;
            background-color: var(--whiteColor);
        }

        .search input {
            width: 90%;
            border: none;
        }

        .btn-search {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            padding: 0 5%;
            border: none;
            background-color: var(--primaryColor);
            color: var(--whiteColor);
            font-size: 18px;
            border-radius: 20px;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            cursor: pointer;
        }

        .btn-search:hover {
            background-color: var(--secondaryColor);
            color: var(--fontColor);
        }

        .filter-wrapper {
            margin: 1rem 0;
            font-size: 14px;
        }

        .filter {
            display: flex;
            gap: 1rem;
            overflow-x: auto;
            margin: 0.5rem 0;
        }

        .btn-filter {
            min-width: 110px;
            padding: 0.5rem;
            border-radius: 20px;
            border: none;
            background-color: white;
            cursor: pointer;
        }

        .btn-filter:hover {
            background-color: var(--primaryColor);
            color: var(--whiteColor);
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .sort {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 0.5rem;
        }

        .sort p {
            font-size: 14px;
        }

        .sort a {
            text-decoration: none;
            padding: 10px;
            background-color: #4c50d3;
            color: #fff;
            border-radius: 20px;
        }

        .sort-list select {
            height: 1.5rem;
            border-radius: 20px;
            border: none;
            margin-top: 0 0.5rem;
        }

        .wrapper {
            width: 100%;
            display: flex;
            flex-direction: column;
            padding: 1rem 0;
            gap: 1rem;
            overflow-y: auto;
        }


        .card {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            align-items: flex-start;
            padding: 3%;
            margin: 0 1%;
            background-color: var(--whiteColor);
            line-height: 1.5rem;
            gap: 1.5rem;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            border-radius: 10px;
            cursor: pointer;
        }

        .card:hover {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .card-left {
            width: 10%;
            min-width: 50px;
            display: flex;
            justify-content: center;
            border-radius: 20%;
        }

        .card-left img {
            width: 100%;
            height: auto;
            min-height: 60px;
            padding: 1rem;
        }

        .card-center {
            width: 50%;
        }

        .card-center h3 {
            color: black;
        }

        .card-loc,
        .card-sub {
            font-size: 13px;
            color: var(--darkGreyColor);
        }

        .card-sub {
            display: flex;
            flex-wrap: wrap;
        }

        .card-sub p {
            display: flex;
            padding: 0 0.5rem 0 0;
            align-items: center;
        }

        .card-detail {
            color: black;
        }

        .card-right {
            width: 15%;
        }

        .card-tag a {
            color: black;
            text-decoration: none;
            font-size: 16px;
        }

        .card-tag h5 {
            color: black;
        }

        .card-salary {
            padding: 0.5rem 0;
            color: black;
        }

        .blue-bg {
            background-color: var(--softBlue);
        }

        .yellow-bg {
            background-color: var(--softYellow);
        }

        .red-bg {
            background-color: var(--softRed);
        }

        .purple-bg {
            background-color: var(--softPurple);
        }

        .detail {
            display: none;
            width: 25%;
            min-width: 250px;
            height: 100%;
            padding: 2rem;
            position: fixed;
            right: 0;
            background-color: var(--whiteColor);
            overflow: auto;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }

        .close-detail {
            display: none;
        }

        .detail-header {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .detail-header img {
            width: 50px;
            height: 50px;
        }

        .divider {
            width: 100%;
            height: 1px;
            background-color: var(--greyColor);
            border: none;
            margin: 1rem 0;
        }

        .detail-desc {
            line-height: 1.5;
        }

        .about a {
            margin: 0.5rem 0 0 0;
            color: var(--primaryColor);
            font-size: 14px;
            text-decoration: none;
            font-weight: 600;
            cursor: pointer;
        }

        .detail-btn {
            display: flex;
            gap: 1rem;
            margin: 1rem 0;
        }

        .btn-apply {
            background-color: var(--primaryColor);
            color: var(--whiteColor);
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
        }

        .btn-save {
            background-color: var(--secondaryColor);
            border: none;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
        }

        .btn-apply:hover {
            border: 1px solid var(--primaryColor);
            background-color: transparent;
            color: var(--primaryColor);
        }

        .btn-save:hover {
            border: 1px solid var(--secondaryColor);
            background-color: transparent;
        }

        
        
        
        @media screen and (max-width:1150px) {
            .main {
                width: 100%;
                margin-left: 0;
            }
        }
        
        @media screen and (max-width:800px) {
            .menu-bar {
                display: block;
            }
            
            .sidebar {
                display: none;
            }
            
            
            .detail {
                width: 40%;
            }
        }
        
        @media screen and (max-width:700px) {
            .main {
                width: 100%;
            }
            
            .detail {
                display: none;
            }
            
            .detail.active {
                display: block;
                width: 100%;
                z-index: 100;
            }
        }
        #search_btn {
            position: absolute;
            width: 12%;
            right: 0;
            padding: 10px;
            top: 0px;
            background: #4c50d3;
            color: white;
        }
        
        @media screen and (max-width:500px) {
            #search_btn{
                width: 20%;
            }
        }
        </style>
</head>

<body>
    <?php include 'header.php' ?>
    <div class="sidebar" style="display: none;">
        <h1 class="logo">HELPLINK</h1>
        <div class="menu">
            <a href="#"><ion-icon name="newspaper-outline"></ion-icon>Find Events</a>
            <a href="#"><ion-icon name="stats-chart-outline"></ion-icon>Performance Reviews</a>
            <a href="#"><ion-icon name="bookmarks-outline"></ion-icon>Bookmarks</a>
            <a href="#"><ion-icon name="mail-unread-outline"></ion-icon>Message</a>
            <a href="#"><ion-icon name="settings-outline"></ion-icon>Setting</a>
        </div>
        <div class="profile">
            <img class="profile-img" src="img/profile.jpeg">
            <div class="profile-name">
                <!-- <h4>Mansur Javid</h4> -->
                <a href="organization_profile.php" style="text-decoration: none;">
                    <h4><?php echo $organ_username ?></h4>
                </a>
                <!-- <p><strong>User-Id:10112</strong></p> -->
                <p><strong>User-Id:<?php echo $id ?></strong></p>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="menu-header">
            <ion-icon class="menu-bar" name="menu-outline"></ion-icon>
            <div class="search">
                <form action="search.php" method="get">
                    <input type="text" placeholder="Search here" name="search">
                    <input type="submit" name="search_btn" id="search_btn" value="Search">
                    <!-- <button class="btn-search"><ion-icon name="search-outline"></ion-icon></button> -->
                </form>
            </div>
        </div>
        <div class="filter-wrapper">
            <p style="color:black;">Recommendation</p>
            <div class="filter">
                <button class="btn-filter">Cleaning</button>
                <button class="btn-filter">Planting</button>
                <button class="btn-filter">Teaching</button>
                <button class="btn-filter">Nursing</button>
                <button class="btn-filter">Donation</button>
            </div>
        </div>
        <div class="sort">
            <div class="sort-list">
                <form action="" method="post">
                    <select id="options" name="options">
                        <option value="newest" selected>Newest</option>
                        <option value="oldest">Oldest</option>
                    </select>
                    <input type="submit" name="sort_btn" value="Sort" style="    background: #4c50d3;
    color: white;
    padding: 3px;
    border-radius: 5px;
">
                </form>
            </div>
        </div>
        <div class="wrapper">

            <?php
            include 'C:/xampp/htdocs/Hackathon 2/db_con.php';
            if ($sort == 'N') $sql = "SELECT * FROM `event` ORDER BY `posted_at` DESC";
            else $sql = "SELECT * FROM `event` ORDER BY `posted_at` ASC";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($result);
            if ($row == 0) {
                echo '<h1 style="color:black;">No result to show</h1>';
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    $event_id = $row['id'];
                    $name = $row['name'];
                    $des = $row['des'];
                    $location = $row['location'];
                    $volunteers = $row['volunterr_count'];
                    $work = $row['work'];
                    $organ_id = $row['organization_id'];
                    $time = $row['time'];
                    // Get the datetime value from the database
                    $dbDatetime = $row['posted_at'];

                    // Calculate the time difference
                    $currentTimestamp = time();
                    $dbTimestamp = strtotime($dbDatetime);
                    $timeDifference = $currentTimestamp - $dbTimestamp;

                    // Format the time difference in a user-friendly way
                    if ($timeDifference < 60) {
                        // Less than a minute ago
                        $formattedTime = $timeDifference . " seconds ago";
                    } elseif ($timeDifference < 3600) {
                        // Less than an hour ago
                        $minutes = floor($timeDifference / 60);
                        $formattedTime = $minutes . " minute" . ($minutes > 1 ? "s" : "") . " ago";
                    } else {
                        // More than an hour ago
                        $hours = floor($timeDifference / 3600);
                        $formattedTime = $hours . " hour" . ($hours > 1 ? "s" : "") . " ago";
                    }

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
                                <p><ion-icon name="today-outline"></ion-icon>' . $formattedTime . '</p>
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
                            <div>
                                <a href="event.php?catid=' . $event_id . '&volunid=' . $id . '" style="background: #4c50d3;
                                color: white;
                                border-radius: 10px;
                                padding: 7px;
                                margin-top: 5px;
                            }">Explore</a>
                            </div>
                            <div style="margin-top:2px;"> 
                            <form action="form_bookmark.php?catid=' . $event_id . '&volunid=' . $id . '" method="post">
                                <input style="background: #4c50d3;
                                color: white;
                                border-radius: 10px;
                                padding: 7px;
                                margin-top: 5px;
                            }" type="submit" name="bookmark" value="Bookmark">
                            </form>
                            </div>
                            </div>
                        </div>
                    </div>';
                                                                                                }
                                                                                            }
                                                                                        }
                                                                                                    ?>
            <!-- <div class="card">
                <div class="card-left blue-bg">
                    <img src="img/google.png">
                </div>
                <div class="card-center">
                    <h3>Environmental Cleanup Day</h3>
                    <p class="card-detail">Join us in cleaning up a local park or beach to protect our environment.</p>
                    <p class="card-loc"><ion-icon name="location-outline"></ion-icon>
                        Koramangala, Bangalore, India</p>
                    <div class="card-sub">
                        <p><ion-icon name="today-outline"></ion-icon>1 min ago</p>
                        <p><ion-icon name="hourglass-outline"></ion-icon>9 pm to 12pm</p>
                        <p><ion-icon name="people-outline"></ion-icon>300 Volunters</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h5>Work</h5>
                        <a href="#">Cleaning</a>
                    </div>
                    <div class="card-salary">
                        <p><b>Organization</b></p>
                    </div>
                </div>
            </div> -->


            <!-- <div class="card">
                <div class="card-left blue-bg">
                    <img src="img/google.png">
                </div>
                <div class="card-center">
                    <h3>Blood Donation Camp</h3>
                    <p class="card-detail"> Partner with healthcare institutions to set up a blood donation camp, encouraging volunteers to save lives through blood donation.</p>
                    <p class="card-loc"><ion-icon name="location-outline"></ion-icon>
                        KMC Hospital, Mangalore, India</p>
                    <div class="card-sub">
                        <p><ion-icon name="today-outline"></ion-icon>1 min ago</p>
                        <p><ion-icon name="hourglass-outline"></ion-icon>9 pm to 12pm</p>
                        <p><ion-icon name="people-outline"></ion-icon>157 Volunters</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h5>Work</h5>
                        <a href="#">Donation</a>
                    </div>
                    <div class="card-salary">
                        <p><b>Organization</b></p>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-left yellow-bg">
                    <img src="img/tiktok.png">
                </div>
                <div class="card-center">
                    <h3>Community Garden Planting</h3>
                    <p class="card-detail"> Help us plant vegetables and flowers in our community garden to promote sustainable living. </p>
                    <p class="card-loc"><ion-icon name="location-outline"></ion-icon>Kadri Hills,Mangaluru, Karnataka</p>
                    <div class="card-sub">
                        <p><ion-icon name="today-outline"></ion-icon>4 days ago</p>
                        <p><ion-icon name="hourglass-outline"></ion-icon>6pm to 1pm</p>
                        <p><ion-icon name="people-outline"></ion-icon>16 Volunters</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h5>Work </h5>
                        <a href="#">Planting</a>
                    </div>
                    <div class="card-salary">
                        <p><b>Organization</b></p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-left purple-bg">
                    <img src="img/apple.png">
                </div>
                <div class="card-center">
                    <h3>Skill Sharing Workshops</h3>
                    <p class="card-detail">Share your skills by conducting workshops on topics like cooking, painting, coding, or photography.</p>
                    <p class="card-loc"><ion-icon name="location-outline"></ion-icon>Uppalli, Chikkamagaluru, Karnataka</p>
                    <div class="card-sub">
                        <p><ion-icon name="today-outline"></ion-icon>16 days ago</p>
                        <p><ion-icon name="hourglass-outline"></ion-icon>10pm-1pm</p>
                        <p><ion-icon name="people-outline"></ion-icon>2 Volunters</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h5>Work </h5>
                        <a href="#">Teaching</a>
                    </div>
                    <div class="card-salary">
                        <p><b>Organization</b></p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-left blue-bg">
                    <img src="img/amazon.png">
                </div>
                <div class="card-center">
                    <h3>Elderly Care Visits</h3>
                    <p class="card-detail">Spend time with elderly residents at a local care home, engaging in conversations and activities.</p>
                    <p class="card-loc"><ion-icon name="location-outline"></ion-icon>Lady Hill, Mangalore, Karnatka, India</p>
                    <div class="card-sub">
                        <p><ion-icon name="today-outline"></ion-icon>2 Hours ago</p>
                        <p><ion-icon name="hourglass-outline"></ion-icon>15 days-(10 Hours)</p>
                        <p><ion-icon name="people-outline"></ion-icon>30 Applicants</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h5>Work</h5>
                        <a href="#">Nursing</a>
                    </div>
                    <div class="card-salary">
                        <p><b>Organization</b></p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-left yellow-bg">
                    <img src="img/tiktok.png">
                </div>
                <div class="card-center">
                    <h3>STEM Education Day for Kids</h3>
                    <p class="card-detail">Host a day of interactive science, technology, engineering, and math (STEM) activities for children, inspiring their curiosity and learning.</p>
                    <p class="card-loc"><ion-icon name="location-outline"></ion-icon>Kadri Hills,Mangaluru, Karnataka</p>
                    <div class="card-sub">
                        <p><ion-icon name="today-outline"></ion-icon>4 days ago</p>
                        <p><ion-icon name="hourglass-outline"></ion-icon>10pm to 1pm</p>
                        <p><ion-icon name="people-outline"></ion-icon>40 Volunters</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h5>Work </h5>
                        <a href="#">Teaching</a>
                    </div>
                    <div class="card-salary">
                        <p><b>Organization</b></p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-left red-bg">
                    <img src="img/youtube.png">
                </div>
                <div class="card-center">
                    <h3>Homeless Shelter Assistance</h3>
                    <p class="card-detail">Volunteer at a homeless shelter, serving meals and providing medical support to those in need.</p>
                    <p class="card-loc"><ion-icon name="location-outline"></ion-icon>San Bruno, California, United States.</p>
                    <div class="card-sub">
                        <p><ion-icon name="today-outline"></ion-icon>5 days ago</p>
                        <p><ion-icon name="hourglass-outline"></ion-icon>9pm-1pm</p>
                        <p><ion-icon name="people-outline"></ion-icon>20 Volunteers</p>
                    </div>
                </div>
                <div class="card-right">
                    <div class="card-tag">
                        <h5>Work </h5>
                        <a href="#">Nursing</a>
                    </div>
                    <div class="card-salary">
                        <p><b>Organization</b></p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

    <div class="detail">
        <ion-icon class="close-detail" name="close-detail"></ion-icon>
        <div class="detail-header">
            <img src="img/google.png">
            <h3>Environmental Cleanup Day</h3>
            <p>GreenEarth Guardians </p>
        </div>
        <hr class="divider">
        <div class="detail-desc">
            <div class="about">
                <h4>About the Organization</h4>
                <p>GreenEarth Guardians is a passionate and dedicated environmental organization that stands at the forefront of preserving and revitalizing our planet's natural beauty. With a steadfast commitment to environmental conservation, GreenEarth Guardians envisions a world where ecological harmony and human progress coexist in perfect balances</p>
                <a href='#'>Read more</a>
            </div>
            <hr class="divider">
            <div class="qualification">
                <h4>Reviews About the Organization</h4>
                <ul>

                </ul>
            </div>
        </div>
        <hr class="divider">
        <div class="detail-btn">
            <button class="btn-apply">Apply Now</button>
            <button class="btn-save">Bookmark Job </button>
        </div>
    </div>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');

    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('open');
    });
</script>

</html>