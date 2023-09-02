<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpLink-Features</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #E7E7FF;
        }

        .heading {
            margin: 7rem 0 5rem 0;
        }

        .heading h2 {
            font-size: 3rem;
        }

        .user-image img {
            height: 50px;
            width: 50px;
        }

        .card:hover {
            transform: scale(1.05);
            transition-duration: 0.4s;
        }

        /* Heading Code */
        h2 {
            color: #000;
            font-size: 32px;
            font-weight: 300;
            text-align: center;
            position: relative;
            margin: 5rem 0 4rem 0;
        }

        h2::after {
            content: "";
            width: 100px;
            position: absolute;
            margin: 0 auto;
            height: 4px;
            border-radius: 1px;
            background: #1abc9c;
            left: 0;
            right: 0;
            bottom: -20px;
        }
        .heading h2 {
            font-size: 3rem;
        }

        .heading span {
            font-weight: bold;
            font-size: 5rem;
        }

        @media (max-width:992px) and (min-width:768px) {
            .user-image img {
                /* height: 11rem; */
            }
        }

        @media (max-width:768px) {
            .heading h2 {
                font-size: 2rem;
            }

            .heading span {
                font-size: 4rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="container mt-5 mb-5 review-section">
        <div class="heading">
            <h2>Our <b>Features</b></h2>
        </div>

        <div class="row g-2">
            <div class="col-md-4">
                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="Icons/sign-up.png">

                    </div>

                    <div class="user-content">

                        <h5 class="my-4">Easy SignUp</h5>

                        <p>Join us whether you're an enthusiastic volunteer or a dedicated organization. </p>

                    </div>

                </div>
            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="Icons/discover-event.png">

                    </div>

                    <div class="user-content">

                        <h5 class="my-4">Discover Events</h5>
                        
                        <p>Explore events aligned with your interests and passions.</p>

                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="Icons/registration.png">

                    </div>

                    <div class="user-content">

                        <h5 class="my-4">Quick Registration</h5>

                        <p>Sign up for events you care about with just one click.</p>

                    </div>

                </div>

            </div>


        </div>
        <div class="row g-2" style="margin-top: 1px;">
            <div class="col-md-4">
                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="Icons/direct-communication.png">

                    </div>

                    <div class="user-content">

                        <h5 class="my-4">Direct Communication</h5>

                        <p>Connect directly with event organizers for details.</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="Icons/reviews.png">

                    </div>

                    <div class="user-content">

                        <h5 class="my-4">Leave Reviews</h5>

                        <p>Share experiences and read feedback from others.</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="Icons/connection.png">

                    </div>

                    <div class="user-content">

                        <h5 class="my-4">Build Connections</h5>

                        <p>Connect with like-minded peers and organizations.</p>

                    </div>

                </div>

            </div>

        </div>
        <!-- Third Row -->
        <div class="row g-2" style="margin-top: 1px;">
            <div class="col-md-4">
                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="Icons/dashboard.png">

                    </div>

                    <div class="user-content">

                        <h5 class="my-4">Intuitive Dashboard</h5>

                        <p>Effortlessly manage profiles and events with streamlined ease.</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="Icons/safe-platform.png">

                    </div>

                    <div class="user-content">

                        <h5 class="my-4">Safe Platform</h5>

                        <p>Share experiences and read feedback from others.</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="Icons/community.png">

                    </div>

                    <div class="user-content">

                        <h5 class="my-4">Unified Community</h5>

                        <p>Join a community committed to positive change.</p>

                    </div>

                </div>

            </div>


        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>