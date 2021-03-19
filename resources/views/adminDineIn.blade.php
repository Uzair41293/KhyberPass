<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KHYBER PASS</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link href="//fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style-starter.css')}}">
    <style>
        #more {
            display: none;
        }

        .title-small {
            font-size: 16px;
            line-height: 30px;
            font-weight: 500;
            letter-spacing: .5px;
            color: #aaa;
            display: block;
            text-transform: uppercase;
        }

        .title-big {
            font-size: 44px;
            line-height: 50px;
            font-weight: 500;
            position: relative;
        }

        .w3l-bottom-grids-6 .area-box {
            padding: 50px 40px;
            position: relative;
            z-index: 1;
            border-radius: 8px;
            box-shadow: 0 25px 98px 0 rgba(0, 0, 0, 0.03);
            background-color: var(--bg-color);
            text-align: center;
            height: 530px !important;
        }

        .w3l-bottom-grids-6 .grids-feature span.fa {
            color: var(--primary-color);
            font-size: 30px;
        }

        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .w3l-bottom-grids-6 h4 a.title-head {
            margin-top: 25px;
            display: block;
            color: var(--heading-color);
            font-weight: 500;
            line-height: 1.2;
            margin-bottom: 15px;
            font-size: 26px;
            letter-spacing: 0;
        }

        .dollar {
            font-size: 30px;
            color: #28a745;
        }

        .w3l-bottom-grids-6 a.more {
            font-weight: 500;
            display: inline-block;
            margin-top: 30px;
            font-size: 18px;
            color: var(--heading-color);
        }

        @media only screen and (max-width: 768px) {
            #home img {
                border-radius: 50%;
                height: 300px !important;
                width: 300px !important;
                box-shadow: 0 0 5px #ffffff,
                    0 0 25px#ffffff,
                    0 0 50px #f1c40f,
                    0 0 100px #f1c40f;
            }
        }

        .navbar-brand {
            font-weight: 800;
            font-family: 'Roboto', sans-serif;
        }

        .search-right {
            width: 20% !important;
        }

        .navbar .search-right {
            margin: 0 -51px !important;

        }

        .navbar .search-right a {
            font-weight: 600;
            color: #000000;
        }

        .card {
            border: none !important;
        }


        .mainCont .card {
            position: relative;
            border-radius: 10px;
        }

        .mainCont .card .icon {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #f00;
            transition: 0.7s;
            z-index: 1;
        }

        .mainCont .card:nth-child(1) .icon {
            background: #e07768;
        }

        .mainCont .card:nth-child(2) .icon {
            background: #6eadd4;
        }

        .mainCont .card:nth-child(3) .icon {
            background: #4aada9;
        }


        .mainCont .card .icon .fa {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 80px;
            transition: 0.7s;
            color: #fff;
        }

        i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 80px;
            transition: 0.7s;
            color: #fff;
        }

        .mainCont .card .face {

            height: 200px;
            transition: 0.5s;
        }

        .mainCont .card .face.face1 {
            position: relative;
            background: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1;
            transform: translateY(100px);
        }

        .mainCont .card:hover .face.face1 {
            background: #ff0057;
            transform: translateY(0px);
        }

        .mainCont .card .face.face1 .content {

            opacity: 1;
            transition: 0.5s;
        }

        .mainCont .card:hover .face.face1 .content {
            opacity: 1;
        }

        .mainCont .card .face.face1 .content i {
            max-width: 100px;
        }

        .mainCont .card .face.face2 {
            position: relative;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8);
            transform: translateY(-100px);
        }

        .mainCont .card:hover .face.face2 {
            transform: translateY(0);
        }

        .mainCont .card .face.face2 .content p {
            margin: 0;
            padding: 0;
            text-align: center;
            color: #414141;
        }

        .mainCont .card .face.face2 .content h3 {
            margin: 0 0 10px 0;
            padding: 0;
            color: #fff;
            font-size: 24px;
            text-align: center;
            color: #414141;
        }

        .mainCont a {
            text-decoration: none;
            color: #414141;
        }

        .mainIcon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
        }

        .mainIcon h2 {
            color: #fff;
        }

        .box {
            position: relative;
            transition: all .2s ease-out 0s;
            border: 1px solid #333;
            border-top-left-radius: 10%;
            border-top-right-radius: 10%;

        }

        .box img {
            /* height: auto;
	width: 100%; */
            border-radius: 10%;
        }

        .box-content {
            position: absolute;

            border-top-left-radius: 10%;
            border-top-right-radius: 10%;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0;
            background-color: red;
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease-in-out 0s;
        }

        .box:hover .box-content {
            height: 100%;
            opacity: 1;
        }

        .box-content h3 {
            color: #fff;
            font-weight: 800;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;

        }

        .mainDivs {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .row {
            margin: 10px 0px;
        }

        @media only screen and (max-width: 768px) {
            .newrelative {
                height: auto !important;
            }

            .flex-column {
                flex-direction: row !important;
                justify-content: space-between;
            }

            .spmargin {
                margin-top: 200px !important;
            }

            .box {
                margin: 5px 0px;
            }

        }

    </style>
</head>

<body>
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="index.html">
                        KHYBER PASS
                    </a>
                </h1>

                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mx-lg-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="newmenu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#ContactUs&me">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/sign">Login</a>
                        </li>
                    </ul>
                </div>
                <div class="search-right">
                    <a href="./r" title="search">Refer A Friend</a>


                </div>

                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
            </nav>
        </div>
    </header>
    <section class="spmargin" style="margin-top: 100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="newrelative" style="position: relative; height: 80vh;">
                        <div class="nav flex-column nav-pills" style="position: absolute; bottom: 0%;" id="v-pills-tab"
                            role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                                role="tab" aria-controls="v-pills-home" aria-selected="true">Roof Top</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">Balcony</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages"
                                role="tab" aria-controls="v-pills-messages" aria-selected="false">Second Floor</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">First Floor</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">Ground</a>
                            <a class="nav-link" id="v-pills-Basement-tab" data-toggle="pill" href="#v-pills-Basement"
                                role="tab" aria-controls="v-pills-Basement" aria-selected="false">Basement</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">

                            <div class="row">
                                <div class="col-md-2 wow fadeInLeft">
                                    <div class="box" style="border-color: red !important;">
                                        <a href="#">
                                            <div style="height: 150px; width:150px;">
                                                <div class="mainDivs text-center">
                                                    <h3>Table 1</h3>

                                                </div>
                                                <div class="mystatusDiv" style="position: absolute; text-align: center; bottom: 0%; border-top: 1px solid red; width: 100%; background-color: red;    border-top-left-radius: 10%;
                                                    border-top-right-radius: 10%;  ">
                                                    <h5 style="color: #fff;">Booked</h5>
                                                </div>


                                            </div>
                                            <div class="box-content" style="background-color: red !important;">
                                                <h3 class="title">Title</h3>
                                            </div>

                                        </a>

                                    </div>


                                </div>
                                <div class="col-md-2 wow fadeInLeft">
                                    <div class="box" style="border-color: green !important;">
                                        <a href="#">
                                            <div style="height: 150px; width:150px;">
                                                <div class="mainDivs text-center">
                                                    <h3>Table 2</h3>

                                                </div>
                                                <div class="mystatusDiv" style="position: absolute; text-align: center; bottom: 0%; border-top: 1px solid green; width: 100%; background-color: green;    border-top-left-radius: 10%;
                                                    border-top-right-radius: 10%;  ">
                                                    <h5 style="color: #fff;">Available</h5>
                                                </div>


                                            </div>
                                            <div class="box-content" style="background-color: green !important;">
                                                <h3 class="title">Title</h3>
                                            </div>

                                        </a>

                                    </div>


                                </div>
                                <div class="col-md-2 wow fadeInLeft">
                                    <div class="box border-warning">
                                        <a href="#">
                                            <div style="height: 150px; width:150px;">
                                                <div class="mainDivs text-center">
                                                    <h3>Table 3</h3>

                                                </div>
                                                <div class="mystatusDiv bg-warning" style="position: absolute; text-align: center; bottom: 0%;  width: 100%;    border-top-left-radius: 10%;
                                                    border-top-right-radius: 10%;  ">
                                                    <h5 style="color: #fff;">Reserved</h5>
                                                </div>


                                            </div>
                                            <div class="box-content bg-warning">
                                                <h3 class="title">Title</h3>
                                            </div>

                                        </a>

                                    </div>


                                </div>
                                <div class="col-md-2 wow fadeInLeft">
                                    <div class="box" style="border-color: red !important;">
                                        <a href="#">
                                            <div style="height: 150px; width:150px;">
                                                <div class="mainDivs text-center">
                                                    <h3>Table 1</h3>

                                                </div>
                                                <div class="mystatusDiv" style="position: absolute; text-align: center; bottom: 0%; border-top: 1px solid red; width: 100%; background-color: red;    border-top-left-radius: 10%;
                                                    border-top-right-radius: 10%;  ">
                                                    <h5 style="color: #fff;">Booked</h5>
                                                </div>


                                            </div>
                                            <div class="box-content" style="background-color: red !important;">
                                                <h3 class="title">Title</h3>
                                            </div>

                                        </a>

                                    </div>


                                </div>
                                <div class="col-md-2 wow fadeInLeft">
                                    <div class="box" style="border-color: green !important;">
                                        <a href="#">
                                            <div style="height: 150px; width:150px;">
                                                <div class="mainDivs text-center">
                                                    <h3>Table 2</h3>

                                                </div>
                                                <div class="mystatusDiv" style="position: absolute; text-align: center; bottom: 0%; border-top: 1px solid green; width: 100%; background-color: green;    border-top-left-radius: 10%;
                                                    border-top-right-radius: 10%;  ">
                                                    <h5 style="color: #fff;">Available</h5>
                                                </div>


                                            </div>
                                            <div class="box-content" style="background-color: green !important;">
                                                <h3 class="title">Title</h3>
                                            </div>

                                        </a>

                                    </div>


                                </div>
                                <div class="col-md-2 wow fadeInLeft">
                                    <div class="box border-warning">
                                        <a href="#">
                                            <div style="height: 150px; width:150px;">
                                                <div class="mainDivs text-center">
                                                    <h3>Table 3</h3>

                                                </div>
                                                <div class="mystatusDiv bg-warning" style="position: absolute; text-align: center; bottom: 0%;  width: 100%;    border-top-left-radius: 10%;
                                                    border-top-right-radius: 10%;  ">
                                                    <h5 style="color: #fff;">Reserved</h5>
                                                </div>


                                            </div>
                                            <div class="box-content bg-warning">
                                                <h3 class="title">Title</h3>
                                            </div>

                                        </a>

                                    </div>


                                </div>


                            </div>




                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">


                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">...
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">...
                        </div>
                        <div class="tab-pane fade" id="v-pills-Basement" role="tabpanel"
                            aria-labelledby="v-pills-Basement-tab">...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-level-up" aria-hidden="true"></span>
    </button>
    <script>
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

    </script>

    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>

    <script src="{{asset('assets/js/theme-change.js')}}"></script>
    <script>
        function autoType(elementClass, typingSpeed) {
            var thhis = $(elementClass);
            thhis.css({
                "position": "relative",
                "display": "inline-block"
            });
            thhis.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
            thhis = thhis.find(".text-js");
            var text = thhis.text().trim().split('');
            var amntOfChars = text.length;
            var newString = "";
            thhis.text("|");
            setTimeout(function () {
                thhis.css("opacity", 1);
                thhis.prev().removeAttr("style");
                thhis.text("");
                for (var i = 0; i < amntOfChars; i++) {
                    (function (i, char) {
                        setTimeout(function () {
                            newString += char;
                            thhis.text(newString);
                        }, i * typingSpeed);
                    })(i + 1, text[i]);
                }
            }, 1500);
        }

        $(document).ready(function () {

            autoType(".type-js", 200);
        });

    </script>

    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

            $('.popup-with-move-anim').magnificPopup({
                type: 'inline',

                fixedContentPos: false,
                fixedBgPos: true,

                overflowY: 'auto',

                closeBtnInside: true,
                preloader: false,

                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-slide-bottom'
            });
        });

    </script>

    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>

    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });

    </script>

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>


    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Order Now";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }

    </script>
</body>

</html>
