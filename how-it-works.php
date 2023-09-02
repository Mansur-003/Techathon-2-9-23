<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpLink-How It Works</title>
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

        .user-content {
            text-align: left;
        }
        .user-image img{
            height: 15rem;
        }
        .card:hover{
            transform: scale(1.05);
            transition-duration: 0.4s;
        }

        /* Count Code */
        .circle-container {
            width: 40px;
            height: 40px;
            background-color: #4C51D3;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .circle-text {
            font-size: 24px;
            color: white;
        }
        .heading h2{
            font-size: 3rem;
        }
        .heading span{
            font-weight: bold;
            font-size: 5rem;
        }
        
        @media (max-width:992px) and (min-width:768px){
            .user-image img{
                height: 11rem;
            }
        }
        @media (max-width:768px){
            .heading h2{
                font-size: 2rem;
            }
            .heading span{
                font-size: 4rem;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>

    <div class="container mt-5 mb-5 review-section">
        <div class="heading">
            <h2><span>Unveiling </span><br>the Inner Workings</h2>
        </div>

        <div class="row g-2">
            <div class="col-md-4">
                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="ImageR/signup-bg.png">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-2">SignUp</h5>
                        <div class="circle-container">
                            <span class="circle-text">1</span>
                        </div>
                        <p>Join our community by creating a free account as a volunteer or organization.</p>

                    </div>

                </div>
            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="ImageR/discover-bg.png">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-2">Discover</h5>
                        <div class="circle-container">
                            <span class="circle-text">2</span>
                        </div>
                        <p>Browse through a variety of causes and events that match your interests and passions.</p>

                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="ImageR/get_involved-bg.png">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-2">Get Involved</h5>
                        <div class="circle-container">
                            <span class="circle-text">3</span>
                        </div>
                        <p>Sign up for events that resonate with you, and start making a positive impact.</p>

                    </div>

                </div>

            </div>


        </div>
        <div class="row g-2" style="margin-top: 1px;">
            <div class="col-md-4">
                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="ImageR/connect-bg.png">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-2">Connect</h5>
                        <div class="circle-container">
                            <span class="circle-text">4</span>
                        </div>
                        <p>Communicate with organizations and fellow volunteers, fostering meaningful connections.</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="ImageR/review-bg.png">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-2">Review</h5>
                        <div class="circle-container">
                            <span class="circle-text">5</span>
                        </div>
                        <p>Share your experiences by leaving reviews, helping others choose impactful opportunities.</p>

                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <div class="card p-3 text-center px-4">

                    <div class="user-image">

                        <img src="ImageR/change_lives-bg.png">

                    </div>

                    <div class="user-content">

                        <h5 class="mb-2">Change Lives</h5>
                        <div class="circle-container">
                            <span class="circle-text">6</span>
                        </div>
                        <p>By coming together, we can create a better world, one event at a time.</p>

                    </div>

                </div>

            </div>


        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>