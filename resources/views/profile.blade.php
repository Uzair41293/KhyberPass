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

        .profile {
            background-color: #fec73f;
            padding-left: 10px;
            border-radius: 5px;

        }

        .profile h5 {
            color: #fff;
            font-size: 24px;
            font-weight: 700;

        }

        label {
            width: 100px;
        }

        .inputs {
            margin: 10px 0px;
        }

        .btn-delete {
            background-color: red;
            color: #fff;
        }

        .btn-register {
            background-color: green;
            color: #fff;
        }

        .btn-update {
            background-color: red;
            color: #fff;
        }

        .btn-refer {
            background-color: green;
            color: #fff;
        }

        .btn:hover {
            color: #ffffff;
        }

        header {
            background-color: transparent;
            padding: 0px;
            transition: all 0.4s ease 0s;
            height: auto;
            display: grid;
            align-items: center;
            /* box-shadow: 0 3px 9px rgb(0 0 0 / 5%); */
        }

        nav {
            padding: 0px !important;
            margin: 0px !important;
        }

        .mainButtons button {
            width: 200px;
        }

    </style>
</head>

<body>
    @include('profilehtml')




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



        function addCustomer() {
            var customerName = document.getElementById("customerName").value;
            var address = document.getElementById("address").value;
            var contact = document.getElementById("contact").value;
            var refID = document.getElementById("refID").value;
            var rank = document.getElementById("rank").value;
            var addCustomer = [customerName, address, contact, refID, rank];

            var AC = JSON.stringify(addCustomer);
    
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Customer " + this.responseText + " is Added");
                }
            };
            
            // var MenuID=$('#Menus').find(":selected").val();
            xhttp.open("GET", "./addCustomer/" + AC, true);
            xhttp.send();
            
        }




    </script>

</body>

</html>
