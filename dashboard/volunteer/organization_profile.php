<?php
$organ_id = $_GET['organid'];
$volun_id = $_GET['volunid'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        include "C:/xampp/htdocs/Hackathon 2/db_con.php";
        $des = $_POST['my_review'];
        $sql = "INSERT INTO `organ_review`(`des`,`organ_id`,`volun_id`) VALUES ('$des','$organ_id','$volun_id')";
        $query = mysqli_query($conn, $sql);
        if ($query) echo '<script>alert("Your review has been successfully submitted!")</script>';
        else echo '<script>alert("There is some error kindly try again later!")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body{
            background: #E7E7FF;
        }
        textarea {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            width: 100%;
        }
    </style>
</head>

<body>
<?php session_start();
include 'header.php';
$sql = "SELECT * FROM `organization`";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    $img = $row['img'];
    $organ_username = $row['name'];
    $location = $row['address'];
    $about = $row['about'];
}
?>
    <section class="h-100 gradient-custom-2">
        <div class="container mt-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row" style="background-color: #4C51D3; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="../organization/profile_pictures/<?=$img?>" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                                <!-- <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                                    Edit profile
                                </button> -->
                            </div>
                            <div class="ms-3" style="margin-top: 110px;">
                                <h5><?php echo $organ_username?></h5>
                                <p><?php echo $location?></p>
                            </div>
                        </div>
                        <div class="p-4 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1">
                                <div>
                                    <p class="mb-1 h5 px-4"><?php echo $organ_id?></p>
                                    <p class="small text-muted mb-0">User Id</p>
                                </div>
                                <!-- <div class="px-3">
                                    <p class="mb-1 h5">22-09-1999</p>
                                    <p class="small text-muted mb-0">DOB</p>
                                </div> -->
                                <div>
                                    <p class="mb-1 h5">2022</p>
                                    <p class="small text-muted mb-0">Since</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5">
                                <p class="lead fw-normal mb-1">About</p>
                                <div class="p-4" style="background-color: #f8f9fa;">
                                    <!-- <p class="font-italic mb-1">Web Developer</p>
                                    <p class="font-italic mb-1">Lives in New York</p>
                                    <p class="font-italic mb-0">Photographer</p> -->
                                    <p style="text-align: justify;"><?php echo $about?></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <p class="lead fw-normal mb-0">Reviews</p>
                                <!-- <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p> -->
                            </div>
                            <!-- Review section -->

                            <!-- Review 1 -->
                            <div>
                                <form action="" method="post">
                                    <textarea name="my_review" required style="border:1px solid rgba(0, 0, 0, 0.175); padding:10px;" id="my_review" maxlength="200" placeholder="Post a review" cols="30" rows="5"></textarea>
                                    <input type="submit" name="submit" style="border: none; background:#4C51D3; color:white; padding:5px; border-radius:5px;" value="Post Review">
                                </form>
                            </div>
                            <?php
                            $sql = "SELECT * FROM `organ_review` WHERE `organ_id`='$organ_id'";
                            $result = mysqli_query($conn, $sql);
                            $count = mysqli_num_rows($result);
                            if ($count == 0) echo '<h3>No Reviews to show</h3>';
                            else {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $volun_review_id = $row['volun_id'];
                                    $volun_sql = "SELECT * FROM `volunteer` WHERE `id`='$volun_review_id'";
                                    $volun_result = mysqli_query($conn, $volun_sql);
                                    while ($volun_row = mysqli_fetch_assoc($volun_result)) {
                                        echo '<section class="py-2 text-center text-lg-start shadow-1-strong rounded" ; ">
                                    <div class=" row d-flex justify-content-center">
                                    <div class="col-md-10">
                                        <div class="card">
                                            <div class="card-body m-3">
                                                <div class="row">
                                                    <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                                                        <img src="profile_pictures/' ?><?= $volun_row['img'] ?><?php echo '" class="rounded-circle img-fluid shadow-1" alt="woman avatar" width="200" height="200" />
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <p class="text-muted fw-light mb-4">
                                                            ' . $row['des'] . '
                                                        </p>
                                                        <p class="fw-bold lead mb-2"><strong>' . $volun_row['name'] . '</strong></p>
                                                        <!-- <p class="fw-bold text-muted mb-0">Product manager</p> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
        </section>';
                                    }
                                }
                            }
        ?>
                            <!-- <div class="row g-2">
                                <div class="col mb-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                                <div class="col mb-2">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                                <div class="col">
                                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(114).webp" alt="image 1" class="w-100 rounded-3">
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebar = document.querySelector('.sidebar');

    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('open');
    });
</script>
</body>

</html>