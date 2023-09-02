<!-- Remaining HTML code... -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <style>
        .container {
            margin-top: 5rem;
            margin-bottom: 5rem;
            width: 100%;
        }

        @media (min-width: 992px) {
            .container {
                width: 64rem !important;
            }
        }

        /* navbar code */
        html {
            scroll-behavior: smooth !important;
            box-sizing: border-box;
        }

        * {
            margin: 0;
            padding: 0;
        }

        /* @media only screen and (min-width:769px){ */
        body {
            overflow-y: auto;
        }

        .heading {
            color: black;
            text-align: center;
        }

        @keyframes color {
            0% {
                background-color: rgb(153, 131, 234);
            }

            50% {
                background-color: yellow;
            }

            100% {
                background-color: red;
            }
        }

        @keyframes cert {
            100% {
                transform: scale(1.1);
            }
        }

        .blog-form {
            margin-top: 11vmin;
        }

        @media only screen and (max-width:1000px) {
            .blog-form {
                margin-top: 21vw;
            }
        }
    </style>
</head>

<body style="overflow-y: auto;background-color:transparent;">
    <?php session_start();
    include 'header.php';?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'C:/xampp/htdocs/Hackathon 2/db_con.php';
        $name = $_POST['name'];
        $des = $_POST['des'];
        $location = $_POST['location'];
        $time = $_POST['time'];
        $work = $_POST['work'];
        $organ_id = $id;
        
        $query = "INSERT INTO `event`(`name`,`des`,`location`,`time`,`work`,`organization_id`) VALUES('$name','$des','$location','$time','$work','$organ_id');";
        $sql = mysqli_query($conn, $query);
        if (!$sql) {
            echo '<script>alert("There is error. Please try again later!")</script>';
        } else {
            echo '<script>alert("Your event has been added successfully!")</script>';
        }
    }
    ?>
    <div class="container blog-form">
        <h1 class="heading">Event Form</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="blog_title">Name: </label>
                <input type="text" class="form-control" name="name" required id="blog_title" maxlength="100" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="blog_des">Description</label>
                <textarea type="text" class="form-control" required id="blog_des" name="des" maxlength="1200" placeholder="Enter Description (Maximum 800 words)" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="blog_key">Location</label>
                <input type="text" class="form-control" required id="blog_key" maxlength="120" name="location" placeholder="Enter Location">
            </div>
            <div class="form-group">
                <label for="blog_key">Time</label>
                <input type="text" class="form-control" required id="blog_key" maxlength="20" name="time" placeholder="Enter Time">
            </div>
            <div class="form-group">
                <label for="blog_key">Time</label>
                <input type="text" class="form-control" required id="blog_key" maxlength="30" name="work" placeholder="Enter Work">
            </div>
            <div style="text-align: center;">
                <input type="submit" class="btn btn-info" value="Submit" name="submit">
            </div>
        </form>
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