<?php
require 'system/helper.php';
checkLogin();
if (isset($_POST['email']) && isset($_POST['password'])) {
    $sql = "SELECT * FROM `users` WHERE `email` =  '{$_POST['email']}'";
    $data = runQuery($sql);
    if ($data->num_rows > 0) {
        $row = $data->fetch_assoc();
        if (password_verify($_POST['password'], $row['password'])) {
            $_SESSION['user']['id'] = $row['id'];
            $_SESSION['user']['name'] = $row['name'];
            $_SESSION['user']['email'] = $row['email'];
            $_SESSION['user']['sex'] = $row['sex'];
            $_SESSION['user']['active_level'] = $row['active_level'];
            $_SESSION['user']['goal'] = $row['goal'];
            $_SESSION['user']['bmr'] = $row['bmr'];
            $_SESSION['user']['weigh'] = $row['weigh'];
            $_SESSION['user']['height'] = $row['height'];
            $_SESSION['user']['age'] = $row['age'];
            $_SESSION['user']['loggedin'] = true;
            header('Location: home.php');
            die();
        } else {
            header('Location: signIn.php.php?error=The password is incorrect');
        }
    } else {
        header('Location: signIn.php?error=The user email not found');
    }
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head data-capo="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>AtheleteZone | Sign In</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <style>@font-face {
            font-weight: 400;
            font-style: normal;
            font-family: Poppins;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-B4i1UA.ttf)
        }</style>
    <style>@font-face {
            font-weight: 500;
            font-style: normal;
            font-family: Poppins;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYi1UA.ttf)
        }</style>
    <style>@font-face {
            font-weight: 600;
            font-style: normal;
            font-family: Poppins;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-2Y-1UA.ttf)
        }</style>
    <style>@font-face {
            font-weight: 700;
            font-style: normal;
            font-family: Poppins;
            font-display: swap;
            src: url(https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-4I-1UA.ttf)
        }</style>
    <style>body {
            font-family: Poppins, '_font_fallback_102763646222', sans-serif;
        }

        @font-face {
            font-family: '_font_fallback_102763646222';
            size-adjust: 105.79%;
            src: local('Arial');
            ascent-override: 88.38%;
            descent-override: 23.63%;
            line-gap-override: 0.00%;
        }</style>
    <style>section:not(.breadcrumb) form .form-group input:focus + label, section:not(.breadcrumb) form .form-group label.effect, section:not(.breadcrumb) form .form-group textarea:focus + label {
            background-color: #fff;
            color: #4795c3;
            top: -10px;
            transform: scale(.9)
        }

        section:not(.breadcrumb) {
            margin-top: 89px;
            min-height: 60vh;
            padding: 8vh 0
        }

        section:not(.breadcrumb) form {
            background-color: #fff;
            box-shadow: 0 8px 32px #0000001f;
            height: 100%;
            max-width: 100%;
            width: 500px
        }

        section:not(.breadcrumb) form .taps {
            display: none
        }

        section:not(.breadcrumb) form h1, section:not(.breadcrumb) form h2 {
            color: #020c19
        }

        section:not(.breadcrumb) form .des-form {
            width: 300px
        }

        section:not(.breadcrumb) form .form-group {
            margin-bottom: 3vh
        }

        section:not(.breadcrumb) form .form-group label {
            color: #020c1980;
            pointer-events: none;
            position: absolute;
            transform: translateY(-50%)
        }

        section:not(.breadcrumb) form .form-group input::-moz-placeholder, section:not(.breadcrumb) form .form-group textarea::-moz-placeholder {
            -moz-transition: .25s ease-in-out;
            transition: .25s ease-in-out
        }

        section:not(.breadcrumb) form .form-group input, section:not(.breadcrumb) form .form-group input::placeholder, section:not(.breadcrumb) form .form-group label, section:not(.breadcrumb) form .form-group textarea::placeholder {
            transition: .25s ease-in-out
        }

        section:not(.breadcrumb) form .form-group input::-moz-placeholder, section:not(.breadcrumb) form .form-group textarea::-moz-placeholder {
            text-transform: capitalize
        }

        section:not(.breadcrumb) form .form-group input::placeholder, section:not(.breadcrumb) form .form-group label, section:not(.breadcrumb) form .form-group textarea::placeholder {
            text-transform: capitalize
        }

        section:not(.breadcrumb) form .form-group .form-select, section:not(.breadcrumb) form .form-group input, section:not(.breadcrumb) form .form-group textarea {
            border: 1px solid rgba(2, 12, 25, .5);
            height: 55px;
            outline: 0;
            width: 100%
        }

        section:not(.breadcrumb) form .form-group .form-select::-moz-placeholder, section:not(.breadcrumb) form .form-group input::-moz-placeholder, section:not(.breadcrumb) form .form-group textarea::-moz-placeholder {
            color: #020c1980;
            opacity: 0
        }

        section:not(.breadcrumb) form .form-group .form-select::placeholder, section:not(.breadcrumb) form .form-group input::placeholder, section:not(.breadcrumb) form .form-group textarea::placeholder {
            color: #020c1980;
            opacity: 0
        }

        section:not(.breadcrumb) form .form-group .form-select:focus, section:not(.breadcrumb) form .form-group input:focus, section:not(.breadcrumb) form .form-group textarea:focus {
            border-color: #4795c3
        }

        section:not(.breadcrumb) form .form-group .form-select:focus::-moz-placeholder, section:not(.breadcrumb) form .form-group input:focus::-moz-placeholder, section:not(.breadcrumb) form .form-group textarea:focus::-moz-placeholder {
            opacity: 1
        }

        section:not(.breadcrumb) form .form-group .form-select:focus::placeholder, section:not(.breadcrumb) form .form-group input:focus::placeholder, section:not(.breadcrumb) form .form-group textarea:focus::placeholder {
            opacity: 1
        }

        section:not(.breadcrumb) form .form-group .form-select.valid, section:not(.breadcrumb) form .form-group input.valid, section:not(.breadcrumb) form .form-group textarea.valid {
            border-color: #4795c3
        }

        section:not(.breadcrumb) form .form-group .form-select.error, section:not(.breadcrumb) form .form-group input.error, section:not(.breadcrumb) form .form-group textarea.error {
            border-color: #db2a2a
        }

        section:not(.breadcrumb) form .form-group .errorMessage, section:not(.breadcrumb) form .form-group input.error + label {
            color: #db2a2a
        }

        section:not(.breadcrumb) form .formLoginId, section:not(.breadcrumb) form .nextBtn, section:not(.breadcrumb) form .prevBtn {
            max-width: 100%;
            width: 200px
        }

        section:not(.breadcrumb) .notMember {
            color: #020c1980
        }

        section:not(.breadcrumb) .notMember a {
            color: #4795c3
        }

        .btn-skew[data-astro-cid-6ygtcg62] {
            background-color: #00275b
        }

        .btn-skew[data-astro-cid-6ygtcg62]:before {
            background-color: #4795c3
        }
    </style>
    <link rel="stylesheet" href="./assets/css/addWorkout-Vev6MoTs.css">
    <style>header {
            background-color: #fff;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: 1024
        }

        header.scroll {
            animation: fixed .7s ease-in-out forwards;
            box-shadow: 0 2px 1.25rem #020c194d;
            position: fixed
        }

        header.scroll nav .logo {
            height: 50px
        }

        header nav .logo {
            height: 65px
        }

        header nav .navMenu li a {
            color: #00275b
        }

        header nav .navMenu li a:before {
            background-color: #4795c3;
            bottom: -3px;
            content: "";
            height: 2px;
            left: 0;
            position: absolute;
            transition: .25s ease-in-out;
            width: 0
        }

        header nav .navMenu li a.active, header nav .navMenu li a:hover {
            color: #4795c3
        }

        header nav .navMenu li a.active:before, header nav .navMenu li a:hover:before {
            width: 100%
        }

        header .mobileMenu .NavMobile li a, header nav .navMenu li a {
            transition: .25s ease-in-out
        }

        header .mobileMenu {
            background-color: #00275b;
            height: 0;
            overflow: hidden;
            transition: .3s;
            width: 100%
        }

        header .mobileMenu.open {
            display: block
        }

        header .mobileMenu:not(.open) {
            display: none
        }

        header .mobileMenu .NavMobile {
            flex-direction: column
        }

        header .mobileMenu .NavMobile li:first-child {
            padding-top: 24px
        }

        header .mobileMenu .NavMobile li a {
            color: #fff
        }

        header .mobileMenu .NavMobile li a.active, header .mobileMenu .NavMobile li a:hover {
            color: #74bee8;
            transform: translate(15px)
        }

        .icon-nav-base span {
            background-color: #00275b
        }

        @keyframes fixed {
            0% {
                opacity: 0;
                top: -100px
            }
            to {
                opacity: 1;
                top: 0
            }
        }
    </style>
    <link as="font" crossorigin="" rel="preload"
          href="https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-B4i1UA.ttf" type="font/ttf">
    <link as="font" crossorigin="" rel="preload"
          href="https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-NYi1UA.ttf" type="font/ttf">
    <link as="font" crossorigin="" rel="preload"
          href="https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-2Y-1UA.ttf" type="font/ttf">
    <link as="font" crossorigin="" rel="preload"
          href="https://fonts.gstatic.com/s/rubik/v28/iJWZBXyIfDnIV5PNhY1KTN7Z-Yh-4I-1UA.ttf" type="font/ttf">
    <script type="module" src="./assets/js/hoisted-8a_iqbfc.js"></script>
    <meta name="description" content="Astro description">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="generator" content="Astro v4.3.2">
</head>
<body>
<main>
    <header>
        <div class="container">
            <nav class="d-flex align-items-center py-6 justify-space-between"><a href="index.php" class="logo"> <img
                            src="./assets/images/logo-nMkJhfTW_ZQniic.webp" alt="logo for AtheleteZone"
                            class="img-cover"
                            width="705" height="227" loading="lazy" decoding="async"> </a>
                <button type="button" aria-label="menu" aria-expanded="false" aria-controls="mobileResponsive"
                        class="btn icon-nav-base" data-astro-cid-6ygtcg62><span></span><span></span><span></span>
                </button>
                <ul class="navMenu beforeLogin d-flex align-items-center lg-max-d-none">
                    <li class="nav-link pl-10 "><a href="index.php" class="fs-16 capitalize fw-600 relative">
                            AtheleteZone </a>
                    </li>
                    <li class="nav-link pl-10 "><a href="About.html" class="fs-16 capitalize fw-600 relative"> About
                            us </a></li>
                    <li class="nav-link pl-10 "><a href="foodRecommendation.php" class="fs-16 capitalize fw-600 relative"> blog </a>
                    </li>
                    <li class="nav-link pl-10 "><a href="workout.html" class="fs-16 capitalize fw-600 relative">
                            workout </a></li>
                    <li class="nav-link pl-10 "><a href="contact.html" class="fs-16 capitalize fw-600 relative">
                            contact us </a></li>
                </ul>
                <div class="mobileMenu absolute  left-0 " id="mobileResponsive">
                    <ul class="NavMobile beforeLogin d-flex  ">
                        <li class="nav-link  py-6 pl-10"><a href="index.php" class="fs-18 capitalize fw-600 relative ">
                                AtheleteZone </a></li>
                        <li class="nav-link  py-6 pl-10"><a href="About.html"
                                                            class="fs-18 capitalize fw-600 relative "> About us </a>
                        </li>
                        <li class="nav-link  py-6 pl-10"><a href="foodRecommendation.php" class="fs-18 capitalize fw-600 relative ">
                                blog </a></li>
                        <li class="nav-link  py-6 pl-10"><a href="workout.html"
                                                            class="fs-18 capitalize fw-600 relative "> workout </a></li>
                        <li class="nav-link  py-6 pl-10"><a href="contact.html"
                                                            class="fs-18 capitalize fw-600 relative "> contact us </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section class="sign-in">
        <div class="container">
            <form class="mx-auto round-12 p-12" id="loginForm" action="signIn.php" method="post"><h1
                        class="text-center pb-12 fs-r-30">
                    Member Login</h1>
                <?php
                if (isset($_GET['error'])) {
                    ?>
                    <div class="alert alert-danger" role="alert" style="text-align: right">
                        <?php echo $_GET['error']; ?>
                        <button type="button" style="float: left" class="close" data-bs-dismiss="alert"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                }
                if (isset($_GET['success'])) {
                    ?>
                    <div class="alert alert-success" role="alert" style="text-align: right">
                        <?php echo $_GET['success']; ?>
                        <button type="button" style="float: left" class="close" data-bs-dismiss="alert"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                }
                ?>
                <div class="form-group relative ">
                    <div class="relative"><input class="px-5 round-6" type="email" id="EmailAddressLogin"
                                                 placeholder="Email Address" name="email" required> <label
                                for="EmailAddressLogin" class="top-50 left-5"> Email Address </label></div>
                    <p class="errorMessage pl-2 pt-4 fs-14 undefined "></p></div> <!--  --> <!--  -->
                <div class="form-group relative ">
                    <div class="relative"><input class="px-5 round-6" type="password" id="passwordLogin"
                                                 placeholder="password" name="password" required> <label
                                for="passwordLogin" class="top-50 left-5"> password </label></div>
                    <p class="errorMessage pl-2 pt-4 fs-14 undefined "></p></div> <!--  -->
                <button type="submit" aria-label="sign in"
                        class="btn btn-skew formLoginId round-6 d-flex align-items-center justify-center p-8 mx-auto"
                        data-astro-cid-6ygtcg62>
                    Log in
                </button>
            </form>
            <p class="d-flex align-items-center justify-center pt-10 notMember">
                Not a member yet?
                <a href="signUp.php" class="pl-2"> Sign up now!</a></p></div>
    </section>
    <footer>
        <div class="container d-flex align-items-start justify-space-between">
            <div class="footer-ul about-us"><p class="title fs-24 fw-700 capitalize">about us</p>
                <p class="dec line-relaxed">
                    People who track food achieve more than
                    double the average weight loss and
                    members lose weight 3x faster when
                    doing it with friends. AtheleteZone combines these to create
                    the most powerful solution for healthy, sustainable weight loss
                </p></div> <!--  -->
            <div class="footer-ul contact-us "><p class="title fs-24 fw-700 capitalize">contact us</p>
                <p class="dec line-relaxed">
                    The perfect web application for keeping track of your food,
                    exercise and weight while on-the-go
                </p></div> <!--  -->
            <div class="footer-ul news"><p class="title fs-24 fw-700 capitalize">
                    newsletter
                </p>
                <p class="dec line-relaxed">
                    you can trust us we only send offers , not a single spam
                </p>
                <form action="/">
                    <div class="from-group relative"><input type="email" placeholder="Email address" class="round-12">
                        <button type="submit" aria-label="send email"
                                class="btn btn-skew sendEmails round-12 px-9  top-0 right--2" data-astro-cid-6ygtcg62>
                            <svg width="1em" height="1em" viewBox="0 0 24 24" data-icon="arrow-right">
                                <symbol id="ai:local:arrow-right">
                                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                       stroke-width="2">
                                        <path stroke-dasharray="20" stroke-dashoffset="20" d="M3 12h17.5">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.3s"
                                                     values="20;0"/>
                                        </path>
                                        <path stroke-dasharray="12" stroke-dashoffset="12" d="m21 12-7 7m7-7-7-7">
                                            <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.3s"
                                                     dur="0.2s" values="12;0"/>
                                        </path>
                                    </g>
                                </symbol>
                                <use xlink:href="#ai:local:arrow-right"></use>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </footer>
</main>
<script src="./assets/js/jquery-3.7.1.js"></script>

<script>
    $(document).ready(function () {
        removeParam('error');
        removeParam('success');
        removeParam('warning');
        setTimeout(function () {
            $('.alert').fadeOut(500)
            // alert(myUrl)
        }, 5000)
    })

    function removeParam(parameter) {
        var url = window.location.href;
        var urlparts = url.split('?');

        if (urlparts.length >= 2) {
            var urlBase = urlparts.shift();
            var queryString = urlparts.join('?');

            var prefix = encodeURIComponent(parameter) + '=';
            var pars = queryString.split(/[&;]/g);
            for (var i = pars.length; i-- > 0;)
                if (pars[i].lastIndexOf(prefix, 0) !== -1)
                    pars.splice(i, 1);
            url = urlBase + '?' + pars.join('&');
            window.history.pushState('', document.title, url);
        }
        return url;
    }

</script>
</body>
</html>