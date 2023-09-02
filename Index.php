<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HelpLink- Change Lives</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
  <link rel="stylesheet" href="style.css" />
  <style>
    .log-sig-btn button {
      border: 0;
      padding: 8px 22px;
      font-size: 1rem;
      margin: 1rem;
    }

    .log-sig-btn button:hover {
      background-color: #2b9bff;
      color: white;
    }

    .home .content p {
      font-size: 18px;
      margin-bottom: 65px;
      margin-right: 6rem;
    }

    @media (max-width: 560px) {
      .home .content h1 {
        font-size: 3em;
        line-height: 60px;
      }

      .home .content p {
        font-size: 14px;
        margin-bottom: 65px;
        margin-right: 0;
      }

      .home .content h1 span {
        font-size: 1.2em;
      }

      .home .content {
        width: 100%;
      }
    }

    @media (max-width: 400px) {
      .home .media-icons {
        position: initial;
        flex-direction: row;
        justify-content: space-evenly;
      }
    }

    .brand,
    .navigation-items a {
      color: white;
    }
  </style>
</head>

<body bgcolor="black">
  <?php include 'header.php' ?>

  <section class="home">
    <video class="video-slide active" src="video/1.mov" autoplay muted loop></video>
    <video class="video-slide" src="video/2.mp4" autoplay muted loop></video>
    <video class="video-slide" src="video/3.mp4" autoplay muted loop></video>
    <div class="content active">
      <h1>Welcome to <br /><span>HelpLink</span></h1>
      <p>Find Opportunities to make a difference</p>
      <div class="log-sig-btn">
        <button onclick="redirectToVolunteerSignUp()">
          SignUp as a Volunteer
        </button>
        <button onclick="redirectToOrganizationSignUp()">
          Join as an Organization
        </button>
      </div>
    </div>
    <div class="content">
      <h1>Welcome to<br /><span>HelpLink</span></h1>
      <p>Find Opportunities to make a difference</p>
      <div class="log-sig-btn">
        <button onclick="redirectToVolunteerSignUp()">
          SignUp as a Volunteer
        </button>
        <button onclick="redirectToOrganizationSignUp()">
          Join as an Organization
        </button>
      </div>
    </div>
    <div class="content">
      <h1>Welcome to <br /><span>HelpLink</span></h1>
      <p>Find Opportunities to make a difference</p>
      <div class="log-sig-btn">
        <button onclick="redirectToVolunteerSignUp()">
          SignUp as a Volunteer
        </button>
        <button onclick="redirectToOrganizationSignUp()">
          Join as an Organization
        </button>
      </div>
    </div>

    <div class="media-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
    </div>

    <div class="slider-navigation">
      <div class="nav-btn active"></div>
      <div class="nav-btn"></div>
      <div class="nav-btn"></div>
    </div>
  </section>
  <script src="main.js" defer data-deferred="1"></script>
  <script>
    function redirectToVolunteerSignUp() {
      window.location.href = "volunteer/signup.php";
    }

    function redirectToOrganizationSignUp() {
      window.location.href = "organization/signup.php";
    }
  </script>
</body>

</html>