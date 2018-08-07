<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Shoot Technologies">

    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/profile.css">

</head>

<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light">

<div id="logolink">
    <a href="index.html">
        <img id="logo" src="/resources/img/shootlogo.png">
    </a>
</div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<!--button for mobile view-->

<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <!--list for navbar-->

        <li class="nav-item">
            <a class="nav-link nav-a" href="index.html">Welcome
                <span class="sr-only">(current)</span>
            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link nav-a" href="about.html">About Us</a>
        </li>

        <li class="nav-item">
            <a href="signup.html">
                <button class="btn">Sign Up</button>
            </a>
        </li>
    </ul>
</div>

</nav>


<!--Photographer profile-->
    <div class="box">
        <div id="color_top"></div>
        
        <div id="box_container">
            <div id="info">
                <div id="profile_picture">   <!--photographer image-->
                    <img class="border_img" src="/resources/img/pic.jpg">
                </div>

                <div id="profile_info"> <!--photographer info-->
                    <h1>Lisa Martinez</h1>
                    <h5 class="info_text">Price Range: $100 - $500</h5>
                    <h5 class="info_text">Location: Houston</h5>
                    <button id="book"><a class="button_hover" href="/index.php">Book this photographer</a></button>
                </div>
            </div>

            <div id="portfolio_container"> <!--porfolio-->
                <h2>Portfolio</h2>

                <div id="portfolio">   <!--portfolio images-->
                    <div><img class="border_img" src="/resources/img/pic.jpg"></div>
                    <div><img class="border_img" src="/resources/img/pic.jpg"></div>
                    <div><img class="border_img" src="/resources/img/pic.jpg"></div>
                    <div><img class="border_img" src="/resources/img/pic.jpg"></div>
                    <div><img class="border_img" src="/resources/img/pic.jpg"></div>
                    <div><img class="border_img" src="/resources/img/pic.jpg"></div>
                    <div><img class="border_img" src="/resources/img/pic.jpg"></div>
                    <div><img class="border_img" src="/resources/img/pic.jpg"></div>
                    <div><img class="border_img" src="/resources/img/pic.jpg"></div>
                 
                </div> 
            </div>
        </div>

        <div id="back_container">  <!--back buttton-->
            <button id="back"><a class="button_hover" href="#">Back</a></button>
        </div>
        
    </div>

</body>