<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelpLink-Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        body {
            background-color: #E7E7FF;
        }

        /* Heading Code */
        h2 {
            color: #000;
            font-size: 35px;
            font-weight: bold;
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

        .heading h3 {
            margin-bottom: 1rem;
        }

        /* Heading Code Ends */

        .section-padding {
            margin: 7rem 0;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-theme {
            color: #fff;
            background-color: #4C51D3;
        }

        .btn-theme:hover {
            background-color: #6268ff;
            color: #fff;
        }

        .btn-pill {
            border-radius: 50px;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            /* color: #212529; */
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            /* background-color: transparent; */
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        @media (max-width: 1040px) {
            section {
                padding: 20px !important;
            }
        }

        @media (max-width:1041px) {
            .section-padding {
                margin: 0;
            }
        }

        @media (max-width:542px) {
            .form-group {
                margin-bottom: 1rem;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php' ?>
    <section class="section-padding" style="display: flex;">
        <div class="container abt-sec">
            <div class="heading text-center">
                <h2 class="animate" data-animate="fadeInDown" data-offset="50" data-duration="1.0s" data-delay="0.45s">Join Us</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 mb-4">
                        <div class="heading">
                            <h3>Contact Us</h3>
                        </div>
                        <div>
                        </div>
                        <div class="">
                            <form action="" method="post">
                                <div class="form-row" style="display: flex; flex-wrap:wrap;">
                                    <div class="col-sm-6 form-group">
                                        <input type="text" name="name" placeholder="Full Name" class="form-control input-pill" required>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <input type="number" min="0" name="phone" placeholder="Phone Number" class="form-control input-pill" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email ID" class="form-control input-pill">
                                </div>
                                <div class="form-group">
                                    <textarea name="message" rows="3" class="form-control input-pill" placeholder="Message" style="padding-left:20px;"></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6LcSOKIUAAAAAHhG1Qeeidr_Iuv3lAIKFV0YhPqR" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                                <input type="submit" name="submit" value="Send Message" class="btn btn-pill btn-theme">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="heading">
                            <h3>Locate Us</h3>
                        </div>
                        <div class="shadow-sm" style="border-radius:20px;overflow:hidden;border:1px solid rgba(0,0,0,0.2)">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.9880012580898!2d79.07079761440946!3d21.15287578890664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4c0f1aaaae98d%3A0x23e7bf54a78935f2!2sHelplink+Charitable+Trust!5e0!3m2!1sen!2sus!4v1552116770692" width="100%" height="250px" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="main.js"></script>
</body>

</html>