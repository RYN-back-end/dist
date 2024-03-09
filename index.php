<!DOCTYPE html>
<html lang="en">
<head data-capo="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>AtheleteZone</title>
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
            font-family: Poppins, '_font_fallback_251568671161', sans-serif;
        }

        @font-face {
            font-family: '_font_fallback_251568671161';
            size-adjust: 105.79%;
            src: local('Arial');
            ascent-override: 88.38%;
            descent-override: 23.63%;
            line-gap-override: 0.00%;
        }</style>
    <link rel="stylesheet" href="./assets/css/addWorkout-Vev6MoTs.css">
    <style>.hero {
            height: 100vh
        }

        .hero .backdrop, .hero .backdrop:after {
            height: 100%;
            width: 100%
        }

        .hero .backdrop:after {
            background: #020c1933;
            content: "";
            inset: 0;
            position: absolute
        }

        .hero .detailsHero {
            max-width: 100%;
            padding-top: 30vh;
            width: 600px
        }

        .hero .detailsHero h1 {
            color: #020c19;
            line-height: 1.4
        }

        .hero .detailsHero h1 span {
            color: #4795c3
        }

        .hero .detailsHero .buttonLogin small, .hero .detailsHero p {
            opacity: .8
        }

        .hero .detailsHero .buttonLogin small a {
            color: #00275b
        }

        .recommend .grid-system {
            gap: 20px 10px;
            grid-template-columns:repeat(auto-fill, minmax(350px, auto));
            justify-content: center
        }

        .recommend {
            margin-top: 8vh
        }

        .recommend .grid-system .card {
            color: #020c19;
            transition: .25s ease-in-out
        }

        .recommend .grid-system .card .imgCard {
            aspect-ratio: 1.5;
            max-width: 100%;
            overflow: hidden;
            width: 400px
        }

        @media (max-width: 991px) {
            .recommend .grid-system .card .imgCard {
                aspect-ratio: 1.5;
                width: 600px
            }
        }

        .recommend .grid-system .card .imgCard:after {
            background: #ffffff4d;
            border-radius: 8px;
            content: "";
            height: 280px;
            inset: 0;
            position: absolute;
            transition: .5s ease-in-out;
            width: 0
        }

        .recommend .grid-system .card .imgCard img {
            transition: 1s ease-in-out
        }

        .recommend .grid-system .card p {
            opacity: .8
        }

        .recommend .grid-system .card:hover {
            background-color: #fff;
            box-shadow: 0 2px 1.25rem #020c194d;
            transform: scale(1.025)
        }

        .recommend .grid-system .card:hover .imgCard:after {
            width: 100%
        }

        .recommend .grid-system .card:hover .imgCard img {
            transform: scale(1.3)
        }

        .recommend .grid-system .card:hover h2 {
            color: #4795c3
        }

        .AE_Scrolling.fade-in-down.visible, .AE_Scrolling.fade-in-left.visible, .AE_Scrolling.fade-in-right.visible, .AE_Scrolling.fade-in-up.visible, .AE_Scrolling.fade-in.visible, .AE_Scrolling.slide-down.visible, .AE_Scrolling.slide-left.visible, .AE_Scrolling.slide-right.visible, .AE_Scrolling.slide-up.visible, .AE_Scrolling.zoom-in-down.visible, .AE_Scrolling.zoom-in-left.visible, .AE_Scrolling.zoom-in-right.visible, .AE_Scrolling.zoom-in.visible {
            opacity: 1;
            transform: translateY(0);
            transform: translate(0)
        }

        .AE_Scrolling.fade-in, .AE_Scrolling.fade-in-down, .AE_Scrolling.fade-in-left, .AE_Scrolling.fade-in-right, .AE_Scrolling.fade-in-up, .AE_Scrolling.slide-down, .AE_Scrolling.slide-left, .AE_Scrolling.slide-right, .AE_Scrolling.slide-up, .AE_Scrolling.zoom-in, .AE_Scrolling.zoom-in-down, .AE_Scrolling.zoom-in-left, .AE_Scrolling.zoom-in-right {
            opacity: 0
        }

        .AE_Scrolling.fade-in {
            transform: translateY(20px)
        }

        .AE_Scrolling.fade-in-down {
            transform: translateY(-100px)
        }

        .AE_Scrolling.fade-in-up {
            transform: translateY(100px)
        }

        .AE_Scrolling.fade-in-left {
            transform: translate(-100px)
        }

        .AE_Scrolling.fade-in-right {
            transform: translate(100px)
        }

        .AE_Scrolling.slide-up {
            transform: translateY(100px)
        }

        .AE_Scrolling.slide-down {
            transform: translateY(-100px)
        }

        .AE_Scrolling.slide-left {
            transform: translate(-100px)
        }

        .AE_Scrolling.slide-right {
            transform: translate(100px)
        }

        .AE_Scrolling.zoom-in {
            transform: scale3d(.1, .1, .1);
            transform-origin: center bottom
        }

        .AE_Scrolling.zoom-in-down {
            transform: translateY(-100px) scale3d(.1, .1, .1);
            transform-origin: center bottom
        }

        .AE_Scrolling.zoom-in-left {
            transform: translate(-100px) scale3d(.1, .1, .1);
            transform-origin: left center
        }

        .AE_Scrolling.zoom-in-right {
            transform: translate(100px) scale3d(.1, .1, .1);
            transform-origin: right center
        }

        .mainHeading {
            color: #4795c3;
            padding-bottom: 8vh
        }

        .mainHeading h2 {
            -webkit-text-decoration: underline wavy #4795c3 4px;
            text-decoration: underline wavy #4795c3 4px;
            text-underline-offset: 10px
        }

        .btn-skew[data-astro-cid-6ygtcg62] {
            background-color: #00275b
        }

        .btn-skew[data-astro-cid-6ygtcg62]:before {
            background-color: #4795c3
        }

        header {
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
    <script type="module" src="./assets/js/hoisted-XYW30s_p.js"></script>
    <meta name="description" content="Astro description">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <meta name="generator" content="Astro v4.3.2">
</head>
<body>
<main>
    <header>
        <div class="container">
            <nav class="d-flex align-items-center py-6 justify-space-between"><a href="index.html" class="logo"> <img
                            src="./assets/images/logo-nMkJhfTW_ZQniic.webp" alt="logo for AtheleteZone"
                            class="img-cover"
                            width="705" height="227" loading="lazy" decoding="async"> </a>
                <button type="button" aria-label="menu" aria-expanded="false" aria-controls="mobileResponsive"
                        class="btn icon-nav-base" data-astro-cid-6ygtcg62><span></span><span></span><span></span>
                </button>
                <ul class="navMenu beforeLogin d-flex align-items-center lg-max-d-none">
                    <li class="nav-link pl-10 "><a href="index.html" class="fs-16 capitalize fw-600 relative">
                            AtheleteZone </a>
                    </li>
                    <li class="nav-link pl-10 "><a href="About.html" class="fs-16 capitalize fw-600 relative"> About
                            us </a></li>
                    <li class="nav-link pl-10 "><a href="foodRecommendation.php"
                                                   class="fs-16 capitalize fw-600 relative"> Food Recommendation </a>
                    </li>
                    <li class="nav-link pl-10 "><a href="workOutRecommendation.php"
                                                   class="fs-16 capitalize fw-600 relative"> Workout Recommendation </a>
                    </li>
                    <li class="nav-link pl-10 "><a href="workout.html" class="fs-16 capitalize fw-600 relative">
                            workout </a></li>
                    <li class="nav-link pl-10 "><a href="contact.html" class="fs-16 capitalize fw-600 relative">
                            contact us </a></li>
                </ul>
                <div class="mobileMenu absolute  left-0 " id="mobileResponsive">
                    <ul class="NavMobile beforeLogin d-flex  ">
                        <li class="nav-link  py-6 pl-10"><a href="index.html" class="fs-18 capitalize fw-600 relative ">
                                AtheleteZone </a></li>
                        <li class="nav-link  py-6 pl-10"><a href="About.html"
                                                            class="fs-18 capitalize fw-600 relative "> About us </a>
                        </li>
                        <li class="nav-link  py-6 pl-10"><a href="foodRecommendation.php"
                                                            class="fs-18 capitalize fw-600 relative ">
                                Food Recommendation </a></li>
                        <li class="nav-link  py-6 pl-10"><a href="workOutRecommendation.php"
                                                            class="fs-18 capitalize fw-600 relative ">
                                Workout Recommendation </a></li>
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
    <section class="hero relative" ara-label="hero section"> <!-- backdrop img -->
        <div class="backdrop img absolute top-0 left-0"><img src="./assets/images/banner-3-xQWA-WrI_Z1otzFS.webp"
                                                             alt="banner img" class="img-cover " decoding="async"
                                                             loading="eager" width="1500" height="844"></div>
        <div class="container">
            <div class="detailsHero relative AE_Scrolling fade-in " data-Scrolling-duration="500"
                 data-Scrolling-delay="200"><h1 class="fs-r-96 fw-600 pb-7">
                    Reach your goals
                    <br> <small class="fw-400 capitalize fs-r-48 ">with</small> <span
                            class="fw-700 "> AtheleteZone</span>
                </h1>
                <p class="fs-20 line-normal pb-7">
                    Start setting your goal in a healthy way with our easy-to-use apps, tools, and online support.
                </p>
                <div class="buttonLogin pt-7">
                    <button type="button" aria-label="go to sign up page" class="btn btn-skew round-6 mb-5"
                            data-astro-cid-6ygtcg62><a href="signUp.php" class="px-9 py-7 fs-18 capitalize">
                            Get Started
                        </a></button>
                    <small class="d-block">Already a member ?
                        <a href="signIn.php" class="pl-1 fw-600">Sign in</a> </small></div>
            </div>
        </div>
    </section>
    <section class="recommend overflow-hidden ">
        <div class="mainHeading text-center"><h2 class="fs-r-48 capitalize"> Recommend </h2></div>
        <div class="container">
            <div class="d-grid grid-system">
                <div class="card round-8 AE_Scrolling  fade-in " data-Scrolling-duration="500"
                     data-Scrolling-delay="200">
                    <div class="imgCard round-8 mb-5 relative"><img src="./assets/images/fitness-YpVpIXYt_Z5fgx8.webp"
                                                                    alt=" Nutrient" class="round-8" width="400"
                                                                    height="267" loading="lazy" decoding="async"></div>
                    <h3 class="fs-24 fw-700 line-normal capitalize pl-6"> workouts </h3>
                    <p class="fs-16 pl-6 pb-5 line-normal"> workouts recommendation for healthy life style </p>
                    <button type="button" aria-label="read more" class="btn btn-skew ml-6 mb-5 round-6"
                            data-astro-cid-6ygtcg62><a href="/" aria-label="how calc the Nutrient food"
                                                       class="fs-16 fw-400 capitalize px-5 py-4">
                            read more
                        </a></button>
                </div>
                <div class="card round-8 AE_Scrolling  fade-in " data-Scrolling-duration="500"
                     data-Scrolling-delay="300">
                    <div class="imgCard round-8 mb-5 relative"><img src="./assets/images/cooking-3KatrEbQ_2jeT8h.webp"
                                                                    alt=" Nutrient" class="round-8" width="400"
                                                                    height="267" loading="lazy" decoding="async"></div>
                    <h3 class="fs-24 fw-700 line-normal capitalize pl-6"> Nutrient </h3>
                    <p class="fs-16 pl-6 pb-5 line-normal"> Nutrient recommendation for healthy life style </p>
                    <button type="button" aria-label="read more" class="btn btn-skew ml-6 mb-5 round-6"
                            data-astro-cid-6ygtcg62><a href="/" aria-label="how calc the Nutrient food"
                                                       class="fs-16 fw-400 capitalize px-5 py-4">
                            read more
                        </a></button>
                </div>
                <div class="card round-8 AE_Scrolling  fade-in " data-Scrolling-duration="500"
                     data-Scrolling-delay="400">
                    <div class="imgCard round-8 mb-5 relative"><img src="./assets/images/food-etog6TdL_ZH4N5T.webp"
                                                                    alt=" Nutrient" class="round-8" width="400"
                                                                    height="267" loading="lazy" decoding="async"></div>
                    <h3 class="fs-24 fw-700 line-normal capitalize pl-6"> Food plan </h3>
                    <p class="fs-16 pl-6 pb-5 line-normal"> add your daily food </p>
                    <button type="button" aria-label="read more" class="btn btn-skew ml-6 mb-5 round-6"
                            data-astro-cid-6ygtcg62><a href="/" aria-label="how calc the Nutrient food"
                                                       class="fs-16 fw-400 capitalize px-5 py-4">
                            read more
                        </a></button>
                </div>
                <div class="card round-8 AE_Scrolling  fade-in " data-Scrolling-duration="500"
                     data-Scrolling-delay="500">
                    <div class="imgCard round-8 mb-5 relative"><img src="./assets/images/fitness-YpVpIXYt_Z5fgx8.webp"
                                                                    alt=" Nutrient" class="round-8" width="400"
                                                                    height="267" loading="lazy" decoding="async"></div>
                    <h3 class="fs-24 fw-700 line-normal capitalize pl-6"> workouts </h3>
                    <p class="fs-16 pl-6 pb-5 line-normal"> workouts recommendation for healthy life style </p>
                    <button type="button" aria-label="read more" class="btn btn-skew ml-6 mb-5 round-6"
                            data-astro-cid-6ygtcg62><a href="/" aria-label="how calc the Nutrient food"
                                                       class="fs-16 fw-400 capitalize px-5 py-4">
                            read more
                        </a></button>
                </div>
                <div class="card round-8 AE_Scrolling  fade-in " data-Scrolling-duration="500"
                     data-Scrolling-delay="600">
                    <div class="imgCard round-8 mb-5 relative"><img src="./assets/images/cooking-3KatrEbQ_2jeT8h.webp"
                                                                    alt=" Nutrient" class="round-8" width="400"
                                                                    height="267" loading="lazy" decoding="async"></div>
                    <h3 class="fs-24 fw-700 line-normal capitalize pl-6"> Nutrient </h3>
                    <p class="fs-16 pl-6 pb-5 line-normal"> Nutrient recommendation for healthy life style </p>
                    <button type="button" aria-label="read more" class="btn btn-skew ml-6 mb-5 round-6"
                            data-astro-cid-6ygtcg62><a href="/" aria-label="how calc the Nutrient food"
                                                       class="fs-16 fw-400 capitalize px-5 py-4">
                            read more
                        </a></button>
                </div>
                <div class="card round-8 AE_Scrolling  fade-in " data-Scrolling-duration="500"
                     data-Scrolling-delay="700">
                    <div class="imgCard round-8 mb-5 relative"><img src="./assets/images/food-etog6TdL_ZH4N5T.webp"
                                                                    alt=" Nutrient" class="round-8" width="400"
                                                                    height="267" loading="lazy" decoding="async"></div>
                    <h3 class="fs-24 fw-700 line-normal capitalize pl-6"> Food plan </h3>
                    <p class="fs-16 pl-6 pb-5 line-normal"> add your daily food </p>
                    <button type="button" aria-label="read more" class="btn btn-skew ml-6 mb-5 round-6"
                            data-astro-cid-6ygtcg62><a href="/" aria-label="how calc the Nutrient food"
                                                       class="fs-16 fw-400 capitalize px-5 py-4">
                            read more
                        </a></button>
                </div>
            </div>
        </div>
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
</body>
</html>