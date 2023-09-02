<?php
// include './db_con.php';
if (isset($_SESSION['volun_loggedin'])) {
    if (!$_SESSION['volun_loggedin']) {
        header('location: ../../volunteer/login.php');
        exit;
    } else {
        $id = "";
        $volun_username = $_SESSION['volun_username'];
        include 'C:/xampp/htdocs/Hackathon 2/db_con.php';
        $sql = "SELECT * FROM `volunteer` WHERE `name`='$volun_username'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            // `name`,`email`,`password`,`age`,`location`,`about`,`education`,`img`)
            $name = $row['name'];
            $age = $row['age'];
            $location = $row['location'];
            $about = $row['about'];
            $education = $row['education'];
            // $location = $row['address'];
            // $about = $row['about'];
            $img = $row['img'];
        }
    }
} else {
    header('location: ../../volunteer/login.php');
    exit;
}
?>
<style>
    body {
        color: white;
    }

    .sidebar {
        width: 20%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: space-between;
        padding: 2rem;
        background-color: #4C51D3;
        color: var(--whiteColor);
        position: fixed;
        left: 0;
        top: 0;
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

    /* Add this to your existing CSS */
    #sidebar-toggle {
        position: fixed;
        top: 10px;
        left: 10px;
        z-index: 1000;
        display: none;
    }
    /* Add this at the end of your existing CSS */

    @media screen and (max-width: 1150px) {
        #sidebar-toggle{
            display: initial;
        }

        .logo{
            margin-top: 10px;
        }
        .sidebar {
            z-index: 5;
            width: 0;
            display: none;
        }

        .sidebar.open {
            width: 50%;
            display: flex;
        }
    }

    @media screen and (max-width:1150px) {
        .sidebar {
            display: none;
        }
    }
</style>
<!-- <button id="sidebar-toggle" class="btn btn-dark">Toggle Sidebar</button> -->
<img id="sidebar-toggle" src="https://i0.wp.com/css-tricks.com/wp-content/uploads/2012/10/threelines.png" height="30px" alt="Navbar Icon">
<div class="sidebar">
    <h1 class="logo">HELPLINK</h1>
    <div class="menu">
        <a href="index.php"><ion-icon name="newspaper-outline"></ion-icon>Home</a>
        <a href="bookmark.php"><ion-icon name="bookmarks-outline"></ion-icon>Bookmarks</a>
        <a href="https://vermillion-selkie-5915f8.netlify.app/"><ion-icon name="mail-unread-outline"></ion-icon>Message</a>
        <a href="logout.php"><ion-icon name="settings-outline" style="color: red;"></ion-icon>Logout</a>
    </div>
    <div class="profile" style="background-color: #fff;">
        <img class="profile-img" src="profile_pictures/<?=$img?>">
        <div class="profile-name">
            <a style="text-decoration: none; margin:0;" href="./volunteer_profile.php">
                <h4 style="color: #000;font-size:15px;margin:0;"><?php echo $volun_username?></h4>
            </a>
            <p style="color: #000;margin:0;"><strong>User-Id: <?php echo $id?></strong></p>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>