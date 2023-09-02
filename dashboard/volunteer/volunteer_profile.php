<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background: #E7E7FF;
        }
    </style>
</head>

<body>
    <?php session_start();
     include 'header.php';
    ?>
    <section class="h-100 gradient-custom-2">
        <div class="container mt-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-lg-9 col-xl-7">
                    <div class="card">
                        <div class="rounded-top text-white d-flex flex-row" style="background-color: #4C51D3; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="profile_pictures/<?=$img?>" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                                <!-- <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                                    Edit profile
                                </button> -->
                            </div>
                            <div class="ms-3" style="margin-top: 110px;">
                                <h5><?php echo $name?>, <?php echo $age?></h5>
                                <p><?php echo $location?></p>
                            </div>
                        </div>
                        <div class="p-4 text-black" style="background-color: #f8f9fa;">
                            <div class="d-flex justify-content-end text-center py-1">
                                <div>
                                    <p class="mb-1 h5 px-4"><?php echo $id?></p>
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
                            <section class="py-2 text-center text-lg-start shadow-1-strong rounded" ; ">
                                <div class=" row d-flex justify-content-center">
                                <div class="col-md-10">
                                    <div class="card">
                                        <div class="card-body m-3">
                                            <div class="row">
                                                <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                                                    <img src="Icons/direct-communication.png" class="rounded-circle img-fluid shadow-1" alt="woman avatar" width="200" height="200" />
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text-muted fw-light mb-4">
                                                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                                                        molestiae numquam quas, voluptates omnis nulla ea odio quia similique
                                                        corrupti magnam.
                                                    </p>
                                                    <p class="fw-bold lead mb-2"><strong>Anna Smith</strong></p>
                                                    <!-- <p class="fw-bold text-muted mb-0">Product manager</p> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
    </section>
    <!-- Review 2 -->
    <section class="py-2 text-center text-lg-start shadow-1-strong rounded" style="
    background-image: url(https://mdbcdn.b-cdn.net/img/Photos/Others/background2.webp);
  ">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body m-3">
                        <div class="row">
                            <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                                <img src="Icons/dashboard.png" class="rounded-circle img-fluid shadow-1" alt="woman avatar" width="200" height="200" />
                            </div>
                            <div class="col-lg-8">
                                <p class="text-muted fw-light mb-4">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
                                    molestiae numquam quas, voluptates omnis nulla ea odio quia similique
                                    corrupti magnam.
                                </p>
                                <p class="fw-bold lead mb-2"><strong>Anna Smith</strong></p>
                                <!-- <p class="fw-bold text-muted mb-0">Product manager</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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